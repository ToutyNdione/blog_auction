<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_fae288b9c0045fb66053ffcc7f2044cfd71e68a8427566072046b597ddc4d44a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e1b1f2a59a7abd1151fb716dd7cb6095de707df801fb458414e3690c7a9724e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1b1f2a59a7abd1151fb716dd7cb6095de707df801fb458414e3690c7a9724e->enter($__internal_2e1b1f2a59a7abd1151fb716dd7cb6095de707df801fb458414e3690c7a9724e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_d1a598fa8ad313d8bd226f02f297c6f66ba2da81b7fad7f0b83c529da0cd3632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a598fa8ad313d8bd226f02f297c6f66ba2da81b7fad7f0b83c529da0cd3632->enter($__internal_d1a598fa8ad313d8bd226f02f297c6f66ba2da81b7fad7f0b83c529da0cd3632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e1b1f2a59a7abd1151fb716dd7cb6095de707df801fb458414e3690c7a9724e->leave($__internal_2e1b1f2a59a7abd1151fb716dd7cb6095de707df801fb458414e3690c7a9724e_prof);

        
        $__internal_d1a598fa8ad313d8bd226f02f297c6f66ba2da81b7fad7f0b83c529da0cd3632->leave($__internal_d1a598fa8ad313d8bd226f02f297c6f66ba2da81b7fad7f0b83c529da0cd3632_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53fa3af8ec6b743558148a0c65475796adfd4ded8c4a835b1f7bfd2159b6f3a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53fa3af8ec6b743558148a0c65475796adfd4ded8c4a835b1f7bfd2159b6f3a6->enter($__internal_53fa3af8ec6b743558148a0c65475796adfd4ded8c4a835b1f7bfd2159b6f3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3d8242623d20ad7ffa23f4f49d449f1c96f29b971945312778f65f72da7f572a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8242623d20ad7ffa23f4f49d449f1c96f29b971945312778f65f72da7f572a->enter($__internal_3d8242623d20ad7ffa23f4f49d449f1c96f29b971945312778f65f72da7f572a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_3d8242623d20ad7ffa23f4f49d449f1c96f29b971945312778f65f72da7f572a->leave($__internal_3d8242623d20ad7ffa23f4f49d449f1c96f29b971945312778f65f72da7f572a_prof);

        
        $__internal_53fa3af8ec6b743558148a0c65475796adfd4ded8c4a835b1f7bfd2159b6f3a6->leave($__internal_53fa3af8ec6b743558148a0c65475796adfd4ded8c4a835b1f7bfd2159b6f3a6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
