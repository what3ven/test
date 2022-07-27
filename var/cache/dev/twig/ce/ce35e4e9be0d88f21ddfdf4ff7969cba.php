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

/* @SonataAdmin/CRUD/show_url.html.twig */
class __TwigTemplate_82e253af45310f41903af873dfd1483e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_url.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_url.html.twig"));

        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "@SonataAdmin/CRUD/show_url.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 15
        $context["route"] = twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 15, $this->source); })()), "option", [0 => "route"], "method", false, false, false, 15);
        // line 16
        if (( !(null === (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 16, $this->source); })())) && twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "identifier_parameter_name", [], "any", true, true, false, 16))) {
            // line 17
            $context["newParameters"] = [twig_get_attribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 17, $this->source); })()), "identifier_parameter_name", [], "any", false, false, false, 17) => twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 17, $this->source); })()), "normalizedidentifier", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 17, $this->source); })())], "method", false, false, false, 17)];
            // line 18
            $context["route"] = twig_array_merge((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 18, $this->source); })()), ["parameters" => twig_array_merge(((twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "parameters", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "parameters", [], "any", false, false, false, 18), [])) : ([])), (isset($context["newParameters"]) || array_key_exists("newParameters", $context) ? $context["newParameters"] : (function () { throw new RuntimeError('Variable "newParameters" does not exist.', 18, $this->source); })()))]);
        }
        // line 21
        $this->loadTemplate("@SonataAdmin/CRUD/display_url.html.twig", "@SonataAdmin/CRUD/show_url.html.twig", 21)->display(twig_to_array(["value" =>         // line 22
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 22, $this->source); })()), "url" => twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 23, $this->source); })()), "option", [0 => "url"], "method", false, false, false, 23), "route" =>         // line 24
(isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 24, $this->source); })()), "hide_protocol" => twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 25, $this->source); })()), "option", [0 => "hide_protocol"], "method", false, false, false, 25), "attributes" => twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 26, $this->source); })()), "option", [0 => "attributes"], "method", false, false, false, 26), "safe" => twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 27, $this->source); })()), "option", [0 => "safe"], "method", false, false, false, 27)]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  82 => 26,  81 => 25,  80 => 24,  79 => 23,  78 => 22,  77 => 21,  74 => 18,  72 => 17,  70 => 16,  68 => 15,  58 => 14,  35 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends '@SonataAdmin/CRUD/base_show_field.html.twig' %}

{% block field %}
    {%- set route = field_description.option('route') -%}
    {%- if route is not null and route.identifier_parameter_name is defined -%}
        {%- set newParameters = {(route.identifier_parameter_name):(admin.normalizedidentifier(object))} -%}
        {%- set route = route|merge({parameters: route.parameters|default([])|merge(newParameters)}) -%}
    {%- endif -%}

    {%- include '@SonataAdmin/CRUD/display_url.html.twig' with {
        value: value,
        url: field_description.option('url'),
        route: route,
        hide_protocol: field_description.option('hide_protocol'),
        attributes: field_description.option('attributes'),
        safe: field_description.option('safe'),
    } only -%}
{% endblock %}
", "@SonataAdmin/CRUD/show_url.html.twig", "/var/www/html/TestSite/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_url.html.twig");
    }
}
