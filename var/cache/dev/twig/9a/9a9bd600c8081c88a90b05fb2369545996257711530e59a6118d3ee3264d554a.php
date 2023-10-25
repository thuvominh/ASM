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

/* bookstore/index.html.twig */
class __TwigTemplate_c806023407cbffaa633d9441bc5aa17aa68b636961c24137b13c1d6e5b9f1572 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bookstore/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bookstore/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bookstore/index.html.twig", 1);
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

       
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bookstore/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"mt-3 mb-4\" style=\"padding-left: 425px;
                                         font-weight: 600;
                                         text-shadow: 2px 2px rgba(0, 0, 0, 0.5);
                                         color: yellowgreen;\">TANNAT group</h1>
        <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\" style=\"padding-left: 90px;\">Lê Minh Nghĩa</h5>
                            <img src=\"https://scontent.fdad1-2.fna.fbcdn.net/v/t39.30808-6/271613613_1463053787429692_4180674917761294873_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=xsx6kp2yMg4AX_OvwLb&_nc_ht=scontent.fdad1-2.fna&oh=00_AT83dzzexr5mhPj0iqxAvFmGpFro5V21bpeOGko1iOWUjw&oe=6227930C\"
                            class=\"rounded mx-auto d-block\"
                            alt=\"...\"
                            style= \"object-fit: cover;
                                        width: 100%;
                                        height: 100%;
                                        object-position: center;
                                        padding-bottom:10px;
                                        \"
                            >
                            <div class=\"d-flex justify-content-between align-item-center\">
                            <a href=\"#\" class=\"btn btn-warning\" style=\"background-color: #1B74E4; color: white;\">Facebook</a>
                            <a href=\"#\" class=\"btn btn-warning\" style=\"background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
\">Instagram</a>
                            <a href=\"#\" class=\"btn btn-warning\" style=\"background:rgb(206,145,164)\">Tiktok</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-4\">
                                    <div class=\"card mb-4\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title\" style=\"padding-left: 65px;\">Hồ Thị Ngọc Thành</h5>
                                            <img src=\"https://scontent.fdad1-1.fna.fbcdn.net/v/t1.6435-9/75435762_609141266288893_4292100220646326272_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_ohc=PA7f0ElHWyAAX8HDsbX&_nc_ht=scontent.fdad1-1.fna&oh=00_AT9u49RYsWbOGS4j4QrOXMTdzkVK2Opq-AV9mfqYOSc1Wg&oe=624947DE\"
                                            class=\"rounded mx-auto d-block\"
                                            alt=\"...\"
                                            style= \"object-fit: cover;
                                                        width: 100%;
                                                        height: 100%;
                                                        object-position: center;
                                                        padding-bottom:10px;
                                                        \"
                                            >
                                            <div class=\"d-flex justify-content-between align-item-center\">
                                            <a href=\"#\" class=\"btn btn-warning\" style=\"background-color: #1B74E4; color: white;\">Facebook</a>
                                            <a href=\"#\" class=\"btn btn-warning\" style=\"background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
                \">Instagram</a>
                                            <a href=\"#\" class=\"btn btn-warning\" style=\"background:rgb(206,145,164)\">Tiktok</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                                    <div class=\"card mb-4\">
                                                        <div class=\"card-body\">
                                                            <h5 class=\"card-title\" style=\"padding-left: 90px;\">Lê Thị Bình An</h5>
                                                            <img src=\"https://scontent.fdad2-1.fna.fbcdn.net/v/t1.6435-9/131286963_840956483391261_1829937638746346401_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=X-1eghH7XX4AX9CiM6P&_nc_ht=scontent.fdad2-1.fna&oh=00_AT_FOuuss_xsbbsFjo6hRe_3irvc5nznXa6Q6XC3PbFL1A&oe=62493A62\"
                                                            class=\"rounded mx-auto d-block\"
                                                            alt=\"...\"
                                                            style= \"object-fit: cover;
                                                                        width: 100%;
                                                                        height: 100%;
                                                                        object-position: center;
                                                                        padding-bottom:10px;
                                                                        \"
                                                            >
                                                            <div class=\"d-flex justify-content-between align-item-center\">
                                                            <a href=\"#\" class=\"btn btn-warning\" style=\"background-color: #1B74E4; color: white;\">Facebook</a>
                                                            <a href=\"#\" class=\"btn btn-warning\" style=\"background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
                                \">Instagram</a>
                                                            <a href=\"#\" class=\"btn btn-warning\" style=\"background:rgb(206,145,164)\">Tiktok</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
        </div>
    </div>
{% endblock %}", "bookstore/index.html.twig", "C:\\Users\\LENOVO\\ASM\\ASM\\templates\\bookstore\\index.html.twig");
    }
}
