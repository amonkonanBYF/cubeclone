<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_5c93b47429ab0cb7378030e08593e37fe18eaa57204154e27700139153fc88a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_c709af81a2f12f0d5e0bfa0c5042178ef810aa4c06c7d21d41d3ec3ac5d2d012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c709af81a2f12f0d5e0bfa0c5042178ef810aa4c06c7d21d41d3ec3ac5d2d012->enter($__internal_c709af81a2f12f0d5e0bfa0c5042178ef810aa4c06c7d21d41d3ec3ac5d2d012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_3485a9ea9091aa5e83fafcd8fb14d9f094dd87cb8513e3c95a7e89658c285b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3485a9ea9091aa5e83fafcd8fb14d9f094dd87cb8513e3c95a7e89658c285b98->enter($__internal_3485a9ea9091aa5e83fafcd8fb14d9f094dd87cb8513e3c95a7e89658c285b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c709af81a2f12f0d5e0bfa0c5042178ef810aa4c06c7d21d41d3ec3ac5d2d012->leave($__internal_c709af81a2f12f0d5e0bfa0c5042178ef810aa4c06c7d21d41d3ec3ac5d2d012_prof);

        
        $__internal_3485a9ea9091aa5e83fafcd8fb14d9f094dd87cb8513e3c95a7e89658c285b98->leave($__internal_3485a9ea9091aa5e83fafcd8fb14d9f094dd87cb8513e3c95a7e89658c285b98_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b4e2e9f1cd89cc92b69f6038428e40b42a17bb826330ea903427dc1e09113c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b4e2e9f1cd89cc92b69f6038428e40b42a17bb826330ea903427dc1e09113c5->enter($__internal_5b4e2e9f1cd89cc92b69f6038428e40b42a17bb826330ea903427dc1e09113c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c0052dbfdea2b8d79987a69e437fa6f413c5160cc9e1e0ee87f8b6c7f716d118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0052dbfdea2b8d79987a69e437fa6f413c5160cc9e1e0ee87f8b6c7f716d118->enter($__internal_c0052dbfdea2b8d79987a69e437fa6f413c5160cc9e1e0ee87f8b6c7f716d118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c0052dbfdea2b8d79987a69e437fa6f413c5160cc9e1e0ee87f8b6c7f716d118->leave($__internal_c0052dbfdea2b8d79987a69e437fa6f413c5160cc9e1e0ee87f8b6c7f716d118_prof);

        
        $__internal_5b4e2e9f1cd89cc92b69f6038428e40b42a17bb826330ea903427dc1e09113c5->leave($__internal_5b4e2e9f1cd89cc92b69f6038428e40b42a17bb826330ea903427dc1e09113c5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Registration\\check_email.html.twig");
    }
}
