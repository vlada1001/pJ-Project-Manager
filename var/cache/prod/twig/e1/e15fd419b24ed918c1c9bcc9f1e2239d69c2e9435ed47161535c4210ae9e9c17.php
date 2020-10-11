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
class __TwigTemplate_d66c023e5b00ca4d790a3f576751018a6c8fc86891deb1dac03b7fd8ab9eb87a extends Template
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
        $this->parent = $this->loadTemplate("basic_base.html.twig", "security/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Register";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if (($context["error"] ?? null)) {
            // line 19
            echo "                                     <div class=\"alert alert-danger center\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>
                                     ";
        }
        // line 21
        echo "
                                    ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "                                        <div class=\"mb-3 text-center\">
                                            Prijavljeni ste kao <b>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 24), "username", [], "any", false, false, false, 24), "html", null, true);
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
        return array (  163 => 83,  156 => 79,  111 => 36,  108 => 34,  102 => 31,  95 => 27,  89 => 24,  86 => 23,  84 => 22,  81 => 21,  75 => 19,  73 => 18,  70 => 17,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/register.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/security/register.html.twig");
    }
}
