<?php

/* RHBundle:Default:AffecterEntret.html.twig */
class __TwigTemplate_99efd9af2d4f814a902ca4d21d2a1e9b6b95ee270bb4ee5948208b241eaa6b0d extends Twig_Template
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
        $__internal_6157c69f7019a0e1f330bdc00992e250300e375508aff705a12dc46e91eaf5b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6157c69f7019a0e1f330bdc00992e250300e375508aff705a12dc46e91eaf5b0->enter($__internal_6157c69f7019a0e1f330bdc00992e250300e375508aff705a12dc46e91eaf5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RHBundle:Default:AffecterEntret.html.twig"));

        $__internal_01e80e9d33c9d7334a6d2889fa49236c0a94037e0a30eb91b2f18a410722ba6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e80e9d33c9d7334a6d2889fa49236c0a94037e0a30eb91b2f18a410722ba6e->enter($__internal_01e80e9d33c9d7334a6d2889fa49236c0a94037e0a30eb91b2f18a410722ba6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RHBundle:Default:AffecterEntret.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title></title>
</head>
<body>
    <h2>Affecter un entretien a ";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["cand"] ?? $this->getContext($context, "cand")), "nom", array()) . " ") . $this->getAttribute(($context["cand"] ?? $this->getContext($context, "cand")), "prenom", array())), "html", null, true);
        echo "</h2>
    <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affecterentredb", array("cin" => $this->getAttribute(($context["cand"] ?? $this->getContext($context, "cand")), "cin", array()))), "html", null, true);
        echo "\" method=\"post\">
        <table border=\"0\">
            <tr>
                <td>Type : </td>
                <td>
                    <select name=\"type\">
                        <option value=\"Technique Niveau 1\">Technique Niveau 1</option>
                        <option value=\"Technique Niveau 2\">Technique Niveau 2</option>
                        <option value=\"RH\">RH</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date : </td>
                <td><input type=\"date\" name=\"dateentre\"></td>
            </tr>
            <tr>
                <td>Heure : </td>
                <td>
                    <input type=\"text\"name=\"heure\">
                    :
                    <input type=\"text\"name=\"minute\">
                </td>
            </tr>
        </table>
        <input type=\"submit\" value=\"Valider\">
    </form>
</body>
</html>";
        
        $__internal_6157c69f7019a0e1f330bdc00992e250300e375508aff705a12dc46e91eaf5b0->leave($__internal_6157c69f7019a0e1f330bdc00992e250300e375508aff705a12dc46e91eaf5b0_prof);

        
        $__internal_01e80e9d33c9d7334a6d2889fa49236c0a94037e0a30eb91b2f18a410722ba6e->leave($__internal_01e80e9d33c9d7334a6d2889fa49236c0a94037e0a30eb91b2f18a410722ba6e_prof);

    }

    public function getTemplateName()
    {
        return "RHBundle:Default:AffecterEntret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  34 => 8,  25 => 1,);
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
    <h2>Affecter un entretien a {{ cand.nom ~' '~ cand.prenom }}</h2>
    <form action=\"{{ path('affecterentredb',{cin : cand.cin }) }}\" method=\"post\">
        <table border=\"0\">
            <tr>
                <td>Type : </td>
                <td>
                    <select name=\"type\">
                        <option value=\"Technique Niveau 1\">Technique Niveau 1</option>
                        <option value=\"Technique Niveau 2\">Technique Niveau 2</option>
                        <option value=\"RH\">RH</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date : </td>
                <td><input type=\"date\" name=\"dateentre\"></td>
            </tr>
            <tr>
                <td>Heure : </td>
                <td>
                    <input type=\"text\"name=\"heure\">
                    :
                    <input type=\"text\"name=\"minute\">
                </td>
            </tr>
        </table>
        <input type=\"submit\" value=\"Valider\">
    </form>
</body>
</html>", "RHBundle:Default:AffecterEntret.html.twig", "/Applications/MAMP/htdocs/WEB3A/Tromba/src/Esprit/RHBundle/Resources/views/Default/AffecterEntret.html.twig");
    }
}
