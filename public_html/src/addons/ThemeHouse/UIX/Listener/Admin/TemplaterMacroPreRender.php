<?php

namespace ThemeHouse\UIX\Listener\Admin;

use XF\Template\Templater;

class TemplaterMacroPreRender
{
    public static function optionMacrosOptionFormBlock(Templater $templater, &$type, &$template, &$name, array &$arguments, array &$globalVars)
    {
        if ($arguments['group']->group_id == 'th_uix') {
            $template = 'thuix_options';
        }
    }
}
