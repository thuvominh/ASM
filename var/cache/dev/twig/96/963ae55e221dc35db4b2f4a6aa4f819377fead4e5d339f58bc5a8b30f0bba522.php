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

/* category_book/index.html.twig */
class __TwigTemplate_a18734534b6901f52fcf669368d3b37531f6f600a7db45410db42a3381dabc10 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category_book/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category_book/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category_book/index.html.twig", 1);
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
        <h1 class=\"mt-3 mb-4\">Categories</h1>
        <div class=\"row\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_name", [], "any", false, false, false, 11), "html", null, true);
            echo "</h5>
                            <div class=\"d-flex justify-content-between align-item-center\">
                                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\" class=\"btn btn-dark\">View details</a>
                                ";
            // line 14
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 15
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 15)]), "html", null, true);
                echo "\" class=\"btn\" style=\"background-color: red; color: white\">Delete</a>
                                ";
            }
            // line 17
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "            <div class=\"col-md-4\">
                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-item-center\">
                            <a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_category");
            echo "\" class=\"btn btn-warning\">Add new</a>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 33
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "category_book/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 33,  118 => 27,  112 => 23,  109 => 22,  99 => 17,  93 => 15,  91 => 14,  87 => 13,  82 => 11,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"mt-3 mb-4\">Categories</h1>
        <div class=\"row\">
            {% for category in categories %}
                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ category.category_name }}</h5>
                            <div class=\"d-flex justify-content-between align-item-center\">
                                <a href=\"{{ path('category_detail', {'id':category.id}) }}\" class=\"btn btn-dark\">View details</a>
                                {% if is_granted('ROLE_ADMIN') %}
                                <a href=\"{{ path('category_delete', {'id':category.id}) }}\" class=\"btn\" style=\"background-color: red; color: white\">Delete</a>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
            {% if is_granted('ROLE_ADMIN') %}
            <div class=\"col-md-4\">
                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-item-center\">
                            <a href=\"{{ path('create_category') }}\" class=\"btn btn-warning\">Add new</a>
                        </div>
                    </div>
                </div>
            </div>
            {% endif %}
        </div>
    </div>
{% endblock %}", "category_book/index.html.twig", "C:\\Users\\LENOVO\\ASM\\ASM\\templates\\category_book\\index.html.twig");
    }
}
