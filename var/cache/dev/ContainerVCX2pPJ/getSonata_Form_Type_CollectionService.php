<?php

namespace ContainerVCX2pPJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Form_Type_CollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.form.type.collection' shared service.
     *
     * @return \Sonata\Form\Type\CollectionType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/form-extensions/src/Type/CollectionType.php';

        return $container->privates['sonata.form.type.collection'] = new \Sonata\Form\Type\CollectionType();
    }
}
