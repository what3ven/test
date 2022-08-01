<?php

namespace ContainerVCX2pPJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Builder_OrmDatagridService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.builder.orm_datagrid' shared service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/BuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/DatagridBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Builder/DatagridBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/FieldDescription/TypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/FieldDescription/TypeGuesserChain.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/FieldDescription/FilterTypeGuesser.php';

        return $container->privates['sonata.admin.builder.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder(($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')), new \Sonata\AdminBundle\Filter\FilterFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Sonata\\DoctrineORMAdminBundle\\Filter\\BooleanFilter' => [false, 'sonata.admin.orm.filter.type.boolean', 'getSonata_Admin_Orm_Filter_Type_BooleanService', true],
            'Sonata\\DoctrineORMAdminBundle\\Filter\\CallbackFilter' => [false, 'sonata.admin.orm.filter.type.callback', 'getSonata_Admin_Orm_Filter_Type_CallbackService', true],
            'Sonata\\DoctrineORMAdminBundle\\Filter\\ChoiceFilter' => [false, 'sonata.admin.orm.filter.type.choice', 'getSonata_Admin_Orm_Filter_Type_ChoiceService', true],
            'Sonata\\DoctrineORMAdminBundle\\Filter\\ClassFilter' => [false, 'sonata.admin.orm.filter.type.class', 'getSonata_Admin_Orm_Filter_Type_ClassService', true],
            'Sonata\\DoctrineORMAdminBundle\\Filter\\CountFilter' => [false, 'sonata.admin.orm.filter.type.count', 'getSonata_Admin_Orm_Filter_Type_CountService', true],
            'Sonata\\DoctrineORMAdminBundle\\Filter\\DateFilter' => [false, 'sonata.admin.orm.filter.type.date', 'getSonata_Admin_Orm_Filter_Type_DateService', true],
            'Sonata\\DoctrineORMAdminBundle\\Filter\\DateRangeFilter' => [false, 'sonata.admin.orm.filter.type.date_range', 'getSonata_Admin_Orm_Filter_Type_DateRangeService', true],
            'Sonata\\DoctrineORMAdminBundle\\Filter\\DateTimeFilter' => [false, 'sonata.admin.orm.filter.type.datetime', 'getSonata_Admin_Orm_Filter_Type_DatetimeService', true],
            'Sonata\\DoctrineORMAdminBundle\\Filter\\DateTimeRangeFilter' => [false, 'sonata.admin.orm.filter.type.datetime_range', 'getSonata_Admin_Orm_Filter_Type_DatetimeRangeService', true],
            'Sonata\\DoctrineORMAdminBundle\\Filter\\EmptyFilter' => [false, 'sonata.admin.orm.filter.type.empty', 'getSonata_Admin_Orm_Filter_Type_EmptyService', true],
            'Sonata\\DoctrineORMAdminBundle\\Filter\\ModelAutocompleteFilter' => [false, 'sonata.admin.orm.filter.type.model_autocomplete', 'getSonata_Admin_Orm_Filter_Type_ModelAutocompleteService', true],
            'Sonata\\DoctrineORMAdminBundle\\Filter\\ModelFilter' => [false, 'sonata.admin.orm.filter.type.model', 'getSonata_Admin_Orm_Filter_Type_ModelService', true],
            'Sonata\\DoctrineORMAdminBundle\\Filter\\NullFilter' => [false, 'sonata.admin.orm.filter.type.null', 'getSonata_Admin_Orm_Filter_Type_NullService', true],
            'Sonata\\DoctrineORMAdminBundle\\Filter\\NumberFilter' => [false, 'sonata.admin.orm.filter.type.number', 'getSonata_Admin_Orm_Filter_Type_NumberService', true],
            'Sonata\\DoctrineORMAdminBundle\\Filter\\StringFilter' => [false, 'sonata.admin.orm.filter.type.string', 'getSonata_Admin_Orm_Filter_Type_StringService', true],
            'Sonata\\DoctrineORMAdminBundle\\Filter\\StringListFilter' => [false, 'sonata.admin.orm.filter.type.string_list', 'getSonata_Admin_Orm_Filter_Type_StringListService', true],
            'Sonata\\DoctrineORMAdminBundle\\Filter\\TimeFilter' => [false, 'sonata.admin.orm.filter.type.time', 'getSonata_Admin_Orm_Filter_Type_TimeService', true],
        ], [
            'Sonata\\DoctrineORMAdminBundle\\Filter\\BooleanFilter' => '?',
            'Sonata\\DoctrineORMAdminBundle\\Filter\\CallbackFilter' => '?',
            'Sonata\\DoctrineORMAdminBundle\\Filter\\ChoiceFilter' => '?',
            'Sonata\\DoctrineORMAdminBundle\\Filter\\ClassFilter' => '?',
            'Sonata\\DoctrineORMAdminBundle\\Filter\\CountFilter' => '?',
            'Sonata\\DoctrineORMAdminBundle\\Filter\\DateFilter' => '?',
            'Sonata\\DoctrineORMAdminBundle\\Filter\\DateRangeFilter' => '?',
            'Sonata\\DoctrineORMAdminBundle\\Filter\\DateTimeFilter' => '?',
            'Sonata\\DoctrineORMAdminBundle\\Filter\\DateTimeRangeFilter' => '?',
            'Sonata\\DoctrineORMAdminBundle\\Filter\\EmptyFilter' => '?',
            'Sonata\\DoctrineORMAdminBundle\\Filter\\ModelAutocompleteFilter' => '?',
            'Sonata\\DoctrineORMAdminBundle\\Filter\\ModelFilter' => '?',
            'Sonata\\DoctrineORMAdminBundle\\Filter\\NullFilter' => '?',
            'Sonata\\DoctrineORMAdminBundle\\Filter\\NumberFilter' => '?',
            'Sonata\\DoctrineORMAdminBundle\\Filter\\StringFilter' => '?',
            'Sonata\\DoctrineORMAdminBundle\\Filter\\StringListFilter' => '?',
            'Sonata\\DoctrineORMAdminBundle\\Filter\\TimeFilter' => '?',
        ])), new \Sonata\AdminBundle\FieldDescription\TypeGuesserChain([0 => new \Sonata\DoctrineORMAdminBundle\FieldDescription\FilterTypeGuesser()]), true);
    }
}
