<?php

namespace ContainerNgftVjp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AuthorController' shared autowired service.
     *
     * @return \App\Controller\AuthorController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AuthorController.php';

        $container->services['App\\Controller\\AuthorController'] = $instance = new \App\Controller\AuthorController(($container->services['App\\Repository\\AuthorRepository'] ?? $container->load('getAuthorRepositoryService')), ($container->services['App\\Repository\\BookRepository'] ?? $container->load('getBookRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\AuthorController', $container));

        return $instance;
    }
}
