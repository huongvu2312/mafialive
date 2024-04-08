<?php

namespace ThemeHouse\UIX\Listener\Pub;

use ThemeHouse\UIX\Util\UIX;
use XF\Template\Templater;

class TemplaterMacroPreRender
{
    public static function helperJsGlobalBody(Templater $templater, &$type, &$template, &$name, array &$arguments, array &$globalVars)
    {
        $uix = new UIX();

        $globalVars['uix_backstretchImages'] = $uix->getBackstretchImages($templater);
    }
}
