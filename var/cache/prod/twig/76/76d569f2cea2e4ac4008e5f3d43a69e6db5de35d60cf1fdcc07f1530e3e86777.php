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

/* new_task.html.twig */
class __TwigTemplate_02feb2c8032deea2603e17f346ffdce25701496480c16e92a05bf31be2ee2f76 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "new_task.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Novi Zadatak - pJ";
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
        $this->loadTemplate("simple_header.html.twig", "new_task.html.twig", 12)->display($context);
        // line 13
        echo "
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-10 col-sm-9 col-md-7 col-xl-4\">
                <h4 class=\"font-weight-normal\">Novi zadatak</h4>
                <div class=\"line\"></div>
                <div class=\"text-danger\"></div>
                <form method=\"post\">
                    ";
        // line 21
        if (($context["error"] ?? null)) {
            // line 22
            echo "                        <div class=\"alert alert-danger center\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>
                    ";
        }
        // line 24
        echo "
                    <div class=\"form-row\">
                        <div class=\"form-group col-12 col-sm-6\">
                            <label for=\"taskName\">Naziv zadatka</label>
                            <input type=\"text\" class=\"form-control\" id=\"taskName\" name=\"taskName\" required>
                            <div class=\"text-danger\"></div>
                        </div>

                        <div class=\"form-group col-12 col-sm-6\">
                            <label for=\"worker\">Dodeli zadatak</label>
                            <select id=\"worker\" name=\"worker\" class=\"custom-select\" required>
                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["workers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["worker"]) {
            // line 36
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["worker"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\"
                                            ";
            // line 37
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["worker"], "id", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)))) {
                echo "selected";
            }
            echo ">
                                        ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["worker"], "firstName", [], "any", false, false, false, 38), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["worker"], "lastName", [], "any", false, false, false, 38), "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['worker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                            </select>
                        </div>


                        <div class=\"form-group col-12 col-sm-6\">
                            <label for=\"deadline\">Datum završetka</label>
                            <input type=\"date\" class=\"form-control\" id=\"deadline\" name=\"deadline\"
                                   value=\"2020-10-04\">
                        </div>

                        <div class=\"form-group col-12 col-sm-6\">
                            <label for=\"color\">Boja</label>
                            <select id=\"color\" name=\"color\" class=\"custom-select\">
                                <option value=\"-1\" selected disabled>Izaberi boju</option>
                                <br>

                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["colors"] ?? null));
        foreach ($context['_seq'] as $context["color"] => $context["hex"]) {
            // line 58
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["hex"], "html", null, true);
            echo "\">
                                        ";
            // line 59
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['color'], $context['hex'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-2\">
                            <label for=\"priority\">Prioritet</label>
                            <input type=\"text\" class=\"form-control\" id=\"priority\" name=\"priority\" value=\"1\">
                            <div class=\"text-danger\"></div>
                        </div>

                    </div>

                    <div class=\"mb-3\">
                        <label for=\"taskDescription\">Opis projekta</label>
                        <textarea class=\"form-control\" id=\"taskDescription\" name=\"taskDescription\"
                                  placeholder=\".  .  .\"></textarea>
                    </div>
                    <div class=\"text-center\">
                        <button class=\"btn btn-lg btn-outline-dark btn-login text-uppercase font-weight-normal\"
                                name=\"submit\" value=\"submit\" type=\"submit\">
                            Napravi zadatak
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "new_task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 62,  166 => 59,  161 => 58,  157 => 57,  139 => 41,  128 => 38,  122 => 37,  117 => 36,  113 => 35,  100 => 24,  94 => 22,  92 => 21,  82 => 13,  79 => 12,  75 => 11,  69 => 9,  63 => 7,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new_task.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/new_task.html.twig");
    }
}
