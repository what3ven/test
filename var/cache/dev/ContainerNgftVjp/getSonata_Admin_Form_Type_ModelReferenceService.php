<?php

namespace ContainerNgftVjp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Form_Type_ModelReferenceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.form.type.model_reference' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelReferenceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/ModelReferenceType.php';

        return $container->privates['sonata.admin.form.type.model_reference'] = new \Sonata\AdminBundle\Form\Type\ModelReferenceType();
    }
}
