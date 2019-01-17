<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_e802ae48203caa10df6b965cb2ab99afb4a225515ea7091a202e4b5e6c656afe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_455cb3823dc958d289f97b229aaf79b56583b4b01647137320a470006dd512fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455cb3823dc958d289f97b229aaf79b56583b4b01647137320a470006dd512fe->enter($__internal_455cb3823dc958d289f97b229aaf79b56583b4b01647137320a470006dd512fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_c028f70e9ac029d84e2a39806c9c161b3cdbdd6263dde75fb453538460f6f90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c028f70e9ac029d84e2a39806c9c161b3cdbdd6263dde75fb453538460f6f90d->enter($__internal_c028f70e9ac029d84e2a39806c9c161b3cdbdd6263dde75fb453538460f6f90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_455cb3823dc958d289f97b229aaf79b56583b4b01647137320a470006dd512fe->leave($__internal_455cb3823dc958d289f97b229aaf79b56583b4b01647137320a470006dd512fe_prof);

        
        $__internal_c028f70e9ac029d84e2a39806c9c161b3cdbdd6263dde75fb453538460f6f90d->leave($__internal_c028f70e9ac029d84e2a39806c9c161b3cdbdd6263dde75fb453538460f6f90d_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_763c5385638582bf3f5e02ed232f50d2a5ffcf9027bd2528188d0ac9f7b71d72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763c5385638582bf3f5e02ed232f50d2a5ffcf9027bd2528188d0ac9f7b71d72->enter($__internal_763c5385638582bf3f5e02ed232f50d2a5ffcf9027bd2528188d0ac9f7b71d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ec7b9fa0c8931d784aa18b178e559a0f455d29c065c99534846ef823f84d13f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7b9fa0c8931d784aa18b178e559a0f455d29c065c99534846ef823f84d13f5->enter($__internal_ec7b9fa0c8931d784aa18b178e559a0f455d29c065c99534846ef823f84d13f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_ec7b9fa0c8931d784aa18b178e559a0f455d29c065c99534846ef823f84d13f5->leave($__internal_ec7b9fa0c8931d784aa18b178e559a0f455d29c065c99534846ef823f84d13f5_prof);

        
        $__internal_763c5385638582bf3f5e02ed232f50d2a5ffcf9027bd2528188d0ac9f7b71d72->leave($__internal_763c5385638582bf3f5e02ed232f50d2a5ffcf9027bd2528188d0ac9f7b71d72_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f437679b98ca0a99bbb1f769efbeabb7b1a5d68a0559aa567d21cadf844f47bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f437679b98ca0a99bbb1f769efbeabb7b1a5d68a0559aa567d21cadf844f47bf->enter($__internal_f437679b98ca0a99bbb1f769efbeabb7b1a5d68a0559aa567d21cadf844f47bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e6cd02ac0b709bc397433646073a1575eeb8ecd688c7c0928d63d81dda2f3781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6cd02ac0b709bc397433646073a1575eeb8ecd688c7c0928d63d81dda2f3781->enter($__internal_e6cd02ac0b709bc397433646073a1575eeb8ecd688c7c0928d63d81dda2f3781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e6cd02ac0b709bc397433646073a1575eeb8ecd688c7c0928d63d81dda2f3781->leave($__internal_e6cd02ac0b709bc397433646073a1575eeb8ecd688c7c0928d63d81dda2f3781_prof);

        
        $__internal_f437679b98ca0a99bbb1f769efbeabb7b1a5d68a0559aa567d21cadf844f47bf->leave($__internal_f437679b98ca0a99bbb1f769efbeabb7b1a5d68a0559aa567d21cadf844f47bf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
