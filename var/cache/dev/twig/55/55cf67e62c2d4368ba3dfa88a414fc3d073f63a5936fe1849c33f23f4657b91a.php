<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_bb04f379afc4c2a81a6fc40d57290745cc4a2193ab73bfa9ed3256827684f351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_ca7f8019e00ebf1bbefdd2dac0072533345a7504477fd713d106e9081e82b94f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7f8019e00ebf1bbefdd2dac0072533345a7504477fd713d106e9081e82b94f->enter($__internal_ca7f8019e00ebf1bbefdd2dac0072533345a7504477fd713d106e9081e82b94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_a88413c62157d3c1893676462498248def55b0a44cc7d2b935d5029f2e1ee00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88413c62157d3c1893676462498248def55b0a44cc7d2b935d5029f2e1ee00c->enter($__internal_a88413c62157d3c1893676462498248def55b0a44cc7d2b935d5029f2e1ee00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca7f8019e00ebf1bbefdd2dac0072533345a7504477fd713d106e9081e82b94f->leave($__internal_ca7f8019e00ebf1bbefdd2dac0072533345a7504477fd713d106e9081e82b94f_prof);

        
        $__internal_a88413c62157d3c1893676462498248def55b0a44cc7d2b935d5029f2e1ee00c->leave($__internal_a88413c62157d3c1893676462498248def55b0a44cc7d2b935d5029f2e1ee00c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31405fb765db11f76627f2a395cd282da6da9bc777dc0e846a694c0f94efb4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31405fb765db11f76627f2a395cd282da6da9bc777dc0e846a694c0f94efb4ce->enter($__internal_31405fb765db11f76627f2a395cd282da6da9bc777dc0e846a694c0f94efb4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a9178c8454ce39a9f4818a5c7f7d62f330e4bb595e5c5c44654ada03ff20fb62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9178c8454ce39a9f4818a5c7f7d62f330e4bb595e5c5c44654ada03ff20fb62->enter($__internal_a9178c8454ce39a9f4818a5c7f7d62f330e4bb595e5c5c44654ada03ff20fb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_a9178c8454ce39a9f4818a5c7f7d62f330e4bb595e5c5c44654ada03ff20fb62->leave($__internal_a9178c8454ce39a9f4818a5c7f7d62f330e4bb595e5c5c44654ada03ff20fb62_prof);

        
        $__internal_31405fb765db11f76627f2a395cd282da6da9bc777dc0e846a694c0f94efb4ce->leave($__internal_31405fb765db11f76627f2a395cd282da6da9bc777dc0e846a694c0f94efb4ce_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}
