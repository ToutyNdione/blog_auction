<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_d35fb84808e83523a4be9b384f8b0ec36731e71c63100db6977947eaa0f61cc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 2);
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
        $__internal_30bedfd1653c0de919f61f450a9def4a6e21d2199bfa4bf79acfe7ca28d1efd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30bedfd1653c0de919f61f450a9def4a6e21d2199bfa4bf79acfe7ca28d1efd9->enter($__internal_30bedfd1653c0de919f61f450a9def4a6e21d2199bfa4bf79acfe7ca28d1efd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_25fa2d0169f217f105e011fb9493ebfb60d4234ccc05d2ca7375d85ab64c889b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25fa2d0169f217f105e011fb9493ebfb60d4234ccc05d2ca7375d85ab64c889b->enter($__internal_25fa2d0169f217f105e011fb9493ebfb60d4234ccc05d2ca7375d85ab64c889b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30bedfd1653c0de919f61f450a9def4a6e21d2199bfa4bf79acfe7ca28d1efd9->leave($__internal_30bedfd1653c0de919f61f450a9def4a6e21d2199bfa4bf79acfe7ca28d1efd9_prof);

        
        $__internal_25fa2d0169f217f105e011fb9493ebfb60d4234ccc05d2ca7375d85ab64c889b->leave($__internal_25fa2d0169f217f105e011fb9493ebfb60d4234ccc05d2ca7375d85ab64c889b_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_79dd4f57d2a52bbcf5c594aea5ce90bb7a703fbe6cc1d1953c1c063ea8f24b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79dd4f57d2a52bbcf5c594aea5ce90bb7a703fbe6cc1d1953c1c063ea8f24b07->enter($__internal_79dd4f57d2a52bbcf5c594aea5ce90bb7a703fbe6cc1d1953c1c063ea8f24b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6122021ae27c50cf81caee8ce72122678cbde18c69fea21185594627780c7136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6122021ae27c50cf81caee8ce72122678cbde18c69fea21185594627780c7136->enter($__internal_6122021ae27c50cf81caee8ce72122678cbde18c69fea21185594627780c7136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 5)->display($context);
        
        $__internal_6122021ae27c50cf81caee8ce72122678cbde18c69fea21185594627780c7136->leave($__internal_6122021ae27c50cf81caee8ce72122678cbde18c69fea21185594627780c7136_prof);

        
        $__internal_79dd4f57d2a52bbcf5c594aea5ce90bb7a703fbe6cc1d1953c1c063ea8f24b07->leave($__internal_79dd4f57d2a52bbcf5c594aea5ce90bb7a703fbe6cc1d1953c1c063ea8f24b07_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
