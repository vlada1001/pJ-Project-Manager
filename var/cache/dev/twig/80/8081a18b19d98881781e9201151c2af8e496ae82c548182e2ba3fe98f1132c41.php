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

/* edit_project.html.twig */
class __TwigTemplate_327b6a143b13e8f674b50d5fcc2834a04b33d2aabd43d379fd5553173805aab3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'custom_stylesheets' => [$this, 'block_custom_stylesheets'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'javascripts_onload_document' => [$this, 'block_javascripts_onload_document'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edit_project.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edit_project.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "edit_project.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Projekat - pJ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_custom_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_stylesheets"));

        // line 6
        echo "
    ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("new_project");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("simple_header.html.twig", "edit_project.html.twig", 12)->display($context);
        // line 13
        echo "
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-10 col-sm-9 col-md-7 col-xl-4\">
                <h4 class=\"font-weight-normal\">Izmena projekta - ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</h4>
                <div class=\"row\">
                    <div class=\"col\">
                        <p>Napravio: </p>
                        ";
        // line 21
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 21, $this->source); })()), "creator", [], "any", false, false, false, 21))) {
            // line 22
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 22, $this->source); })()), "creator", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" data-toggle=\"tooltip\"
                               data-placement=\"bottom\"
                               title=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 24, $this->source); })()), "creator", [], "any", false, false, false, 24), "email", [], "any", false, false, false, 24), "html", null, true);
            echo "\"
                               style=\"color: darkgrey; text-decoration: underline darkgrey\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 25, $this->source); })()), "creator", [], "any", false, false, false, 25), "firstName", [], "any", false, false, false, 25), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 25, $this->source); })()), "creator", [], "any", false, false, false, 25), "lastName", [], "any", false, false, false, 25), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 27
            echo "                            <p>/</p>
                        ";
        }
        // line 29
        echo "                    </div>
                    <div class=\"col\">
                        <p>Datum kreiranja: </p>
                        <p>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 32, $this->source); })()), "creationDate", [], "any", false, false, false, 32), "d.m.Y"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"line\"></div>
                <form method=\"post\">
                    ";
        // line 37
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 37, $this->source); })())) {
            // line 38
            echo "                        <div class=\"alert alert-danger center\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "</div>
                    ";
        }
        // line 40
        echo "                    <div class=\"form-row\">
                        <div class=\"form-group col-12 col-sm-6\">
                            <label for=\"projectName\">Naziv projekta</label>
                            <input type=\"text\" class=\"form-control\" id=\"projectName\" name=\"projectName\"
                                   placeholder=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                        </div>

                        <div class=\"form-group col-12 col-sm-6\">
                            <label for=\"team\">Dodeli projekat timu</label>
                            <select id=\"team\" name=\"team\" class=\"custom-select\">
                                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 51
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\"
                                            ";
            // line 52
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 52), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "team", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)))) {
                echo "selected";
            }
            echo ">
                                        ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-12 col-sm-6\">
                            <label for=\"deadline\">Datum završetka</label>
                            <input type=\"date\" class=\"form-control\" id=\"deadline\" name=\"deadline\"
                                   value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 62, $this->source); })()), "endDate", [], "any", false, false, false, 62), "Y-m-d"), "html", null, true);
        echo "\">
                        </div>

                        <div class=\"form-group col-8 col-sm-6\">
                            <label for=\"color\">Boja</label>
                            <select id=\"color\" name=\"color\" class=\"custom-select\">
                                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["color"] => $context["hex"]) {
            // line 69
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["hex"], "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 69, $this->source); })()), "color", [], "any", false, false, false, 69), $context["hex"]))) {
                echo "selected";
            }
            echo ">
                                        ";
            // line 70
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['color'], $context['hex'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-8 col-sm-6\">
                            <label for=\"completed\">Status</label>
                            <select id=\"completed\" name=\"completed\" class=\"custom-select\">
                                <option value=\"true\" ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 79, $this->source); })()), "completed", [], "any", false, false, false, 79)) {
            echo "selected";
        }
        echo ">
                                    Završen
                                </option>

                                <option value=\"false\" ";
        // line 83
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 83, $this->source); })()), "completed", [], "any", false, false, false, 83)) {
            echo "selected";
        }
        echo ">
                                    Nije završen
                                </option>
                            </select>
                        </div>

                        <div class=\"form-group col-4 col-sm-2\">
                            <label for=\"priority\">Prioritet</label>
                            <input type=\"text\" class=\"form-control\" id=\"priority\" name=\"priority\"
                                   value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 92, $this->source); })()), "priority", [], "any", false, false, false, 92), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"projectDescription\">Opis projekta</label>
                        <textarea class=\"form-control\" id=\"projectDescription\" name=\"projectDescription\"
                                  style=\"height: 150px\">";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 98, $this->source); })()), "description", [], "any", false, false, false, 98), "html", null, true);
        echo "</textarea>
                    </div>
                    <div class=\"text-center\">
                        <button class=\"btn btn-lg btn-outline-dark btn-login text-uppercase font-weight-normal\"
                                name=\"submit\" value=\"submit\" type=\"submit\" style=\"margin-top: 10px !important\">
                            Sačuvaj izmene
                        </button>
                    </div>

                </form>
                <div style=\"height:80px\"></div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_javascripts_onload_document($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts_onload_document"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts_onload_document"));

        // line 116
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
        return "edit_project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 116,  337 => 115,  312 => 98,  303 => 92,  289 => 83,  280 => 79,  272 => 73,  263 => 70,  254 => 69,  250 => 68,  241 => 62,  233 => 56,  224 => 53,  218 => 52,  213 => 51,  209 => 50,  200 => 44,  194 => 40,  188 => 38,  186 => 37,  178 => 32,  173 => 29,  169 => 27,  162 => 25,  158 => 24,  152 => 22,  150 => 21,  143 => 17,  137 => 13,  134 => 12,  124 => 11,  106 => 9,  94 => 7,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Projekat - pJ{% endblock %}

{% block custom_stylesheets %}

    {{ encore_entry_link_tags('new_project') }}
{% endblock %}
{% block nav %}{% endblock %}

{% block body %}
    {% include 'simple_header.html.twig' %}

    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-10 col-sm-9 col-md-7 col-xl-4\">
                <h4 class=\"font-weight-normal\">Izmena projekta - {{ project.name }}</h4>
                <div class=\"row\">
                    <div class=\"col\">
                        <p>Napravio: </p>
                        {% if project.creator is not null %}
                            <a href=\"{{ path('app_user_show', {id: project.creator.id}) }}\" data-toggle=\"tooltip\"
                               data-placement=\"bottom\"
                               title=\"{{ project.creator.email }}\"
                               style=\"color: darkgrey; text-decoration: underline darkgrey\">{{ project.creator.firstName }} {{ project.creator.lastName }}</a>
                        {% else %}
                            <p>/</p>
                        {% endif %}
                    </div>
                    <div class=\"col\">
                        <p>Datum kreiranja: </p>
                        <p>{{ project.creationDate|date('d.m.Y') }}</p>
                    </div>
                </div>
                <div class=\"line\"></div>
                <form method=\"post\">
                    {% if error %}
                        <div class=\"alert alert-danger center\">{{ error }}</div>
                    {% endif %}
                    <div class=\"form-row\">
                        <div class=\"form-group col-12 col-sm-6\">
                            <label for=\"projectName\">Naziv projekta</label>
                            <input type=\"text\" class=\"form-control\" id=\"projectName\" name=\"projectName\"
                                   placeholder=\"{{ project.name }}\">
                        </div>

                        <div class=\"form-group col-12 col-sm-6\">
                            <label for=\"team\">Dodeli projekat timu</label>
                            <select id=\"team\" name=\"team\" class=\"custom-select\">
                                {% for team in teams %}
                                    <option value=\"{{ team.id }}\"
                                            {% if team.id == app.user.team.id %}selected{% endif %}>
                                        {{ team.name }}
                                    </option>
                                {% endfor %}
                            </select>
                        </div>

                        <div class=\"form-group col-12 col-sm-6\">
                            <label for=\"deadline\">Datum završetka</label>
                            <input type=\"date\" class=\"form-control\" id=\"deadline\" name=\"deadline\"
                                   value=\"{{ project.endDate|date('Y-m-d') }}\">
                        </div>

                        <div class=\"form-group col-8 col-sm-6\">
                            <label for=\"color\">Boja</label>
                            <select id=\"color\" name=\"color\" class=\"custom-select\">
                                {% for color, hex in colors %}
                                    <option value=\"{{ hex }}\" {% if project.color == hex %}selected{% endif %}>
                                        {{ color }}
                                    </option>
                                {% endfor %}
                            </select>
                        </div>

                        <div class=\"form-group col-8 col-sm-6\">
                            <label for=\"completed\">Status</label>
                            <select id=\"completed\" name=\"completed\" class=\"custom-select\">
                                <option value=\"true\" {% if project.completed %}selected{% endif %}>
                                    Završen
                                </option>

                                <option value=\"false\" {% if not project.completed %}selected{% endif %}>
                                    Nije završen
                                </option>
                            </select>
                        </div>

                        <div class=\"form-group col-4 col-sm-2\">
                            <label for=\"priority\">Prioritet</label>
                            <input type=\"text\" class=\"form-control\" id=\"priority\" name=\"priority\"
                                   value=\"{{ project.priority }}\">
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"projectDescription\">Opis projekta</label>
                        <textarea class=\"form-control\" id=\"projectDescription\" name=\"projectDescription\"
                                  style=\"height: 150px\">{{ project.description }}</textarea>
                    </div>
                    <div class=\"text-center\">
                        <button class=\"btn btn-lg btn-outline-dark btn-login text-uppercase font-weight-normal\"
                                name=\"submit\" value=\"submit\" type=\"submit\" style=\"margin-top: 10px !important\">
                            Sačuvaj izmene
                        </button>
                    </div>

                </form>
                <div style=\"height:80px\"></div>
            </div>
        </div>
    </div>
{% endblock %}


{% block javascripts_onload_document %}
    {{ parent() }}

    \$('[data-toggle=\"tooltip\"]').tooltip();
{% endblock %}", "edit_project.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/edit_project.html.twig");
    }
}
