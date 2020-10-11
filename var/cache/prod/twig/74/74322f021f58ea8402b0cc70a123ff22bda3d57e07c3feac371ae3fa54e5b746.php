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

/* user.html.twig */
class __TwigTemplate_cbb1e4cc6f5c898dd043a999d56b6d7994ba4d0b8d0ecc995a9aef25f1af0184 extends Template
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
            'javascripts_onload_document' => [$this, 'block_javascripts_onload_document'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "user.html.twig", 1);
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
        $this->loadTemplate("simple_header.html.twig", "user.html.twig", 13)->display($context);
        // line 14
        echo "
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-10 col-sm-9 col-md-6 col-xl-4\">

                <div class=\"d-flex justify-content-center\">
                    <div class=\"image_outer_container\">
                        <div class=\"image_inner_container\">
                            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatarUrl", [0 => 150, 1 => 150], "method", false, false, false, 22), "html", null, true);
        echo "\" alt=\"profile picture\"
                                 class=\"img-fluid profile-pic\" data-toggle=\"tooltip\"
                                 data-placement=\"bottom\"
                                 title=\"id: ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>

                <div class=\"row\"  style=\"margin-top: 10px !important\">
                    <div class=\"col-md-6 text-center\">
                        <p>Ime i prezime</p>
                        ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstName", [], "any", false, false, false, 33), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastName", [], "any", false, false, false, 33), "html", null, true);
        echo "
                    </div>
                    <div class=\"col-md-6 text-center\">
                        <p>Tim</p>
                        ";
        // line 37
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "team", [], "any", false, false, false, 37))) {
            // line 38
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "team", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
            echo "
                        ";
        } else {
            // line 40
            echo "                            Neraspoređen
                        ";
        }
        // line 42
        echo "                    </div>
                </div>

                <div class=\"row justify-content-center text-center\" style=\"margin-top: 10px !important\">
                    <div class=\"col-xl-10 col-md-10 col-sm-12\">
                        <p>Email</p>
                        ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 48), "html", null, true);
        echo "
                    </div>
                </div>

                <div class=\"row justify-content-center text-center\"  style=\"margin-top: 10px !important\">
                    <div class=\"col-6\">
                        <p>Datum registracije</p>
                        ";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "registrationDate", [], "any", false, false, false, 55), "d-m-Y"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 64
    public function block_javascripts_onload_document($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "    ";
        $this->displayParentBlock("javascripts_onload_document", $context, $blocks);
        echo "

    \$('[data-toggle=\"tooltip\"]').tooltip();
";
    }

    public function getTemplateName()
    {
        return "user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 65,  164 => 64,  153 => 55,  143 => 48,  135 => 42,  131 => 40,  125 => 38,  123 => 37,  114 => 33,  103 => 25,  97 => 22,  87 => 14,  84 => 13,  80 => 12,  74 => 10,  68 => 8,  64 => 7,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/user.html.twig");
    }
}
