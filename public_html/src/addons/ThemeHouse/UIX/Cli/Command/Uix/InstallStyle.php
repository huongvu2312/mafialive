<?php

namespace ThemeHouse\Uix\Cli\Command\Uix;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use ThemeHouse\UIX\Util\UIX;
use XF\Entity\Style;
use XF\Util\File;

class InstallStyle extends Command
{
    protected function configure()
    {
        $this
            ->setName('uix:install-style')
            ->addArgument(
                'id',
                InputArgument::REQUIRED,
                'Product ID'
            )
            ->addArgument(
                'child-style-xml',
                InputArgument::OPTIONAL,
                'Child Style XML Name'
            )
            ->setDescription(
                'Imports templates, style properties, options, phrases, etc from all add-ons and styles'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var \ThemeHouse\UIX\Service\Style\Fetcher $styleFetcher */
        $styleFetcher = \XF::service('ThemeHouse\UIX:Style\Fetcher');

        $productId = $input->getArgument('id');
        $childStyleXml = $input->getArgument('child-style-xml');
        $output = $styleFetcher->fetch($productId);
        $product = $output['payload']['product'];
        $versions = $output['payload']['versions'];
        $latestVersion = $versions[0];

        $options = \XF::options();
        $uix = new UIX;

        $freshInstall = true;

        $versionId = $latestVersion['id'];
        $tempStyleDir = \XF\Util\File::getTempDir() . DIRECTORY_SEPARATOR . 'style-' . \XF::$time;
        $version = false;

        foreach ($versions as $thisVersion) {
            if ($thisVersion['id'] === $versionId) {
                $version = $thisVersion;
                break;
            }
        }

        if (!$version) {
            File::cleanUpTempFiles();
            return $this->error('The version you have requested was not found');
        }

        /** @var \ThemeHouse\UIX\Service\Style\Downloader $styleDownloader */
        $styleDownloader = \XF::service('ThemeHouse\UIX:Style\Downloader');
        /** @var \ThemeHouse\UIX\Service\Style\Extractor $styleExtractor */
        $styleExtractor = \XF::service('ThemeHouse\UIX:Style\Extractor');

        $childStyles = false;
        $childStylePaths = [];
        $downloadResponse = $styleDownloader->download($product['id'], $versionId);
        if ($downloadResponse['status'] === 'error') {
            File::cleanUpTempFiles();
            return $this->error($downloadResponse['error']);
        }

        $extractorResponse = $styleExtractor->extract($downloadResponse['path'], $tempStyleDir);
        if ($extractorResponse['status'] === 'error') {
            File::cleanUpTempFiles();
            return $this->error($extractorResponse['error']);
        }

        $childStylePaths = [];
        $childStyleNames = \XF::repository('ThemeHouse\UIX:StyleInstaller')->getStyleNamesFromXmls($extractorResponse['path'], $extractorResponse['childStyles']);
        if ($childStyleXml) {
            $childStylePath = $tempStyleDir . DIRECTORY_SEPARATOR . 'child_xmls' . DIRECTORY_SEPARATOR . $childStyleXml;
            if (isset($childStyleNames[$childStyleXml]) && @file_exists($childStylePath)) {
                $childStylePaths[] =  $childStylePath;
            }
        }

        /** @var \ThemeHouse\UIX\Service\Style\Mover $styleMover */
        $styleMover = \XF::service('ThemeHouse\UIX:Style\Mover', $tempStyleDir, \XF::getRootDirectory());
        $moverResponse = $styleMover->move();

        if ($moverResponse['status'] === 'error') {
            return 0;
        }

        /** @var \ThemeHouse\UIX\Service\Style\Installer $styleInstaller */
        $styleInstaller = \XF::service('ThemeHouse\UIX:Style\Installer', $product, $version);
        $installResponse = $styleInstaller->install($tempStyleDir, $childStylePaths, $childStyleNames);
        if ($installResponse['status'] === 'error') {
            return 0;
        }


        File::cleanUpTempFiles();

        $styleFinder = \XF::finder('XF:Style');
        /** @var Style $style */
        $style = $styleFinder->order('style_id', 'desc')->fetchOne();

        /** @var \XF\Repository\Option $optionRepo */
        $optionRepo = \XF::repository('XF:Option');
        $optionRepo->updateOption('defaultStyleId', $style->style_id);
        return 0;
    }
}