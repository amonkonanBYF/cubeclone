<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_95d4712119f1aade5c3ef2913a153857526182295d473055658da882fde97d91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_b093db255282721bcdf1831c44f8c0eeab65eb5b7bc2c88672f1711528a34a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b093db255282721bcdf1831c44f8c0eeab65eb5b7bc2c88672f1711528a34a14->enter($__internal_b093db255282721bcdf1831c44f8c0eeab65eb5b7bc2c88672f1711528a34a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_08cd07a6eb0e494cc431d1e2cf397a733adc8f099369f1d8623333126cf997b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08cd07a6eb0e494cc431d1e2cf397a733adc8f099369f1d8623333126cf997b8->enter($__internal_08cd07a6eb0e494cc431d1e2cf397a733adc8f099369f1d8623333126cf997b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b093db255282721bcdf1831c44f8c0eeab65eb5b7bc2c88672f1711528a34a14->leave($__internal_b093db255282721bcdf1831c44f8c0eeab65eb5b7bc2c88672f1711528a34a14_prof);

        
        $__internal_08cd07a6eb0e494cc431d1e2cf397a733adc8f099369f1d8623333126cf997b8->leave($__internal_08cd07a6eb0e494cc431d1e2cf397a733adc8f099369f1d8623333126cf997b8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b904d091c90cc68d328700b9131d661183dcd3e0ef2523ff0d91e7896e783e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b904d091c90cc68d328700b9131d661183dcd3e0ef2523ff0d91e7896e783e9->enter($__internal_3b904d091c90cc68d328700b9131d661183dcd3e0ef2523ff0d91e7896e783e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0cdad145424bc8a479d41930dc2ae3cd829d4794600d47f2af41addbb67635fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cdad145424bc8a479d41930dc2ae3cd829d4794600d47f2af41addbb67635fb->enter($__internal_0cdad145424bc8a479d41930dc2ae3cd829d4794600d47f2af41addbb67635fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 10
        echo "
    <p><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">retour à l'acceuil </a></p>
";
        
        $__internal_0cdad145424bc8a479d41930dc2ae3cd829d4794600d47f2af41addbb67635fb->leave($__internal_0cdad145424bc8a479d41930dc2ae3cd829d4794600d47f2af41addbb67635fb_prof);

        
        $__internal_3b904d091c90cc68d328700b9131d661183dcd3e0ef2523ff0d91e7896e783e9->leave($__internal_3b904d091c90cc68d328700b9131d661183dcd3e0ef2523ff0d91e7896e783e9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  64 => 10,  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}

    <p><a href=\"{{ path('homepage') }}\">retour à l'acceuil </a></p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
