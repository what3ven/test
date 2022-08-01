<?php

namespace ContainerVCX2pPJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.doctrine_orm.form.type.choice_field_mask' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/Type/ChoiceFieldMaskType.php';

        return $container->privates['sonata.admin.doctrine_orm.form.type.choice_field_mask'] = new \Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType();
    }
}
