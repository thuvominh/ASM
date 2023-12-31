<?php

namespace ContainerK9oItGx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Menu_GroupProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.menu.group_provider' shared service.
     *
     * @return \Sonata\AdminBundle\Menu\Provider\GroupMenuProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'GroupMenuProvider.php';

        return $container->privates['sonata.admin.menu.group_provider'] = new \Sonata\AdminBundle\Menu\Provider\GroupMenuProvider(($container->services['knp_menu.factory'] ?? $container->load('getKnpMenu_FactoryService')), ($container->privates['sonata.admin.pool'] ?? $container->getSonata_Admin_PoolService()), ($container->services['.container.private.security.authorization_checker'] ?? $container->get_Container_Private_Security_AuthorizationCheckerService()));
    }
}
