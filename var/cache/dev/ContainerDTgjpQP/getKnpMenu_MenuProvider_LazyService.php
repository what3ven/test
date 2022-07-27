<?php

namespace ContainerDTgjpQP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpMenu_MenuProvider_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'knp_menu.menu_provider.lazy' shared service.
     *
     * @return \Knp\Menu\Provider\LazyProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-menu/src/Knp/Menu/Provider/LazyProvider.php';

        return $container->privates['knp_menu.menu_provider.lazy'] = new \Knp\Menu\Provider\LazyProvider(['sonata_admin_sidebar' => #[\Closure(name: 'sonata.admin.sidebar_menu', class: 'Knp\\Menu\\MenuItem')] function () use ($container) {
            return ($container->privates['sonata.admin.sidebar_menu'] ?? $container->load('getSonata_Admin_SidebarMenuService'));
        }]);
    }
}
