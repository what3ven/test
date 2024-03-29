<?php

namespace ContainerVCX2pPJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Route_DefaultGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.route.default_generator' shared service.
     *
     * @return \Sonata\AdminBundle\Route\DefaultRouteGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Route/RouteGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Route/DefaultRouteGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Route/RoutesCache.php';

        return $container->privates['sonata.admin.route.default_generator'] = new \Sonata\AdminBundle\Route\DefaultRouteGenerator(($container->services['router'] ?? $container->getRouterService()), ($container->privates['sonata.admin.route.cache'] ?? ($container->privates['sonata.admin.route.cache'] = new \Sonata\AdminBundle\Route\RoutesCache(($container->targetDir.''.'/sonata/admin'), true))));
    }
}
