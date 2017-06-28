<?php

/* category/edit.html.twig */
class __TwigTemplate_9cbe86df54886858155613b1db96a348b6b6cc1516fa7039a9e9597397de3e40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/edit.html.twig", 1);
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
        $__internal_da79e60a692a78570902b8b85044de77831cede85a91813b50b7f9657736d48a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da79e60a692a78570902b8b85044de77831cede85a91813b50b7f9657736d48a->enter($__internal_da79e60a692a78570902b8b85044de77831cede85a91813b50b7f9657736d48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/edit.html.twig"));

        $__internal_40af6ed4457446fcb72d6f7199b7483dd1e06e094510be24f8cc4a69ec6c1049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40af6ed4457446fcb72d6f7199b7483dd1e06e094510be24f8cc4a69ec6c1049->enter($__internal_40af6ed4457446fcb72d6f7199b7483dd1e06e094510be24f8cc4a69ec6c1049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da79e60a692a78570902b8b85044de77831cede85a91813b50b7f9657736d48a->leave($__internal_da79e60a692a78570902b8b85044de77831cede85a91813b50b7f9657736d48a_prof);

        
        $__internal_40af6ed4457446fcb72d6f7199b7483dd1e06e094510be24f8cc4a69ec6c1049->leave($__internal_40af6ed4457446fcb72d6f7199b7483dd1e06e094510be24f8cc4a69ec6c1049_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b15f254cb129855089f11053b1e8dc68c50f5df5e61971b9e27632b54e14709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b15f254cb129855089f11053b1e8dc68c50f5df5e61971b9e27632b54e14709->enter($__internal_3b15f254cb129855089f11053b1e8dc68c50f5df5e61971b9e27632b54e14709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f986ab3e40cfc1da39477afc169b4e6eb877c445de17684ca7d1a24b2b3d5a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f986ab3e40cfc1da39477afc169b4e6eb877c445de17684ca7d1a24b2b3d5a2d->enter($__internal_f986ab3e40cfc1da39477afc169b4e6eb877c445de17684ca7d1a24b2b3d5a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f986ab3e40cfc1da39477afc169b4e6eb877c445de17684ca7d1a24b2b3d5a2d->leave($__internal_f986ab3e40cfc1da39477afc169b4e6eb877c445de17684ca7d1a24b2b3d5a2d_prof);

        
        $__internal_3b15f254cb129855089f11053b1e8dc68c50f5df5e61971b9e27632b54e14709->leave($__internal_3b15f254cb129855089f11053b1e8dc68c50f5df5e61971b9e27632b54e14709_prof);

    }

    public function getTemplateName()
    {
        return "category/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Category edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "category/edit.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/app/Resources/views/category/edit.html.twig");
    }
}
