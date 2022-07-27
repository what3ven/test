<?php

namespace ContainerDTgjpQP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Maker_AutoCommand_MakeSonataAdmin_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.maker.auto_command.make_sonata_admin.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.maker.auto_command.make_sonata_admin.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('make:sonata:admin', [], 'Generates an admin class based on the given model class', false, #[\Closure(name: 'maker.auto_command.make_sonata_admin', class: 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand')] function () use ($container): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
            return ($container->privates['maker.auto_command.make_sonata_admin'] ?? $container->load('getMaker_AutoCommand_MakeSonataAdminService'));
        });
    }
}
