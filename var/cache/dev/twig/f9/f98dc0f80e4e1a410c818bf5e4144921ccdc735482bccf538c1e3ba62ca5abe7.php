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
        $__internal_8a9b6501e53dacd15a5ead72bc0c8f572dd874cf32a44645c592e5f7bfba9f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a9b6501e53dacd15a5ead72bc0c8f572dd874cf32a44645c592e5f7bfba9f22->enter($__internal_8a9b6501e53dacd15a5ead72bc0c8f572dd874cf32a44645c592e5f7bfba9f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a2c514fe57b4376776d0c03451092be08fc131dbfc67cba48977fcc9c7a57550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c514fe57b4376776d0c03451092be08fc131dbfc67cba48977fcc9c7a57550->enter($__internal_a2c514fe57b4376776d0c03451092be08fc131dbfc67cba48977fcc9c7a57550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a9b6501e53dacd15a5ead72bc0c8f572dd874cf32a44645c592e5f7bfba9f22->leave($__internal_8a9b6501e53dacd15a5ead72bc0c8f572dd874cf32a44645c592e5f7bfba9f22_prof);

        
        $__internal_a2c514fe57b4376776d0c03451092be08fc131dbfc67cba48977fcc9c7a57550->leave($__internal_a2c514fe57b4376776d0c03451092be08fc131dbfc67cba48977fcc9c7a57550_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f973030cc806b88df7aeaa4f64f4d182c7ddf25953bb430e255ce0082dfdcf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f973030cc806b88df7aeaa4f64f4d182c7ddf25953bb430e255ce0082dfdcf3->enter($__internal_9f973030cc806b88df7aeaa4f64f4d182c7ddf25953bb430e255ce0082dfdcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_71b150ef671dade69b0727307b1008698e6f74675e9ea0f0ecc04471bea51db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b150ef671dade69b0727307b1008698e6f74675e9ea0f0ecc04471bea51db1->enter($__internal_71b150ef671dade69b0727307b1008698e6f74675e9ea0f0ecc04471bea51db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_71b150ef671dade69b0727307b1008698e6f74675e9ea0f0ecc04471bea51db1->leave($__internal_71b150ef671dade69b0727307b1008698e6f74675e9ea0f0ecc04471bea51db1_prof);

        
        $__internal_9f973030cc806b88df7aeaa4f64f4d182c7ddf25953bb430e255ce0082dfdcf3->leave($__internal_9f973030cc806b88df7aeaa4f64f4d182c7ddf25953bb430e255ce0082dfdcf3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f1d01343d1a3b7232beb12ff84d4e0e726777be12455e6b1f55882d40b1b912f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d01343d1a3b7232beb12ff84d4e0e726777be12455e6b1f55882d40b1b912f->enter($__internal_f1d01343d1a3b7232beb12ff84d4e0e726777be12455e6b1f55882d40b1b912f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8af8f740c3172946574cc2ffa298b8fd77824118911f652de6a3e54ea74b6f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af8f740c3172946574cc2ffa298b8fd77824118911f652de6a3e54ea74b6f9a->enter($__internal_8af8f740c3172946574cc2ffa298b8fd77824118911f652de6a3e54ea74b6f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8af8f740c3172946574cc2ffa298b8fd77824118911f652de6a3e54ea74b6f9a->leave($__internal_8af8f740c3172946574cc2ffa298b8fd77824118911f652de6a3e54ea74b6f9a_prof);

        
        $__internal_f1d01343d1a3b7232beb12ff84d4e0e726777be12455e6b1f55882d40b1b912f->leave($__internal_f1d01343d1a3b7232beb12ff84d4e0e726777be12455e6b1f55882d40b1b912f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62778dc0321859f49f23063b880827b9568108686bcb6e37876b155d22825d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62778dc0321859f49f23063b880827b9568108686bcb6e37876b155d22825d9b->enter($__internal_62778dc0321859f49f23063b880827b9568108686bcb6e37876b155d22825d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8b3f70998564a370a487a6073c4253594e2c0f56f9f56277be1bd32c2115cd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3f70998564a370a487a6073c4253594e2c0f56f9f56277be1bd32c2115cd2d->enter($__internal_8b3f70998564a370a487a6073c4253594e2c0f56f9f56277be1bd32c2115cd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8b3f70998564a370a487a6073c4253594e2c0f56f9f56277be1bd32c2115cd2d->leave($__internal_8b3f70998564a370a487a6073c4253594e2c0f56f9f56277be1bd32c2115cd2d_prof);

        
        $__internal_62778dc0321859f49f23063b880827b9568108686bcb6e37876b155d22825d9b->leave($__internal_62778dc0321859f49f23063b880827b9568108686bcb6e37876b155d22825d9b_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/WEB3A/Tromba/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
