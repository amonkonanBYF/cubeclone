<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_e956ffa00a4d4e43ca666274a70e1663a40ea87bc391df2b915829aad1e97516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed2e515ecdb48e3820f49841afe641c3d9b32dc2137bab8c000a44df1346384e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2e515ecdb48e3820f49841afe641c3d9b32dc2137bab8c000a44df1346384e->enter($__internal_ed2e515ecdb48e3820f49841afe641c3d9b32dc2137bab8c000a44df1346384e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_27e6a43634bd75d168d86de593ab84edebf8ee5d20bd90be7d112499447bf1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e6a43634bd75d168d86de593ab84edebf8ee5d20bd90be7d112499447bf1b0->enter($__internal_27e6a43634bd75d168d86de593ab84edebf8ee5d20bd90be7d112499447bf1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ed2e515ecdb48e3820f49841afe641c3d9b32dc2137bab8c000a44df1346384e->leave($__internal_ed2e515ecdb48e3820f49841afe641c3d9b32dc2137bab8c000a44df1346384e_prof);

        
        $__internal_27e6a43634bd75d168d86de593ab84edebf8ee5d20bd90be7d112499447bf1b0->leave($__internal_27e6a43634bd75d168d86de593ab84edebf8ee5d20bd90be7d112499447bf1b0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_385ca260554e6c7d17a5a5cc0e95d31348a4475c52c1395eb8277193048cdc04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385ca260554e6c7d17a5a5cc0e95d31348a4475c52c1395eb8277193048cdc04->enter($__internal_385ca260554e6c7d17a5a5cc0e95d31348a4475c52c1395eb8277193048cdc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_6764dd6776c3781d956b286dd9176f217ee41fb373ab05e7002d125964ec9e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6764dd6776c3781d956b286dd9176f217ee41fb373ab05e7002d125964ec9e52->enter($__internal_6764dd6776c3781d956b286dd9176f217ee41fb373ab05e7002d125964ec9e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_6764dd6776c3781d956b286dd9176f217ee41fb373ab05e7002d125964ec9e52->leave($__internal_6764dd6776c3781d956b286dd9176f217ee41fb373ab05e7002d125964ec9e52_prof);

        
        $__internal_385ca260554e6c7d17a5a5cc0e95d31348a4475c52c1395eb8277193048cdc04->leave($__internal_385ca260554e6c7d17a5a5cc0e95d31348a4475c52c1395eb8277193048cdc04_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_35389f6a290b565763177bbf8df1a0c65bab400b72d839f9b52e58322938c1d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35389f6a290b565763177bbf8df1a0c65bab400b72d839f9b52e58322938c1d7->enter($__internal_35389f6a290b565763177bbf8df1a0c65bab400b72d839f9b52e58322938c1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_391e80f72bf2a68a4bc09e77d502d0544283c6120adcd5b9b1e092a388f9f218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391e80f72bf2a68a4bc09e77d502d0544283c6120adcd5b9b1e092a388f9f218->enter($__internal_391e80f72bf2a68a4bc09e77d502d0544283c6120adcd5b9b1e092a388f9f218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_391e80f72bf2a68a4bc09e77d502d0544283c6120adcd5b9b1e092a388f9f218->leave($__internal_391e80f72bf2a68a4bc09e77d502d0544283c6120adcd5b9b1e092a388f9f218_prof);

        
        $__internal_35389f6a290b565763177bbf8df1a0c65bab400b72d839f9b52e58322938c1d7->leave($__internal_35389f6a290b565763177bbf8df1a0c65bab400b72d839f9b52e58322938c1d7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3ad29b0a16f1af18fa303be350b13bbed035a4e13a0ac788c05a254e9f1e860e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad29b0a16f1af18fa303be350b13bbed035a4e13a0ac788c05a254e9f1e860e->enter($__internal_3ad29b0a16f1af18fa303be350b13bbed035a4e13a0ac788c05a254e9f1e860e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_413fed37b53d1f2b80a456fc5621d83218c919884e4f30c6d714718a5cb9d02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413fed37b53d1f2b80a456fc5621d83218c919884e4f30c6d714718a5cb9d02b->enter($__internal_413fed37b53d1f2b80a456fc5621d83218c919884e4f30c6d714718a5cb9d02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_413fed37b53d1f2b80a456fc5621d83218c919884e4f30c6d714718a5cb9d02b->leave($__internal_413fed37b53d1f2b80a456fc5621d83218c919884e4f30c6d714718a5cb9d02b_prof);

        
        $__internal_3ad29b0a16f1af18fa303be350b13bbed035a4e13a0ac788c05a254e9f1e860e->leave($__internal_3ad29b0a16f1af18fa303be350b13bbed035a4e13a0ac788c05a254e9f1e860e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
