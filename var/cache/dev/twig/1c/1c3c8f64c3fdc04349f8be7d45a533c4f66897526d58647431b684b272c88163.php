<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @SonataAdmin/CRUD/display_boolean.html.twig */
class __TwigTemplate_c0ed9333061a84a29898fa82e05fb8fdcaa8d5427ae809465cc9289a034a3f81 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_boolean.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_boolean.html.twig"));

        // line 12
        ob_start();
        // line 13
        echo "    ";
        if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "        ";
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_type_yes", [], "SonataAdminBundle");
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "        ";
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_type_no", [], "SonataAdminBundle");
            // line 17
            echo "    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if (((((array_key_exists("inverse", $context)) ? (_twig_default_filter((isset($context["inverse"]) || array_key_exists("inverse", $context) ? $context["inverse"] : (function () { throw new RuntimeError('Variable "inverse" does not exist.', 19, $this->source); })()), false)) : (false))) ? ( !(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 19, $this->source); })())) : ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 19, $this->source); })())))) {
            // line 20
            echo "        ";
            $context["class"] = "label-success";
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "        ";
            $context["class"] = "label-danger";
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    <span class=\"label ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</span>
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo twig_spaceless($___internal_parse_0_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/display_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 12,  80 => 25,  77 => 24,  74 => 23,  71 => 22,  68 => 21,  65 => 20,  63 => 19,  60 => 18,  57 => 17,  54 => 16,  51 => 15,  48 => 14,  45 => 13,  43 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{%- apply spaceless %}
    {% if value %}
        {% set text = 'label_type_yes'|trans({}, 'SonataAdminBundle') %}
    {% else %}
        {% set text = 'label_type_no'|trans({}, 'SonataAdminBundle') %}
    {% endif %}

    {% if inverse|default(false) ? not value : value %}
        {% set class = 'label-success' %}
    {% else %}
        {% set class = 'label-danger' %}
    {% endif %}

    <span class=\"label {{ class }}\">{{ text }}</span>
{% endapply -%}
", "@SonataAdmin/CRUD/display_boolean.html.twig", "C:\\Users\\LENOVO\\ASM\\ASM\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\CRUD\\display_boolean.html.twig");
    }
}
