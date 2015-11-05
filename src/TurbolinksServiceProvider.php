<?php

namespace Flagship\Components\Turbolinks;

// Silex Centric Requires
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Silex\Api\BootableProviderInterface;
use Silex\Application;
// Lib Requires
use Helthe\Component\Turbolinks\EventListener\TurbolinksListener;
use Helthe\Component\Turbolinks\Turbolinks;

class TurbolinksServiceProvider implements ServiceProviderInterface, BootableProviderInterface
{
    public function register(Container $app)
    {
        $app['turbolinks.listener'] = function () {
            return new TurbolinksListener(new Turbolinks());
        };
    }

    public function boot(Application $app)
    {
        $app['dispatcher']->addSubscriber($app['turbolinks.listener']);
    }
}
