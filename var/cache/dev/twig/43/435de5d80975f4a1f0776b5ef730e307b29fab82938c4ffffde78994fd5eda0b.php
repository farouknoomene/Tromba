<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a05233c31873a2c7a602c8c33937db8c6f18d1c7b22a7be75fecd8e7140fb33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1b6481930a4908dcb7f0179d51fe8aa5b319d3858e9b35aee075a83dc9af5ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b6481930a4908dcb7f0179d51fe8aa5b319d3858e9b35aee075a83dc9af5ba->enter($__internal_d1b6481930a4908dcb7f0179d51fe8aa5b319d3858e9b35aee075a83dc9af5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_487829f7551975a8b98cf269f026721a95e2d196cc2c31dec4dc9c8ae9e2a5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487829f7551975a8b98cf269f026721a95e2d196cc2c31dec4dc9c8ae9e2a5c4->enter($__internal_487829f7551975a8b98cf269f026721a95e2d196cc2c31dec4dc9c8ae9e2a5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1b6481930a4908dcb7f0179d51fe8aa5b319d3858e9b35aee075a83dc9af5ba->leave($__internal_d1b6481930a4908dcb7f0179d51fe8aa5b319d3858e9b35aee075a83dc9af5ba_prof);

        
        $__internal_487829f7551975a8b98cf269f026721a95e2d196cc2c31dec4dc9c8ae9e2a5c4->leave($__internal_487829f7551975a8b98cf269f026721a95e2d196cc2c31dec4dc9c8ae9e2a5c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_89e23aae36e2d4d9ad0c1f21d2c122df6f28dbea6a4e87a8d4c990e17f70e5d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e23aae36e2d4d9ad0c1f21d2c122df6f28dbea6a4e87a8d4c990e17f70e5d5->enter($__internal_89e23aae36e2d4d9ad0c1f21d2c122df6f28dbea6a4e87a8d4c990e17f70e5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c7933882997f6b6cd4e88e8a5fb0d6add6f067452f32fb2b18afa91f61fa8c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7933882997f6b6cd4e88e8a5fb0d6add6f067452f32fb2b18afa91f61fa8c47->enter($__internal_c7933882997f6b6cd4e88e8a5fb0d6add6f067452f32fb2b18afa91f61fa8c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c7933882997f6b6cd4e88e8a5fb0d6add6f067452f32fb2b18afa91f61fa8c47->leave($__internal_c7933882997f6b6cd4e88e8a5fb0d6add6f067452f32fb2b18afa91f61fa8c47_prof);

        
        $__internal_89e23aae36e2d4d9ad0c1f21d2c122df6f28dbea6a4e87a8d4c990e17f70e5d5->leave($__internal_89e23aae36e2d4d9ad0c1f21d2c122df6f28dbea6a4e87a8d4c990e17f70e5d5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/WEB3A/untitled/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
