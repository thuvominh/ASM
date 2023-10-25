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

/* security/login.html.twig */
class __TwigTemplate_04449a57b9d364e986fea207d428f05bbfc661f899f94ec599e6a960cbba8912 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-10 ml-md-auto\">
            <div class=\"\">
                <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px;\">
                    <div class=\"card-body\">
                        <form class=\"form-horizontal\" role=\"form\" method=\"post\">
                            ";
        // line 12
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "                                <div class=\"alert alert-danger\">
                                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageKey", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageData", [], "any", false, false, false, 14), "security"), "html", null, true);
            echo "
                                </div>
                            ";
        }
        // line 16
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "                                <div class=\"mb-3\">
                                    You are logged in as ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "username", [], "any", false, false, false, 18), "html", null, true);
            echo ",
                                    <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                </div>
                            ";
        }
        // line 22
        echo "                            <div class=\"card-header mb-3\">Please sign in</div>
                            <div class=\"form-group\">
                                <label
           for=\"email\" class=\"col-md-4 control-label\"
                                >E-Mail Address</label
                                >
                                <div class=\"col-md-12\">
                                    <input
                                            id=\"inputEmail\"
                                            type=\"email\"
                                            class=\"form-control\"
                                            name=\"email\"
                                            value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\"
                                            required
                                            autofocus
                                    />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"col-md-4 control-label\"
                                >Password</label
                                >
                                <div class=\"col-md-12\">
                                    <input
                                            id=\"inputPassword\"
                                            type=\"password\"
                                            class=\"form-control\"
                                            name=\"password\"
                                            required
                                    />
                                </div>
                            </div>
                            <input
                                    type=\"hidden\"
                                    name=\"_csrf_token\"
                                    value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                            />
                            <div class=\"form-group\">
                                <div class=\"col-md-12\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-btn fa-sign-in\"></i> Login
                                    </button>
                                </div>
                            </div>
                            <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
        echo "\">Back to the Book list</a>
                        </form>
                    </div>
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 66,  164 => 57,  138 => 34,  124 => 22,  118 => 19,  114 => 18,  111 => 17,  108 => 16,  102 => 14,  99 => 13,  97 => 12,  88 => 5,  78 => 4,  59 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/security/login.html.twig #}
{% extends 'base.html.twig' %}
{% block title %}Log in!{% endblock %}
{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-10 ml-md-auto\">
            <div class=\"\">
                <div class=\"card bg-light mb-3 mt-5\" style=\"width: 800px;\">
                    <div class=\"card-body\">
                        <form class=\"form-horizontal\" role=\"form\" method=\"post\">
                            {% if error %}
                                <div class=\"alert alert-danger\">
                                    {{ error.messageKey|trans(error.messageData, 'security') }}
                                </div>
                            {% endif %} {% if app.user %}
                                <div class=\"mb-3\">
                                    You are logged in as {{ app.user.username }},
                                    <a href=\"{{ path('app_logout') }}\">Logout</a>
                                </div>
                            {% endif %}
                            <div class=\"card-header mb-3\">Please sign in</div>
                            <div class=\"form-group\">
                                <label
           for=\"email\" class=\"col-md-4 control-label\"
                                >E-Mail Address</label
                                >
                                <div class=\"col-md-12\">
                                    <input
                                            id=\"inputEmail\"
                                            type=\"email\"
                                            class=\"form-control\"
                                            name=\"email\"
                                            value=\"{{ last_username }}\"
                                            required
                                            autofocus
                                    />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"col-md-4 control-label\"
                                >Password</label
                                >
                                <div class=\"col-md-12\">
                                    <input
                                            id=\"inputPassword\"
                                            type=\"password\"
                                            class=\"form-control\"
                                            name=\"password\"
                                            required
                                    />
                                </div>
                            </div>
                            <input
                                    type=\"hidden\"
                                    name=\"_csrf_token\"
                                    value=\"{{ csrf_token('authenticate') }}\"
                            />
                            <div class=\"form-group\">
                                <div class=\"col-md-12\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-btn fa-sign-in\"></i> Login
                                    </button>
                                </div>
                            </div>
                            <a href=\"{{ path('welcome') }}\">Back to the Book list</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "security/login.html.twig", "C:\\Users\\LENOVO\\ASM\\ASM\\templates\\security\\login.html.twig");
    }
}
