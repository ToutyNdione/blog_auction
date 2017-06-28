<?php

/* product/show.html.twig */
class __TwigTemplate_1a3cef3ad9550492b162f04c7053bb156cfc36fa77e9410020b7b3bdc92eb789 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
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
        $__internal_585b953cd0159a4d215a1640eba6835e5956187860c1d54aed582cc7e65b2af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585b953cd0159a4d215a1640eba6835e5956187860c1d54aed582cc7e65b2af0->enter($__internal_585b953cd0159a4d215a1640eba6835e5956187860c1d54aed582cc7e65b2af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_3efef5356bba3fce4e2c01b78c1dfc55b82416c8cbf028b13cd07c1e882cbf44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3efef5356bba3fce4e2c01b78c1dfc55b82416c8cbf028b13cd07c1e882cbf44->enter($__internal_3efef5356bba3fce4e2c01b78c1dfc55b82416c8cbf028b13cd07c1e882cbf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_585b953cd0159a4d215a1640eba6835e5956187860c1d54aed582cc7e65b2af0->leave($__internal_585b953cd0159a4d215a1640eba6835e5956187860c1d54aed582cc7e65b2af0_prof);

        
        $__internal_3efef5356bba3fce4e2c01b78c1dfc55b82416c8cbf028b13cd07c1e882cbf44->leave($__internal_3efef5356bba3fce4e2c01b78c1dfc55b82416c8cbf028b13cd07c1e882cbf44_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a053b47f13ad6b668455dea9c361f45fe31c747d464daae5e0b366c62d644958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a053b47f13ad6b668455dea9c361f45fe31c747d464daae5e0b366c62d644958->enter($__internal_a053b47f13ad6b668455dea9c361f45fe31c747d464daae5e0b366c62d644958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5639e1ae43169a2d333dfc3bea452f9dca51e1e870faa1e115d07cff1c611bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5639e1ae43169a2d333dfc3bea452f9dca51e1e870faa1e115d07cff1c611bb->enter($__internal_f5639e1ae43169a2d333dfc3bea452f9dca51e1e870faa1e115d07cff1c611bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 14, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 18, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 22, $this->getSourceContext()); })()), "price", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 26, $this->getSourceContext()); })()), "category", array()), "name", array()), "html", null, true);
        echo "</td>
            </tr>

        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 37, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 40, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 42, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f5639e1ae43169a2d333dfc3bea452f9dca51e1e870faa1e115d07cff1c611bb->leave($__internal_f5639e1ae43169a2d333dfc3bea452f9dca51e1e870faa1e115d07cff1c611bb_prof);

        
        $__internal_a053b47f13ad6b668455dea9c361f45fe31c747d464daae5e0b366c62d644958->leave($__internal_a053b47f13ad6b668455dea9c361f45fe31c747d464daae5e0b366c62d644958_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  108 => 40,  102 => 37,  96 => 34,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Product</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ product.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ product.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ product.description }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ product.price }}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{ product.category.name }}</td>
            </tr>

        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('product_edit', { 'id': product.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "product/show.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/app/Resources/views/product/show.html.twig");
    }
}
