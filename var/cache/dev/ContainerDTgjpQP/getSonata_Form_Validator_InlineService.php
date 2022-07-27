<?php

namespace ContainerDTgjpQP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Form_Validator_InlineService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.form.validator.inline' shared service.
     *
     * @return \Sonata\Form\Validator\InlineValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/form-extensions/src/Validator/InlineValidator.php';

        return $container->privates['sonata.form.validator.inline'] = new \Sonata\Form\Validator\InlineValidator($container, ($container->privates['validator.validator_factory'] ?? $container->getValidator_ValidatorFactoryService()));
    }
}