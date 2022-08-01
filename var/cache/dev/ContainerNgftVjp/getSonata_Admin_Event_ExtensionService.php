<?php

namespace ContainerNgftVjp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Event_ExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.event.extension' shared service.
     *
     * @return \Sonata\AdminBundle\Event\AdminEventExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AdminExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AbstractAdminExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Event/AdminEventExtension.php';

        return $container->privates['sonata.admin.event.extension'] = new \Sonata\AdminBundle\Event\AdminEventExtension(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
