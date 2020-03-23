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

/* pages/inscription.html.twig */
class __TwigTemplate_5ed6587ed0325525528bf793c6b2ac3840233f530689f277885144c03baaf4b0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/inscription.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Cowoit - connexion</title>
        <meta name=\"viewport\" content=\"initial-scale=1.0\">
        <meta charset=\"utf-8\">
        <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moncss.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\" integrity=\"sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm\" crossorigin=\"anonymous\"></script>

    </head>
    <body>
    <center><img class=\"logo_accueil\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"/></center>
        ";
        // line 16
        echo "    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\">Cowoit</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navTrajets\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Retour <span class=\"sr-only\">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <form>
        <div class=\"form-group\">
            <label for=\"name\">Nom</label>
            <input autocomplete=\"off\" type=\"text\" class=\"form-control\" id=\"name\">
        </div>
        <div class=\"form-group\">
            <label for=\"name\">Prénom</label>
            <input autocomplete=\"off\" type=\"text\" class=\"form-control\" id=\"name\">
        </div>
        <div class=\"form-group\">
            <label for=\"email\">Email</label>
            <input autocomplete=\"off\" type=\"email\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\">
            <small id=\"emailHelp\" class=\"form-text text-muted\">Ne pas partager son email</small>
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">Password</label>
            <input autocomplete=\"off\" type=\"password\" class=\"form-control\" id=\"password\">
            <small id=\"passwordHelp\" class=\"form-text text-muted\">Votre mot de passe doit rester confidentiel</small>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
    </form>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  65 => 16,  61 => 14,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title>Cowoit - connexion</title>
        <meta name=\"viewport\" content=\"initial-scale=1.0\">
        <meta charset=\"utf-8\">
        <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <link href=\"{{ asset('moncss.css') }}\" rel=\"stylesheet\">
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\" integrity=\"sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm\" crossorigin=\"anonymous\"></script>

    </head>
    <body>
    <center><img class=\"logo_accueil\" src=\"{{ asset('images/logo.png') }}\"/></center>
        {# /templates/favoris.html.twig #}
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\">Cowoit</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navTrajets\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('accueil') }}\">Retour <span class=\"sr-only\">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <form>
        <div class=\"form-group\">
            <label for=\"name\">Nom</label>
            <input autocomplete=\"off\" type=\"text\" class=\"form-control\" id=\"name\">
        </div>
        <div class=\"form-group\">
            <label for=\"name\">Prénom</label>
            <input autocomplete=\"off\" type=\"text\" class=\"form-control\" id=\"name\">
        </div>
        <div class=\"form-group\">
            <label for=\"email\">Email</label>
            <input autocomplete=\"off\" type=\"email\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\">
            <small id=\"emailHelp\" class=\"form-text text-muted\">Ne pas partager son email</small>
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">Password</label>
            <input autocomplete=\"off\" type=\"password\" class=\"form-control\" id=\"password\">
            <small id=\"passwordHelp\" class=\"form-text text-muted\">Votre mot de passe doit rester confidentiel</small>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
    </form>
</body>
</html>
", "pages/inscription.html.twig", "/var/www/html/monpremiersite/templates/pages/inscription.html.twig");
    }
}
