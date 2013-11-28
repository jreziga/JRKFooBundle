<?php

namespace JRK\FooBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface {

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder() {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('jrk_foo');

		$rootNode
		->children()
		->scalarNode('key')->end()
		->scalarNode('login')->end()
		->end();

        return $treeBuilder;
    }

}
