<?php

namespace ContainerFshXe6b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Form_Type_EqualService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.form.type.equal' shared service.
     *
     * @return \Sonata\Form\Type\EqualType
     *
     * @deprecated Since sonata-project/form-extensions 1.2: The "sonata.form.type.equal" service is deprecated since sonata-project/form-extensions 1.2 and will be removed in 2.0. Use Sonata\AdminBundle\Form\Type\Operator\EqualOperatorType instead
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('sonata-project/form-extensions', '1.2', 'The "sonata.form.type.equal" service is deprecated since sonata-project/form-extensions 1.2 and will be removed in 2.0. Use Sonata\\AdminBundle\\Form\\Type\\Operator\\EqualOperatorType instead');

        return $container->privates['sonata.form.type.equal'] = new \Sonata\Form\Type\EqualType(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
