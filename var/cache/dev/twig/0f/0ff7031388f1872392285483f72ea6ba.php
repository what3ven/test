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

/* @SonataAdmin/ajax_layout.html.twig */
class __TwigTemplate_8ab4f75593566aeab102d60d844808de extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'preview' => [$this, 'block_preview'],
            'form' => [$this, 'block_form'],
            'list' => [$this, 'block_list'],
            'show' => [$this, 'block_show'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/ajax_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 14
        echo "    ";
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 15
        echo "    ";
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('preview', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        if (( !twig_test_empty((isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new RuntimeError('Variable "_list_table" does not exist.', 22, $this->source); })())) ||  !twig_test_empty((isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new RuntimeError('Variable "_list_filters" does not exist.', 22, $this->source); })())))) {
            // line 23
            echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        ";
            // line 28
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 28, $this->source); })()) == "list")) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 28, $this->source); })()), "listModes", [], "any", false, false, false, 28)) > 1))) {
                // line 29
                echo "                            <div class=\"nav navbar-right btn-group\">
                                ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 30, $this->source); })()), "listModes", [], "any", false, false, false, 30));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 31
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 31, $this->source); })()), "generateUrl", [0 => "list", 1 => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "query", [], "any", false, false, false, 31), "all", [], "any", false, false, false, 31), ["_list_mode" => $context["mode"]])], "method", false, false, false, 31), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 31, $this->source); })()), "getListMode", [], "method", false, false, false, 31) == $context["mode"])) {
                        echo " active";
                    }
                    echo "\">
                                        ";
                    // line 33
                    echo "                                        ";
                    if (( !twig_get_attribute($this->env, $this->source, $context["settings"], "icon", [], "any", true, true, false, 33) && twig_get_attribute($this->env, $this->source, $context["settings"], "class", [], "any", true, true, false, 33))) {
                        // line 34
                        echo "                                            ";
                        @trigger_error("Relying on the \"class\" setting is deprecated since sonata-project/admin-bundle 4.9, use the \"icon\" setting instead"." (\"@SonataAdmin/ajax_layout.html.twig\" at line 34).", E_USER_DEPRECATED);
                        // line 35
                        echo "                                            <i class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["settings"], "class", [], "any", false, false, false, 35), "html", null, true);
                        echo "\" aria-hidden=\"true\"></i>
                                        ";
                    } else {
                        // line 37
                        echo "                                            ";
                        echo $this->env->getRuntime('Sonata\AdminBundle\Twig\IconRuntime')->parseIcon(((twig_get_attribute($this->env, $this->source, $context["settings"], "icon", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["settings"], "icon", [], "any", false, false, false, 37), "")) : ("")));
                        echo "
                                        ";
                    }
                    // line 39
                    echo "                                    </a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                            </div>
                        ";
            }
            // line 43
            echo "
                        ";
            // line 44
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new RuntimeError('Variable "_list_filters_actions" does not exist.', 44, $this->source); })()))) {
                // line 45
                echo "                            ";
                echo (isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new RuntimeError('Variable "_list_filters_actions" does not exist.', 45, $this->source); })());
                echo "
                        ";
            }
            // line 47
            echo "                    </div>
                </div>
            </div>
        </div>

        ";
            // line 52
            if (twig_trim_filter((isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new RuntimeError('Variable "_list_filters" does not exist.', 52, $this->source); })()))) {
                // line 53
                echo "            <div class=\"row\">
                ";
                // line 54
                echo (isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new RuntimeError('Variable "_list_filters" does not exist.', 54, $this->source); })());
                echo "
            </div>
        ";
            }
            // line 57
            echo "
        <div class=\"row\">
            ";
            // line 59
            echo (isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new RuntimeError('Variable "_list_table" does not exist.', 59, $this->source); })());
            echo "
        </div>
    </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preview"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_show($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  254 => 20,  236 => 19,  218 => 18,  200 => 17,  185 => 59,  181 => 57,  175 => 54,  172 => 53,  170 => 52,  163 => 47,  157 => 45,  155 => 44,  152 => 43,  148 => 41,  141 => 39,  135 => 37,  129 => 35,  126 => 34,  123 => 33,  114 => 31,  110 => 30,  107 => 29,  105 => 28,  98 => 23,  96 => 22,  93 => 21,  90 => 20,  87 => 19,  84 => 18,  82 => 17,  79 => 16,  76 => 15,  73 => 14,  70 => 13,  51 => 12,  48 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block content %}
    {% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
    {% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
    {% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

    {% block preview %}{% endblock %}
    {% block form %}{% endblock %}
    {% block list %}{% endblock %}
    {% block show %}{% endblock %}

    {% if _list_table is not empty or _list_filters is not empty %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                            <div class=\"nav navbar-right btn-group\">
                                {% for mode, settings in admin.listModes %}
                                    <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\">
                                        {# NEXT_MAJOR: Remove the if and keep the else part #}
                                        {% if settings.icon is not defined and settings.class is defined %}
                                            {% deprecated 'Relying on the \"class\" setting is deprecated since sonata-project/admin-bundle 4.9, use the \"icon\" setting instead' %}
                                            <i class=\"{{ settings.class }}\" aria-hidden=\"true\"></i>
                                        {% else %}
                                            {{ settings.icon|default('')|parse_icon }}
                                        {% endif %}
                                    </a>
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if _list_filters_actions is not empty %}
                            {{ _list_filters_actions|raw }}
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        {% if _list_filters|trim %}
            <div class=\"row\">
                {{ _list_filters|raw }}
            </div>
        {% endif %}

        <div class=\"row\">
            {{ _list_table|raw }}
        </div>
    </div>
    {% endif %}
{% endblock %}
", "@SonataAdmin/ajax_layout.html.twig", "/var/www/html/TestSite/vendor/sonata-project/admin-bundle/src/Resources/views/ajax_layout.html.twig");
    }
}
