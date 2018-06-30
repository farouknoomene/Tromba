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
        $__internal_dc7b666f9d04fc8acf22a9925e9bfaef5444321c1712a9c5d955609041988c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc7b666f9d04fc8acf22a9925e9bfaef5444321c1712a9c5d955609041988c4a->enter($__internal_dc7b666f9d04fc8acf22a9925e9bfaef5444321c1712a9c5d955609041988c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RHBundle:Default:AffecterEntret.html.twig"));

        $__internal_f0591773a726b67bc155b5f7e8eb3e201fbb4459596c0b425fa1975169047db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0591773a726b67bc155b5f7e8eb3e201fbb4459596c0b425fa1975169047db6->enter($__internal_f0591773a726b67bc155b5f7e8eb3e201fbb4459596c0b425fa1975169047db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RHBundle:Default:AffecterEntret.html.twig"));

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
                    <input type=\"text\" max=\"24\" name=\"heure\" min=\"0\">
                    :
                    <input type=\"text\" max=\"59\" min=\"0\" name=\"minute\">
                </td>
            </tr>
        </table>
        <input type=\"submit\" value=\"Valider\">
    </form>
</body>
</html>";
        
        $__internal_dc7b666f9d04fc8acf22a9925e9bfaef5444321c1712a9c5d955609041988c4a->leave($__internal_dc7b666f9d04fc8acf22a9925e9bfaef5444321c1712a9c5d955609041988c4a_prof);

        
        $__internal_f0591773a726b67bc155b5f7e8eb3e201fbb4459596c0b425fa1975169047db6->leave($__internal_f0591773a726b67bc155b5f7e8eb3e201fbb4459596c0b425fa1975169047db6_prof);

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
                    <input type=\"text\" max=\"24\" name=\"heure\" min=\"0\">
                    :
                    <input type=\"text\" max=\"59\" min=\"0\" name=\"minute\">
                </td>
            </tr>
        </table>
        <input type=\"submit\" value=\"Valider\">
    </form>
</body>
</html>", "RHBundle:Default:AffecterEntret.html.twig", "/Applications/MAMP/htdocs/WEB3A/Tromba/src/Esprit/RHBundle/Resources/views/Default/AffecterEntret.html.twig");
    }
}
