<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_bb8ccf24be206f9728b042f6d02cf22e7e62725c169c1a8f3986111e7b98b885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_65105c31a2076f05b74b22a6cdce7a280d7f5cbe705e7bd743aa7c19b4858b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65105c31a2076f05b74b22a6cdce7a280d7f5cbe705e7bd743aa7c19b4858b4d->enter($__internal_65105c31a2076f05b74b22a6cdce7a280d7f5cbe705e7bd743aa7c19b4858b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_598c631570f2c35198a93db469022dee7702c575c68959eed0bf58a901f7fcc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598c631570f2c35198a93db469022dee7702c575c68959eed0bf58a901f7fcc8->enter($__internal_598c631570f2c35198a93db469022dee7702c575c68959eed0bf58a901f7fcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65105c31a2076f05b74b22a6cdce7a280d7f5cbe705e7bd743aa7c19b4858b4d->leave($__internal_65105c31a2076f05b74b22a6cdce7a280d7f5cbe705e7bd743aa7c19b4858b4d_prof);

        
        $__internal_598c631570f2c35198a93db469022dee7702c575c68959eed0bf58a901f7fcc8->leave($__internal_598c631570f2c35198a93db469022dee7702c575c68959eed0bf58a901f7fcc8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15c5bf78c4c349030440b88a0f05b7a451814a64a80dded3b02231be44bd6778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c5bf78c4c349030440b88a0f05b7a451814a64a80dded3b02231be44bd6778->enter($__internal_15c5bf78c4c349030440b88a0f05b7a451814a64a80dded3b02231be44bd6778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_905b77c25173d74549f777f9afbe788fe01ce0d12944019ffbf9e32855c32fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_905b77c25173d74549f777f9afbe788fe01ce0d12944019ffbf9e32855c32fe8->enter($__internal_905b77c25173d74549f777f9afbe788fe01ce0d12944019ffbf9e32855c32fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_905b77c25173d74549f777f9afbe788fe01ce0d12944019ffbf9e32855c32fe8->leave($__internal_905b77c25173d74549f777f9afbe788fe01ce0d12944019ffbf9e32855c32fe8_prof);

        
        $__internal_15c5bf78c4c349030440b88a0f05b7a451814a64a80dded3b02231be44bd6778->leave($__internal_15c5bf78c4c349030440b88a0f05b7a451814a64a80dded3b02231be44bd6778_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
