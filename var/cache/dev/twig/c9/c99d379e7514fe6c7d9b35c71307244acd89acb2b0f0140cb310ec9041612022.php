<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_e9369916f70c1bef5bc7f8a32346b171f31445cc43a120ac67cfa670035d0411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_fa555c51e07f35b9659ec671a22756f79a329a5482a182f7ff0680310b4d2aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa555c51e07f35b9659ec671a22756f79a329a5482a182f7ff0680310b4d2aaf->enter($__internal_fa555c51e07f35b9659ec671a22756f79a329a5482a182f7ff0680310b4d2aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_07eee4d2b5e742743109cb116c3b3ffeab7d9ced7cea5676eca144f4b7670a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07eee4d2b5e742743109cb116c3b3ffeab7d9ced7cea5676eca144f4b7670a9b->enter($__internal_07eee4d2b5e742743109cb116c3b3ffeab7d9ced7cea5676eca144f4b7670a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa555c51e07f35b9659ec671a22756f79a329a5482a182f7ff0680310b4d2aaf->leave($__internal_fa555c51e07f35b9659ec671a22756f79a329a5482a182f7ff0680310b4d2aaf_prof);

        
        $__internal_07eee4d2b5e742743109cb116c3b3ffeab7d9ced7cea5676eca144f4b7670a9b->leave($__internal_07eee4d2b5e742743109cb116c3b3ffeab7d9ced7cea5676eca144f4b7670a9b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5bb0d5eb59fa748e7aca33a8b6971f3685e15dbf0b5b2151439a71a8a26331fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb0d5eb59fa748e7aca33a8b6971f3685e15dbf0b5b2151439a71a8a26331fe->enter($__internal_5bb0d5eb59fa748e7aca33a8b6971f3685e15dbf0b5b2151439a71a8a26331fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c6a5709e5a1fad9f7b004cf275456a09d235293ba4a57305bc35824e46ca032f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a5709e5a1fad9f7b004cf275456a09d235293ba4a57305bc35824e46ca032f->enter($__internal_c6a5709e5a1fad9f7b004cf275456a09d235293ba4a57305bc35824e46ca032f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_c6a5709e5a1fad9f7b004cf275456a09d235293ba4a57305bc35824e46ca032f->leave($__internal_c6a5709e5a1fad9f7b004cf275456a09d235293ba4a57305bc35824e46ca032f_prof);

        
        $__internal_5bb0d5eb59fa748e7aca33a8b6971f3685e15dbf0b5b2151439a71a8a26331fe->leave($__internal_5bb0d5eb59fa748e7aca33a8b6971f3685e15dbf0b5b2151439a71a8a26331fe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
