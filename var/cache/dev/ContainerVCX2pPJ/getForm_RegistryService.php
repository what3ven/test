<?php

namespace ContainerVCX2pPJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactory.php';

        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Form\\AuthorType' => ['services', 'App\\Form\\AuthorType', 'getAuthorTypeService', true],
            'App\\Form\\BookType' => ['services', 'App\\Form\\BookType', 'getBookTypeService', true],
            'Sonata\\AdminBundle\\Form\\Type\\AdminType' => ['privates', 'sonata.admin.form.type.admin', 'getSonata_Admin_Form_Type_AdminService', true],
            'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType' => ['privates', 'sonata.admin.doctrine_orm.form.type.choice_field_mask', 'getSonata_Admin_DoctrineOrm_Form_Type_ChoiceFieldMaskService', true],
            'Sonata\\AdminBundle\\Form\\Type\\CollectionType' => ['privates', 'sonata.admin.form.type.collection', 'getSonata_Admin_Form_Type_CollectionService', true],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType' => ['privates', 'sonata.admin.form.filter.type.choice', 'getSonata_Admin_Form_Filter_Type_ChoiceService', true],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType' => ['privates', 'sonata.admin.form.filter.type.daterange', 'getSonata_Admin_Form_Filter_Type_DaterangeService', true],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType' => ['privates', 'sonata.admin.form.filter.type.datetime_range', 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService', true],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType' => ['privates', 'sonata.admin.form.filter.type.datetime', 'getSonata_Admin_Form_Filter_Type_DatetimeService', true],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType' => ['privates', 'sonata.admin.form.filter.type.date', 'getSonata_Admin_Form_Filter_Type_DateService', true],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType' => ['privates', 'sonata.admin.form.filter.type.default', 'getSonata_Admin_Form_Filter_Type_DefaultService', true],
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType' => ['privates', 'sonata.admin.form.filter.type.number', 'getSonata_Admin_Form_Filter_Type_NumberService', true],
            'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType' => ['privates', 'sonata.admin.form.type.model_autocomplete', 'getSonata_Admin_Form_Type_ModelAutocompleteService', true],
            'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType' => ['privates', 'sonata.admin.form.type.model_hidden', 'getSonata_Admin_Form_Type_ModelHiddenService', true],
            'Sonata\\AdminBundle\\Form\\Type\\ModelListType' => ['privates', 'sonata.admin.form.type.model_list', 'getSonata_Admin_Form_Type_ModelListService', true],
            'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType' => ['privates', 'sonata.admin.form.type.model_reference', 'getSonata_Admin_Form_Type_ModelReferenceService', true],
            'Sonata\\AdminBundle\\Form\\Type\\ModelType' => ['privates', 'sonata.admin.form.type.model_choice', 'getSonata_Admin_Form_Type_ModelChoiceService', true],
            'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType' => ['privates', 'sonata.block.form.type.container_template', 'getSonata_Block_Form_Type_ContainerTemplateService', true],
            'Sonata\\BlockBundle\\Form\\Type\\ServiceListType' => ['privates', 'sonata.block.form.type.block', 'getSonata_Block_Form_Type_BlockService', true],
            'Sonata\\Form\\Type\\BooleanType' => ['privates', 'sonata.form.type.boolean', 'getSonata_Form_Type_BooleanService', true],
            'Sonata\\Form\\Type\\CollectionType' => ['privates', 'sonata.form.type.collection', 'getSonata_Form_Type_CollectionService', true],
            'Sonata\\Form\\Type\\DatePickerType' => ['privates', 'sonata.form.type.date_picker', 'getSonata_Form_Type_DatePickerService', true],
            'Sonata\\Form\\Type\\DateRangePickerType' => ['privates', 'sonata.form.type.date_range_picker', 'getSonata_Form_Type_DateRangePickerService', true],
            'Sonata\\Form\\Type\\DateRangeType' => ['privates', 'sonata.form.type.date_range', 'getSonata_Form_Type_DateRangeService', true],
            'Sonata\\Form\\Type\\DateTimePickerType' => ['privates', 'sonata.form.type.datetime_picker', 'getSonata_Form_Type_DatetimePickerService', true],
            'Sonata\\Form\\Type\\DateTimeRangePickerType' => ['privates', 'sonata.form.type.datetime_range_picker', 'getSonata_Form_Type_DatetimeRangePickerService', true],
            'Sonata\\Form\\Type\\DateTimeRangeType' => ['privates', 'sonata.form.type.datetime_range', 'getSonata_Form_Type_DatetimeRangeService', true],
            'Sonata\\Form\\Type\\EqualType' => ['privates', 'sonata.form.type.equal', 'getSonata_Form_Type_EqualService', true],
            'Sonata\\Form\\Type\\ImmutableArrayType' => ['privates', 'sonata.form.type.array', 'getSonata_Form_Type_ArrayService', true],
            'Sonata\\UserBundle\\Form\\Type\\ResetPasswordRequestFormType' => ['privates', 'sonata.user.form.type.reset_password_request', 'getSonata_User_Form_Type_ResetPasswordRequestService', true],
            'Sonata\\UserBundle\\Form\\Type\\ResettingFormType' => ['privates', 'sonata.user.form.type.resetting', 'getSonata_User_Form_Type_ResettingService', true],
            'Sonata\\UserBundle\\Form\\Type\\RolesMatrixType' => ['services', 'sonata.user.form.roles_matrix_type', 'getSonata_User_Form_RolesMatrixTypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['privates', 'form.type.file', 'getForm_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
        ], [
            'App\\Form\\AuthorType' => '?',
            'App\\Form\\BookType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\AdminType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\CollectionType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ModelListType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType' => '?',
            'Sonata\\AdminBundle\\Form\\Type\\ModelType' => '?',
            'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType' => '?',
            'Sonata\\BlockBundle\\Form\\Type\\ServiceListType' => '?',
            'Sonata\\Form\\Type\\BooleanType' => '?',
            'Sonata\\Form\\Type\\CollectionType' => '?',
            'Sonata\\Form\\Type\\DatePickerType' => '?',
            'Sonata\\Form\\Type\\DateRangePickerType' => '?',
            'Sonata\\Form\\Type\\DateRangeType' => '?',
            'Sonata\\Form\\Type\\DateTimePickerType' => '?',
            'Sonata\\Form\\Type\\DateTimeRangePickerType' => '?',
            'Sonata\\Form\\Type\\DateTimeRangeType' => '?',
            'Sonata\\Form\\Type\\EqualType' => '?',
            'Sonata\\Form\\Type\\ImmutableArrayType' => '?',
            'Sonata\\UserBundle\\Form\\Type\\ResetPasswordRequestFormType' => '?',
            'Sonata\\UserBundle\\Form\\Type\\ResettingFormType' => '?',
            'Sonata\\UserBundle\\Form\\Type\\RolesMatrixType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.data_collector'] ?? $container->load('getForm_TypeExtension_Form_DataCollectorService'));
            yield 6 => ($container->privates['sonata.admin.form.extension.field'] ?? $container->load('getSonata_Admin_Form_Extension_FieldService'));
            yield 7 => ($container->privates['sonata.admin.form.extension.field.mopa'] ?? ($container->privates['sonata.admin.form.extension.field.mopa'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension()));
        }, 8), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ?? ($container->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ?? ($container->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['sonata.admin.form.extension.choice'] ?? ($container->privates['sonata.admin.form.extension.choice'] = new \Sonata\AdminBundle\Form\Extension\ChoiceTypeExtension()));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($container->privates['data_collector.form'] ?? $container->getDataCollector_FormService())));
    }
}
