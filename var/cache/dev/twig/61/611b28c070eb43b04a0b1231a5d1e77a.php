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

/* @SonataAdmin/CRUD/Association/edit_one_to_one.html.twig */
class __TwigTemplate_9233c6ca59494ce7a015c2453661b437 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_one_to_one.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/Association/edit_one_to_one.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 12, $this->source); })()), "field_description", [], "any", false, false, false, 12), "hasassociationadmin", [], "any", false, false, false, 12)) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Sonata\AdminBundle\Twig\RenderElementRuntime')->renderRelationElement((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 13, $this->source); })()), "field_description", [], "any", false, false, false, 13)), "html", null, true);
            echo "
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 14, $this->source); })()), "edit", [], "any", false, false, false, 14) == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 15, $this->source); })()), "field_description", [], "any", false, false, false, 15), "associationadmin", [], "any", false, false, false, 15), "formfielddescriptions", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "children", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, $context["field_description"], "name", [], "any", false, false, false, 16), [], "array", false, false, false, 16), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 20, $this->source); })()), "edit", [], "any", false, false, false, 20) == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 21, $this->source); })()), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 22, $this->source); })()), "value", [], "any", false, false, false, 22) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 22, $this->source); })()), "field_description", [], "any", false, false, false, 22), "associationadmin", [], "any", false, false, false, 22), "urlSafeIdentifier", [0 => twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 22, $this->source); })()), "value", [], "any", false, false, false, 22)], "method", false, false, false, 22)))) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_short_object_information", ((["_sonata_admin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 24
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 24, $this->source); })()), "field_description", [], "any", false, false, false, 24), "associationadmin", [], "any", false, false, false, 24), "baseCodeRoute", [], "any", false, false, false, 24), "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 25
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 25, $this->source); })()), "field_description", [], "any", false, false, false, 25), "associationadmin", [], "any", false, false, false, 25), "urlSafeIdentifier", [0 => twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 25, $this->source); })()), "value", [], "any", false, false, false, 25)], "method", false, false, false, 25), "uniqid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 26
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 26, $this->source); })()), "field_description", [], "any", false, false, false, 26), "associationadmin", [], "any", false, false, false, 26), "uniqid", [], "any", false, false, false, 26), "linkParameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 27
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 27, $this->source); })()), "field_description", [], "any", false, false, false, 27), "option", [0 => "link_parameters", 1 => []], "method", false, false, false, 27)] + ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 29
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 29, $this->source); })()), "field_description", [], "any", false, false, false, 29), "associationadmin", [], "any", false, false, false, 29), "hasRequest", [], "method", false, false, false, 29)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 30
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 30, $this->source); })()), "field_description", [], "any", false, false, false, 30), "associationadmin", [], "any", false, false, false, 30), "request", [], "any", false, false, false, 30), "attributes", [], "any", false, false, false, 30), "get", [0 => "_route_params", 1 => []], "method", false, false, false, 30)) : ([]))) + ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 32
($context["app"] ?? null), "request", [], "any", false, true, false, 32), "query", [], "any", false, true, false, 32), "all", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 32), "query", [], "any", false, true, false, 32), "all", [], "any", false, false, false, 32), [])) : ([])))));
                    // line 33
                    echo "
                ";
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 34
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 34, $this->source); })()), "field_description", [], "any", false, false, false, 34), "option", [0 => "placeholder", 1 => "short_object_description_placeholder"], "method", false, false, false, 34)) {
                    // line 35
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 36
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 36, $this->source); })()), "field_description", [], "any", false, false, false, 36), "option", [0 => "placeholder", 1 => "short_object_description_placeholder"], "method", false, false, false, 36), [], "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 39
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 41
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 44
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 44, $this->source); })()), "html", null, true);
                echo "\" >
                ";
                // line 45
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'widget');
                echo "
            </span>
        ";
            }
            // line 48
            echo "
        <div id=\"field_actions_";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 49, $this->source); })()), "html", null, true);
            echo "\" class=\"field-actions\">
            ";
            // line 50
            $context["display_btn_list"] = ((((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 50, $this->source); })()), "edit", [], "any", false, false, false, 50) == "list") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 51
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 51, $this->source); })()), "field_description", [], "any", false, false, false, 51), "associationadmin", [], "any", false, false, false, 51), "hasRoute", [0 => "list"], "method", false, false, false, 51)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 52
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 52, $this->source); })()), "field_description", [], "any", false, false, false, 52), "associationadmin", [], "any", false, false, false, 52), "hasAccess", [0 => "list"], "method", false, false, false, 52)) &&             // line 53
(isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 53, $this->source); })()));
            // line 54
            echo "            ";
            $context["display_btn_add"] = ((((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 54, $this->source); })()), "edit", [], "any", false, false, false, 54) != "admin") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 55
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 55, $this->source); })()), "field_description", [], "any", false, false, false, 55), "associationadmin", [], "any", false, false, false, 55), "hasRoute", [0 => "create"], "method", false, false, false, 55)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 56
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 56, $this->source); })()), "field_description", [], "any", false, false, false, 56), "associationadmin", [], "any", false, false, false, 56), "hasAccess", [0 => "create"], "method", false, false, false, 56)) &&             // line 57
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 57, $this->source); })()));
            // line 58
            echo "            ";
            if (((isset($context["display_btn_list"]) || array_key_exists("display_btn_list", $context) ? $context["display_btn_list"] : (function () { throw new RuntimeError('Variable "display_btn_list" does not exist.', 58, $this->source); })()) || (isset($context["display_btn_add"]) || array_key_exists("display_btn_add", $context) ? $context["display_btn_add"] : (function () { throw new RuntimeError('Variable "display_btn_add" does not exist.', 58, $this->source); })()))) {
                // line 59
                echo "            <div class=\"btn-group\">
                ";
                // line 60
                if ((isset($context["display_btn_list"]) || array_key_exists("display_btn_list", $context) ? $context["display_btn_list"] : (function () { throw new RuntimeError('Variable "display_btn_list" does not exist.', 60, $this->source); })())) {
                    // line 61
                    echo "                    <a  href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 61, $this->source); })()), "field_description", [], "any", false, false, false, 61), "associationadmin", [], "any", false, false, false, 61), "generateUrl", [0 => "list", 1 => twig_array_merge(["select" => true], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 61, $this->source); })()), "field_description", [], "any", false, false, false, 61), "getOption", [0 => "link_parameters", 1 => []], "method", false, false, false, 61))], "method", false, false, false, 61), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                    // line 62
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 62, $this->source); })()), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        ";
                    // line 65
                    echo "                        title=\"";
                    echo twig_escape_filter($this->env, (((((                    // line 66
array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 66, $this->source); })()), null)) : (null)) === false)) ? (                    // line 67
(isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 67, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 68
(isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 68, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 68, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 68, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 68, $this->source); })())))))), "html", null, true);
                    // line 69
                    echo "\"
                        >
                        <i class=\"fas fa-list\"></i>
                        ";
                    // line 73
                    echo "                        ";
                    echo twig_escape_filter($this->env, (((((                    // line 74
array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 74, $this->source); })()), null)) : (null)) === false)) ? (                    // line 75
(isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 75, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 76
(isset($context["btn_list"]) || array_key_exists("btn_list", $context) ? $context["btn_list"] : (function () { throw new RuntimeError('Variable "btn_list" does not exist.', 76, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 76, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 76, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 76, $this->source); })())))))), "html", null, true);
                    // line 77
                    echo "
                    </a>
                ";
                }
                // line 80
                echo "
                ";
                // line 81
                if ((isset($context["display_btn_add"]) || array_key_exists("display_btn_add", $context) ? $context["display_btn_add"] : (function () { throw new RuntimeError('Variable "display_btn_add" does not exist.', 81, $this->source); })())) {
                    // line 82
                    echo "                    <a  href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 82, $this->source); })()), "field_description", [], "any", false, false, false, 82), "associationadmin", [], "any", false, false, false, 82), "generateUrl", [0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 82, $this->source); })()), "field_description", [], "any", false, false, false, 82), "getOption", [0 => "link_parameters", 1 => []], "method", false, false, false, 82)], "method", false, false, false, 82), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 83
                    echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 83, $this->source); })()), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        ";
                    // line 86
                    echo "                        title=\"";
                    echo twig_escape_filter($this->env, (((((                    // line 87
array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 87, $this->source); })()), null)) : (null)) === false)) ? (                    // line 88
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 88, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 89
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 89, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 89, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 89, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 89, $this->source); })())))))), "html", null, true);
                    // line 90
                    echo "\"
                        >
                        <i class=\"fas fa-plus-circle\"></i>
                        ";
                    // line 94
                    echo "                        ";
                    echo twig_escape_filter($this->env, (((((                    // line 95
array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 95, $this->source); })()), null)) : (null)) === false)) ? (                    // line 96
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 96, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 97
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 97, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 97, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 97, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 97, $this->source); })())))))), "html", null, true);
                    // line 98
                    echo "
                    </a>
                ";
                }
                // line 101
                echo "            </div>
            ";
            }
            // line 103
            echo "
            ";
            // line 104
            $context["display_btn_delete"] = ((((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 104, $this->source); })()), "edit", [], "any", false, false, false, 104) == "list") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 105
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 105, $this->source); })()), "field_description", [], "any", false, false, false, 105), "associationadmin", [], "any", false, false, false, 105), "hasRoute", [0 => "delete"], "method", false, false, false, 105)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 106
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 106, $this->source); })()), "field_description", [], "any", false, false, false, 106), "associationadmin", [], "any", false, false, false, 106), "hasAccess", [0 => "delete"], "method", false, false, false, 106)) &&             // line 107
(isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 107, $this->source); })()));
            // line 108
            echo "            ";
            if ((isset($context["display_btn_delete"]) || array_key_exists("display_btn_delete", $context) ? $context["display_btn_delete"] : (function () { throw new RuntimeError('Variable "display_btn_delete" does not exist.', 108, $this->source); })())) {
                // line 109
                echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
                // line 110
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 110, $this->source); })()), "html", null, true);
                echo "(this);\"
                    class=\"btn btn-danger btn-sm sonata-ba-action\"
                    ";
                // line 113
                echo "                    title=\"";
                echo twig_escape_filter($this->env, (((((                // line 114
array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 114, $this->source); })()), null)) : (null)) === false)) ? (                // line 115
(isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 115, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                // line 116
(isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 116, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 116, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 116, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 116, $this->source); })())))))), "html", null, true);
                // line 117
                echo "\"
                    >
                    <i class=\"fas fa-minus-circle\"></i>
                    ";
                // line 121
                echo "                    ";
                echo twig_escape_filter($this->env, (((((                // line 122
array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 122, $this->source); })()), null)) : (null)) === false)) ? (                // line 123
(isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 123, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                // line 124
(isset($context["btn_delete"]) || array_key_exists("btn_delete", $context) ? $context["btn_delete"] : (function () { throw new RuntimeError('Variable "btn_delete" does not exist.', 124, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 124, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 124, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 124, $this->source); })())))))), "html", null, true);
                // line 125
                echo "
                </a>
            ";
            }
            // line 128
            echo "
            ";
            // line 129
            if ((((isset($context["display_btn_list"]) || array_key_exists("display_btn_list", $context) ? $context["display_btn_list"] : (function () { throw new RuntimeError('Variable "display_btn_list" does not exist.', 129, $this->source); })()) || (isset($context["display_btn_add"]) || array_key_exists("display_btn_add", $context) ? $context["display_btn_add"] : (function () { throw new RuntimeError('Variable "display_btn_add" does not exist.', 129, $this->source); })())) || (isset($context["display_btn_delete"]) || array_key_exists("display_btn_delete", $context) ? $context["display_btn_delete"] : (function () { throw new RuntimeError('Variable "display_btn_delete" does not exist.', 129, $this->source); })()))) {
                // line 130
                echo "                ";
                $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_modal.html.twig", "@SonataAdmin/CRUD/Association/edit_one_to_one.html.twig", 130)->display($context);
                // line 131
                echo "                ";
                $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "@SonataAdmin/CRUD/Association/edit_one_to_one.html.twig", 131)->display($context);
                // line 132
                echo "            ";
            }
            // line 133
            echo "        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/Association/edit_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 133,  280 => 132,  277 => 131,  274 => 130,  272 => 129,  269 => 128,  264 => 125,  262 => 124,  261 => 123,  260 => 122,  258 => 121,  253 => 117,  251 => 116,  250 => 115,  249 => 114,  247 => 113,  242 => 110,  239 => 109,  236 => 108,  234 => 107,  233 => 106,  232 => 105,  231 => 104,  228 => 103,  224 => 101,  219 => 98,  217 => 97,  216 => 96,  215 => 95,  213 => 94,  208 => 90,  206 => 89,  205 => 88,  204 => 87,  202 => 86,  197 => 83,  192 => 82,  190 => 81,  187 => 80,  182 => 77,  180 => 76,  179 => 75,  178 => 74,  176 => 73,  171 => 69,  169 => 68,  168 => 67,  167 => 66,  165 => 65,  160 => 62,  155 => 61,  153 => 60,  150 => 59,  147 => 58,  145 => 57,  144 => 56,  143 => 55,  141 => 54,  139 => 53,  138 => 52,  137 => 51,  136 => 50,  132 => 49,  129 => 48,  123 => 45,  118 => 44,  112 => 41,  108 => 39,  102 => 36,  99 => 35,  97 => 34,  94 => 33,  92 => 32,  91 => 30,  90 => 29,  89 => 27,  88 => 26,  87 => 25,  86 => 24,  84 => 23,  82 => 22,  77 => 21,  75 => 20,  70 => 19,  60 => 16,  55 => 15,  53 => 14,  48 => 13,  46 => 12,  43 => 11,);
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
    {{ value|render_relation_element(sonata_admin.field_description) }}
{% elseif sonata_admin.edit == 'inline' %}
    {% for field_description in sonata_admin.field_description.associationadmin.formfielddescriptions %}
        {{ form_row(form.children[field_description.name]) }}
    {% endfor %}
{% else %}
    <div id=\"field_container_{{ id }}\" class=\"field-container\">
        {% if sonata_admin.edit == 'list' %}
            <span id=\"field_widget_{{ id }}\" class=\"field-short-description\">
                {% if sonata_admin.value and sonata_admin.field_description.associationadmin.urlSafeIdentifier(sonata_admin.value) is not null %}
                    {{ render(path('sonata_admin_short_object_information', {
                        '_sonata_admin': sonata_admin.field_description.associationadmin.baseCodeRoute,
                        'objectId': sonata_admin.field_description.associationadmin.urlSafeIdentifier(sonata_admin.value),
                        'uniqid': sonata_admin.field_description.associationadmin.uniqid,
                        'linkParameters': sonata_admin.field_description.option('link_parameters', {})
                    } + (
                        sonata_admin.field_description.associationadmin.hasRequest()
                        ? sonata_admin.field_description.associationadmin.request.attributes.get('_route_params', {})
                        : {}
                    ) + app.request.query.all|default({})
                    )) }}
                {% elseif sonata_admin.field_description.option('placeholder', 'short_object_description_placeholder') %}
                    <span class=\"inner-field-short-description\">
                        {{ sonata_admin.field_description.option('placeholder', 'short_object_description_placeholder')|trans({}, 'SonataAdminBundle') }}
                    </span>
                {% endif %}
            </span>
            <span style=\"display: none\" >
                {{ form_widget(form) }}
            </span>
        {% else %}
            <span id=\"field_widget_{{ id }}\" >
                {{ form_widget(form) }}
            </span>
        {% endif %}

        <div id=\"field_actions_{{ id }}\" class=\"field-actions\">
            {% set display_btn_list = sonata_admin.edit == 'list'
                and sonata_admin.field_description.associationadmin.hasRoute('list')
                and sonata_admin.field_description.associationadmin.hasAccess('list')
                and btn_list %}
            {% set display_btn_add = sonata_admin.edit != 'admin'
                and sonata_admin.field_description.associationadmin.hasRoute('create')
                and sonata_admin.field_description.associationadmin.hasAccess('create')
                and btn_add %}
            {% if display_btn_list or display_btn_add %}
            <div class=\"btn-group\">
                {% if display_btn_list %}
                    <a  href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('list', {select: true}|merge(sonata_admin.field_description.getOption('link_parameters', {}))) }}\"
                        onclick=\"return start_field_dialog_form_list_{{ id }}(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                        title=\"{{
                            btn_translation_domain|default(null) is same as(false)
                            ? btn_list
                            : btn_list|trans({}, btn_translation_domain|default(btn_catalogue))
                        }}\"
                        >
                        <i class=\"fas fa-list\"></i>
                        {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                        {{
                            btn_translation_domain|default(null) is same as(false)
                            ? btn_list
                            : btn_list|trans({}, btn_translation_domain|default(btn_catalogue))
                        }}
                    </a>
                {% endif %}

                {% if display_btn_add %}
                    <a  href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create', sonata_admin.field_description.getOption('link_parameters', {})) }}\"
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
                {% endif %}
            </div>
            {% endif %}

            {% set display_btn_delete = sonata_admin.edit == 'list'
                and sonata_admin.field_description.associationadmin.hasRoute('delete')
                and sonata_admin.field_description.associationadmin.hasAccess('delete')
                and btn_delete %}
            {% if display_btn_delete %}
                <a  href=\"\"
                    onclick=\"return remove_selected_element_{{ id }}(this);\"
                    class=\"btn btn-danger btn-sm sonata-ba-action\"
                    {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                    title=\"{{
                        btn_translation_domain|default(null) is same as(false)
                        ? btn_delete
                        : btn_delete|trans({}, btn_translation_domain|default(btn_catalogue))
                    }}\"
                    >
                    <i class=\"fas fa-minus-circle\"></i>
                    {# NEXT_MAJOR: Remove the fallback on null and on btn_catalogue #}
                    {{
                        btn_translation_domain|default(null) is same as(false)
                        ? btn_delete
                        : btn_delete|trans({}, btn_translation_domain|default(btn_catalogue))
                    }}
                </a>
            {% endif %}

            {% if display_btn_list or display_btn_add or display_btn_delete %}
                {% include '@SonataAdmin/CRUD/Association/edit_modal.html.twig' %}
                {% include '@SonataAdmin/CRUD/Association/edit_many_script.html.twig' %}
            {% endif %}
        </div>
    </div>
{% endif %}
", "@SonataAdmin/CRUD/Association/edit_one_to_one.html.twig", "/var/www/html/TestSite/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/edit_one_to_one.html.twig");
    }
}
