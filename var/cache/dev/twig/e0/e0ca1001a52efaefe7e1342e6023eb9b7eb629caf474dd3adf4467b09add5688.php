<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f3ac73347d319ccae53df041b8eae05809aeca13388d46cb3010f949a1bc7300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb6734672de38fe85278cbf8ae9d0c2d30bba74915575d2bfd6a5d33c77af845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb6734672de38fe85278cbf8ae9d0c2d30bba74915575d2bfd6a5d33c77af845->enter($__internal_bb6734672de38fe85278cbf8ae9d0c2d30bba74915575d2bfd6a5d33c77af845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ba619d5f8470a10795a99908c5ad0674f0c8f0f001edea19fe21e4f329b92919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba619d5f8470a10795a99908c5ad0674f0c8f0f001edea19fe21e4f329b92919->enter($__internal_ba619d5f8470a10795a99908c5ad0674f0c8f0f001edea19fe21e4f329b92919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb6734672de38fe85278cbf8ae9d0c2d30bba74915575d2bfd6a5d33c77af845->leave($__internal_bb6734672de38fe85278cbf8ae9d0c2d30bba74915575d2bfd6a5d33c77af845_prof);

        
        $__internal_ba619d5f8470a10795a99908c5ad0674f0c8f0f001edea19fe21e4f329b92919->leave($__internal_ba619d5f8470a10795a99908c5ad0674f0c8f0f001edea19fe21e4f329b92919_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_37122cb12461c4aff90b6a535bdce67753049a54c70e5cb99cf08954bb237d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37122cb12461c4aff90b6a535bdce67753049a54c70e5cb99cf08954bb237d75->enter($__internal_37122cb12461c4aff90b6a535bdce67753049a54c70e5cb99cf08954bb237d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fe481cae4f75de04e333ab26c7c61a98115cac4a36472d894d75d0509a4460f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe481cae4f75de04e333ab26c7c61a98115cac4a36472d894d75d0509a4460f7->enter($__internal_fe481cae4f75de04e333ab26c7c61a98115cac4a36472d894d75d0509a4460f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fe481cae4f75de04e333ab26c7c61a98115cac4a36472d894d75d0509a4460f7->leave($__internal_fe481cae4f75de04e333ab26c7c61a98115cac4a36472d894d75d0509a4460f7_prof);

        
        $__internal_37122cb12461c4aff90b6a535bdce67753049a54c70e5cb99cf08954bb237d75->leave($__internal_37122cb12461c4aff90b6a535bdce67753049a54c70e5cb99cf08954bb237d75_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d33a454b585c3c4b5dee7e48703fcd433476da1dfee969c594fa9d69c237d7db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33a454b585c3c4b5dee7e48703fcd433476da1dfee969c594fa9d69c237d7db->enter($__internal_d33a454b585c3c4b5dee7e48703fcd433476da1dfee969c594fa9d69c237d7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_adad6578eea53c0f087e7093b8b80a83e17d9bc34ac1e58da557c7810476410d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adad6578eea53c0f087e7093b8b80a83e17d9bc34ac1e58da557c7810476410d->enter($__internal_adad6578eea53c0f087e7093b8b80a83e17d9bc34ac1e58da557c7810476410d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_adad6578eea53c0f087e7093b8b80a83e17d9bc34ac1e58da557c7810476410d->leave($__internal_adad6578eea53c0f087e7093b8b80a83e17d9bc34ac1e58da557c7810476410d_prof);

        
        $__internal_d33a454b585c3c4b5dee7e48703fcd433476da1dfee969c594fa9d69c237d7db->leave($__internal_d33a454b585c3c4b5dee7e48703fcd433476da1dfee969c594fa9d69c237d7db_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b23bd6e2dac35b6024ec5a84254e54377b484bec60eecc9dfe4483d253eb26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b23bd6e2dac35b6024ec5a84254e54377b484bec60eecc9dfe4483d253eb26d->enter($__internal_7b23bd6e2dac35b6024ec5a84254e54377b484bec60eecc9dfe4483d253eb26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a68e3898736b7522971093e40e13dc3ad2f07df8b20626ceee6f81bb4077fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a68e3898736b7522971093e40e13dc3ad2f07df8b20626ceee6f81bb4077fb9->enter($__internal_0a68e3898736b7522971093e40e13dc3ad2f07df8b20626ceee6f81bb4077fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_0a68e3898736b7522971093e40e13dc3ad2f07df8b20626ceee6f81bb4077fb9->leave($__internal_0a68e3898736b7522971093e40e13dc3ad2f07df8b20626ceee6f81bb4077fb9_prof);

        
        $__internal_7b23bd6e2dac35b6024ec5a84254e54377b484bec60eecc9dfe4483d253eb26d->leave($__internal_7b23bd6e2dac35b6024ec5a84254e54377b484bec60eecc9dfe4483d253eb26d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
