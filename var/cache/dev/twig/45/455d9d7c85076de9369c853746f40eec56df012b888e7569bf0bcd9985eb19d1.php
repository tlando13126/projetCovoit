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
class __TwigTemplate_b13e263f4f640b762a45400d17046c2ce390640aa447c85a839a8e56cff0dcb3 extends Template
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

        // line 1
        echo "<h1>Accueil</h1>
<nav class=\"menu\">
  <ul>
    <li><a href=\"contact\">Contact</a></li>
    <li><a href=\"livres\">Livres</a></li>
    <li><a href=\"adherents\">Adhérents</a></li>
    <li><a href=\"fichesAdherents\">Fiches adhérents</a></li>
  </ul>
</nav>

<form action=\"\" method=\"POST\" class=\"formulaire\">
  <div class=\"form-example\">
    <label for=\"name\">Enter your name: </label>
    <input type=\"text\" name=\"name\" id=\"name\" required>
  </div>
  <div class=\"form-example\">
    <label for=\"email\">Enter your email: </label>
    <input type=\"email\" name=\"email\" id=\"email\" required>
  </div>
  <div class=\"form-example\">
    <input type=\"submit\" value=\"Subscribe!\">
  </div>
</form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Accueil</h1>
<nav class=\"menu\">
  <ul>
    <li><a href=\"contact\">Contact</a></li>
    <li><a href=\"livres\">Livres</a></li>
    <li><a href=\"adherents\">Adhérents</a></li>
    <li><a href=\"fichesAdherents\">Fiches adhérents</a></li>
  </ul>
</nav>

<form action=\"\" method=\"POST\" class=\"formulaire\">
  <div class=\"form-example\">
    <label for=\"name\">Enter your name: </label>
    <input type=\"text\" name=\"name\" id=\"name\" required>
  </div>
  <div class=\"form-example\">
    <label for=\"email\">Enter your email: </label>
    <input type=\"email\" name=\"email\" id=\"email\" required>
  </div>
  <div class=\"form-example\">
    <input type=\"submit\" value=\"Subscribe!\">
  </div>
</form>", "pages/page.html.twig", "/var/www/html/monpremiersite/templates/pages/page.html.twig");
    }
}
