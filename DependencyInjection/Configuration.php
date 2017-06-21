<?php

namespace Draw\DrawBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $treeBuilder->root('draw_bundle')
            ->children()
                ->booleanNode('serialization_add_class')->defaultFalse()->end()
                ->booleanNode('use_api_exception_subscriber')->defaultTrue()->end()
                ->booleanNode('use_doctrine_repository_factory')->defaultTrue()->end()
                ->scalarNode('self_link_listener_active')->defaultFalse()->end()
            ->end();

        return $treeBuilder;
    }
}
