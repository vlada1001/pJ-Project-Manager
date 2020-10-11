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

/* simple_header.html.twig */
class __TwigTemplate_1e7faf09409fdad92fdf58763c198febf401583864552d0106a75fbb803b3076 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header class=\"new-project-header\">
    <div class=\"new-project-header-left\">
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["referer"] ?? null), "html", null, true);
        echo "\" class=\"back-button new-project-header-back-button\">
            <svg class=\"Icon\" focusable=\"false\" viewBox=\"0 0 32 32\">
                <path d=\"M28,14.5H7.6L15,7.1c0.6-0.6,0.6-1.5,0-2.1s-1.5-0.6-2.1,0l-10,10c-0.6,0.6-0.6,1.5,0,2.1l10,10c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4c0.6-0.6,0.6-1.5,0-2.1l-7.4-7.4H28c0.8,0,1.5-0.7,1.5-1.5S28.8,14.5,28,14.5z\"></path>
            </svg>
        </a>
    </div>
    <div class=\"new-project-header-right\">
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\" class=\"close-button new-project-header-close-button\">
            <svg class=\"Icon\" focusable=\"false\" viewBox=\"0 0 32 32\">
                <path d=\"M18.1,16L27,7.1c0.6-0.6,0.6-1.5,0-2.1s-1.5-0.6-2.1,0L16,13.9l-8.9-9C6.5,4.3,5.6,4.3,5,4.9S4.4,6.4,5,7l8.9,8.9L5,24.8c-0.6,0.6-0.6,1.5,0,2.1c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4l8.9-8.9l8.9,8.9c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4c0.6-0.6,0.6-1.5,0-2.1L18.1,16z\"></path>
            </svg>
        </a>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "simple_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "simple_header.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/simple_header.html.twig");
    }
}
