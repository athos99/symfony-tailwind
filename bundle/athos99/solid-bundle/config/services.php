<?php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return function (ContainerConfigurator $container) {
   $bundleDir = realpath(__DIR__.'/..');

   $services = $container->services()
       ->defaults()
           ->autowire()
           ->autoconfigure();

   $services->load('Athos99\SolidBundle\EventListener\\', "$bundleDir/src/EventListener");
};