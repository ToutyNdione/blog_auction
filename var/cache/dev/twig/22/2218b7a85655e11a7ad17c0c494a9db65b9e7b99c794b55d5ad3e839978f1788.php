<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0dafac8bc18c56d33d50301d9f8c1bb10066cfc38eef3b3ed0084fecf6f10855 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_582ded7dddf3a530666fcf548e70efc0187a0e14e3273f4b2d8420ac21ae9071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_582ded7dddf3a530666fcf548e70efc0187a0e14e3273f4b2d8420ac21ae9071->enter($__internal_582ded7dddf3a530666fcf548e70efc0187a0e14e3273f4b2d8420ac21ae9071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_245d7ec628fbbc9adea1dc039e17e12a3491cbb544dc529c9b3f5a1c23b311b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245d7ec628fbbc9adea1dc039e17e12a3491cbb544dc529c9b3f5a1c23b311b3->enter($__internal_245d7ec628fbbc9adea1dc039e17e12a3491cbb544dc529c9b3f5a1c23b311b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_582ded7dddf3a530666fcf548e70efc0187a0e14e3273f4b2d8420ac21ae9071->leave($__internal_582ded7dddf3a530666fcf548e70efc0187a0e14e3273f4b2d8420ac21ae9071_prof);

        
        $__internal_245d7ec628fbbc9adea1dc039e17e12a3491cbb544dc529c9b3f5a1c23b311b3->leave($__internal_245d7ec628fbbc9adea1dc039e17e12a3491cbb544dc529c9b3f5a1c23b311b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_18b2d0b55e7cd33f3d8e4c8e47e9d9c2960646a8ca6ac683de7219784fa95d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b2d0b55e7cd33f3d8e4c8e47e9d9c2960646a8ca6ac683de7219784fa95d53->enter($__internal_18b2d0b55e7cd33f3d8e4c8e47e9d9c2960646a8ca6ac683de7219784fa95d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f3ac4a2b9955647b9515b08f671820362befac24f74533dc6a64fabc5300868a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ac4a2b9955647b9515b08f671820362befac24f74533dc6a64fabc5300868a->enter($__internal_f3ac4a2b9955647b9515b08f671820362befac24f74533dc6a64fabc5300868a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f3ac4a2b9955647b9515b08f671820362befac24f74533dc6a64fabc5300868a->leave($__internal_f3ac4a2b9955647b9515b08f671820362befac24f74533dc6a64fabc5300868a_prof);

        
        $__internal_18b2d0b55e7cd33f3d8e4c8e47e9d9c2960646a8ca6ac683de7219784fa95d53->leave($__internal_18b2d0b55e7cd33f3d8e4c8e47e9d9c2960646a8ca6ac683de7219784fa95d53_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b49b389888077f5cd79c9b3e5f312d14bf39635a4ca24842fb4800130758e670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49b389888077f5cd79c9b3e5f312d14bf39635a4ca24842fb4800130758e670->enter($__internal_b49b389888077f5cd79c9b3e5f312d14bf39635a4ca24842fb4800130758e670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5c82d065477e3dfe4913f7d4b98ac5b738479432adc87b5390940f96569eff66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c82d065477e3dfe4913f7d4b98ac5b738479432adc87b5390940f96569eff66->enter($__internal_5c82d065477e3dfe4913f7d4b98ac5b738479432adc87b5390940f96569eff66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5c82d065477e3dfe4913f7d4b98ac5b738479432adc87b5390940f96569eff66->leave($__internal_5c82d065477e3dfe4913f7d4b98ac5b738479432adc87b5390940f96569eff66_prof);

        
        $__internal_b49b389888077f5cd79c9b3e5f312d14bf39635a4ca24842fb4800130758e670->leave($__internal_b49b389888077f5cd79c9b3e5f312d14bf39635a4ca24842fb4800130758e670_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd9d60ec64a0f579ae1a2810dfaa22350f497d0a2668f5296d2a07011067b0e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd9d60ec64a0f579ae1a2810dfaa22350f497d0a2668f5296d2a07011067b0e6->enter($__internal_fd9d60ec64a0f579ae1a2810dfaa22350f497d0a2668f5296d2a07011067b0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b21fca2e6c96c2b740d376459e9abd7b87bb6b91ebffb4237fcccf2c86b1932b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21fca2e6c96c2b740d376459e9abd7b87bb6b91ebffb4237fcccf2c86b1932b->enter($__internal_b21fca2e6c96c2b740d376459e9abd7b87bb6b91ebffb4237fcccf2c86b1932b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_b21fca2e6c96c2b740d376459e9abd7b87bb6b91ebffb4237fcccf2c86b1932b->leave($__internal_b21fca2e6c96c2b740d376459e9abd7b87bb6b91ebffb4237fcccf2c86b1932b_prof);

        
        $__internal_fd9d60ec64a0f579ae1a2810dfaa22350f497d0a2668f5296d2a07011067b0e6->leave($__internal_fd9d60ec64a0f579ae1a2810dfaa22350f497d0a2668f5296d2a07011067b0e6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
