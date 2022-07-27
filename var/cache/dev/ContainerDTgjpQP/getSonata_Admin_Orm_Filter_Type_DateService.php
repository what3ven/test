<?php

namespace ContainerDTgjpQP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Orm_Filter_Type_DateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.orm.filter.type.date' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Search/ChainableFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/GroupableConditionAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/Filter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/AbstractDateFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/DateFilter.php';

        $container->factories['service_container']['sonata.admin.orm.filter.type.date'] = function () use ($container) {
            return new \Sonata\DoctrineORMAdminBundle\Filter\DateFilter();
        };

        return $container->factories['service_container']['sonata.admin.orm.filter.type.date']();
    }
}
