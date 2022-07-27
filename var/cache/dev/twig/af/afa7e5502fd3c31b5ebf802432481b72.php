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

/* @SonataAdmin/Core/dashboard.html.twig */
class __TwigTemplate_c1d931ef4ee3b8bad2b410bbf867a097 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 12, $this->source); })()), "@SonataAdmin/Core/dashboard.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/dashboard.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_dashboard", [], "SonataAdminBundle"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
    ";
        // line 18
        $context["has_left"] = false;
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 19, $this->source); })()), "left", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 20
            echo "        ";
            if (( !(isset($context["has_left"]) || array_key_exists("has_left", $context) ? $context["has_left"] : (function () { throw new RuntimeError('Variable "has_left" does not exist.', 20, $this->source); })()) && ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 20)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 20))))) {
                // line 21
                echo "            ";
                $context["has_left"] = true;
                // line 22
                echo "        ";
            }
            // line 23
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 25
        $context["has_center"] = false;
        // line 26
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 26, $this->source); })()), "center", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 27
            echo "        ";
            if (( !(isset($context["has_center"]) || array_key_exists("has_center", $context) ? $context["has_center"] : (function () { throw new RuntimeError('Variable "has_center" does not exist.', 27, $this->source); })()) && ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 27)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 27))))) {
                // line 28
                echo "            ";
                $context["has_center"] = true;
                // line 29
                echo "        ";
            }
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    ";
        // line 32
        $context["has_right"] = false;
        // line 33
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 33, $this->source); })()), "right", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 34
            echo "        ";
            if (( !(isset($context["has_right"]) || array_key_exists("has_right", $context) ? $context["has_right"] : (function () { throw new RuntimeError('Variable "has_right" does not exist.', 34, $this->source); })()) && ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 34)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 34))))) {
                // line 35
                echo "            ";
                $context["has_right"] = true;
                // line 36
                echo "        ";
            }
            // line 37
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
    ";
        // line 39
        $context["has_top"] = false;
        // line 40
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 40, $this->source); })()), "top", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 41
            echo "        ";
            if (( !(isset($context["has_top"]) || array_key_exists("has_top", $context) ? $context["has_top"] : (function () { throw new RuntimeError('Variable "has_top" does not exist.', 41, $this->source); })()) && ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 41)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 41))))) {
                // line 42
                echo "            ";
                $context["has_top"] = true;
                // line 43
                echo "        ";
            }
            // line 44
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
    ";
        // line 46
        $context["has_bottom"] = false;
        // line 47
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 47, $this->source); })()), "bottom", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 48
            echo "        ";
            if (( !(isset($context["has_bottom"]) || array_key_exists("has_bottom", $context) ? $context["has_bottom"] : (function () { throw new RuntimeError('Variable "has_bottom" does not exist.', 48, $this->source); })()) && ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 48)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 48))))) {
                // line 49
                echo "            ";
                $context["has_bottom"] = true;
                // line 50
                echo "        ";
            }
            // line 51
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
    ";
        // line 53
        echo $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.dashboard.top");
        echo "

    ";
        // line 55
        if ((isset($context["has_top"]) || array_key_exists("has_top", $context) ? $context["has_top"] : (function () { throw new RuntimeError('Variable "has_top" does not exist.', 55, $this->source); })())) {
            // line 56
            echo "        <div class=\"row\">
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 57, $this->source); })()), "top", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 58
                echo "                ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 58)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 58)))) {
                    // line 59
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "class", [], "any", false, false, false, 59), "html", null, true);
                    echo "\">
                        ";
                    // line 60
                    echo $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->render(["type" => twig_get_attribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 60), "settings" => twig_get_attribute($this->env, $this->source, $context["block"], "settings", [], "any", false, false, false, 60)]);
                    echo "
                    </div>
                ";
                }
                // line 63
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </div>
    ";
        }
        // line 66
        echo "
    <div class=\"row\">
        ";
        // line 68
        $context["width_left"] = 4;
        // line 69
        echo "        ";
        $context["width_right"] = 4;
        // line 70
        echo "        ";
        $context["width_center"] = 4;
        // line 71
        echo "
        ";
        // line 73
        echo "        ";
        if ( !(isset($context["has_center"]) || array_key_exists("has_center", $context) ? $context["has_center"] : (function () { throw new RuntimeError('Variable "has_center" does not exist.', 73, $this->source); })())) {
            // line 74
            echo "            ";
            $context["width_left"] = 6;
            // line 75
            echo "            ";
            $context["width_right"] = 6;
            // line 76
            echo "        ";
        }
        // line 77
        echo "
        ";
        // line 79
        echo "        ";
        if (( !(isset($context["has_left"]) || array_key_exists("has_left", $context) ? $context["has_left"] : (function () { throw new RuntimeError('Variable "has_left" does not exist.', 79, $this->source); })()) &&  !(isset($context["has_right"]) || array_key_exists("has_right", $context) ? $context["has_right"] : (function () { throw new RuntimeError('Variable "has_right" does not exist.', 79, $this->source); })()))) {
            // line 80
            echo "            ";
            $context["width_center"] = 12;
            // line 81
            echo "        ";
        }
        // line 82
        echo "
        ";
        // line 84
        echo "        ";
        if (((isset($context["has_left"]) || array_key_exists("has_left", $context) ? $context["has_left"] : (function () { throw new RuntimeError('Variable "has_left" does not exist.', 84, $this->source); })()) || (isset($context["has_right"]) || array_key_exists("has_right", $context) ? $context["has_right"] : (function () { throw new RuntimeError('Variable "has_right" does not exist.', 84, $this->source); })()))) {
            // line 85
            echo "        <div class=\"col-md-";
            echo twig_escape_filter($this->env, (isset($context["width_left"]) || array_key_exists("width_left", $context) ? $context["width_left"] : (function () { throw new RuntimeError('Variable "width_left" does not exist.', 85, $this->source); })()), "html", null, true);
            echo "\">
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 86, $this->source); })()), "left", [], "any", false, false, false, 86));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 87
                echo "                ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 87)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 87)))) {
                    // line 88
                    echo "                    ";
                    echo $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->render(["type" => twig_get_attribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 88), "settings" => twig_get_attribute($this->env, $this->source, $context["block"], "settings", [], "any", false, false, false, 88)]);
                    echo "
                ";
                }
                // line 90
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "        </div>
        ";
        }
        // line 93
        echo "
        ";
        // line 94
        if ((isset($context["has_center"]) || array_key_exists("has_center", $context) ? $context["has_center"] : (function () { throw new RuntimeError('Variable "has_center" does not exist.', 94, $this->source); })())) {
            // line 95
            echo "            <div class=\"col-md-";
            echo twig_escape_filter($this->env, (isset($context["width_center"]) || array_key_exists("width_center", $context) ? $context["width_center"] : (function () { throw new RuntimeError('Variable "width_center" does not exist.', 95, $this->source); })()), "html", null, true);
            echo "\">
                ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 96, $this->source); })()), "center", [], "any", false, false, false, 96));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 97
                echo "                    ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 97)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 97)))) {
                    // line 98
                    echo "                        ";
                    echo $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->render(["type" => twig_get_attribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 98), "settings" => twig_get_attribute($this->env, $this->source, $context["block"], "settings", [], "any", false, false, false, 98)]);
                    echo "
                    ";
                }
                // line 100
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "            </div>
        ";
        }
        // line 103
        echo "
        ";
        // line 105
        echo "        ";
        if (((isset($context["has_left"]) || array_key_exists("has_left", $context) ? $context["has_left"] : (function () { throw new RuntimeError('Variable "has_left" does not exist.', 105, $this->source); })()) || (isset($context["has_right"]) || array_key_exists("has_right", $context) ? $context["has_right"] : (function () { throw new RuntimeError('Variable "has_right" does not exist.', 105, $this->source); })()))) {
            // line 106
            echo "         <div class=\"col-md-";
            echo twig_escape_filter($this->env, (isset($context["width_right"]) || array_key_exists("width_right", $context) ? $context["width_right"] : (function () { throw new RuntimeError('Variable "width_right" does not exist.', 106, $this->source); })()), "html", null, true);
            echo "\">
            ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 107, $this->source); })()), "right", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 108
                echo "                ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 108)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 108)))) {
                    // line 109
                    echo "                    ";
                    echo $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->render(["type" => twig_get_attribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 109), "settings" => twig_get_attribute($this->env, $this->source, $context["block"], "settings", [], "any", false, false, false, 109)]);
                    echo "
                ";
                }
                // line 111
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "        </div>
        ";
        }
        // line 114
        echo "    </div>

    ";
        // line 116
        if ((isset($context["has_bottom"]) || array_key_exists("has_bottom", $context) ? $context["has_bottom"] : (function () { throw new RuntimeError('Variable "has_bottom" does not exist.', 116, $this->source); })())) {
            // line 117
            echo "        <div class=\"row\">
            ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 118, $this->source); })()), "bottom", [], "any", false, false, false, 118));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 119
                echo "                ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 119)) == 0) || $this->env->getRuntime('Sonata\AdminBundle\Twig\SecurityRuntime')->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 119)))) {
                    // line 120
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "class", [], "any", false, false, false, 120), "html", null, true);
                    echo "\">
                        ";
                    // line 121
                    echo $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->render(["type" => twig_get_attribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 121), "settings" => twig_get_attribute($this->env, $this->source, $context["block"], "settings", [], "any", false, false, false, 121)]);
                    echo "
                    </div>
                ";
                }
                // line 124
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "        </div>
    ";
        }
        // line 127
        echo "
    ";
        // line 128
        echo $this->env->getRuntime('Sonata\BlockBundle\Templating\Helper\BlockHelper')->renderEvent("sonata.admin.dashboard.bottom");
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 128,  449 => 127,  445 => 125,  439 => 124,  433 => 121,  428 => 120,  425 => 119,  421 => 118,  418 => 117,  416 => 116,  412 => 114,  408 => 112,  402 => 111,  396 => 109,  393 => 108,  389 => 107,  384 => 106,  381 => 105,  378 => 103,  374 => 101,  368 => 100,  362 => 98,  359 => 97,  355 => 96,  350 => 95,  348 => 94,  345 => 93,  341 => 91,  335 => 90,  329 => 88,  326 => 87,  322 => 86,  317 => 85,  314 => 84,  311 => 82,  308 => 81,  305 => 80,  302 => 79,  299 => 77,  296 => 76,  293 => 75,  290 => 74,  287 => 73,  284 => 71,  281 => 70,  278 => 69,  276 => 68,  272 => 66,  268 => 64,  262 => 63,  256 => 60,  251 => 59,  248 => 58,  244 => 57,  241 => 56,  239 => 55,  234 => 53,  231 => 52,  225 => 51,  222 => 50,  219 => 49,  216 => 48,  211 => 47,  209 => 46,  206 => 45,  200 => 44,  197 => 43,  194 => 42,  191 => 41,  186 => 40,  184 => 39,  181 => 38,  175 => 37,  172 => 36,  169 => 35,  166 => 34,  161 => 33,  159 => 32,  156 => 31,  150 => 30,  147 => 29,  144 => 28,  141 => 27,  136 => 26,  134 => 25,  131 => 24,  125 => 23,  122 => 22,  119 => 21,  116 => 20,  111 => 19,  109 => 18,  106 => 17,  96 => 16,  78 => 15,  59 => 14,  37 => 12,);
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

{% block title %}{{ 'title_dashboard'|trans({}, 'SonataAdminBundle') }}{% endblock %}
{% block breadcrumb %}{% endblock %}
{% block content %}

    {% set has_left = false %}
    {% for block in blocks.left %}
        {% if not has_left and (block.roles|length == 0 or is_granted_affirmative(block.roles)) %}
            {% set has_left = true %}
        {% endif %}
    {% endfor %}

    {% set has_center = false %}
    {% for block in blocks.center %}
        {% if not has_center and (block.roles|length == 0 or is_granted_affirmative(block.roles)) %}
            {% set has_center = true %}
        {% endif %}
    {% endfor %}

    {% set has_right = false %}
    {% for block in blocks.right %}
        {% if not has_right and (block.roles|length == 0 or is_granted_affirmative(block.roles)) %}
            {% set has_right = true %}
        {% endif %}
    {% endfor %}

    {% set has_top = false %}
    {% for block in blocks.top %}
        {% if not has_top and (block.roles|length == 0 or is_granted_affirmative(block.roles)) %}
            {% set has_top = true %}
        {% endif %}
    {% endfor %}

    {% set has_bottom = false %}
    {% for block in blocks.bottom %}
        {% if not has_bottom and (block.roles|length == 0 or is_granted_affirmative(block.roles)) %}
            {% set has_bottom = true %}
        {% endif %}
    {% endfor %}

    {{ sonata_block_render_event('sonata.admin.dashboard.top') }}

    {% if has_top %}
        <div class=\"row\">
            {% for block in blocks.top %}
                {% if block.roles|length == 0 or is_granted_affirmative(block.roles) %}
                    <div class=\"{{ block.class }}\">
                        {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}

    <div class=\"row\">
        {% set width_left = 4 %}
        {% set width_right = 4 %}
        {% set width_center = 4 %}

        {# if center block is not present we make left and right ones wider #}
        {% if not has_center %}
            {% set width_left = 6 %}
            {% set width_right = 6 %}
        {% endif %}

        {# if there is no right and left block present we make center one full width #}
        {% if not has_left and not has_right %}
            {% set width_center = 12 %}
        {% endif %}

        {# don't show left column if only center one is present #}
        {% if has_left or has_right %}
        <div class=\"col-md-{{ width_left }}\">
            {% for block in blocks.left %}
                {% if block.roles|length == 0 or is_granted_affirmative(block.roles) %}
                    {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                {% endif %}
            {% endfor %}
        </div>
        {% endif %}

        {% if has_center %}
            <div class=\"col-md-{{ width_center }}\">
                {% for block in blocks.center %}
                    {% if block.roles|length == 0 or is_granted_affirmative(block.roles) %}
                        {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                    {% endif %}
                {% endfor %}
            </div>
        {% endif %}

        {# don't show right column if only center one is present #}
        {% if has_left or has_right %}
         <div class=\"col-md-{{ width_right }}\">
            {% for block in blocks.right %}
                {% if block.roles|length == 0 or is_granted_affirmative(block.roles) %}
                    {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                {% endif %}
            {% endfor %}
        </div>
        {% endif %}
    </div>

    {% if has_bottom %}
        <div class=\"row\">
            {% for block in blocks.bottom %}
                {% if block.roles|length == 0 or is_granted_affirmative(block.roles) %}
                    <div class=\"{{ block.class }}\">
                        {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}

    {{ sonata_block_render_event('sonata.admin.dashboard.bottom') }}

{% endblock %}
", "@SonataAdmin/Core/dashboard.html.twig", "/var/www/html/TestSite/vendor/sonata-project/admin-bundle/src/Resources/views/Core/dashboard.html.twig");
    }
}
