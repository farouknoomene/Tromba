<?php

/* RHBundle:Default:index.html.twig */
class __TwigTemplate_36b228876a8d122c3591236323aad9078a922acf820adb4691e5eafc61ba4e53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33ef1c6879be06204e96f409882ef672eb866d7201751eeabb57cac8f8e3685d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ef1c6879be06204e96f409882ef672eb866d7201751eeabb57cac8f8e3685d->enter($__internal_33ef1c6879be06204e96f409882ef672eb866d7201751eeabb57cac8f8e3685d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RHBundle:Default:index.html.twig"));

        $__internal_b9d85fe0c2f3906721ee5bad73c022dc1ec8cf6a32fa8e5b7b6575532e3b9b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d85fe0c2f3906721ee5bad73c022dc1ec8cf6a32fa8e5b7b6575532e3b9b8b->enter($__internal_b9d85fe0c2f3906721ee5bad73c022dc1ec8cf6a32fa8e5b7b6575532e3b9b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RHBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_33ef1c6879be06204e96f409882ef672eb866d7201751eeabb57cac8f8e3685d->leave($__internal_33ef1c6879be06204e96f409882ef672eb866d7201751eeabb57cac8f8e3685d_prof);

        
        $__internal_b9d85fe0c2f3906721ee5bad73c022dc1ec8cf6a32fa8e5b7b6575532e3b9b8b->leave($__internal_b9d85fe0c2f3906721ee5bad73c022dc1ec8cf6a32fa8e5b7b6575532e3b9b8b_prof);

    }

    public function getTemplateName()
    {
        return "RHBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "RHBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/WEB3A/Tromba/src/Esprit/RHBundle/Resources/views/Default/index.html.twig");
    }
}
