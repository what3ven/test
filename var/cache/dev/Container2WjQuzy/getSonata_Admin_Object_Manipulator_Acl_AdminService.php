<?php

namespace Container2WjQuzy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Object_Manipulator_Acl_AdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.object.manipulator.acl.admin' shared service.
     *
     * @return \Sonata\AdminBundle\Util\AdminObjectAclManipulator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Util/AdminObjectAclManipulator.php';

        return $container->privates['sonata.admin.object.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminObjectAclManipulator(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')), 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }
}