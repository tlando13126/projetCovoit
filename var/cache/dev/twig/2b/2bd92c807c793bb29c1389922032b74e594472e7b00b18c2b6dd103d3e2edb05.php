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

/* pages/accueil.html.twig */
class __TwigTemplate_0e7908bcb2fa9e15fc1b857736771a28e9fe9bbeed5bcd91a5ce88d1f8551538 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/accueil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>Cowoit - connexion</title>
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
\t\t\t<a class=\"navbar-brand\" href=\"#\">Cowoit</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t</nav>

\t\t<form action=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["chemainControllerConnexion"]) || array_key_exists("chemainControllerConnexion", $context) ? $context["chemainControllerConnexion"] : (function () { throw new RuntimeError('Variable "chemainControllerConnexion" does not exist.', 23, $this->source); })()));
        echo "\" method=\"POST\">
\t\t\t<div class=\"form-row\">
\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"inputEmail4\">Adresse email:
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"exemple@exemple.fr\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"inputPassword4\">Mot de passe:
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
\t\t\t</form>
\t\t</body>
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  69 => 18,  65 => 16,  61 => 14,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<title>Cowoit - connexion</title>
\t\t<meta name=\"viewport\" content=\"initial-scale=1.0\">
\t\t<meta charset=\"utf-8\">
\t\t<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t\t<link href=\"{{ asset('moncss.css') }}\" rel=\"stylesheet\">
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\" integrity=\"sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm\" crossorigin=\"anonymous\"></script>

\t</head>
\t<body>
\t\t<center><img class=\"logo_accueil\" src=\"{{ asset('images/logo.png') }}\"/></center>
\t\t{# /templates/favoris.html.twig #}
\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t\t<a class=\"navbar-brand\" href=\"#\">Cowoit</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"{{ path('accueil') }}\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t</nav>

\t\t<form action=\"{{path(chemainControllerConnexion)}}\" method=\"POST\">
\t\t\t<div class=\"form-row\">
\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"inputEmail4\">Adresse email:
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"exemple@exemple.fr\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t<label for=\"inputPassword4\">Mot de passe:
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
\t\t\t</form>
\t\t</body>
\t</body>
</html>
", "pages/accueil.html.twig", "/var/www/html/monpremiersite/templates/pages/accueil.html.twig");
    }
}
