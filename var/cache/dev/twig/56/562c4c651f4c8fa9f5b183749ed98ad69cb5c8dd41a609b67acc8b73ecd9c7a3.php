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

/* card/card.html.twig */
class __TwigTemplate_e1107dbec95ae547f6b18ea2f04dbe2ab278ad682ad17a0301bfad9fea5b8c6c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'card' => [$this, 'block_card'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/card.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/card.html.twig"));

        // line 1
        $this->displayBlock('card', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card"));

        // line 2
        echo "    <div class=\"col col-auto\">
        <div class=\"tile-add\">
            <a href=\" ";
        // line 4
        echo " \"><i class=\"fas fa-ellipsis-h\"></i></a>

            ";
        // line 6
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "attributes", [], "any", false, false, false, 6), "get", [0 => "_route"], "method", false, false, false, 6), "app_homepage"))) {
            // line 7
            echo "            <a href=\" ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 7, $this->source); })()), "route", [], "array", false, false, false, 7), ["project_id" => (isset($context["project_id"]) || array_key_exists("project_id", $context) ? $context["project_id"] : (function () { throw new RuntimeError('Variable "project_id" does not exist.', 7, $this->source); })())]), "html", null, true);
            echo " \">
            ";
        } else {
            // line 9
            echo "            <a href=\" ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 9, $this->source); })()), "route", [], "array", false, false, false, 9), ["project_id" => (isset($context["project_id"]) || array_key_exists("project_id", $context) ? $context["project_id"] : (function () { throw new RuntimeError('Variable "project_id" does not exist.', 9, $this->source); })()), "task_id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo " \">
            ";
        }
        // line 11
        echo "                <div class=\"tile-item-squircle\" style=\"background-color: #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "color", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
                    <svg class=\"Icon ListLineIcon ItemIcon PotTile-icon\" focusable=\"false\" viewBox=\"0 0 32 32\">
                        <path d=\"M26,2H6C2.7,2,0,4.7,0,8v14c0,3.3,2.7,6,6,6h20c3.3,0,6-2.7,6-6V8C32,4.7,29.3,2,26,2z M30,22c0,2.2-1.8,4-4,4H6c-2.2,0-4-1.8-4-4V8c0-2.2,1.8-4,4-4h20c2.2,0,4,1.8,4,4V22z M26,9c0,0.6-0.4,1-1,1H13c-0.6,0-1-0.4-1-1s0.4-1,1-1h12C25.6,8,26,8.4,26,9z M12,15c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1s-0.4,1-1,1h-6C12.4,16,12,15.6,12,15z M24,21c0,0.6-0.4,1-1,1H13c-0.6,0-1-0.4-1-1s0.4-1,1-1h10C23.6,20,24,20.4,24,21z M9.2,9c0,0.7-0.5,1.2-1.2,1.2S6.8,9.7,6.8,9S7.3,7.8,8,7.8S9.2,8.3,9.2,9zM9.2,15c0,0.7-0.5,1.2-1.2,1.2S6.8,15.7,6.8,15s0.5-1.2,1.2-1.2S9.2,14.3,9.2,15z M9.2,21c0,0.7-0.5,1.2-1.2,1.2S6.8,21.7,6.8,21s0.5-1.2,1.2-1.2S9.2,20.3,9.2,21z\"></path>
                    </svg>
                    <div class=\"p-icon text-center\">
                        <p class=\"font-weight-bolder\"
                           style=\"font-size: 20px; color: white; margin-bottom: 10px !important;\">
                            <b>
                                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "priority", [], "any", false, false, false, 19)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 20
            echo "                                    !
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                            </b>
                        </p>
                    </div>
                </div>
            </a>
            <div class=\"tile-add-name\"> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "</div>
            <div id=\"team-name\" class=\"text-black-50\" style=\"margin-top: 7px;\">
                ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 29, $this->source); })()), "creator", [], "any", false, false, false, 29) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "attributes", [], "any", false, false, false, 29), "get", [0 => "_route"], "method", false, false, false, 29), "app_homepage")))) {
            // line 30
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 30, $this->source); })()), "creator", [], "any", false, false, false, 30), "team", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "
                ";
        }
        // line 32
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "card/card.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 32,  122 => 30,  120 => 29,  115 => 27,  108 => 22,  101 => 20,  97 => 19,  85 => 11,  79 => 9,  73 => 7,  71 => 6,  67 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block card %}
    <div class=\"col col-auto\">
        <div class=\"tile-add\">
            <a href=\" {# {{ path('app_edit_project') }} #} \"><i class=\"fas fa-ellipsis-h\"></i></a>

            {% if app.request.attributes.get('_route') == 'app_homepage' %}
            <a href=\" {{ path(vars['route'], {project_id: project_id}) }} \">
            {% else %}
            <a href=\" {{ path(vars['route'], {project_id: project_id, task_id: item.id}) }} \">
            {% endif %}
                <div class=\"tile-item-squircle\" style=\"background-color: #{{ item.color }}\">
                    <svg class=\"Icon ListLineIcon ItemIcon PotTile-icon\" focusable=\"false\" viewBox=\"0 0 32 32\">
                        <path d=\"M26,2H6C2.7,2,0,4.7,0,8v14c0,3.3,2.7,6,6,6h20c3.3,0,6-2.7,6-6V8C32,4.7,29.3,2,26,2z M30,22c0,2.2-1.8,4-4,4H6c-2.2,0-4-1.8-4-4V8c0-2.2,1.8-4,4-4h20c2.2,0,4,1.8,4,4V22z M26,9c0,0.6-0.4,1-1,1H13c-0.6,0-1-0.4-1-1s0.4-1,1-1h12C25.6,8,26,8.4,26,9z M12,15c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1s-0.4,1-1,1h-6C12.4,16,12,15.6,12,15z M24,21c0,0.6-0.4,1-1,1H13c-0.6,0-1-0.4-1-1s0.4-1,1-1h10C23.6,20,24,20.4,24,21z M9.2,9c0,0.7-0.5,1.2-1.2,1.2S6.8,9.7,6.8,9S7.3,7.8,8,7.8S9.2,8.3,9.2,9zM9.2,15c0,0.7-0.5,1.2-1.2,1.2S6.8,15.7,6.8,15s0.5-1.2,1.2-1.2S9.2,14.3,9.2,15z M9.2,21c0,0.7-0.5,1.2-1.2,1.2S6.8,21.7,6.8,21s0.5-1.2,1.2-1.2S9.2,20.3,9.2,21z\"></path>
                    </svg>
                    <div class=\"p-icon text-center\">
                        <p class=\"font-weight-bolder\"
                           style=\"font-size: 20px; color: white; margin-bottom: 10px !important;\">
                            <b>
                                {% for i in 1..item.priority %}
                                    !
                                {% endfor %}
                            </b>
                        </p>
                    </div>
                </div>
            </a>
            <div class=\"tile-add-name\"> {{ item.name }}</div>
            <div id=\"team-name\" class=\"text-black-50\" style=\"margin-top: 7px;\">
                {% if item.creator and app.request.attributes.get('_route') == 'app_homepage' %}
                    {{ item.creator.team.name }}
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}", "card/card.html.twig", "/home/vladimir/PhpstormProjects/pJ/templates/card/card.html.twig");
    }
}
