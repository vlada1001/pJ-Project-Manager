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

/* edit_task.html.twig */
class __TwigTemplate_77be0252f6888c29e54da0fbb0982986cc92d4283541b7f5690e6424db68a565 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "edit_task.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Zadatak - pJ";
    }

    // line 5
    public function block_custom_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("new_project");
        echo "
";
    }

    // line 9
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        $this->loadTemplate("simple_header.html.twig", "edit_task.html.twig", 12)->display($context);
        // line 13
        echo "
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-10 col-sm-9 col-md-7 col-xl-4\">
                <h4 class=\"font-weight-normal\">Izmena zadatka - ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</h4>
                <div class=\"row\">
                    <div class=\"col\">
                        <p>Napravio: </p>
                        ";
        // line 21
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "creator", [], "any", false, false, false, 21))) {
            // line 22
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "creator", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" data-toggle=\"tooltip\"
                               data-placement=\"bottom\"
                               title=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "creator", [], "any", false, false, false, 24), "email", [], "any", false, false, false, 24), "html", null, true);
            echo "\"
                               style=\"color: darkgrey; text-decoration: underline darkgrey\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "creator", [], "any", false, false, false, 25), "firstName", [], "any", false, false, false, 25), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "creator", [], "any", false, false, false, 25), "lastName", [], "any", false, false, false, 25), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "creationDate", [], "any", false, false, false, 32), "d.m.Y"), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"line\"></div>
                <form method=\"post\">
                    ";
        // line 37
        if (($context["error"] ?? null)) {
            // line 38
            echo "                        <div class=\"alert alert-danger center\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>
                    ";
        }
        // line 40
        echo "                    <div class=\"form-row\">
                        <div class=\"form-group col-12 col-sm-6\">
                            <label for=\"taskName\">Naziv zadatka</label>
                            <input type=\"text\" class=\"form-control\" id=\"taskName\" name=\"taskName\"
                                   placeholder=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "name", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                        </div>

                        <div class=\"form-group col-12 col-sm-6\">
                            <label for=\"worker\">Dodeli zadatak</label>
                            <select id=\"worker\" name=\"worker\" class=\"custom-select\">
                                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["workers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["worker"]) {
            // line 51
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["worker"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\"
                                            ";
            // line 52
            if (( !(null === twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "userWorking", [], "any", false, false, false, 52)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["worker"], "id", [], "any", false, false, false, 52), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "userWorking", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52))))) {
                echo "selected";
            }
            echo ">
                                        ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["worker"], "firstName", [], "any", false, false, false, 53), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["worker"], "lastName", [], "any", false, false, false, 53), "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['worker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-12 col-sm-6\">
                            <label for=\"deadline\">Datum završetka</label>
                            <input type=\"date\" class=\"form-control\" id=\"deadline\" name=\"deadline\"
                                   value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "endDate", [], "any", false, false, false, 62), "Y-m-d"), "html", null, true);
        echo "\">
                        </div>

                        <div class=\"form-group col-8 col-sm-6\">
                            <label for=\"color\">Boja</label>
                            <select id=\"color\" name=\"color\" class=\"custom-select\">
                                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["colors"] ?? null));
        foreach ($context['_seq'] as $context["color"] => $context["hex"]) {
            // line 69
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["hex"], "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "color", [], "any", false, false, false, 69), $context["hex"]))) {
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
        if (twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "completed", [], "any", false, false, false, 79)) {
            echo "selected";
        }
        echo ">
                                    Završen
                                </option>

                                <option value=\"false\" ";
        // line 83
        if ( !twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "completed", [], "any", false, false, false, 83)) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "priority", [], "any", false, false, false, 92), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"taskDescription\">Opis zadatka</label>
                        <textarea class=\"form-control\" id=\"taskDescription\" name=\"taskDescription\"
                                  style=\"height: 150px\">";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "description", [], "any", false, false, false, 98), "html", null, true);
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
    }

    // line 115
    public function block_javascripts_onload_document($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "    ";
        $this->displayParentBlock("javascripts_onload_document", $context, $blocks);
        echo "

    \$('[data-toggle=\"tooltip\"]').tooltip();
";
    }

    public function getTemplateName()
    {
        return "edit_task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 116,  279 => 115,  260 => 98,  251 => 92,  237 => 83,  228 => 79,  220 => 73,  211 => 70,  202 => 69,  198 => 68,  189 => 62,  181 => 56,  170 => 53,  164 => 52,  159 => 51,  155 => 50,  146 => 44,  140 => 40,  134 => 38,  132 => 37,  124 => 32,  119 => 29,  115 => 27,  108 => 25,  104 => 24,  98 => 22,  96 => 21,  89 => 17,  83 => 13,  80 => 12,  76 => 11,  70 => 9,  64 => 7,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "edit_task.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/edit_task.html.twig");
    }
}
