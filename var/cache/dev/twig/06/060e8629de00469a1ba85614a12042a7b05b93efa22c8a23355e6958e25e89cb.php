<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_614c1e1b88ad81b345c13f857551ab4266d5bd0fabf982ce0daf35c5406d3055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_6f85769a59f1f826c7d6db6c4e3ce03f1d8f87df6d9efc7a7eac310dc7679e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f85769a59f1f826c7d6db6c4e3ce03f1d8f87df6d9efc7a7eac310dc7679e20->enter($__internal_6f85769a59f1f826c7d6db6c4e3ce03f1d8f87df6d9efc7a7eac310dc7679e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_7758e079371e642f8751fc4b7d9fffcf07b43cb63397bfce14a493a8eb69ae46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7758e079371e642f8751fc4b7d9fffcf07b43cb63397bfce14a493a8eb69ae46->enter($__internal_7758e079371e642f8751fc4b7d9fffcf07b43cb63397bfce14a493a8eb69ae46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f85769a59f1f826c7d6db6c4e3ce03f1d8f87df6d9efc7a7eac310dc7679e20->leave($__internal_6f85769a59f1f826c7d6db6c4e3ce03f1d8f87df6d9efc7a7eac310dc7679e20_prof);

        
        $__internal_7758e079371e642f8751fc4b7d9fffcf07b43cb63397bfce14a493a8eb69ae46->leave($__internal_7758e079371e642f8751fc4b7d9fffcf07b43cb63397bfce14a493a8eb69ae46_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5eadbb14f5b929fc8c91dd51a3fdbc0f6d9d4dc998dafc0e5cf2693149439e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eadbb14f5b929fc8c91dd51a3fdbc0f6d9d4dc998dafc0e5cf2693149439e82->enter($__internal_5eadbb14f5b929fc8c91dd51a3fdbc0f6d9d4dc998dafc0e5cf2693149439e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f2263049a9187ad05f2e40b8eaebc21855111ce48c42275dd9014a1c58a79a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2263049a9187ad05f2e40b8eaebc21855111ce48c42275dd9014a1c58a79a2b->enter($__internal_f2263049a9187ad05f2e40b8eaebc21855111ce48c42275dd9014a1c58a79a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_f2263049a9187ad05f2e40b8eaebc21855111ce48c42275dd9014a1c58a79a2b->leave($__internal_f2263049a9187ad05f2e40b8eaebc21855111ce48c42275dd9014a1c58a79a2b_prof);

        
        $__internal_5eadbb14f5b929fc8c91dd51a3fdbc0f6d9d4dc998dafc0e5cf2693149439e82->leave($__internal_5eadbb14f5b929fc8c91dd51a3fdbc0f6d9d4dc998dafc0e5cf2693149439e82_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
