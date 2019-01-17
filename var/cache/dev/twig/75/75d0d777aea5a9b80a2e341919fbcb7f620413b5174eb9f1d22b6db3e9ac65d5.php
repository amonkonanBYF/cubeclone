<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d0ea433c954008cc98fc4961ee87e62ea394532fe1ad525075d74e0fd9dc626d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4f87330367e7e1e706b2ab99aeef0a14215a7b5f5f34f6c1865c079b3a20dfe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f87330367e7e1e706b2ab99aeef0a14215a7b5f5f34f6c1865c079b3a20dfe8->enter($__internal_4f87330367e7e1e706b2ab99aeef0a14215a7b5f5f34f6c1865c079b3a20dfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2a5f13efde16deb4d4153cd3686b17fda697cf28871c078418356ec8e95f7a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5f13efde16deb4d4153cd3686b17fda697cf28871c078418356ec8e95f7a1a->enter($__internal_2a5f13efde16deb4d4153cd3686b17fda697cf28871c078418356ec8e95f7a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f87330367e7e1e706b2ab99aeef0a14215a7b5f5f34f6c1865c079b3a20dfe8->leave($__internal_4f87330367e7e1e706b2ab99aeef0a14215a7b5f5f34f6c1865c079b3a20dfe8_prof);

        
        $__internal_2a5f13efde16deb4d4153cd3686b17fda697cf28871c078418356ec8e95f7a1a->leave($__internal_2a5f13efde16deb4d4153cd3686b17fda697cf28871c078418356ec8e95f7a1a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec6c959d404e883e322e4439ce561e4fd97559b979f5b931363e2258bb29344c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6c959d404e883e322e4439ce561e4fd97559b979f5b931363e2258bb29344c->enter($__internal_ec6c959d404e883e322e4439ce561e4fd97559b979f5b931363e2258bb29344c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eaca381eda13d39dd3f55da3843d243639f97ca655c2c195cbb4715370fd6a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaca381eda13d39dd3f55da3843d243639f97ca655c2c195cbb4715370fd6a12->enter($__internal_eaca381eda13d39dd3f55da3843d243639f97ca655c2c195cbb4715370fd6a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_eaca381eda13d39dd3f55da3843d243639f97ca655c2c195cbb4715370fd6a12->leave($__internal_eaca381eda13d39dd3f55da3843d243639f97ca655c2c195cbb4715370fd6a12_prof);

        
        $__internal_ec6c959d404e883e322e4439ce561e4fd97559b979f5b931363e2258bb29344c->leave($__internal_ec6c959d404e883e322e4439ce561e4fd97559b979f5b931363e2258bb29344c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bbfdcf9fa36bc3d8b830bd1b9195e22ad43d3b9e708e30f7d29a02c2675aaad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbfdcf9fa36bc3d8b830bd1b9195e22ad43d3b9e708e30f7d29a02c2675aaad8->enter($__internal_bbfdcf9fa36bc3d8b830bd1b9195e22ad43d3b9e708e30f7d29a02c2675aaad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d7c2e47e01848c798e36188d4acc39a5d3cf6ffb1624a5729484d166365161ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c2e47e01848c798e36188d4acc39a5d3cf6ffb1624a5729484d166365161ab->enter($__internal_d7c2e47e01848c798e36188d4acc39a5d3cf6ffb1624a5729484d166365161ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d7c2e47e01848c798e36188d4acc39a5d3cf6ffb1624a5729484d166365161ab->leave($__internal_d7c2e47e01848c798e36188d4acc39a5d3cf6ffb1624a5729484d166365161ab_prof);

        
        $__internal_bbfdcf9fa36bc3d8b830bd1b9195e22ad43d3b9e708e30f7d29a02c2675aaad8->leave($__internal_bbfdcf9fa36bc3d8b830bd1b9195e22ad43d3b9e708e30f7d29a02c2675aaad8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ed154d5b1e68e50fb09b9ea047573935673782db93f34aa472d415743bab20b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed154d5b1e68e50fb09b9ea047573935673782db93f34aa472d415743bab20b->enter($__internal_0ed154d5b1e68e50fb09b9ea047573935673782db93f34aa472d415743bab20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0d7747ca012aa57b7bed89cdd050d688853bf4884e129c5b577f140b0a2c544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d7747ca012aa57b7bed89cdd050d688853bf4884e129c5b577f140b0a2c544->enter($__internal_c0d7747ca012aa57b7bed89cdd050d688853bf4884e129c5b577f140b0a2c544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c0d7747ca012aa57b7bed89cdd050d688853bf4884e129c5b577f140b0a2c544->leave($__internal_c0d7747ca012aa57b7bed89cdd050d688853bf4884e129c5b577f140b0a2c544_prof);

        
        $__internal_0ed154d5b1e68e50fb09b9ea047573935673782db93f34aa472d415743bab20b->leave($__internal_0ed154d5b1e68e50fb09b9ea047573935673782db93f34aa472d415743bab20b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
