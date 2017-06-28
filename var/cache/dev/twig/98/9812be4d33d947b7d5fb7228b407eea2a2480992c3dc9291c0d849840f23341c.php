<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b4641693609c5aa8f03704a755ad381514a21588b1fa8d0293de0bdd16692d40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbe13f1554d2cc8ac8d96c287a621a29f6b633dbe9eb9ad228fdfbfa0cf13dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe13f1554d2cc8ac8d96c287a621a29f6b633dbe9eb9ad228fdfbfa0cf13dad->enter($__internal_bbe13f1554d2cc8ac8d96c287a621a29f6b633dbe9eb9ad228fdfbfa0cf13dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_33cc4b560c63bbadb6c9083d11ac6f3d0ff3063a2d81e2a5c3f7f4f98049aa01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33cc4b560c63bbadb6c9083d11ac6f3d0ff3063a2d81e2a5c3f7f4f98049aa01->enter($__internal_33cc4b560c63bbadb6c9083d11ac6f3d0ff3063a2d81e2a5c3f7f4f98049aa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbe13f1554d2cc8ac8d96c287a621a29f6b633dbe9eb9ad228fdfbfa0cf13dad->leave($__internal_bbe13f1554d2cc8ac8d96c287a621a29f6b633dbe9eb9ad228fdfbfa0cf13dad_prof);

        
        $__internal_33cc4b560c63bbadb6c9083d11ac6f3d0ff3063a2d81e2a5c3f7f4f98049aa01->leave($__internal_33cc4b560c63bbadb6c9083d11ac6f3d0ff3063a2d81e2a5c3f7f4f98049aa01_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e6405b9080f3412e8332d33916cc56139c66e62b1376e260e8ddbcc8758242eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6405b9080f3412e8332d33916cc56139c66e62b1376e260e8ddbcc8758242eb->enter($__internal_e6405b9080f3412e8332d33916cc56139c66e62b1376e260e8ddbcc8758242eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e94efba32c48665403212d77ba9d959a1d36a65880ce10e2d2b66f1d9b26d573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94efba32c48665403212d77ba9d959a1d36a65880ce10e2d2b66f1d9b26d573->enter($__internal_e94efba32c48665403212d77ba9d959a1d36a65880ce10e2d2b66f1d9b26d573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e94efba32c48665403212d77ba9d959a1d36a65880ce10e2d2b66f1d9b26d573->leave($__internal_e94efba32c48665403212d77ba9d959a1d36a65880ce10e2d2b66f1d9b26d573_prof);

        
        $__internal_e6405b9080f3412e8332d33916cc56139c66e62b1376e260e8ddbcc8758242eb->leave($__internal_e6405b9080f3412e8332d33916cc56139c66e62b1376e260e8ddbcc8758242eb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b179db9cd8e0edbdc358fa7e01b28142912d863a031a76f2305a51ee1281a3bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b179db9cd8e0edbdc358fa7e01b28142912d863a031a76f2305a51ee1281a3bb->enter($__internal_b179db9cd8e0edbdc358fa7e01b28142912d863a031a76f2305a51ee1281a3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6769d42246a531aa5910ba41b2242e068476cbadf533f8bdae22d1ef24e37cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6769d42246a531aa5910ba41b2242e068476cbadf533f8bdae22d1ef24e37cc7->enter($__internal_6769d42246a531aa5910ba41b2242e068476cbadf533f8bdae22d1ef24e37cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_6769d42246a531aa5910ba41b2242e068476cbadf533f8bdae22d1ef24e37cc7->leave($__internal_6769d42246a531aa5910ba41b2242e068476cbadf533f8bdae22d1ef24e37cc7_prof);

        
        $__internal_b179db9cd8e0edbdc358fa7e01b28142912d863a031a76f2305a51ee1281a3bb->leave($__internal_b179db9cd8e0edbdc358fa7e01b28142912d863a031a76f2305a51ee1281a3bb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e16e0ed3eff9252b62b062a3166a77ff39d43ddcb67d79e7b35e1d5d7de5a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e16e0ed3eff9252b62b062a3166a77ff39d43ddcb67d79e7b35e1d5d7de5a11->enter($__internal_2e16e0ed3eff9252b62b062a3166a77ff39d43ddcb67d79e7b35e1d5d7de5a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05ef9a369c3fe2e9cdf59b3c45d46c435f54dea9e11b3f6a25b3e82e49528e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ef9a369c3fe2e9cdf59b3c45d46c435f54dea9e11b3f6a25b3e82e49528e0d->enter($__internal_05ef9a369c3fe2e9cdf59b3c45d46c435f54dea9e11b3f6a25b3e82e49528e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_05ef9a369c3fe2e9cdf59b3c45d46c435f54dea9e11b3f6a25b3e82e49528e0d->leave($__internal_05ef9a369c3fe2e9cdf59b3c45d46c435f54dea9e11b3f6a25b3e82e49528e0d_prof);

        
        $__internal_2e16e0ed3eff9252b62b062a3166a77ff39d43ddcb67d79e7b35e1d5d7de5a11->leave($__internal_2e16e0ed3eff9252b62b062a3166a77ff39d43ddcb67d79e7b35e1d5d7de5a11_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
