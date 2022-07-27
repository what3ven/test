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

/* @SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig */
class __TwigTemplate_4f5b10ebaf30e507775defec59adf59f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'sonata_type_model_autocomplete_ajax_request_parameters' => [$this, 'block_sonata_type_model_autocomplete_ajax_request_parameters'],
            'sonata_type_model_autocomplete_dropdown_item_format' => [$this, 'block_sonata_type_model_autocomplete_dropdown_item_format'],
            'sonata_type_model_autocomplete_selection_format' => [$this, 'block_sonata_type_model_autocomplete_selection_format'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig"));

        // line 11
        ob_start();
        // line 12
        echo "    <select id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "_autocomplete_input\" data-sonata-select2=\"false\"";
        // line 13
        if (((array_key_exists("read_only", $context)) ? (_twig_default_filter((isset($context["read_only"]) || array_key_exists("read_only", $context) ? $context["read_only"] : (function () { throw new RuntimeError('Variable "read_only" does not exist.', 13, $this->source); })()), false)) : (false))) {
            echo " readonly=\"readonly\"";
        }
        // line 14
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 14, $this->source); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 15
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 15, $this->source); })())) {
            echo " multiple=\"multiple\"";
        }
        // line 16
        echo "    >";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 17, $this->source); })()), function ($__val__, $__idx__) use ($context, $macros) { $context["val"] = $__val__; $context["idx"] = $__idx__; return (($context["idx"] . "") != "_labels"); }));
        foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
            // line 18
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 18, $this->source); })()), "_labels", [], "array", false, false, false, 18), $context["idx"], [], "array", false, false, false, 18), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</select>

    <div id=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "_hidden_inputs_wrap\">
        ";
        // line 23
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 23, $this->source); })())) {
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 24, $this->source); })()), function ($__val__, $__idx__) use ($context, $macros) { $context["val"] = $__val__; $context["idx"] = $__idx__; return (($context["idx"] . "") != "_labels"); }));
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                // line 25
                echo "<input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 25, $this->source); })()), "html", null, true);
                echo "[]\"";
                if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 25, $this->source); })())) {
                    echo " disabled=\"disabled\"";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "\">";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 28
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "\"";
            if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 28, $this->source); })())) {
                echo " disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), 0, [], "array", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), 0, [], "array", false, false, false, 28), "")) : ("")), "html", null, true);
            echo "\">
        ";
        }
        // line 30
        echo "</div>

    ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 32, $this->source); })()), "field_description", [], "any", false, false, false, 32) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 32, $this->source); })()), "field_description", [], "any", false, false, false, 32), "hasAssociationAdmin", [], "any", false, false, false, 32))) {
            // line 33
            echo "        <div id=\"field_actions_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "\" class=\"field-actions\">
            ";
            // line 34
            $context["display_btn_add"] = ((((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 34, $this->source); })()), "edit", [], "any", false, false, false, 34) != "admin") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 34, $this->source); })()), "field_description", [], "any", false, false, false, 34), "associationadmin", [], "any", false, false, false, 34), "hasRoute", [0 => "create"], "method", false, false, false, 34)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 35
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 35, $this->source); })()), "field_description", [], "any", false, false, false, 35), "associationadmin", [], "any", false, false, false, 35), "isGranted", [0 => "CREATE"], "method", false, false, false, 35)) && (isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 35, $this->source); })()));
            // line 36
            echo "            ";
            if ((isset($context["display_btn_add"]) || array_key_exists("display_btn_add", $context) ? $context["display_btn_add"] : (function () { throw new RuntimeError('Variable "display_btn_add" does not exist.', 36, $this->source); })())) {
                // line 37
                echo "                <a  href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 37, $this->source); })()), "field_description", [], "any", false, false, false, 37), "associationadmin", [], "any", false, false, false, 37), "generateUrl", [0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 38
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 38, $this->source); })()), "field_description", [], "any", false, false, false, 38), "getOption", [0 => "link_parameters", 1 => []], "method", false, false, false, 38)], "method", false, false, false, 37), "html", null, true);
                // line 39
                echo "\"
                    onclick=\"return start_field_dialog_form_add_";
                // line 40
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 40, $this->source); })()), "html", null, true);
                echo "(this);\"
                    class=\"btn btn-success btn-sm sonata-ba-action\"
                    ";
                // line 43
                echo "                    title=\"";
                echo twig_escape_filter($this->env, (((((                // line 44
array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 44, $this->source); })()), null)) : (null)) === false)) ? (                // line 45
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 45, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                // line 46
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 46, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 46, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 46, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 46, $this->source); })())))))), "html", null, true);
                // line 47
                echo "\"
                    >
                    <i class=\"fas fa-plus-circle\"></i>
                    ";
                // line 51
                echo "                    ";
                echo twig_escape_filter($this->env, (((((                // line 52
array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 52, $this->source); })()), null)) : (null)) === false)) ? (                // line 53
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 53, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                // line 54
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 54, $this->source); })()), [], ((array_key_exists("btn_translation_domain", $context)) ? (_twig_default_filter((isset($context["btn_translation_domain"]) || array_key_exists("btn_translation_domain", $context) ? $context["btn_translation_domain"] : (function () { throw new RuntimeError('Variable "btn_translation_domain" does not exist.', 54, $this->source); })()), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 54, $this->source); })()))) : ((isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new RuntimeError('Variable "btn_catalogue" does not exist.', 54, $this->source); })())))))), "html", null, true);
                // line 55
                echo "
                </a>
                ";
                // line 57
                $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_modal.html.twig", "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig", 57)->display($context);
                // line 58
                echo "                ";
                $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig", 58)->display($context);
                // line 59
                echo "            ";
            }
            // line 60
            echo "        </div>
    ";
        }
        // line 62
        echo "
    <script>
        ";
        // line 65
        echo "        jQuery(function (\$) {
            var autocompleteInput = \$('#";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 66, $this->source); })()), "js", null, true);
        echo "_autocomplete_input');

            var select2Options = {";
        // line 69
        $context["allowClearPlaceholder"] = ((( !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 69, $this->source); })()) &&  !(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 69, $this->source); })()))) ? (" ") : (""));
        // line 70
        echo "placeholder: '";
        echo twig_escape_filter($this->env, (((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 70, $this->source); })())) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 70, $this->source); })())) : ((isset($context["allowClearPlaceholder"]) || array_key_exists("allowClearPlaceholder", $context) ? $context["allowClearPlaceholder"] : (function () { throw new RuntimeError('Variable "allowClearPlaceholder" does not exist.', 70, $this->source); })()))), "js", null, true);
        echo "', // allowClear needs placeholder to work properly
                allowClear: ";
        // line 71
        echo (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 71, $this->source); })())) ? ("false") : ("true"));
        echo ",
                enable: ";
        // line 72
        echo (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 72, $this->source); })())) ? ("false") : ("true"));
        echo ",
                readonly: ";
        // line 73
        echo ((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "read_only", [], "any", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "read_only", [], "any", false, false, false, 73), false)) : (false))) ? ("true") : ("false"));
        echo ",
                minimumInputLength: ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["minimum_input_length"]) || array_key_exists("minimum_input_length", $context) ? $context["minimum_input_length"] : (function () { throw new RuntimeError('Variable "minimum_input_length" does not exist.', 74, $this->source); })()), "js", null, true);
        echo ",
                theme: 'bootstrap',
                width: function() {
                    return Admin.get_select2_width(jQuery(this));
                },
                language: \"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getRuntime('Sonata\AdminBundle\Twig\CanonicalizeRuntime')->getCanonicalizedLocaleForSelect2(), "js", null, true);
        echo "\",
                dropdownAutoWidth: ";
        // line 80
        echo (((isset($context["dropdown_auto_width"]) || array_key_exists("dropdown_auto_width", $context) ? $context["dropdown_auto_width"] : (function () { throw new RuntimeError('Variable "dropdown_auto_width" does not exist.', 80, $this->source); })())) ? ("true") : ("false"));
        echo ",
                containerCssClass: '";
        // line 81
        echo twig_escape_filter($this->env, ((isset($context["container_css_class"]) || array_key_exists("container_css_class", $context) ? $context["container_css_class"] : (function () { throw new RuntimeError('Variable "container_css_class" does not exist.', 81, $this->source); })()) . " form-control"), "js", null, true);
        echo "',
                dropdownCssClass: '";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["dropdown_css_class"]) || array_key_exists("dropdown_css_class", $context) ? $context["dropdown_css_class"] : (function () { throw new RuntimeError('Variable "dropdown_css_class" does not exist.', 82, $this->source); })()), "js", null, true);
        echo "',
                dropdownParent: autocompleteInput.parents('.modal').length > 0 ? autocompleteInput.parents('.modal') : \$(document.body),
                ajax: {
                    url:  '";
        // line 85
        echo twig_escape_filter($this->env, (((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 85, $this->source); })())) ? ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 85, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 85, $this->source); })()), "name", [], "any", false, false, false, 85), ((twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "parameters", [], "any", true, true, false, 85)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "parameters", [], "any", false, false, false, 85), [])) : ([]))))), "js", null, true);
        echo "',
                    dataType: 'json',
                    delay: ";
        // line 87
        echo twig_escape_filter($this->env, (((((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 87, $this->source); })()) == 100) && ((isset($context["quiet_millis"]) || array_key_exists("quiet_millis", $context) ? $context["quiet_millis"] : (function () { throw new RuntimeError('Variable "quiet_millis" does not exist.', 87, $this->source); })()) != 100))) ? ((isset($context["quiet_millis"]) || array_key_exists("quiet_millis", $context) ? $context["quiet_millis"] : (function () { throw new RuntimeError('Variable "quiet_millis" does not exist.', 87, $this->source); })())) : ((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 87, $this->source); })()))), "js", null, true);
        echo ", // NEXT_MAJOR: Replace by `";
        echo twig_escape_filter($this->env, (isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 87, $this->source); })()), "js", null, true);
        echo "` instead.
                    cache: ";
        // line 88
        echo (((isset($context["cache"]) || array_key_exists("cache", $context) ? $context["cache"] : (function () { throw new RuntimeError('Variable "cache" does not exist.', 88, $this->source); })())) ? ("true") : ("false"));
        echo ",
                    processResults: function (data, params) {
                        return {
                            results: data.items,
                            pagination: {
                                more: data.more
                            }
                        };
                    },
                    data: function (params) {
                        ";
        // line 98
        $this->displayBlock('sonata_type_model_autocomplete_ajax_request_parameters', $context, $blocks);
        // line 133
        echo "                    },
                },
                escapeMarkup: function (m) { return m; }, // we do not want to escape markup since we are displaying html in results
                templateResult: function (item) {
                    // When selecting a new result, the label is undefined and the correct property is text
                    if (typeof item.label === 'undefined') {
                        item.label = item.text;
                    }

                    return ";
        // line 142
        $this->displayBlock('sonata_type_model_autocomplete_dropdown_item_format', $context, $blocks);
        // line 148
        echo "; // format of one dropdown item
                },
                templateSelection: function (item) {
                    // The searching... placeholder appears as text
                    if (typeof item.label === 'undefined') {
                        item.label = item.text;
                    }

                    return ";
        // line 156
        $this->displayBlock('sonata_type_model_autocomplete_selection_format', $context, $blocks);
        // line 162
        echo "; // format selected item '<b>'+item.label+'</b>';
                },
            };

            autocompleteInput.select2(select2Options);

            autocompleteInput.on('select2:select select2:unselect', function(e) {
                if (e.type === 'select2:select') {
                    e.added = e.params.data;
                }
                if (e.type === 'select2:unselect') {
                    e.removed = e.params.data;
                }

                // console.log('change '+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    ";
        // line 182
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 182, $this->source); })())) {
            // line 183
            echo "                        if(!\$.isArray(removedItems)) {
                            removedItems = [removedItems];
                        }

                        var length = removedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = removedItems[i];
                            \$('#";
            // line 190
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 190, $this->source); })()), "js", null, true);
            echo "_hidden_inputs_wrap input:hidden[value=\"'+el.id+'\"]').remove();
                        }";
        } else {
            // line 193
            echo "\$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 193, $this->source); })()), "js", null, true);
            echo "_hidden_inputs_wrap input:hidden').val('');";
        }
        // line 195
        echo "                }

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    ";
        // line 203
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 203, $this->source); })())) {
            // line 204
            echo "                        if(!\$.isArray(addedItems)) {
                            addedItems = [addedItems];
                        }

                        var length = addedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = addedItems[i];
                            \$('#";
            // line 211
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 211, $this->source); })()), "js", null, true);
            echo "_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 211, $this->source); })()), "js", null, true);
            echo "[]\" value=\"'+el.id+'\" />');
                        }";
        } else {
            // line 214
            echo "\$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 214, $this->source); })()), "js", null, true);
            echo "_hidden_inputs_wrap input:hidden').val(addedItems.id);";
        }
        // line 216
        echo "                }
            });

            // remove unneeded autocomplete text input before form submit
            autocompleteInput.closest('form').submit(function()
            {
                autocompleteInput.remove();
                return true;
            });

            // Automatically select the created record after closing the popup window
            ";
        // line 227
        if (((((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 227, $this->source); })()), "field_description", [], "any", false, false, false, 227) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 228
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 228, $this->source); })()), "field_description", [], "any", false, false, false, 228), "hasAssociationAdmin", [], "any", false, false, false, 228)) &&         // line 229
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new RuntimeError('Variable "btn_add" does not exist.', 229, $this->source); })())) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 230
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 230, $this->source); })()), "field_description", [], "any", false, false, false, 230), "associationadmin", [], "any", false, false, false, 230), "hasRoute", [0 => "create"], "method", false, false, false, 230)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 231
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 231, $this->source); })()), "field_description", [], "any", false, false, false, 231), "associationadmin", [], "any", false, false, false, 231), "hasAccess", [0 => "create"], "method", false, false, false, 231))) {
            // line 232
            echo "
                ";
            // line 233
            $context["create_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 233, $this->source); })()), "field_description", [], "any", false, false, false, 233), "associationadmin", [], "any", false, false, false, 233), "generateUrl", [0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 233, $this->source); })()), "field_description", [], "any", false, false, false, 233), "getOption", [0 => "link_parameters", 1 => []], "method", false, false, false, 233)], "method", false, false, false, 233);
            // line 234
            echo "
                \$(document).ajaxSuccess(function(event, xhr, settings) {
                  if(typeof xhr.responseJSON != 'undefined') {
                      if ('";
            // line 237
            echo twig_escape_filter($this->env, (isset($context["create_url"]) || array_key_exists("create_url", $context) ? $context["create_url"] : (function () { throw new RuntimeError('Variable "create_url" does not exist.', 237, $this->source); })()), "js", null, true);
            echo "'.indexOf(settings.url) !== -1 && typeof xhr.responseJSON != 'string' && xhr.responseJSON.result == 'ok') {
                        var item = new Option(
                          new DOMParser().parseFromString(xhr.responseJSON.objectName, \"text/html\").documentElement.textContent,
                          xhr.responseJSON.objectId,
                          true, true
                          );

                        // append to Select2
                        autocompleteInput.append(item).trigger('change');

                        // manually trigger the `select2:select` event
                        autocompleteInput.trigger({
                            type: 'select2:select',
                            params: {
                                data: autocompleteInput.select2('data')
                            }
                        });

                        ";
            // line 255
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 255, $this->source); })())) {
                // line 256
                echo "                          \$('#";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 256, $this->source); })()), "js", null, true);
                echo "_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 256, $this->source); })()), "js", null, true);
                echo "[]\" value=\"'+xhr.responseJSON.objectId+'\" />');
                        ";
            } else {
                // line 258
                echo "                          \$('#";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 258, $this->source); })()), "js", null, true);
                echo "_hidden_inputs_wrap').html('<input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 258, $this->source); })()), "js", null, true);
                echo "\" value=\"'+xhr.responseJSON.objectId+'\" />');
                        ";
            }
            // line 260
            echo "                      }
                  }
                });
            ";
        }
        // line 264
        echo "        });
        ";
        // line 266
        echo "    </script>
";
        $___internal_parse_42_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo twig_spaceless($___internal_parse_42_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 98
    public function block_sonata_type_model_autocomplete_ajax_request_parameters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_ajax_request_parameters"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_ajax_request_parameters"));

        // line 99
        echo "                        return {
                                //search term
                                '";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["req_param_name_search"]) || array_key_exists("req_param_name_search", $context) ? $context["req_param_name_search"] : (function () { throw new RuntimeError('Variable "req_param_name_search" does not exist.', 101, $this->source); })()), "js", null, true);
        echo "': params.term,

                                // page size
                                '";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["req_param_name_items_per_page"]) || array_key_exists("req_param_name_items_per_page", $context) ? $context["req_param_name_items_per_page"] : (function () { throw new RuntimeError('Variable "req_param_name_items_per_page" does not exist.', 104, $this->source); })()), "js", null, true);
        echo "': ";
        echo twig_escape_filter($this->env, (isset($context["items_per_page"]) || array_key_exists("items_per_page", $context) ? $context["items_per_page"] : (function () { throw new RuntimeError('Variable "items_per_page" does not exist.', 104, $this->source); })()), "js", null, true);
        echo ",

                                // page number
                                '";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["req_param_name_page_number"]) || array_key_exists("req_param_name_page_number", $context) ? $context["req_param_name_page_number"] : (function () { throw new RuntimeError('Variable "req_param_name_page_number" does not exist.', 107, $this->source); })()), "js", null, true);
        echo "': (params.page !== 'undefined' ? params.page : 1),

                                // admin
                                ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 110, $this->source); })()), "admin", [], "any", false, false, false, 110)) {
            // line 111
            echo "                                    'uniqid': '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 111, $this->source); })()), "admin", [], "any", false, false, false, 111), "uniqid", [], "any", false, false, false, 111), "js", null, true);
            echo "',
                                    '_sonata_admin': '";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 112, $this->source); })()), "admin", [], "any", false, false, false, 112), "baseCodeRoute", [], "any", false, false, false, 112), "js");
            echo "',
                                ";
        } elseif (        // line 113
(isset($context["admin_code"]) || array_key_exists("admin_code", $context) ? $context["admin_code"] : (function () { throw new RuntimeError('Variable "admin_code" does not exist.', 113, $this->source); })())) {
            // line 114
            echo "                                    '_sonata_admin': '";
            echo twig_escape_filter($this->env, (isset($context["admin_code"]) || array_key_exists("admin_code", $context) ? $context["admin_code"] : (function () { throw new RuntimeError('Variable "admin_code" does not exist.', 114, $this->source); })()), "js");
            echo "',
                                ";
        }
        // line 116
        echo "
                                ";
        // line 117
        if (((isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 117, $this->source); })()) == "filter")) {
            // line 118
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 118, $this->source); })()), ["filter[" => "", "][value]" => "", "__" => "."]), "js", null, true);
            echo "',
                                    '_context': 'filter'
                                ";
        } else {
            // line 121
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 121, $this->source); })()), "js", null, true);
            echo "'
                                ";
        }
        // line 123
        echo "
                                // other parameters
                                ";
        // line 125
        if ( !twig_test_empty((isset($context["req_params"]) || array_key_exists("req_params", $context) ? $context["req_params"] : (function () { throw new RuntimeError('Variable "req_params" does not exist.', 125, $this->source); })()))) {
            echo ",";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["req_params"]) || array_key_exists("req_params", $context) ? $context["req_params"] : (function () { throw new RuntimeError('Variable "req_params" does not exist.', 126, $this->source); })()));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 127
                echo "'";
                echo twig_escape_filter($this->env, $context["key"], "js", null, true);
                echo "': '";
                echo twig_escape_filter($this->env, $context["value"], "js", null, true);
                echo "'";
                // line 128
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 128)) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 131
        echo "                        };
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 142
    public function block_sonata_type_model_autocomplete_dropdown_item_format($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_dropdown_item_format"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_dropdown_item_format"));

        // line 143
        if (((array_key_exists("safe_label", $context)) ? (_twig_default_filter((isset($context["safe_label"]) || array_key_exists("safe_label", $context) ? $context["safe_label"] : (function () { throw new RuntimeError('Variable "safe_label" does not exist.', 143, $this->source); })()), false)) : (false))) {
            // line 144
            echo "                            '<div class=\"";
            echo twig_escape_filter($this->env, (isset($context["dropdown_item_css_class"]) || array_key_exists("dropdown_item_css_class", $context) ? $context["dropdown_item_css_class"] : (function () { throw new RuntimeError('Variable "dropdown_item_css_class" does not exist.', 144, $this->source); })()), "js", null, true);
            echo "\">'+item.label+'<\\/div>'
                        ";
        } else {
            // line 146
            echo "                            jQuery('<div class=\"";
            echo twig_escape_filter($this->env, (isset($context["dropdown_item_css_class"]) || array_key_exists("dropdown_item_css_class", $context) ? $context["dropdown_item_css_class"] : (function () { throw new RuntimeError('Variable "dropdown_item_css_class" does not exist.', 146, $this->source); })()), "js", null, true);
            echo "\">').text(item.label).prop('outerHTML')
                        ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 156
    public function block_sonata_type_model_autocomplete_selection_format($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_selection_format"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_selection_format"));

        // line 157
        if (((array_key_exists("safe_label", $context)) ? (_twig_default_filter((isset($context["safe_label"]) || array_key_exists("safe_label", $context) ? $context["safe_label"] : (function () { throw new RuntimeError('Variable "safe_label" does not exist.', 157, $this->source); })()), false)) : (false))) {
            // line 158
            echo "                            item.label
                        ";
        } else {
            // line 160
            echo "                            jQuery('<div>').text(item.label).prop('innerHTML')
                        ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  635 => 160,  631 => 158,  629 => 157,  619 => 156,  605 => 146,  599 => 144,  597 => 143,  587 => 142,  576 => 131,  559 => 128,  553 => 127,  536 => 126,  533 => 125,  529 => 123,  523 => 121,  516 => 118,  514 => 117,  511 => 116,  505 => 114,  503 => 113,  499 => 112,  494 => 111,  492 => 110,  486 => 107,  478 => 104,  472 => 101,  468 => 99,  458 => 98,  448 => 11,  444 => 266,  441 => 264,  435 => 260,  427 => 258,  419 => 256,  417 => 255,  396 => 237,  391 => 234,  389 => 233,  386 => 232,  384 => 231,  383 => 230,  382 => 229,  381 => 228,  380 => 227,  367 => 216,  362 => 214,  355 => 211,  346 => 204,  344 => 203,  334 => 195,  329 => 193,  324 => 190,  315 => 183,  313 => 182,  291 => 162,  289 => 156,  279 => 148,  277 => 142,  266 => 133,  264 => 98,  251 => 88,  245 => 87,  240 => 85,  234 => 82,  230 => 81,  226 => 80,  222 => 79,  214 => 74,  210 => 73,  206 => 72,  202 => 71,  197 => 70,  195 => 69,  190 => 66,  187 => 65,  183 => 62,  179 => 60,  176 => 59,  173 => 58,  171 => 57,  167 => 55,  165 => 54,  164 => 53,  163 => 52,  161 => 51,  156 => 47,  154 => 46,  153 => 45,  152 => 44,  150 => 43,  145 => 40,  142 => 39,  140 => 38,  138 => 37,  135 => 36,  133 => 35,  132 => 34,  127 => 33,  125 => 32,  121 => 30,  109 => 28,  94 => 25,  90 => 24,  88 => 23,  84 => 22,  80 => 20,  70 => 18,  66 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  46 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% apply spaceless %}
    <select id=\"{{ id }}_autocomplete_input\" data-sonata-select2=\"false\"
        {%- if read_only|default(false) %} readonly=\"readonly\"{% endif -%}
        {%- if disabled %} disabled=\"disabled\"{% endif %}
        {%- if multiple %} multiple=\"multiple\"{% endif %}
    >
        {%- for idx, val  in value|filter((val, idx) => idx~'' != '_labels') -%}
            <option value=\"{{ val }}\" selected>{{ value['_labels'][idx] }}</option>
        {%- endfor -%}
    </select>

    <div id=\"{{ id }}_hidden_inputs_wrap\">
        {% if multiple -%}
            {%- for idx, val  in value|filter((val, idx) => idx~'' != '_labels') -%}
                <input type=\"hidden\" name=\"{{ full_name }}[]\" {%- if disabled %} disabled=\"disabled\"{% endif %} value=\"{{ val }}\">
            {%- endfor -%}
        {% else -%}
            <input type=\"hidden\" name=\"{{ full_name }}\" {%- if disabled %} disabled=\"disabled\"{% endif %} value=\"{{ value[0]|default('') }}\">
        {% endif -%}
    </div>

    {% if sonata_admin.field_description and sonata_admin.field_description.hasAssociationAdmin %}
        <div id=\"field_actions_{{ id }}\" class=\"field-actions\">
            {% set display_btn_add = sonata_admin.edit != 'admin' and sonata_admin.field_description.associationadmin.hasRoute('create')
                                     and sonata_admin.field_description.associationadmin.isGranted('CREATE') and btn_add %}
            {% if display_btn_add %}
                <a  href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create',
                             sonata_admin.field_description.getOption('link_parameters', {}))
                          }}\"
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
        </div>
    {% endif %}

    <script>
        {% autoescape 'js' %}
        jQuery(function (\$) {
            var autocompleteInput = \$('#{{ id }}_autocomplete_input');

            var select2Options = {
                {%- set allowClearPlaceholder = (not multiple and not required) ? ' ' : '' -%}
                placeholder: '{{ placeholder ?: allowClearPlaceholder }}', // allowClear needs placeholder to work properly
                allowClear: {{ required ? 'false' : 'true' }},
                enable: {{ disabled ? 'false' : 'true' }},
                readonly: {{ attr.read_only|default(false) ? 'true' : 'false' }},
                minimumInputLength: {{ minimum_input_length }},
                theme: 'bootstrap',
                width: function() {
                    return Admin.get_select2_width(jQuery(this));
                },
                language: \"{{ canonicalize_locale_for_select2() }}\",
                dropdownAutoWidth: {{ dropdown_auto_width ? 'true' : 'false' }},
                containerCssClass: '{{ container_css_class ~ ' form-control' }}',
                dropdownCssClass: '{{ dropdown_css_class }}',
                dropdownParent: autocompleteInput.parents('.modal').length > 0 ? autocompleteInput.parents('.modal') : \$(document.body),
                ajax: {
                    url:  '{{ url ?: path(route.name, route.parameters|default([])) }}',
                    dataType: 'json',
                    delay: {{ delay == 100 and quiet_millis != 100 ? quiet_millis : delay }}, // NEXT_MAJOR: Replace by `{{ delay }}` instead.
                    cache: {{ cache ? 'true' : 'false' }},
                    processResults: function (data, params) {
                        return {
                            results: data.items,
                            pagination: {
                                more: data.more
                            }
                        };
                    },
                    data: function (params) {
                        {% block sonata_type_model_autocomplete_ajax_request_parameters %}
                        return {
                                //search term
                                '{{ req_param_name_search }}': params.term,

                                // page size
                                '{{ req_param_name_items_per_page }}': {{ items_per_page }},

                                // page number
                                '{{ req_param_name_page_number }}': (params.page !== 'undefined' ? params.page : 1),

                                // admin
                                {% if sonata_admin.admin %}
                                    'uniqid': '{{ sonata_admin.admin.uniqid }}',
                                    '_sonata_admin': '{{ sonata_admin.admin.baseCodeRoute|e('js') }}',
                                {% elseif admin_code %}
                                    '_sonata_admin': '{{ admin_code|e('js') }}',
                                {% endif %}

                                {% if context == 'filter' %}
                                    'field':  '{{ full_name|replace({'filter[': '', '][value]': '', '__':'.'}) }}',
                                    '_context': 'filter'
                                {% else %}
                                    'field':  '{{ name }}'
                                {% endif %}

                                // other parameters
                                {% if req_params is not empty %},
                                    {%- for key, value in req_params -%}
                                        '{{- key -}}': '{{- value -}}'
                                        {%- if not loop.last -%}, {% endif -%}
                                    {%- endfor -%}
                                {% endif %}
                        };
                        {% endblock %}
                    },
                },
                escapeMarkup: function (m) { return m; }, // we do not want to escape markup since we are displaying html in results
                templateResult: function (item) {
                    // When selecting a new result, the label is undefined and the correct property is text
                    if (typeof item.label === 'undefined') {
                        item.label = item.text;
                    }

                    return {% block sonata_type_model_autocomplete_dropdown_item_format -%}
                        {% if safe_label|default(false) %}
                            '<div class=\"{{ dropdown_item_css_class }}\">'+item.label+'<\\/div>'
                        {% else %}
                            jQuery('<div class=\"{{ dropdown_item_css_class }}\">').text(item.label).prop('outerHTML')
                        {% endif %}
                    {%- endblock %}; // format of one dropdown item
                },
                templateSelection: function (item) {
                    // The searching... placeholder appears as text
                    if (typeof item.label === 'undefined') {
                        item.label = item.text;
                    }

                    return {% block sonata_type_model_autocomplete_selection_format -%}
                        {% if safe_label|default(false) %}
                            item.label
                        {% else %}
                            jQuery('<div>').text(item.label).prop('innerHTML')
                        {% endif %}
                    {%- endblock %}; // format selected item '<b>'+item.label+'</b>';
                },
            };

            autocompleteInput.select2(select2Options);

            autocompleteInput.on('select2:select select2:unselect', function(e) {
                if (e.type === 'select2:select') {
                    e.added = e.params.data;
                }
                if (e.type === 'select2:unselect') {
                    e.removed = e.params.data;
                }

                // console.log('change '+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    {% if multiple %}
                        if(!\$.isArray(removedItems)) {
                            removedItems = [removedItems];
                        }

                        var length = removedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = removedItems[i];
                            \$('#{{ id }}_hidden_inputs_wrap input:hidden[value=\"'+el.id+'\"]').remove();
                        }
                    {%- else -%}
                        \$('#{{ id }}_hidden_inputs_wrap input:hidden').val('');
                    {%- endif %}
                }

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    {% if multiple %}
                        if(!\$.isArray(addedItems)) {
                            addedItems = [addedItems];
                        }

                        var length = addedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = addedItems[i];
                            \$('#{{ id }}_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"{{ full_name }}[]\" value=\"'+el.id+'\" />');
                        }
                    {%- else -%}
                        \$('#{{ id }}_hidden_inputs_wrap input:hidden').val(addedItems.id);
                    {%- endif %}
                }
            });

            // remove unneeded autocomplete text input before form submit
            autocompleteInput.closest('form').submit(function()
            {
                autocompleteInput.remove();
                return true;
            });

            // Automatically select the created record after closing the popup window
            {% if sonata_admin.field_description
                and sonata_admin.field_description.hasAssociationAdmin
                and btn_add
                and sonata_admin.field_description.associationadmin.hasRoute('create')
                and sonata_admin.field_description.associationadmin.hasAccess('create') %}

                {% set create_url = sonata_admin.field_description.associationadmin.generateUrl('create', sonata_admin.field_description.getOption('link_parameters', {})) %}

                \$(document).ajaxSuccess(function(event, xhr, settings) {
                  if(typeof xhr.responseJSON != 'undefined') {
                      if ('{{ create_url }}'.indexOf(settings.url) !== -1 && typeof xhr.responseJSON != 'string' && xhr.responseJSON.result == 'ok') {
                        var item = new Option(
                          new DOMParser().parseFromString(xhr.responseJSON.objectName, \"text/html\").documentElement.textContent,
                          xhr.responseJSON.objectId,
                          true, true
                          );

                        // append to Select2
                        autocompleteInput.append(item).trigger('change');

                        // manually trigger the `select2:select` event
                        autocompleteInput.trigger({
                            type: 'select2:select',
                            params: {
                                data: autocompleteInput.select2('data')
                            }
                        });

                        {% if multiple %}
                          \$('#{{ id }}_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"{{ full_name }}[]\" value=\"'+xhr.responseJSON.objectId+'\" />');
                        {% else %}
                          \$('#{{ id }}_hidden_inputs_wrap').html('<input type=\"hidden\" name=\"{{ full_name }}\" value=\"'+xhr.responseJSON.objectId+'\" />');
                        {% endif %}
                      }
                  }
                });
            {% endif %}
        });
        {% endautoescape %}
    </script>
{% endapply %}
", "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig", "/var/www/html/TestSite/vendor/sonata-project/admin-bundle/src/Resources/views/Form/Type/sonata_type_model_autocomplete.html.twig");
    }
}
