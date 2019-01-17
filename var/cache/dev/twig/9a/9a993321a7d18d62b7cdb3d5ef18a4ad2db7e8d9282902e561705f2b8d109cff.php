<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_ac7024f9119e0c18d55d0ba5e1b5a1dadda0fdf97578c84c09f6973c01200dee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_e2b5b4d4f5b87e8af328c2fe73fcedb33974db23eb25db87ad511142c3b58aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b5b4d4f5b87e8af328c2fe73fcedb33974db23eb25db87ad511142c3b58aac->enter($__internal_e2b5b4d4f5b87e8af328c2fe73fcedb33974db23eb25db87ad511142c3b58aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_5d6f868dfd2c42cabbb213abc40dc5750247d2834691f03b8b07931dc6dedb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6f868dfd2c42cabbb213abc40dc5750247d2834691f03b8b07931dc6dedb90->enter($__internal_5d6f868dfd2c42cabbb213abc40dc5750247d2834691f03b8b07931dc6dedb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2b5b4d4f5b87e8af328c2fe73fcedb33974db23eb25db87ad511142c3b58aac->leave($__internal_e2b5b4d4f5b87e8af328c2fe73fcedb33974db23eb25db87ad511142c3b58aac_prof);

        
        $__internal_5d6f868dfd2c42cabbb213abc40dc5750247d2834691f03b8b07931dc6dedb90->leave($__internal_5d6f868dfd2c42cabbb213abc40dc5750247d2834691f03b8b07931dc6dedb90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a243196087e90df238bdd64313506f22bb157d57028413505324b449fe3d139b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a243196087e90df238bdd64313506f22bb157d57028413505324b449fe3d139b->enter($__internal_a243196087e90df238bdd64313506f22bb157d57028413505324b449fe3d139b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a8576c72a71078f1f180e04cf9b70ddf56703059121d59233eadd029bcdd8cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8576c72a71078f1f180e04cf9b70ddf56703059121d59233eadd029bcdd8cb7->enter($__internal_a8576c72a71078f1f180e04cf9b70ddf56703059121d59233eadd029bcdd8cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_a8576c72a71078f1f180e04cf9b70ddf56703059121d59233eadd029bcdd8cb7->leave($__internal_a8576c72a71078f1f180e04cf9b70ddf56703059121d59233eadd029bcdd8cb7_prof);

        
        $__internal_a243196087e90df238bdd64313506f22bb157d57028413505324b449fe3d139b->leave($__internal_a243196087e90df238bdd64313506f22bb157d57028413505324b449fe3d139b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
