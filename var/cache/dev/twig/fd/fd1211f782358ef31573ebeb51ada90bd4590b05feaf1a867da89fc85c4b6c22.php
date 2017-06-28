<?php

/* AppBundle:App:index.html.twig */
class __TwigTemplate_e0a9e7e3941631a7a21e89cbdd088c0a2cddd5235c2562dbe70abfc1bcc19e28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:App:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d15115c7568ce6c43bc63fbf177480b86fb718a3fa7704ab0b64ac96e1834788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d15115c7568ce6c43bc63fbf177480b86fb718a3fa7704ab0b64ac96e1834788->enter($__internal_d15115c7568ce6c43bc63fbf177480b86fb718a3fa7704ab0b64ac96e1834788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:App:index.html.twig"));

        $__internal_5dcd26fbe4f0e20bf76d07b9d6a89d6c49809e060ccb9670c5ca3fda3bd086d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dcd26fbe4f0e20bf76d07b9d6a89d6c49809e060ccb9670c5ca3fda3bd086d3->enter($__internal_5dcd26fbe4f0e20bf76d07b9d6a89d6c49809e060ccb9670c5ca3fda3bd086d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:App:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d15115c7568ce6c43bc63fbf177480b86fb718a3fa7704ab0b64ac96e1834788->leave($__internal_d15115c7568ce6c43bc63fbf177480b86fb718a3fa7704ab0b64ac96e1834788_prof);

        
        $__internal_5dcd26fbe4f0e20bf76d07b9d6a89d6c49809e060ccb9670c5ca3fda3bd086d3->leave($__internal_5dcd26fbe4f0e20bf76d07b9d6a89d6c49809e060ccb9670c5ca3fda3bd086d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0126804ed360450f24b2a073ba769eb156a7d10af85e76ebfd200151fd3e02a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0126804ed360450f24b2a073ba769eb156a7d10af85e76ebfd200151fd3e02a2->enter($__internal_0126804ed360450f24b2a073ba769eb156a7d10af85e76ebfd200151fd3e02a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ee6a0a36f8e458734a2e9d25c1c3f56950b0d88abc12e20b8a27b867518e6348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6a0a36f8e458734a2e9d25c1c3f56950b0d88abc12e20b8a27b867518e6348->enter($__internal_ee6a0a36f8e458734a2e9d25c1c3f56950b0d88abc12e20b8a27b867518e6348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:App:index";
        
        $__internal_ee6a0a36f8e458734a2e9d25c1c3f56950b0d88abc12e20b8a27b867518e6348->leave($__internal_ee6a0a36f8e458734a2e9d25c1c3f56950b0d88abc12e20b8a27b867518e6348_prof);

        
        $__internal_0126804ed360450f24b2a073ba769eb156a7d10af85e76ebfd200151fd3e02a2->leave($__internal_0126804ed360450f24b2a073ba769eb156a7d10af85e76ebfd200151fd3e02a2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a0a40b548a15b34895dedb768e7915c0c2c63a5a4a0472d8baea91d8d5e1c11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0a40b548a15b34895dedb768e7915c0c2c63a5a4a0472d8baea91d8d5e1c11->enter($__internal_8a0a40b548a15b34895dedb768e7915c0c2c63a5a4a0472d8baea91d8d5e1c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cfc79eb85ff9808fc0b84c6aeb29330b2b0a710ce6aafb3d1e2aba998308add7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc79eb85ff9808fc0b84c6aeb29330b2b0a710ce6aafb3d1e2aba998308add7->enter($__internal_cfc79eb85ff9808fc0b84c6aeb29330b2b0a710ce6aafb3d1e2aba998308add7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Auction Blog</h1>
<nav class=\"navbar navbar-default\">
    <div class=\"container\">
      <div class=\"navbar-header\">        
      </div>

      <ul class=\"nav navbar-nav navbar-right\">
        ";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 14
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "</li> 
                       <li><a href=\"/logout\"><i class=\"fa fa-shield\"></i> LOGOUT</a></li>
                <li><a href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">EDIT PROFILE</a></li>
                <li><a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\">RESET PASSWORD</a></li>
                <li><a href=\"/delete/\">DELETE ACCOUNT</a></li>

            ";
        } else {
            // line 21
            echo "        <li><a href=\"/register\"><i class=\"fa fa-shield\"></i> SIGN UP</a></li>
        <li><a href=\"/login\"><i class=\"fa fa-comment\"></i> LOGIN</a></li>
            ";
        }
        // line 24
        echo "
        <li><a href=\"/user\"><i class=\"fa fa-comment\"></i> USERS</a></li>
         <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">PRODUCTS</a></li>
         <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">CATEGORIES</a></li>

      </ul>      
    </div>
  </nav>

";
        
        $__internal_cfc79eb85ff9808fc0b84c6aeb29330b2b0a710ce6aafb3d1e2aba998308add7->leave($__internal_cfc79eb85ff9808fc0b84c6aeb29330b2b0a710ce6aafb3d1e2aba998308add7_prof);

        
        $__internal_8a0a40b548a15b34895dedb768e7915c0c2c63a5a4a0472d8baea91d8d5e1c11->leave($__internal_8a0a40b548a15b34895dedb768e7915c0c2c63a5a4a0472d8baea91d8d5e1c11_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:App:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  105 => 26,  101 => 24,  96 => 21,  89 => 17,  85 => 16,  79 => 14,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:App:index{% endblock %}

{% block body %}
<h1>Welcome to the Auction Blog</h1>
<nav class=\"navbar navbar-default\">
    <div class=\"container\">
      <div class=\"navbar-header\">        
      </div>

      <ul class=\"nav navbar-nav navbar-right\">
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <li>{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}</li> 
                       <li><a href=\"/logout\"><i class=\"fa fa-shield\"></i> LOGOUT</a></li>
                <li><a href=\"{{ path('fos_user_profile_edit') }}\">EDIT PROFILE</a></li>
                <li><a href=\"{{ path('fos_user_change_password') }}\">RESET PASSWORD</a></li>
                <li><a href=\"/delete/\">DELETE ACCOUNT</a></li>

            {% else %}
        <li><a href=\"/register\"><i class=\"fa fa-shield\"></i> SIGN UP</a></li>
        <li><a href=\"/login\"><i class=\"fa fa-comment\"></i> LOGIN</a></li>
            {% endif %}

        <li><a href=\"/user\"><i class=\"fa fa-comment\"></i> USERS</a></li>
         <li><a href=\"{{ path('product_index')}}\">PRODUCTS</a></li>
         <li><a href=\"{{ path('category_index')}}\">CATEGORIES</a></li>

      </ul>      
    </div>
  </nav>

{% endblock %}
", "AppBundle:App:index.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/src/AppBundle/Resources/views/App/index.html.twig");
    }
}
