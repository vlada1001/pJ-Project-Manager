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

/* index_content.html.twig */
class __TwigTemplate_9ea45b2468467711dc95199462658bb12ac7192949d3d03c2e8aae718234008c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'pre_content' => [$this, 'block_pre_content'],
            'page_content' => [$this, 'block_page_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("index.html.twig", "index_content.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container text-center\">
        <h3 class=\"font-weight-light\">
            Dobrodošli ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6), "firstName", [], "any", false, false, false, 6), "html", null, true);
        echo "
        </h3>
    </div>
";
    }

    // line 11
    public function block_pre_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <p>Projekti</p>
";
    }

    // line 15
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        $context["vars"] = ["route" => "app_show_project"];
        // line 17
        echo "
        ";
        // line 18
        if ((array_key_exists("projects", $context) &&  !twig_test_empty(($context["projects"] ?? null)))) {
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 20
                echo "                ";
                $context["project_id"] = twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 20);
                // line 21
                echo "                ";
                echo twig_include($this->env, $context, "card/card.html.twig");
                echo "
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        } else {
            // line 24
            echo "            <p>Nema projekata</p>
        ";
        }
    }

    public function getTemplateName()
    {
        return "index_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 24,  123 => 23,  106 => 21,  103 => 20,  85 => 19,  83 => 18,  80 => 17,  77 => 16,  73 => 15,  68 => 12,  64 => 11,  56 => 6,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index_content.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/index_content.html.twig");
    }
}
