<?php
// FROM HASH: 103bc191b36b8a6ef9c4ab9be24deb02
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="block" data-widget-definition="th_navigation">
    <div class="block-container block-container--noStripRadius">
        <h3 class="block-minorHeader">Quick Navigation</h3>
        <div class="block-body">
            ';
	if ($__vars['xf']['options']['homePageUrl']) {
		$__finalCompiled .= '
            <a class="blockLink rippleButton" href="' . $__templater->escape($__vars['xf']['options']['homePageUrl']) . '">' . 'Trang chủ' . '</a>
            ';
	}
	$__finalCompiled .= '
            <a class="blockLink rippleButton" href="' . $__templater->fn('link', array('forums', ), true) . '">' . 'Diễn đàn' . '</a>
            ';
	if ($__templater->method($__vars['xf']['visitor'], 'canUseContactForm', array())) {
		$__finalCompiled .= '
                ';
		if ($__vars['xf']['options']['contactUrl']['type'] == 'default') {
			$__finalCompiled .= '
                    <a class="blockLink rippleButton" href="' . $__templater->fn('link', array('misc/contact', ), true) . '" data-xf-click="overlay">' . 'Liên hệ' . '</a>
                ';
		} else if ($__vars['xf']['options']['contactUrl']['type'] == 'custom') {
			$__finalCompiled .= '
                    <a class="blockLink rippleButton" href="' . $__templater->escape($__vars['xf']['options']['contactUrl']['custom']) . '" data-xf-click="' . ($__vars['xf']['options']['contactUrl']['overlay'] ? 'overlay' : '') . '">' . 'Liên hệ' . '</a>
                ';
		}
		$__finalCompiled .= '
            ';
	}
	$__finalCompiled .= '
        </div>
    </div>
</div>';
	return $__finalCompiled;
});