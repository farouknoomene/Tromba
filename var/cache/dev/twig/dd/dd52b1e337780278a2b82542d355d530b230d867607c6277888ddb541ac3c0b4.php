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
        $__internal_94a2fc6d9e94529bf4ccc5ce08e2bfa86c106803c38ed2e9d7bb33a9905cadcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a2fc6d9e94529bf4ccc5ce08e2bfa86c106803c38ed2e9d7bb33a9905cadcb->enter($__internal_94a2fc6d9e94529bf4ccc5ce08e2bfa86c106803c38ed2e9d7bb33a9905cadcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_50373a9c5b9d084f21bb4ab2a2b917a3f20035fe156027941ee0725a019937e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50373a9c5b9d084f21bb4ab2a2b917a3f20035fe156027941ee0725a019937e6->enter($__internal_50373a9c5b9d084f21bb4ab2a2b917a3f20035fe156027941ee0725a019937e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_94a2fc6d9e94529bf4ccc5ce08e2bfa86c106803c38ed2e9d7bb33a9905cadcb->leave($__internal_94a2fc6d9e94529bf4ccc5ce08e2bfa86c106803c38ed2e9d7bb33a9905cadcb_prof);

        
        $__internal_50373a9c5b9d084f21bb4ab2a2b917a3f20035fe156027941ee0725a019937e6->leave($__internal_50373a9c5b9d084f21bb4ab2a2b917a3f20035fe156027941ee0725a019937e6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_00a38076ab94429f372adb6b037cd61a34676d025332f529062980bcc5c7c109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a38076ab94429f372adb6b037cd61a34676d025332f529062980bcc5c7c109->enter($__internal_00a38076ab94429f372adb6b037cd61a34676d025332f529062980bcc5c7c109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8557b23cb1657f96cee3c3da4145762895a21cb799fe04c80ae5a093bc4c9e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8557b23cb1657f96cee3c3da4145762895a21cb799fe04c80ae5a093bc4c9e6->enter($__internal_b8557b23cb1657f96cee3c3da4145762895a21cb799fe04c80ae5a093bc4c9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b8557b23cb1657f96cee3c3da4145762895a21cb799fe04c80ae5a093bc4c9e6->leave($__internal_b8557b23cb1657f96cee3c3da4145762895a21cb799fe04c80ae5a093bc4c9e6_prof);

        
        $__internal_00a38076ab94429f372adb6b037cd61a34676d025332f529062980bcc5c7c109->leave($__internal_00a38076ab94429f372adb6b037cd61a34676d025332f529062980bcc5c7c109_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8be5b9643fab1145fdaa5bb8bcb7f4ba12cb1520894bdc38764d121e9ec0fed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be5b9643fab1145fdaa5bb8bcb7f4ba12cb1520894bdc38764d121e9ec0fed7->enter($__internal_8be5b9643fab1145fdaa5bb8bcb7f4ba12cb1520894bdc38764d121e9ec0fed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8ca9928e75c2edf6550b3c40590392c377b903597a505019b0e7e32a63595a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca9928e75c2edf6550b3c40590392c377b903597a505019b0e7e32a63595a89->enter($__internal_8ca9928e75c2edf6550b3c40590392c377b903597a505019b0e7e32a63595a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8ca9928e75c2edf6550b3c40590392c377b903597a505019b0e7e32a63595a89->leave($__internal_8ca9928e75c2edf6550b3c40590392c377b903597a505019b0e7e32a63595a89_prof);

        
        $__internal_8be5b9643fab1145fdaa5bb8bcb7f4ba12cb1520894bdc38764d121e9ec0fed7->leave($__internal_8be5b9643fab1145fdaa5bb8bcb7f4ba12cb1520894bdc38764d121e9ec0fed7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fc37911a5704235c63dd67ca42e6ba0df905297e3e6f3f849c2b905d56f32d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc37911a5704235c63dd67ca42e6ba0df905297e3e6f3f849c2b905d56f32d5->enter($__internal_1fc37911a5704235c63dd67ca42e6ba0df905297e3e6f3f849c2b905d56f32d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50cdc2c9e07429f7811063a24fb172cc73f0421dad070a30a6153d3776019f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50cdc2c9e07429f7811063a24fb172cc73f0421dad070a30a6153d3776019f76->enter($__internal_50cdc2c9e07429f7811063a24fb172cc73f0421dad070a30a6153d3776019f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50cdc2c9e07429f7811063a24fb172cc73f0421dad070a30a6153d3776019f76->leave($__internal_50cdc2c9e07429f7811063a24fb172cc73f0421dad070a30a6153d3776019f76_prof);

        
        $__internal_1fc37911a5704235c63dd67ca42e6ba0df905297e3e6f3f849c2b905d56f32d5->leave($__internal_1fc37911a5704235c63dd67ca42e6ba0df905297e3e6f3f849c2b905d56f32d5_prof);

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
