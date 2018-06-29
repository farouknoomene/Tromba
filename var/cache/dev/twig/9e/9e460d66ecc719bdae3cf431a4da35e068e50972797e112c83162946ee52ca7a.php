<?php

/* @WebProfiler/Collector/cache.html.twig */
class __TwigTemplate_0d401bb06f90ee0e0c7bbe78769b1f17477542751a84c1922cae84d44988b2a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/cache.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91f3940f15ca5929f4cf39c64335d308e9617b3415811cf6c2124a8375b6ab7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f3940f15ca5929f4cf39c64335d308e9617b3415811cf6c2124a8375b6ab7f->enter($__internal_91f3940f15ca5929f4cf39c64335d308e9617b3415811cf6c2124a8375b6ab7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/cache.html.twig"));

        $__internal_19b314f74ad9ecd21e022367dd1a44484e974e4524a5b66b13197e14a887d370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b314f74ad9ecd21e022367dd1a44484e974e4524a5b66b13197e14a887d370->enter($__internal_19b314f74ad9ecd21e022367dd1a44484e974e4524a5b66b13197e14a887d370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/cache.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91f3940f15ca5929f4cf39c64335d308e9617b3415811cf6c2124a8375b6ab7f->leave($__internal_91f3940f15ca5929f4cf39c64335d308e9617b3415811cf6c2124a8375b6ab7f_prof);

        
        $__internal_19b314f74ad9ecd21e022367dd1a44484e974e4524a5b66b13197e14a887d370->leave($__internal_19b314f74ad9ecd21e022367dd1a44484e974e4524a5b66b13197e14a887d370_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f1906e896a8c49ee1e804e7d8ba03686b868b1d04e711fc81464512b46e263a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1906e896a8c49ee1e804e7d8ba03686b868b1d04e711fc81464512b46e263a3->enter($__internal_f1906e896a8c49ee1e804e7d8ba03686b868b1d04e711fc81464512b46e263a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c96e3612dd54006f384d431d9877454956ac1e7d19fca5ff790afc3d2644d950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96e3612dd54006f384d431d9877454956ac1e7d19fca5ff790afc3d2644d950->enter($__internal_c96e3612dd54006f384d431d9877454956ac1e7d19fca5ff790afc3d2644d950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "calls", array()) > 0)) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/cache.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "calls", array()), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "time", array()) * 1000)), "html", null, true);
            echo "</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 14
            echo "        ";
            ob_start();
            // line 15
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Cache Calls</b>
            <span>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "calls", array()), "html", null, true);
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
            // line 21
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache hits</b>
            <span>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "hits", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "reads", array()), "html", null, true);
            if ( !(null === $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "hit_read_ratio", array()))) {
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "hit_read_ratio", array()), "html", null, true);
                echo "%)";
            }
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache writes</b>
            <span>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "writes", array()), "html", null, true);
            echo "</span>
        </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 32
            echo "
        ";
            // line 33
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))));
            echo "
    ";
        }
        
        $__internal_c96e3612dd54006f384d431d9877454956ac1e7d19fca5ff790afc3d2644d950->leave($__internal_c96e3612dd54006f384d431d9877454956ac1e7d19fca5ff790afc3d2644d950_prof);

        
        $__internal_f1906e896a8c49ee1e804e7d8ba03686b868b1d04e711fc81464512b46e263a3->leave($__internal_f1906e896a8c49ee1e804e7d8ba03686b868b1d04e711fc81464512b46e263a3_prof);

    }

    // line 37
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36b75cf36edf069bd5931786cfac4c8777fb783cc2a273edb8bd6390e7b4e726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b75cf36edf069bd5931786cfac4c8777fb783cc2a273edb8bd6390e7b4e726->enter($__internal_36b75cf36edf069bd5931786cfac4c8777fb783cc2a273edb8bd6390e7b4e726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30993c533b3a691f460317061dc0aa2afe18442cf1088ce61c1980beb4cdc7b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30993c533b3a691f460317061dc0aa2afe18442cf1088ce61c1980beb4cdc7b3->enter($__internal_30993c533b3a691f460317061dc0aa2afe18442cf1088ce61c1980beb4cdc7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 38
        echo "    <span class=\"label ";
        echo ((($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "calls", array()) == 0)) ? ("disabled") : (""));
        echo "\">
    <span class=\"icon\">
        ";
        // line 40
        echo twig_include($this->env, $context, "@WebProfiler/Icon/cache.svg");
        echo "
    </span>
    <strong>Cache</strong>
</span>
";
        
        $__internal_30993c533b3a691f460317061dc0aa2afe18442cf1088ce61c1980beb4cdc7b3->leave($__internal_30993c533b3a691f460317061dc0aa2afe18442cf1088ce61c1980beb4cdc7b3_prof);

        
        $__internal_36b75cf36edf069bd5931786cfac4c8777fb783cc2a273edb8bd6390e7b4e726->leave($__internal_36b75cf36edf069bd5931786cfac4c8777fb783cc2a273edb8bd6390e7b4e726_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c1a7614f26be8c8aa471004065e57fc1107d297290353bbccdcccba166e40c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c1a7614f26be8c8aa471004065e57fc1107d297290353bbccdcccba166e40c6->enter($__internal_9c1a7614f26be8c8aa471004065e57fc1107d297290353bbccdcccba166e40c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2d69fcf014cdf9ea97fb7c9ed7c8d35b65e54fe1f2764d63ffe99e5f07984c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d69fcf014cdf9ea97fb7c9ed7c8d35b65e54fe1f2764d63ffe99e5f07984c6f->enter($__internal_2d69fcf014cdf9ea97fb7c9ed7c8d35b65e54fe1f2764d63ffe99e5f07984c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Cache</h2>

    ";
        // line 49
        if (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "calls", array()) == 0)) {
            // line 50
            echo "        <div class=\"empty\">
            <p>No cache calls were made.</p>
        </div>
    ";
        } else {
            // line 54
            echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "calls", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total calls</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 60
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "time", array()) * 1000)), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Total time</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "reads", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total reads</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "writes", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total writes</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "deletes", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total deletes</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "hits", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total hits</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totals", array()), "misses", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total misses</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">
                    ";
            // line 87
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array(), "any", false, true), "hit_read_ratio", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array(), "any", false, true), "hit_read_ratio", array())))) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "totals", array(), "any", false, true), "hit_read_ratio", array())) : (0)), "html", null, true);
            echo " <span class=\"unit\">%</span>
                </span>
                <span class=\"label\">Hits/reads</span>
            </div>
        </div>

        <h2>Pools</h2>
        <div class=\"sf-tabs\">
            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array()));
            foreach ($context['_seq'] as $context["name"] => $context["calls"]) {
                // line 96
                echo "                <div class=\"tab ";
                echo (((twig_length_filter($this->env, $context["calls"]) == 0)) ? ("disabled") : (""));
                echo "\">
                    <h3 class=\"tab-title\">";
                // line 97
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo " <span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statistics", array()), $context["name"], array(), "array"), "calls", array()), "html", null, true);
                echo "</span></h3>

                    <div class=\"tab-content\">
                        ";
                // line 100
                if ((twig_length_filter($this->env, $context["calls"]) == 0)) {
                    // line 101
                    echo "                            <div class=\"empty\">
                                <p>No calls were made for ";
                    // line 102
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " pool.</p>
                            </div>
                        ";
                } else {
                    // line 105
                    echo "                            <h4>Metrics</h4>
                            <div class=\"metrics\">
                                ";
                    // line 107
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statistics", array()), $context["name"], array(), "array"));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 108
                        echo "                                    <div class=\"metric\">
                                        <span class=\"value\">
                                            ";
                        // line 110
                        if (($context["key"] == "time")) {
                            // line 111
                            echo "                                                ";
                            echo twig_escape_filter($this->env, sprintf("%0.2f", (1000 * $this->getAttribute($context["value"], "value", array()))), "html", null, true);
                            echo " <span class=\"unit\">ms</span>
                                            ";
                        } elseif ((                        // line 112
$context["key"] == "hit_read_ratio")) {
                            // line 113
                            echo "                                                ";
                            echo twig_escape_filter($this->env, ((($this->getAttribute($context["value"], "value", array(), "any", true, true) &&  !(null === $this->getAttribute($context["value"], "value", array())))) ? ($this->getAttribute($context["value"], "value", array())) : (0)), "html", null, true);
                            echo " <span class=\"unit\">%</span>
                                            ";
                        } else {
                            // line 115
                            echo "                                                ";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "
                                            ";
                        }
                        // line 117
                        echo "                                        </span>
                                        <span class=\"label\">";
                        // line 118
                        echo twig_escape_filter($this->env, ((($context["key"] == "hit_read_ratio")) ? ("Hits/reads") : (twig_capitalize_string_filter($this->env, $context["key"]))), "html", null, true);
                        echo "</span>
                                    </div>
                                    ";
                        // line 120
                        if ((($context["key"] == "time") || ($context["key"] == "deletes"))) {
                            // line 121
                            echo "                                        <div class=\"metric-divider\"></div>
                                    ";
                        }
                        // line 123
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 124
                    echo "                            </div>

                            <h4>Calls</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Time</th>
                                        <th>Call</th>
                                        <th>Hit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["calls"]);
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
                        // line 138
                        echo "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                        // line 139
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                        echo "</td>
                                        <td class=\"nowrap\">";
                        // line 140
                        echo twig_escape_filter($this->env, sprintf("%0.2f", (($this->getAttribute($context["call"], "end", array()) - $this->getAttribute($context["call"], "start", array())) * 1000)), "html", null, true);
                        echo " ms</td>
                                        <td class=\"nowrap\">";
                        // line 141
                        echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "name", array()), "html", null, true);
                        echo "()</td>
                                        <td>";
                        // line 142
                        echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute($context["call"], "value", array()), "result", array()), 2));
                        echo "</td>
                                    </tr>
                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "                                </tbody>
                            </table>
                        ";
                }
                // line 148
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['calls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "        </div>
    ";
        }
        
        $__internal_2d69fcf014cdf9ea97fb7c9ed7c8d35b65e54fe1f2764d63ffe99e5f07984c6f->leave($__internal_2d69fcf014cdf9ea97fb7c9ed7c8d35b65e54fe1f2764d63ffe99e5f07984c6f_prof);

        
        $__internal_9c1a7614f26be8c8aa471004065e57fc1107d297290353bbccdcccba166e40c6->leave($__internal_9c1a7614f26be8c8aa471004065e57fc1107d297290353bbccdcccba166e40c6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/cache.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 151,  400 => 148,  395 => 145,  378 => 142,  374 => 141,  370 => 140,  366 => 139,  363 => 138,  346 => 137,  331 => 124,  325 => 123,  321 => 121,  319 => 120,  314 => 118,  311 => 117,  305 => 115,  299 => 113,  297 => 112,  292 => 111,  290 => 110,  286 => 108,  282 => 107,  278 => 105,  272 => 102,  269 => 101,  267 => 100,  259 => 97,  254 => 96,  250 => 95,  239 => 87,  231 => 82,  224 => 78,  216 => 73,  209 => 69,  202 => 65,  194 => 60,  187 => 56,  183 => 54,  177 => 50,  175 => 49,  171 => 47,  162 => 46,  147 => 40,  141 => 38,  132 => 37,  119 => 33,  116 => 32,  110 => 29,  96 => 25,  89 => 21,  82 => 17,  78 => 15,  75 => 14,  68 => 10,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.totals.calls > 0 %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/cache.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.totals.calls }}</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.totals.time * 1000) }}</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        {% endset %}
        {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache Calls</b>
            <span>{{ collector.totals.calls }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>{{ '%0.2f'|format(collector.totals.time * 1000) }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache hits</b>
            <span>{{ collector.totals.hits }} / {{ collector.totals.reads }}{% if collector.totals.hit_read_ratio is not null %} ({{ collector.totals.hit_read_ratio }}%){% endif %}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache writes</b>
            <span>{{ collector.totals.writes }}</span>
        </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.totals.calls == 0 ? 'disabled' }}\">
    <span class=\"icon\">
        {{ include('@WebProfiler/Icon/cache.svg') }}
    </span>
    <strong>Cache</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Cache</h2>

    {% if collector.totals.calls == 0 %}
        <div class=\"empty\">
            <p>No cache calls were made.</p>
        </div>
    {% else %}
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.calls }}</span>
                <span class=\"label\">Total calls</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.2f'|format(collector.totals.time * 1000) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Total time</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.reads }}</span>
                <span class=\"label\">Total reads</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.writes }}</span>
                <span class=\"label\">Total writes</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.deletes }}</span>
                <span class=\"label\">Total deletes</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.hits }}</span>
                <span class=\"label\">Total hits</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.misses }}</span>
                <span class=\"label\">Total misses</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">
                    {{ collector.totals.hit_read_ratio ?? 0 }} <span class=\"unit\">%</span>
                </span>
                <span class=\"label\">Hits/reads</span>
            </div>
        </div>

        <h2>Pools</h2>
        <div class=\"sf-tabs\">
            {% for name, calls in collector.calls %}
                <div class=\"tab {{ calls|length == 0 ? 'disabled' }}\">
                    <h3 class=\"tab-title\">{{ name }} <span class=\"badge\">{{ collector.statistics[name].calls }}</span></h3>

                    <div class=\"tab-content\">
                        {% if calls|length == 0 %}
                            <div class=\"empty\">
                                <p>No calls were made for {{ name }} pool.</p>
                            </div>
                        {% else %}
                            <h4>Metrics</h4>
                            <div class=\"metrics\">
                                {% for key, value in collector.statistics[name] %}
                                    <div class=\"metric\">
                                        <span class=\"value\">
                                            {% if key == 'time' %}
                                                {{ '%0.2f'|format(1000 * value.value) }} <span class=\"unit\">ms</span>
                                            {% elseif key == 'hit_read_ratio' %}
                                                {{ value.value ?? 0 }} <span class=\"unit\">%</span>
                                            {% else %}
                                                {{ value }}
                                            {% endif %}
                                        </span>
                                        <span class=\"label\">{{ key == 'hit_read_ratio' ? 'Hits/reads' : key|capitalize }}</span>
                                    </div>
                                    {% if key == 'time' or key == 'deletes' %}
                                        <div class=\"metric-divider\"></div>
                                    {% endif %}
                                {% endfor %}
                            </div>

                            <h4>Calls</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Time</th>
                                        <th>Call</th>
                                        <th>Hit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for call in calls %}
                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                                        <td class=\"nowrap\">{{ '%0.2f'|format((call.end - call.start) * 1000) }} ms</td>
                                        <td class=\"nowrap\">{{ call.name }}()</td>
                                        <td>{{ profiler_dump(call.value.result, maxDepth=2) }}</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/cache.html.twig", "/Applications/MAMP/htdocs/WEB3A/untitled/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/cache.html.twig");
    }
}
