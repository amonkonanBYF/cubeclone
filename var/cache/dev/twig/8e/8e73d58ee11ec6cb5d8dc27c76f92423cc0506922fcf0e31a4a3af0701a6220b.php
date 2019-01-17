<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_4e540f3812fcd25533c70884c2c679309efa0efa5dc560bb4bbc05c57dfc7ec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_e96690f5725f705a28e1f02cc8c6fa0dbd89af5bc060654139b40a2d552324aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96690f5725f705a28e1f02cc8c6fa0dbd89af5bc060654139b40a2d552324aa->enter($__internal_e96690f5725f705a28e1f02cc8c6fa0dbd89af5bc060654139b40a2d552324aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_ac9b4e8d5743930180e6dd8432e6fec30ad9da43b739ef4bcf42a83679306a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9b4e8d5743930180e6dd8432e6fec30ad9da43b739ef4bcf42a83679306a82->enter($__internal_ac9b4e8d5743930180e6dd8432e6fec30ad9da43b739ef4bcf42a83679306a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e96690f5725f705a28e1f02cc8c6fa0dbd89af5bc060654139b40a2d552324aa->leave($__internal_e96690f5725f705a28e1f02cc8c6fa0dbd89af5bc060654139b40a2d552324aa_prof);

        
        $__internal_ac9b4e8d5743930180e6dd8432e6fec30ad9da43b739ef4bcf42a83679306a82->leave($__internal_ac9b4e8d5743930180e6dd8432e6fec30ad9da43b739ef4bcf42a83679306a82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3f2eddce03a89c056c73e3bc553f8f8111715dc15bba18a4fcd17f0b59b3321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f2eddce03a89c056c73e3bc553f8f8111715dc15bba18a4fcd17f0b59b3321->enter($__internal_e3f2eddce03a89c056c73e3bc553f8f8111715dc15bba18a4fcd17f0b59b3321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ecd2f6164efda5f9a7a9146d800e37b68442a4f59a1b58ee9c41c10d92377bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd2f6164efda5f9a7a9146d800e37b68442a4f59a1b58ee9c41c10d92377bd6->enter($__internal_ecd2f6164efda5f9a7a9146d800e37b68442a4f59a1b58ee9c41c10d92377bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ecd2f6164efda5f9a7a9146d800e37b68442a4f59a1b58ee9c41c10d92377bd6->leave($__internal_ecd2f6164efda5f9a7a9146d800e37b68442a4f59a1b58ee9c41c10d92377bd6_prof);

        
        $__internal_e3f2eddce03a89c056c73e3bc553f8f8111715dc15bba18a4fcd17f0b59b3321->leave($__internal_e3f2eddce03a89c056c73e3bc553f8f8111715dc15bba18a4fcd17f0b59b3321_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
