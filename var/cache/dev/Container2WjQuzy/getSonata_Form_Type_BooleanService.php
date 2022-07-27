<?php

namespace Container2WjQuzy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Form_Type_BooleanService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.form.type.boolean' shared service.
     *
     * @return \Sonata\Form\Type\BooleanType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/form-extensions/src/Type/BooleanType.php';

        return $container->privates['sonata.form.type.boolean'] = new \Sonata\Form\Type\BooleanType();
    }
}
