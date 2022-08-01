<?php

namespace ContainerVCX2pPJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Block_Service_TextService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.block.service.text' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TextBlockService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/EditableBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/TextBlockService.php';

        return $container->services['sonata.block.service.text'] = new \Sonata\BlockBundle\Block\Service\TextBlockService(($container->privates['twig'] ?? $container->getTwigService()));
    }
}
