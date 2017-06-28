<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_204398aec9ac16d72bce52d521af8dc0dff54351e00318a56618dc2a97a55e9b extends Twig_Template
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
        $__internal_b5576831a673f82c9bced45b6b17caa720c638b4194db3ae7b1aac6c0fe7fb01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5576831a673f82c9bced45b6b17caa720c638b4194db3ae7b1aac6c0fe7fb01->enter($__internal_b5576831a673f82c9bced45b6b17caa720c638b4194db3ae7b1aac6c0fe7fb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_4a6a62bf5628aea4a5df757bb5cc718938b3a646f7e179da99304f70b507fa24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a6a62bf5628aea4a5df757bb5cc718938b3a646f7e179da99304f70b507fa24->enter($__internal_4a6a62bf5628aea4a5df757bb5cc718938b3a646f7e179da99304f70b507fa24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_b5576831a673f82c9bced45b6b17caa720c638b4194db3ae7b1aac6c0fe7fb01->leave($__internal_b5576831a673f82c9bced45b6b17caa720c638b4194db3ae7b1aac6c0fe7fb01_prof);

        
        $__internal_4a6a62bf5628aea4a5df757bb5cc718938b3a646f7e179da99304f70b507fa24->leave($__internal_4a6a62bf5628aea4a5df757bb5cc718938b3a646f7e179da99304f70b507fa24_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
