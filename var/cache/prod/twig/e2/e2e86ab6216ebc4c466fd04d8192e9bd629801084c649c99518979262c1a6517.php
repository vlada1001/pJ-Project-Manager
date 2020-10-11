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

/* my_tasks.html.twig */
class __TwigTemplate_91a19878b16a8108553983cb23fdf2173ecb648b275e70d42d26baa2660fabb9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'new_card' => [$this, 'block_new_card'],
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
        // line 10
        $context["route"] = "app_user_add_task";
        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "my_tasks.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <p style=\"font-size: 1.75rem;\">Moji zadaci</p>
";
    }

    // line 7
    public function block_new_card($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        if ( !($context["tasks"] ?? null)) {
            // line 14
            echo "        <p>Nemate zadataka</p>
    ";
        } else {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
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
                // line 17
                echo "            ";
                $context["project_id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "project", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17);
                // line 18
                echo "            ";
                $context["vars"] = ["route" => "app_show_task", "project_id" => ($context["project_id"] ?? null), "task_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 18)];
                // line 19
                echo "            ";
                $this->loadTemplate("card/card.html.twig", "my_tasks.html.twig", 19)->display($context);
                // line 20
                echo "        ";
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
            // line 21
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "my_tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 21,  104 => 20,  101 => 19,  98 => 18,  95 => 17,  77 => 16,  73 => 14,  70 => 13,  66 => 12,  60 => 7,  55 => 4,  51 => 3,  46 => 1,  44 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "my_tasks.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/my_tasks.html.twig");
    }
}
