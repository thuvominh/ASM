<?php

namespace ContainerFshXe6b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_02qTT3bService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.02qTT3b' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.02qTT3b'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'book' => ['privates', '.errored..service_locator.02qTT3b.App\\Entity\\Book', NULL, 'Cannot autowire service ".service_locator.02qTT3b": it references class "App\\Entity\\Book" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'book' => 'App\\Entity\\Book',
            'entityManager' => '?',
        ]);
    }
}