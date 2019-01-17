<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_0633b41ef6eac0dee9b183b34172b833e176738ee225193069358d95370becd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48049c3ce9762fdbaa4551288641b7cc6c94b0ce6bcddc8229884732fa9ba080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48049c3ce9762fdbaa4551288641b7cc6c94b0ce6bcddc8229884732fa9ba080->enter($__internal_48049c3ce9762fdbaa4551288641b7cc6c94b0ce6bcddc8229884732fa9ba080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_772a05ef822ca7b88f5b7fd0292cd5997e99d127cac149d7fd5c4efdd3bdecab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772a05ef822ca7b88f5b7fd0292cd5997e99d127cac149d7fd5c4efdd3bdecab->enter($__internal_772a05ef822ca7b88f5b7fd0292cd5997e99d127cac149d7fd5c4efdd3bdecab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48049c3ce9762fdbaa4551288641b7cc6c94b0ce6bcddc8229884732fa9ba080->leave($__internal_48049c3ce9762fdbaa4551288641b7cc6c94b0ce6bcddc8229884732fa9ba080_prof);

        
        $__internal_772a05ef822ca7b88f5b7fd0292cd5997e99d127cac149d7fd5c4efdd3bdecab->leave($__internal_772a05ef822ca7b88f5b7fd0292cd5997e99d127cac149d7fd5c4efdd3bdecab_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a061c6d95a992a7b5d2c05e5bc7b13d322eb59486beb2c4f54eaa1409991ebd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a061c6d95a992a7b5d2c05e5bc7b13d322eb59486beb2c4f54eaa1409991ebd9->enter($__internal_a061c6d95a992a7b5d2c05e5bc7b13d322eb59486beb2c4f54eaa1409991ebd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_34be0aaa6f25b12a4d9171d24014baa4d3cc9e8fb37e8d45bf03a5861de90722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34be0aaa6f25b12a4d9171d24014baa4d3cc9e8fb37e8d45bf03a5861de90722->enter($__internal_34be0aaa6f25b12a4d9171d24014baa4d3cc9e8fb37e8d45bf03a5861de90722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_34be0aaa6f25b12a4d9171d24014baa4d3cc9e8fb37e8d45bf03a5861de90722->leave($__internal_34be0aaa6f25b12a4d9171d24014baa4d3cc9e8fb37e8d45bf03a5861de90722_prof);

        
        $__internal_a061c6d95a992a7b5d2c05e5bc7b13d322eb59486beb2c4f54eaa1409991ebd9->leave($__internal_a061c6d95a992a7b5d2c05e5bc7b13d322eb59486beb2c4f54eaa1409991ebd9_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_17ea4be2d9140f74c1ffa6bc00005603108336bac1c8853f779d7889ef86709b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17ea4be2d9140f74c1ffa6bc00005603108336bac1c8853f779d7889ef86709b->enter($__internal_17ea4be2d9140f74c1ffa6bc00005603108336bac1c8853f779d7889ef86709b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d3e102fb43e5ff58df912d499b3ff5165acce6c5af505779886388bad455c7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e102fb43e5ff58df912d499b3ff5165acce6c5af505779886388bad455c7f1->enter($__internal_d3e102fb43e5ff58df912d499b3ff5165acce6c5af505779886388bad455c7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d3e102fb43e5ff58df912d499b3ff5165acce6c5af505779886388bad455c7f1->leave($__internal_d3e102fb43e5ff58df912d499b3ff5165acce6c5af505779886388bad455c7f1_prof);

        
        $__internal_17ea4be2d9140f74c1ffa6bc00005603108336bac1c8853f779d7889ef86709b->leave($__internal_17ea4be2d9140f74c1ffa6bc00005603108336bac1c8853f779d7889ef86709b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
