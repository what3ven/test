<?php

namespace ContainerVCX2pPJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_AdminExporterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.admin_exporter' shared service.
     *
     * @return \Sonata\AdminBundle\Bridge\Exporter\AdminExporter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Bridge/Exporter/AdminExporter.php';

        return $container->privates['sonata.admin.admin_exporter'] = new \Sonata\AdminBundle\Bridge\Exporter\AdminExporter(($container->services['sonata.exporter.exporter'] ?? $container->load('getSonata_Exporter_ExporterService')));
    }
}
