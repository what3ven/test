<?php

namespace ContainerVCX2pPJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Form_Type_ArrayService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.form.type.array' shared service.
     *
     * @return \Sonata\Form\Type\ImmutableArrayType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/form-extensions/src/Type/ImmutableArrayType.php';

        return $container->privates['sonata.form.type.array'] = new \Sonata\Form\Type\ImmutableArrayType();
    }
}
