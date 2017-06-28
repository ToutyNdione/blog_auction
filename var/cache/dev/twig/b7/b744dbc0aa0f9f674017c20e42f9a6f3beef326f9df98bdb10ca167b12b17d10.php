<?php

/* category/show.html.twig */
class __TwigTemplate_0c35cdb171fe30eff782f496e0e5c9423811596b1b70f70637aeef08bf4388d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86cc1d50d0ee00b5acf230c012487e633af42fe2aa96b061dcd363cd68159a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86cc1d50d0ee00b5acf230c012487e633af42fe2aa96b061dcd363cd68159a6b->enter($__internal_86cc1d50d0ee00b5acf230c012487e633af42fe2aa96b061dcd363cd68159a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/show.html.twig"));

        $__internal_8e3185562c33e24c779dd6992837347c4840a88e5aa17733232a63246e6b06e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3185562c33e24c779dd6992837347c4840a88e5aa17733232a63246e6b06e2->enter($__internal_8e3185562c33e24c779dd6992837347c4840a88e5aa17733232a63246e6b06e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86cc1d50d0ee00b5acf230c012487e633af42fe2aa96b061dcd363cd68159a6b->leave($__internal_86cc1d50d0ee00b5acf230c012487e633af42fe2aa96b061dcd363cd68159a6b_prof);

        
        $__internal_8e3185562c33e24c779dd6992837347c4840a88e5aa17733232a63246e6b06e2->leave($__internal_8e3185562c33e24c779dd6992837347c4840a88e5aa17733232a63246e6b06e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c17be6fc4b280d7b08a7bf468b37d5aaed8008f00fc5f7e2280ab1a244b6fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c17be6fc4b280d7b08a7bf468b37d5aaed8008f00fc5f7e2280ab1a244b6fcc->enter($__internal_6c17be6fc4b280d7b08a7bf468b37d5aaed8008f00fc5f7e2280ab1a244b6fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5154f3a47671e587b966f8a5d335117abf07cbcc2099db6e4c5f8aeb05bf6db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5154f3a47671e587b966f8a5d335117abf07cbcc2099db6e4c5f8aeb05bf6db4->enter($__internal_5154f3a47671e587b966f8a5d335117abf07cbcc2099db6e4c5f8aeb05bf6db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 14, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 24, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 27, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 29, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5154f3a47671e587b966f8a5d335117abf07cbcc2099db6e4c5f8aeb05bf6db4->leave($__internal_5154f3a47671e587b966f8a5d335117abf07cbcc2099db6e4c5f8aeb05bf6db4_prof);

        
        $__internal_6c17be6fc4b280d7b08a7bf468b37d5aaed8008f00fc5f7e2280ab1a244b6fcc->leave($__internal_6c17be6fc4b280d7b08a7bf468b37d5aaed8008f00fc5f7e2280ab1a244b6fcc_prof);

    }

    public function getTemplateName()
    {
        return "category/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Category</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ category.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ category.name }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('category_edit', { 'id': category.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "category/show.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/app/Resources/views/category/show.html.twig");
    }
}
