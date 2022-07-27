<?php

namespace Container2WjQuzy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Sonata_Admin_Command_GenerateObjectAcl_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.sonata.admin.command.generate_object_acl.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.sonata.admin.command.generate_object_acl.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('sonata:admin:generate-object-acl', [], 'Install ACL for the objects of the Admin Classes.', false, #[\Closure(name: 'sonata.admin.command.generate_object_acl', class: 'Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand')] function () use ($container): \Sonata\AdminBundle\Command\GenerateObjectAclCommand {
            return ($container->privates['sonata.admin.command.generate_object_acl'] ?? $container->load('getSonata_Admin_Command_GenerateObjectAclService'));
        });
    }
}
