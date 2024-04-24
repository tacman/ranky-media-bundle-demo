<?php

# config/routes/ranky_media.php
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routes) {
    $routes
        ->import('@RankyMediaBundle/config/routes.php')
        ->prefix('/admin')
    ;
};
