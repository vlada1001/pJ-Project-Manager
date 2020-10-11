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

/* display_options.html.twig */
class __TwigTemplate_38f26cad188b7dce53dd366e93d88cd1ece4e86f5091bf6c6e694e0ccd763526 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'display_options' => [$this, 'block_display_options'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('display_options', $context, $blocks);
    }

    public function block_display_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"text-right\">
        <div class=\"dropdown\">
            <button class=\"btn btn-sm btn-link\" type=\"button\" id=\"dropdownMenu2\"
                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Sortiraj po <i class=\"fas fa-sort-down\"></i>
            </button>
            <div class=\"line-small\"></div>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu2\">
                <button class=\"dropdown-item\" type=\"button\" onclick=\"showContent('prioritet')\">prioritetu
                    (opadajući)
                </button>
                <button class=\"dropdown-item\" type=\"button\" onclick=\"showContent('starost')\">starosti
                    (noviji
                    prvo)
                </button>
                <button class=\"dropdown-item\" type=\"button\" onclick=\"showContent('zavrsenost')\">završenosti
                    (opadajući)
                </button>
                <button class=\"dropdown-item\" type=\"button\" onclick=\"showContent('tim')\">moj tim</button>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "display_options.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "display_options.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/display_options.html.twig");
    }
}
