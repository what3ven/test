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

/* @SonataAdmin/CRUD/list__action_delete.html.twig */
class __TwigTemplate_91f63c957bd703990aeb86e1d09ea9f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action_delete.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action_delete.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 12, $this->source); })()), "hasAccess", [0 => "delete", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 12, $this->source); })())], "method", false, false, false, 12) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 12, $this->source); })()), "hasRoute", [0 => "delete"], "method", false, false, false, 12))) {
            // line 13
            echo "    ";
            $context["button_content"] = twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 13, $this->source); })()), "getOption", [0 => "list_action_button_content"], "method", false, false, false, 13);
            // line 14
            echo "    <a
        href=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 15, $this->source); })()), "generateObjectUrl", [0 => "delete", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 15, $this->source); })()), 2 => ((twig_get_attribute($this->env, $this->source, ($context["actions"] ?? null), "link_parameters", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["actions"] ?? null), "link_parameters", [], "any", false, false, false, 15), [])) : ([]))], "method", false, false, false, 15), "html", null, true);
            echo "\"
        class=\"btn btn-sm btn-default delete_link\"
        title=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete", [], "SonataAdminBundle"), "html", null, true);
            echo "\"
    >
        ";
            // line 19
            if ((((isset($context["button_content"]) || array_key_exists("button_content", $context) ? $context["button_content"] : (function () { throw new RuntimeError('Variable "button_content" does not exist.', 19, $this->source); })()) == "icon") || ((isset($context["button_content"]) || array_key_exists("button_content", $context) ? $context["button_content"] : (function () { throw new RuntimeError('Variable "button_content" does not exist.', 19, $this->source); })()) == "all"))) {
                // line 20
                echo "            <i class=\"fas fa-times\" aria-hidden=\"true\"></i>
        ";
            }
            // line 22
            echo "        ";
            if ((((isset($context["button_content"]) || array_key_exists("button_content", $context) ? $context["button_content"] : (function () { throw new RuntimeError('Variable "button_content" does not exist.', 22, $this->source); })()) == "text") || ((isset($context["button_content"]) || array_key_exists("button_content", $context) ? $context["button_content"] : (function () { throw new RuntimeError('Variable "button_content" does not exist.', 22, $this->source); })()) == "all"))) {
                // line 23
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete", [], "SonataAdminBundle"), "html", null, true);
                echo "
        ";
            } else {
                // line 25
                echo "            <span class=\"sr-only\">
                ";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete", [], "SonataAdminBundle"), "html", null, true);
                echo "
            </span>
        ";
            }
            // line 29
            echo "    </a>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__action_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 29,  82 => 26,  79 => 25,  73 => 23,  70 => 22,  66 => 20,  64 => 19,  59 => 17,  54 => 15,  51 => 14,  48 => 13,  46 => 12,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% if admin.hasAccess('delete', object) and admin.hasRoute('delete') %}
    {% set button_content = sonata_config.getOption('list_action_button_content') %}
    <a
        href=\"{{ admin.generateObjectUrl('delete', object, actions.link_parameters|default([])) }}\"
        class=\"btn btn-sm btn-default delete_link\"
        title=\"{{ 'action_delete'|trans({}, 'SonataAdminBundle') }}\"
    >
        {% if button_content == 'icon' or button_content == 'all' %}
            <i class=\"fas fa-times\" aria-hidden=\"true\"></i>
        {% endif %}
        {% if button_content == 'text' or button_content == 'all' %}
            {{ 'action_delete'|trans({}, 'SonataAdminBundle') }}
        {% else %}
            <span class=\"sr-only\">
                {{ 'action_delete'|trans({}, 'SonataAdminBundle') }}
            </span>
        {% endif %}
    </a>
{% endif %}
", "@SonataAdmin/CRUD/list__action_delete.html.twig", "/var/www/html/TestSite/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list__action_delete.html.twig");
    }
}
