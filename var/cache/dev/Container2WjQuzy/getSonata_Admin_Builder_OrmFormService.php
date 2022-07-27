<?php

namespace Container2WjQuzy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Builder_OrmFormService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.builder.orm_form' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\FormContractor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/BuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/FormContractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/AbstractFormContractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Builder/FormContractor.php';

        return $container->privates['sonata.admin.builder.orm_form'] = new \Sonata\DoctrineORMAdminBundle\Builder\FormContractor(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')), ($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')));
    }
}