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
class __TwigTemplate_24ffc3a6f6fc88f2d7244ceefb40986286d54b04fce1b333329b052fd015194e extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "task.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container text-center\">
        <h3 class=\"font-weight-light\">
            Zadatak: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "
        </h3>

        <p>Projekat: <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_project", ["project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "project", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\"
                        style=\"text-decoration: underline darkgrey\" data-toggle=\"tooltip\"
                        data-placement=\"bottom\"
                        title=\"Rok: ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "project", [], "any", false, false, false, 12), "endDate", [], "any", false, false, false, 12), "d.m.Y"), "html", null, true);
        echo ".\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "project", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</a></p>
        <div class=\"row justify-content-center padding-10\" style=\"margin: 0 !important\">
            <div class=\"col-6 col-sm-3\">
                <p>Prioritet: </p> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "priority", [], "any", false, false, false, 15), "html", null, true);
        echo "
            </div>
            <div class=\"col-6 col-sm-3\">
                <p>Status: </p>
                <p
                        ";
        // line 20
        if ((0 === twig_compare($this->extensions['App\Twig\BoolExtension']->boolTranslate(twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "completed", [], "any", false, false, false, 20)), "Završeno"))) {
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
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\BoolExtension']->boolTranslate(twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "completed", [], "any", false, false, false, 25)), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
";
    }

    // line 31
    public function block_pre_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    <div class=\"padding-10\"></div>
    <div class=\"container padding-10\">
        <div class=\"row justify-content-center\" style=\"margin-right: 0!important;\">
            <div class=\"col col-md-5\">
                <p>Napravio: </p>
                ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "creator", [], "any", false, false, false, 37)) {
            // line 38
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "creator", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"
                       style=\"text-decoration: underline rgba(0, 0, 0, 0.5)\" data-toggle=\"tooltip\"
                       data-placement=\"bottom\"
                       title=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "creator", [], "any", false, false, false, 41), "email", [], "any", false, false, false, 41), "html", null, true);
            echo "\">
                        ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "creator", [], "any", false, false, false, 42), "firstName", [], "any", false, false, false, 42), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "creator", [], "any", false, false, false, 42), "lastName", [], "any", false, false, false, 42), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "userWorking", [], "any", false, false, false, 50)) {
            // line 51
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "userWorking", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\"
                       style=\"text-decoration: underline rgba(0, 0, 0, 0.5)\" data-toggle=\"tooltip\"
                       data-placement=\"bottom\"
                       title=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "userWorking", [], "any", false, false, false, 54), "email", [], "any", false, false, false, 54), "html", null, true);
            echo "\">
                        ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "userWorking", [], "any", false, false, false, 55), "firstName", [], "any", false, false, false, 55), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "userWorking", [], "any", false, false, false, 55), "lastName", [], "any", false, false, false, 55), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "creationDate", [], "any", false, false, false, 66)) {
            // line 67
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "creationDate", [], "any", false, false, false, 67), "full", "", null, "gregorian", "sr_Latn"), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "endDate", [], "any", false, false, false, 74)) {
            // line 75
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "endDate", [], "any", false, false, false, 75), "full", "", null, "gregorian", "sr_Latn"), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "description", [], "any", false, false, false, 85)) {
            // line 86
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "description", [], "any", false, false, false, 86), "html", null, true);
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
    }

    // line 95
    public function block_display_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "    <div class=\"line-small padding-10\"></div>
";
    }

    // line 99
    public function block_new_card($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 102
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "    ";
        if ((( !(null === twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "creator", [], "any", false, false, false, 103)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "creator", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103)))) || ( !(null === twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "userWorking", [], "any", false, false, false, 103)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "userWorking", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103)))))) {
            // line 104
            echo "        <div class=\"container padding-10\">
            <div class=\"row justify-content-center\" style=\"margin: 0!important;\">
                <div class=\"col-6 col-sm-3 padding-10\">
                    <div class=\"text-center\">
                        <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_task", ["project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "project", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108), "task_id" => twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "id", [], "any", false, false, false, 108)]), "html", null, true);
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
    }

    // line 129
    public function block_javascripts_onload_document($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "    ";
        $this->displayParentBlock("javascripts_onload_document", $context, $blocks);
        echo "

    \$('[data-toggle=\"tooltip\"]').tooltip();
";
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
        return array (  293 => 130,  289 => 129,  265 => 108,  259 => 104,  256 => 103,  252 => 102,  246 => 99,  241 => 96,  237 => 95,  230 => 90,  226 => 88,  220 => 86,  218 => 85,  210 => 79,  206 => 77,  200 => 75,  198 => 74,  193 => 71,  189 => 69,  183 => 67,  181 => 66,  173 => 60,  169 => 58,  161 => 55,  157 => 54,  150 => 51,  148 => 50,  143 => 47,  139 => 45,  131 => 42,  127 => 41,  120 => 38,  118 => 37,  111 => 32,  107 => 31,  97 => 25,  93 => 23,  89 => 21,  87 => 20,  79 => 15,  71 => 12,  65 => 9,  59 => 6,  55 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "task.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/task.html.twig");
    }
}
