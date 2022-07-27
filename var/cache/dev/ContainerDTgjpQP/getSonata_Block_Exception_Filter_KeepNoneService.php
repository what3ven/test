<?php

namespace ContainerDTgjpQP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Block_Exception_Filter_KeepNoneService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.block.exception.filter.keep_none' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Filter/KeepNoneFilter.php';

        return $container->services['sonata.block.exception.filter.keep_none'] = new \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter();
    }
}
