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

/* pages/macros.html.twig */
class __TwigTemplate_c1fd9acce5d756ce16f623c426b2228d79239074aa37dd647666f401066dfed8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/macros.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/macros.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Macros</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    </head>
    <body>
        <h1>Macros</h1>
        
        ";
        // line 17
        echo "        ";
        // line 18
        echo "        
        ";
        // line 19
        $macros["msg"] = $this->macros["msg"] = $this->loadTemplate("pages/alertes.html.twig", "pages/macros.html.twig", 19)->unwrap();
        // line 20
        echo "        
        ";
        // line 21
        echo twig_call_macro($macros["msg"], "macro_alert", ["Attention!", "Warning"], 21, $context, $this->getSourceContext());
        echo "
        ";
        // line 22
        echo twig_call_macro($macros["msg"], "macro_alert", ["Erreur fatale!", "Danger"], 22, $context, $this->getSourceContext());
        echo "
        
        Date anglaise
        ";
        // line 25
        $context["dateAnglaise"] = twig_date_format_filter($this->env, "now", "m/d/Y");
        // line 26
        echo "        ";
        echo twig_escape_filter($this->env, (isset($context["dateAnglaise"]) || array_key_exists("dateAnglaise", $context) ? $context["dateAnglaise"] : (function () { throw new RuntimeError('Variable "dateAnglaise" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "
        
        Date française
        ";
        // line 29
        $context["dateFrancaise"] = twig_date_format_filter($this->env, "now", (isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new RuntimeError('Variable "format" does not exist.', 29, $this->source); })()));
        // line 30
        echo "        ";
        echo twig_escape_filter($this->env, (isset($context["dateFrancaise"]) || array_key_exists("dateFrancaise", $context) ? $context["dateFrancaise"] : (function () { throw new RuntimeError('Variable "dateFrancaise" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  89 => 29,  82 => 26,  80 => 25,  74 => 22,  70 => 21,  67 => 20,  65 => 19,  62 => 18,  60 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Macros</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    </head>
    <body>
        <h1>Macros</h1>
        
        {#Hello {{ qui|convLettreChiffre(\"a\", 4) }}#}
        {#{{ area(2,4) }}#}
        
        {% import 'pages/alertes.html.twig' as msg %}
        
        {{ msg.alert('Attention!', 'Warning') }}
        {{ msg.alert('Erreur fatale!', 'Danger') }}
        
        Date anglaise
        {% set dateAnglaise = \"now\"|date(\"m/d/Y\") %}
        {{ dateAnglaise }}
        
        Date française
        {% set dateFrancaise = \"now\"|date(format) %}
        {{ dateFrancaise }}
    </body>
</html>
", "pages/macros.html.twig", "/var/www/html/monpremiersite/templates/pages/macros.html.twig");
    }
}
