<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ffeaf08c64677b5ab87c5401e6dfcfa86fc67b9713e02f3a984b122e7f542ce6 extends Twig_Template
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
        $__internal_2d4a4741af28f6d66e0b040f062d4cfbafde9fd0fa66ac67e61b966eed6ef3e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4a4741af28f6d66e0b040f062d4cfbafde9fd0fa66ac67e61b966eed6ef3e3->enter($__internal_2d4a4741af28f6d66e0b040f062d4cfbafde9fd0fa66ac67e61b966eed6ef3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_e41e9ccacac922fa54cc87cda5dac64169defd4f0d87d9b41b461d581dac61cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41e9ccacac922fa54cc87cda5dac64169defd4f0d87d9b41b461d581dac61cf->enter($__internal_e41e9ccacac922fa54cc87cda5dac64169defd4f0d87d9b41b461d581dac61cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2d4a4741af28f6d66e0b040f062d4cfbafde9fd0fa66ac67e61b966eed6ef3e3->leave($__internal_2d4a4741af28f6d66e0b040f062d4cfbafde9fd0fa66ac67e61b966eed6ef3e3_prof);

        
        $__internal_e41e9ccacac922fa54cc87cda5dac64169defd4f0d87d9b41b461d581dac61cf->leave($__internal_e41e9ccacac922fa54cc87cda5dac64169defd4f0d87d9b41b461d581dac61cf_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d8069895454599152ff58a2ae8ef8fe43fbbe19cff2b71650a9dfbd81b56c7df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8069895454599152ff58a2ae8ef8fe43fbbe19cff2b71650a9dfbd81b56c7df->enter($__internal_d8069895454599152ff58a2ae8ef8fe43fbbe19cff2b71650a9dfbd81b56c7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4f30b2419ee51c06fda03a57b668100b7c283e355b2e325f8aa1b67b27eedc94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f30b2419ee51c06fda03a57b668100b7c283e355b2e325f8aa1b67b27eedc94->enter($__internal_4f30b2419ee51c06fda03a57b668100b7c283e355b2e325f8aa1b67b27eedc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_4f30b2419ee51c06fda03a57b668100b7c283e355b2e325f8aa1b67b27eedc94->leave($__internal_4f30b2419ee51c06fda03a57b668100b7c283e355b2e325f8aa1b67b27eedc94_prof);

        
        $__internal_d8069895454599152ff58a2ae8ef8fe43fbbe19cff2b71650a9dfbd81b56c7df->leave($__internal_d8069895454599152ff58a2ae8ef8fe43fbbe19cff2b71650a9dfbd81b56c7df_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f977d622a1cbfab56856a93b1f07a4fbaa295727aaf8589efb95756492f81ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f977d622a1cbfab56856a93b1f07a4fbaa295727aaf8589efb95756492f81ce8->enter($__internal_f977d622a1cbfab56856a93b1f07a4fbaa295727aaf8589efb95756492f81ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_7913842b206044aee73d6154f8b7e525bd8e623689080caab10a75302a364428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7913842b206044aee73d6154f8b7e525bd8e623689080caab10a75302a364428->enter($__internal_7913842b206044aee73d6154f8b7e525bd8e623689080caab10a75302a364428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7913842b206044aee73d6154f8b7e525bd8e623689080caab10a75302a364428->leave($__internal_7913842b206044aee73d6154f8b7e525bd8e623689080caab10a75302a364428_prof);

        
        $__internal_f977d622a1cbfab56856a93b1f07a4fbaa295727aaf8589efb95756492f81ce8->leave($__internal_f977d622a1cbfab56856a93b1f07a4fbaa295727aaf8589efb95756492f81ce8_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_084a56eebe89b1dfa46b1aceb4df11e1ac4e34e247a036a98486813c74e6d776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084a56eebe89b1dfa46b1aceb4df11e1ac4e34e247a036a98486813c74e6d776->enter($__internal_084a56eebe89b1dfa46b1aceb4df11e1ac4e34e247a036a98486813c74e6d776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_667604cbbc0da626960523dfe68cf4d4c8bc53b8b18c1c48364cff1f220dfc02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_667604cbbc0da626960523dfe68cf4d4c8bc53b8b18c1c48364cff1f220dfc02->enter($__internal_667604cbbc0da626960523dfe68cf4d4c8bc53b8b18c1c48364cff1f220dfc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_667604cbbc0da626960523dfe68cf4d4c8bc53b8b18c1c48364cff1f220dfc02->leave($__internal_667604cbbc0da626960523dfe68cf4d4c8bc53b8b18c1c48364cff1f220dfc02_prof);

        
        $__internal_084a56eebe89b1dfa46b1aceb4df11e1ac4e34e247a036a98486813c74e6d776->leave($__internal_084a56eebe89b1dfa46b1aceb4df11e1ac4e34e247a036a98486813c74e6d776_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
