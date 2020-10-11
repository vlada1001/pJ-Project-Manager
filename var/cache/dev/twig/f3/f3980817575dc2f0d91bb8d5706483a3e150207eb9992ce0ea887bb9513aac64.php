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
class __TwigTemplate_5ab8e852b0239920b48a1a4d404fa850917d9d7f498605c6d57b1b7cfe198218 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile.html.twig", 1);
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

        echo "Profil";
        
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
        // line 8
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("profile");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
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

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "avatarUrl", [], "any", false, false, false, 26), "html", null, true);
        echo "\" alt=\"profile picture\"
                                     class=\"img-fluid profile-pic\">
                            </div>
                        </div>
                    </div>

                    ";
        // line 32
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "                        <br>
                        <div class=\"alert alert-danger center text-center\">";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 34, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "firstName", [], "any", false, false, false, 41), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "lastName", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group col-md-6 text-center\">
                            <label for=\"team\">Tim</label>
                            <select id=\"team\" name=\"team\" class=\"custom-select\">
                                ";
        // line 46
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "team", [], "any", false, false, false, 46), null))) {
            // line 47
            echo "                                    <option value=\"-1\" selected disabled>Neraspoređen</option>
                                ";
        }
        // line 49
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 50
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\"
                                            ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "team", [], "any", false, false, false, 51) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "team", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 51))))) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "email", [], "any", false, false, false, 63), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "registrationDate", [], "any", false, false, false, 78), "d-m-Y"), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  253 => 78,  235 => 63,  225 => 55,  216 => 52,  210 => 51,  205 => 50,  200 => 49,  196 => 47,  194 => 46,  184 => 41,  177 => 36,  172 => 34,  169 => 33,  167 => 32,  158 => 26,  155 => 25,  153 => 24,  151 => 23,  149 => 22,  140 => 14,  137 => 13,  127 => 12,  109 => 10,  97 => 8,  93 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil{% endblock %}

{% block custom_stylesheets %}

    {{ encore_entry_link_tags('new_project') }}
    {{ encore_entry_link_tags('profile') }}
{% endblock %}
{% block nav %}{% endblock %}

{% block body %}
    {% include 'simple_header.html.twig' %}

    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-10 col-sm-9 col-md-6 col-xl-4\">
                <form action=\"\" method=\"post\">
                    <div class=\"d-flex justify-content-center h-100\">
                        <div class=\"image_outer_container\">
                            {# <div class=\"p-icon\"> #}
                            {# <i class=\"fa fa-camera upload-button\"></i> #}
                            {# <input class=\"file-upload\" type=\"file\" accept=\"img/*\"/> #}
                            {# </div> #}
                            <div class=\"image_inner_container\">
                                <img src=\"{{ app.user.avatarUrl }}\" alt=\"profile picture\"
                                     class=\"img-fluid profile-pic\">
                            </div>
                        </div>
                    </div>

                    {% if error %}
                        <br>
                        <div class=\"alert alert-danger center text-center\">{{ error }}</div>
                    {% endif %}

                    <div class=\"form-row\">
                        <div class=\"form-group col-md-6 text-center\">
                            <label for=\"name\">Ime i prezime</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\"
                                   value=\"{{ app.user.firstName }} {{ app.user.lastName }}\">
                        </div>
                        <div class=\"form-group col-md-6 text-center\">
                            <label for=\"team\">Tim</label>
                            <select id=\"team\" name=\"team\" class=\"custom-select\">
                                {% if app.user.team == null %}
                                    <option value=\"-1\" selected disabled>Neraspoređen</option>
                                {% endif %}
                                {% for team in teams %}
                                    <option value=\"{{ team.id }}\"
                                            {% if app.user.team and app.user.team.id == team.id %}selected{% endif %}>
                                        {{ team.name }}
                                    </option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group row justify-content-center text-center\">
                        <div class=\"col-xl-10 col-md-10 col-sm-12\">
                            <label for=\"email\">Email</label>
                            <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\"
                                   value=\"{{ app.user.email }}\">
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
                            <p type=\"date\">{{ app.user.registrationDate|date('d-m-Y') }}</p>
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

    {# <script>
        \$(document).ready(function () {
            const readURL = function (input) {
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        \$('.profile-pic').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            };

            \$(\".file-upload\").on('change', function () {
                readURL(this);
            });

            \$(\".upload-button\").on('click', function () {
                \$(\".file-upload\").click();
            });
        });
    </script> #}
{% endblock %}", "profile.html.twig", "/home/vladimir/PhpstormProjects/pJ/templates/profile.html.twig");
    }
}
