<?php

namespace ContainerK9oItGx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_11tM6JJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.11tM6JJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.11tM6JJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authors' => ['privates', '.errored..service_locator.11tM6JJ.App\\Entity\\Author', NULL, 'Cannot autowire service ".service_locator.11tM6JJ": it references class "App\\Entity\\Author" but no such service exists.'],
        ], [
            'authors' => 'App\\Entity\\Author',
        ]);
    }
}
