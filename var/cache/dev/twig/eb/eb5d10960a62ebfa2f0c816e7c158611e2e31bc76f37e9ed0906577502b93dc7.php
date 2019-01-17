<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0bc2379e88d5ab407cecaddbc7d12b46ee4e639db91441b4745b1ab2e1731368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_c7280650b02c096915aa8efa3305a7a34844a85929060727328259c94c16d0b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7280650b02c096915aa8efa3305a7a34844a85929060727328259c94c16d0b4->enter($__internal_c7280650b02c096915aa8efa3305a7a34844a85929060727328259c94c16d0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_cb5ab44dd011d5868773b73de1267a971d00623c914b361696e8f956d1b71419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5ab44dd011d5868773b73de1267a971d00623c914b361696e8f956d1b71419->enter($__internal_cb5ab44dd011d5868773b73de1267a971d00623c914b361696e8f956d1b71419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7280650b02c096915aa8efa3305a7a34844a85929060727328259c94c16d0b4->leave($__internal_c7280650b02c096915aa8efa3305a7a34844a85929060727328259c94c16d0b4_prof);

        
        $__internal_cb5ab44dd011d5868773b73de1267a971d00623c914b361696e8f956d1b71419->leave($__internal_cb5ab44dd011d5868773b73de1267a971d00623c914b361696e8f956d1b71419_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e85f3198674577578b19b6d08c8047df0dc1c5c158b8d32613ffd0eeb46e610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e85f3198674577578b19b6d08c8047df0dc1c5c158b8d32613ffd0eeb46e610->enter($__internal_0e85f3198674577578b19b6d08c8047df0dc1c5c158b8d32613ffd0eeb46e610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c5582fb7ef1b08db9873db9e6c0b108522836be2541341ab620d0464ab0aadf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5582fb7ef1b08db9873db9e6c0b108522836be2541341ab620d0464ab0aadf4->enter($__internal_c5582fb7ef1b08db9873db9e6c0b108522836be2541341ab620d0464ab0aadf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_c5582fb7ef1b08db9873db9e6c0b108522836be2541341ab620d0464ab0aadf4->leave($__internal_c5582fb7ef1b08db9873db9e6c0b108522836be2541341ab620d0464ab0aadf4_prof);

        
        $__internal_0e85f3198674577578b19b6d08c8047df0dc1c5c158b8d32613ffd0eeb46e610->leave($__internal_0e85f3198674577578b19b6d08c8047df0dc1c5c158b8d32613ffd0eeb46e610_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
