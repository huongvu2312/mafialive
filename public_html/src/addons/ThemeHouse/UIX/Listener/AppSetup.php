<?php

namespace ThemeHouse\UIX\Listener;

use XF\App;
use XF\Container;

class AppSetup
{
    public static function appSetup(App $app)
    {
        $container = $app->container();

        $container->set('uixManifest.renderer', function (Container $c) use ($app) {
            return new \ThemeHouse\UIX\Manifest\Renderer($app);
        }, false);
    }
}
