<?php

namespace ContainerVCX2pPJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Form\AuthorType' shared autowired service.
     *
     * @return \App\Form\AuthorType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/AuthorType.php';

        return $container->services['App\\Form\\AuthorType'] = new \App\Form\AuthorType();
    }
}
