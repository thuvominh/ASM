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

/* author/index.html.twig */
class __TwigTemplate_3dc0c5cac0f423c3094a3e91059e266d0ff2ca04d78b7e40e4ce579d657d502e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "author/index.html.twig", 1);
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
        <h1 class=\"mt-3 mb-4\">Authors</h1>
        <div class=\"row\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 8
            echo "                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "image", [], "any", false, false, false, 10), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "full_name", [], "any", false, false, false, 10), "html", null, true);
            echo "\" class=\"card-img-top\" style=\"width: 200px;
                                                                                          margin-left: 74px;\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "full_name", [], "any", false, false, false, 13), "html", null, true);
            echo "</h5>
                            <div class=\"d-flex justify-content-between align-item-center\">
                                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\" class=\"btn btn-dark\">View details</a>
                                <a href=\"#\" class=\"btn\" style=\"background-color: red; color: white\">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author_create");
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
        return "author/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 33,  116 => 27,  110 => 23,  107 => 22,  94 => 15,  89 => 13,  81 => 10,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"mt-3 mb-4\">Authors</h1>
        <div class=\"row\">
            {% for author in authors %}
                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        <img src=\"{{ author.image }}\" alt=\"{{ author.full_name }}\" class=\"card-img-top\" style=\"width: 200px;
                                                                                          margin-left: 74px;\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ author.full_name }}</h5>
                            <div class=\"d-flex justify-content-between align-item-center\">
                                <a href=\"{{ path('author_detail', {'id':author.id}) }}\" class=\"btn btn-dark\">View details</a>
                                <a href=\"#\" class=\"btn\" style=\"background-color: red; color: white\">Delete</a>
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
                            <a href=\"{{ path('author_create') }}\" class=\"btn btn-warning\">Add new</a>
                        </div>
                    </div>
                </div>
            </div>
            {% endif %}
        </div>
    </div>
{% endblock %}", "author/index.html.twig", "C:\\Users\\LENOVO\\ASM\\ASM\\templates\\author\\index.html.twig");
    }
}
