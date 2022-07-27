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

/* @SonataAdmin/CRUD/Association/edit_one_to_many.html.twig */
class __TwigTemplate_a73e3ed8cf17591f0d1a6dde62873c0a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig"));

        // line 11
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 11, $this->source); })()), "field_description", [], "any", false, false, false, 11), "hasassociationadmin", [], "any", false, false, false, 11)) {
            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 13
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Sonata\AdminBundle\Twig\RenderElementRuntime')->renderRelationElement($context["element"], twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 13, $this->source); })()), "field_description", [], "any", false, false, false, 13)), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 16
            echo "
    <div id=\"field_container_";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\" >
            ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 19, $this->source); })()), "edit", [], "any", false, false, false, 19) == "inline")) {
                // line 20
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 20, $this->source); })()), "inline", [], "any", false, false, false, 20) == "table")) {
                    // line 21
                    echo "                    ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "children", [], "any", false, false, false, 21)) > 0)) {
                        // line 22
                        echo "                        ";
                        $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", 22)->display($context);
                        // line 23
                        echo "                    ";
                    }
                    // line 24
                    echo "                ";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "children", [], "any", false, false, false, 24)) > 0)) {
                    // line 25
                    echo "                    ";
                    $context["associationAdmin"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 25, $this->source); })()), "field_description", [], "any", false, false, false, 25), "associationadmin", [], "any", false, false, false, 25);
                    // line 26
                    echo "                    ";
                    $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_to_many_inline_tabs.html.twig", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", 26)->display($context);
                    // line 27
                    echo "
                ";
                }
                // line 29
                echo "            ";
            } else {
                // line 30
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'widget');
                echo "
            ";
            }
            // line 32
            echo "
        </span>

        ";
            // line 35
            $context["display_create_button"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 35, $this->source); })()), "field_description", [], "any", false, false, false, 35), "associationadmin", [], "any", false, false, false, 35), "hasRoute", [0 => "create"], "method", false, false, false, 35) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 36
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 36, $this->source); })()), "field_description", [], "any", false, false, false, 36), "associationadmin", [], "any", false, false, false, 36), "hasAccess", [0 => "create"], "method", false, false, false, 36)) &&             // line 37
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 37, $this->source); })())) && ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 39
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 39, $this->source); })()), "field_description", [], "any", false, false, false, 39), "option", [0 => "limit"], "method", false, false, false, 39)) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 40
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "children", [], "any", false, false, false, 40)) < twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 40, $this->source); })()), "field_description", [], "any", false, false, false, 40), "option", [0 => "limit"], "method", false, false, false, 40))));
            // line 42
            echo "
        ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 43, $this->source); })()), "edit", [], "any", false, false, false, 43) == "inline")) {
                // line 44
                echo "
            ";
                // line 45
                if ((isset($context["display_create_button"]) || array_key_exists("display_create_button", $context) ? $context["display_create_button"] : (function () { throw new RuntimeError('Variable "display_create_button" does not exist.', 45, $this->source); })())) {
                    // line 46
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 46, $this->source); })()), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 48, $this->source); })()), "field_description", [], "any", false, false, false, 48), "associationadmin", [], "any", false, false, false, 48), "generateUrl", [0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 50
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 50, $this->source); })()), "field_description", [], "any", false, false, false, 50), "getOption", [0 => "link_parameters", 1 => []], "method", false, false, false, 50)], "method", false, false, false, 48), "html", null, true);
                    // line 51
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 52
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 52, $this->source); })()), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        ";
                    // line 55
                    echo "                        title=\"";
                    echo twig_escape_filter($this->env, (((((                    // line 56
array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 56, $this->source); })()), null)) : (null)) === false)) ? (                    // line 57
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 57, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 58
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 58, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 58, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 58, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 58, $this->source); })())))))), "html", null, true);
                    // line 59
                    echo "\"
                    >
                        <i class=\"fas fa-plus-circle\"></i>
                        ";
                    // line 63
                    echo "                        ";
                    echo twig_escape_filter($this->env, (((((                    // line 64
array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 64, $this->source); })()), null)) : (null)) === false)) ? (                    // line 65
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 65, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 66
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 66, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 66, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 66, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 66, $this->source); })())))))), "html", null, true);
                    // line 67
                    echo "
                    </a>
                </span>
            ";
                }
                // line 71
                echo "
            ";
                // line 73
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 73, $this->source); })()), "field_description", [], "any", false, false, false, 73), "option", [0 => "sortable", 1 => false], "method", false, false, false, 73)) {
                    // line 74
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 74, $this->source); })()), "inline", [], "any", false, false, false, 74) == "table")) {
                        // line 75
                        echo "                    ";
                        $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_to_many_sortable_script_table.html.twig", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", 75)->display($context);
                        // line 76
                        echo "                ";
                    } else {
                        // line 77
                        echo "                    ";
                        $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_to_many_sortable_script_tabs.html.twig", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", 77)->display($context);
                        // line 78
                        echo "                ";
                    }
                    // line 79
                    echo "            ";
                }
                // line 80
                echo "
            ";
                // line 82
                echo "            ";
                $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_script.html.twig", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", 82)->display($context);
                // line 83
                echo "
        ";
            } else {
                // line 85
                echo "            <span id=\"field_actions_";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 85, $this->source); })()), "html", null, true);
                echo "\" >
                ";
                // line 86
                if ((isset($context["display_create_button"]) || array_key_exists("display_create_button", $context) ? $context["display_create_button"] : (function () { throw new RuntimeError('Variable "display_create_button" does not exist.', 86, $this->source); })())) {
                    // line 87
                    echo "                    <a
                        href=\"";
                    // line 88
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 88, $this->source); })()), "field_description", [], "any", false, false, false, 88), "associationadmin", [], "any", false, false, false, 88), "generateUrl", [0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 90
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 90, $this->source); })()), "field_description", [], "any", false, false, false, 90), "getOption", [0 => "link_parameters", 1 => []], "method", false, false, false, 90)], "method", false, false, false, 88), "html", null, true);
                    // line 91
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 92
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 92, $this->source); })()), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        ";
                    // line 95
                    echo "                        title=\"";
                    echo twig_escape_filter($this->env, (((((                    // line 96
array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 96, $this->source); })()), null)) : (null)) === false)) ? (                    // line 97
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 97, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 98
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 98, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 98, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 98, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 98, $this->source); })())))))), "html", null, true);
                    // line 99
                    echo "\"
                    >
                        <i class=\"fas fa-plus-circle\"></i>
                        ";
                    // line 103
                    echo "                        ";
                    echo twig_escape_filter($this->env, (((((                    // line 104
array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 104, $this->source); })()), null)) : (null)) === false)) ? (                    // line 105
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 105, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 106
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 106, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 106, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 106, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 106, $this->source); })())))))), "html", null, true);
                    // line 107
                    echo "
                    </a>
                    ";
                    // line 109
                    $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_modal.html.twig", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", 109)->display($context);
                    // line 110
                    echo "                    ";
                    $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", 110)->display($context);
                    // line 111
                    echo "                ";
                }
                // line 112
                echo "            </span>
        ";
            }
            // line 114
            echo "    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 114,  252 => 112,  249 => 111,  246 => 110,  244 => 109,  240 => 107,  238 => 106,  237 => 105,  236 => 104,  234 => 103,  229 => 99,  227 => 98,  226 => 97,  225 => 96,  223 => 95,  218 => 92,  215 => 91,  213 => 90,  212 => 88,  209 => 87,  207 => 86,  202 => 85,  198 => 83,  195 => 82,  192 => 80,  189 => 79,  186 => 78,  183 => 77,  180 => 76,  177 => 75,  174 => 74,  171 => 73,  168 => 71,  162 => 67,  160 => 66,  159 => 65,  158 => 64,  156 => 63,  151 => 59,  149 => 58,  148 => 57,  147 => 56,  145 => 55,  140 => 52,  137 => 51,  135 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  121 => 43,  118 => 42,  116 => 40,  115 => 39,  114 => 37,  113 => 36,  112 => 35,  107 => 32,  101 => 30,  98 => 29,  94 => 27,  91 => 26,  88 => 25,  85 => 24,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  71 => 19,  67 => 18,  63 => 17,  60 => 16,  50 => 13,  45 => 12,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% if not sonata_admin.field_description.hasassociationadmin %}
    {% for element in value %}
        {{ element|render_relation_element(sonata_admin.field_description) }}
    {% endfor %}
{% else %}

    <div id=\"field_container_{{ id }}\" class=\"field-container\">
        <span id=\"field_widget_{{ id }}\" >
            {% if sonata_admin.edit == 'inline' %}
                {% if sonata_admin.inline == 'table' %}
                    {% if form.children|length > 0 %}
                        {% include '@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig' %}
                    {% endif %}
                {% elseif form.children|length > 0 %}
                    {% set associationAdmin = sonata_admin.field_description.associationadmin %}
                    {% include '@SonataAdmin/CRUD/Association/edit_one_to_many_inline_tabs.html.twig' %}

                {% endif %}
            {% else %}
                {{ form_widget(form) }}
            {% endif %}

        </span>

        {% set display_create_button = sonata_admin.field_description.associationadmin.hasRoute('create')
            and sonata_admin.field_description.associationadmin.hasAccess('create')
            and btn_add
            and (
                sonata_admin.field_description.option('limit') is null or
                form.children|length < sonata_admin.field_description.option('limit')
            ) %}

        {% if sonata_admin.edit == 'inline' %}

            {% if display_create_button %}
                <span id=\"field_actions_{{ id }}\" >
                    <a
                        href=\"{{ sonata_admin.field_description.associationadmin.generateUrl(
                            'create',
                            sonata_admin.field_description.getOption('link_parameters', {})
                        ) }}\"
                        onclick=\"return start_field_retrieve_{{ id }}(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                        title=\"{{
                            btn_translation_domain|default(null) is same as(false)
                            ? btn_add
                            : btn_add|trans({}, btn_translation_domain|default(btn_catalogue))
                        }}\"
                    >
                        <i class=\"fas fa-plus-circle\"></i>
                        {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                        {{
                            btn_translation_domain|default(null) is same as(false)
                            ? btn_add
                            : btn_add|trans({}, btn_translation_domain|default(btn_catalogue))
                        }}
                    </a>
                </span>
            {% endif %}

            {# add code for the sortable options #}
            {% if sonata_admin.field_description.option('sortable', false) %}
                {% if sonata_admin.inline == 'table' %}
                    {% include '@SonataAdmin/CRUD/Association/edit_one_to_many_sortable_script_table.html.twig' %}
                {% else %}
                    {% include '@SonataAdmin/CRUD/Association/edit_one_to_many_sortable_script_tabs.html.twig' %}
                {% endif %}
            {% endif %}

            {# include association code #}
            {% include '@SonataAdmin/CRUD/Association/edit_one_script.html.twig' %}

        {% else %}
            <span id=\"field_actions_{{ id }}\" >
                {% if display_create_button %}
                    <a
                        href=\"{{ sonata_admin.field_description.associationadmin.generateUrl(
                            'create',
                            sonata_admin.field_description.getOption('link_parameters', {})
                        ) }}\"
                        onclick=\"return start_field_dialog_form_add_{{ id }}(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                        title=\"{{
                            btn_translation_domain|default(null) is same as(false)
                            ? btn_add
                            : btn_add|trans({}, btn_translation_domain|default(btn_catalogue))
                        }}\"
                    >
                        <i class=\"fas fa-plus-circle\"></i>
                        {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                        {{
                            btn_translation_domain|default(null) is same as(false)
                            ? btn_add
                            : btn_add|trans({}, btn_translation_domain|default(btn_catalogue))
                        }}
                    </a>
                    {% include '@SonataAdmin/CRUD/Association/edit_modal.html.twig' %}
                    {% include '@SonataAdmin/CRUD/Association/edit_many_script.html.twig' %}
                {% endif %}
            </span>
        {% endif %}
    </div>
{% endif %}
", "@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", "/var/www/html/TestSite/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/edit_one_to_many.html.twig");
    }
}
