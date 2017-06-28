<?php

/* base.html.twig */
class __TwigTemplate_fc325636ac1e2c80cb796c56cb196e0487559e460177a46f8f0bb6af473e185c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3bb7c36c232c5fae27605490ef33d753a4f2287dbce6395618c4aa4be7c0bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3bb7c36c232c5fae27605490ef33d753a4f2287dbce6395618c4aa4be7c0bd9->enter($__internal_e3bb7c36c232c5fae27605490ef33d753a4f2287dbce6395618c4aa4be7c0bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1bfa82f8e64e09762c848124d6d9583d909bad82c3dc02d26fade75d2bbf4055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bfa82f8e64e09762c848124d6d9583d909bad82c3dc02d26fade75d2bbf4055->enter($__internal_1bfa82f8e64e09762c848124d6d9583d909bad82c3dc02d26fade75d2bbf4055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    </body>
</html>
";
        
        $__internal_e3bb7c36c232c5fae27605490ef33d753a4f2287dbce6395618c4aa4be7c0bd9->leave($__internal_e3bb7c36c232c5fae27605490ef33d753a4f2287dbce6395618c4aa4be7c0bd9_prof);

        
        $__internal_1bfa82f8e64e09762c848124d6d9583d909bad82c3dc02d26fade75d2bbf4055->leave($__internal_1bfa82f8e64e09762c848124d6d9583d909bad82c3dc02d26fade75d2bbf4055_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_73ffa37a9ab566b6f43657afd90d888b6609c0101766e93c0b3672dbe4c1068a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ffa37a9ab566b6f43657afd90d888b6609c0101766e93c0b3672dbe4c1068a->enter($__internal_73ffa37a9ab566b6f43657afd90d888b6609c0101766e93c0b3672dbe4c1068a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_449c28d3574e36e1b031f1895b41d1220d4faaa02aad9b1a261e66373a07e45f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449c28d3574e36e1b031f1895b41d1220d4faaa02aad9b1a261e66373a07e45f->enter($__internal_449c28d3574e36e1b031f1895b41d1220d4faaa02aad9b1a261e66373a07e45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_449c28d3574e36e1b031f1895b41d1220d4faaa02aad9b1a261e66373a07e45f->leave($__internal_449c28d3574e36e1b031f1895b41d1220d4faaa02aad9b1a261e66373a07e45f_prof);

        
        $__internal_73ffa37a9ab566b6f43657afd90d888b6609c0101766e93c0b3672dbe4c1068a->leave($__internal_73ffa37a9ab566b6f43657afd90d888b6609c0101766e93c0b3672dbe4c1068a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bec4f42ceaac49cf49f24e8bd090eb61119f580580df314e8ca9a92bc9fdd3d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec4f42ceaac49cf49f24e8bd090eb61119f580580df314e8ca9a92bc9fdd3d7->enter($__internal_bec4f42ceaac49cf49f24e8bd090eb61119f580580df314e8ca9a92bc9fdd3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_20f76e137b7a10c5c544a05f669f4af1a1f2a5bf4abcfe105d08c246c5ba5c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f76e137b7a10c5c544a05f669f4af1a1f2a5bf4abcfe105d08c246c5ba5c34->enter($__internal_20f76e137b7a10c5c544a05f669f4af1a1f2a5bf4abcfe105d08c246c5ba5c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_20f76e137b7a10c5c544a05f669f4af1a1f2a5bf4abcfe105d08c246c5ba5c34->leave($__internal_20f76e137b7a10c5c544a05f669f4af1a1f2a5bf4abcfe105d08c246c5ba5c34_prof);

        
        $__internal_bec4f42ceaac49cf49f24e8bd090eb61119f580580df314e8ca9a92bc9fdd3d7->leave($__internal_bec4f42ceaac49cf49f24e8bd090eb61119f580580df314e8ca9a92bc9fdd3d7_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf18fda2a60c713026d6f3d7bcea0becb68932be1f18ae07a1f4bc983b94a539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf18fda2a60c713026d6f3d7bcea0becb68932be1f18ae07a1f4bc983b94a539->enter($__internal_cf18fda2a60c713026d6f3d7bcea0becb68932be1f18ae07a1f4bc983b94a539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f5fb4593dbafaf8ff24d4ea82be47e5ce3988be392aaac5dffe4a35a41ee883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5fb4593dbafaf8ff24d4ea82be47e5ce3988be392aaac5dffe4a35a41ee883->enter($__internal_8f5fb4593dbafaf8ff24d4ea82be47e5ce3988be392aaac5dffe4a35a41ee883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "        <h1>Welcome to the Auction Blog</h1>

  <nav class=\"navbar navbar-default\">
    <div class=\"container\">
      <div class=\"navbar-header\">        
      </div>

      <ul class=\"nav navbar-nav navbar-right\">        
        <li><a href=\"/register\"><i class=\"fa fa-shield\"></i> SIGN UP</a></li>
        <li><a href=\"/login\"><i class=\"fa fa-comment\"></i> LOGIN</a></li>
      </ul>      
    </div>
  </nav>

        ";
        
        $__internal_8f5fb4593dbafaf8ff24d4ea82be47e5ce3988be392aaac5dffe4a35a41ee883->leave($__internal_8f5fb4593dbafaf8ff24d4ea82be47e5ce3988be392aaac5dffe4a35a41ee883_prof);

        
        $__internal_cf18fda2a60c713026d6f3d7bcea0becb68932be1f18ae07a1f4bc983b94a539->leave($__internal_cf18fda2a60c713026d6f3d7bcea0becb68932be1f18ae07a1f4bc983b94a539_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f145bbdba179f27169400fecf3d366280f465eecd7be5c7c2e672e09571c825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f145bbdba179f27169400fecf3d366280f465eecd7be5c7c2e672e09571c825->enter($__internal_8f145bbdba179f27169400fecf3d366280f465eecd7be5c7c2e672e09571c825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_306ee152118f88d79d0286552a8df9ee5ec4fbc0b8979e7aa6b172d81bfd6177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306ee152118f88d79d0286552a8df9ee5ec4fbc0b8979e7aa6b172d81bfd6177->enter($__internal_306ee152118f88d79d0286552a8df9ee5ec4fbc0b8979e7aa6b172d81bfd6177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/starrating/js/rating.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_306ee152118f88d79d0286552a8df9ee5ec4fbc0b8979e7aa6b172d81bfd6177->leave($__internal_306ee152118f88d79d0286552a8df9ee5ec4fbc0b8979e7aa6b172d81bfd6177_prof);

        
        $__internal_8f145bbdba179f27169400fecf3d366280f465eecd7be5c7c2e672e09571c825->leave($__internal_8f145bbdba179f27169400fecf3d366280f465eecd7be5c7c2e672e09571c825_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 38,  156 => 37,  147 => 36,  123 => 21,  114 => 20,  101 => 7,  92 => 6,  74 => 5,  62 => 41,  59 => 36,  57 => 20,  51 => 17,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/starrating/css/rating.css') }}\" />
        {% endblock %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
        <h1>Welcome to the Auction Blog</h1>

  <nav class=\"navbar navbar-default\">
    <div class=\"container\">
      <div class=\"navbar-header\">        
      </div>

      <ul class=\"nav navbar-nav navbar-right\">        
        <li><a href=\"/register\"><i class=\"fa fa-shield\"></i> SIGN UP</a></li>
        <li><a href=\"/login\"><i class=\"fa fa-comment\"></i> LOGIN</a></li>
      </ul>      
    </div>
  </nav>

        {% endblock %}
        {% block javascripts %}
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    <script src=\"{{ asset('bundles/starrating/js/rating.js') }}\"></script>

{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/app/Resources/views/base.html.twig");
    }
}
