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

/* profile.html.twig */
class __TwigTemplate_ccd7f1ff617b599c77390ff1d9f3f949d2c2367e30aa67ed1e8e549935dd72e0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Profil";
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
        // line 8
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("profile");
        echo "
";
    }

    // line 10
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $this->loadTemplate("simple_header.html.twig", "profile.html.twig", 13)->display($context);
        // line 14
        echo "
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-10 col-sm-9 col-md-6 col-xl-4\">
                <form action=\"\" method=\"post\">
                    <div class=\"d-flex justify-content-center h-100\">
                        <div class=\"image_outer_container\">
                            ";
        // line 22
        echo "                            ";
        // line 23
        echo "                            ";
        // line 24
        echo "                            ";
        // line 25
        echo "                            <div class=\"image_inner_container\">
                                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26), "avatarUrl", [0 => 150, 1 => 150], "method", false, false, false, 26), "html", null, true);
        echo "\" alt=\"profile picture\"
                                     class=\"img-fluid profile-pic\">
                            </div>
                        </div>
                    </div>

                    ";
        // line 32
        if (($context["error"] ?? null)) {
            // line 33
            echo "                        <br>
                        <div class=\"alert alert-danger center text-center\">";
            // line 34
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>
                    ";
        }
        // line 36
        echo "
                    <div class=\"form-row\">
                        <div class=\"form-group col-md-6 text-center\">
                            <label for=\"name\">Ime i prezime</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\"
                                   value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 41), "firstName", [], "any", false, false, false, 41), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 41), "lastName", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group col-md-6 text-center\">
                            <label for=\"team\">Tim</label>
                            <select id=\"team\" name=\"team\" class=\"custom-select\">
                                ";
        // line 46
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 46), "team", [], "any", false, false, false, 46), null))) {
            // line 47
            echo "                                    <option value=\"-1\" selected disabled>Neraspoređen</option>
                                ";
        }
        // line 49
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["teams"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 50
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\"
                                            ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 51), "team", [], "any", false, false, false, 51) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 51), "team", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 51))))) {
                echo "selected";
            }
            echo ">
                                        ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 52), "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group row justify-content-center text-center\">
                        <div class=\"col-xl-10 col-md-10 col-sm-12\">
                            <label for=\"email\">Email</label>
                            <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\"
                                   value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 63), "email", [], "any", false, false, false, 63), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group row justify-content-center text-center\">
                        <div class=\"col-xl-10 col-md-10 col-sm-12\">
                            <label for=\"password\">Šifra</label>
                            <input type=\"text\" class=\"form-control\" id=\"password\" name=\"password\"
                                   value=\"\" placeholder=\"Unesi novu šifru\">
                        </div>
                    </div>

                    <div class=\"form-group row justify-content-center text-center\">
                        <div class=\"col-6\">
                            Datum registracije
                            <p type=\"date\">";
        // line 78
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 78), "registrationDate", [], "any", false, false, false, 78), "d-m-Y"), "html", null, true);
        echo "</p>
                        </div>
                    </div>

                    <div class=\"text-center\">
                        <button class=\"btn btn-outline-dark text-uppercase font-weight-normal\"
                                name=\"submit\" value=\"submit\" type=\"submit\">
                            Promeni podatke
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
        return "profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 78,  181 => 63,  171 => 55,  162 => 52,  156 => 51,  151 => 50,  146 => 49,  142 => 47,  140 => 46,  130 => 41,  123 => 36,  118 => 34,  115 => 33,  113 => 32,  104 => 26,  101 => 25,  99 => 24,  97 => 23,  95 => 22,  86 => 14,  83 => 13,  79 => 12,  73 => 10,  67 => 8,  63 => 7,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/profile.html.twig");
    }
}
