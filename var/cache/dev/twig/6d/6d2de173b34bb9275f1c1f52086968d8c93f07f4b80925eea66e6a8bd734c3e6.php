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

/* user/index.html.twig */
class __TwigTemplate_b4779921e0437e7fb72e5c383e8dcd1e95295a7a7752e926118605e78c2f71d0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        echo "<div class=\"container\">
        <div class=\"row mt-3 mb-4\">
            <div class=\"col-md-8\">
                <h1 class=\"mt-4 mt-md-0\"><b>Name: </b>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfor"]) || array_key_exists("userInfor", $context) ? $context["userInfor"] : (function () { throw new RuntimeError('Variable "userInfor" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
                <hr>
                <b>Email: </b>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfor"]) || array_key_exists("userInfor", $context) ? $context["userInfor"] : (function () { throw new RuntimeError('Variable "userInfor" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), "html", null, true);
        echo "
                <hr>
                <b>Phone number: </b>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfor"]) || array_key_exists("userInfor", $context) ? $context["userInfor"] : (function () { throw new RuntimeError('Variable "userInfor" does not exist.', 11, $this->source); })()), "phonenumber", [], "any", false, false, false, 11), "html", null, true);
        echo "
                <hr>
                <b>Gender: </b> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfor"]) || array_key_exists("userInfor", $context) ? $context["userInfor"] : (function () { throw new RuntimeError('Variable "userInfor" does not exist.', 13, $this->source); })()), "gender", [], "any", false, false, false, 13), "html", null, true);
        echo "
                <form class=\"mt-4 p-4 bg-light\" method=\"post\">
<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_show");
        echo "\" class=\"btn\" style=\"background-color: yellowgreen; color: white\">Back to the Book list</a>

                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 15,  88 => 13,  83 => 11,  78 => 9,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
        <div class=\"row mt-3 mb-4\">
            <div class=\"col-md-8\">
                <h1 class=\"mt-4 mt-md-0\"><b>Name: </b>{{ userInfor.name }}</h1>
                <hr>
                <b>Email: </b>{{ userInfor.email }}
                <hr>
                <b>Phone number: </b>{{ userInfor.phonenumber }}
                <hr>
                <b>Gender: </b> {{ userInfor.gender }}
                <form class=\"mt-4 p-4 bg-light\" method=\"post\">
<a href=\"{{ path('book_show') }}\" class=\"btn\" style=\"background-color: yellowgreen; color: white\">Back to the Book list</a>

                </form>
            </div>
        </div>
    </div>
{% endblock %}

", "user/index.html.twig", "C:\\Users\\LENOVO\\ASM\\ASM\\templates\\user\\index.html.twig");
    }
}
