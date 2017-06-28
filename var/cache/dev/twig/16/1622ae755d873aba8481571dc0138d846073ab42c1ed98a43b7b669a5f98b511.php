<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8560ee87e911bb71582f739f644b6b84c09e8f7fa3a5f89ad4a235c5c7fcd1bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_957a9a875b097b4a4a73b13f03c3c0057a0b2086cf7f0c94bec9e8617e28a8cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_957a9a875b097b4a4a73b13f03c3c0057a0b2086cf7f0c94bec9e8617e28a8cf->enter($__internal_957a9a875b097b4a4a73b13f03c3c0057a0b2086cf7f0c94bec9e8617e28a8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_79034390e2535dfc3b9140466ffcee8934cd4bb4490432ad921f848941e4b39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79034390e2535dfc3b9140466ffcee8934cd4bb4490432ad921f848941e4b39b->enter($__internal_79034390e2535dfc3b9140466ffcee8934cd4bb4490432ad921f848941e4b39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_957a9a875b097b4a4a73b13f03c3c0057a0b2086cf7f0c94bec9e8617e28a8cf->leave($__internal_957a9a875b097b4a4a73b13f03c3c0057a0b2086cf7f0c94bec9e8617e28a8cf_prof);

        
        $__internal_79034390e2535dfc3b9140466ffcee8934cd4bb4490432ad921f848941e4b39b->leave($__internal_79034390e2535dfc3b9140466ffcee8934cd4bb4490432ad921f848941e4b39b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_262f172ce25370c17acd4ec770a59fcf53deea5a7f8e9f53a1e408216b585152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262f172ce25370c17acd4ec770a59fcf53deea5a7f8e9f53a1e408216b585152->enter($__internal_262f172ce25370c17acd4ec770a59fcf53deea5a7f8e9f53a1e408216b585152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2d5097c1bbedb812402e4eb55454a5b0efe1772347d17b396c27c5fbd077d4c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5097c1bbedb812402e4eb55454a5b0efe1772347d17b396c27c5fbd077d4c4->enter($__internal_2d5097c1bbedb812402e4eb55454a5b0efe1772347d17b396c27c5fbd077d4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2d5097c1bbedb812402e4eb55454a5b0efe1772347d17b396c27c5fbd077d4c4->leave($__internal_2d5097c1bbedb812402e4eb55454a5b0efe1772347d17b396c27c5fbd077d4c4_prof);

        
        $__internal_262f172ce25370c17acd4ec770a59fcf53deea5a7f8e9f53a1e408216b585152->leave($__internal_262f172ce25370c17acd4ec770a59fcf53deea5a7f8e9f53a1e408216b585152_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
