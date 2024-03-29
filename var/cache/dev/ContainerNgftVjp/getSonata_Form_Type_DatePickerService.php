<?php

namespace ContainerNgftVjp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Form_Type_DatePickerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.form.type.date_picker' shared service.
     *
     * @return \Sonata\Form\Type\DatePickerType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/form-extensions/src/Type/BasePickerType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/form-extensions/src/Type/DatePickerType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/form-extensions/src/Date/MomentFormatConverter.php';

        return $container->privates['sonata.form.type.date_picker'] = new \Sonata\Form\Type\DatePickerType(($container->privates['sonata.form.date.moment_format_converter'] ?? ($container->privates['sonata.form.date.moment_format_converter'] = new \Sonata\Form\Date\MomentFormatConverter())), ($container->services['translator'] ?? $container->getTranslatorService()), 'en');
    }
}
