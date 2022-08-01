<?php

namespace ContainerNgftVjp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_DotenvDebug_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.dotenv_debug.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.dotenv_debug.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:dotenv', [], 'Lists all dotenv files with variables and values', false, #[\Closure(name: 'console.command.dotenv_debug', class: 'Symfony\\Component\\Dotenv\\Command\\DebugCommand')] function () use ($container): \Symfony\Component\Dotenv\Command\DebugCommand {
            return ($container->privates['console.command.dotenv_debug'] ?? $container->load('getConsole_Command_DotenvDebugService'));
        });
    }
}
