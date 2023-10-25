<?php

namespace ContainerK9oItGx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y9DP2HService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.y9_dP2H' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.y9_dP2H'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categories' => ['privates', '.errored..service_locator.y9_dP2H.App\\Entity\\CategoryBook', NULL, 'Cannot autowire service ".service_locator.y9_dP2H": it references class "App\\Entity\\CategoryBook" but no such service exists.'],
        ], [
            'categories' => 'App\\Entity\\CategoryBook',
        ]);
    }
}
