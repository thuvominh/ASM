<?php

namespace ContainerFshXe6b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Action_SearchService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sonata.admin.action.search' shared service.
     *
     * @return \Sonata\AdminBundle\Action\SearchAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Action'.\DIRECTORY_SEPARATOR.'SearchAction.php';

        return $container->services['sonata.admin.action.search'] = new \Sonata\AdminBundle\Action\SearchAction(($container->privates['sonata.admin.pool'] ?? $container->getSonata_Admin_PoolService()), ($container->privates['sonata.admin.global_template_registry'] ?? $container->getSonata_Admin_GlobalTemplateRegistryService()), ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()));
    }
}