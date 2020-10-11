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

/* project.html.twig */
class __TwigTemplate_1dece4e1cc9328e117212956f922a97c04892127a7a1251c3b4ac46d9ffedd73 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'project_desc' => [$this, 'block_project_desc'],
            'pre_content' => [$this, 'block_pre_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project.html.twig"));

        $this->parent = $this->loadTemplate("index.html.twig", "project.html.twig", 1);
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
            Projekat: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "
        </h3>

        <div class=\"row justify-content-center\" style=\"margin: 0 !important\">
            ";
        // line 10
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 10, $this->source); })()), "tasks", [], "any", false, false, false, 10)), 0))) {
            // line 11
            echo "                ";
            if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 11, $this->source); })()), "tasks", [], "any", false, false, false, 11)), (isset($context["zavrseno_zad"]) || array_key_exists("zavrseno_zad", $context) ? $context["zavrseno_zad"] : (function () { throw new RuntimeError('Variable "zavrseno_zad" does not exist.', 11, $this->source); })())))) {
                // line 12
                echo "                    <p>Status: &nbsp;</p> <p style=\"color: lawngreen !important\">";
                echo twig_escape_filter($this->env, (isset($context["zavrseno_zad"]) || array_key_exists("zavrseno_zad", $context) ? $context["zavrseno_zad"] : (function () { throw new RuntimeError('Variable "zavrseno_zad" does not exist.', 12, $this->source); })()), "html", null, true);
                echo "
                    od ";
                // line 13
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 13, $this->source); })()), "tasks", [], "any", false, false, false, 13)), "html", null, true);
                echo "
                    završeno</p>
                ";
            } else {
                // line 16
                echo "                    <p>Status: &nbsp;</p> <p style=\"color: black !important\">";
                echo twig_escape_filter($this->env, (isset($context["zavrseno_zad"]) || array_key_exists("zavrseno_zad", $context) ? $context["zavrseno_zad"] : (function () { throw new RuntimeError('Variable "zavrseno_zad" does not exist.', 16, $this->source); })()), "html", null, true);
                echo "
                    od ";
                // line 17
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 17, $this->source); })()), "tasks", [], "any", false, false, false, 17)), "html", null, true);
                echo "
                    završeno</p>
                ";
            }
            // line 20
            echo "            ";
        } elseif (twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 20, $this->source); })()), "completed", [], "any", false, false, false, 20)) {
            // line 21
            echo "                <p>Status: &nbsp;</p><p style=\"color: lawngreen !important\">Završeno</p>
            ";
        } else {
            // line 23
            echo "                <p>Status: &nbsp;</p><p style=\"color: indianred !important\">Nezavršeno</p>
            ";
        }
        // line 25
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_project_desc($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "project_desc"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "project_desc"));

        // line 30
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_pre_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pre_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pre_content"));

        // line 34
        echo "    <div class=\"container padding-10\">
        <div class=\"row justify-content-center\" style=\"margin-right: 0!important;\">
            <div class=\"col col-md-5\">
                <p>Napravio: </p>
                ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 38, $this->source); })()), "creator", [], "any", false, false, false, 38)) {
            // line 39
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 39, $this->source); })()), "creator", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\"
                       style=\"text-decoration: underline rgba(0, 0, 0, 0.5)\" data-toggle=\"tooltip\"
                       data-placement=\"bottom\"
                       title=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 42, $this->source); })()), "creator", [], "any", false, false, false, 42), "email", [], "any", false, false, false, 42), "html", null, true);
            echo "\">
                        ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 43, $this->source); })()), "creator", [], "any", false, false, false, 43), "firstName", [], "any", false, false, false, 43), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 43, $this->source); })()), "creator", [], "any", false, false, false, 43), "lastName", [], "any", false, false, false, 43), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 46
            echo "                    <p>/</p>
                ";
        }
        // line 48
        echo "            </div>
            <div class=\"col col-md-5\">
                <p>Trenutno zadužen: </p>
                <p>/</p>
            </div>
        </div>

        <div class=\"row padding-10 justify-content-center\" style=\"margin-right: 0 !important\">
            <div class=\"col col-md-5\">
                <p>Datum kreiranja: </p>
                ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 58, $this->source); })()), "creationDate", [], "any", false, false, false, 58)) {
            // line 59
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 59, $this->source); })()), "creationDate", [], "any", false, false, false, 59), "full", "", null, "gregorian", "sr_Latn"), "html", null, true);
            echo "
                ";
        } else {
            // line 61
            echo "                    <p>/</p>
                ";
        }
        // line 63
        echo "            </div>
            <div class=\"col col-md-5\">
                <p>Rok završetka: </p>
                ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 66, $this->source); })()), "endDate", [], "any", false, false, false, 66)) {
            // line 67
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 67, $this->source); })()), "endDate", [], "any", false, false, false, 67), "full", "", null, "gregorian", "sr_Latn"), "html", null, true);
            echo "
                ";
        } else {
            // line 69
            echo "                    <p>/</p>
                ";
        }
        // line 71
        echo "            </div>
        </div>

        <div class=\"row text-justify justify-content-center padding-10\">
            <div class=\"col-12 col-md-8\">
                <p>Opis: </p>
                ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77)) {
            // line 78
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78), "html", null, true);
            echo "
                ";
        } else {
            // line 80
            echo "                    <p>/</p>
                ";
        }
        // line 82
        echo "            </div>
        </div>

        <div id=\"workers\" class=\"row justify-content-center\">
            <div class=\"col\">
                <p>Radnici na projektu:</p>
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 88, $this->source); })()), "creator", [], "any", false, false, false, 88), "team", [], "any", false, false, false, 88), "users", [], "any", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["worker"]) {
            // line 89
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["worker"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\"
                       title=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["worker"], "email", [], "any", false, false, false, 90), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["worker"], "firstName", [], "any", false, false, false, 90), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["worker"], "lastName", [], "any", false, false, false, 90), "html", null, true);
            echo " &nbsp;
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['worker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "            </div>
        </div>
    </div>



    ";
        // line 99
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 99, $this->source); })()), "creator", [], "any", false, false, false, 99)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 99, $this->source); })()), "creator", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99))))) {
            // line 100
            echo "        <div class=\"container padding-10\">
            <div class=\"row justify-content-center\" style=\"margin: 0!important;\">
                <div class=\"col-6 col-sm-3 padding-10\">
                    <div class=\"text-center\">
                        <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_project", ["project_id" => twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104)]), "html", null, true);
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
        // line 123
        echo "
    ";
        // line 124
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 124, $this->source); })()), "tasks", [], "any", false, false, false, 124))) {
            // line 125
            echo "        <p>Zadaci</p>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 130
        echo "    ";
        $context["vars"] = ["route" => "app_show_task"];
        // line 131
        echo "    ";
        if ((array_key_exists("tasks", $context) &&  !twig_test_empty((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 131, $this->source); })())))) {
            // line 132
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 132, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 133
                echo "            ";
                echo twig_include($this->env, $context, "card/card.html.twig");
                echo "
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "    ";
        } else {
            // line 136
            echo "        <p>Nema zadataka</p>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 140
    public function block_javascripts_onload_document($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts_onload_document"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts_onload_document"));

        // line 141
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
        return "project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 141,  407 => 140,  395 => 136,  392 => 135,  375 => 133,  357 => 132,  354 => 131,  351 => 130,  341 => 129,  329 => 125,  327 => 124,  324 => 123,  302 => 104,  296 => 100,  294 => 99,  286 => 93,  273 => 90,  268 => 89,  264 => 88,  256 => 82,  252 => 80,  246 => 78,  244 => 77,  236 => 71,  232 => 69,  226 => 67,  224 => 66,  219 => 63,  215 => 61,  209 => 59,  207 => 58,  195 => 48,  191 => 46,  183 => 43,  179 => 42,  172 => 39,  170 => 38,  164 => 34,  154 => 33,  143 => 30,  133 => 29,  121 => 25,  117 => 23,  113 => 21,  110 => 20,  104 => 17,  99 => 16,  93 => 13,  88 => 12,  85 => 11,  83 => 10,  76 => 6,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index.html.twig' %}

{% block page_title %}
    <div class=\"container text-center\">
        <h3 class=\"font-weight-light\">
            Projekat: {{ project.name }}
        </h3>

        <div class=\"row justify-content-center\" style=\"margin: 0 !important\">
            {% if project.tasks|length > 0 %}
                {% if project.tasks|length == zavrseno_zad %}
                    <p>Status: &nbsp;</p> <p style=\"color: lawngreen !important\">{{ zavrseno_zad }}
                    od {{ project.tasks|length }}
                    završeno</p>
                {% else %}
                    <p>Status: &nbsp;</p> <p style=\"color: black !important\">{{ zavrseno_zad }}
                    od {{ project.tasks|length }}
                    završeno</p>
                {% endif %}
            {% elseif project.completed %}
                <p>Status: &nbsp;</p><p style=\"color: lawngreen !important\">Završeno</p>
            {% else %}
                <p>Status: &nbsp;</p><p style=\"color: indianred !important\">Nezavršeno</p>
            {% endif %}
        </div>
    </div>
{% endblock %}

{% block project_desc %}

{% endblock %}

{% block pre_content %}
    <div class=\"container padding-10\">
        <div class=\"row justify-content-center\" style=\"margin-right: 0!important;\">
            <div class=\"col col-md-5\">
                <p>Napravio: </p>
                {% if project.creator %}
                    <a href=\"{{ path('app_user_show', {id: project.creator.id}) }}\"
                       style=\"text-decoration: underline rgba(0, 0, 0, 0.5)\" data-toggle=\"tooltip\"
                       data-placement=\"bottom\"
                       title=\"{{ project.creator.email }}\">
                        {{ project.creator.firstName }} {{ project.creator.lastName }}
                    </a>
                {% else %}
                    <p>/</p>
                {% endif %}
            </div>
            <div class=\"col col-md-5\">
                <p>Trenutno zadužen: </p>
                <p>/</p>
            </div>
        </div>

        <div class=\"row padding-10 justify-content-center\" style=\"margin-right: 0 !important\">
            <div class=\"col col-md-5\">
                <p>Datum kreiranja: </p>
                {% if project.creationDate %}
                    {{ project.creationDate|format_date('full', '', null, 'gregorian', 'sr_Latn') }}
                {% else %}
                    <p>/</p>
                {% endif %}
            </div>
            <div class=\"col col-md-5\">
                <p>Rok završetka: </p>
                {% if project.endDate %}
                    {{ project.endDate|format_date('full', '', null, 'gregorian', 'sr_Latn') }}
                {% else %}
                    <p>/</p>
                {% endif %}
            </div>
        </div>

        <div class=\"row text-justify justify-content-center padding-10\">
            <div class=\"col-12 col-md-8\">
                <p>Opis: </p>
                {% if project.description %}
                    {{ project.description }}
                {% else %}
                    <p>/</p>
                {% endif %}
            </div>
        </div>

        <div id=\"workers\" class=\"row justify-content-center\">
            <div class=\"col\">
                <p>Radnici na projektu:</p>
                {% for worker in project.creator.team.users %}
                    <a href=\"{{ path('app_user_show', {id:worker.id}) }}\" data-toggle=\"tooltip\" data-placement=\"bottom\"
                       title=\"{{ worker.email }}\">{{ worker.firstName }} {{ worker.lastName }} &nbsp;
                    </a>
                {% endfor %}
            </div>
        </div>
    </div>



    {% if project.creator is not null and project.creator.id == app.user.id %}
        <div class=\"container padding-10\">
            <div class=\"row justify-content-center\" style=\"margin: 0!important;\">
                <div class=\"col-6 col-sm-3 padding-10\">
                    <div class=\"text-center\">
                        <a href=\"{{ path('app_edit_project', {project_id: project.id}) }}\"
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

    {% if project.tasks is not empty %}
        <p>Zadaci</p>
    {% endif %}
{% endblock %}

{% block page_content %}
    {% set vars = {'route' : 'app_show_task'} %}
    {% if tasks is defined and tasks is not empty %}
        {% for item in tasks %}
            {{ include('card/card.html.twig') }}
        {% endfor %}
    {% else %}
        <p>Nema zadataka</p>
    {% endif %}
{% endblock %}

{% block javascripts_onload_document %}
    {{ parent() }}

    \$('[data-toggle=\"tooltip\"]').tooltip();
{% endblock %}
", "project.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/project.html.twig");
    }
}
