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

/* Author/main.html.twig */
class __TwigTemplate_7100368a9f0775140919f049787af800 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'name' => [$this, 'block_name'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Author/main.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Author/main.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Author/main.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        echo "Author index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-10\">
                <h1>Author</h1>
                <div class=\"row\">
                    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAuthor"]) || array_key_exists("formAuthor", $context) ? $context["formAuthor"] : (function () { throw new RuntimeError('Variable "formAuthor" does not exist.', 11, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addAuthor"), "method" => "POST"]);
        echo "
                    <div class=\"col-6\">
                        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formAuthor"]) || array_key_exists("formAuthor", $context) ? $context["formAuthor"] : (function () { throw new RuntimeError('Variable "formAuthor" does not exist.', 13, $this->source); })()), 'widget');
        echo "
                    </div>
                    <button type=\"submit\" class=\"btn btn-success\"><i class=\"fas fa-plus\"></i></button>
                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAuthor"]) || array_key_exists("formAuthor", $context) ? $context["formAuthor"] : (function () { throw new RuntimeError('Variable "formAuthor" does not exist.', 16, $this->source); })()), 'form_end');
        echo "
                </div>

                <table class=\"table\">
                    <tbody>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 22
            echo "                        <tr>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                            <td>
                                <form method=\"post\" action=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                    <button class=\"btn btn-primary\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                        <tr>
                            <td colspan=\"3\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </tbody>
                </table>
            </div>

            <br>
            <br>
            <br>

            <div class=\"col-2\">

                <h1>Book</h1>

                ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBook"]) || array_key_exists("formBook", $context) ? $context["formBook"] : (function () { throw new RuntimeError('Variable "formBook" does not exist.', 49, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addBook"), "method" => "POST"]);
        echo "
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formBook"]) || array_key_exists("formBook", $context) ? $context["formBook"] : (function () { throw new RuntimeError('Variable "formBook" does not exist.', 50, $this->source); })()), 'widget');
        echo "
                <button type=\"submit\" class=\"btn btn-success\"><i class=\"fas fa-plus\"></i></button>
                ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBook"]) || array_key_exists("formBook", $context) ? $context["formBook"] : (function () { throw new RuntimeError('Variable "formBook" does not exist.', 52, $this->source); })()), 'form_end');
        echo "

                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>publication Date</th>
                        <th>Image</th>
                        <th>Authors</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 65, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 66
            echo "                        <tr>
                            <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                            <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                            <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "publicationDate", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                            <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "Image", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                            <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "Authors", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                            <td>
                                <form method=\"post\" action=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                    <button class=\"btn btn-primary\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            echo "                        <tr>
                            <td colspan=\"4\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                    </tbody>
                </table>

            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Author/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 85,  230 => 81,  217 => 73,  212 => 71,  208 => 70,  204 => 69,  200 => 68,  196 => 67,  193 => 66,  188 => 65,  172 => 52,  167 => 50,  163 => 49,  149 => 37,  140 => 33,  127 => 25,  122 => 23,  119 => 22,  114 => 21,  106 => 16,  100 => 13,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block name %}Author index{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-10\">
                <h1>Author</h1>
                <div class=\"row\">
                    {{ form_start(formAuthor, {'action': path('addAuthor'), 'method': 'POST'}) }}
                    <div class=\"col-6\">
                        {{ form_widget(formAuthor) }}
                    </div>
                    <button type=\"submit\" class=\"btn btn-success\"><i class=\"fas fa-plus\"></i></button>
                    {{ form_end(formAuthor) }}
                </div>

                <table class=\"table\">
                    <tbody>
                    {% for author in authors %}
                        <tr>
                            <td>{{ author.name }}</td>
                            <td>
                                <form method=\"post\" action=\"{{ path('author_delete', {'id': author.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                    <button class=\"btn btn-primary\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"3\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>

            <br>
            <br>
            <br>

            <div class=\"col-2\">

                <h1>Book</h1>

                {{ form_start(formBook, {'action': path('addBook'), 'method': 'POST'}) }}
                {{ form_widget(formBook) }}
                <button type=\"submit\" class=\"btn btn-success\"><i class=\"fas fa-plus\"></i></button>
                {{ form_end(formBook) }}

                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>publication Date</th>
                        <th>Image</th>
                        <th>Authors</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for book in books %}
                        <tr>
                            <td>{{ book.title }}</td>
                            <td>{{ book.description}}</td>
                            <td>{{ book.publicationDate}}</td>
                            <td>{{ book.Image}}</td>
                            <td>{{ book.Authors}}</td>
                            <td>
                                <form method=\"post\" action=\"{{ path('book_delete', {'id': book.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                    <button class=\"btn btn-primary\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>

            </div>
        </div>
    </div>

{% endblock %}", "Author/main.html.twig", "/var/www/html/TestSite/templates/Author/main.html.twig");
    }
}
