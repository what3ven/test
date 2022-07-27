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

/* @SonataAdmin/CRUD/display_trans.html.twig */
class __TwigTemplate_4d689bd937a2586a1c8ae40a86fceea3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_trans.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/display_trans.html.twig"));

        // line 12
        ob_start();
        // line 13
        echo "    ";
        $context["value"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_sprintf(((array_key_exists("value_format", $context)) ? (_twig_default_filter((isset($context["value_format"]) || array_key_exists("value_format", $context) ? $context["value_format"] : (function () { throw new RuntimeError('Variable "value_format" does not exist.', 13, $this->source); })()), "%s")) : ("%s")), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })())), [], ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 13, $this->source); })()), "messages")) : ("messages")));
        // line 14
        echo "
    ";
        // line 15
        if (((array_key_exists("safe", $context)) ? (_twig_default_filter((isset($context["safe"]) || array_key_exists("safe", $context) ? $context["safe"] : (function () { throw new RuntimeError('Variable "safe" does not exist.', 15, $this->source); })()), false)) : (false))) {
            // line 16
            echo "        ";
            echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 16, $this->source); })());
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "
    ";
        }
        $___internal_parse_11_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo twig_spaceless($___internal_parse_11_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/display_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  59 => 18,  53 => 16,  51 => 15,  48 => 14,  45 => 13,  43 => 12,);
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
    {% set value = value_format|default('%s')|format(value)|trans({}, translation_domain|default('messages')) %}

    {% if safe|default(false) %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endapply -%}
", "@SonataAdmin/CRUD/display_trans.html.twig", "/var/www/html/TestSite/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/display_trans.html.twig");
    }
}
