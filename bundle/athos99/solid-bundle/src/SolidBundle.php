<?php

namespace Athos99\SolidBundle;

use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SolidBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $bundle = $config['solid'] ?? [];
        // Load services
        $container->import(__DIR__ . '/../config/services.php');
        $container->parameters()->set('dgarden.solid.name_length', $bundle['name_length']);
    }


    protected string $extensionAlias = 'athos99';

    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
            ->arrayNode('solid')
            ->children()
            ->integerNode('name_length')->defaultValue(255)
            ->end()
            ->end()
            ->addDefaultsIfNotSet()
            ->end()
        ;
    }
}
