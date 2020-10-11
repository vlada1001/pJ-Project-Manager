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
class __TwigTemplate_77e557076ff910933c421e8bd80456adbe2ea314d05777d59e97c72f07190ada extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "display_options.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "display_options.html.twig"));

        // line 1
        $this->displayBlock('display_options', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_display_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "display_options"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "display_options"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "display_options.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block display_options %}
    <div class=\"text-right\">
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
{% endblock %}", "display_options.html.twig", "/home/vladimir/PhpstormProjects/pJ/templates/display_options.html.twig");
    }
}
