<?php

namespace Container2WjQuzy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_User_Action_CheckEmailService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.user.action.check_email' shared service.
     *
     * @return \Sonata\UserBundle\Action\CheckEmailAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Action/CheckEmailAction.php';

        return $container->services['sonata.user.action.check_email'] = new \Sonata\UserBundle\Action\CheckEmailAction(($container->privates['twig'] ?? $container->getTwigService()), ($container->services['router'] ?? $container->getRouterService()), ($container->privates['sonata.admin.pool'] ?? $container->getSonata_Admin_PoolService()), ($container->privates['sonata.admin.global_template_registry'] ?? $container->getSonata_Admin_GlobalTemplateRegistryService()), 86400);
    }
}