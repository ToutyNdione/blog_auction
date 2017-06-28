<?php

/* product/new.html.twig */
class __TwigTemplate_3bd7fabaf4941aabd4ca11977d67d7a7697090b1a10fd351c350d6713860c399 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/new.html.twig", 1);
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
        $__internal_b6f3f7693f564947838543bfb151956f5b0c9de4e9245862b1b91d821d9e1204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f3f7693f564947838543bfb151956f5b0c9de4e9245862b1b91d821d9e1204->enter($__internal_b6f3f7693f564947838543bfb151956f5b0c9de4e9245862b1b91d821d9e1204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $__internal_26a88c42bb74679669a309f7a0459c21ff52ad5af4a503f61e9f292a29ef9ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a88c42bb74679669a309f7a0459c21ff52ad5af4a503f61e9f292a29ef9ced->enter($__internal_26a88c42bb74679669a309f7a0459c21ff52ad5af4a503f61e9f292a29ef9ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6f3f7693f564947838543bfb151956f5b0c9de4e9245862b1b91d821d9e1204->leave($__internal_b6f3f7693f564947838543bfb151956f5b0c9de4e9245862b1b91d821d9e1204_prof);

        
        $__internal_26a88c42bb74679669a309f7a0459c21ff52ad5af4a503f61e9f292a29ef9ced->leave($__internal_26a88c42bb74679669a309f7a0459c21ff52ad5af4a503f61e9f292a29ef9ced_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a15a14c1f8b9626ea8766f3bde0b7c99f61b7053ce0821cf39815c22ea548f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a15a14c1f8b9626ea8766f3bde0b7c99f61b7053ce0821cf39815c22ea548f6->enter($__internal_5a15a14c1f8b9626ea8766f3bde0b7c99f61b7053ce0821cf39815c22ea548f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_474ac76047398481cff2c5884334b95566c565d8c4ae934d5bb65de19081d93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474ac76047398481cff2c5884334b95566c565d8c4ae934d5bb65de19081d93c->enter($__internal_474ac76047398481cff2c5884334b95566c565d8c4ae934d5bb65de19081d93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_474ac76047398481cff2c5884334b95566c565d8c4ae934d5bb65de19081d93c->leave($__internal_474ac76047398481cff2c5884334b95566c565d8c4ae934d5bb65de19081d93c_prof);

        
        $__internal_5a15a14c1f8b9626ea8766f3bde0b7c99f61b7053ce0821cf39815c22ea548f6->leave($__internal_5a15a14c1f8b9626ea8766f3bde0b7c99f61b7053ce0821cf39815c22ea548f6_prof);

    }

    public function getTemplateName()
    {
        return "product/new.html.twig";
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
    <h1>Product creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "product/new.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/app/Resources/views/product/new.html.twig");
    }
}
