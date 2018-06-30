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
        $__internal_e6ddffb6ba7c5c057e29e21c033ea6a4780e4f798188ea3e8a6282a311480446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ddffb6ba7c5c057e29e21c033ea6a4780e4f798188ea3e8a6282a311480446->enter($__internal_e6ddffb6ba7c5c057e29e21c033ea6a4780e4f798188ea3e8a6282a311480446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6a4246aa75592faf1cbe40db4ee47670d98abe28a4d7f9a29cab5a70bf7d5a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4246aa75592faf1cbe40db4ee47670d98abe28a4d7f9a29cab5a70bf7d5a91->enter($__internal_6a4246aa75592faf1cbe40db4ee47670d98abe28a4d7f9a29cab5a70bf7d5a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6ddffb6ba7c5c057e29e21c033ea6a4780e4f798188ea3e8a6282a311480446->leave($__internal_e6ddffb6ba7c5c057e29e21c033ea6a4780e4f798188ea3e8a6282a311480446_prof);

        
        $__internal_6a4246aa75592faf1cbe40db4ee47670d98abe28a4d7f9a29cab5a70bf7d5a91->leave($__internal_6a4246aa75592faf1cbe40db4ee47670d98abe28a4d7f9a29cab5a70bf7d5a91_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0ff932528040ba1b4e5999f92fad4fe103d52df3d3f670f503c312ac58fadc9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff932528040ba1b4e5999f92fad4fe103d52df3d3f670f503c312ac58fadc9b->enter($__internal_0ff932528040ba1b4e5999f92fad4fe103d52df3d3f670f503c312ac58fadc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_722e0a88ada7f84f59f5f4c31a71b13786525faf02740db4dc098cc9b2d536b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722e0a88ada7f84f59f5f4c31a71b13786525faf02740db4dc098cc9b2d536b7->enter($__internal_722e0a88ada7f84f59f5f4c31a71b13786525faf02740db4dc098cc9b2d536b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_722e0a88ada7f84f59f5f4c31a71b13786525faf02740db4dc098cc9b2d536b7->leave($__internal_722e0a88ada7f84f59f5f4c31a71b13786525faf02740db4dc098cc9b2d536b7_prof);

        
        $__internal_0ff932528040ba1b4e5999f92fad4fe103d52df3d3f670f503c312ac58fadc9b->leave($__internal_0ff932528040ba1b4e5999f92fad4fe103d52df3d3f670f503c312ac58fadc9b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2262a3c526212d4ee3f0975fb2724991600c0d7aec40646974775e1940f624f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2262a3c526212d4ee3f0975fb2724991600c0d7aec40646974775e1940f624f2->enter($__internal_2262a3c526212d4ee3f0975fb2724991600c0d7aec40646974775e1940f624f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_784328436f590e57e4bdcb64e44e178a6f7731ec2bb54c105d8faa267f4a62a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784328436f590e57e4bdcb64e44e178a6f7731ec2bb54c105d8faa267f4a62a0->enter($__internal_784328436f590e57e4bdcb64e44e178a6f7731ec2bb54c105d8faa267f4a62a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_784328436f590e57e4bdcb64e44e178a6f7731ec2bb54c105d8faa267f4a62a0->leave($__internal_784328436f590e57e4bdcb64e44e178a6f7731ec2bb54c105d8faa267f4a62a0_prof);

        
        $__internal_2262a3c526212d4ee3f0975fb2724991600c0d7aec40646974775e1940f624f2->leave($__internal_2262a3c526212d4ee3f0975fb2724991600c0d7aec40646974775e1940f624f2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a488a672d6aafa2d3d3942f44800eabda81485fcbb85fcaec927803dd9ff12a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a488a672d6aafa2d3d3942f44800eabda81485fcbb85fcaec927803dd9ff12a->enter($__internal_0a488a672d6aafa2d3d3942f44800eabda81485fcbb85fcaec927803dd9ff12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_70ead57f0ed1acdcc91218f6418f6eb363b4b0e86e17225ac070a4fdf923c968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ead57f0ed1acdcc91218f6418f6eb363b4b0e86e17225ac070a4fdf923c968->enter($__internal_70ead57f0ed1acdcc91218f6418f6eb363b4b0e86e17225ac070a4fdf923c968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_70ead57f0ed1acdcc91218f6418f6eb363b4b0e86e17225ac070a4fdf923c968->leave($__internal_70ead57f0ed1acdcc91218f6418f6eb363b4b0e86e17225ac070a4fdf923c968_prof);

        
        $__internal_0a488a672d6aafa2d3d3942f44800eabda81485fcbb85fcaec927803dd9ff12a->leave($__internal_0a488a672d6aafa2d3d3942f44800eabda81485fcbb85fcaec927803dd9ff12a_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/WEB3A/Tromba/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
