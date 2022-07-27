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

/* @SonataAdmin/Core/add_block.html.twig */
class __TwigTemplate_2fa83627da4b535623f49be1e788e3dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/add_block.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/add_block.html.twig"));

        // line 1
        $context["items_per_column"] = twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 1, $this->source); })()), "getOption", [0 => "dropdown_number_groups_per_colums"], "method", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        $context["groups"] = $this->env->getRuntime('Sonata\AdminBundle\Twig\GroupRuntime')->getDashboardGroupsWithCreatableAdmins();
        // line 4
        echo "
";
        // line 5
        $context["column_count"] = twig_round((twig_length_filter($this->env, (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 5, $this->source); })())) / (isset($context["items_per_column"]) || array_key_exists("items_per_column", $context) ? $context["items_per_column"] : (function () { throw new RuntimeError('Variable "items_per_column" does not exist.', 5, $this->source); })())), 0, "ceil");
        // line 6
        echo "
<div class=\"dropdown-menu multi-column dropdown-add\"
    ";
        // line 8
        if (((isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 8, $this->source); })()) > 1)) {
            echo "style=\"width: ";
            echo twig_escape_filter($this->env, ((isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 8, $this->source); })()) * 140), "html", null, true);
            echo "px;\"";
        }
        // line 9
        echo ">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 10, $this->source); })())));
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
            // line 11
            echo "        ";
            $context["display"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "roles", [], "any", false, false, false, 11)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 11, $this->source); })()), "getOption", [0 => "role_admin"], "method", false, false, false, 11))) || (twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "roles", [], "any", false, false, false, 11), function ($__role__) use ($context, $macros) { $context["role"] = $__role__; return $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 11, $this->source); })())); })) > 0));
            // line 12
            echo "
        ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 13)) {
                // line 14
                echo "            ";
                $context["render_first_element"] = true;
                // line 15
                echo "        ";
            }
            // line 16
            echo "
        ";
            // line 17
            if ((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new RuntimeError('Variable "display" does not exist.', 17, $this->source); })())) {
                // line 18
                echo "            ";
                if (((isset($context["render_first_element"]) || array_key_exists("render_first_element", $context) ? $context["render_first_element"] : (function () { throw new RuntimeError('Variable "render_first_element" does not exist.', 18, $this->source); })()) || ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 18) % (isset($context["items_per_column"]) || array_key_exists("items_per_column", $context) ? $context["items_per_column"] : (function () { throw new RuntimeError('Variable "items_per_column" does not exist.', 18, $this->source); })())) == 0))) {
                    // line 19
                    echo "                ";
                    if ((isset($context["render_first_element"]) || array_key_exists("render_first_element", $context) ? $context["render_first_element"] : (function () { throw new RuntimeError('Variable "render_first_element" does not exist.', 19, $this->source); })())) {
                        // line 20
                        echo "                    <div class=\"container-fluid\">
                        <div class=\"row\">
                    ";
                        // line 22
                        $context["render_first_element"] = false;
                        // line 23
                        echo "                ";
                    } else {
                        // line 24
                        echo "                    </ul>
                ";
                    }
                    // line 26
                    echo "                <ul class=\"dropdown-menu";
                    if (((isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 26, $this->source); })()) > 1)) {
                        echo " col-md-";
                        echo twig_escape_filter($this->env, twig_round((12 / (isset($context["column_count"]) || array_key_exists("column_count", $context) ? $context["column_count"] : (function () { throw new RuntimeError('Variable "column_count" does not exist.', 26, $this->source); })()))), "html", null, true);
                    }
                    echo "\">
            ";
                }
                // line 28
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 28) % (isset($context["items_per_column"]) || array_key_exists("items_per_column", $context) ? $context["items_per_column"] : (function () { throw new RuntimeError('Variable "items_per_column" does not exist.', 28, $this->source); })())) != 0)) {
                    // line 29
                    echo "                <li role=\"presentation\" class=\"divider\"></li>
            ";
                }
                // line 31
                echo "            <li role=\"presentation\" class=\"dropdown-header\">
                ";
                // line 32
                echo $this->env->getRuntime('Sonata\AdminBundle\Twig\IconRuntime')->parseIcon(twig_get_attribute($this->env, $this->source, $context["group"], "icon", [], "any", false, false, false, 32));
                echo "
                ";
                // line 34
                echo "                ";
                if ((((twig_get_attribute($this->env, $this->source, $context["group"], "translation_domain", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group"], "translation_domain", [], "any", false, false, false, 34), null)) : (null)) === false)) {
                    // line 35
                    echo "                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, false, 35), "html", null, true);
                    echo "
                ";
                } else {
                    // line 37
                    echo "                    ";
                    // line 38
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, false, 38), [], ((twig_get_attribute($this->env, $this->source, $context["group"], "translation_domain", [], "any", true, true, false, 38)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group"], "translation_domain", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, $context["group"], "label_catalogue", [], "any", false, false, false, 38))) : (twig_get_attribute($this->env, $this->source, $context["group"], "label_catalogue", [], "any", false, false, false, 38)))), "html", null, true);
                    echo "
                ";
                }
                // line 40
                echo "            </li>

            ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "items", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 43
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["admin"], "hasRoute", [0 => "create"], "method", false, false, false, 43) && twig_get_attribute($this->env, $this->source, $context["admin"], "hasAccess", [0 => "create"], "method", false, false, false, 43))) {
                        // line 44
                        echo "                    ";
                        if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["admin"], "subClasses", [], "any", false, false, false, 44))) {
                            // line 45
                            echo "                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                            // line 46
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "generateUrl", [0 => "create"], "method", false, false, false, 46), "html", null, true);
                            echo "\">
                                ";
                            // line 47
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["admin"], "label", [], "any", false, false, false, 47))) {
                                // line 48
                                echo "                                    ";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["admin"], "label", [], "any", false, false, false, 48), [], twig_get_attribute($this->env, $this->source, $context["admin"], "translationdomain", [], "any", false, false, false, 48)), "html", null, true);
                                echo "
                                ";
                            }
                            // line 50
                            echo "                            </a>
                        </li>
                    ";
                        } else {
                            // line 53
                            echo "                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, $context["admin"], "subclasses", [], "any", false, false, false, 53)));
                            foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                // line 54
                                echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                                // line 55
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "generateUrl", [0 => "create", 1 => ["subclass" => $context["subclass"]]], "method", false, false, false, 55), "html", null, true);
                                echo "\">
                                    ";
                                // line 56
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["subclass"], [], twig_get_attribute($this->env, $this->source, $context["admin"], "translationdomain", [], "any", false, false, false, 56)), "html", null, true);
                                echo "
                                </a>
                            </li>
                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 60
                            echo "                    ";
                        }
                        // line 61
                        echo "                ";
                    }
                    // line 62
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 63) &&  !(isset($context["render_first_element"]) || array_key_exists("render_first_element", $context) ? $context["render_first_element"] : (function () { throw new RuntimeError('Variable "render_first_element" does not exist.', 63, $this->source); })()))) {
                    // line 64
                    echo "                </ul>
                </div>
                </div>
            ";
                }
                // line 68
                echo "        ";
            }
            // line 69
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
        // line 70
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/add_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 70,  243 => 69,  240 => 68,  234 => 64,  231 => 63,  225 => 62,  222 => 61,  219 => 60,  209 => 56,  205 => 55,  202 => 54,  197 => 53,  192 => 50,  186 => 48,  184 => 47,  180 => 46,  177 => 45,  174 => 44,  171 => 43,  167 => 42,  163 => 40,  157 => 38,  155 => 37,  149 => 35,  146 => 34,  142 => 32,  139 => 31,  135 => 29,  132 => 28,  123 => 26,  119 => 24,  116 => 23,  114 => 22,  110 => 20,  107 => 19,  104 => 18,  102 => 17,  99 => 16,  96 => 15,  93 => 14,  91 => 13,  88 => 12,  85 => 11,  68 => 10,  65 => 9,  59 => 8,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set items_per_column = sonata_config.getOption('dropdown_number_groups_per_colums') %}

{% set groups = get_sonata_dashboard_groups_with_creatable_admins() %}

{% set column_count = (groups|length / items_per_column)|round(0, 'ceil') %}

<div class=\"dropdown-menu multi-column dropdown-add\"
    {% if column_count > 1 %}style=\"width: {{ column_count*140 }}px;\"{% endif %}
>
    {% for group in groups|reverse %}
        {% set display = group.roles is empty or is_granted(sonata_config.getOption('role_admin')) or group.roles|filter(role => is_granted(role))|length > 0 %}

        {% if loop.first %}
            {% set render_first_element = true %}
        {% endif %}

        {% if display %}
            {% if render_first_element or loop.index0 % items_per_column == 0 %}
                {% if render_first_element %}
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                    {% set render_first_element = false %}
                {% else %}
                    </ul>
                {% endif %}
                <ul class=\"dropdown-menu{% if column_count > 1 %} col-md-{{ (12/column_count)|round }}{% endif %}\">
            {% endif %}
            {% if loop.index0 % items_per_column != 0 %}
                <li role=\"presentation\" class=\"divider\"></li>
            {% endif %}
            <li role=\"presentation\" class=\"dropdown-header\">
                {{ group.icon|parse_icon }}
                {# NEXT_MAJOR: Remove the default null #}
                {% if group.translation_domain|default(null) is same as(false) %}
                    {{ group.label }}
                {% else %}
                    {# NEXT_MAJOR: Remove the fallback on group.label_catalogue #}
                    {{ group.label|trans({}, group.translation_domain|default(group.label_catalogue)) }}
                {% endif %}
            </li>

            {% for admin in group.items %}
                {% if admin.hasRoute('create') and admin.hasAccess('create') %}
                    {% if admin.subClasses is empty %}
                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"{{ admin.generateUrl('create') }}\">
                                {% if admin.label is not empty %}
                                    {{ admin.label|trans({}, admin.translationdomain) }}
                                {% endif %}
                            </a>
                        </li>
                    {% else %}
                        {% for subclass in admin.subclasses|keys %}
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"{{ admin.generateUrl('create', {'subclass': subclass}) }}\">
                                    {{ subclass|trans({}, admin.translationdomain) }}
                                </a>
                            </li>
                        {% endfor %}
                    {% endif %}
                {% endif %}
            {% endfor %}
            {% if loop.last and not render_first_element %}
                </ul>
                </div>
                </div>
            {% endif %}
        {% endif %}
    {% endfor %}
</div>
", "@SonataAdmin/Core/add_block.html.twig", "/var/www/html/TestSite/vendor/sonata-project/admin-bundle/src/Resources/views/Core/add_block.html.twig");
    }
}
