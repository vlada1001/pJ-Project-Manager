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

/* task.html.twig */
class __TwigTemplate_8cef9c55f1c51f8582469f84a49d77a1a285a86b52830b245bc1e5edd614b57f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'pre_content' => [$this, 'block_pre_content'],
            'display_options' => [$this, 'block_display_options'],
            'new_card' => [$this, 'block_new_card'],
            'page_content' => [$this, 'block_page_content'],
            'javascripts_onload_document' => [$this, 'block_javascripts_onload_document'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task.html.twig"));

        $this->parent = $this->loadTemplate("index.html.twig", "task.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 4
        echo "    <div class=\"container text-center\">
        <h3 class=\"font-weight-light\">
            Zadatak: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "
        </h3>

        <p>Projekat: <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_project", ["project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 9, $this->source); })()), "project", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\"
                        style=\"text-decoration: underline darkgrey\" data-toggle=\"tooltip\"
                        data-placement=\"bottom\"
                        title=\"Rok: ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 12, $this->source); })()), "project", [], "any", false, false, false, 12), "endDate", [], "any", false, false, false, 12), "d.m.Y"), "html", null, true);
        echo ".\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 12, $this->source); })()), "project", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</a></p>
        <div class=\"row justify-content-center padding-10\" style=\"margin: 0 !important\">
            <div class=\"col-6 col-sm-3\">
                <p>Prioritet: </p> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 15, $this->source); })()), "priority", [], "any", false, false, false, 15), "html", null, true);
        echo "
            </div>
            <div class=\"col-6 col-sm-3\">
                <p>Status: </p>
                <p
                        ";
        // line 20
        if ((0 === twig_compare($this->extensions['App\Twig\BoolExtension']->boolTranslate(twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 20, $this->source); })()), "completed", [], "any", false, false, false, 20)), "Završeno"))) {
            // line 21
            echo "                            style=\"color:#4dd64d !important;\"
                        ";
        } else {
            // line 23
            echo "                            style=\"color:indianred !important;\"
                        ";
        }
        // line 25
        echo "                >";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\BoolExtension']->boolTranslate(twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 25, $this->source); })()), "completed", [], "any", false, false, false, 25)), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_pre_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pre_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pre_content"));

        // line 32
        echo "    <div class=\"padding-10\"></div>
    <div class=\"container padding-10\">
        <div class=\"row justify-content-center\" style=\"margin-right: 0!important;\">
            <div class=\"col col-md-5\">
                <p>Napravio: </p>
                ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 37, $this->source); })()), "creator", [], "any", false, false, false, 37)) {
            // line 38
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 38, $this->source); })()), "creator", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"
                       style=\"text-decoration: underline rgba(0, 0, 0, 0.5)\" data-toggle=\"tooltip\"
                       data-placement=\"bottom\"
                       title=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 41, $this->source); })()), "creator", [], "any", false, false, false, 41), "email", [], "any", false, false, false, 41), "html", null, true);
            echo "\">
                        ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 42, $this->source); })()), "creator", [], "any", false, false, false, 42), "firstName", [], "any", false, false, false, 42), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 42, $this->source); })()), "creator", [], "any", false, false, false, 42), "lastName", [], "any", false, false, false, 42), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 45
            echo "                    <p>/</p>
                ";
        }
        // line 47
        echo "            </div>
            <div class=\"col col-md-5\">
                <p>Trenutno zadužen: </p>
                ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 50, $this->source); })()), "userWorking", [], "any", false, false, false, 50)) {
            // line 51
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 51, $this->source); })()), "userWorking", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\"
                       style=\"text-decoration: underline rgba(0, 0, 0, 0.5)\" data-toggle=\"tooltip\"
                       data-placement=\"bottom\"
                       title=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 54, $this->source); })()), "userWorking", [], "any", false, false, false, 54), "email", [], "any", false, false, false, 54), "html", null, true);
            echo "\">
                        ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 55, $this->source); })()), "userWorking", [], "any", false, false, false, 55), "firstName", [], "any", false, false, false, 55), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 55, $this->source); })()), "userWorking", [], "any", false, false, false, 55), "lastName", [], "any", false, false, false, 55), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 58
            echo "                    <p>/</p>
                ";
        }
        // line 60
        echo "            </div>
        </div>

        <div class=\"row padding-10 justify-content-center\" style=\"margin-right: 0 !important\">
            <div class=\"col col-md-5\">
                <p>Datum kreiranja: </p>
                ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 66, $this->source); })()), "creationDate", [], "any", false, false, false, 66)) {
            // line 67
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 67, $this->source); })()), "creationDate", [], "any", false, false, false, 67), "full", "", null, "gregorian", "sr_Latn"), "html", null, true);
            echo "
                ";
        } else {
            // line 69
            echo "                    <p>/</p>
                ";
        }
        // line 71
        echo "            </div>
            <div class=\"col col-md-5\">
                <p>Rok završetka: </p>
                ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 74, $this->source); })()), "endDate", [], "any", false, false, false, 74)) {
            // line 75
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 75, $this->source); })()), "endDate", [], "any", false, false, false, 75), "full", "", null, "gregorian", "sr_Latn"), "html", null, true);
            echo "
                ";
        } else {
            // line 77
            echo "                    <p>/</p>
                ";
        }
        // line 79
        echo "            </div>
        </div>

        <div class=\"row text-justify justify-content-center padding-10\">
            <div class=\"col-12 col-md-8\">
                <p>Opis: </p>
                ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 85, $this->source); })()), "description", [], "any", false, false, false, 85)) {
            // line 86
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 86, $this->source); })()), "description", [], "any", false, false, false, 86), "html", null, true);
            echo "
                ";
        } else {
            // line 88
            echo "                    <p>/</p>
                ";
        }
        // line 90
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_display_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "display_options"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "display_options"));

        // line 96
        echo "    <div class=\"line-small padding-10\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_new_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_card"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_card"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 103
        echo "    ";
        if ((( !(null === twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 103, $this->source); })()), "creator", [], "any", false, false, false, 103)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 103, $this->source); })()), "creator", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103)))) || ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 103, $this->source); })()), "userWorking", [], "any", false, false, false, 103)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 103, $this->source); })()), "userWorking", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103)))))) {
            // line 104
            echo "        <div class=\"container padding-10\">
            <div class=\"row justify-content-center\" style=\"margin: 0!important;\">
                <div class=\"col-6 col-sm-3 padding-10\">
                    <div class=\"text-center\">
                        <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_task", ["project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 108, $this->source); })()), "project", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108), "task_id" => twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108)]), "html", null, true);
            echo "\"
                           class=\"btn btn-outline-dark text-uppercase font-weight-normal hover-white-color\"
                           value=\"submit\"
                           type=\"submit\">
                            Promeni
                        </a>
                    </div>
                </div>
                <div class=\"col-6 col-sm-3 padding-10\">
                    <div class=\"text-center\">
                        <button class=\"btn btn-danger text-uppercase font-weight-normal\" name=\"delete\" value=\"delete\"
                                type=\"submit\">
                            Obriši
                        </button>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_javascripts_onload_document($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts_onload_document"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts_onload_document"));

        // line 130
        echo "    ";
        $this->displayParentBlock("javascripts_onload_document", $context, $blocks);
        echo "

    \$('[data-toggle=\"tooltip\"]').tooltip();
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 130,  361 => 129,  331 => 108,  325 => 104,  322 => 103,  312 => 102,  294 => 99,  283 => 96,  273 => 95,  260 => 90,  256 => 88,  250 => 86,  248 => 85,  240 => 79,  236 => 77,  230 => 75,  228 => 74,  223 => 71,  219 => 69,  213 => 67,  211 => 66,  203 => 60,  199 => 58,  191 => 55,  187 => 54,  180 => 51,  178 => 50,  173 => 47,  169 => 45,  161 => 42,  157 => 41,  150 => 38,  148 => 37,  141 => 32,  131 => 31,  115 => 25,  111 => 23,  107 => 21,  105 => 20,  97 => 15,  89 => 12,  83 => 9,  77 => 6,  73 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index.html.twig' %}

{% block page_title %}
    <div class=\"container text-center\">
        <h3 class=\"font-weight-light\">
            Zadatak: {{ task.name }}
        </h3>

        <p>Projekat: <a href=\"{{ path('app_show_project', {'project_id': task.project.id}) }}\"
                        style=\"text-decoration: underline darkgrey\" data-toggle=\"tooltip\"
                        data-placement=\"bottom\"
                        title=\"Rok: {{ task.project.endDate|date('d.m.Y') }}.\">{{ task.project.name }}</a></p>
        <div class=\"row justify-content-center padding-10\" style=\"margin: 0 !important\">
            <div class=\"col-6 col-sm-3\">
                <p>Prioritet: </p> {{ task.priority }}
            </div>
            <div class=\"col-6 col-sm-3\">
                <p>Status: </p>
                <p
                        {% if bool_translate(task.completed) == 'Završeno' %}
                            style=\"color:#4dd64d !important;\"
                        {% else %}
                            style=\"color:indianred !important;\"
                        {% endif %}
                >{{ bool_translate(task.completed) }}</p>
            </div>
        </div>
    </div>
{% endblock %}

{% block pre_content %}
    <div class=\"padding-10\"></div>
    <div class=\"container padding-10\">
        <div class=\"row justify-content-center\" style=\"margin-right: 0!important;\">
            <div class=\"col col-md-5\">
                <p>Napravio: </p>
                {% if task.creator %}
                    <a href=\"{{ path('app_user_show', {id: task.creator.id}) }}\"
                       style=\"text-decoration: underline rgba(0, 0, 0, 0.5)\" data-toggle=\"tooltip\"
                       data-placement=\"bottom\"
                       title=\"{{ task.creator.email }}\">
                        {{ task.creator.firstName }} {{ task.creator.lastName }}
                    </a>
                {% else %}
                    <p>/</p>
                {% endif %}
            </div>
            <div class=\"col col-md-5\">
                <p>Trenutno zadužen: </p>
                {% if task.userWorking %}
                    <a href=\"{{ path('app_user_show', {id: task.userWorking.id}) }}\"
                       style=\"text-decoration: underline rgba(0, 0, 0, 0.5)\" data-toggle=\"tooltip\"
                       data-placement=\"bottom\"
                       title=\"{{ task.userWorking.email }}\">
                        {{ task.userWorking.firstName }} {{ task.userWorking.lastName }}
                    </a>
                {% else %}
                    <p>/</p>
                {% endif %}
            </div>
        </div>

        <div class=\"row padding-10 justify-content-center\" style=\"margin-right: 0 !important\">
            <div class=\"col col-md-5\">
                <p>Datum kreiranja: </p>
                {% if task.creationDate %}
                    {{ task.creationDate|format_date('full', '', null, 'gregorian', 'sr_Latn') }}
                {% else %}
                    <p>/</p>
                {% endif %}
            </div>
            <div class=\"col col-md-5\">
                <p>Rok završetka: </p>
                {% if task.endDate %}
                    {{ task.endDate|format_date('full', '', null, 'gregorian', 'sr_Latn') }}
                {% else %}
                    <p>/</p>
                {% endif %}
            </div>
        </div>

        <div class=\"row text-justify justify-content-center padding-10\">
            <div class=\"col-12 col-md-8\">
                <p>Opis: </p>
                {% if task.description %}
                    {{ task.description }}
                {% else %}
                    <p>/</p>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

{% block display_options %}
    <div class=\"line-small padding-10\"></div>
{% endblock %}

{% block new_card %}
{% endblock %}

{% block page_content %}
    {% if (task.creator is not null and task.creator.id == app.user.id) or (task.userWorking is not null and task.userWorking.id == app.user.id) %}
        <div class=\"container padding-10\">
            <div class=\"row justify-content-center\" style=\"margin: 0!important;\">
                <div class=\"col-6 col-sm-3 padding-10\">
                    <div class=\"text-center\">
                        <a href=\"{{ path('app_edit_task', {project_id: task.project.id, task_id:task.id}) }}\"
                           class=\"btn btn-outline-dark text-uppercase font-weight-normal hover-white-color\"
                           value=\"submit\"
                           type=\"submit\">
                            Promeni
                        </a>
                    </div>
                </div>
                <div class=\"col-6 col-sm-3 padding-10\">
                    <div class=\"text-center\">
                        <button class=\"btn btn-danger text-uppercase font-weight-normal\" name=\"delete\" value=\"delete\"
                                type=\"submit\">
                            Obriši
                        </button>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block javascripts_onload_document %}
    {{ parent() }}

    \$('[data-toggle=\"tooltip\"]').tooltip();
{% endblock %}", "task.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/task.html.twig");
    }
}
