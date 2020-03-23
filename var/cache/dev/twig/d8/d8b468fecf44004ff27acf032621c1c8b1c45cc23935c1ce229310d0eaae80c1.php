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

/* pages/trajets.html.twig */
class __TwigTemplate_37ccd3ec13ed68e596d0c1e5a5719fe7515b3870db9da44eb667eb7f2f589c3d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/trajets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/trajets.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>Trajets</title>
\t\t<meta name=\"viewport\" content=\"initial-scale=1.0\">
\t\t<meta charset=\"utf-8\">
\t\t<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moncss.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\" integrity=\"sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm\" crossorigin=\"anonymous\"></script>

\t</head>
\t<body>
\t\t<center><img class=\"logo_accueil\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"/></center>
\t\t";
        // line 16
        echo "\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navFavoris\">
\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris");
        echo "\">Favoris
\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navFavoris\">
\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("monCompte");
        echo "\">Mon compte
\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navFavoris\">
\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 39
        echo "\">Se déconnecter
\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t\t<center><a href=\"#\" class=\"btn btn-primary btn-lg disabled\" role=\"button\" aria-disabled=\"true\">Proposer un covoiturage</a></center>
\t\t<table>
\t\t\t<table class=\"table\">
\t\t\t\t<thead class=\"thead-light\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">ID</th>
\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t<th scope=\"col\">Prenom</th>
\t\t\t\t\t\t<th scope=\"col\">Section</th>
\t\t\t\t\t\t<th scope=\"col\">Départ</th>
\t\t\t\t\t\t<th scope=\"col\">Arrivée</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">1</th>
\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t<td>SLAM</td>
\t\t\t\t\t\t<td>Pertuis</td>
\t\t\t\t\t\t<td>Avigon</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">2</th>
\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t<td>SLAM</td>
\t\t\t\t\t\t<td>Pertuis</td>
\t\t\t\t\t\t<td>Avigon</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">3</th>
\t\t\t\t\t\t<td>Larry</td>
\t\t\t\t\t\t<td>the Bird</td>
\t\t\t\t\t\t<td>SLAM</td>
\t\t\t\t\t\t<td>Pertuis</td>
\t\t\t\t\t\t<td>Avigon</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</body>
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/trajets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 39,  84 => 30,  71 => 20,  65 => 16,  61 => 14,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<title>Trajets</title>
\t\t<meta name=\"viewport\" content=\"initial-scale=1.0\">
\t\t<meta charset=\"utf-8\">
\t\t<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t\t<link href=\"{{ asset('moncss.css') }}\" rel=\"stylesheet\">
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\" integrity=\"sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm\" crossorigin=\"anonymous\"></script>

\t</head>
\t<body>
\t\t<center><img class=\"logo_accueil\" src=\"{{ asset('images/logo.png') }}\"/></center>
\t\t{# /templates/hello.html.twig #}
\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navFavoris\">
\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('favoris') }}\">Favoris
\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navFavoris\">
\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('monCompte') }}\">Mon compte
\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navFavoris\">
\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{#{{ path('deconnexion') }}#}\">Se déconnecter
\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t\t<center><a href=\"#\" class=\"btn btn-primary btn-lg disabled\" role=\"button\" aria-disabled=\"true\">Proposer un covoiturage</a></center>
\t\t<table>
\t\t\t<table class=\"table\">
\t\t\t\t<thead class=\"thead-light\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">ID</th>
\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t<th scope=\"col\">Prenom</th>
\t\t\t\t\t\t<th scope=\"col\">Section</th>
\t\t\t\t\t\t<th scope=\"col\">Départ</th>
\t\t\t\t\t\t<th scope=\"col\">Arrivée</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">1</th>
\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t<td>SLAM</td>
\t\t\t\t\t\t<td>Pertuis</td>
\t\t\t\t\t\t<td>Avigon</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">2</th>
\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t<td>SLAM</td>
\t\t\t\t\t\t<td>Pertuis</td>
\t\t\t\t\t\t<td>Avigon</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">3</th>
\t\t\t\t\t\t<td>Larry</td>
\t\t\t\t\t\t<td>the Bird</td>
\t\t\t\t\t\t<td>SLAM</td>
\t\t\t\t\t\t<td>Pertuis</td>
\t\t\t\t\t\t<td>Avigon</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</body>
\t</body>
</html>
", "pages/trajets.html.twig", "/var/www/html/monpremiersite/templates/pages/trajets.html.twig");
    }
}
