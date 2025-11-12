<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return function(ContainerConfigurator $container): void {
    $services = $container->services();
    $services->set( Athos99\TestBundle\Service\Test::class)
        // ->arg('$param1', 's1')
        // ->arg('$param2', 's2')
    ;
};
