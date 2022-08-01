<?php

namespace ContainerVCX2pPJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_User_Manager_UserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.user.manager.user' shared service.
     *
     * @return \Sonata\UserBundle\Entity\UserManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-extensions/src/Model/ManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-extensions/src/Model/ClearableManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-extensions/src/Model/BaseManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-extensions/src/Entity/BaseEntityManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Model/UserManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Entity/UserManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/password-hasher/Hasher/UserPasswordHasherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/password-hasher/Hasher/UserPasswordHasher.php';

        return $container->privates['sonata.user.manager.user'] = new \Sonata\UserBundle\Entity\UserManager('App\\Entity\\SonataUserUser', ($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['sonata.user.util.canonical_fields_updater'] ?? ($container->privates['sonata.user.util.canonical_fields_updater'] = new \Sonata\UserBundle\Util\CanonicalFieldsUpdater())), new \Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher(($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService'))));
    }
}
