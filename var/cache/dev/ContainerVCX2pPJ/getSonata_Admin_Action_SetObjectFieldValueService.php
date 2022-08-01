<?php

namespace ContainerVCX2pPJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Action_SetObjectFieldValueService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.admin.action.set_object_field_value' shared service.
     *
     * @return \Sonata\AdminBundle\Action\SetObjectFieldValueAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Action/SetObjectFieldValueAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/DataTransformerResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/DataTransformerResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/DataTransformerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Form/DataTransformer/BooleanToStringTransformer.php';

        $a = new \Sonata\AdminBundle\Form\DataTransformerResolver();
        $a->addCustomGlobalTransformer('boolean', new \Sonata\AdminBundle\Form\DataTransformer\BooleanToStringTransformer(1));

        return $container->services['sonata.admin.action.set_object_field_value'] = new \Sonata\AdminBundle\Action\SetObjectFieldValueAction(($container->privates['twig'] ?? $container->getTwigService()), ($container->privates['sonata.admin.request.fetcher'] ?? $container->load('getSonata_Admin_Request_FetcherService')), ($container->privates['debug.validator'] ?? $container->getDebug_ValidatorService()), $a, ($container->privates['property_accessor'] ?? $container->getPropertyAccessorService()), ($container->privates['sonata.admin.twig.render_element_runtime'] ?? $container->getSonata_Admin_Twig_RenderElementRuntimeService()));
    }
}
