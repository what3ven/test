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

/* @SonataAdmin/CRUD/base_list.html.twig */
class __TwigTemplate_94e4213aa575eb6c21cc9c1ad467c8f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actions' => [$this, 'block_actions'],
            'tab_menu' => [$this, 'block_tab_menu'],
            'title' => [$this, 'block_title'],
            'navbar_title' => [$this, 'block_navbar_title'],
            'list_table' => [$this, 'block_list_table'],
            'list_header' => [$this, 'block_list_header'],
            'table' => [$this, 'block_table'],
            'table_header' => [$this, 'block_table_header'],
            'table_body' => [$this, 'block_table_body'],
            'table_footer' => [$this, 'block_table_footer'],
            'no_result_content' => [$this, 'block_no_result_content'],
            'list_footer' => [$this, 'block_list_footer'],
            'batch' => [$this, 'block_batch'],
            'batch_javascript' => [$this, 'block_batch_javascript'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'pager_results' => [$this, 'block_pager_results'],
            'pager_links' => [$this, 'block_pager_links'],
            'list_filters_actions' => [$this, 'block_list_filters_actions'],
            'list_filters' => [$this, 'block_list_filters'],
            'sonata_list_filter_group_class' => [$this, 'block_sonata_list_filter_group_class'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 12, $this->source); })()), "@SonataAdmin/CRUD/base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list.html.twig"));

        // line 34
        $context["datagrid_has_results"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 34, $this->source); })()), "datagrid", [], "any", false, false, false, 34), "results", [], "any", false, false, false, 34)) > 0);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_list.html.twig", 15)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 19, $this->source); })()), "sidemenu", [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 19, $this->source); })())], "method", false, false, false, 19), ["currentClass" => "active", "template" => $this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getGlobalTemplate("tab_menu_template")], "twig");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 26
        echo "    ";
        (((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "isChild", [], "any", false, false, false, 26) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "parent", [], "any", false, false, false, 26), "subject", [], "any", false, false, false, 26))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_edit", ["%name%" => twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "parent", [], "any", false, false, false, 26), "toString", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })()), "parent", [], "any", false, false, false, 26), "subject", [], "any", false, false, false, 26)], "method", false, false, false, 26)), "truncate", [0 => 15, 1 => "..."], "method", false, false, false, 26)], "SonataAdminBundle"), "html", null, true))) : (print ("")));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_navbar_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 30
        echo "    ";
        (((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 30, $this->source); })()), "isChild", [], "any", false, false, false, 30) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 30, $this->source); })()), "parent", [], "any", false, false, false, 30), "subject", [], "any", false, false, false, 30))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_edit", ["%name%" => twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 30, $this->source); })()), "parent", [], "any", false, false, false, 30), "toString", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 30, $this->source); })()), "parent", [], "any", false, false, false, 30), "subject", [], "any", false, false, false, 30)], "method", false, false, false, 30)), "truncate", [0 => 100, 1 => "..."], "method", false, false, false, 30)], "SonataAdminBundle"), "html", null, true))) : (print ("")));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_list_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_table"));

        // line 37
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 38
        $context["batchactions"] = twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 38, $this->source); })()), "batchactions", [], "any", false, false, false, 38);
        // line 39
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 39, $this->source); })()), "hasRoute", [0 => "batch"], "method", false, false, false, 39) && twig_length_filter($this->env, (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new RuntimeError('Variable "batchactions" does not exist.', 39, $this->source); })())))) {
            // line 40
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 40, $this->source); })()), "generateUrl", [0 => "batch", 1 => ["filter" => twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 40, $this->source); })()), "filterParameters", [], "any", false, false, false, 40)]], "method", false, false, false, 40), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\">
        ";
        }
        // line 43
        echo "
        ";
        // line 45
        echo "        <div class=\"box box-primary\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 45, $this->source); })()), "datagrid", [], "any", false, false, false, 45), "pager", [], "any", false, false, false, 45), "lastPage", [], "any", false, false, false, 45) == 1)) {
            echo " style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body";
        // line 46
        if ((isset($context["datagrid_has_results"]) || array_key_exists("datagrid_has_results", $context) ? $context["datagrid_has_results"] : (function () { throw new RuntimeError('Variable "datagrid_has_results" does not exist.', 46, $this->source); })())) {
            echo " table-responsive no-padding";
        }
        echo "\">
                ";
        // line 47
        echo $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.list.table.top", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 47, $this->source); })())]);
        echo "

                ";
        // line 49
        $this->displayBlock('list_header', $context, $blocks);
        // line 50
        echo "
                ";
        // line 51
        if ((isset($context["datagrid_has_results"]) || array_key_exists("datagrid_has_results", $context) ? $context["datagrid_has_results"] : (function () { throw new RuntimeError('Variable "datagrid_has_results" does not exist.', 51, $this->source); })())) {
            // line 52
            echo "                    ";
            $this->displayBlock('table', $context, $blocks);
            // line 117
            echo "                ";
        } else {
            // line 118
            echo "                    ";
            $this->displayBlock('no_result_content', $context, $blocks);
            // line 142
            echo "                ";
        }
        // line 143
        echo "
                ";
        // line 144
        echo $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.list.table.bottom", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 144, $this->source); })())]);
        echo "
            </div>
            ";
        // line 146
        $this->displayBlock('list_footer', $context, $blocks);
        // line 251
        echo "        </div>
        ";
        // line 252
        if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 252, $this->source); })()), "hasRoute", [0 => "batch"], "method", false, false, false, 252) && twig_length_filter($this->env, (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new RuntimeError('Variable "batchactions" does not exist.', 252, $this->source); })())))) {
            // line 253
            echo "            </form>
        ";
        }
        // line 255
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_list_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 53
        echo "                        <table class=\"table table-bordered table-striped table-hover sonata-ba-list\">
                        ";
        // line 54
        $this->displayBlock('table_header', $context, $blocks);
        // line 106
        echo "
                        ";
        // line 107
        $this->displayBlock('table_body', $context, $blocks);
        // line 112
        echo "
                        ";
        // line 113
        $this->displayBlock('table_footer', $context, $blocks);
        // line 115
        echo "                    </table>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_table_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_header"));

        // line 55
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 57, $this->source); })()), "list", [], "any", false, false, false, 57), "getElements", [], "method", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 58
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 58, $this->source); })()), "hasRoute", [0 => "batch"], "method", false, false, false, 58) && (twig_get_attribute($this->env, $this->source, $context["field_description"], "name", [], "any", false, false, false, 58) == twig_constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_BATCH"))) && (twig_length_filter($this->env, (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new RuntimeError('Variable "batchactions" does not exist.', 58, $this->source); })())) > 0))) {
                // line 59
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 62
$context["field_description"], "name", [], "any", false, false, false, 62) == twig_constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_SELECT"))) {
                // line 63
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 64
$context["field_description"], "name", [], "any", false, false, false, 64) == twig_constant("Sonata\\AdminBundle\\Datagrid\\ListMapper::NAME_ACTIONS")) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "isXmlHttpRequest", [], "any", false, false, false, 64))) {
                // line 65
                echo "                                            ";
                // line 66
                echo "                                            ";
                // line 67
                echo "                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", [0 => "ajax_hidden"], "method", false, false, false, 67) == true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "isXmlHttpRequest", [], "any", false, false, false, 67))) {
                // line 68
                echo "                                            ";
                // line 69
                echo "                                        ";
            } else {
                // line 70
                echo "                                            ";
                $context["sortable"] = false;
                // line 71
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => "sortable", 1 => false], "method", false, false, false, 71)) {
                    // line 72
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 73
                    echo "                                                ";
                    $context["sort_parameters"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 73, $this->source); })()), "datagrid", [], "any", false, false, false, 73), "sortparameters", [0 => $context["field_description"]], "method", false, false, false, 73);
                    // line 74
                    echo "                                                ";
                    $context["current"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, true, false, 74), "values", [], "any", false, true, false, 74), twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_BY"), [], "array", true, true, false, 74) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 75
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 75, $this->source); })()), "datagrid", [], "any", false, false, false, 75), "values", [], "any", false, false, false, 75), twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_BY"), [], "array", false, false, false, 75) == $context["field_description"]) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 76
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 76, $this->source); })()), "datagrid", [], "any", false, false, false, 76), "values", [], "any", false, false, false, 76), twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_BY"), [], "array", false, false, false, 76), "name", [], "any", false, false, false, 76) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sort_parameters"]) || array_key_exists("sort_parameters", $context) ? $context["sort_parameters"] : (function () { throw new RuntimeError('Variable "sort_parameters" does not exist.', 76, $this->source); })()), "filter", [], "any", false, false, false, 76), twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_BY"), [], "array", false, false, false, 76))));
                    // line 77
                    echo "                                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 77, $this->source); })())) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 78
                    echo "                                                ";
                    $context["sort_by"] = (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 78, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 78, $this->source); })()), "datagrid", [], "any", false, false, false, 78), "values", [], "any", false, false, false, 78), twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_ORDER"), [], "array", false, false, false, 78)) : (twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_ORDER"), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sort_parameters"]) || array_key_exists("sort_parameters", $context) ? $context["sort_parameters"] : (function () { throw new RuntimeError('Variable "sort_parameters" does not exist.', 78, $this->source); })()), "filter", [], "any", false, false, false, 78), twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::SORT_ORDER"), [], "array", false, false, false, 78)], "method", false, false, false, 78)));
                    // line 79
                    echo "                                            ";
                }
                // line 80
                echo "
                                            ";
                // line 81
                ob_start();
                // line 82
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "type", [], "any", false, false, false, 82), "html", null, true);
                if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 82, $this->source); })())) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) || array_key_exists("sort_by", $context) ? $context["sort_by"] : (function () { throw new RuntimeError('Variable "sort_by" does not exist.', 82, $this->source); })())), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) || array_key_exists("sort_active_class", $context) ? $context["sort_active_class"] : (function () { throw new RuntimeError('Variable "sort_active_class" does not exist.', 82, $this->source); })()), "html", null, true);
                }
                if (twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => "header_class"], "method", false, false, false, 82)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => "header_class"], "method", false, false, false, 82), "html", null, true);
                }
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => "header_style"], "method", false, false, false, 82)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "option", [0 => "header_style"], "method", false, false, false, 82), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 83
                if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 83, $this->source); })())) {
                    // line 84
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 84, $this->source); })()), "generateUrl", [0 => ((array_key_exists("action", $context)) ? (_twig_default_filter((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 84, $this->source); })()), "list")) : ("list")), 1 => twig_array_merge((isset($context["sort_parameters"]) || array_key_exists("sort_parameters", $context) ? $context["sort_parameters"] : (function () { throw new RuntimeError('Variable "sort_parameters" does not exist.', 84, $this->source); })()), ["_list_mode" => twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 84, $this->source); })()), "getListMode", [], "method", false, false, false, 84)])], "method", false, false, false, 84), "html", null, true);
                    echo "\">
                                                    ";
                }
                // line 86
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", [0 => "label_icon"], "method", false, false, false, 86)) {
                    // line 87
                    echo "                                                        <span class=\"sonata-ba-list-field-header-label-icon\">
                                                            ";
                    // line 88
                    echo $this->env->getRuntime('Sonata\AdminBundle\Twig\IconRuntime')->parseIcon(twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", [0 => "label_icon"], "method", false, false, false, 88));
                    echo "
                                                        </span>
                                                    ";
                }
                // line 91
                echo "                                                    ";
                if ( !(twig_get_attribute($this->env, $this->source, $context["field_description"], "label", [], "any", false, false, false, 91) === false)) {
                    // line 92
                    echo "                                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["field_description"], "translationDomain", [], "any", false, false, false, 92) === false)) {
                        // line 93
                        echo "                                                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "label", [], "any", false, false, false, 93), "html", null, true);
                        echo "
                                                        ";
                    } else {
                        // line 95
                        echo "                                                            ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["field_description"], "label", [], "any", false, false, false, 95), [], twig_get_attribute($this->env, $this->source, $context["field_description"], "translationDomain", [], "any", false, false, false, 95)), "html", null, true);
                        echo "
                                                        ";
                    }
                    // line 97
                    echo "                                                    ";
                }
                // line 98
                echo "                                                    ";
                if ((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 98, $this->source); })())) {
                    echo "</a>";
                }
                // line 99
                echo "                                                </th>
                                            ";
                $___internal_parse_25_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 81
                echo twig_spaceless($___internal_parse_25_);
                // line 101
                echo "                                        ";
            }
            // line 102
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                </tr>
                            </thead>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 107
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        // line 108
        echo "                            <tbody>
                                ";
        // line 109
        $this->loadTemplate($this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getAdminTemplate(("outer_list_rows_" . twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 109, $this->source); })()), "getListMode", [], "method", false, false, false, 109)), twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 109, $this->source); })()), "code", [], "any", false, false, false, 109)), "@SonataAdmin/CRUD/base_list.html.twig", 109)->display($context);
        // line 110
        echo "                            </tbody>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 113
    public function block_table_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_footer"));

        // line 114
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 118
    public function block_no_result_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "no_result_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "no_result_content"));

        // line 119
        echo "                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fas fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_result", [], "SonataAdminBundle"), "html", null, true);
        echo "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <div class=\"progress-description\">
                                    <ul class=\"list-unstyled\">";
        // line 128
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 128, $this->source); })()), "datagrid", [], "any", false, false, false, 128), "pager", [], "any", false, false, false, 128), "countResults", [], "method", false, false, false, 128) > 0)) {
            // line 129
            echo "<li>
                                                <a href=\"";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 130, $this->source); })()), "generateUrl", [0 => ((array_key_exists("action", $context)) ? (_twig_default_filter((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 130, $this->source); })()), "list")) : ("list")), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 130, $this->source); })()), "datagrid", [], "any", false, false, false, 130), "getPaginationParameters", [0 => 1], "method", false, false, false, 130)], "method", false, false, false, 130), "html", null, true);
            echo "\">";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("go_to_the_first_page", [], "SonataAdminBundle"), "html", null, true);
            // line 132
            echo "</a>
                                            </li>";
        } elseif ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 134
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "request", [], "any", false, false, false, 134), "xmlHttpRequest", [], "any", false, false, false, 134)) {
            // line 135
            $this->loadTemplate($this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getAdminTemplate("button_create", twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 135, $this->source); })()), "code", [], "any", false, false, false, 135)), "@SonataAdmin/CRUD/base_list.html.twig", 135)->display($context);
        }
        // line 137
        echo "</ul>
                                </div>
                            </div><!-- /.info-box-content -->
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 146
    public function block_list_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_footer"));

        // line 147
        echo "                ";
        if ((isset($context["datagrid_has_results"]) || array_key_exists("datagrid_has_results", $context) ? $context["datagrid_has_results"] : (function () { throw new RuntimeError('Variable "datagrid_has_results" does not exist.', 147, $this->source); })())) {
            // line 148
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 150
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "request", [], "any", false, false, false, 150), "isXmlHttpRequest", [], "any", false, false, false, 150)) {
                // line 151
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 152
                if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 152, $this->source); })()), "hasRoute", [0 => "batch"], "method", false, false, false, 152) && (twig_length_filter($this->env, (isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new RuntimeError('Variable "batchactions" does not exist.', 152, $this->source); })())) > 0))) {
                    // line 153
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 207
                    echo "                                    ";
                }
                // line 208
                echo "                                </div>

                                <div class=\"pull-right\">
                                    ";
                // line 211
                if (((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 211, $this->source); })()), "hasRoute", [0 => "export"], "method", false, false, false, 211) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 211, $this->source); })()), "hasAccess", [0 => "export"], "method", false, false, false, 211)) && twig_length_filter($this->env, (isset($context["export_formats"]) || array_key_exists("export_formats", $context) ? $context["export_formats"] : (function () { throw new RuntimeError('Variable "export_formats" does not exist.', 211, $this->source); })())))) {
                    // line 212
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fas fa-share-square\" aria-hidden=\"true\"></i>
                                                ";
                    // line 215
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_export_download", [], "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 219
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["export_formats"]) || array_key_exists("export_formats", $context) ? $context["export_formats"] : (function () { throw new RuntimeError('Variable "export_formats" does not exist.', 219, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 220
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 221
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 221, $this->source); })()), "generateUrl", [0 => "export", 1 => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 221, $this->source); })()), "datagrid", [], "any", false, false, false, 221), "paginationparameters", [0 => 0], "method", false, false, false, 221) + ["format" => $context["format"]])], "method", false, false, false, 221), "html", null, true);
                        echo "\">
                                                        <i class=\"fas fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        ";
                        // line 223
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("export_format_" . $context["format"]), [], "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                </li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 227
                    echo "                                            </ul>
                                        </div>

                                        ";
                    // line 230
                    if ( !twig_test_empty(                    $this->renderBlock("pager_results", $context, $blocks))) {
                        // line 231
                        echo "                                            &nbsp;-&nbsp;
                                        ";
                    }
                    // line 233
                    echo "                                    ";
                }
                // line 234
                echo "
                                    ";
                // line 235
                $this->displayBlock('pager_results', $context, $blocks);
                // line 238
                echo "                                </div>
                            ";
            }
            // line 240
            echo "                        </div>

                        ";
            // line 242
            $this->displayBlock('pager_links', $context, $blocks);
            // line 248
            echo "                    </div>
                ";
        }
        // line 250
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 153
    public function block_batch($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch"));

        // line 154
        echo "                                            <script>
                                                ";
        // line 155
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 183
        echo "                                            </script>

                                        ";
        // line 185
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 204
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_batch", [], "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 155
    public function block_batch_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 156
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;

                                                            if (Admin.get_config('USE_ICHECK')) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 185
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 186
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 186, $this->source); })()), "uniqid", [], "any", false, false, false, 186), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 187, $this->source); })()), "uniqid", [], "any", false, false, false, 187), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("all_elements", [], "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 189, $this->source); })()), "datagrid", [], "any", false, false, false, 189), "pager", [], "any", false, false, false, 189), "countResults", [], "method", false, false, false, 189), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) || array_key_exists("batchactions", $context) ? $context["batchactions"] : (function () { throw new RuntimeError('Variable "batchactions" does not exist.', 193, $this->source); })()));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 194
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">
                                                        ";
            // line 195
            if ((twig_get_attribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", true, true, false, 195) && (twig_get_attribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", false, false, false, 195) === false))) {
                // line 196
                echo "                                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["options"], "label", [], "any", false, false, false, 196), "html", null, true);
                echo "
                                                        ";
            } else {
                // line 198
                echo "                                                            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["options"], "label", [], "any", false, false, false, 198), [], (((twig_get_attribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", true, true, false, 198) &&  !(null === twig_get_attribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", false, false, false, 198)))) ? (twig_get_attribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", false, false, false, 198)) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 198, $this->source); })()), "translationDomain", [], "any", false, false, false, 198)))), "html", null, true);
                echo "
                                                        ";
            }
            // line 200
            echo "                                                    </option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "                                            </select>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 235
    public function block_pager_results($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_results"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_results"));

        // line 236
        echo "                                        ";
        $this->loadTemplate($this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getAdminTemplate("pager_results", twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 236, $this->source); })()), "code", [], "any", false, false, false, 236)), "@SonataAdmin/CRUD/base_list.html.twig", 236)->display($context);
        // line 237
        echo "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 242
    public function block_pager_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_links"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pager_links"));

        // line 243
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 243, $this->source); })()), "datagrid", [], "any", false, false, false, 243), "pager", [], "any", false, false, false, 243), "haveToPaginate", [], "method", false, false, false, 243)) {
            // line 244
            echo "                                <hr/>
                                ";
            // line 245
            $this->loadTemplate($this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getAdminTemplate("pager_links", twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 245, $this->source); })()), "code", [], "any", false, false, false, 245)), "@SonataAdmin/CRUD/base_list.html.twig", 245)->display($context);
            // line 246
            echo "                            ";
        }
        // line 247
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 258
    public function block_list_filters_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_filters_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_filters_actions"));

        // line 259
        echo "    ";
        $context["displayableFilters"] = twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 259, $this->source); })()), "datagrid", [], "any", false, false, false, 259), "filters", [], "any", false, false, false, 259), function ($__filter__) use ($context, $macros) { $context["filter"] = $__filter__; return  !(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 259, $this->source); })()), "option", [0 => "show_filter"], "method", false, false, false, 259) === false); });
        // line 260
        if (twig_length_filter($this->env, (isset($context["displayableFilters"]) || array_key_exists("displayableFilters", $context) ? $context["displayableFilters"] : (function () { throw new RuntimeError('Variable "displayableFilters" does not exist.', 260, $this->source); })()))) {
            // line 261
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fas fa-filter\" aria-hidden=\"true\"></i>
                    ";
            // line 266
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_filters", [], "SonataAdminBundle"), "html", null, true);
            echo "
                    <span class=\"badge sonata-filter-count\"></span>
                    <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu dropdown-menu-scrollable\" role=\"menu\">
                    ";
            // line 272
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["displayableFilters"]) || array_key_exists("displayableFilters", $context) ? $context["displayableFilters"] : (function () { throw new RuntimeError('Variable "displayableFilters" does not exist.', 272, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 273
                echo "                        ";
                $context["filterDisplayed"] = (twig_get_attribute($this->env, $this->source, $context["filter"], "isActive", [], "method", false, false, false, 273) || (twig_get_attribute($this->env, $this->source, $context["filter"], "option", [0 => "show_filter"], "method", false, false, false, 273) === true));
                // line 274
                echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 275
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 275, $this->source); })()), "uniqid", [], "any", false, false, false, 275), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 275), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 275, $this->source); })()), "uniqid", [], "method", false, false, false, 275), "html", null, true);
                echo "\">
                                <i class=\"far ";
                // line 276
                echo (((isset($context["filterDisplayed"]) || array_key_exists("filterDisplayed", $context) ? $context["filterDisplayed"] : (function () { throw new RuntimeError('Variable "filterDisplayed" does not exist.', 276, $this->source); })())) ? ("fa-check-square") : ("fa-square"));
                echo "\"></i>
                                ";
                // line 277
                if ( !(twig_get_attribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 277) === false)) {
                    // line 278
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 278) === false)) {
                        // line 279
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 279), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 281
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 281), twig_get_attribute($this->env, $this->source, $context["filter"], "option", [0 => "label_translation_parameters", 1 => []], "method", false, false, false, 281), (((twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", true, true, false, 281) &&  !(null === twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 281)))) ? (twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 281)) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 281, $this->source); })()), "translationDomain", [], "any", false, false, false, 281)))), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 283
                    echo "                                ";
                }
                // line 284
                echo "                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 287
            echo "                </ul>
            </li>
        </ul>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 293
    public function block_list_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_filters"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_filters"));

        // line 294
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 294, $this->source); })()), "datagrid", [], "any", false, false, false, 294), "filters", [], "any", false, false, false, 294)) {
            // line 295
            echo "        ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 295, $this->source); })()), [0 => $this->env->getRuntime('Sonata\AdminBundle\Twig\TemplateRegistryRuntime')->getAdminTemplate("filter", twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 295, $this->source); })()), "code", [], "any", false, false, false, 295))], true);
            // line 296
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 297
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 297, $this->source); })()), "datagrid", [], "any", false, false, false, 297), "hasDisplayableFilters", [], "any", false, false, false, 297)) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 297, $this->source); })()), "uniqid", [], "method", false, false, false, 297), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form
                        class=\"sonata-filter-form form-horizontal ";
            // line 301
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 301, $this->source); })()), "isChild", [], "any", false, false, false, 301) && (1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 301, $this->source); })()), "datagrid", [], "any", false, false, false, 301), "filters", [], "any", false, false, false, 301))))) ? ("hide") : (""));
            echo "\"
                        action=\"";
            // line 302
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 302, $this->source); })()), "generateUrl", [0 => ((array_key_exists("action", $context)) ? (_twig_default_filter((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 302, $this->source); })()), "list")) : ("list"))], "method", false, false, false, 302), "html", null, true);
            echo "\"
                        method=\"GET\"
                        role=\"form\"
                        data-default-values=\"";
            // line 305
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 305, $this->source); })()), "defaultFilterParameters", [], "any", false, false, false, 305)), "html", null, true);
            echo "\"
                    >
                        ";
            // line 307
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 307, $this->source); })()), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 311
            $context["withAdvancedFilter"] = false;
            // line 312
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 312, $this->source); })()), "datagrid", [], "any", false, false, false, 312), "filters", [], "any", false, false, false, 312));
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
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 313
                echo "                                    ";
                $context["filterDisplayed"] = (twig_get_attribute($this->env, $this->source, $context["filter"], "isActive", [], "method", false, false, false, 313) || (twig_get_attribute($this->env, $this->source, $context["filter"], "option", [0 => "show_filter"], "method", false, false, false, 313) === true));
                // line 314
                echo "                                    ";
                $context["filterCanBeDisplayed"] =  !(twig_get_attribute($this->env, $this->source, $context["filter"], "option", [0 => "show_filter"], "method", false, false, false, 314) === false);
                // line 315
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 315, $this->source); })()), "uniqid", [], "any", false, false, false, 315), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 315), "html", null, true);
                echo "\" sonata-filter=\"";
                echo (((isset($context["filterCanBeDisplayed"]) || array_key_exists("filterCanBeDisplayed", $context) ? $context["filterCanBeDisplayed"] : (function () { throw new RuntimeError('Variable "filterCanBeDisplayed" does not exist.', 315, $this->source); })())) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if ((isset($context["filterDisplayed"]) || array_key_exists("filterDisplayed", $context) ? $context["filterDisplayed"] : (function () { throw new RuntimeError('Variable "filterDisplayed" does not exist.', 315, $this->source); })())) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 316
                if ( !(twig_get_attribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 316) === false)) {
                    // line 317
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 317, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 317), [], "array", false, false, false, 317), "children", [], "any", false, false, false, 317), "value", [], "array", false, false, false, 317), "vars", [], "any", false, false, false, 317), "id", [], "any", false, false, false, 317), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">
                                                ";
                    // line 318
                    if ((twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 318) === false)) {
                        // line 319
                        echo "                                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 319), "html", null, true);
                        echo "
                                                ";
                    } else {
                        // line 321
                        echo "                                                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 321), twig_get_attribute($this->env, $this->source, $context["filter"], "option", [0 => "label_translation_parameters", 1 => []], "method", false, false, false, 321), (((twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", true, true, false, 321) &&  !(null === twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 321)))) ? (twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 321)) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 321, $this->source); })()), "translationDomain", [], "any", false, false, false, 321)))), "html", null, true);
                        echo "
                                                ";
                    }
                    // line 323
                    echo "                                            </label>
                                        ";
                }
                // line 325
                echo "                                        ";
                $context["attr"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 325), [], "array", false, true, false, 325), "children", [], "any", false, true, false, 325), "type", [], "array", false, true, false, 325), "vars", [], "any", false, true, false, 325), "attr", [], "any", true, true, false, 325)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 325), [], "array", false, true, false, 325), "children", [], "any", false, true, false, 325), "type", [], "array", false, true, false, 325), "vars", [], "any", false, true, false, 325), "attr", [], "any", false, false, false, 325), [])) : ([]));
                // line 326
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 328
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 328, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 328), [], "array", false, false, false, 328), "children", [], "any", false, false, false, 328), "type", [], "array", false, false, false, 328), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 328, $this->source); })())]);
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 332
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 332, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 332), [], "array", false, false, false, 332), "children", [], "any", false, false, false, 332), "value", [], "array", false, false, false, 332), 'widget');
                echo "
                                        </div>

                                        ";
                // line 335
                if ((isset($context["filterCanBeDisplayed"]) || array_key_exists("filterCanBeDisplayed", $context) ? $context["filterCanBeDisplayed"] : (function () { throw new RuntimeError('Variable "filterCanBeDisplayed" does not exist.', 335, $this->source); })())) {
                    // line 336
                    echo "                                            <div class=\"col-sm-1\">
                                                <label class=\"control-label\">
                                                    <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 338
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 338, $this->source); })()), "uniqid", [], "any", false, false, false, 338), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 338), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 338, $this->source); })()), "uniqid", [], "method", false, false, false, 338), "html", null, true);
                    echo "\">
                                                        <i class=\"fas fa-minus-circle\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </label>
                                            </div>
                                        ";
                }
                // line 344
                echo "                                    </div>

                                    ";
                // line 346
                if (twig_get_attribute($this->env, $this->source, $context["filter"], "option", [0 => "advanced_filter"], "method", false, false, false, 346)) {
                    // line 347
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 348
                    echo "                                    ";
                }
                // line 349
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 350
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[";
            // line 352
            echo twig_escape_filter($this->env, twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::PAGE"), "html", null, true);
            echo "]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 354
            $context["foo"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 354, $this->source); })()), twig_constant("Sonata\\AdminBundle\\Datagrid\\DatagridInterface::PAGE"), [], "array", false, false, false, 354), "setRendered", [], "method", false, false, false, 354);
            // line 355
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 355, $this->source); })()), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-filter\" aria-hidden=\"true\"></i> ";
            // line 359
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_filter", [], "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 362
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 362, $this->source); })()), "generateUrl", [0 => ((array_key_exists("action", $context)) ? (_twig_default_filter((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 362, $this->source); })()), "list")) : ("list")), 1 => ["filters" => "reset"]], "method", false, false, false, 362), "html", null, true);
            echo "\">
                                        ";
            // line 363
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_reset_filter", [], "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 367
            if ((isset($context["withAdvancedFilter"]) || array_key_exists("withAdvancedFilter", $context) ? $context["withAdvancedFilter"] : (function () { throw new RuntimeError('Variable "withAdvancedFilter" does not exist.', 367, $this->source); })())) {
                // line 368
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fas fa-cogs\" aria-hidden=\"true\"></i>
                                            ";
                // line 371
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_advanced_filters", [], "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 375
            echo "                            </div>
                        </div>

                        ";
            // line 378
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 378, $this->source); })()), "persistentParameters", [], "any", false, false, false, 378));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 379
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 381
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 315
    public function block_sonata_list_filter_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1272 => 315,  1257 => 381,  1246 => 379,  1242 => 378,  1237 => 375,  1230 => 371,  1225 => 368,  1223 => 367,  1216 => 363,  1212 => 362,  1206 => 359,  1198 => 355,  1196 => 354,  1191 => 352,  1187 => 350,  1173 => 349,  1170 => 348,  1167 => 347,  1165 => 346,  1161 => 344,  1148 => 338,  1144 => 336,  1142 => 335,  1136 => 332,  1129 => 328,  1125 => 326,  1122 => 325,  1118 => 323,  1112 => 321,  1106 => 319,  1104 => 318,  1099 => 317,  1097 => 316,  1080 => 315,  1077 => 314,  1074 => 313,  1056 => 312,  1054 => 311,  1047 => 307,  1042 => 305,  1036 => 302,  1032 => 301,  1023 => 297,  1020 => 296,  1017 => 295,  1014 => 294,  1004 => 293,  990 => 287,  982 => 284,  979 => 283,  973 => 281,  967 => 279,  964 => 278,  962 => 277,  958 => 276,  950 => 275,  947 => 274,  944 => 273,  940 => 272,  931 => 266,  924 => 261,  922 => 260,  919 => 259,  909 => 258,  899 => 247,  896 => 246,  894 => 245,  891 => 244,  888 => 243,  878 => 242,  868 => 237,  865 => 236,  855 => 235,  844 => 202,  837 => 200,  831 => 198,  825 => 196,  823 => 195,  818 => 194,  814 => 193,  807 => 189,  803 => 188,  799 => 187,  794 => 186,  784 => 185,  748 => 156,  738 => 155,  726 => 205,  723 => 204,  721 => 185,  717 => 183,  715 => 155,  712 => 154,  702 => 153,  692 => 250,  688 => 248,  686 => 242,  682 => 240,  678 => 238,  676 => 235,  673 => 234,  670 => 233,  666 => 231,  664 => 230,  659 => 227,  649 => 223,  644 => 221,  641 => 220,  637 => 219,  630 => 215,  625 => 212,  623 => 211,  618 => 208,  615 => 207,  612 => 153,  610 => 152,  607 => 151,  605 => 150,  601 => 148,  598 => 147,  588 => 146,  574 => 137,  571 => 135,  569 => 134,  566 => 132,  564 => 131,  561 => 130,  558 => 129,  556 => 128,  548 => 122,  543 => 119,  533 => 118,  523 => 114,  513 => 113,  502 => 110,  500 => 109,  497 => 108,  487 => 107,  475 => 103,  469 => 102,  466 => 101,  464 => 81,  460 => 99,  455 => 98,  452 => 97,  446 => 95,  440 => 93,  437 => 92,  434 => 91,  428 => 88,  425 => 87,  422 => 86,  416 => 84,  414 => 83,  393 => 82,  391 => 81,  388 => 80,  385 => 79,  382 => 78,  379 => 77,  377 => 76,  376 => 75,  374 => 74,  371 => 73,  368 => 72,  365 => 71,  362 => 70,  359 => 69,  357 => 68,  354 => 67,  352 => 66,  350 => 65,  348 => 64,  345 => 63,  343 => 62,  338 => 59,  335 => 58,  331 => 57,  327 => 55,  317 => 54,  306 => 115,  304 => 113,  301 => 112,  299 => 107,  296 => 106,  294 => 54,  291 => 53,  281 => 52,  263 => 49,  252 => 255,  248 => 253,  246 => 252,  243 => 251,  241 => 146,  236 => 144,  233 => 143,  230 => 142,  227 => 118,  224 => 117,  221 => 52,  219 => 51,  216 => 50,  214 => 49,  209 => 47,  203 => 46,  196 => 45,  193 => 43,  188 => 41,  183 => 40,  180 => 39,  178 => 38,  175 => 37,  165 => 36,  152 => 30,  142 => 29,  129 => 26,  119 => 25,  109 => 19,  99 => 18,  89 => 15,  79 => 14,  69 => 12,  67 => 34,  54 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{%- block actions -%}
    {% include '@SonataAdmin/CRUD/action_buttons.html.twig' %}
{%- endblock -%}

{%- block tab_menu -%}
    {{ knp_menu_render(admin.sidemenu(action), {
        'currentClass': 'active',
        'template': get_global_template('tab_menu_template')
    }, 'twig') }}
{%- endblock -%}

{% block title %}
    {{ admin.isChild and admin.parent.subject ? 'title_edit'|trans({'%name%': admin.parent.toString(admin.parent.subject)|u.truncate(15, '...') }, 'SonataAdminBundle') : '' }}
{% endblock %}

{% block navbar_title %}
    {{ admin.isChild and admin.parent.subject ? 'title_edit'|trans({'%name%': admin.parent.toString(admin.parent.subject)|u.truncate(100, '...') }, 'SonataAdminBundle') : '' }}
{% endblock %}

{# Define the variable out of the block to prevent error if someone is overriding the list_table and not the list_footer #}
{% set datagrid_has_results = admin.datagrid.results|length > 0 %}

{% block list_table %}
    <div class=\"col-xs-12 col-md-12\">
        {% set batchactions = admin.batchactions %}
        {% if admin.hasRoute('batch') and batchactions|length %}
            <form action=\"{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">
        {% endif %}

        {# Add a margin if no pager to prevent dropdown cropping on window #}
        <div class=\"box box-primary\"{% if admin.datagrid.pager.lastPage == 1 %} style=\"margin-bottom: 100px;\"{% endif %}>
            <div class=\"box-body{% if datagrid_has_results %} table-responsive no-padding{% endif %}\">
                {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}

                {% block list_header %}{% endblock %}

                {% if datagrid_has_results %}
                    {% block table %}
                        <table class=\"table table-bordered table-striped table-hover sonata-ba-list\">
                        {% block table_header %}
                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    {% for field_description in admin.list.getElements() %}
                                        {% if admin.hasRoute('batch') and field_description.name == constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_BATCH') and batchactions|length > 0 %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        {% elseif field_description.name == constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_SELECT') %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        {% elseif field_description.name == constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\ListMapper::NAME_ACTIONS') and app.request.isXmlHttpRequest %}
                                            {# NEXT_MAJOR: Remove this case in version 5 and recommend using the option `ajax_hidden` instead. #}
                                            {# Action buttons disabled in ajax view! #}
                                        {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}
                                            {# Disable fields with 'ajax_hidden' option set to true #}
                                        {% else %}
                                            {% set sortable = false %}
                                            {% if field_description.option('sortable', false) %}
                                                {% set sortable             = true %}
                                                {% set sort_parameters      = admin.datagrid.sortparameters(field_description) %}
                                                {% set current              = admin.datagrid.values[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_BY')] is defined
                                                    and (admin.datagrid.values[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_BY')] == field_description
                                                        or admin.datagrid.values[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_BY')].name == sort_parameters.filter[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_BY')]) %}
                                                {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}
                                                {% set sort_by              = current ? admin.datagrid.values[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_ORDER')] : field_description.option(constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_ORDER'), sort_parameters.filter[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::SORT_ORDER')]) %}
                                            {% endif %}

                                            {% apply spaceless %}
                                                <th class=\"sonata-ba-list-field-header-{{ field_description.type }}{% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}{% if field_description.option('header_class') %} {{ field_description.option('header_class') }}{% endif %}\"{% if field_description.option('header_style') %} style=\"{{ field_description.option('header_style') }}\"{% endif %}>
                                                    {% if sortable %}
                                                        <a href=\"{{ admin.generateUrl(action|default('list'), sort_parameters|merge({_list_mode: admin.getListMode()})) }}\">
                                                    {% endif %}
                                                    {% if field_description.getOption('label_icon') %}
                                                        <span class=\"sonata-ba-list-field-header-label-icon\">
                                                            {{ field_description.getOption('label_icon')|parse_icon }}
                                                        </span>
                                                    {% endif %}
                                                    {% if field_description.label is not same as(false) %}
                                                        {% if field_description.translationDomain is same as(false) %}
                                                            {{ field_description.label }}
                                                        {% else %}
                                                            {{ field_description.label|trans({}, field_description.translationDomain) }}
                                                        {% endif %}
                                                    {% endif %}
                                                    {% if sortable %}</a>{% endif %}
                                                </th>
                                            {% endapply %}
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            </thead>
                        {% endblock %}

                        {% block table_body %}
                            <tbody>
                                {% include get_admin_template('outer_list_rows_' ~ admin.getListMode(), admin.code) %}
                            </tbody>
                        {% endblock %}

                        {% block table_footer %}
                        {% endblock %}
                    </table>
                    {% endblock %}
                {% else %}
                    {% block no_result_content %}
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fas fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">{{ 'no_result'|trans({}, 'SonataAdminBundle') }}</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <div class=\"progress-description\">
                                    <ul class=\"list-unstyled\">
                                        {%- if admin.datagrid.pager.countResults() > 0 -%}
                                            <li>
                                                <a href=\"{{ admin.generateUrl(action|default('list'), admin.datagrid.getPaginationParameters(1)) }}\">
                                                    {{- 'go_to_the_first_page'|trans({}, 'SonataAdminBundle') -}}
                                                </a>
                                            </li>
                                        {%- elseif not app.request.xmlHttpRequest -%}
                                            {%- include get_admin_template('button_create', admin.code) -%}
                                        {%- endif -%}
                                    </ul>
                                </div>
                            </div><!-- /.info-box-content -->
                        </div>
                    {% endblock %}
                {% endif %}

                {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}
            </div>
            {% block list_footer %}
                {% if datagrid_has_results %}
                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            {% if not app.request.isXmlHttpRequest %}
                                <div class=\"pull-left\">
                                    {% if admin.hasRoute('batch') and batchactions|length > 0 %}
                                        {% block batch %}
                                            <script>
                                                {% block batch_javascript %}
                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;

                                                            if (Admin.get_config('USE_ICHECK')) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                {% endblock %}
                                            </script>

                                        {% block batch_actions %}
                                            <label class=\"checkbox\" for=\"{{ admin.uniqid }}_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"{{ admin.uniqid }}_all_elements\">
                                                {{ 'all_elements'|trans({}, 'SonataAdminBundle') }}
                                                ({{ admin.datagrid.pager.countResults() }})
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                {% for action, options in batchactions %}
                                                    <option value=\"{{ action }}\">
                                                        {% if options.translation_domain is defined and options.translation_domain is same as(false) %}
                                                            {{ options.label }}
                                                        {% else %}
                                                            {{ options.label|trans({}, options.translation_domain ?? admin.translationDomain) }}
                                                        {% endif %}
                                                    </option>
                                                {% endfor %}
                                            </select>
                                        {% endblock %}

                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"{{ 'btn_batch'|trans({}, 'SonataAdminBundle') }}\">
                                        {% endblock %}
                                    {% endif %}
                                </div>

                                <div class=\"pull-right\">
                                    {% if admin.hasRoute('export') and admin.hasAccess('export') and export_formats|length %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fas fa-share-square\" aria-hidden=\"true\"></i>
                                                {{ \"label_export_download\"|trans({}, \"SonataAdminBundle\") }}
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                {% for format in export_formats %}
                                                <li>
                                                    <a href=\"{{ admin.generateUrl('export', admin.datagrid.paginationparameters(0) + {'format' : format}) }}\">
                                                        <i class=\"fas fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        {{ (\"export_format_\" ~ format)|trans({}, 'SonataAdminBundle') }}
                                                    </a>
                                                </li>
                                                {% endfor %}
                                            </ul>
                                        </div>

                                        {% if block('pager_results') is not empty %}
                                            &nbsp;-&nbsp;
                                        {% endif %}
                                    {% endif %}

                                    {% block pager_results %}
                                        {% include get_admin_template('pager_results', admin.code) %}
                                    {% endblock %}
                                </div>
                            {% endif %}
                        </div>

                        {% block pager_links %}
                            {% if admin.datagrid.pager.haveToPaginate() %}
                                <hr/>
                                {% include get_admin_template('pager_links', admin.code) %}
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
        {% if admin.hasRoute('batch') and batchactions|length %}
            </form>
        {% endif %}
    </div>
{% endblock %}

{% block list_filters_actions %}
    {% set displayableFilters = admin.datagrid.filters|filter(filter => filter.option('show_filter') is not same as (false)) %}
    {%- if displayableFilters|length %}
        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fas fa-filter\" aria-hidden=\"true\"></i>
                    {{ 'link_filters'|trans({}, 'SonataAdminBundle') }}
                    <span class=\"badge sonata-filter-count\"></span>
                    <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu dropdown-menu-scrollable\" role=\"menu\">
                    {% for filter in displayableFilters %}
                        {% set filterDisplayed = filter.isActive() or filter.option('show_filter') is same as (true) %}
                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                <i class=\"far {{ filterDisplayed ? 'fa-check-square' : 'fa-square' }}\"></i>
                                {% if filter.label is not same as(false) %}
                                    {% if filter.translationDomain is same as(false) %}
                                        {{ filter.label }}
                                    {% else %}
                                        {{ filter.label|trans(filter.option('label_translation_parameters', {}), filter.translationDomain ?? admin.translationDomain) }}
                                    {% endif %}
                                {% endif %}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </li>
        </ul>
    {% endif -%}
{% endblock %}

{% block list_filters %}
    {% if admin.datagrid.filters %}
        {% form_theme form get_admin_template('filter', admin.code) %}

        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: {{ admin.datagrid.hasDisplayableFilters ? 'block' : 'none' }}\" id=\"filter-container-{{ admin.uniqid() }}\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form
                        class=\"sonata-filter-form form-horizontal {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}\"
                        action=\"{{ admin.generateUrl(action|default('list')) }}\"
                        method=\"GET\"
                        role=\"form\"
                        data-default-values=\"{{ admin.defaultFilterParameters|json_encode }}\"
                    >
                        {{ form_errors(form) }}

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                {% set withAdvancedFilter = false %}
                                {% for filter in admin.datagrid.filters %}
                                    {% set filterDisplayed = filter.isActive() or filter.option('show_filter') is same as (true) %}
                                    {% set filterCanBeDisplayed = filter.option('show_filter') is not same as(false) %}
                                    <div class=\"form-group {% block sonata_list_filter_group_class %}{% endblock %}\" id=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" sonata-filter=\"{{ filterCanBeDisplayed ? 'true' : 'false' }}\" style=\"display: {% if filterDisplayed %}block{% else %}none{% endif %}\">
                                        {% if filter.label is not same as(false) %}
                                            <label for=\"{{ form[filter.formName].children['value'].vars.id }}\" class=\"col-sm-3 control-label\">
                                                {% if filter.translationDomain is same as(false) %}
                                                    {{ filter.label }}
                                                {% else %}
                                                    {{ filter.label|trans(filter.option('label_translation_parameters', {}), filter.translationDomain ?? admin.translationDomain) }}
                                                {% endif %}
                                            </label>
                                        {% endif %}
                                        {% set attr = form[filter.formName].children['type'].vars.attr|default({}) %}

                                        <div class=\"col-sm-4 advanced-filter\">
                                            {{ form_widget(form[filter.formName].children['type'], {'attr':  attr}) }}
                                        </div>

                                        <div class=\"col-sm-4\">
                                            {{ form_widget(form[filter.formName].children['value']) }}
                                        </div>

                                        {% if filterCanBeDisplayed %}
                                            <div class=\"col-sm-1\">
                                                <label class=\"control-label\">
                                                    <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                                        <i class=\"fas fa-minus-circle\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </label>
                                            </div>
                                        {% endif %}
                                    </div>

                                    {% if filter.option('advanced_filter') %}
                                        {% set withAdvancedFilter = true %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[{{ constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::PAGE') }}]\" id=\"filter__page\" value=\"1\">

                                {% set foo = form[constant('Sonata\\\\AdminBundle\\\\Datagrid\\\\DatagridInterface::PAGE')].setRendered() %}
                                {{ form_rest(form) }}

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-filter\" aria-hidden=\"true\"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}
                                    </button>

                                    <a class=\"btn btn-default\" href=\"{{ admin.generateUrl(action|default('list'), {filters: 'reset'}) }}\">
                                        {{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}
                                    </a>
                                </div>

                                {% if withAdvancedFilter %}
                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fas fa-cogs\" aria-hidden=\"true\"></i>
                                            {{ 'btn_advanced_filters'|trans({}, 'SonataAdminBundle') }}
                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        {% for paramKey, paramValue in admin.persistentParameters %}
                            <input type=\"hidden\" name=\"{{ paramKey }}\" value=\"{{ paramValue }}\">
                        {% endfor %}
                    </form>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/base_list.html.twig", "/var/www/html/TestSite/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_list.html.twig");
    }
}
