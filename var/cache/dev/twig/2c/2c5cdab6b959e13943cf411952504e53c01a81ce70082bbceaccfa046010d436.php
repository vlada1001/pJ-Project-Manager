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
class __TwigTemplate_7c2e8fc832a1163988d7d760e6f44c4852c59a027af22f54e86d57f12a6cc271 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Početna stranica";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_custom_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_stylesheets"));

        // line 11
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

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
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\InitialsExtension']->getInitials(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "firstName", [], "any", false, false, false, 61), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "lastName", [], "any", false, false, false, 61)), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 105, $this->source); })()));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 115, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 138, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 186
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 189
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 195
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 217
    public function block_javascripts_onload_document($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts_onload_document"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts_onload_document"));

        // line 218
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  551 => 218,  541 => 217,  529 => 222,  524 => 219,  522 => 217,  499 => 196,  489 => 195,  471 => 189,  459 => 190,  457 => 189,  453 => 187,  443 => 186,  432 => 166,  422 => 158,  413 => 152,  409 => 150,  403 => 149,  395 => 144,  387 => 140,  384 => 139,  380 => 138,  372 => 132,  369 => 130,  361 => 127,  355 => 126,  347 => 121,  339 => 117,  336 => 116,  332 => 115,  328 => 114,  323 => 112,  318 => 110,  314 => 109,  310 => 108,  306 => 106,  302 => 105,  292 => 98,  288 => 97,  270 => 82,  263 => 77,  259 => 74,  249 => 66,  245 => 65,  238 => 61,  225 => 51,  208 => 36,  206 => 35,  196 => 34,  183 => 11,  173 => 10,  156 => 23,  154 => 22,  152 => 21,  150 => 20,  148 => 19,  141 => 13,  139 => 10,  136 => 9,  126 => 8,  107 => 6,  95 => 224,  93 => 195,  89 => 193,  87 => 186,  84 => 185,  81 => 180,  78 => 173,  75 => 168,  73 => 34,  68 => 31,  66 => 8,  62 => 7,  58 => 6,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{% block title %}Početna stranica{% endblock %} - pJ</title>
    <link rel=\"shortcut icon\" href=\"{{ asset('img/favicon_2.png') }}\" type=\"image/x-icon\">
    {% block stylesheets %}
        <!-- Custom CSS -->
        {% block custom_stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\"
              integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\"
              crossorigin=\"anonymous\">
        {# <!-- Scrollbar Custom CSS --> #}
        {# <link rel=\"stylesheet\" #}
        {# href=\"https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css\" #}
        {# integrity=\"sha512-6qkvBbDyl5TDJtNJiC8foyEVuB6gxMBkrKy67XpqnIDxyvLLPJzmTjAj1dRJfNdmXWqD10VbJoeN4pOQqDwvRA==\" #}
        {# crossorigin=\"anonymous\"/> #}

        <!-- Font Awesome JS -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/solid.min.js\"
                integrity=\"sha256-eyKJF0J/jBPpWl+OatrihTDmKDUjz8QauKAYIY1ibSQ=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/fontawesome.min.js\"
                integrity=\"sha256-MoYcVrOTRHZb/bvF8DwaNkTJkqu9aCR21zOsGkkBo78=\" crossorigin=\"anonymous\"></script>

    {% endblock %}

</head>
<body class=\"wrapper\">
{% block nav %}
    {# top nav bar #}

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
                        <a href=\"{{ path('app_add_project') }}\" class=\"plus align-self-center\">
                            <span>+</span>
                        </a>
                    </div>
                    <div class=\"col align-self-center\">
                        <div class=\"dropdown dot\">
                            <button class=\"btn dropdown-toggle align-self-center\" type=\"button\"
                                    id=\"dropdownMenuButton\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"initials\">
                                    {{ initials(app.user.firstName, app.user.lastName) }}
                                </span>
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\" id=\"profileDropDown\">
                                <a class=\"dropdown-item\" href=\"{{ path('app_user') }}\">Profil</a>
                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Odjavi se</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div> {# top nav bar #}


    {# left side bar #}

    <!-- left side bar -->
    <nav id=\"sidebar\">
        <div>
            <div class=\"sidebar-header\">
                <a href=\"{{ path('app_homepage') }}\">
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
                    <li><a href=\"{{ path('app_homepage') }}\">Početna</a></li>
                    <li><a href=\"{{ path('app_user_tasks') }}\">Moji Zadaci</a></li>
                </div>

                <div class=\"divider sidebar-component\">
                    <div>
                        <ul class=\"list-unstyled\">
                            <p class=\"text-white-50 sidebar-component-title\">Timovi</p>
                            {% for team in teams %}
                                <li class=\"sidebar-component-content\">
                                    <div class=\"row\">
                                        <a data-toggle=\"collapse\" href=\"#team-{{ team.id }}\" role=\"button\"
                                           aria-expanded=\"false\" aria-controls=\"team-{{ team.id }}\"
                                           href=\"#team-{{ team.id }}\"
                                           class=\"dropdown-toggle col-10\"
                                           style=\"white-space: initial\">{{ team.name }}</a>
                                    </div>
                                    <ul class=\"list-unstyled collapse show\" id=\"team-{{ team.id }}\">
                                        {% for user in users %}
                                            {% if user.team and user.team.id == team.id %}
                                                <a href=\"{{ path('app_user_show', {id:user.id}) }}\"
                                                   style=\"padding: 0!important; display: inline !important;\">
                                                    <li class=\"dot\">
                                                        <span class=\"initials\">
                                                            {{ initials(user.firstName, user.lastName) }}
                                                        </span>
                                                    </li>
                                                </a>
                                            {% endif %}
                                        {% endfor %}
                                    </ul>
                                </li>
                            {% endfor %}

                            {# nerasporedjeni #}
                            <li class=\"sidebar-component-content\">
                                <div class=\"row\">
                                    <a href=\"#team-nerasporedjeni\" data-toggle=\"collapse\" aria-expanded=\"false\"
                                       class=\"dropdown-toggle col-10\" style=\"white-space: initial\">Neraspoređeni</a>
                                </div>
                                <ul class=\"list-unstyled collapse show\" id=\"team-nerasporedjeni\">
                                    {% for user in users %}
                                        {% if not user.team %}
                                            <a href=\"{{ path('app_user_show', {id:user.id}) }}\"
                                               style=\"padding: 0!important; display: inline !important;\">
                                                <li class=\"dot\">
                                                        <span class=\"initials\">
                                                            {{ initials(user.firstName, user.lastName) }}
                                                        </span>
                                                </li>
                                            </a>
                                        {% endif %}
                                    {% endfor %}
                                </ul>
                            <li class=\"padding-bottom-10\">
                                <a href=\"{{ path('app_add_team') }}\" class=\"text-white-50\">+ Dodaj Tim</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <form action=\"{{ path('app_logout') }}\" method=\"post\">
                    <button type=\"submit\" name=\"logout\" value=\"logout\" class=\"btn btn-sm text-white\">
                        <b>Odjavi se</b>
                    </button>
                </form>
            </ul>
        </div>
    </nav> {# left side bar #}

{% endblock %}

{#<!-- Page Content  -->#}
{#<script>#}
{#    function showContent(str) {#}
{#        let xhttp;#}

{#        xhttp = new XMLHttpRequest();#}
{#        xhttp.onreadystatechange = function () {#}
{#            if (this.readyState === 4 && this.status === 200) {#}
{#                document.getElementById(\"project-content\").innerHTML = this.responseText;#}
{#            }#}
{#        };#}

{#        xhttp.open(\"GET\", {{ path('ajax_req', {str: \"crit\"}) }}, true);#}
{#        xhttp.send();#}
{#    }#}
{#</script>#}

{% block body %}
    <div id=\"content\">
        <div class=\"container-fluid\">
            {% block content %}{% endblock %}
        </div>
    </div>
{% endblock %}


{% block javascripts %}

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

            {% block javascripts_onload_document %}
            {% endblock %}
        });
    </script>

    {{ encore_entry_script_tags('app') }}
{% endblock %}
</body>
</html>
", "base.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/base.html.twig");
    }
}
