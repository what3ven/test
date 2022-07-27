<?php

namespace Container2WjQuzy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Block_AdminListService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.admin.block.admin_list' shared service.
     *
     * @return \Sonata\AdminBundle\Block\AdminListBlockService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Block/AdminListBlockService.php';

        return $container->services['sonata.admin.block.admin_list'] = new \Sonata\AdminBundle\Block\AdminListBlockService(($container->privates['twig'] ?? $container->getTwigService()), ($container->privates['sonata.admin.pool'] ?? $container->getSonata_Admin_PoolService()), ($container->privates['sonata.admin.global_template_registry'] ?? $container->getSonata_Admin_GlobalTemplateRegistryService()));
    }
}