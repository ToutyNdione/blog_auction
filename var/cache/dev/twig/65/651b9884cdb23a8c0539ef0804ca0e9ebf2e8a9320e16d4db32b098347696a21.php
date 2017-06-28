<?php

/* StarRatingBundle::rating.html.twig */
class __TwigTemplate_c0882c71e6028c46ee20b42e2a3d0694c7c7333c0c200bd588fb9bc5ccd4627d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'rating_widget' => array($this, 'block_rating_widget'),
            'rating_widget_container_attributes' => array($this, 'block_rating_widget_container_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_939ca6b39881d52b6e4588249db14fb1782694906c59e86fce363927d6c983ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939ca6b39881d52b6e4588249db14fb1782694906c59e86fce363927d6c983ff->enter($__internal_939ca6b39881d52b6e4588249db14fb1782694906c59e86fce363927d6c983ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle::rating.html.twig"));

        $__internal_5f6e698e929fa2101b53c1e6988c045aacec32ebfab99f26213f4a233331ff5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6e698e929fa2101b53c1e6988c045aacec32ebfab99f26213f4a233331ff5b->enter($__internal_5f6e698e929fa2101b53c1e6988c045aacec32ebfab99f26213f4a233331ff5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle::rating.html.twig"));

        // line 2
        $this->displayBlock('rating_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('rating_widget_container_attributes', $context, $blocks);
        
        $__internal_939ca6b39881d52b6e4588249db14fb1782694906c59e86fce363927d6c983ff->leave($__internal_939ca6b39881d52b6e4588249db14fb1782694906c59e86fce363927d6c983ff_prof);

        
        $__internal_5f6e698e929fa2101b53c1e6988c045aacec32ebfab99f26213f4a233331ff5b->leave($__internal_5f6e698e929fa2101b53c1e6988c045aacec32ebfab99f26213f4a233331ff5b_prof);

    }

    // line 2
    public function block_rating_widget($context, array $blocks = array())
    {
        $__internal_c89ef8caa940c66e9d1fc9b994daa802165f9c53cddaca79b1e847412a24841c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c89ef8caa940c66e9d1fc9b994daa802165f9c53cddaca79b1e847412a24841c->enter($__internal_c89ef8caa940c66e9d1fc9b994daa802165f9c53cddaca79b1e847412a24841c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

        $__internal_41c1e636534b5d5118cf0bf298dca923bd14c9cab711528a11ba3933bce13cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c1e636534b5d5118cf0bf298dca923bd14c9cab711528a11ba3933bce13cbb->enter($__internal_41c1e636534b5d5118cf0bf298dca923bd14c9cab711528a11ba3933bce13cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

        // line 3
        echo "  ";
        ob_start();
        // line 4
        echo "    <div ";
        $this->displayBlock("rating_widget_container_attributes", $context, $blocks);
        echo ">
      ";
        // line 6
        echo "      ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 7
        echo "      <div class=\"rating-well\">";
        // line 8
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["stars"]) || array_key_exists("stars", $context) ? $context["stars"] : (function () { throw new Twig_Error_Runtime('Variable "stars" does not exist.', 9, $this->getSourceContext()); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
            // line 10
            echo "          <div id=\"rating_star_";
            echo twig_escape_filter($this->env, (((isset($context["stars"]) || array_key_exists("stars", $context) ? $context["stars"] : (function () { throw new Twig_Error_Runtime('Variable "stars" does not exist.', 10, $this->getSourceContext()); })()) - $context["star"]) + 1), "html", null, true);
            echo "\" class=\"star\" data-value=\"";
            echo twig_escape_filter($this->env, (((isset($context["stars"]) || array_key_exists("stars", $context) ? $context["stars"] : (function () { throw new Twig_Error_Runtime('Variable "stars" does not exist.', 10, $this->getSourceContext()); })()) - $context["star"]) + 1), "html", null, true);
            echo "\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['star'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </div>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_41c1e636534b5d5118cf0bf298dca923bd14c9cab711528a11ba3933bce13cbb->leave($__internal_41c1e636534b5d5118cf0bf298dca923bd14c9cab711528a11ba3933bce13cbb_prof);

        
        $__internal_c89ef8caa940c66e9d1fc9b994daa802165f9c53cddaca79b1e847412a24841c->leave($__internal_c89ef8caa940c66e9d1fc9b994daa802165f9c53cddaca79b1e847412a24841c_prof);

    }

    // line 17
    public function block_rating_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_446d2fbb701265d0f75a8776b8431965c504bdbd69b2e84daadfef54faea0c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_446d2fbb701265d0f75a8776b8431965c504bdbd69b2e84daadfef54faea0c82->enter($__internal_446d2fbb701265d0f75a8776b8431965c504bdbd69b2e84daadfef54faea0c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

        $__internal_b4520e8825cd2ff1c637c5d03c78865688eb2ea5359a8138770ba0bff4b62d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4520e8825cd2ff1c637c5d03c78865688eb2ea5359a8138770ba0bff4b62d89->enter($__internal_b4520e8825cd2ff1c637c5d03c78865688eb2ea5359a8138770ba0bff4b62d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget_container_attributes"));

        // line 18
        ob_start();
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 20
            echo " ";
            // line 21
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 22
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 22, $this->getSourceContext()); })())), "html", null, true);
                echo "\"";
            } elseif ((            // line 23
$context["attrvalue"] === true)) {
                // line 24
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 25
$context["attrvalue"] === false)) {
                // line 26
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b4520e8825cd2ff1c637c5d03c78865688eb2ea5359a8138770ba0bff4b62d89->leave($__internal_b4520e8825cd2ff1c637c5d03c78865688eb2ea5359a8138770ba0bff4b62d89_prof);

        
        $__internal_446d2fbb701265d0f75a8776b8431965c504bdbd69b2e84daadfef54faea0c82->leave($__internal_446d2fbb701265d0f75a8776b8431965c504bdbd69b2e84daadfef54faea0c82_prof);

    }

    public function getTemplateName()
    {
        return "StarRatingBundle::rating.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 26,  125 => 25,  120 => 24,  118 => 23,  113 => 22,  111 => 21,  109 => 20,  105 => 19,  103 => 18,  94 => 17,  81 => 12,  70 => 10,  66 => 9,  64 => 8,  62 => 7,  59 => 6,  54 => 4,  51 => 3,  42 => 2,  32 => 17,  29 => 16,  27 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# blackknight467/StarRatingBundle/Resources/views/rating.html.twig #}
{% block rating_widget %}
  {% spaceless %}
    <div {{ block('rating_widget_container_attributes') }}>
      {# type=\"number\" doesn't work with floats #}
      {% set type = type|default('text') %}
      <div class=\"rating-well\">
        {{- block('form_widget_simple') -}}
        {% for star in 1..stars %}
          <div id=\"rating_star_{{ stars - star + 1 }}\" class=\"star\" data-value=\"{{ stars - star + 1 }}\"></div>
        {% endfor %}
      </div>
    </div>
  {% endspaceless %}
{% endblock rating_widget %}

{% block rating_widget_container_attributes %}
{% spaceless %}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{% endspaceless %}
{% endblock rating_widget_container_attributes %}", "StarRatingBundle::rating.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/vendor/blackknight467/star-rating-bundle/blackknight467/StarRatingBundle/Resources/views/rating.html.twig");
    }
}
