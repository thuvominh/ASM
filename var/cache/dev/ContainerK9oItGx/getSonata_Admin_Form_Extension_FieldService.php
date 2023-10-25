<?php

namespace ContainerK9oItGx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Admin_Form_Extension_FieldService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sonata.admin.form.extension.field' shared service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sonata-project'.\DIRECTORY_SEPARATOR.'admin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Field'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FormTypeFieldExtension.php';

        return $container->privates['sonata.admin.form.extension.field'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension(['Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => 'sonata-medium-date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => 'sonata-medium-date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => '', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => ''], ['html5_validate' => true, 'sort_admins' => false, 'confirm_exit' => true, 'js_debug' => false, 'skin' => 'skin-black', 'use_select2' => true, 'use_icheck' => true, 'use_bootlint' => false, 'use_stickyforms' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'default_admin_route' => 'show', 'default_group' => 'default', 'default_label_catalogue' => 'SonataAdminBundle', 'default_translation_domain' => NULL, 'default_icon' => 'fas fa-folder', 'dropdown_number_groups_per_colums' => 2, 'logo_content' => 'all', 'list_action_button_content' => 'all', 'lock_protection' => false, 'mosaic_background' => 'bundles/sonataadmin/images/default_mosaic_image.png', 'javascripts' => [0 => 'bundles/sonataadmin/app.js'], 'stylesheets' => [0 => 'bundles/sonataadmin/app.css', 1 => 'bundles/sonataadmin/admin-lte-skins/skin-black.min.css'], 'role_admin' => 'ROLE_SONATA_ADMIN', 'role_super_admin' => 'ROLE_SUPER_ADMIN', 'search' => true]);
    }
}
