<?php

namespace ContainerNgftVjp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_33zT23Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.33z_t23' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.33z_t23'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'author' => ['privates', '.errored..service_locator.33z_t23.App\\Entity\\Author', NULL, 'Cannot autowire service ".service_locator.33z_t23": it references class "App\\Entity\\Author" but no such service exists.'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'author' => 'App\\Entity\\Author',
            'manager' => '?',
        ]);
    }
}
