<?php

namespace ContainerDTgjpQP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MvtMpk_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MvtMpk.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MvtMpk.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AuthorController::createAction' => ['privates', '.service_locator.EUK.BlZ', 'get_ServiceLocator_EUK_BlZService', true],
            'App\\Controller\\AuthorController::deleteAction' => ['privates', '.service_locator.33z_t23', 'get_ServiceLocator_33zT23Service', true],
            'App\\Controller\\AuthorController::editAction' => ['privates', '.service_locator.33z_t23', 'get_ServiceLocator_33zT23Service', true],
            'App\\Controller\\BookController::createAction' => ['privates', '.service_locator.qUvaRvS', 'get_ServiceLocator_QUvaRvSService', true],
            'App\\Controller\\BookController::deleteAction' => ['privates', '.service_locator.SbqDS7g', 'get_ServiceLocator_SbqDS7gService', true],
            'App\\Controller\\BookController::editAction' => ['privates', '.service_locator.SbqDS7g', 'get_ServiceLocator_SbqDS7gService', true],
            'App\\Controller\\BookController::indexAction' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\AuthorController:createAction' => ['privates', '.service_locator.EUK.BlZ', 'get_ServiceLocator_EUK_BlZService', true],
            'App\\Controller\\AuthorController:deleteAction' => ['privates', '.service_locator.33z_t23', 'get_ServiceLocator_33zT23Service', true],
            'App\\Controller\\AuthorController:editAction' => ['privates', '.service_locator.33z_t23', 'get_ServiceLocator_33zT23Service', true],
            'App\\Controller\\BookController:createAction' => ['privates', '.service_locator.qUvaRvS', 'get_ServiceLocator_QUvaRvSService', true],
            'App\\Controller\\BookController:deleteAction' => ['privates', '.service_locator.SbqDS7g', 'get_ServiceLocator_SbqDS7gService', true],
            'App\\Controller\\BookController:editAction' => ['privates', '.service_locator.SbqDS7g', 'get_ServiceLocator_SbqDS7gService', true],
            'App\\Controller\\BookController:indexAction' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\AuthorController::createAction' => '?',
            'App\\Controller\\AuthorController::deleteAction' => '?',
            'App\\Controller\\AuthorController::editAction' => '?',
            'App\\Controller\\BookController::createAction' => '?',
            'App\\Controller\\BookController::deleteAction' => '?',
            'App\\Controller\\BookController::editAction' => '?',
            'App\\Controller\\BookController::indexAction' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AuthorController:createAction' => '?',
            'App\\Controller\\AuthorController:deleteAction' => '?',
            'App\\Controller\\AuthorController:editAction' => '?',
            'App\\Controller\\BookController:createAction' => '?',
            'App\\Controller\\BookController:deleteAction' => '?',
            'App\\Controller\\BookController:editAction' => '?',
            'App\\Controller\\BookController:indexAction' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
