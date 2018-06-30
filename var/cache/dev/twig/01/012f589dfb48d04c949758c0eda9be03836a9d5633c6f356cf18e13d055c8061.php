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
        $__internal_0fbc10ef1b1bf1287b72bfe9986f5d9814ff7121c894eb2eda27e9efbeba2774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fbc10ef1b1bf1287b72bfe9986f5d9814ff7121c894eb2eda27e9efbeba2774->enter($__internal_0fbc10ef1b1bf1287b72bfe9986f5d9814ff7121c894eb2eda27e9efbeba2774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RHBundle:Default:AffecterEntret.html.twig"));

        $__internal_4529607faa76a43238db84e3930fb9699caae2b23afc4b971004bde40b55bcee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4529607faa76a43238db84e3930fb9699caae2b23afc4b971004bde40b55bcee->enter($__internal_4529607faa76a43238db84e3930fb9699caae2b23afc4b971004bde40b55bcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RHBundle:Default:AffecterEntret.html.twig"));

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
                    <input type=\"number\" max=\"24\" name=\"heure\" min=\"0\">
                    :
                    <input type=\"number\" max=\"59\" min=\"0\" name=\"minute\">
                </td>
            </tr>
        </table>
        <input type=\"submit\" value=\"Valider\">
    </form>
</body>
</html>";
        
        $__internal_0fbc10ef1b1bf1287b72bfe9986f5d9814ff7121c894eb2eda27e9efbeba2774->leave($__internal_0fbc10ef1b1bf1287b72bfe9986f5d9814ff7121c894eb2eda27e9efbeba2774_prof);

        
        $__internal_4529607faa76a43238db84e3930fb9699caae2b23afc4b971004bde40b55bcee->leave($__internal_4529607faa76a43238db84e3930fb9699caae2b23afc4b971004bde40b55bcee_prof);

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
                    <input type=\"number\" max=\"24\" name=\"heure\" min=\"0\">
                    :
                    <input type=\"number\" max=\"59\" min=\"0\" name=\"minute\">
                </td>
            </tr>
        </table>
        <input type=\"submit\" value=\"Valider\">
    </form>
</body>
</html>", "RHBundle:Default:AffecterEntret.html.twig", "/Applications/MAMP/htdocs/WEB3A/Tromba/src/Esprit/RHBundle/Resources/views/Default/AffecterEntret.html.twig");
    }
}
