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

/* @SonataAdmin/Block/block_admin_list.html.twig */
class __TwigTemplate_4ea6953f79dab072a010c37bc887cce2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'block' => [$this, 'block_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new RuntimeError('Variable "sonata_block" does not exist.', 12, $this->source); })()), "templates", [], "any", false, false, false, 12), "block_base", [], "any", false, false, false, 12), "@SonataAdmin/Block/block_admin_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_admin_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_admin_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 15, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "        ";
            $context["display"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "roles", [], "any", false, false, false, 16)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 16, $this->source); })()), "getOption", [0 => "role_super_admin"], "method", false, false, false, 16))) || (twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "roles", [], "any", false, false, false, 16), function ($__role__) use ($context, $macros) { $context["role"] = $__role__; return $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 16, $this->source); })())); })) > 0));
            // line 17
            echo "
        ";
            // line 18
            if ((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new RuntimeError('Variable "display" does not exist.', 18, $this->source); })())) {
                // line 19
                echo "            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">
                        ";
                // line 23
                echo "                        ";
                if ((((twig_get_attribute($this->env, $this->source, $context["group"], "translation_domain", [], "any", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group"], "translation_domain", [], "any", false, false, false, 23), null)) : (null)) === false)) {
                    // line 24
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, false, 24), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 26
                    echo "                            ";
                    // line 27
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, false, 27), [], ((twig_get_attribute($this->env, $this->source, $context["group"], "translation_domain", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group"], "translation_domain", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, $context["group"], "label_catalogue", [], "any", false, false, false, 27))) : (twig_get_attribute($this->env, $this->source, $context["group"], "label_catalogue", [], "any", false, false, false, 27)))), "html", null, true);
                    echo "
                        ";
                }
                // line 29
                echo "                    </h3>
                </div>
                <div class=\"box-body\">
                    <table class=\"table table-hover\">
                        <tbody>
                            ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "items", [], "any", false, false, false, 34));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 35
                    echo "                                ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "dashboardActions", [], "any", false, false, false, 35)) > 0)) {
                        // line 36
                        echo "                                    <tr>
                                        <td class=\"sonata-ba-list-label\" width=\"40%\">
                                            ";
                        // line 38
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["admin"], "label", [], "any", false, false, false, 38))) {
                            // line 39
                            echo "                                                ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["admin"], "label", [], "any", false, false, false, 39), [], twig_get_attribute($this->env, $this->source, $context["admin"], "translationdomain", [], "any", false, false, false, 39)), "html", null, true);
                            echo "
                                            ";
                        }
                        // line 41
                        echo "                                        </td>
                                        <td>
                                            <div class=\"btn-group\">
                                                ";
                        // line 44
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["admin"], "dashboardActions", [], "any", false, false, false, 44));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                            // line 45
                            echo "                                                    ";
                            $this->loadTemplate(((twig_get_attribute($this->env, $this->source, $context["action"], "template", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "template", [], "any", false, false, false, 45), "@SonataAdmin/CRUD/dashboard__action.html.twig")) : ("@SonataAdmin/CRUD/dashboard__action.html.twig")), "@SonataAdmin/Block/block_admin_list.html.twig", 45)->display(twig_array_merge($context, ["action" => $context["action"]]));
                            // line 46
                            echo "                                                ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 47
                        echo "                                            </div>
                                        </td>
                                    </tr>
                                ";
                    }
                    // line 51
                    echo "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                        </tbody>
                    </table>
                </div>
            </div>
        ";
            }
            // line 57
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Block/block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 57,  213 => 52,  199 => 51,  193 => 47,  179 => 46,  176 => 45,  159 => 44,  154 => 41,  148 => 39,  146 => 38,  142 => 36,  139 => 35,  122 => 34,  115 => 29,  109 => 27,  107 => 26,  101 => 24,  98 => 23,  93 => 19,  91 => 18,  88 => 17,  85 => 16,  67 => 15,  57 => 14,  35 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {% for group in groups %}
        {% set display = group.roles is empty or is_granted(sonata_config.getOption('role_super_admin')) or group.roles|filter(role => is_granted(role))|length > 0 %}

        {% if display %}
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">
                        {# NEXT_MAJOR: Remove the default null #}
                        {% if group.translation_domain|default(null) is same as(false) %}
                            {{ group.label }}
                        {% else %}
                            {# NEXT_MAJOR: Remove the fallback on group.label_catalogue #}
                            {{ group.label|trans({}, group.translation_domain|default(group.label_catalogue)) }}
                        {% endif %}
                    </h3>
                </div>
                <div class=\"box-body\">
                    <table class=\"table table-hover\">
                        <tbody>
                            {% for admin in group.items %}
                                {% if admin.dashboardActions|length > 0 %}
                                    <tr>
                                        <td class=\"sonata-ba-list-label\" width=\"40%\">
                                            {% if admin.label is not empty %}
                                                {{ admin.label|trans({}, admin.translationdomain) }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            <div class=\"btn-group\">
                                                {% for action in admin.dashboardActions %}
                                                    {% include action.template|default('@SonataAdmin/CRUD/dashboard__action.html.twig') with {'action': action} %}
                                                {% endfor %}
                                            </div>
                                        </td>
                                    </tr>
                                {% endif %}
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        {% endif %}
    {% endfor %}
{% endblock %}
", "@SonataAdmin/Block/block_admin_list.html.twig", "/var/www/html/TestSite/vendor/sonata-project/admin-bundle/src/Resources/views/Block/block_admin_list.html.twig");
    }
}
