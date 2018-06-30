<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ccf06df31639b7c9b2857bbf3c5e82ca65ad8846bad8b03705b504d691c84a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a2d4223f883065bb864ff422b3588025129ca7fcebf34b702963e123ab43c8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2d4223f883065bb864ff422b3588025129ca7fcebf34b702963e123ab43c8f->enter($__internal_1a2d4223f883065bb864ff422b3588025129ca7fcebf34b702963e123ab43c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1d7a5518da35751ca3e547cc9da32f6ba9065154e895a9a33cc8654f6e6acfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7a5518da35751ca3e547cc9da32f6ba9065154e895a9a33cc8654f6e6acfcd->enter($__internal_1d7a5518da35751ca3e547cc9da32f6ba9065154e895a9a33cc8654f6e6acfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a2d4223f883065bb864ff422b3588025129ca7fcebf34b702963e123ab43c8f->leave($__internal_1a2d4223f883065bb864ff422b3588025129ca7fcebf34b702963e123ab43c8f_prof);

        
        $__internal_1d7a5518da35751ca3e547cc9da32f6ba9065154e895a9a33cc8654f6e6acfcd->leave($__internal_1d7a5518da35751ca3e547cc9da32f6ba9065154e895a9a33cc8654f6e6acfcd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_66700e60d34813b151a101d8aea8b6dbb15134ed1ee7605e7b60ea73c7ad2c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66700e60d34813b151a101d8aea8b6dbb15134ed1ee7605e7b60ea73c7ad2c01->enter($__internal_66700e60d34813b151a101d8aea8b6dbb15134ed1ee7605e7b60ea73c7ad2c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_507fff8217492783293240328272cb6fa33b14607b45d812af78a5cbd4d70bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507fff8217492783293240328272cb6fa33b14607b45d812af78a5cbd4d70bf3->enter($__internal_507fff8217492783293240328272cb6fa33b14607b45d812af78a5cbd4d70bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_507fff8217492783293240328272cb6fa33b14607b45d812af78a5cbd4d70bf3->leave($__internal_507fff8217492783293240328272cb6fa33b14607b45d812af78a5cbd4d70bf3_prof);

        
        $__internal_66700e60d34813b151a101d8aea8b6dbb15134ed1ee7605e7b60ea73c7ad2c01->leave($__internal_66700e60d34813b151a101d8aea8b6dbb15134ed1ee7605e7b60ea73c7ad2c01_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f81e07401eb4dd40e3de9e24a5f3dc78d39884534acc6f36c19ae970faeb5dc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f81e07401eb4dd40e3de9e24a5f3dc78d39884534acc6f36c19ae970faeb5dc9->enter($__internal_f81e07401eb4dd40e3de9e24a5f3dc78d39884534acc6f36c19ae970faeb5dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ebeaeb0e5922bf9bb9f04475ca5a4497d3903523a58d6c2c2f625ee650e8981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebeaeb0e5922bf9bb9f04475ca5a4497d3903523a58d6c2c2f625ee650e8981->enter($__internal_0ebeaeb0e5922bf9bb9f04475ca5a4497d3903523a58d6c2c2f625ee650e8981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0ebeaeb0e5922bf9bb9f04475ca5a4497d3903523a58d6c2c2f625ee650e8981->leave($__internal_0ebeaeb0e5922bf9bb9f04475ca5a4497d3903523a58d6c2c2f625ee650e8981_prof);

        
        $__internal_f81e07401eb4dd40e3de9e24a5f3dc78d39884534acc6f36c19ae970faeb5dc9->leave($__internal_f81e07401eb4dd40e3de9e24a5f3dc78d39884534acc6f36c19ae970faeb5dc9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb8bc4cf202e8d657f715c48dae89f6dc41553eb12ceb885096d92cdd3422c46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb8bc4cf202e8d657f715c48dae89f6dc41553eb12ceb885096d92cdd3422c46->enter($__internal_eb8bc4cf202e8d657f715c48dae89f6dc41553eb12ceb885096d92cdd3422c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aad3b67b31692d4cb98c553d1767fc7742bb9bb515ae8cc9cf70db4bdee750bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad3b67b31692d4cb98c553d1767fc7742bb9bb515ae8cc9cf70db4bdee750bc->enter($__internal_aad3b67b31692d4cb98c553d1767fc7742bb9bb515ae8cc9cf70db4bdee750bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_aad3b67b31692d4cb98c553d1767fc7742bb9bb515ae8cc9cf70db4bdee750bc->leave($__internal_aad3b67b31692d4cb98c553d1767fc7742bb9bb515ae8cc9cf70db4bdee750bc_prof);

        
        $__internal_eb8bc4cf202e8d657f715c48dae89f6dc41553eb12ceb885096d92cdd3422c46->leave($__internal_eb8bc4cf202e8d657f715c48dae89f6dc41553eb12ceb885096d92cdd3422c46_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/WEB3A/Tromba/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
