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

/* user/list_customer.html.twig */
class __TwigTemplate_b8c7e9d109d6253f8668643585addfc1f4f41e5882b4027995f12f93a50a8b9d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/list_customer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/list_customer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/list_customer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class = \"header\" style=\"display: flex\">
            <h1 class=\"mt-3 mb-4\" style=\"margin-right: 50px\">Books</h1>
        </div>
        <div class=\"row\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new RuntimeError('Variable "customers" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 10
            echo "                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Email: ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">Encoded password: ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "password", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">Name: ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">Phone number: ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "phonenumber", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>
                            <p class=\"card-text\">Gender: ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "gender", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
                            <div class=\"d-flex justify-content-between align-item-center\">
                                                            <a href=\"#\" class=\"btn\" style=\"background-color: red; color: white\">Delete</a>
                                                        </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/list_customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  100 => 17,  96 => 16,  92 => 15,  88 => 14,  84 => 13,  79 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class = \"header\" style=\"display: flex\">
            <h1 class=\"mt-3 mb-4\" style=\"margin-right: 50px\">Books</h1>
        </div>
        <div class=\"row\">
            {% for customer in customers %}
                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">Email: {{ customer.email }}</p>
                            <p class=\"card-text\">Encoded password: {{ customer.password }}</p>
                            <p class=\"card-text\">Name: {{ customer.name }}</p>
                            <p class=\"card-text\">Phone number: {{ customer.phonenumber }}</p>
                            <p class=\"card-text\">Gender: {{ customer.gender }}</p>
                            <div class=\"d-flex justify-content-between align-item-center\">
                                                            <a href=\"#\" class=\"btn\" style=\"background-color: red; color: white\">Delete</a>
                                                        </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}", "user/list_customer.html.twig", "C:\\Users\\LENOVO\\ASM\\ASM\\templates\\user\\list_customer.html.twig");
    }
}
