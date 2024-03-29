<?php

namespace ContainerNgftVjp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_SidebarMenuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.sidebar_menu' shared service.
     *
     * @return \Knp\Menu\MenuItem
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/ItemInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/MenuItem.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Menu/MenuBuilder.php';

        return $container->privates['sonata.admin.sidebar_menu'] = (new \Sonata\AdminBundle\Menu\MenuBuilder(($container->privates['sonata.admin.pool'] ?? $container->getSonata_Admin_PoolService()), ($container->services['knp_menu.factory'] ?? $container->load('getKnpMenu_FactoryService')), ($container->privates['knp_menu.menu_provider.chain'] ?? $container->getKnpMenu_MenuProvider_ChainService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService())))->createSidebarMenu();
    }
}
