<?php

namespace ContainerDTgjpQP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_User_Action_CheckLoginService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.user.action.check_login' shared service.
     *
     * @return \Sonata\UserBundle\Action\CheckLoginAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Action/CheckLoginAction.php';

        return $container->services['sonata.user.action.check_login'] = new \Sonata\UserBundle\Action\CheckLoginAction();
    }
}
