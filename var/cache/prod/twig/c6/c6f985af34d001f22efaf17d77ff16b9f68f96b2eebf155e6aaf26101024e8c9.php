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
class __TwigTemplate_0f76f9ae7b0ff1cbfd142fe435b5e4422ac44a79cd23acb833eb8771d262eb87 extends Template
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
        // line 1
        $this->displayBlock('card', $context, $blocks);
    }

    public function block_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"col col-auto\">
        <div class=\"tile-add\" style=\"background-color:";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "completed", [], "any", false, false, false, 3)) {
            echo "#ecf5c3bf";
        }
        echo "\">
            ";
        // line 4
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 4), "attributes", [], "any", false, false, false, 4), "get", [0 => "_route"], "method", false, false, false, 4), "app_homepage"))) {
            // line 5
            echo "                    <a href=\" ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_project", ["project_id" => ($context["project_id"] ?? null)]), "html", null, true);
            echo " \"><i class=\"fas fa-ellipsis-h\"></i></a>
                    <a href=\" ";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["vars"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["route"] ?? null) : null), ["project_id" => ($context["project_id"] ?? null)]), "html", null, true);
            echo " \">
            ";
        } else {
            // line 8
            echo "                    <a href=\" ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_task", ["project_id" => ($context["project_id"] ?? null), "task_id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 8)]), "html", null, true);
            echo " \"><i class=\"fas fa-ellipsis-h\"></i></a>
                    <a href=\" ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["vars"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["route"] ?? null) : null), ["project_id" => ($context["project_id"] ?? null), "task_id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo " \">
            ";
        }
        // line 11
        echo "                        <div class=\"tile-item-squircle\" style=\"background-color:#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "color", [], "any", false, false, false, 11), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "priority", [], "any", false, false, false, 19)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 20
            echo "                                            !
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                                    </b>
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class=\"tile-add-name\" style=\"overflow: initial\"> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "</div>
                    <div id=\"team-name\" class=\"text-black-50\" style=\"margin-top: 7px;\">
                        ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "creator", [], "any", false, false, false, 29) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 29), "attributes", [], "any", false, false, false, 29), "get", [0 => "_route"], "method", false, false, false, 29), "app_homepage")))) {
            // line 30
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "creator", [], "any", false, false, false, 30), "team", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "
                        ";
        }
        // line 32
        echo "                    </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "card/card.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  113 => 30,  111 => 29,  106 => 27,  99 => 22,  92 => 20,  88 => 19,  76 => 11,  71 => 9,  66 => 8,  61 => 6,  56 => 5,  54 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "card/card.html.twig", "/home/vladimir/PhpstormProjects/project-manager/templates/card/card.html.twig");
    }
}
