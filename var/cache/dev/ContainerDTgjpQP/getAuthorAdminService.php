<?php

namespace ContainerDTgjpQP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorAdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Admin\AuthorAdmin' autowired service.
     *
     * @return \App\Admin\AuthorAdmin
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Templating/MutableTemplateRegistryAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/DependencyInjection/Admin/TaggedAdminInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/DependencyInjection/Admin/AbstractTaggedAdmin.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AccessRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/FieldDescription/FieldDescriptionRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/LifecycleHookProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/ParentAdminInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/UrlGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AdminInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-acl/Model/DomainObjectInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AdminTreeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AbstractAdmin.php';
        include_once \dirname(__DIR__, 4).'/src/Admin/AuthorAdmin.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Exporter/DataSourceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Exporter/DataSource.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Security/Handler/SecurityHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Security/Handler/NoopSecurityHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Translator/LabelTranslatorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Translator/NativeLabelTranslatorStrategy.php';

        $container->factories['App\\Admin\\AuthorAdmin'] = function () use ($container) {
            $instance = new \App\Admin\AuthorAdmin('App\\Admin\\AuthorAdmin', 'App\\Entity\\Author', 'sonata.admin.controller.crud');

            $instance->setManagerType('orm');
            $instance->setModelManager(($container->services['sonata.admin.manager.orm'] ?? $container->load('getSonata_Admin_Manager_OrmService')));
            $instance->setDataSource(($container->privates['sonata.admin.data_source.orm'] ?? ($container->privates['sonata.admin.data_source.orm'] = new \Sonata\DoctrineORMAdminBundle\Exporter\DataSource())));
            $instance->setFieldDescriptionFactory(($container->privates['sonata.admin.field_description_factory.orm'] ?? $container->load('getSonata_Admin_FieldDescriptionFactory_OrmService')));
            $instance->setFormContractor(($container->privates['sonata.admin.builder.orm_form'] ?? $container->load('getSonata_Admin_Builder_OrmFormService')));
            $instance->setShowBuilder(($container->privates['sonata.admin.builder.orm_show'] ?? $container->load('getSonata_Admin_Builder_OrmShowService')));
            $instance->setListBuilder(($container->privates['sonata.admin.builder.orm_list'] ?? $container->load('getSonata_Admin_Builder_OrmListService')));
            $instance->setDatagridBuilder(($container->privates['sonata.admin.builder.orm_datagrid'] ?? $container->load('getSonata_Admin_Builder_OrmDatagridService')));
            $instance->setTranslator(($container->services['translator'] ?? $container->getTranslatorService()), false);
            $instance->setConfigurationPool(($container->privates['sonata.admin.pool'] ?? $container->getSonata_Admin_PoolService()));
            $instance->setRouteGenerator(($container->privates['sonata.admin.route.default_generator'] ?? $container->load('getSonata_Admin_Route_DefaultGeneratorService')));
            $instance->setSecurityHandler(($container->privates['sonata.admin.security.handler.noop'] ?? ($container->privates['sonata.admin.security.handler.noop'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler())));
            $instance->setMenuFactory(($container->services['knp_menu.factory'] ?? $container->load('getKnpMenu_FactoryService')));
            $instance->setRouteBuilder(($container->privates['sonata.admin.route.path_info'] ?? $container->load('getSonata_Admin_Route_PathInfoService')));
            $instance->setLabelTranslatorStrategy(($container->privates['sonata.admin.label.strategy.native'] ?? ($container->privates['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy())));
            $instance->setPagerType('default');
            $instance->setLabel('Author');
            $instance->setTranslationDomain('messages');
            $instance->setListModes(['list' => ['icon' => '<i class="fas fa-list fa-fw" aria-hidden="true"></i>', 'class' => 'fas fa-list fa-fw'], 'mosaic' => ['icon' => '<i class="fas fa-th-large fa-fw" aria-hidden="true"></i>', 'class' => 'fas fa-th-large fa-fw']]);
            $instance->setSecurityInformation([]);
            $instance->setFormTheme([0 => '@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig']);
            $instance->setFilterTheme([0 => '@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig']);
            $instance->setTemplateRegistry(($container->services['App\\Admin\\AuthorAdmin.template_registry'] ?? $container->load('getAuthorAdmin_TemplateRegistryService')));
            $instance->addExtension(($container->privates['sonata.admin.event.extension'] ?? $container->load('getSonata_Admin_Event_ExtensionService')));
            $instance->initialize();

            return $instance;
        };

        return $container->factories['App\\Admin\\AuthorAdmin']();
    }
}