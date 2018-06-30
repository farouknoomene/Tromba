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
        $__internal_91a55db6d58f216348f00b6b2c8d2f7688f7ad7e41b02720f10f762561889528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a55db6d58f216348f00b6b2c8d2f7688f7ad7e41b02720f10f762561889528->enter($__internal_91a55db6d58f216348f00b6b2c8d2f7688f7ad7e41b02720f10f762561889528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2ac4f97ba14164db5a617517df4d6659e6cecb0c0bcd1743f6484b327d681540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac4f97ba14164db5a617517df4d6659e6cecb0c0bcd1743f6484b327d681540->enter($__internal_2ac4f97ba14164db5a617517df4d6659e6cecb0c0bcd1743f6484b327d681540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91a55db6d58f216348f00b6b2c8d2f7688f7ad7e41b02720f10f762561889528->leave($__internal_91a55db6d58f216348f00b6b2c8d2f7688f7ad7e41b02720f10f762561889528_prof);

        
        $__internal_2ac4f97ba14164db5a617517df4d6659e6cecb0c0bcd1743f6484b327d681540->leave($__internal_2ac4f97ba14164db5a617517df4d6659e6cecb0c0bcd1743f6484b327d681540_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e922341f063ea297211f4d0899a79a809e7bb88aaa1d534275c521def44f01b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e922341f063ea297211f4d0899a79a809e7bb88aaa1d534275c521def44f01b6->enter($__internal_e922341f063ea297211f4d0899a79a809e7bb88aaa1d534275c521def44f01b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f839624ecd4c4a6ae738318cd69eaabd7bc75a47899b1fc7122f60ce245697a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f839624ecd4c4a6ae738318cd69eaabd7bc75a47899b1fc7122f60ce245697a4->enter($__internal_f839624ecd4c4a6ae738318cd69eaabd7bc75a47899b1fc7122f60ce245697a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f839624ecd4c4a6ae738318cd69eaabd7bc75a47899b1fc7122f60ce245697a4->leave($__internal_f839624ecd4c4a6ae738318cd69eaabd7bc75a47899b1fc7122f60ce245697a4_prof);

        
        $__internal_e922341f063ea297211f4d0899a79a809e7bb88aaa1d534275c521def44f01b6->leave($__internal_e922341f063ea297211f4d0899a79a809e7bb88aaa1d534275c521def44f01b6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3add7326cdc0d9660847096579fad4579f1aba9df3eeab0a7891504f51332de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3add7326cdc0d9660847096579fad4579f1aba9df3eeab0a7891504f51332de5->enter($__internal_3add7326cdc0d9660847096579fad4579f1aba9df3eeab0a7891504f51332de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_746626120b73e1dbe0b6bba61a0bc07566330fe28a4c0966e86a3a64a55cac57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746626120b73e1dbe0b6bba61a0bc07566330fe28a4c0966e86a3a64a55cac57->enter($__internal_746626120b73e1dbe0b6bba61a0bc07566330fe28a4c0966e86a3a64a55cac57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_746626120b73e1dbe0b6bba61a0bc07566330fe28a4c0966e86a3a64a55cac57->leave($__internal_746626120b73e1dbe0b6bba61a0bc07566330fe28a4c0966e86a3a64a55cac57_prof);

        
        $__internal_3add7326cdc0d9660847096579fad4579f1aba9df3eeab0a7891504f51332de5->leave($__internal_3add7326cdc0d9660847096579fad4579f1aba9df3eeab0a7891504f51332de5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1abebe4e3699b3aeda55f6d982cd0fcb306e04ff8f570e510c26e9442d549982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1abebe4e3699b3aeda55f6d982cd0fcb306e04ff8f570e510c26e9442d549982->enter($__internal_1abebe4e3699b3aeda55f6d982cd0fcb306e04ff8f570e510c26e9442d549982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48174b89ac909db1b5cdf53591264767bd7de1139565d16d07fb7f71451c3c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48174b89ac909db1b5cdf53591264767bd7de1139565d16d07fb7f71451c3c54->enter($__internal_48174b89ac909db1b5cdf53591264767bd7de1139565d16d07fb7f71451c3c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_48174b89ac909db1b5cdf53591264767bd7de1139565d16d07fb7f71451c3c54->leave($__internal_48174b89ac909db1b5cdf53591264767bd7de1139565d16d07fb7f71451c3c54_prof);

        
        $__internal_1abebe4e3699b3aeda55f6d982cd0fcb306e04ff8f570e510c26e9442d549982->leave($__internal_1abebe4e3699b3aeda55f6d982cd0fcb306e04ff8f570e510c26e9442d549982_prof);

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
