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

/* property/show.html.twig */
class __TwigTemplate_5b323aba4026d4b298ad25dee095da60dfb14a4cffd1371c3a8c44b775474c6f extends \Twig\Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "property/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), "html", null, true);
        
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
        echo "    <div class=\"jumbotron\">
        <div class =\"container\">
            <div class =\"row\">

                <div class =\"col-md-8\">
                </div>
                
                <div class =\"col-md-4\">
                    <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
                    <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 14, $this->source); })()), "rooms", [], "any", false, false, false, 14), "html", null, true);
        echo " pièces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 14, $this->source); })()), "surface", [], "any", false, false, false, 14), "html", null, true);
        echo " m²</h2>
                    <div class =\"text-primary\" style =\"font-size:4rem; font-weight: bold;\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 15, $this->source); })()), "formattedprice", [], "any", false, false, false, 15), "html", null, true);
        echo " €</div>
                    <a href=\"#\" class=\"btn btn-primary\">Contacter L'agence</a>
                </div>
            </div>
        </div>
    </div>
    <div class = \"container mt-4\">


        <p>";
        // line 24
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), "html", null, true));
        echo "</p>
        <div class =\"row\">
            <div class =\"col-md-8\">
                <h2>Caractéristiques</h2>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Surface habitable</td>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 31, $this->source); })()), "surface", [], "any", false, false, false, 31), "html", null, true);
        echo " m²</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 35, $this->source); })()), "rooms", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 39, $this->source); })()), "bedrooms", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Étage</td>
                        <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 43, $this->source); })()), "floor", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chauffage</td>
                        <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 47, $this->source); })()), "heatType", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
                    </tr>
                </table>
            </div>
            <div class =\"col-md-4\">
                <h2>Spécificités</h2>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "property/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 47,  151 => 43,  144 => 39,  137 => 35,  130 => 31,  120 => 24,  108 => 15,  102 => 14,  98 => 13,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title property.title %}

{% block body %}
    <div class=\"jumbotron\">
        <div class =\"container\">
            <div class =\"row\">

                <div class =\"col-md-8\">
                </div>
                
                <div class =\"col-md-4\">
                    <h1>{{ property.title }}</h1>
                    <h2>{{ property.rooms }} pièces - {{ property.surface }} m²</h2>
                    <div class =\"text-primary\" style =\"font-size:4rem; font-weight: bold;\">{{ property.formattedprice }} €</div>
                    <a href=\"#\" class=\"btn btn-primary\">Contacter L'agence</a>
                </div>
            </div>
        </div>
    </div>
    <div class = \"container mt-4\">


        <p>{{ property.description | nl2br }}</p>
        <div class =\"row\">
            <div class =\"col-md-8\">
                <h2>Caractéristiques</h2>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Surface habitable</td>
                        <td>{{ property.surface }} m²</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>{{ property.rooms }}</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>{{ property.bedrooms }}</td>
                    </tr>
                    <tr>
                        <td>Étage</td>
                        <td>{{ property.floor }}</td>
                    </tr>
                    <tr>
                        <td>Chauffage</td>
                        <td>{{ property.heatType }}</td>
                    </tr>
                </table>
            </div>
            <div class =\"col-md-4\">
                <h2>Spécificités</h2>
            </div>
        </div>
    </div>

{%  endblock %}

", "property/show.html.twig", "/Users/arthur/PhpstormProjects/tutoSymfony/agence_immo/templates/property/show.html.twig");
    }
}
