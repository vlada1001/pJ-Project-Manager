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

/* security/register.html.twig */
class __TwigTemplate_619bbd897f73409fc3d7852c59d3a1f36184b70b2ed92ee64b9e97d49aaccd3f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basic_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent = $this->loadTemplate("basic_base.html.twig", "security/register.html.twig", 1);
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

        echo "Register";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container-fluid\">
        <div class=\"row no-gutter\">
            <div class=\"d-none d-md-flex col-md-4 col-lg-6 bg-image\"></div>
            <div class=\"col-md-8 col-lg-6\">
                <div class=\"login d-flex align-items-center\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-9 col-lg-8 mx-auto\">
                                <h1 class=\"login-heading mb-4 text-center\">Dobrodošli na pJ!</h1>

                                ";
        // line 17
        echo "                                <form method=\"post\">
                                     ";
        // line 18
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "                                     <div class=\"alert alert-danger center\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "</div>
                                     ";
        }
        // line 21
        echo "
                                    ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "                                        <div class=\"mb-3 text-center\">
                                            Prijavljeni ste kao <b>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "username", [], "any", false, false, false, 24), "html", null, true);
            echo "</b>
                                            <div class=\"padding-10\"></div>
                                            <a class=\"btn btn-lg btn-danger text-uppercase font-weight-normal\"
                                               href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Odjavi se</a>

                                            <div class=\"padding-10\"></div>
                                            <a class=\"btn btn-lg btn-index text-uppercase font-weight-normal\"
                                               href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
            echo "\">Početna strana</a>
                                        </div>
                                    ";
        } else {
            // line 34
            echo "                                        <h1 class=\"h3 mb-3 font-weight-normal text-center\">Prijavi se</h1>
                                        ";
            // line 36
            echo "                                        <div class=\"form-label-group\">
                                            <input type=\"email\" name=\"email\"
                                                   value=\"\"
                                                   id=\"inputEmail\" class=\"form-control\" placeholder=\"Email adresa\"
                                                   required autofocus>
                                            <label for=\"inputEmail\">Email adresa</label>
                                        </div>

                                        <div class=\"form-label-group\">
                                            <input type=\"text\" name=\"firstName\" value=\"\"
                                                   id=\"firstName\" class=\"form-control\" placeholder=\"Ime\" required>
                                            <label for=\"firstName\">Ime</label>
                                        </div>

                                        <div class=\"form-label-group\">
                                            <input type=\"text\" name=\"lastName\"
                                                   value=\"\"
                                                   id=\"lastName\" class=\"form-control\" placeholder=\"Prezime\" required>
                                            <label for=\"lastName\">Prezime</label>
                                        </div>

                                        <div class=\"form-label-group\">
                                            <input type=\"password\" name=\"password\"
                                                   value=\"\" id=\"inputPassword\"
                                                   class=\"form-control\"
                                                   placeholder=\"Šifra\" required>
                                            <label for=\"inputPassword\">Šifra</label>
                                        </div>

                                        <div class=\"form-label-group\">
                                            <input type=\"password\" name=\"password_rep\"
                                                   value=\"\"
                                                   id=\"password_rep\"
                                                   class=\"form-control\"
                                                   placeholder=\"Šifra\" required>
                                            <label for=\"password_rep\">Šifra</label>
                                        </div>

                                        <div class=\"text-center\">
                                            <button class=\"btn btn-lg btn-index text-uppercase font-weight-normal\"
                                                    name=\"submit\" value=\"submit\" type=\"submit\">Registruj se
                                            </button>
                                            <div class=\"text-center\">
                                                <a class=\"small\" href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Prijavi se</a>
                                            </div>
                                        </div>
                                    ";
        }
        // line 83
        echo "                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 83,  186 => 79,  141 => 36,  138 => 34,  132 => 31,  125 => 27,  119 => 24,  116 => 23,  114 => 22,  111 => 21,  105 => 19,  103 => 18,  100 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basic_base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row no-gutter\">
            <div class=\"d-none d-md-flex col-md-4 col-lg-6 bg-image\"></div>
            <div class=\"col-md-8 col-lg-6\">
                <div class=\"login d-flex align-items-center\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-9 col-lg-8 mx-auto\">
                                <h1 class=\"login-heading mb-4 text-center\">Dobrodošli na pJ!</h1>

                                {# todo: zameni sa Symfony formom kasnije #}
                                <form method=\"post\">
                                     {% if error %}
                                     <div class=\"alert alert-danger center\">{{ error }}</div>
                                     {% endif %}

                                    {% if app.user %}
                                        <div class=\"mb-3 text-center\">
                                            Prijavljeni ste kao <b>{{ app.user.username }}</b>
                                            <div class=\"padding-10\"></div>
                                            <a class=\"btn btn-lg btn-danger text-uppercase font-weight-normal\"
                                               href=\"{{ path('app_logout') }}\">Odjavi se</a>

                                            <div class=\"padding-10\"></div>
                                            <a class=\"btn btn-lg btn-index text-uppercase font-weight-normal\"
                                               href=\"{{ path('app_homepage') }}\">Početna strana</a>
                                        </div>
                                    {% else %}
                                        <h1 class=\"h3 mb-3 font-weight-normal text-center\">Prijavi se</h1>
                                        {# <br> #}
                                        <div class=\"form-label-group\">
                                            <input type=\"email\" name=\"email\"
                                                   value=\"\"
                                                   id=\"inputEmail\" class=\"form-control\" placeholder=\"Email adresa\"
                                                   required autofocus>
                                            <label for=\"inputEmail\">Email adresa</label>
                                        </div>

                                        <div class=\"form-label-group\">
                                            <input type=\"text\" name=\"firstName\" value=\"\"
                                                   id=\"firstName\" class=\"form-control\" placeholder=\"Ime\" required>
                                            <label for=\"firstName\">Ime</label>
                                        </div>

                                        <div class=\"form-label-group\">
                                            <input type=\"text\" name=\"lastName\"
                                                   value=\"\"
                                                   id=\"lastName\" class=\"form-control\" placeholder=\"Prezime\" required>
                                            <label for=\"lastName\">Prezime</label>
                                        </div>

                                        <div class=\"form-label-group\">
                                            <input type=\"password\" name=\"password\"
                                                   value=\"\" id=\"inputPassword\"
                                                   class=\"form-control\"
                                                   placeholder=\"Šifra\" required>
                                            <label for=\"inputPassword\">Šifra</label>
                                        </div>

                                        <div class=\"form-label-group\">
                                            <input type=\"password\" name=\"password_rep\"
                                                   value=\"\"
                                                   id=\"password_rep\"
                                                   class=\"form-control\"
                                                   placeholder=\"Šifra\" required>
                                            <label for=\"password_rep\">Šifra</label>
                                        </div>

                                        <div class=\"text-center\">
                                            <button class=\"btn btn-lg btn-index text-uppercase font-weight-normal\"
                                                    name=\"submit\" value=\"submit\" type=\"submit\">Registruj se
                                            </button>
                                            <div class=\"text-center\">
                                                <a class=\"small\" href=\"{{ path('app_login') }}\">Prijavi se</a>
                                            </div>
                                        </div>
                                    {% endif %}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "security/register.html.twig", "/home/vladimir/PhpstormProjects/pJ/templates/security/register.html.twig");
    }
}
