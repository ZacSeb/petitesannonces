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

/* users.html.twig */
class __TwigTemplate_9885941749678b06ed8ea1defec78b47a52491aa75f525a0cf1880f92e8afd66 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t";
        // line 11
        echo "
\t\t<!-- Axentix CSS minified version -->
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.3.2/dist/css/axentix.min.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">

\t\t";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "\t\t<!-- Axentix JS minified version -->
\t\t<script src=\"https://cdn.jsdelivr.net/npm/axentix@1.3.2/dist/js/axentix.min.js\"></script>
\t\t";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "\t</head>
\t<body class=\"layout with-sidenav\">
\t\t<header>
\t\t\t<nav class=\"navbar shadow-1 primary\">
\t\t\t\t<a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Ma_page_accueil");
        echo "\" class=\"navbar-brand\">Petites Annonces</a>
\t\t\t\t<div class=\"navbar-menu ml-auto\">
\t\t\t\t\t<a class=\"navbar-link\" href=\"#\">Accueil</a>
\t\t\t\t\t<a class=\"navbar-link\" href=\"#\">Link 2</a>
\t\t\t\t\t<a class=\"navbar-link\" href=\"#\">Link 3</a>
\t\t\t\t\t<a class=\"navbar-link\" href=\"#\">Link 4</a>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>
\t\t<div id=\"example-sidenav\" data-ax=\"sidenav\" class=\"sidenav shadow-1 large fixed white\">
\t\t\t<div class=\"sidenav-header\">
\t\t\t\t<button data-target=\"example-sidenav\" class=\"sidenav-trigger\">
\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t</button>
\t\t\t\t<img class=\"sidenav-logo dropshadow-1\" src=\"your_img_path\" alt=\"Logo\"/>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"sidenav-link active\">Mon profil</a>
\t\t\t<a href=\"#\" class=\"sidenav-link\">Mes annonces</a>
\t\t</div>

\t\t<main>
\t\t\t<!-- Code here the main content -->
\t\t\t<button data-target=\"example-sidenav\" class=\"btn rounded-1 press amaranth dark-1 sidenav-trigger hide-md-up\">
\t\t\t\tOpen sidenav
\t\t\t</button>
\t\t\t";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "\t\t</main>

\t\t<footer class=\"footer primary\">
\t\t\tCopyright © 2021 - Sébastien CAZI
\t\t</footer>


\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "\t\t\t";
        // line 18
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t\t";
        // line 23
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
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
        return "users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 54,  186 => 23,  184 => 22,  174 => 21,  164 => 18,  162 => 17,  152 => 16,  132 => 6,  113 => 55,  111 => 54,  83 => 29,  77 => 25,  75 => 21,  71 => 19,  69 => 16,  64 => 14,  59 => 11,  56 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t{# Run `composer require symfony/webpack-encore-bundle`
\t\t\t\t\t\t\t\t\t\t\t\t           and uncomment the following Encore helpers to start using Symfony UX #}

\t\t<!-- Axentix CSS minified version -->
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@1.3.2/dist/css/axentix.min.css\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">

\t\t{% block stylesheets %}
\t\t\t{#{{ encore_entry_link_tags('app') }}#}
\t\t{% endblock %}
\t\t<!-- Axentix JS minified version -->
\t\t<script src=\"https://cdn.jsdelivr.net/npm/axentix@1.3.2/dist/js/axentix.min.js\"></script>
\t\t{% block javascripts %}
\t\t\t{#{{ encore_entry_script_tags('app') }}#}
\t\t\t<script src=\"{{ asset('js/scripts.js') }}\"></script>
\t\t{% endblock %}
\t</head>
\t<body class=\"layout with-sidenav\">
\t\t<header>
\t\t\t<nav class=\"navbar shadow-1 primary\">
\t\t\t\t<a href=\"{{ path('Ma_page_accueil') }}\" class=\"navbar-brand\">Petites Annonces</a>
\t\t\t\t<div class=\"navbar-menu ml-auto\">
\t\t\t\t\t<a class=\"navbar-link\" href=\"#\">Accueil</a>
\t\t\t\t\t<a class=\"navbar-link\" href=\"#\">Link 2</a>
\t\t\t\t\t<a class=\"navbar-link\" href=\"#\">Link 3</a>
\t\t\t\t\t<a class=\"navbar-link\" href=\"#\">Link 4</a>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>
\t\t<div id=\"example-sidenav\" data-ax=\"sidenav\" class=\"sidenav shadow-1 large fixed white\">
\t\t\t<div class=\"sidenav-header\">
\t\t\t\t<button data-target=\"example-sidenav\" class=\"sidenav-trigger\">
\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t</button>
\t\t\t\t<img class=\"sidenav-logo dropshadow-1\" src=\"your_img_path\" alt=\"Logo\"/>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"sidenav-link active\">Mon profil</a>
\t\t\t<a href=\"#\" class=\"sidenav-link\">Mes annonces</a>
\t\t</div>

\t\t<main>
\t\t\t<!-- Code here the main content -->
\t\t\t<button data-target=\"example-sidenav\" class=\"btn rounded-1 press amaranth dark-1 sidenav-trigger hide-md-up\">
\t\t\t\tOpen sidenav
\t\t\t</button>
\t\t\t{% block body %}{% endblock %}
\t\t</main>

\t\t<footer class=\"footer primary\">
\t\t\tCopyright © 2021 - Sébastien CAZI
\t\t</footer>


\t</body>
</html>
", "users.html.twig", "C:\\Users\\Stagiaire\\petitesannonces\\templates\\users.html.twig");
    }
}
