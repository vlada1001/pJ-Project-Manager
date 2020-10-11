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

/* card/card_new.html.twig */
class __TwigTemplate_a1aed442914214691a9ff9a8d074ada5b620c0ac40db94f7f52ac2b48dbeac2b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'card_new' => [$this, 'block_card_new'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('card_new', $context, $blocks);
    }

    public function block_card_new($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"padding-10\"></div>
    <div class=\"row justify-content-center\" style=\"margin-left: 10px !important;\">
        <div class=\"col col-auto\">
            <div class=\"tile-add\">
                ";
        // line 6
        if ( !array_key_exists("project", $context)) {
            // line 7
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null));
            echo "\">
                ";
        } else {
            // line 9
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), ["project_id" => ($context["project_id"] ?? null)]), "html", null, true);
            echo "\">
                ";
        }
        // line 11
        echo "                    <div class=\"tile-add-item-squircle\">
                            <svg class=\"AddItemSquircle-plusIcon\" focusable=\"false\" viewBox=\"0 0 32 32\">
                                <path d=\"M26,14h-8V6c0-1.1-0.9-2-2-2l0,0c-1.1,0-2,0.9-2,2v8H6c-1.1,0-2,0.9-2,2l0,0c0,1.1,0.9,2,2,2h8v8c0,1.1,0.9,2,2,2l0,0c1.1,0,2-0.9,2-2v-8h8c1.1,0,2-0.9,2-2l0,0C28,14.9,27.1,14,26,14z\"></path>
                            </svg>
                    </div>
                    </a>
                    <div class=\"tile-add-name\" style=\"font-weight: normal !important\">";
        // line 17
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "card/card_new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  65 => 11,  59 => 9,  53 => 7,  51 => 6,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "card/card_new.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/card/card_new.html.twig");
    }
}
