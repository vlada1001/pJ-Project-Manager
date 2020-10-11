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

/* base.html.twig */
class __TwigTemplate_7b9b66707f51b08f4e6a761f1d6b5f4965b1434ba31cf44e43750d7b11f794e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'custom_stylesheets' => [$this, 'block_custom_stylesheets'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
            'javascripts_onload_document' => [$this, 'block_javascripts_onload_document'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - pJ</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon_2.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "
</head>
<body class=\"wrapper\">
";
        // line 34
        $this->displayBlock('nav', $context, $blocks);
        // line 168
        echo "
";
        // line 173
        echo "
";
        // line 180
        echo "
";
        // line 185
        echo "
";
        // line 186
        $this->displayBlock('body', $context, $blocks);
        // line 193
        echo "

";
        // line 195
        $this->displayBlock('javascripts', $context, $blocks);
        // line 224
        echo "</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Početna stranica";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        <!-- Custom CSS -->
        ";
        // line 10
        $this->displayBlock('custom_stylesheets', $context, $blocks);
        // line 13
        echo "
        <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\"
              integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\"
              crossorigin=\"anonymous\">
        ";
        // line 19
        echo "        ";
        // line 20
        echo "        ";
        // line 21
        echo "        ";
        // line 22
        echo "        ";
        // line 23
        echo "
        <!-- Font Awesome JS -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/solid.min.js\"
                integrity=\"sha256-eyKJF0J/jBPpWl+OatrihTDmKDUjz8QauKAYIY1ibSQ=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/fontawesome.min.js\"
                integrity=\"sha256-MoYcVrOTRHZb/bvF8DwaNkTJkqu9aCR21zOsGkkBo78=\" crossorigin=\"anonymous\"></script>

    ";
    }

    // line 10
    public function block_custom_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
    }

    // line 34
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    ";
        // line 36
        echo "
    <!-- top nav bar -->
    <div id=\"topbar\">
        <nav class=\"navbar navbar-expand-lg\">
            <div class=\"container-fluid\">
                <button type=\"button\" id=\"sidebarCollapse\" class=\"btn\">
                    <i class=\"fas fa-align-left\"></i>
                </button>
                <div class=\"row\">
                    <div class=\"col align-self-center\">
                        <form>
                            <input type=\"search\" placeholder=\"Pretraga\">
                        </form>
                    </div>
                    <div class=\"col align-self-center\">
                        <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_project");
        echo "\" class=\"plus align-self-center\">
                            <span>+</span>
                        </a>
                    </div>
                    <div class=\"col align-self-center\">
                        <div class=\"dropdown dot\">
                            <button class=\"btn dropdown-toggle align-self-center\" type=\"button\"
                                    id=\"dropdownMenuButton\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"initials\">
                                    ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\InitialsExtension']->getInitials(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 61), "firstName", [], "any", false, false, false, 61), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 61), "lastName", [], "any", false, false, false, 61)), "html", null, true);
        echo "
                                </span>
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\" id=\"profileDropDown\">
                                <a class=\"dropdown-item\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        echo "\">Profil</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Odjavi se</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div> ";
        // line 74
        echo "

    ";
        // line 77
        echo "
    <!-- left side bar -->
    <nav id=\"sidebar\">
        <div>
            <div class=\"sidebar-header\">
                <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">
                    <div id=\"logo\">
                        <svg width=\"101\" height=\"44\" viewBox=\"0 0 101 44\" fill=\"none\"
                             xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M73.0769 22.7012C73.0769 25.5957 72.4148 27.9277 71.0906 29.6973C69.7664 31.4668 67.9734 32.3516 65.7117 32.3516C63.4031 32.3516 61.5867 31.6191 60.2625 30.1543V39.3125H57.0105V12.9805H59.9812L60.1394 15.0898C61.4637 13.4492 63.3035 12.6289 65.659 12.6289C67.9441 12.6289 69.7488 13.4902 71.073 15.2129C72.409 16.9355 73.0769 19.332 73.0769 22.4023V22.7012ZM69.825 22.332C69.825 20.1875 69.368 18.4941 68.4539 17.252C67.5398 16.0098 66.2859 15.3887 64.6922 15.3887C62.7234 15.3887 61.2469 16.2617 60.2625 18.0078V27.0957C61.2351 28.8301 62.7234 29.6973 64.7273 29.6973C66.2859 29.6973 67.5222 29.082 68.4363 27.8516C69.3621 26.6094 69.825 24.7695 69.825 22.332ZM88.4578 6.40625H91.8504V24.5293C91.8504 26.9785 91.1121 28.8945 89.6355 30.2773C88.1707 31.6602 86.2137 32.3516 83.7644 32.3516C81.2215 32.3516 79.241 31.7012 77.823 30.4004C76.4051 29.0996 75.6961 27.2773 75.6961 24.9336H79.0711C79.0711 26.3984 79.4695 27.541 80.2664 28.3613C81.075 29.1816 82.241 29.5918 83.7644 29.5918C85.159 29.5918 86.284 29.1523 87.1394 28.2734C88.0066 27.3945 88.4461 26.1641 88.4578 24.582V6.40625Z\"
                                  fill=\"white\"/>
                            <path d=\"M12.0496 1L16.6521 14.4742H31.5463L19.4967 22.8017L24.0992 36.2758L12.0496 43.5L0 36.2758L4.60254 22.8017H12.0496L7.44706 14.4742L12.0496 1Z\"
                                  fill=\"#FF8D74\"/>
                        </svg>
                    </div>
                </a>
            </div>

            <ul class=\"list-unstyled\">
                <div class=\"divider padding-10\">
                    <li><a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">Početna</a></li>
                    <li><a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_tasks");
        echo "\">Moji Zadaci</a></li>
                </div>

                <div class=\"divider sidebar-component\">
                    <div>
                        <ul class=\"list-unstyled\">
                            <p class=\"text-white-50 sidebar-component-title\">Timovi</p>
                            ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["teams"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 106
            echo "                                <li class=\"sidebar-component-content\">
                                    <div class=\"row\">
                                        <a data-toggle=\"collapse\" href=\"#team-";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 108), "html", null, true);
            echo "\" role=\"button\"
                                           aria-expanded=\"false\" aria-controls=\"team-";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 109), "html", null, true);
            echo "\"
                                           href=\"#team-";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 110), "html", null, true);
            echo "\"
                                           class=\"dropdown-toggle col-10\"
                                           style=\"white-space: initial\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 112), "html", null, true);
            echo "</a>
                                    </div>
                                    <ul class=\"list-unstyled collapse show\" id=\"team-";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 114), "html", null, true);
            echo "\">
                                        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 116
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["user"], "team", [], "any", false, false, false, 116) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "team", [], "any", false, false, false, 116), "id", [], "any", false, false, false, 116), twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 116))))) {
                    // line 117
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 117)]), "html", null, true);
                    echo "\"
                                                   style=\"padding: 0!important; display: inline !important;\">
                                                    <li class=\"dot\">
                                                        <span class=\"initials\">
                                                            ";
                    // line 121
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\InitialsExtension']->getInitials(twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 121), twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 121)), "html", null, true);
                    echo "
                                                        </span>
                                                    </li>
                                                </a>
                                            ";
                }
                // line 126
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                                    </ul>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
                            ";
        // line 132
        echo "                            <li class=\"sidebar-component-content\">
                                <div class=\"row\">
                                    <a href=\"#team-nerasporedjeni\" data-toggle=\"collapse\" aria-expanded=\"false\"
                                       class=\"dropdown-toggle col-10\" style=\"white-space: initial\">Neraspoređeni</a>
                                </div>
                                <ul class=\"list-unstyled collapse show\" id=\"team-nerasporedjeni\">
                                    ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 139
            echo "                                        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["user"], "team", [], "any", false, false, false, 139)) {
                // line 140
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 140)]), "html", null, true);
                echo "\"
                                               style=\"padding: 0!important; display: inline !important;\">
                                                <li class=\"dot\">
                                                        <span class=\"initials\">
                                                            ";
                // line 144
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\InitialsExtension']->getInitials(twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 144), twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 144)), "html", null, true);
                echo "
                                                        </span>
                                                </li>
                                            </a>
                                        ";
            }
            // line 149
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                                </ul>
                            <li class=\"padding-bottom-10\">
                                <a href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_team");
        echo "\" class=\"text-white-50\">+ Dodaj Tim</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <form action=\"";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" method=\"post\">
                    <button type=\"submit\" name=\"logout\" value=\"logout\" class=\"btn btn-sm text-white\">
                        <b>Odjavi se</b>
                    </button>
                </form>
            </ul>
        </div>
    </nav> ";
        // line 166
        echo "
";
    }

    // line 186
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 187
        echo "    <div id=\"content\">
        <div class=\"container-fluid\">
            ";
        // line 189
        $this->displayBlock('content', $context, $blocks);
        // line 190
        echo "        </div>
    </div>
";
    }

    // line 189
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 195
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 196
        echo "
    <!-- jQuery CDN-->
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"
            integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\"
            crossorigin=\"anonymous\"></script>
    <!-- Popper.JS -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js\"
            integrity=\"sha256-fTuUgtT7O2rqoImwjrhDgbXTKUwyxxujIMRIK7TbuNU=\" crossorigin=\"anonymous\"></script>
    <!-- Bootstrap JS -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js\"
            integrity=\"sha256-CjSoeELFOcH0/uxWu6mC/Vlrc1AARqbm/jiiImDGV3s=\" crossorigin=\"anonymous\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function () {

            \$(\"#sidebarCollapse\").on('click', function () {
                \$('#sidebar, #topbar, #content').toggleClass('active');
                \$('.collapse.in').toggleClass('in');
                \$('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

            ";
        // line 217
        $this->displayBlock('javascripts_onload_document', $context, $blocks);
        // line 219
        echo "        });
    </script>

    ";
        // line 222
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
";
    }

    // line 217
    public function block_javascripts_onload_document($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 218
        echo "            ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 218,  445 => 217,  439 => 222,  434 => 219,  432 => 217,  409 => 196,  405 => 195,  399 => 189,  393 => 190,  391 => 189,  387 => 187,  383 => 186,  378 => 166,  368 => 158,  359 => 152,  355 => 150,  349 => 149,  341 => 144,  333 => 140,  330 => 139,  326 => 138,  318 => 132,  315 => 130,  307 => 127,  301 => 126,  293 => 121,  285 => 117,  282 => 116,  278 => 115,  274 => 114,  269 => 112,  264 => 110,  260 => 109,  256 => 108,  252 => 106,  248 => 105,  238 => 98,  234 => 97,  216 => 82,  209 => 77,  205 => 74,  195 => 66,  191 => 65,  184 => 61,  171 => 51,  154 => 36,  152 => 35,  148 => 34,  141 => 11,  137 => 10,  126 => 23,  124 => 22,  122 => 21,  120 => 20,  118 => 19,  111 => 13,  109 => 10,  106 => 9,  102 => 8,  95 => 6,  89 => 224,  87 => 195,  83 => 193,  81 => 186,  78 => 185,  75 => 180,  72 => 173,  69 => 168,  67 => 34,  62 => 31,  60 => 8,  56 => 7,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/base.html.twig");
    }
}
