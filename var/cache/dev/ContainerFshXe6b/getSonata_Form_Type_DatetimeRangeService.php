<?php

namespace ContainerFshXe6b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Form_Type_DatetimeRangeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.form.type.datetime_range' shared service.
     *
     * @return \Sonata\Form\Type\DateTimeRangeType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'form-extensions'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'DateTimeRangeType.php';

        return $container->privates['sonata.form.type.datetime_range'] = new \Sonata\Form\Type\DateTimeRangeType(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
