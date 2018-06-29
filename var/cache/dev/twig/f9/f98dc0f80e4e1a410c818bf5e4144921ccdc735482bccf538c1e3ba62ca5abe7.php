<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c87710f357776402c9631da4bda3850b78ef8adca6273d8bd36cbe5e2fe827f2 extends Twig_Template
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
        $__internal_d7f97b67518033fe193979303c1d8190b70ab01b89e4fa01d1dc4c68ebc4cc06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f97b67518033fe193979303c1d8190b70ab01b89e4fa01d1dc4c68ebc4cc06->enter($__internal_d7f97b67518033fe193979303c1d8190b70ab01b89e4fa01d1dc4c68ebc4cc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_697ec3cb4290d1c9f2e6955cb587a1f6957afc34d04bfbe23ca894612e520724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697ec3cb4290d1c9f2e6955cb587a1f6957afc34d04bfbe23ca894612e520724->enter($__internal_697ec3cb4290d1c9f2e6955cb587a1f6957afc34d04bfbe23ca894612e520724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7f97b67518033fe193979303c1d8190b70ab01b89e4fa01d1dc4c68ebc4cc06->leave($__internal_d7f97b67518033fe193979303c1d8190b70ab01b89e4fa01d1dc4c68ebc4cc06_prof);

        
        $__internal_697ec3cb4290d1c9f2e6955cb587a1f6957afc34d04bfbe23ca894612e520724->leave($__internal_697ec3cb4290d1c9f2e6955cb587a1f6957afc34d04bfbe23ca894612e520724_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d608079e8757380a5c887ab3b05e63c1deb13a701e7e9ae9818fa9ffaa17beae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d608079e8757380a5c887ab3b05e63c1deb13a701e7e9ae9818fa9ffaa17beae->enter($__internal_d608079e8757380a5c887ab3b05e63c1deb13a701e7e9ae9818fa9ffaa17beae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_175838d73f3ae280623b98016ea8cb14409b3d7d20d95c12132abcf6b0942f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175838d73f3ae280623b98016ea8cb14409b3d7d20d95c12132abcf6b0942f9b->enter($__internal_175838d73f3ae280623b98016ea8cb14409b3d7d20d95c12132abcf6b0942f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_175838d73f3ae280623b98016ea8cb14409b3d7d20d95c12132abcf6b0942f9b->leave($__internal_175838d73f3ae280623b98016ea8cb14409b3d7d20d95c12132abcf6b0942f9b_prof);

        
        $__internal_d608079e8757380a5c887ab3b05e63c1deb13a701e7e9ae9818fa9ffaa17beae->leave($__internal_d608079e8757380a5c887ab3b05e63c1deb13a701e7e9ae9818fa9ffaa17beae_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_09748a6a965b358698fbd8721b248fa086410fbdbf2cfb15df27b494ac4a2712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09748a6a965b358698fbd8721b248fa086410fbdbf2cfb15df27b494ac4a2712->enter($__internal_09748a6a965b358698fbd8721b248fa086410fbdbf2cfb15df27b494ac4a2712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b458681cecd5ed31eab2dc2d1de8bfcc49f870e27de1c9bb7904d0ce87d59d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b458681cecd5ed31eab2dc2d1de8bfcc49f870e27de1c9bb7904d0ce87d59d1a->enter($__internal_b458681cecd5ed31eab2dc2d1de8bfcc49f870e27de1c9bb7904d0ce87d59d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b458681cecd5ed31eab2dc2d1de8bfcc49f870e27de1c9bb7904d0ce87d59d1a->leave($__internal_b458681cecd5ed31eab2dc2d1de8bfcc49f870e27de1c9bb7904d0ce87d59d1a_prof);

        
        $__internal_09748a6a965b358698fbd8721b248fa086410fbdbf2cfb15df27b494ac4a2712->leave($__internal_09748a6a965b358698fbd8721b248fa086410fbdbf2cfb15df27b494ac4a2712_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_64555ff25d7eb45da20171558eb7610ea95fbd9b7bf30027fc7c2363128ea163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64555ff25d7eb45da20171558eb7610ea95fbd9b7bf30027fc7c2363128ea163->enter($__internal_64555ff25d7eb45da20171558eb7610ea95fbd9b7bf30027fc7c2363128ea163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6c6d98818c2a5c338c6f9a9c4c323469a612f43860575cc0b6be5c0521663ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6d98818c2a5c338c6f9a9c4c323469a612f43860575cc0b6be5c0521663ce5->enter($__internal_6c6d98818c2a5c338c6f9a9c4c323469a612f43860575cc0b6be5c0521663ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6c6d98818c2a5c338c6f9a9c4c323469a612f43860575cc0b6be5c0521663ce5->leave($__internal_6c6d98818c2a5c338c6f9a9c4c323469a612f43860575cc0b6be5c0521663ce5_prof);

        
        $__internal_64555ff25d7eb45da20171558eb7610ea95fbd9b7bf30027fc7c2363128ea163->leave($__internal_64555ff25d7eb45da20171558eb7610ea95fbd9b7bf30027fc7c2363128ea163_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/WEB3A/untitled/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
