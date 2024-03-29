<?php

namespace ContainerNgftVjp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_AutoCommand_MakeSonataAdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.auto_command.make_sonata_admin' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Maker/AdminMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Model/ModelManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Model/LockInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Model/ModelManager.php';

        $container->privates['maker.auto_command.make_sonata_admin'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Sonata\AdminBundle\Maker\AdminMaker(\dirname(__DIR__, 4), ['sonata.admin.manager.orm' => new \Sonata\DoctrineORMAdminBundle\Model\ModelManager(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['property_accessor'] ?? $container->getPropertyAccessorService()))], 'Sonata\\AdminBundle\\Controller\\CRUDController'), ($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')), ($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')));

        $instance->setName('make:sonata:admin');
        $instance->setDescription('Generates an admin class based on the given model class');

        return $instance;
    }
}
