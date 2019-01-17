<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1f9d97c675f70e9c43c470474d792c83d55c06e4224d44e8a030c5d8ba7b6da0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41592ab0626fd8cb0cd974f733faa33b8ecb672babdba6d1e595e8dcc00437bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41592ab0626fd8cb0cd974f733faa33b8ecb672babdba6d1e595e8dcc00437bd->enter($__internal_41592ab0626fd8cb0cd974f733faa33b8ecb672babdba6d1e595e8dcc00437bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e60571cf948f5887cec64f7a322bf9bb46f0a732518d223295ca599c6cd3fefb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60571cf948f5887cec64f7a322bf9bb46f0a732518d223295ca599c6cd3fefb->enter($__internal_e60571cf948f5887cec64f7a322bf9bb46f0a732518d223295ca599c6cd3fefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41592ab0626fd8cb0cd974f733faa33b8ecb672babdba6d1e595e8dcc00437bd->leave($__internal_41592ab0626fd8cb0cd974f733faa33b8ecb672babdba6d1e595e8dcc00437bd_prof);

        
        $__internal_e60571cf948f5887cec64f7a322bf9bb46f0a732518d223295ca599c6cd3fefb->leave($__internal_e60571cf948f5887cec64f7a322bf9bb46f0a732518d223295ca599c6cd3fefb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f0143dfc4a9478e3bc65abfe32bd035c5810546d628ee4297ac645e1c3ff6c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0143dfc4a9478e3bc65abfe32bd035c5810546d628ee4297ac645e1c3ff6c34->enter($__internal_f0143dfc4a9478e3bc65abfe32bd035c5810546d628ee4297ac645e1c3ff6c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bfaabba871d56b8736cd2f486888272d87b6e30bef2b7ca4dbc25d8d9ef5b76a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfaabba871d56b8736cd2f486888272d87b6e30bef2b7ca4dbc25d8d9ef5b76a->enter($__internal_bfaabba871d56b8736cd2f486888272d87b6e30bef2b7ca4dbc25d8d9ef5b76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_bfaabba871d56b8736cd2f486888272d87b6e30bef2b7ca4dbc25d8d9ef5b76a->leave($__internal_bfaabba871d56b8736cd2f486888272d87b6e30bef2b7ca4dbc25d8d9ef5b76a_prof);

        
        $__internal_f0143dfc4a9478e3bc65abfe32bd035c5810546d628ee4297ac645e1c3ff6c34->leave($__internal_f0143dfc4a9478e3bc65abfe32bd035c5810546d628ee4297ac645e1c3ff6c34_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
