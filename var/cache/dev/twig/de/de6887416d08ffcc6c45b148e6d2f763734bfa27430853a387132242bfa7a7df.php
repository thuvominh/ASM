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

/* book/index.html.twig */
class __TwigTemplate_acb1e87c189cdc7d774b0f9ad151c695e4a256aa2dddf23467fed0201c6811a5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "book/index.html.twig", 1);
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
            ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_create");
            echo "\" class=\"btn\"
               style=\"background-color: green; color: white; width: 113px;
    height: 48px;
    line-height: 35px;
    margin-top: 16px;\"
            >
                Create book
            </a>
            ";
        }
        // line 17
        echo "        </div>
        <div class=\"row\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 20
            echo "                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                    <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "image", [], "any", false, false, false, 22), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "book_name", [], "any", false, false, false, 22), "html", null, true);
            echo "\" class=\"card-img-top\" style=\"width: 200px;
                                                                                          margin-left: 74px;\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "book_name", [], "any", false, false, false, 25), "html", null, true);
            echo "</h5>
                            <div class=\"d-flex justify-content-between align-item-center\">
                                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\" class=\"btn btn-dark\">View details</a>
                                ";
            // line 28
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 29
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\" class=\"btn\" style=\"background-color: red; color: white\">Delete</a>
                                ";
            }
            // line 31
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "book/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 36,  125 => 31,  119 => 29,  117 => 28,  113 => 27,  108 => 25,  100 => 22,  96 => 20,  92 => 19,  88 => 17,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class = \"header\" style=\"display: flex\">
            <h1 class=\"mt-3 mb-4\" style=\"margin-right: 50px\">Books</h1>
            {% if is_granted('ROLE_ADMIN') %}
            <a href=\"{{ path('book_create') }}\" class=\"btn\"
               style=\"background-color: green; color: white; width: 113px;
    height: 48px;
    line-height: 35px;
    margin-top: 16px;\"
            >
                Create book
            </a>
            {% endif %}
        </div>
        <div class=\"row\">
            {% for book in books %}
                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                    <img src=\"{{ book.image }}\" alt=\"{{ book.book_name }}\" class=\"card-img-top\" style=\"width: 200px;
                                                                                          margin-left: 74px;\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ book.book_name }}</h5>
                            <div class=\"d-flex justify-content-between align-item-center\">
                                <a href=\"{{ path('book_detail', {'id':book.id}) }}\" class=\"btn btn-dark\">View details</a>
                                {% if is_granted('ROLE_ADMIN') %}
                                <a href=\"{{ path('book_delete', {'id':book.id}) }}\" class=\"btn\" style=\"background-color: red; color: white\">Delete</a>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}", "book/index.html.twig", "C:\\Users\\LENOVO\\ASM\\ASM\\templates\\book\\index.html.twig");
    }
}
