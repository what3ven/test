<?php

namespace ContainerNgftVjp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_User_Form_RolesMatrixTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.user.form.roles_matrix_type' shared service.
     *
     * @return \Sonata\UserBundle\Form\Type\RolesMatrixType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/user-bundle/src/Form/Type/RolesMatrixType.php';

        return $container->services['sonata.user.form.roles_matrix_type'] = new \Sonata\UserBundle\Form\Type\RolesMatrixType(($container->privates['sonata.user.matrix_roles_builder'] ?? $container->getSonata_User_MatrixRolesBuilderService()));
    }
}
