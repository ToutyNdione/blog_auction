<?php

/* category/new.html.twig */
class __TwigTemplate_e20b4ebbf47e534daee78c15701bfea3bd526cdcc59cd2cb03aa7028fd725606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/new.html.twig", 1);
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
        $__internal_86b2c57f4cf29d3f8b61305f758be9f0a1f9a3917faf811749646e934c27ab3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b2c57f4cf29d3f8b61305f758be9f0a1f9a3917faf811749646e934c27ab3e->enter($__internal_86b2c57f4cf29d3f8b61305f758be9f0a1f9a3917faf811749646e934c27ab3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/new.html.twig"));

        $__internal_f7ca88a254e721455e606636a5d91ae55c940bc6f1cc0d8ca716cef0928e82fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ca88a254e721455e606636a5d91ae55c940bc6f1cc0d8ca716cef0928e82fd->enter($__internal_f7ca88a254e721455e606636a5d91ae55c940bc6f1cc0d8ca716cef0928e82fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86b2c57f4cf29d3f8b61305f758be9f0a1f9a3917faf811749646e934c27ab3e->leave($__internal_86b2c57f4cf29d3f8b61305f758be9f0a1f9a3917faf811749646e934c27ab3e_prof);

        
        $__internal_f7ca88a254e721455e606636a5d91ae55c940bc6f1cc0d8ca716cef0928e82fd->leave($__internal_f7ca88a254e721455e606636a5d91ae55c940bc6f1cc0d8ca716cef0928e82fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6173fba1a40a156822dda33d7bf77fd8055401756391de219c1f44cdaafb2450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6173fba1a40a156822dda33d7bf77fd8055401756391de219c1f44cdaafb2450->enter($__internal_6173fba1a40a156822dda33d7bf77fd8055401756391de219c1f44cdaafb2450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95b084fd230b1102f73253e79075dd2f09c0836f1e5f451ccf9829a1da5947e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b084fd230b1102f73253e79075dd2f09c0836f1e5f451ccf9829a1da5947e7->enter($__internal_95b084fd230b1102f73253e79075dd2f09c0836f1e5f451ccf9829a1da5947e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_95b084fd230b1102f73253e79075dd2f09c0836f1e5f451ccf9829a1da5947e7->leave($__internal_95b084fd230b1102f73253e79075dd2f09c0836f1e5f451ccf9829a1da5947e7_prof);

        
        $__internal_6173fba1a40a156822dda33d7bf77fd8055401756391de219c1f44cdaafb2450->leave($__internal_6173fba1a40a156822dda33d7bf77fd8055401756391de219c1f44cdaafb2450_prof);

    }

    public function getTemplateName()
    {
        return "category/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Category creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "category/new.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/app/Resources/views/category/new.html.twig");
    }
}
