<?php

namespace ContainerVCX2pPJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Sonata_User_Command_PromoteUser_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.sonata.user.command.promote_user.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.sonata.user.command.promote_user.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('sonata:user:promote', [], 'Promotes a user by adding a role', false, #[\Closure(name: 'sonata.user.command.promote_user', class: 'Sonata\\UserBundle\\Command\\PromoteUserCommand')] function () use ($container): \Sonata\UserBundle\Command\PromoteUserCommand {
            return ($container->privates['sonata.user.command.promote_user'] ?? $container->load('getSonata_User_Command_PromoteUserService'));
        });
    }
}
