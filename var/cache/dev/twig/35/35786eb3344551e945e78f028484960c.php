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

/* @SonataAdmin/CRUD/base_list_flat_field.html.twig */
class __TwigTemplate_c5f3701ff4ffadc0cc2828523f3af6ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_field.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_field.html.twig"));

        // line 11
        echo "
";
        // line 13
        @trigger_error("The \"base_list_flat_field.html.twig\" template is deprecated since sonata-project/admin-bundle version 4.3 and will be removed in 5.0."." (\"@SonataAdmin/CRUD/base_list_flat_field.html.twig\" at line 13).", E_USER_DEPRECATED);
        // line 14
        echo "
<span class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 15, $this->source); })()), "type", [], "any", false, false, false, 15), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 15, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 15, $this->source); })())], "method", false, false, false, 15), "html", null, true);
        echo "\">
    ";
        // line 16
        $context["route_name"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "option", [0 => "route"], "method", false, true, false, 16), "name", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "option", [0 => "route"], "method", false, true, false, 16), "name", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 16, $this->source); })()), "getOption", [0 => "default_admin_route"], "method", false, false, false, 16))) : (twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 16, $this->source); })()), "getOption", [0 => "default_admin_route"], "method", false, false, false, 16)));
        // line 17
        echo "    ";
        $context["route_parameters"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "option", [0 => "route"], "method", false, true, false, 17), "parameters", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "option", [0 => "route"], "method", false, true, false, 17), "parameters", [], "any", false, false, false, 17), [])) : ([]));
        // line 18
        echo "
    ";
        // line 19
        if ((((twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 20, $this->source); })()), "option", [0 => "identifier", 1 => false], "method", false, false, false, 20) &&         // line 21
(isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 21, $this->source); })())) && twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 22, $this->source); })()), "hasAccess", [0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 22, $this->source); })()), 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 22, $this->source); })())], "method", false, false, false, 22)) && twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 23, $this->source); })()), "hasRoute", [0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 23, $this->source); })())], "method", false, false, false, 23))) {
            // line 25
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 25, $this->source); })()), "generateObjectUrl", [0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 25, $this->source); })()), 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 25, $this->source); })()), 2 => (isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new RuntimeError('Variable "route_parameters" does not exist.', 25, $this->source); })())], "method", false, false, false, 25), "html", null, true);
            echo "\">";
            // line 26
            $this->displayBlock('field', $context, $blocks);
            // line 27
            echo "</a>
    ";
        } else {
            // line 29
            echo "        ";
            $this->displayBlock("field", $context, $blocks);
            echo "
    ";
        }
        // line 31
        echo "</span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 26, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list_flat_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  88 => 31,  82 => 29,  78 => 27,  76 => 26,  72 => 25,  70 => 23,  69 => 22,  68 => 21,  67 => 20,  66 => 19,  63 => 18,  60 => 17,  58 => 16,  52 => 15,  49 => 14,  47 => 13,  44 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{# NEXT_MAJOR: Remove this #}
{% deprecated 'The \"base_list_flat_field.html.twig\" template is deprecated since sonata-project/admin-bundle version 4.3 and will be removed in 5.0.' %}

<span class=\"sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }}\" objectId=\"{{ admin.id(object) }}\">
    {% set route_name = field_description.option('route').name|default(sonata_config.getOption('default_admin_route')) %}
    {% set route_parameters = field_description.option('route').parameters|default([]) %}

    {% if
        field_description.option('identifier', false)
        and route_name
        and admin.hasAccess(route_name, object)
        and admin.hasRoute(route_name)
    %}
        <a href=\"{{ admin.generateObjectUrl(route_name, object, route_parameters) }}\">
            {%- block field %}{{ value }}{% endblock -%}
        </a>
    {% else %}
        {{ block('field') }}
    {% endif %}
</span>
", "@SonataAdmin/CRUD/base_list_flat_field.html.twig", "/var/www/html/TestSite/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_list_flat_field.html.twig");
    }
}
