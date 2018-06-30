<?php

/* RHBundle:Default:listEntretients.html.twig */
class __TwigTemplate_165e4314615d999a6dbc63e80f2728b0416f1df12cd6624557f0fac995fc2012 extends Twig_Template
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
        $__internal_2960730b72ba8601ca7b84670d3bf3defd1af74e5feefe01e4789a21c11ad468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2960730b72ba8601ca7b84670d3bf3defd1af74e5feefe01e4789a21c11ad468->enter($__internal_2960730b72ba8601ca7b84670d3bf3defd1af74e5feefe01e4789a21c11ad468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RHBundle:Default:listEntretients.html.twig"));

        $__internal_73a522356b311bfcf495c20d73bf4cb045152820ad96ce7c4fab96b20154a858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a522356b311bfcf495c20d73bf4cb045152820ad96ce7c4fab96b20154a858->enter($__internal_73a522356b311bfcf495c20d73bf4cb045152820ad96ce7c4fab96b20154a858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RHBundle:Default:listEntretients.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title></title>
</head>
<body>
<table border=\"1\">
    <thead>
    <tr>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Type</td>
        <td>Date</td>
        <td>Heure</td>
    </tr>
    </thead>
    <tbody>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 20
            echo "        <tr>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "cin", array()), "nom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "cin", array()), "prenom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "type", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "heure", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </tbody>
</table>
</body>
</html>";
        
        $__internal_2960730b72ba8601ca7b84670d3bf3defd1af74e5feefe01e4789a21c11ad468->leave($__internal_2960730b72ba8601ca7b84670d3bf3defd1af74e5feefe01e4789a21c11ad468_prof);

        
        $__internal_73a522356b311bfcf495c20d73bf4cb045152820ad96ce7c4fab96b20154a858->leave($__internal_73a522356b311bfcf495c20d73bf4cb045152820ad96ce7c4fab96b20154a858_prof);

    }

    public function getTemplateName()
    {
        return "RHBundle:Default:listEntretients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  68 => 25,  64 => 24,  60 => 23,  56 => 22,  52 => 21,  49 => 20,  45 => 19,  25 => 1,);
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title></title>
</head>
<body>
<table border=\"1\">
    <thead>
    <tr>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Type</td>
        <td>Date</td>
        <td>Heure</td>
    </tr>
    </thead>
    <tbody>
    {% for i in list %}
        <tr>
            <td>{{ i.cin.nom }}</td>
            <td>{{ i.cin.prenom }}</td>
            <td>{{ i.type }}</td>
            <td>{{ i.date|date(\"Y-m-d\") }}</td>
            <td>{{ i.heure }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
</body>
</html>", "RHBundle:Default:listEntretients.html.twig", "/Applications/MAMP/htdocs/WEB3A/Tromba/src/Esprit/RHBundle/Resources/views/Default/listEntretients.html.twig");
    }
}
