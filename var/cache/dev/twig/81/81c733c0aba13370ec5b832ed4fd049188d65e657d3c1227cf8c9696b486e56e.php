<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_b9885b28c68ef6965d9db9907b8fc7563e858430d0c7b34f116671624783dfc4 extends Twig_Template
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
        $__internal_093063db5b45d97b687102ac514184d2f5edfe1b255413a8f6e262136cb0b485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093063db5b45d97b687102ac514184d2f5edfe1b255413a8f6e262136cb0b485->enter($__internal_093063db5b45d97b687102ac514184d2f5edfe1b255413a8f6e262136cb0b485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_515ce8d592934edbe5c64a444465991e5e8b8fe824b532cb8cec2d437022b3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515ce8d592934edbe5c64a444465991e5e8b8fe824b532cb8cec2d437022b3c0->enter($__internal_515ce8d592934edbe5c64a444465991e5e8b8fe824b532cb8cec2d437022b3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_093063db5b45d97b687102ac514184d2f5edfe1b255413a8f6e262136cb0b485->leave($__internal_093063db5b45d97b687102ac514184d2f5edfe1b255413a8f6e262136cb0b485_prof);

        
        $__internal_515ce8d592934edbe5c64a444465991e5e8b8fe824b532cb8cec2d437022b3c0->leave($__internal_515ce8d592934edbe5c64a444465991e5e8b8fe824b532cb8cec2d437022b3c0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1cb273a0ec58c2244cfd5e0df19cc8b823a209822de43f5f2648700872987a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb273a0ec58c2244cfd5e0df19cc8b823a209822de43f5f2648700872987a22->enter($__internal_1cb273a0ec58c2244cfd5e0df19cc8b823a209822de43f5f2648700872987a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_236c7ae145dbe2b62f48379148fb6eeb2341f2cbc47ce5fdb9ae98da910c48f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236c7ae145dbe2b62f48379148fb6eeb2341f2cbc47ce5fdb9ae98da910c48f9->enter($__internal_236c7ae145dbe2b62f48379148fb6eeb2341f2cbc47ce5fdb9ae98da910c48f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_236c7ae145dbe2b62f48379148fb6eeb2341f2cbc47ce5fdb9ae98da910c48f9->leave($__internal_236c7ae145dbe2b62f48379148fb6eeb2341f2cbc47ce5fdb9ae98da910c48f9_prof);

        
        $__internal_1cb273a0ec58c2244cfd5e0df19cc8b823a209822de43f5f2648700872987a22->leave($__internal_1cb273a0ec58c2244cfd5e0df19cc8b823a209822de43f5f2648700872987a22_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d25d2d8087eab0b96c594012443190f49bf5b4f51870cc63d5190f9a9bc0e355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d25d2d8087eab0b96c594012443190f49bf5b4f51870cc63d5190f9a9bc0e355->enter($__internal_d25d2d8087eab0b96c594012443190f49bf5b4f51870cc63d5190f9a9bc0e355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_63f6509242b73f6e105f74028a655842efceab877a9ae324ba3687cf581d7752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f6509242b73f6e105f74028a655842efceab877a9ae324ba3687cf581d7752->enter($__internal_63f6509242b73f6e105f74028a655842efceab877a9ae324ba3687cf581d7752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_63f6509242b73f6e105f74028a655842efceab877a9ae324ba3687cf581d7752->leave($__internal_63f6509242b73f6e105f74028a655842efceab877a9ae324ba3687cf581d7752_prof);

        
        $__internal_d25d2d8087eab0b96c594012443190f49bf5b4f51870cc63d5190f9a9bc0e355->leave($__internal_d25d2d8087eab0b96c594012443190f49bf5b4f51870cc63d5190f9a9bc0e355_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_32f698c95a32c7d497f3767236ea9ff2ed8ba65bc985228b897c1f1c9e490c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32f698c95a32c7d497f3767236ea9ff2ed8ba65bc985228b897c1f1c9e490c35->enter($__internal_32f698c95a32c7d497f3767236ea9ff2ed8ba65bc985228b897c1f1c9e490c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_50b3356aa4a46b185632f2d2ac2c3c04df4eaf1f42c2058db0376ed290c5605c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b3356aa4a46b185632f2d2ac2c3c04df4eaf1f42c2058db0376ed290c5605c->enter($__internal_50b3356aa4a46b185632f2d2ac2c3c04df4eaf1f42c2058db0376ed290c5605c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_50b3356aa4a46b185632f2d2ac2c3c04df4eaf1f42c2058db0376ed290c5605c->leave($__internal_50b3356aa4a46b185632f2d2ac2c3c04df4eaf1f42c2058db0376ed290c5605c_prof);

        
        $__internal_32f698c95a32c7d497f3767236ea9ff2ed8ba65bc985228b897c1f1c9e490c35->leave($__internal_32f698c95a32c7d497f3767236ea9ff2ed8ba65bc985228b897c1f1c9e490c35_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
