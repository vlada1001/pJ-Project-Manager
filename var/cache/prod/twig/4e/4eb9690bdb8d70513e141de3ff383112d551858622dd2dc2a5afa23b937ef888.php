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

/* new_team.html.twig */
class __TwigTemplate_fd6da6fc740b2156a3e5c1cf2f72e35b175e91f4ed626de3584673505bb80d8e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "new_team.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Novi Tim - pJ";
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
        $this->loadTemplate("simple_header.html.twig", "new_team.html.twig", 12)->display($context);
        // line 13
        echo "
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-10 col-sm-9 col-md-7 col-xl-4\">
                <h4 class=\"font-weight-normal\">Novi tim</h4>
                <div class=\"line\"></div>
                <div class=\"text-danger\"></div>
                <form method=\"POST\">
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
        echo "                    <div class=\"mb-3\">
                        <label for=\"teamName\">Naziv tima</label>
                        <input type=\"text\" class=\"form-control\" id=\"teamName\" name=\"teamName\" required>
                        <div class=\"text-danger\"></div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"teamDescription\">Opis tima</label>
                        <textarea class=\"form-control\" id=\"teamDescription\" name=\"teamDescription\"
                                  placeholder=\".  .  .\" value=\"\"></textarea>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 37
        if (($context["users"] ?? null)) {
            // line 38
            echo "                            <p>Dodaj neraspoređene korisnike</p>

                            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 41
                echo "                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"user-";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "\"
                                           value=\"";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\"
                                           name='users[]'>
                                    <label class=\"form-check-label\" for=\"user-";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 45), "html", null, true);
                echo "\">
                                        ";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 46), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 46), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 46), "html", null, true);
                echo "
                                    </label>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                        ";
        }
        // line 51
        echo "                    </div>

                    <div class=\"form-group mb-3\">
                        <label for=\"project\">Dodeli projekat timu</label>
                        <select id=\"color\" name=\"project\" class=\"custom-select\">
                            <option value=\"-1\" selected disabled>Izaberi projekat</option>

                            ";
        // line 58
        if (array_key_exists("projects", $context)) {
            // line 59
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 60
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 60), "html", null, true);
                echo "\">
                                        ";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 61), "html", null, true);
                echo "
                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                            ";
        }
        // line 65
        echo "                        </select>
                    </div>

                    <div class=\"text-center\">
                        <button class=\"btn btn-lg btn-outline-dark btn-login text-uppercase font-weight-normal\"
                                name=\"submit\" value=\"submit\" type=\"submit\">
                            Napravi tim
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
        return "new_team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 65,  188 => 64,  179 => 61,  174 => 60,  169 => 59,  167 => 58,  158 => 51,  155 => 50,  141 => 46,  137 => 45,  132 => 43,  128 => 42,  125 => 41,  121 => 40,  117 => 38,  115 => 37,  100 => 24,  94 => 22,  92 => 21,  82 => 13,  79 => 12,  75 => 11,  69 => 9,  63 => 7,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new_team.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/new_team.html.twig");
    }
}
