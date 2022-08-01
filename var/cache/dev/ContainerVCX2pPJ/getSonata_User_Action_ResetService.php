<?php

namespace ContainerVCX2pPJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_User_Action_ResetService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.user.action.reset' shared service.
     *
     * @return \Sonata\UserBundle\Action\ResetAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Action/ResetAction.php';

        return $container->services['sonata.user.action.reset'] = new \Sonata\UserBundle\Action\ResetAction(($container->privates['twig'] ?? $container->getTwigService()), ($container->services['router'] ?? $container->getRouterService()), ($container->privates['security.authorization_checker'] ?? $container->getSecurity_AuthorizationCheckerService()), ($container->privates['sonata.admin.pool'] ?? $container->getSonata_Admin_PoolService()), ($container->privates['sonata.admin.global_template_registry'] ?? $container->getSonata_Admin_GlobalTemplateRegistryService()), ($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')), ($container->privates['sonata.user.manager.user'] ?? $container->load('getSonata_User_Manager_UserService')), ($container->services['translator'] ?? $container->getTranslatorService()), 86400);
    }
}
