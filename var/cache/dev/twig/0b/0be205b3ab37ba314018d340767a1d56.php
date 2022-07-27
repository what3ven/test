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

/* @SonataAdmin/CRUD/base_list_flat_inner_row.html.twig */
class __TwigTemplate_0850be56131a6e2d92a4b75b8f136918 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'row' => [$this, 'block_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig"));

        // line 11
        echo "
";
        // line 13
        @trigger_error("The \"base_list_flat_inner_row.html.twig\" template is deprecated since sonata-project/admin-bundle version 4.3 and will be removed in 5.0."." (\"@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig\" at line 13).", E_USER_DEPRECATED);
        // line 14
        echo "
";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 15, $this->source); })()), "list", [], "any", false, false, false, 15), "has", [0 => twig_constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_BATCH")], "method", false, false, false, 15) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "isXmlHttpRequest", [], "any", false, false, false, 15))) {
            // line 16
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        ";
            // line 17
            echo $this->env->getRuntime('Sonata\AdminBundle\Twig\RenderElementRuntime')->renderListElement($this->env, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 17, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 17, $this->source); })()), "list", [], "any", false, false, false, 17), twig_constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_BATCH"), [], "array", false, false, false, 17));
            echo "
    </td>
";
        }
        // line 20
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\"
    colspan=\"";
        // line 22
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 22, $this->source); })()), "list", [], "any", false, false, false, 22), "getElements", [], "method", false, false, false, 22)) - (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 22, $this->source); })()), "list", [], "any", false, false, false, 22), "has", [0 => twig_constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_ACTIONS")], "method", false, false, false, 22) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 22, $this->source); })()), "list", [], "any", false, false, false, 22), "has", [0 => twig_constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_BATCH")], "method", false, false, false, 22))), "html", null, true);
        echo "\"
    objectId=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 23, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 23, $this->source); })())], "method", false, false, false, 23), "html", null, true);
        echo "\">
    ";
        // line 24
        $this->displayBlock('row', $context, $blocks);
        // line 25
        echo "</td>

";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 27, $this->source); })()), "list", [], "any", false, false, false, 27), "has", [0 => twig_constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_ACTIONS")], "method", false, false, false, 27) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "isXmlHttpRequest", [], "any", false, false, false, 27))) {
            // line 28
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 28, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 28, $this->source); })())], "method", false, false, false, 28), "html", null, true);
            echo "\">
        ";
            // line 29
            echo $this->env->getRuntime('Sonata\AdminBundle\Twig\RenderElementRuntime')->renderListElement($this->env, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 29, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 29, $this->source); })()), "list", [], "any", false, false, false, 29), twig_constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_ACTIONS"), [], "array", false, false, false, 29));
            echo "
    </td>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 24
    public function block_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "row"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 24,  88 => 29,  83 => 28,  81 => 27,  77 => 25,  75 => 24,  71 => 23,  67 => 22,  63 => 20,  57 => 17,  54 => 16,  52 => 15,  49 => 14,  47 => 13,  44 => 11,);
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
{% deprecated 'The \"base_list_flat_inner_row.html.twig\" template is deprecated since sonata-project/admin-bundle version 4.3 and will be removed in 5.0.' %}

{% if admin.list.has(constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_BATCH')) and not app.request.isXmlHttpRequest %}
    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        {{ object|render_list_element(admin.list[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_BATCH')]) }}
    </td>
{% endif %}

<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\"
    colspan=\"{{ admin.list.getElements()|length - (admin.list.has(constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_ACTIONS')) + admin.list.has(constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_BATCH'))) }}\"
    objectId=\"{{ admin.id(object) }}\">
    {% block row %}{% endblock %}
</td>

{% if admin.list.has(constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_ACTIONS')) and not app.request.isXmlHttpRequest %}
    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"{{ admin.id(object) }}\">
        {{ object|render_list_element(admin.list[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_ACTIONS')]) }}
    </td>
{% endif %}
", "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig", "/var/www/html/TestSite/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_list_flat_inner_row.html.twig");
    }
}
