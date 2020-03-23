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

/* pages/adherents.html.twig */
class __TwigTemplate_9e72bf7e1d4b4a7f967eb113a38eb68e6ebb373979369e9361ac767d95313bda extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/adherents.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/adherents.html.twig"));

        // line 1
        echo "<h1>Adherents</h1>
<nav class=\"menu\">
  <ul>
    <li><a href=\"accueil\">Accueil</a></li>
    <li><a href=\"livres\">Livres</a></li>
    <li><a href=\"fichesAdherents\">Fiches adhérents</a></li>
  </ul>
</nav>

<table>
    <th>Nom</th><th>Prenom</th>
    <tr>
        <td>Bernard</td><td>Lavoile</td>
    </tr>
    
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/adherents.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Adherents</h1>
<nav class=\"menu\">
  <ul>
    <li><a href=\"accueil\">Accueil</a></li>
    <li><a href=\"livres\">Livres</a></li>
    <li><a href=\"fichesAdherents\">Fiches adhérents</a></li>
  </ul>
</nav>

<table>
    <th>Nom</th><th>Prenom</th>
    <tr>
        <td>Bernard</td><td>Lavoile</td>
    </tr>
    
</table>", "pages/adherents.html.twig", "/var/www/html/monpremiersite/templates/pages/adherents.html.twig");
    }
}
