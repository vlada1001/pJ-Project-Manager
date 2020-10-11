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

/* security/login.html.twig */
class __TwigTemplate_2f609f837f31517a5ceb0d2471e2544c372cf8ef349f914dc25af7a20cd5c5cf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("basic_base.html.twig", "security/login.html.twig", 1);
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

        echo "Login";
        
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

                                <form method=\"post\">
                                    ";
        // line 17
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "                                        <div class=\"alert alert-danger center\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageKey", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageData", [], "any", false, false, false, 18), "security"), "html", null, true);
            echo "</div>
                                    ";
        }
        // line 20
        echo "
                                    ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "                                        <div class=\"mb-3 text-center\">
                                            Prijavljeni ste kao <b>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "username", [], "any", false, false, false, 23), "html", null, true);
            echo "</b>
                                            <div class=\"padding-10\"></div>
                                            <a class=\"btn btn-lg btn-danger text-uppercase font-weight-normal\"
                                               href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Odjavi se</a>

                                            <div class=\"padding-10\"></div>
                                            <a class=\"btn btn-lg btn-index text-uppercase font-weight-normal\"
                                               href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
            echo "\">Početna strana</a>
                                        </div>
                                    ";
        } else {
            // line 33
            echo "                                        <h1 class=\"h3 mb-3 font-weight-normal text-center\">Prijavi se</h1>

                                        <div class=\"form-label-group\">
                                            <input type=\"email\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\" name=\"email\" id=\"inputEmail\"
                                                   class=\"form-control\"
                                                   placeholder=\"Email\" required autofocus>
                                            <label for=\"inputEmail\">Email adresa</label>
                                        </div>

                                        <div class=\"form-label-group\">
                                            <input type=\"password\" name=\"password\" id=\"inputPassword\"
                                                   class=\"form-control\"
                                                   placeholder=\"Šifra\"
                                                   required>
                                            <label for=\"inputPassword\">Šifra</label>
                                        </div>

                                        <input type=\"hidden\" name=\"_csrf_token\"
                                               value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("authenticate"), "html", null, true);
            echo "\">

";
            // line 57
            echo "
                                        <div class=\"text-center\">
                                            <button class=\"btn btn-lg btn-index text-uppercase font-weight-normal\"
                                                    name=\"submit\" value=\"submit\" type=\"submit\">Prijavi se
                                            </button>
                                            <div class=\"text-center\">
                                                <a class=\"small\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Registruj se</a>
                                            </div>
                                        </div>
                                    ";
        }
        // line 67
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 67,  172 => 63,  164 => 57,  159 => 51,  141 => 36,  136 => 33,  130 => 30,  123 => 26,  117 => 23,  114 => 22,  112 => 21,  109 => 20,  103 => 18,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basic_base.html.twig' %}

{% block title %}Login{% endblock %}

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

                                <form method=\"post\">
                                    {% if error %}
                                        <div class=\"alert alert-danger center\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
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

                                        <div class=\"form-label-group\">
                                            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\"
                                                   class=\"form-control\"
                                                   placeholder=\"Email\" required autofocus>
                                            <label for=\"inputEmail\">Email adresa</label>
                                        </div>

                                        <div class=\"form-label-group\">
                                            <input type=\"password\" name=\"password\" id=\"inputPassword\"
                                                   class=\"form-control\"
                                                   placeholder=\"Šifra\"
                                                   required>
                                            <label for=\"inputPassword\">Šifra</label>
                                        </div>

                                        <input type=\"hidden\" name=\"_csrf_token\"
                                               value=\"{{ csrf_token('authenticate') }}\">

{#                                        <div class=\"checkbox mb-3\">#}
{#                                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked/>#}
{#                                            <label for=\"remember_me\">Keep me logged in</label>#}
{#                                        </div>#}

                                        <div class=\"text-center\">
                                            <button class=\"btn btn-lg btn-index text-uppercase font-weight-normal\"
                                                    name=\"submit\" value=\"submit\" type=\"submit\">Prijavi se
                                            </button>
                                            <div class=\"text-center\">
                                                <a class=\"small\" href=\"{{ path('app_register') }}\">Registruj se</a>
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
{% endblock %}
", "security/login.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/security/login.html.twig");
    }
}
