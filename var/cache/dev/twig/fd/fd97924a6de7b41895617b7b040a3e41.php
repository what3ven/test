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

/* @SonataAdmin/CRUD/base_show_compare.html.twig */
class __TwigTemplate_922d5af62c138c744a98b49f6519867d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'show_field' => [$this, 'block_show_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@SonataAdmin/CRUD/base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_compare.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_compare.html.twig"));

        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show.html.twig", "@SonataAdmin/CRUD/base_show_compare.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_show_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show_field"));

        // line 15
        ob_start();
        // line 16
        echo "        <tr class=\"sonata-ba-view-container history-audit-compare\">
            ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), (isset($context["show_field_name"]) || array_key_exists("show_field_name", $context) ? $context["show_field_name"] : (function () { throw new RuntimeError('Variable "show_field_name" does not exist.', 17, $this->source); })()), [], "array", true, true, false, 17)) {
            // line 18
            echo "                ";
            echo $this->env->getRuntime('Sonata\AdminBundle\Twig\RenderElementRuntime')->renderViewElementCompare($this->env, twig_get_attribute($this->env, $this->source, (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 18, $this->source); })()), (isset($context["show_field_name"]) || array_key_exists("show_field_name", $context) ? $context["show_field_name"] : (function () { throw new RuntimeError('Variable "show_field_name" does not exist.', 18, $this->source); })()), [], "array", false, false, false, 18), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 18, $this->source); })()), (isset($context["object_compare"]) || array_key_exists("object_compare", $context) ? $context["object_compare"] : (function () { throw new RuntimeError('Variable "object_compare" does not exist.', 18, $this->source); })()));
            echo "
            ";
        }
        // line 20
        echo "        </tr>
    ";
        $___internal_parse_9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        echo twig_spaceless($___internal_parse_9_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  81 => 20,  75 => 18,  73 => 17,  70 => 16,  68 => 15,  58 => 14,  35 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends '@SonataAdmin/CRUD/base_show.html.twig' %}

{%- block show_field -%}
    {% apply spaceless %}
        <tr class=\"sonata-ba-view-container history-audit-compare\">
            {% if elements[show_field_name] is defined %}
                {{ elements[show_field_name]|render_view_element_compare(object, object_compare) }}
            {% endif %}
        </tr>
    {% endapply %}
{%- endblock -%}
", "@SonataAdmin/CRUD/base_show_compare.html.twig", "/var/www/html/TestSite/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_show_compare.html.twig");
    }
}
