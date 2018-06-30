<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8142be88f30ddc2e15c390a592bfe4d1edcf12b006788748e7c1a989bb635821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79b3dec6723350ba157d6d81977cdc7b1f9fe29e82dde4dbaf398e64efcc1db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b3dec6723350ba157d6d81977cdc7b1f9fe29e82dde4dbaf398e64efcc1db5->enter($__internal_79b3dec6723350ba157d6d81977cdc7b1f9fe29e82dde4dbaf398e64efcc1db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7fdc7b7bd6770d98a188b0d564889b585556e64c4c98d0d08a4a76eddedc4035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fdc7b7bd6770d98a188b0d564889b585556e64c4c98d0d08a4a76eddedc4035->enter($__internal_7fdc7b7bd6770d98a188b0d564889b585556e64c4c98d0d08a4a76eddedc4035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_79b3dec6723350ba157d6d81977cdc7b1f9fe29e82dde4dbaf398e64efcc1db5->leave($__internal_79b3dec6723350ba157d6d81977cdc7b1f9fe29e82dde4dbaf398e64efcc1db5_prof);

        
        $__internal_7fdc7b7bd6770d98a188b0d564889b585556e64c4c98d0d08a4a76eddedc4035->leave($__internal_7fdc7b7bd6770d98a188b0d564889b585556e64c4c98d0d08a4a76eddedc4035_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa4e61e47e94341e48c7f3a59d3d9f1cfb0693f13076b34adc74b5f6f370983f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4e61e47e94341e48c7f3a59d3d9f1cfb0693f13076b34adc74b5f6f370983f->enter($__internal_aa4e61e47e94341e48c7f3a59d3d9f1cfb0693f13076b34adc74b5f6f370983f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8b6ed590e9ee99b4410e514432b40a2b09ed6acf190d1d9388c74cb39a2cd48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b6ed590e9ee99b4410e514432b40a2b09ed6acf190d1d9388c74cb39a2cd48->enter($__internal_b8b6ed590e9ee99b4410e514432b40a2b09ed6acf190d1d9388c74cb39a2cd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b8b6ed590e9ee99b4410e514432b40a2b09ed6acf190d1d9388c74cb39a2cd48->leave($__internal_b8b6ed590e9ee99b4410e514432b40a2b09ed6acf190d1d9388c74cb39a2cd48_prof);

        
        $__internal_aa4e61e47e94341e48c7f3a59d3d9f1cfb0693f13076b34adc74b5f6f370983f->leave($__internal_aa4e61e47e94341e48c7f3a59d3d9f1cfb0693f13076b34adc74b5f6f370983f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7df6ea410ff1dee174da8ee2de0ceb6dbb4fd9a0e344548668ce0d0473c95a96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df6ea410ff1dee174da8ee2de0ceb6dbb4fd9a0e344548668ce0d0473c95a96->enter($__internal_7df6ea410ff1dee174da8ee2de0ceb6dbb4fd9a0e344548668ce0d0473c95a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5aacc1852ef5bd0c4ef61595e024f9482ba94c4cdc051dba1e2ab32612821df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aacc1852ef5bd0c4ef61595e024f9482ba94c4cdc051dba1e2ab32612821df4->enter($__internal_5aacc1852ef5bd0c4ef61595e024f9482ba94c4cdc051dba1e2ab32612821df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5aacc1852ef5bd0c4ef61595e024f9482ba94c4cdc051dba1e2ab32612821df4->leave($__internal_5aacc1852ef5bd0c4ef61595e024f9482ba94c4cdc051dba1e2ab32612821df4_prof);

        
        $__internal_7df6ea410ff1dee174da8ee2de0ceb6dbb4fd9a0e344548668ce0d0473c95a96->leave($__internal_7df6ea410ff1dee174da8ee2de0ceb6dbb4fd9a0e344548668ce0d0473c95a96_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a72606ee3ba36d2ea8faf5f4a18de1cf9fec7bc97e36e1eafb8ba9a05d797d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72606ee3ba36d2ea8faf5f4a18de1cf9fec7bc97e36e1eafb8ba9a05d797d1f->enter($__internal_a72606ee3ba36d2ea8faf5f4a18de1cf9fec7bc97e36e1eafb8ba9a05d797d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e587115e117126683c88acf1ce16a4adc168f66751061ad2a2d140e1fabcba12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e587115e117126683c88acf1ce16a4adc168f66751061ad2a2d140e1fabcba12->enter($__internal_e587115e117126683c88acf1ce16a4adc168f66751061ad2a2d140e1fabcba12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e587115e117126683c88acf1ce16a4adc168f66751061ad2a2d140e1fabcba12->leave($__internal_e587115e117126683c88acf1ce16a4adc168f66751061ad2a2d140e1fabcba12_prof);

        
        $__internal_a72606ee3ba36d2ea8faf5f4a18de1cf9fec7bc97e36e1eafb8ba9a05d797d1f->leave($__internal_a72606ee3ba36d2ea8faf5f4a18de1cf9fec7bc97e36e1eafb8ba9a05d797d1f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/WEB3A/Tromba/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
