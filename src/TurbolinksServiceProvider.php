<?php

namespace Flagship\Components\Turbolinks;

// Silex Centric Requires
use Pimple\Container;
use Pimple\ServiceProviderInterface;
// Lib Requires
use Helthe\Component\Turbolinks\EventListener\TurbolinksListener;
use Helthe\Component\Turbolinks\Turbolinks;

class TurbolinksServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app->before(function () use ($app) {
            $app['dispatcher']->addSubscriber(new TurbolinksListener(new Turbolinks()));
        });
    }
}
