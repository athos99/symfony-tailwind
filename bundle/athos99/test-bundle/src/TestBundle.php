<?php

namespace Athos99\TestBundle;

use Athos99\TestBundle\Service\Test;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class TestBundle extends AbstractBundle
{

    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        // load an XML, PHP or YAML file
     //   $container->import('../config/services.php');
 $services = $container->services();
    $services->set( Test::class);


 $builder->getDefinition( Service\Test::class)
            ->setArgument('$param1', $config['param1'])
            ->setArgument('$param2', $config['param2'])

        // you can also add or replace parameters and services
        // $services =  $container->services();
        // $services->get('Athos99\TestBundle\Service\Test')
        //     ->arg('$param1', '%test.param1%')
        //     ->arg('$param2', '%test.param2%')
         ;
    }


    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()

            ->stringNode('param1')->defaultValue('val1')->end()
            ->stringNode('param2')->defaultValue('val1')->end()
            ->end()
        ;
    }
}
