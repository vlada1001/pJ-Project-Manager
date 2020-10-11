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
class __TwigTemplate_3ce49bba549093b177757a410a0d1747b42f3f0ed1b5d8cf4d876540d9e3dee6 extends Template
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
        $this->parent = $this->loadTemplate("basic_base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Login";
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

                                <form method=\"post\">
                                    ";
        // line 17
        if (($context["error"] ?? null)) {
            // line 18
            echo "                                        <div class=\"alert alert-danger center\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 18), "security"), "html", null, true);
            echo "</div>
                                    ";
        }
        // line 20
        echo "
                                    ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "                                        <div class=\"mb-3 text-center\">
                                            Prijavljeni ste kao <b>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23), "username", [], "any", false, false, false, 23), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
        return array (  149 => 67,  142 => 63,  134 => 57,  129 => 51,  111 => 36,  106 => 33,  100 => 30,  93 => 26,  87 => 23,  84 => 22,  82 => 21,  79 => 20,  73 => 18,  71 => 17,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/security/login.html.twig");
    }
}
