<?php

/* product/index.html.twig */
class __TwigTemplate_9809254353cfa84294f87a22e2e4566b7494e63b9f74206f5eaf6102e7f0f54d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d411cbac8f942f30f9d821f365084d1d14d9a9a3006527148e3fd3a53031de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d411cbac8f942f30f9d821f365084d1d14d9a9a3006527148e3fd3a53031de6->enter($__internal_9d411cbac8f942f30f9d821f365084d1d14d9a9a3006527148e3fd3a53031de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_d0bcaf121d4d96b3847234384221c8e74dcea4760fae09676b6b0626defad38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bcaf121d4d96b3847234384221c8e74dcea4760fae09676b6b0626defad38b->enter($__internal_d0bcaf121d4d96b3847234384221c8e74dcea4760fae09676b6b0626defad38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d411cbac8f942f30f9d821f365084d1d14d9a9a3006527148e3fd3a53031de6->leave($__internal_9d411cbac8f942f30f9d821f365084d1d14d9a9a3006527148e3fd3a53031de6_prof);

        
        $__internal_d0bcaf121d4d96b3847234384221c8e74dcea4760fae09676b6b0626defad38b->leave($__internal_d0bcaf121d4d96b3847234384221c8e74dcea4760fae09676b6b0626defad38b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_48e2e571b39fe76f0552e463b605fe37b219d25a5bce8ad50a7fa0a46d91329e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e2e571b39fe76f0552e463b605fe37b219d25a5bce8ad50a7fa0a46d91329e->enter($__internal_48e2e571b39fe76f0552e463b605fe37b219d25a5bce8ad50a7fa0a46d91329e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68023a32c6ceace1b7aa054c26515487ce06f3d40af66e8d85821aa823f5a3ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68023a32c6ceace1b7aa054c26515487ce06f3d40af66e8d85821aa823f5a3ea->enter($__internal_68023a32c6ceace1b7aa054c26515487ce06f3d40af66e8d85821aa823f5a3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Products list</h1>

    <table class=\"table table-hover table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>User</th>
                <th>Category</th>
         ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "                <th>Actions</th>
                ";
        }
        // line 18
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "user", array()), "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "category", array()), "name", array()), "html", null, true);
            echo "</td>
         ";
            // line 29
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 29, $this->getSourceContext()); })()), "user", array()), "username", array()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "user", array()), "username", array())))) {
                // line 30
                echo "
                <td>
                    <ul>
                        <li>
                            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "id", array()))), "html", null, true);
                echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                        </li>
                    </ul>
                </td>
                ";
            }
            // line 42
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_new");
        echo "\">Create a new product</a>
        </li>
    </ul>
";
        
        $__internal_68023a32c6ceace1b7aa054c26515487ce06f3d40af66e8d85821aa823f5a3ea->leave($__internal_68023a32c6ceace1b7aa054c26515487ce06f3d40af66e8d85821aa823f5a3ea_prof);

        
        $__internal_48e2e571b39fe76f0552e463b605fe37b219d25a5bce8ad50a7fa0a46d91329e->leave($__internal_48e2e571b39fe76f0552e463b605fe37b219d25a5bce8ad50a7fa0a46d91329e_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 49,  135 => 44,  128 => 42,  120 => 37,  114 => 34,  108 => 30,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  80 => 23,  77 => 22,  73 => 21,  68 => 18,  64 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Products list</h1>

    <table class=\"table table-hover table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>User</th>
                <th>Category</th>
         {% if is_granted('ROLE_ADMIN') %}
                <th>Actions</th>
                {% endif %}
            </tr>
        </thead>
        <tbody>
        {% for product in products %}
            <tr>
                <td><a href=\"{{ path('product_show', { 'id': product.id }) }}\">{{ product.id }}</a></td>
                <td>{{ product.title }}</td>
                <td>{{ product.description }}</td>
                <td>{{ product.price }}</td>
                <td>{{ product.user.username }}</td>
                <td>{{ product.category.name }}</td>
         {% if is_granted('ROLE_ADMIN') and  app.user.username == product.user.username%}

                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('product_show', { 'id': product.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('product_edit', { 'id': product.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
                {%endif%}
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('product_new') }}\">Create a new product</a>
        </li>
    </ul>
{% endblock %}
", "product/index.html.twig", "/home/changeme/Rendu/Symfony_Rails/blog_auction/app/Resources/views/product/index.html.twig");
    }
}
