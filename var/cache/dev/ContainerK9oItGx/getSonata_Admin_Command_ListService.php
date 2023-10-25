<?php

namespace ContainerK9oItGx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Command_ListService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.command.list' shared service.
     *
     * @return \Sonata\AdminBundle\Command\ListAdminCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ListAdminCommand.php';

        $container->privates['sonata.admin.command.list'] = $instance = new \Sonata\AdminBundle\Command\ListAdminCommand(($container->privates['sonata.admin.pool'] ?? $container->getSonata_Admin_PoolService()));

        $instance->setName('sonata:admin:list');

        return $instance;
    }
}
