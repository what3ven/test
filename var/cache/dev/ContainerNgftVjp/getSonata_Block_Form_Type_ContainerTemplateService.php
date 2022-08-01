<?php

namespace ContainerNgftVjp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Block_Form_Type_ContainerTemplateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.block.form.type.container_template' shared service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ContainerTemplateType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Form/Type/ContainerTemplateType.php';

        return $container->privates['sonata.block.form.type.container_template'] = new \Sonata\BlockBundle\Form\Type\ContainerTemplateType(['SonataBlockBundle default template' => '@SonataBlock/Block/block_container.html.twig']);
    }
}
