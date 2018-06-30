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
        $__internal_c988894a095a1ef969464f312c9a9de050d8188c9bc4c98b3b173443076bfd2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c988894a095a1ef969464f312c9a9de050d8188c9bc4c98b3b173443076bfd2c->enter($__internal_c988894a095a1ef969464f312c9a9de050d8188c9bc4c98b3b173443076bfd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ced472cdc81a580ea56129400148b836f632225a35f81ce8eb9ff904fc867cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced472cdc81a580ea56129400148b836f632225a35f81ce8eb9ff904fc867cd9->enter($__internal_ced472cdc81a580ea56129400148b836f632225a35f81ce8eb9ff904fc867cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c988894a095a1ef969464f312c9a9de050d8188c9bc4c98b3b173443076bfd2c->leave($__internal_c988894a095a1ef969464f312c9a9de050d8188c9bc4c98b3b173443076bfd2c_prof);

        
        $__internal_ced472cdc81a580ea56129400148b836f632225a35f81ce8eb9ff904fc867cd9->leave($__internal_ced472cdc81a580ea56129400148b836f632225a35f81ce8eb9ff904fc867cd9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e5f56fd09e3885d12f1bb9856196efbae7f68defebdee5c5611c60a1bad40b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5f56fd09e3885d12f1bb9856196efbae7f68defebdee5c5611c60a1bad40b0->enter($__internal_4e5f56fd09e3885d12f1bb9856196efbae7f68defebdee5c5611c60a1bad40b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4e2c7dc75053b1a71a8a2e9eb9688c2efe8ae8332bf9a5c9cfd5db6dff7c78cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2c7dc75053b1a71a8a2e9eb9688c2efe8ae8332bf9a5c9cfd5db6dff7c78cd->enter($__internal_4e2c7dc75053b1a71a8a2e9eb9688c2efe8ae8332bf9a5c9cfd5db6dff7c78cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4e2c7dc75053b1a71a8a2e9eb9688c2efe8ae8332bf9a5c9cfd5db6dff7c78cd->leave($__internal_4e2c7dc75053b1a71a8a2e9eb9688c2efe8ae8332bf9a5c9cfd5db6dff7c78cd_prof);

        
        $__internal_4e5f56fd09e3885d12f1bb9856196efbae7f68defebdee5c5611c60a1bad40b0->leave($__internal_4e5f56fd09e3885d12f1bb9856196efbae7f68defebdee5c5611c60a1bad40b0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_62e5d53f8f8ef5a0e30fec125db2d203a0a3bdc83ecc904a75f5337c0167db24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e5d53f8f8ef5a0e30fec125db2d203a0a3bdc83ecc904a75f5337c0167db24->enter($__internal_62e5d53f8f8ef5a0e30fec125db2d203a0a3bdc83ecc904a75f5337c0167db24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_95aaed02e76446d7daba9926833f937a98a879bf4fe80b310b5d5eb650884322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95aaed02e76446d7daba9926833f937a98a879bf4fe80b310b5d5eb650884322->enter($__internal_95aaed02e76446d7daba9926833f937a98a879bf4fe80b310b5d5eb650884322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_95aaed02e76446d7daba9926833f937a98a879bf4fe80b310b5d5eb650884322->leave($__internal_95aaed02e76446d7daba9926833f937a98a879bf4fe80b310b5d5eb650884322_prof);

        
        $__internal_62e5d53f8f8ef5a0e30fec125db2d203a0a3bdc83ecc904a75f5337c0167db24->leave($__internal_62e5d53f8f8ef5a0e30fec125db2d203a0a3bdc83ecc904a75f5337c0167db24_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f2c20751988f0518775ce5ec1851833a2e4e2e8020583ccefe9aee8144c9e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2c20751988f0518775ce5ec1851833a2e4e2e8020583ccefe9aee8144c9e50->enter($__internal_4f2c20751988f0518775ce5ec1851833a2e4e2e8020583ccefe9aee8144c9e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_24fc2b1ada7af4d460bf1ae4c1f416eb476ad88b6af91059f1204d0145be511a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fc2b1ada7af4d460bf1ae4c1f416eb476ad88b6af91059f1204d0145be511a->enter($__internal_24fc2b1ada7af4d460bf1ae4c1f416eb476ad88b6af91059f1204d0145be511a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_24fc2b1ada7af4d460bf1ae4c1f416eb476ad88b6af91059f1204d0145be511a->leave($__internal_24fc2b1ada7af4d460bf1ae4c1f416eb476ad88b6af91059f1204d0145be511a_prof);

        
        $__internal_4f2c20751988f0518775ce5ec1851833a2e4e2e8020583ccefe9aee8144c9e50->leave($__internal_4f2c20751988f0518775ce5ec1851833a2e4e2e8020583ccefe9aee8144c9e50_prof);

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
