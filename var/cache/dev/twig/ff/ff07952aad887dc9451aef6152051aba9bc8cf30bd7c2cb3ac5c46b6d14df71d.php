<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2c9ad4f1404f05ebfd2e19f1c722221f359290941177d29c1c236ec2741a614d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_c96dc8e533f8d1f00a488669e8a7e6c7b7b0a9aaf28ce4e4b9bb57a0208455a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c96dc8e533f8d1f00a488669e8a7e6c7b7b0a9aaf28ce4e4b9bb57a0208455a3->enter($__internal_c96dc8e533f8d1f00a488669e8a7e6c7b7b0a9aaf28ce4e4b9bb57a0208455a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_904daa732d2c6058647046c9bfc5f150c1a95e14d8cc01ce22c07f2ef137998c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904daa732d2c6058647046c9bfc5f150c1a95e14d8cc01ce22c07f2ef137998c->enter($__internal_904daa732d2c6058647046c9bfc5f150c1a95e14d8cc01ce22c07f2ef137998c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c96dc8e533f8d1f00a488669e8a7e6c7b7b0a9aaf28ce4e4b9bb57a0208455a3->leave($__internal_c96dc8e533f8d1f00a488669e8a7e6c7b7b0a9aaf28ce4e4b9bb57a0208455a3_prof);

        
        $__internal_904daa732d2c6058647046c9bfc5f150c1a95e14d8cc01ce22c07f2ef137998c->leave($__internal_904daa732d2c6058647046c9bfc5f150c1a95e14d8cc01ce22c07f2ef137998c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4bb13dbe37e545ac6ba67e141e7aa0a14b598531753cadd8130d5a3fa55ae565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb13dbe37e545ac6ba67e141e7aa0a14b598531753cadd8130d5a3fa55ae565->enter($__internal_4bb13dbe37e545ac6ba67e141e7aa0a14b598531753cadd8130d5a3fa55ae565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fde9fddcdff220e32e71cb889ea694362712b4847bce44dcee217c3f43fb1f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde9fddcdff220e32e71cb889ea694362712b4847bce44dcee217c3f43fb1f8b->enter($__internal_fde9fddcdff220e32e71cb889ea694362712b4847bce44dcee217c3f43fb1f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_fde9fddcdff220e32e71cb889ea694362712b4847bce44dcee217c3f43fb1f8b->leave($__internal_fde9fddcdff220e32e71cb889ea694362712b4847bce44dcee217c3f43fb1f8b_prof);

        
        $__internal_4bb13dbe37e545ac6ba67e141e7aa0a14b598531753cadd8130d5a3fa55ae565->leave($__internal_4bb13dbe37e545ac6ba67e141e7aa0a14b598531753cadd8130d5a3fa55ae565_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
