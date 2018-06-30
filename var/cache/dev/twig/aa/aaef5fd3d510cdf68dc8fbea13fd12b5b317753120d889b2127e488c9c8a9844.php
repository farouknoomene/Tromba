<?php

/* RHBundle:Default:listCandidats.html.twig */
class __TwigTemplate_fc3ee60315a902b72449c38c75eed8fae88283f8f39a990f197b6da8a9a0d190 extends Twig_Template
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
        $__internal_268516f07a1e539a24b6d1ea7cc965f7ea87cf10bd34a4064752867e9bae70b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_268516f07a1e539a24b6d1ea7cc965f7ea87cf10bd34a4064752867e9bae70b2->enter($__internal_268516f07a1e539a24b6d1ea7cc965f7ea87cf10bd34a4064752867e9bae70b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RHBundle:Default:listCandidats.html.twig"));

        $__internal_5c4e3a4a2a94dcd84bb4c052e892449a10bac0bb6e7c75c47de8a69aa2f28027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4e3a4a2a94dcd84bb4c052e892449a10bac0bb6e7c75c47de8a69aa2f28027->enter($__internal_5c4e3a4a2a94dcd84bb4c052e892449a10bac0bb6e7c75c47de8a69aa2f28027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RHBundle:Default:listCandidats.html.twig"));

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
            <td>CIN</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Experience</td>
            <td>Specialité</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cand"] ?? $this->getContext($context, "cand")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "cin", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "experience", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "specialite", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showformentretient", array("cin" => $this->getAttribute($context["i"], "cin", array()))), "html", null, true);
            echo "\">Affecter un entretien</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </tbody>
</table>
</body>
</html>";
        
        $__internal_268516f07a1e539a24b6d1ea7cc965f7ea87cf10bd34a4064752867e9bae70b2->leave($__internal_268516f07a1e539a24b6d1ea7cc965f7ea87cf10bd34a4064752867e9bae70b2_prof);

        
        $__internal_5c4e3a4a2a94dcd84bb4c052e892449a10bac0bb6e7c75c47de8a69aa2f28027->leave($__internal_5c4e3a4a2a94dcd84bb4c052e892449a10bac0bb6e7c75c47de8a69aa2f28027_prof);

    }

    public function getTemplateName()
    {
        return "RHBundle:Default:listCandidats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  73 => 27,  69 => 26,  65 => 25,  61 => 24,  57 => 23,  53 => 22,  50 => 21,  46 => 20,  25 => 1,);
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
            <td>CIN</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Experience</td>
            <td>Specialité</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        {% for i in cand %}
            <tr>
                <td>{{ i.cin }}</td>
                <td>{{ i.nom }}</td>
                <td>{{ i.prenom }}</td>
                <td>{{ i.experience }}</td>
                <td>{{ i.specialite }}</td>
                <td><a href=\"{{ path('showformentretient',{ cin : i.cin }) }}\">Affecter un entretien</a></td>
            </tr>
        {% endfor %}
    </tbody>
</table>
</body>
</html>", "RHBundle:Default:listCandidats.html.twig", "/Applications/MAMP/htdocs/WEB3A/Tromba/src/Esprit/RHBundle/Resources/views/Default/listCandidats.html.twig");
    }
}
