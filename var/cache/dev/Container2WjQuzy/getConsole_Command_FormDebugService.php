<?php

namespace Container2WjQuzy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Command/DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'Sonata\\Form\\Type', 4 => 'Sonata\\BlockBundle\\Form\\Type', 5 => 'Sonata\\AdminBundle\\Form\\Type', 6 => 'Sonata\\AdminBundle\\Form\\Type\\Filter', 7 => 'Sonata\\UserBundle\\Form\\Type'], [0 => 'App\\Form\\AuthorType', 1 => 'App\\Form\\BookType', 2 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 3 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 4 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 5 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 6 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 7 => 'Sonata\\Form\\Type\\ImmutableArrayType', 8 => 'Sonata\\Form\\Type\\BooleanType', 9 => 'Sonata\\Form\\Type\\CollectionType', 10 => 'Sonata\\Form\\Type\\DateRangeType', 11 => 'Sonata\\Form\\Type\\DateTimeRangeType', 12 => 'Sonata\\Form\\Type\\DatePickerType', 13 => 'Sonata\\Form\\Type\\DateTimePickerType', 14 => 'Sonata\\Form\\Type\\DateRangePickerType', 15 => 'Sonata\\Form\\Type\\DateTimeRangePickerType', 16 => 'Sonata\\Form\\Type\\EqualType', 17 => 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType', 18 => 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType', 19 => 'Sonata\\AdminBundle\\Form\\Type\\AdminType', 20 => 'Sonata\\AdminBundle\\Form\\Type\\ModelType', 21 => 'Sonata\\AdminBundle\\Form\\Type\\ModelListType', 22 => 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType', 23 => 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType', 24 => 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType', 25 => 'Sonata\\AdminBundle\\Form\\Type\\CollectionType', 26 => 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType', 27 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType', 28 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType', 29 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType', 30 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType', 31 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType', 32 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType', 33 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType', 34 => 'Sonata\\UserBundle\\Form\\Type\\RolesMatrixType', 35 => 'Sonata\\UserBundle\\Form\\Type\\ResettingFormType', 36 => 'Sonata\\UserBundle\\Form\\Type\\ResetPasswordRequestFormType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 8 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\FormTypeFieldExtension', 9 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\MopaCompatibilityTypeFieldExtension', 10 => 'Sonata\\AdminBundle\\Form\\Extension\\ChoiceTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}