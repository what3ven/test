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

/* @SonataUser/Form/roles_matrix.html.twig */
class __TwigTemplate_8e0ee95e9d866bbcf07c835f28095299 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataUser/Form/roles_matrix.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataUser/Form/roles_matrix.html.twig"));

        // line 11
        echo "<table class=\"table table-condensed\">
    <thead>
    <tr>
        <th></th>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["permission_labels"]) || array_key_exists("permission_labels", $context) ? $context["permission_labels"] : (function () { throw new RuntimeError('Variable "permission_labels" does not exist.', 15, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 16
            echo "            <th> ";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo " </th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grouped_roles"]) || array_key_exists("grouped_roles", $context) ? $context["grouped_roles"] : (function () { throw new RuntimeError('Variable "grouped_roles" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["admin_label"] => $context["roles"]) {
            // line 22
            echo "        <tr>
            <th>";
            // line 23
            echo twig_escape_filter($this->env, $context["admin_label"], "html", null, true);
            echo "</th>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, $context["roles"]));
            foreach ($context['_seq'] as $context["role"] => $context["attributes"]) {
                // line 25
                echo "                <td>
                    ";
                // line 26
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["attributes"], "form", [], "any", false, false, false, 26), 'widget', ["label" => false]);
                echo "
                    ";
                // line 27
                if ( !twig_get_attribute($this->env, $this->source, $context["attributes"], "is_granted", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "                        <script>
                            \$('input[value=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "\"]').iCheck('disable');
                            \$('form').on('submit', function() {
                                \$('input[value=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "\"]').iCheck('enable');
                            });
                        </script>
                    ";
                }
                // line 35
                echo "                </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['role'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['admin_label'], $context['roles'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tbody>
</table>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Form/roles_matrix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 39,  113 => 37,  106 => 35,  99 => 31,  94 => 29,  91 => 28,  89 => 27,  85 => 26,  82 => 25,  78 => 24,  74 => 23,  71 => 22,  67 => 21,  62 => 18,  53 => 16,  49 => 15,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<table class=\"table table-condensed\">
    <thead>
    <tr>
        <th></th>
        {% for label in permission_labels|sort %}
            <th> {{ label }} </th>
        {% endfor %}
    </tr>
    </thead>
    <tbody>
    {% for admin_label, roles in grouped_roles %}
        <tr>
            <th>{{ admin_label }}</th>
            {% for role, attributes in roles|sort %}
                <td>
                    {{ form_widget(attributes.form, { label: false }) }}
                    {% if not attributes.is_granted %}
                        <script>
                            \$('input[value=\"{{ role }}\"]').iCheck('disable');
                            \$('form').on('submit', function() {
                                \$('input[value=\"{{ role }}\"]').iCheck('enable');
                            });
                        </script>
                    {% endif %}
                </td>
            {% endfor %}
        </tr>
    {% endfor %}
    </tbody>
</table>

", "@SonataUser/Form/roles_matrix.html.twig", "/var/www/html/TestSite/vendor/sonata-project/user-bundle/src/Resources/views/Form/roles_matrix.html.twig");
    }
}
