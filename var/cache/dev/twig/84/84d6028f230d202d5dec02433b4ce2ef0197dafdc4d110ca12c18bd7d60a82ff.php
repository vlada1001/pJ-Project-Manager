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
class __TwigTemplate_4de8732e8a2f9d6193e62b9d2574b84f9aadc9404f53e2899650a282a42917cf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "new_task.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "new_task.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "new_task.html.twig", 1);
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

        echo "Novi Zadatak - pJ";
        
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
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "                        <div class=\"alert alert-danger center\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["workers"]) || array_key_exists("workers", $context) ? $context["workers"] : (function () { throw new RuntimeError('Variable "workers" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["worker"]) {
            // line 36
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["worker"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\"
                                            ";
            // line 37
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["worker"], "id", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 57, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  229 => 62,  220 => 59,  215 => 58,  211 => 57,  193 => 41,  182 => 38,  176 => 37,  171 => 36,  167 => 35,  154 => 24,  148 => 22,  146 => 21,  136 => 13,  133 => 12,  123 => 11,  105 => 9,  93 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Novi Zadatak - pJ{% endblock %}

{% block custom_stylesheets %}

    {{ encore_entry_link_tags('new_project') }}
{% endblock %}
{% block nav %}{% endblock %}

{% block body %}
    {% include 'simple_header.html.twig' %}

    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-10 col-sm-9 col-md-7 col-xl-4\">
                <h4 class=\"font-weight-normal\">Novi zadatak</h4>
                <div class=\"line\"></div>
                <div class=\"text-danger\"></div>
                <form method=\"post\">
                    {% if error %}
                        <div class=\"alert alert-danger center\">{{ error }}</div>
                    {% endif %}

                    <div class=\"form-row\">
                        <div class=\"form-group col-12 col-sm-6\">
                            <label for=\"taskName\">Naziv zadatka</label>
                            <input type=\"text\" class=\"form-control\" id=\"taskName\" name=\"taskName\" required>
                            <div class=\"text-danger\"></div>
                        </div>

                        <div class=\"form-group col-12 col-sm-6\">
                            <label for=\"worker\">Dodeli zadatak</label>
                            <select id=\"worker\" name=\"worker\" class=\"custom-select\" required>
                                {% for worker in workers %}
                                    <option value=\"{{ worker.id }}\"
                                            {% if worker.id == app.user.id %}selected{% endif %}>
                                        {{ worker.firstName }} {{ worker.lastName }}
                                    </option>
                                {% endfor %}
                            </select>
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

                                {% for color, hex in colors %}
                                    <option value=\"{{ hex }}\">
                                        {{ color }}
                                    </option>
                                {% endfor %}
                            </select>
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
{% endblock %}", "new_task.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/new_task.html.twig");
    }
}
