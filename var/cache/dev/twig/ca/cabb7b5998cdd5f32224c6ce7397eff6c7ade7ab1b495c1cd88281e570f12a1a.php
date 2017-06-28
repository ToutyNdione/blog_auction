<?php

/* category/index.html.twig */
class __TwigTemplate_a621328e5d230398c4e4f6dfe2adef1b80949eff1acd87660358981b21f4d6f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
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
        $__internal_bf66b2950d103b8b889729fb03f1cc7bf486ffa0e1b620af52949b70b8d0a160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf66b2950d103b8b889729fb03f1cc7bf486ffa0e1b620af52949b70b8d0a160->enter($__internal_bf66b2950d103b8b889729fb03f1cc7bf486ffa0e1b620af52949b70b8d0a160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_70e0fb7412293efca8a82e65307ad650f940d8208a9b4dabbfd5845ba709a2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e0fb7412293efca8a82e65307ad650f940d8208a9b4dabbfd5845ba709a2e5->enter($__internal_70e0fb7412293efca8a82e65307ad650f940d8208a9b4dabbfd5845ba709a2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf66b2950d103b8b889729fb03f1cc7bf486ffa0e1b620af52949b70b8d0a160->leave($__internal_bf66b2950d103b8b889729fb03f1cc7bf486ffa0e1b620af52949b70b8d0a160_prof);

        
        $__internal_70e0fb7412293efca8a82e65307ad650f940d8208a9b4dabbfd5845ba709a2e5->leave($__internal_70e0fb7412293efca8a82e65307ad650f940d8208a9b4dabbfd5845ba709a2e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c27a29e468bf9e7f4dc6472897fb6e917f01fa85ffd04004131c511a19d48bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27a29e468bf9e7f4dc6472897fb6e917f01fa85ffd04004131c511a19d48bc0->enter($__internal_c27a29e468bf9e7f4dc6472897fb6e917f01fa85ffd04004131c511a19d48bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eee57763801690ca4296556c85548e7bd5cf996d99cadf542146fa166d45c8bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee57763801690ca4296556c85548e7bd5cf996d99cadf542146fa166d45c8bf->enter($__internal_eee57763801690ca4296556c85548e7bd5cf996d99cadf542146fa166d45c8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categories list</h1>

    <table class=\"table table-hover table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
         ";
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "
                <th>Actions</th>
                ";
        }
        // line 15
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "</td>
         ";
            // line 22
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 23
                echo "
                <td>
                    <ul>
                        <li>
                            <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()))), "html", null, true);
                echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                        </li>
                    </ul>
                </td>
                ";
            }
            // line 35
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_new");
        echo "\">Create a new category</a>
        </li>
    </ul>
";
        
        $__internal_eee57763801690ca4296556c85548e7bd5cf996d99cadf542146fa166d45c8bf->leave($__internal_eee57763801690ca4296556c85548e7bd5cf996d99cadf542146fa166d45c8bf_prof);

        
        $__internal_c27a29e468bf9e7f4dc6472897fb6e917f01fa85ffd04004131c511a19d48bc0->leave($__internal_c27a29e468bf9e7f4dc6472897fb6e917f01fa85ffd04004131c511a19d48bc0_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 42,  116 => 37,  109 => 35,  101 => 30,  95 => 27,  89 => 23,  87 => 22,  83 => 21,  77 => 20,  74 => 19,  70 => 18,  65 => 15,  60 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Categories list</h1>

    <table class=\"table table-hover table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
         {% if is_granted('ROLE_ADMIN') %}

                <th>Actions</th>
                {%endif%}
            </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            <tr>
                <td><a href=\"{{ path('category_show', { 'id': category.id }) }}\">{{ category.id }}</a></td>
                <td>{{ category.name }}</td>
         {% if is_granted('ROLE_ADMIN') %}

                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('category_show', { 'id': category.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('category_edit', { 'id': category.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
                {%endif%}
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('category_new') }}\">Create a new category</a>
        </li>
    </ul>
{% endblock %}
", "category/index.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/app/Resources/views/category/index.html.twig");
    }
}
