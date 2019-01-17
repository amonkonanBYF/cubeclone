<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_44bcf4ff5191bfd3c83628f759114524e38438230891593652588d1064b0b87b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc05f2192c3e1a727cd16d2e1220e2b9f79b3188e5fcaa4bdd1cb85d6873d0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc05f2192c3e1a727cd16d2e1220e2b9f79b3188e5fcaa4bdd1cb85d6873d0d7->enter($__internal_cc05f2192c3e1a727cd16d2e1220e2b9f79b3188e5fcaa4bdd1cb85d6873d0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_3c78a2b8c740d073b8d602cff6f6c6fa50fadc2e3b8e39a2c60e522e58a8c4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c78a2b8c740d073b8d602cff6f6c6fa50fadc2e3b8e39a2c60e522e58a8c4fb->enter($__internal_3c78a2b8c740d073b8d602cff6f6c6fa50fadc2e3b8e39a2c60e522e58a8c4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc05f2192c3e1a727cd16d2e1220e2b9f79b3188e5fcaa4bdd1cb85d6873d0d7->leave($__internal_cc05f2192c3e1a727cd16d2e1220e2b9f79b3188e5fcaa4bdd1cb85d6873d0d7_prof);

        
        $__internal_3c78a2b8c740d073b8d602cff6f6c6fa50fadc2e3b8e39a2c60e522e58a8c4fb->leave($__internal_3c78a2b8c740d073b8d602cff6f6c6fa50fadc2e3b8e39a2c60e522e58a8c4fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a073dd0f0ca3184d14c483da418ddafe289c72ad491c56df52870eb5a795643e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a073dd0f0ca3184d14c483da418ddafe289c72ad491c56df52870eb5a795643e->enter($__internal_a073dd0f0ca3184d14c483da418ddafe289c72ad491c56df52870eb5a795643e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4fb7a3f391e31701ddc9d71bbda5672cd6a283c0a33d94139dac40a62fa4543e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb7a3f391e31701ddc9d71bbda5672cd6a283c0a33d94139dac40a62fa4543e->enter($__internal_4fb7a3f391e31701ddc9d71bbda5672cd6a283c0a33d94139dac40a62fa4543e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_4fb7a3f391e31701ddc9d71bbda5672cd6a283c0a33d94139dac40a62fa4543e->leave($__internal_4fb7a3f391e31701ddc9d71bbda5672cd6a283c0a33d94139dac40a62fa4543e_prof);

        
        $__internal_a073dd0f0ca3184d14c483da418ddafe289c72ad491c56df52870eb5a795643e->leave($__internal_a073dd0f0ca3184d14c483da418ddafe289c72ad491c56df52870eb5a795643e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}
