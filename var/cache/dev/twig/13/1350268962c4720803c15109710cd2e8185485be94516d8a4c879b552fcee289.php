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

/* book/create.html.twig */
class __TwigTemplate_b81fca958d2586bf7c7fa653bc3c9dd5bb85bb7c1d469c1d3a3e0ca7d4a214d9 extends Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/create.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "book/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\">
        <label for=\"name\">Name:</label>
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "book_name", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Book name"]]);
        // line 11
        echo "
        <div class=\"invalid-feedback\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "book_name", [], "any", false, false, false, 13), 'errors');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"description\">Description:</label>
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
        // line 23
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"author_id\">Author:</label>
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "author_id", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Author"]]);
        // line 32
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"category_id\">Category:</label>
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "category_id", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Category"]]);
        // line 41
        echo "
    </div>

    <div class=\"form-group\">
            <label for=\"image\">Image URL:</label>
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "image", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Image URL"]]);
        // line 51
        echo "
        </div>
    <input type=\"submit\" name=\"create_book\" value=\"Create\" class=\"btn btn-primary\"/>
    ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "book/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 54,  116 => 51,  114 => 46,  107 => 41,  105 => 36,  99 => 32,  97 => 27,  91 => 23,  89 => 18,  81 => 13,  77 => 11,  75 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block body %}
    {{ form_start(form) }}
    <div class=\"form-group\">
        <label for=\"name\">Name:</label>
        {{ form_widget(form.book_name,{
            'attr':{
                'class':'form-control',
                'placeholder': 'Book name'
            }
        }) }}
        <div class=\"invalid-feedback\">
            {{ form_errors(form.book_name) }}
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"description\">Description:</label>
        {{ form_widget(form.description,{
            'attr':{
                'class':'form-control',
                'placeholder': 'Description'
            }
        }) }}
    </div>
    <div class=\"form-group\">
        <label for=\"author_id\">Author:</label>
        {{ form_widget(form.author_id,{
            'attr':{
                'class':'form-control',
                'placeholder': 'Author'
            }
        }) }}
    </div>
    <div class=\"form-group\">
        <label for=\"category_id\">Category:</label>
        {{ form_widget(form.category_id,{
            'attr':{
                'class':'form-control',
                'placeholder': 'Category'
            }
        }) }}
    </div>

    <div class=\"form-group\">
            <label for=\"image\">Image URL:</label>
            {{ form_widget(form.image,{
                'attr':{
                    'class':'form-control',
                    'placeholder': 'Image URL'
                }
            }) }}
        </div>
    <input type=\"submit\" name=\"create_book\" value=\"Create\" class=\"btn btn-primary\"/>
    {{ form_end(form) }}
{% endblock %}
", "book/create.html.twig", "C:\\Users\\LENOVO\\ASM\\ASM\\templates\\book\\create.html.twig");
    }
}
