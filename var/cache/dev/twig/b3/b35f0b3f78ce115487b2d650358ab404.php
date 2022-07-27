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

/* @SonataAdmin/CRUD/display_html.html.twig */
class __TwigTemplate_201c6066a111a290b3675447a1d02c62 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_html.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_html.html.twig"));

        // line 12
        ob_start();
        // line 13
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "&nbsp;
    ";
        } else {
            // line 16
            if (((array_key_exists("truncate", $context)) ? (_twig_default_filter((isset($context["truncate"]) || array_key_exists("truncate", $context) ? $context["truncate"] : (function () { throw new RuntimeError('Variable "truncate" does not exist.', 16, $this->source); })()), null)) : (null))) {
                // line 17
                $context["length"] = ((twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "length", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "length", [], "any", false, false, false, 17), 30)) : (30));
                // line 18
                echo "            ";
                $context["cut"] = (((twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "cut", [], "any", true, true, false, 18) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "cut", [], "any", false, false, false, 18)))) ? (twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "cut", [], "any", false, false, false, 18)) : (true));
                // line 19
                echo "            ";
                $context["ellipsis"] = ((twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "ellipsis", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "ellipsis", [], "any", false, false, false, 19), "...")) : ("..."));
                // line 20
                echo "            ";
                echo twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_striptags((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 20, $this->source); })()))), "truncate", [0 => (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 20, $this->source); })()), 1 => (isset($context["ellipsis"]) || array_key_exists("ellipsis", $context) ? $context["ellipsis"] : (function () { throw new RuntimeError('Variable "ellipsis" does not exist.', 20, $this->source); })()), 2 => (isset($context["cut"]) || array_key_exists("cut", $context) ? $context["cut"] : (function () { throw new RuntimeError('Variable "cut" does not exist.', 20, $this->source); })())], "method", false, false, false, 20);
            } else {
                // line 22
                if (((array_key_exists("strip", $context)) ? (_twig_default_filter((isset($context["strip"]) || array_key_exists("strip", $context) ? $context["strip"] : (function () { throw new RuntimeError('Variable "strip" does not exist.', 22, $this->source); })()), false)) : (false))) {
                    // line 23
                    $context["value"] = twig_striptags((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 23, $this->source); })()));
                }
                // line 25
                echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 25, $this->source); })());
                echo "
        ";
            }
            // line 27
            echo "    ";
        }
        $___internal_parse_17_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo twig_spaceless($___internal_parse_17_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/display_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 12,  75 => 27,  70 => 25,  67 => 23,  65 => 22,  61 => 20,  58 => 19,  55 => 18,  53 => 17,  51 => 16,  47 => 14,  45 => 13,  43 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{%- apply spaceless %}
    {%- if value is empty -%}
        &nbsp;
    {% else %}
        {%- if truncate|default(null) -%}
            {% set length = truncate.length|default(30) %}
            {% set cut = truncate.cut ?? true %}
            {% set ellipsis = truncate.ellipsis|default('...') %}
            {{ value|striptags|u.truncate(length, ellipsis, cut)|raw }}
        {%- else -%}
            {%- if strip|default(false) -%}
                {% set value = value|striptags %}
            {%- endif -%}
            {{ value|raw }}
        {% endif %}
    {% endif %}
{% endapply -%}
", "@SonataAdmin/CRUD/display_html.html.twig", "/var/www/html/TestSite/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/display_html.html.twig");
    }
}
