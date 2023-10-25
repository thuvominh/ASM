<?php

namespace ContainerFshXe6b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Block_Form_Type_BlockService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.block.form.type.block' shared service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ServiceListType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'block-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'ServiceListType.php';

        return $container->privates['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType(($container->services['sonata.block.manager'] ?? $container->getSonata_Block_ManagerService()));
    }
}