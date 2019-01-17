<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_a94a0c9ee5de8f8f653c6ead3b9576a8d0428df99593ffdc1da8ee1197c7ae46 extends Twig_Template
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
        $__internal_5b8553114c8ee7ff3683a1b6b182782cba1a0d1586d882132209b382ebe97c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b8553114c8ee7ff3683a1b6b182782cba1a0d1586d882132209b382ebe97c7c->enter($__internal_5b8553114c8ee7ff3683a1b6b182782cba1a0d1586d882132209b382ebe97c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_cb4b5cde515c58a984c63c712a5a2b5468bfa6533e73a3b0787c516006d6958c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4b5cde515c58a984c63c712a5a2b5468bfa6533e73a3b0787c516006d6958c->enter($__internal_cb4b5cde515c58a984c63c712a5a2b5468bfa6533e73a3b0787c516006d6958c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5b8553114c8ee7ff3683a1b6b182782cba1a0d1586d882132209b382ebe97c7c->leave($__internal_5b8553114c8ee7ff3683a1b6b182782cba1a0d1586d882132209b382ebe97c7c_prof);

        
        $__internal_cb4b5cde515c58a984c63c712a5a2b5468bfa6533e73a3b0787c516006d6958c->leave($__internal_cb4b5cde515c58a984c63c712a5a2b5468bfa6533e73a3b0787c516006d6958c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2bbfd484dab60e966ee288a098acd7154fdc028f24b6c45d46eab3fb06b9cd07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bbfd484dab60e966ee288a098acd7154fdc028f24b6c45d46eab3fb06b9cd07->enter($__internal_2bbfd484dab60e966ee288a098acd7154fdc028f24b6c45d46eab3fb06b9cd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a6018160e3d242e1dd643680857db802ee1491330710d7eecb6886e65a32792b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6018160e3d242e1dd643680857db802ee1491330710d7eecb6886e65a32792b->enter($__internal_a6018160e3d242e1dd643680857db802ee1491330710d7eecb6886e65a32792b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_a6018160e3d242e1dd643680857db802ee1491330710d7eecb6886e65a32792b->leave($__internal_a6018160e3d242e1dd643680857db802ee1491330710d7eecb6886e65a32792b_prof);

        
        $__internal_2bbfd484dab60e966ee288a098acd7154fdc028f24b6c45d46eab3fb06b9cd07->leave($__internal_2bbfd484dab60e966ee288a098acd7154fdc028f24b6c45d46eab3fb06b9cd07_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_111224a9cbf05e1fbd1bf71f53642c2acc957c78e74bfa48ec62e3ba8b6e5cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111224a9cbf05e1fbd1bf71f53642c2acc957c78e74bfa48ec62e3ba8b6e5cc2->enter($__internal_111224a9cbf05e1fbd1bf71f53642c2acc957c78e74bfa48ec62e3ba8b6e5cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_c39e5c6ac434d9059105e06a87c95595b32cbab6f547935d1de7e0ee876ce521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39e5c6ac434d9059105e06a87c95595b32cbab6f547935d1de7e0ee876ce521->enter($__internal_c39e5c6ac434d9059105e06a87c95595b32cbab6f547935d1de7e0ee876ce521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c39e5c6ac434d9059105e06a87c95595b32cbab6f547935d1de7e0ee876ce521->leave($__internal_c39e5c6ac434d9059105e06a87c95595b32cbab6f547935d1de7e0ee876ce521_prof);

        
        $__internal_111224a9cbf05e1fbd1bf71f53642c2acc957c78e74bfa48ec62e3ba8b6e5cc2->leave($__internal_111224a9cbf05e1fbd1bf71f53642c2acc957c78e74bfa48ec62e3ba8b6e5cc2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b8e9c957fa9f761bce1880fa8a2df859e9e28a794da5642c3b50c2d5142cae2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e9c957fa9f761bce1880fa8a2df859e9e28a794da5642c3b50c2d5142cae2a->enter($__internal_b8e9c957fa9f761bce1880fa8a2df859e9e28a794da5642c3b50c2d5142cae2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_efe7d60a4080a44e650f8e010b585758f2bc38f10f6352c9bedf982b10884973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe7d60a4080a44e650f8e010b585758f2bc38f10f6352c9bedf982b10884973->enter($__internal_efe7d60a4080a44e650f8e010b585758f2bc38f10f6352c9bedf982b10884973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_efe7d60a4080a44e650f8e010b585758f2bc38f10f6352c9bedf982b10884973->leave($__internal_efe7d60a4080a44e650f8e010b585758f2bc38f10f6352c9bedf982b10884973_prof);

        
        $__internal_b8e9c957fa9f761bce1880fa8a2df859e9e28a794da5642c3b50c2d5142cae2a->leave($__internal_b8e9c957fa9f761bce1880fa8a2df859e9e28a794da5642c3b50c2d5142cae2a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
