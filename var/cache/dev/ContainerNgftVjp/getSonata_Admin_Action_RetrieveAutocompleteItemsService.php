<?php

namespace ContainerNgftVjp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Action_RetrieveAutocompleteItemsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.admin.action.retrieve_autocomplete_items' shared service.
     *
     * @return \Sonata\AdminBundle\Action\RetrieveAutocompleteItemsAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Action/RetrieveAutocompleteItemsAction.php';

        return $container->services['sonata.admin.action.retrieve_autocomplete_items'] = new \Sonata\AdminBundle\Action\RetrieveAutocompleteItemsAction(($container->privates['sonata.admin.request.fetcher'] ?? $container->load('getSonata_Admin_Request_FetcherService')));
    }
}
