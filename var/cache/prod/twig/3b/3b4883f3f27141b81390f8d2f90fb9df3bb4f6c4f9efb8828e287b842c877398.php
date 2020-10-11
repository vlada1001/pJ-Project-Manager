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

/* basic_base.html.twig */
class __TwigTemplate_b926ca37fa441ee1747d187f29fa03219a665aa15e33389a826575c5da7fd2cc extends Template
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
            'custom_stylesheets' => [$this, 'block_custom_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon_2.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo " - pJ</title>

    <!-- Custom CSS -->
    ";
        // line 12
        $this->displayBlock('custom_stylesheets', $context, $blocks);
        // line 15
        echo "
    <!-- Bootstrap CSS CDN -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\"
          integrity=\"sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=\" crossorigin=\"anonymous\"/>
    <!-- Font Awesome JS -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/solid.min.js\"
            integrity=\"sha256-eyKJF0J/jBPpWl+OatrihTDmKDUjz8QauKAYIY1ibSQ=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/fontawesome.min.js\"
            integrity=\"sha256-MoYcVrOTRHZb/bvF8DwaNkTJkqu9aCR21zOsGkkBo78=\" crossorigin=\"anonymous\"></script>
</head>
<body>
";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Početna stranica";
    }

    // line 12
    public function block_custom_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("login");
        echo "
    ";
    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js\"
            integrity=\"sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=\" crossorigin=\"anonymous\"></script>
    <!-- Bootstrap JS -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js\"
            integrity=\"sha256-CjSoeELFOcH0/uxWu6mC/Vlrc1AARqbm/jiiImDGV3s=\" crossorigin=\"anonymous\"></script>
";
    }

    public function getTemplateName()
    {
        return "basic_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 30,  111 => 29,  105 => 26,  98 => 13,  94 => 12,  87 => 9,  82 => 37,  80 => 29,  77 => 28,  75 => 26,  62 => 15,  60 => 12,  54 => 9,  50 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "basic_base.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/basic_base.html.twig");
    }
}
