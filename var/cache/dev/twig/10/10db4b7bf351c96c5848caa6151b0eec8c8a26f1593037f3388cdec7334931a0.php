<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f8c53001f996025442ffe815cd24038a5ae766c38b20237b25564d8efeba1dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 3);
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
        $__internal_83ac86600a2a69ebdd8c9c2977c79b9bcbe3312212d79c6e5a6d0c64c227e9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ac86600a2a69ebdd8c9c2977c79b9bcbe3312212d79c6e5a6d0c64c227e9f8->enter($__internal_83ac86600a2a69ebdd8c9c2977c79b9bcbe3312212d79c6e5a6d0c64c227e9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_f98fe686535c365dfc49619bd978bf434f31f7163f73bfe8e7df942a98e3351b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98fe686535c365dfc49619bd978bf434f31f7163f73bfe8e7df942a98e3351b->enter($__internal_f98fe686535c365dfc49619bd978bf434f31f7163f73bfe8e7df942a98e3351b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83ac86600a2a69ebdd8c9c2977c79b9bcbe3312212d79c6e5a6d0c64c227e9f8->leave($__internal_83ac86600a2a69ebdd8c9c2977c79b9bcbe3312212d79c6e5a6d0c64c227e9f8_prof);

        
        $__internal_f98fe686535c365dfc49619bd978bf434f31f7163f73bfe8e7df942a98e3351b->leave($__internal_f98fe686535c365dfc49619bd978bf434f31f7163f73bfe8e7df942a98e3351b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b7cc7002cf43572e64f439c0d3154466afcdd5732fab668a0efce9ae24e4826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7cc7002cf43572e64f439c0d3154466afcdd5732fab668a0efce9ae24e4826->enter($__internal_0b7cc7002cf43572e64f439c0d3154466afcdd5732fab668a0efce9ae24e4826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d35c461f7e257cf60ecaaad246ae854689023e06bbf23e9561e89df3f9daeb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35c461f7e257cf60ecaaad246ae854689023e06bbf23e9561e89df3f9daeb6c->enter($__internal_d35c461f7e257cf60ecaaad246ae854689023e06bbf23e9561e89df3f9daeb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 6)->display($context);
        
        $__internal_d35c461f7e257cf60ecaaad246ae854689023e06bbf23e9561e89df3f9daeb6c->leave($__internal_d35c461f7e257cf60ecaaad246ae854689023e06bbf23e9561e89df3f9daeb6c_prof);

        
        $__internal_0b7cc7002cf43572e64f439c0d3154466afcdd5732fab668a0efce9ae24e4826->leave($__internal_0b7cc7002cf43572e64f439c0d3154466afcdd5732fab668a0efce9ae24e4826_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
