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

/* pages/filtres.html.twig */
class __TwigTemplate_287ea92222d598aa42e78cd1a949368e9fe7be48e38edbe584664981b1a2d912 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/filtres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/filtres.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Filtres</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    </head>
    <body>
        <h1>Filtres</h1>
        <ul>
            ";
        // line 17
        echo "            ";
        $context["montableau"] = [0 => 1, 1 => 2, 2 => 3];
        // line 18
        echo "            ";
        // line 19
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["montableau"]) || array_key_exists("montableau", $context) ? $context["montableau"] : (function () { throw new RuntimeError('Variable "montableau" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
            // line 20
            echo "                <li>";
            echo twig_escape_filter($this->env, $context["elem"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </ul>
        <div>Fonction range qui retour un tableau</div>
        
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 26
            echo "                ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            
            <div>Filtres, inverser un phrase</div>
            
            ";
        // line 31
        $context["mavariable"] = "blabla";
        // line 32
        echo "            ";
        echo twig_escape_filter($this->env, (isset($context["mavariable"]) || array_key_exists("mavariable", $context) ? $context["mavariable"] : (function () { throw new RuntimeError('Variable "mavariable" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "
            ";
        // line 33
        echo twig_escape_filter($this->env, twig_reverse_filter($this->env, (isset($context["mavariable"]) || array_key_exists("mavariable", $context) ? $context["mavariable"] : (function () { throw new RuntimeError('Variable "mavariable" does not exist.', 33, $this->source); })())), "html", null, true);
        echo "
            
            <div>Exemple de la puissance de twig</div>
            
            ";
        // line 37
        list($context["monTableau"], $context["article"]) =         [[0 => 1, 1 => 2, 2 => 3], ["titre" => "Titre de l'article", "contenu" => "Contenu de l'article"]];
        // line 42
        echo "            
            ";
        // line 43
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["monTableau"]) || array_key_exists("monTableau", $context) ? $context["monTableau"] : (function () { throw new RuntimeError('Variable "monTableau" does not exist.', 43, $this->source); })()), 1, [], "any", false, false, false, 43) . "ET") . twig_get_attribute($this->env, $this->source, (isset($context["monTableau"]) || array_key_exists("monTableau", $context) ? $context["monTableau"] : (function () { throw new RuntimeError('Variable "monTableau" does not exist.', 43, $this->source); })()), 0, [], "any", false, false, false, 43)), "html", null, true);
        echo " ";
        // line 44
        echo "            ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 44, $this->source); })()), "titre", [], "any", false, false, false, 44), "html", null, true);
        echo " ";
        // line 45
        echo "            ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 45, $this->source); })()), "contenu", [], "any", false, false, false, 45), "html", null, true);
        echo " ";
        // line 46
        echo "            
            <div>Création de ses propres objets</div>
            
            Hello ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->convLC((isset($context["qui"]) || array_key_exists("qui", $context) ? $context["qui"] : (function () { throw new RuntimeError('Variable "qui" does not exist.', 49, $this->source); })()), "a", 4), "html", null, true);
        echo "
            
            ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->calculateArea(2, 4), "html", null, true);
        echo "
            
            
            
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/filtres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 51,  137 => 49,  132 => 46,  128 => 45,  124 => 44,  121 => 43,  118 => 42,  116 => 37,  109 => 33,  104 => 32,  102 => 31,  97 => 28,  88 => 26,  84 => 25,  79 => 22,  70 => 20,  65 => 19,  63 => 18,  60 => 17,  43 => 1,);
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
        <title>Filtres</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    </head>
    <body>
        <h1>Filtres</h1>
        <ul>
            {#Declaration du tableau montableau#}
            {% set montableau = [1, 2, 3] %}
            {#Parcours du tableau#}
            {% for elem in montableau %}
                <li>{{ elem }}</li>
            {% endfor %}
        </ul>
        <div>Fonction range qui retour un tableau</div>
        
            {% for i in range(1,5) %}
                {{ i }}
            {% endfor %}
            
            <div>Filtres, inverser un phrase</div>
            
            {% set mavariable = 'blabla' %}
            {{ mavariable }}
            {{ mavariable|reverse }}
            
            <div>Exemple de la puissance de twig</div>
            
            {% set monTableau, article = [1, 2, 3], {
                   'titre': \"Titre de l'article\",
                   'contenu': \"Contenu de l'article\"
                   }
            %}
            
            {{ monTableau.1 ~ 'ET' ~ monTableau.0 }} {# 2 ET 1#}
            {{ article.titre }} {#Titre de l'article#}
            {{ article.contenu }} {#Contenu de l'article#}
            
            <div>Création de ses propres objets</div>
            
            Hello {{ qui|convLettreChiffre(\"a\",4) }}
            
            {{ area(2,4) }}
            
            
            
    </body>
</html>
", "pages/filtres.html.twig", "/var/www/html/monpremiersite/templates/pages/filtres.html.twig");
    }
}
