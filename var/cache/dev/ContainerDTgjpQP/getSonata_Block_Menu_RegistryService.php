<?php

namespace ContainerDTgjpQP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Block_Menu_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.block.menu.registry' shared service.
     *
     * @return \Sonata\BlockBundle\Menu\MenuRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Menu/MenuRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Menu/MenuRegistry.php';

        $container->services['sonata.block.menu.registry'] = $instance = new \Sonata\BlockBundle\Menu\MenuRegistry();

        $instance->add('sonata_admin_sidebar');

        return $instance;
    }
}
