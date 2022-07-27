<?php

namespace ContainerDTgjpQP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_User_Listener_LastLoginService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.user.listener.last_login' shared service.
     *
     * @return \Sonata\UserBundle\Listener\LastLoginListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Listener/LastLoginListener.php';

        return $container->privates['sonata.user.listener.last_login'] = new \Sonata\UserBundle\Listener\LastLoginListener(($container->privates['sonata.user.manager.user'] ?? $container->load('getSonata_User_Manager_UserService')));
    }
}