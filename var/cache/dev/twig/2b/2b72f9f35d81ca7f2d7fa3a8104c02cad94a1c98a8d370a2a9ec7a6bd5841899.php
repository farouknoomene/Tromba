<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6bdc415026468751b0fd3b8ea4bb5b8b9e992dbfca85e1c86f20068b91fbe660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_fc9ab655eaf8164d2a0f7f6f25c1b0fb5648f003342dd450a2390973d483a1b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9ab655eaf8164d2a0f7f6f25c1b0fb5648f003342dd450a2390973d483a1b2->enter($__internal_fc9ab655eaf8164d2a0f7f6f25c1b0fb5648f003342dd450a2390973d483a1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1dd00dc798d5f6895d7bac34e6ef6f3e484d6a20d861bb395378712c1b3d849f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd00dc798d5f6895d7bac34e6ef6f3e484d6a20d861bb395378712c1b3d849f->enter($__internal_1dd00dc798d5f6895d7bac34e6ef6f3e484d6a20d861bb395378712c1b3d849f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc9ab655eaf8164d2a0f7f6f25c1b0fb5648f003342dd450a2390973d483a1b2->leave($__internal_fc9ab655eaf8164d2a0f7f6f25c1b0fb5648f003342dd450a2390973d483a1b2_prof);

        
        $__internal_1dd00dc798d5f6895d7bac34e6ef6f3e484d6a20d861bb395378712c1b3d849f->leave($__internal_1dd00dc798d5f6895d7bac34e6ef6f3e484d6a20d861bb395378712c1b3d849f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1254b194d4c7a33c8434721da8d14295e600cad4332cd272cadf546aa759e326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1254b194d4c7a33c8434721da8d14295e600cad4332cd272cadf546aa759e326->enter($__internal_1254b194d4c7a33c8434721da8d14295e600cad4332cd272cadf546aa759e326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0a10082db0f194aedd77ec3f2b9c2394f1666f64c31008cf71d6e716e33ecd09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a10082db0f194aedd77ec3f2b9c2394f1666f64c31008cf71d6e716e33ecd09->enter($__internal_0a10082db0f194aedd77ec3f2b9c2394f1666f64c31008cf71d6e716e33ecd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0a10082db0f194aedd77ec3f2b9c2394f1666f64c31008cf71d6e716e33ecd09->leave($__internal_0a10082db0f194aedd77ec3f2b9c2394f1666f64c31008cf71d6e716e33ecd09_prof);

        
        $__internal_1254b194d4c7a33c8434721da8d14295e600cad4332cd272cadf546aa759e326->leave($__internal_1254b194d4c7a33c8434721da8d14295e600cad4332cd272cadf546aa759e326_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c4bec5ca072e7a3757214a85016caa8b666e7f4c1492c977cd545e2669ad71f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c4bec5ca072e7a3757214a85016caa8b666e7f4c1492c977cd545e2669ad71f->enter($__internal_9c4bec5ca072e7a3757214a85016caa8b666e7f4c1492c977cd545e2669ad71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1aad3c640990064d4387887ae50c18dea0ff97b4143336650634b44b86a7313a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aad3c640990064d4387887ae50c18dea0ff97b4143336650634b44b86a7313a->enter($__internal_1aad3c640990064d4387887ae50c18dea0ff97b4143336650634b44b86a7313a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1aad3c640990064d4387887ae50c18dea0ff97b4143336650634b44b86a7313a->leave($__internal_1aad3c640990064d4387887ae50c18dea0ff97b4143336650634b44b86a7313a_prof);

        
        $__internal_9c4bec5ca072e7a3757214a85016caa8b666e7f4c1492c977cd545e2669ad71f->leave($__internal_9c4bec5ca072e7a3757214a85016caa8b666e7f4c1492c977cd545e2669ad71f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b13b6d25fb1e1c40312122f3d3bd354e11f91d48f8be45b709031ad292c4c6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13b6d25fb1e1c40312122f3d3bd354e11f91d48f8be45b709031ad292c4c6b1->enter($__internal_b13b6d25fb1e1c40312122f3d3bd354e11f91d48f8be45b709031ad292c4c6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c25ed91af48ca605d1a19905e7d87f4dbe302b5a62c305efcca26be4268db3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25ed91af48ca605d1a19905e7d87f4dbe302b5a62c305efcca26be4268db3a9->enter($__internal_c25ed91af48ca605d1a19905e7d87f4dbe302b5a62c305efcca26be4268db3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c25ed91af48ca605d1a19905e7d87f4dbe302b5a62c305efcca26be4268db3a9->leave($__internal_c25ed91af48ca605d1a19905e7d87f4dbe302b5a62c305efcca26be4268db3a9_prof);

        
        $__internal_b13b6d25fb1e1c40312122f3d3bd354e11f91d48f8be45b709031ad292c4c6b1->leave($__internal_b13b6d25fb1e1c40312122f3d3bd354e11f91d48f8be45b709031ad292c4c6b1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/WEB3A/untitled/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
