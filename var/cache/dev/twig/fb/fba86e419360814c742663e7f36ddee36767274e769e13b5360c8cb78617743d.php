<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_8dfc7798f9a23c21f4a3772fdf752e3da74365806236ee2a825dc2dbe6eb88fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c4dc8768539f71923a279c292129571e2c33d51de699242d98e49994bf658ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c4dc8768539f71923a279c292129571e2c33d51de699242d98e49994bf658ad->enter($__internal_0c4dc8768539f71923a279c292129571e2c33d51de699242d98e49994bf658ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_97ab41ba0884d9cee7c7843a5c90bf065389b819360d44826e4f7f6fa5d59cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ab41ba0884d9cee7c7843a5c90bf065389b819360d44826e4f7f6fa5d59cc4->enter($__internal_97ab41ba0884d9cee7c7843a5c90bf065389b819360d44826e4f7f6fa5d59cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_0c4dc8768539f71923a279c292129571e2c33d51de699242d98e49994bf658ad->leave($__internal_0c4dc8768539f71923a279c292129571e2c33d51de699242d98e49994bf658ad_prof);

        
        $__internal_97ab41ba0884d9cee7c7843a5c90bf065389b819360d44826e4f7f6fa5d59cc4->leave($__internal_97ab41ba0884d9cee7c7843a5c90bf065389b819360d44826e4f7f6fa5d59cc4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
