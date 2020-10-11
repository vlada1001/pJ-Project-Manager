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
class __TwigTemplate_53386069c0381d0adef92df16484bbda055cd79fa950c5b9095b6a4ade84d26f extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "project.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container text-center\">
        <h3 class=\"font-weight-light\">
            Projekat: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "
        </h3>

        <div class=\"row justify-content-center\" style=\"margin: 0 !important\">
            ";
        // line 10
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "tasks", [], "any", false, false, false, 10)), 0))) {
            // line 11
            echo "                ";
            if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "tasks", [], "any", false, false, false, 11)), ($context["zavrseno_zad"] ?? null)))) {
                // line 12
                echo "                    <p>Status: &nbsp;</p> <p style=\"color: lawngreen !important\">";
                echo twig_escape_filter($this->env, ($context["zavrseno_zad"] ?? null), "html", null, true);
                echo "
                    od ";
                // line 13
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "tasks", [], "any", false, false, false, 13)), "html", null, true);
                echo "
                    završeno</p>
                ";
            } else {
                // line 16
                echo "                    <p>Status: &nbsp;</p> <p style=\"color: black !important\">";
                echo twig_escape_filter($this->env, ($context["zavrseno_zad"] ?? null), "html", null, true);
                echo "
                    od ";
                // line 17
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "tasks", [], "any", false, false, false, 17)), "html", null, true);
                echo "
                    završeno</p>
                ";
            }
            // line 20
            echo "            ";
        } elseif (twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "completed", [], "any", false, false, false, 20)) {
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
    }

    // line 29
    public function block_project_desc($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "
";
    }

    // line 33
    public function block_pre_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "    <div class=\"container padding-10\">
        <div class=\"row justify-content-center\" style=\"margin-right: 0!important;\">
            <div class=\"col col-md-5\">
                <p>Napravio: </p>
                ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "creator", [], "any", false, false, false, 38)) {
            // line 39
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "creator", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\"
                       style=\"text-decoration: underline rgba(0, 0, 0, 0.5)\" data-toggle=\"tooltip\"
                       data-placement=\"bottom\"
                       title=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "creator", [], "any", false, false, false, 42), "email", [], "any", false, false, false, 42), "html", null, true);
            echo "\">
                        ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "creator", [], "any", false, false, false, 43), "firstName", [], "any", false, false, false, 43), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "creator", [], "any", false, false, false, 43), "lastName", [], "any", false, false, false, 43), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "creationDate", [], "any", false, false, false, 58)) {
            // line 59
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "creationDate", [], "any", false, false, false, 59), "full", "", null, "gregorian", "sr_Latn"), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "endDate", [], "any", false, false, false, 66)) {
            // line 67
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "endDate", [], "any", false, false, false, 67), "full", "", null, "gregorian", "sr_Latn"), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "description", [], "any", false, false, false, 77)) {
            // line 78
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "description", [], "any", false, false, false, 78), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "creator", [], "any", false, false, false, 88), "team", [], "any", false, false, false, 88), "users", [], "any", false, false, false, 88));
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
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "creator", [], "any", false, false, false, 99)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "creator", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99))))) {
            // line 100
            echo "        <div class=\"container padding-10\">
            <div class=\"row justify-content-center\" style=\"margin: 0!important;\">
                <div class=\"col-6 col-sm-3 padding-10\">
                    <div class=\"text-center\">
                        <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_project", ["project_id" => twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "id", [], "any", false, false, false, 104)]), "html", null, true);
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "tasks", [], "any", false, false, false, 124))) {
            // line 125
            echo "        <p>Zadaci</p>
    ";
        }
    }

    // line 129
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "    ";
        $context["vars"] = ["route" => "app_show_task"];
        // line 131
        echo "    ";
        if ((array_key_exists("tasks", $context) &&  !twig_test_empty(($context["tasks"] ?? null)))) {
            // line 132
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
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
    }

    // line 140
    public function block_javascripts_onload_document($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "    ";
        $this->displayParentBlock("javascripts_onload_document", $context, $blocks);
        echo "

    \$('[data-toggle=\"tooltip\"]').tooltip();
";
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
        return array (  351 => 141,  347 => 140,  341 => 136,  338 => 135,  321 => 133,  303 => 132,  300 => 131,  297 => 130,  293 => 129,  287 => 125,  285 => 124,  282 => 123,  260 => 104,  254 => 100,  252 => 99,  244 => 93,  231 => 90,  226 => 89,  222 => 88,  214 => 82,  210 => 80,  204 => 78,  202 => 77,  194 => 71,  190 => 69,  184 => 67,  182 => 66,  177 => 63,  173 => 61,  167 => 59,  165 => 58,  153 => 48,  149 => 46,  141 => 43,  137 => 42,  130 => 39,  128 => 38,  122 => 34,  118 => 33,  113 => 30,  109 => 29,  103 => 25,  99 => 23,  95 => 21,  92 => 20,  86 => 17,  81 => 16,  75 => 13,  70 => 12,  67 => 11,  65 => 10,  58 => 6,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "project.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/project.html.twig");
    }
}
