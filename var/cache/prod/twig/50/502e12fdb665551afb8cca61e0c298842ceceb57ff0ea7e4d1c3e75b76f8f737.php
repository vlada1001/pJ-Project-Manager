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

/* index.html.twig */
class __TwigTemplate_c2a7e524be91e8aaf7934d86bab58f7fef0707e2b7052dcab3a16d2644c838d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'page_title' => [$this, 'block_page_title'],
            'new_card' => [$this, 'block_new_card'],
            'pre_content' => [$this, 'block_pre_content'],
            'display_options' => [$this, 'block_display_options'],
            'page_content' => [$this, 'block_page_content'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 6
        echo "    <div class=\"text-center\">
        ";
        // line 7
        $this->displayBlock('page_title', $context, $blocks);
        // line 8
        echo "
        ";
        // line 10
        echo "        ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "attributes", [], "any", false, false, false, 10), "get", [0 => "_route"], "method", false, false, false, 10), "app_homepage"))) {
            // line 11
            echo "            ";
            $context["vars"] = ["route" => "app_add_project", "title" => "Novi projekat"];
            // line 12
            echo "        ";
        } else {
            echo " ";
            // line 13
            echo "            ";
            $context["vars"] = ["route" => "app_add_task", "title" => "Novi zadatak"];
            // line 14
            echo "        ";
        }
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('new_card', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('pre_content', $context, $blocks);
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('display_options', $context, $blocks);
        // line 25
        echo "
    </div>

    <div class=\"row justify-content-center\" id=\"home-content\">
        ";
        // line 29
        $this->displayBlock('page_content', $context, $blocks);
        // line 32
        echo "    </div>
    ";
    }

    // line 7
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "pJ";
    }

    // line 16
    public function block_new_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "            ";
        $this->loadTemplate("card/card_new.html.twig", "index.html.twig", 17)->display(twig_array_merge($context, ($context["vars"] ?? null)));
        // line 18
        echo "        ";
    }

    // line 20
    public function block_pre_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 22
    public function block_display_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "            ";
        $this->loadTemplate("display_options.html.twig", "index.html.twig", 23)->display($context);
        // line 24
        echo "        ";
    }

    // line 29
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 30,  145 => 29,  141 => 24,  138 => 23,  134 => 22,  128 => 20,  124 => 18,  121 => 17,  117 => 16,  110 => 7,  105 => 32,  103 => 29,  97 => 25,  95 => 22,  92 => 21,  90 => 20,  87 => 19,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  72 => 12,  69 => 11,  66 => 10,  63 => 8,  61 => 7,  58 => 6,  55 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/index.html.twig");
    }
}
