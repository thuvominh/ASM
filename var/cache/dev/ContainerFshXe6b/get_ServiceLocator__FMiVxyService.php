<?php

namespace ContainerFshXe6b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__FMiVxyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..FMiVxy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..FMiVxy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'author' => ['privates', '.errored..service_locator..FMiVxy.App\\Entity\\Author', NULL, 'Cannot autowire service ".service_locator..FMiVxy": it references class "App\\Entity\\Author" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'author' => 'App\\Entity\\Author',
            'entityManager' => '?',
        ]);
    }
}
