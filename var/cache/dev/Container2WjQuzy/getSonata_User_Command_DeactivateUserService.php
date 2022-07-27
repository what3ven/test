<?php

namespace Container2WjQuzy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_User_Command_DeactivateUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.user.command.deactivate_user' shared service.
     *
     * @return \Sonata\UserBundle\Command\DeactivateUserCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Command/DeactivateUserCommand.php';

        $container->privates['sonata.user.command.deactivate_user'] = $instance = new \Sonata\UserBundle\Command\DeactivateUserCommand(($container->privates['sonata.user.manager.user'] ?? $container->load('getSonata_User_Manager_UserService')));

        $instance->setName('sonata:user:deactivate');
        $instance->setDescription('Deactivate a user');

        return $instance;
    }
}
