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

/* pages/page.html.twig */
class __TwigTemplate_54070d526390a0d7fbd761b60f88b23de61f85186009e21f214ab32d32d30294 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/page.html.twig"));

        // line 2
        echo "<h1>Bonjour</h1>

<nav class=\"menu\">
  <ul>
    <li><a href=\"pages/accueil\">Trajets</a></li>
    <li><a href=\"#Livres\">Favoris</a></li>
    <li><a href=\"#Adherents\">Mon compte</a></li>
  </ul>
</nav>

";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["etatPDO"]) || array_key_exists("etatPDO", $context) ? $context["etatPDO"] : (function () { throw new RuntimeError('Variable "etatPDO" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# /templates/hello.html.twig #}
<h1>Bonjour</h1>

<nav class=\"menu\">
  <ul>
    <li><a href=\"pages/accueil\">Trajets</a></li>
    <li><a href=\"#Livres\">Favoris</a></li>
    <li><a href=\"#Adherents\">Mon compte</a></li>
  </ul>
</nav>

{{ etatPDO }}
", "pages/page.html.twig", "/var/www/html/monpremiersite/templates/pages/page.html.twig");
    }
}
