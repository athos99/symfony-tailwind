<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return function(ContainerConfigurator $container): void {

    $services = $container->services();
    $services->set(Athos99\IpsumBundle\Service\Ipsum::class)
        ->arg('$unicornsAreReal', true)
        ->arg('$minSunshine', 3)
    ;
};
