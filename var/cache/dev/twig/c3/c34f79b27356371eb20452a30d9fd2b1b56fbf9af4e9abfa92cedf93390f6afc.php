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

/* registration/index.html.twig */
class __TwigTemplate_7aec5db38b17cb6e4ec2697059d204a887c508a79e0bb4d8769f13047f0b3975 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-10 ml-md-auto\">
            <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px\">
                <div class=\"card-body\">
                    <div class=\"card-header mb-3\">Registration Form</div>
                    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "gender", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "phonenumber", [], "any", false, false, false, 26), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "password", [], "any", false, false, false, 31), "first", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "form-control"]]);
        // line 32
        echo "
                        </div>
                    </div>
                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), "second", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "form-control"]]);
        // line 38
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fa fa-btn fa-user\"></i> Register
                            </button>
                        </div>
                    </div>
                    <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
        echo "\">Back to the Book list</a>
                    ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 49,  136 => 48,  124 => 38,  122 => 37,  115 => 32,  113 => 31,  105 => 26,  97 => 21,  89 => 16,  81 => 11,  75 => 8,  67 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-10 ml-md-auto\">
            <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px\">
                <div class=\"card-body\">
                    <div class=\"card-header mb-3\">Registration Form</div>
                    {{ form_start(form) }}
                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            {{ form_row(form.name, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            {{ form_row(form.email, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            {{ form_row(form.gender, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            {{ form_row(form.phonenumber, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            {{ form_row(form.password.first, {'attr': {'class':
                                'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            {{ form_row(form.password.second, {'attr': {'class':
                                'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fa fa-btn fa-user\"></i> Register
                            </button>
                        </div>
                    </div>
                    <a href=\"{{ path('welcome') }}\">Back to the Book list</a>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "registration/index.html.twig", "C:\\Users\\LENOVO\\ASM\\ASM\\templates\\registration\\index.html.twig");
    }
}
