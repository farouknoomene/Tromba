<?php

/* base.html.twig */
class __TwigTemplate_70f2ea4d9ba6befff2419e33e81e4263a6a39804101f8049eb9b3bfd1f26a548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_873a29bdabfd5d634a52ed0013570343c2c3f639c7a2d7d60a1541d7cb6d68bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_873a29bdabfd5d634a52ed0013570343c2c3f639c7a2d7d60a1541d7cb6d68bc->enter($__internal_873a29bdabfd5d634a52ed0013570343c2c3f639c7a2d7d60a1541d7cb6d68bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cbf3eaca6b0395ae5485597b7ed09d29a0f37c22560a9f1f6d2371cfeecb28ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf3eaca6b0395ae5485597b7ed09d29a0f37c22560a9f1f6d2371cfeecb28ce->enter($__internal_cbf3eaca6b0395ae5485597b7ed09d29a0f37c22560a9f1f6d2371cfeecb28ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_873a29bdabfd5d634a52ed0013570343c2c3f639c7a2d7d60a1541d7cb6d68bc->leave($__internal_873a29bdabfd5d634a52ed0013570343c2c3f639c7a2d7d60a1541d7cb6d68bc_prof);

        
        $__internal_cbf3eaca6b0395ae5485597b7ed09d29a0f37c22560a9f1f6d2371cfeecb28ce->leave($__internal_cbf3eaca6b0395ae5485597b7ed09d29a0f37c22560a9f1f6d2371cfeecb28ce_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b324ca8f31047da38d71744079c7bf8a3090c9fc1f35e79c29da7d31882c43ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b324ca8f31047da38d71744079c7bf8a3090c9fc1f35e79c29da7d31882c43ba->enter($__internal_b324ca8f31047da38d71744079c7bf8a3090c9fc1f35e79c29da7d31882c43ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1081fb3d1349f3231cadbf835f037a5463a471a20065a0dd7397a0a78d36997a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1081fb3d1349f3231cadbf835f037a5463a471a20065a0dd7397a0a78d36997a->enter($__internal_1081fb3d1349f3231cadbf835f037a5463a471a20065a0dd7397a0a78d36997a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1081fb3d1349f3231cadbf835f037a5463a471a20065a0dd7397a0a78d36997a->leave($__internal_1081fb3d1349f3231cadbf835f037a5463a471a20065a0dd7397a0a78d36997a_prof);

        
        $__internal_b324ca8f31047da38d71744079c7bf8a3090c9fc1f35e79c29da7d31882c43ba->leave($__internal_b324ca8f31047da38d71744079c7bf8a3090c9fc1f35e79c29da7d31882c43ba_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_238f6fdb11dcadb092c0e15c7a538c8a78441c659fdf29e211970e8a6c28f4fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_238f6fdb11dcadb092c0e15c7a538c8a78441c659fdf29e211970e8a6c28f4fb->enter($__internal_238f6fdb11dcadb092c0e15c7a538c8a78441c659fdf29e211970e8a6c28f4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_908e5535414a6567d0ac96733343f114a602cf2a539c601e04d092fca80c4aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908e5535414a6567d0ac96733343f114a602cf2a539c601e04d092fca80c4aef->enter($__internal_908e5535414a6567d0ac96733343f114a602cf2a539c601e04d092fca80c4aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_908e5535414a6567d0ac96733343f114a602cf2a539c601e04d092fca80c4aef->leave($__internal_908e5535414a6567d0ac96733343f114a602cf2a539c601e04d092fca80c4aef_prof);

        
        $__internal_238f6fdb11dcadb092c0e15c7a538c8a78441c659fdf29e211970e8a6c28f4fb->leave($__internal_238f6fdb11dcadb092c0e15c7a538c8a78441c659fdf29e211970e8a6c28f4fb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_713a83c7348967f3753ee411d2579a15cd9a210c04b1047a9997867fadab86a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_713a83c7348967f3753ee411d2579a15cd9a210c04b1047a9997867fadab86a8->enter($__internal_713a83c7348967f3753ee411d2579a15cd9a210c04b1047a9997867fadab86a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c8dfbacf3cf588d32ae95fe08b3fa1778400a1b073e0ddc5eeb074fcb6b3848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8dfbacf3cf588d32ae95fe08b3fa1778400a1b073e0ddc5eeb074fcb6b3848->enter($__internal_2c8dfbacf3cf588d32ae95fe08b3fa1778400a1b073e0ddc5eeb074fcb6b3848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2c8dfbacf3cf588d32ae95fe08b3fa1778400a1b073e0ddc5eeb074fcb6b3848->leave($__internal_2c8dfbacf3cf588d32ae95fe08b3fa1778400a1b073e0ddc5eeb074fcb6b3848_prof);

        
        $__internal_713a83c7348967f3753ee411d2579a15cd9a210c04b1047a9997867fadab86a8->leave($__internal_713a83c7348967f3753ee411d2579a15cd9a210c04b1047a9997867fadab86a8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b13f821e1c43638471601e2a4be6b92609c1dbbca2c8bd85157febb4871a99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b13f821e1c43638471601e2a4be6b92609c1dbbca2c8bd85157febb4871a99f->enter($__internal_3b13f821e1c43638471601e2a4be6b92609c1dbbca2c8bd85157febb4871a99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_aebf2a9ddc3a6de9f751b7195915c5a11656a351cf07cc60c749e1e726cb4448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebf2a9ddc3a6de9f751b7195915c5a11656a351cf07cc60c749e1e726cb4448->enter($__internal_aebf2a9ddc3a6de9f751b7195915c5a11656a351cf07cc60c749e1e726cb4448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_aebf2a9ddc3a6de9f751b7195915c5a11656a351cf07cc60c749e1e726cb4448->leave($__internal_aebf2a9ddc3a6de9f751b7195915c5a11656a351cf07cc60c749e1e726cb4448_prof);

        
        $__internal_3b13f821e1c43638471601e2a4be6b92609c1dbbca2c8bd85157febb4871a99f->leave($__internal_3b13f821e1c43638471601e2a4be6b92609c1dbbca2c8bd85157febb4871a99f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/WEB3A/untitled/app/Resources/views/base.html.twig");
    }
}
