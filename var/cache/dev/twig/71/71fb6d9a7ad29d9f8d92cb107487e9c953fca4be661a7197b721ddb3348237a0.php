<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_f61bd8c7cb9a0cb855bbeab65bf4b4d1acb87da0c979433456ffd528fa0a4aa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_4faf129f0fb17b3bb3b8a9bb23fe3adf8dcd61e4dcd599d088af0ce967a32adf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4faf129f0fb17b3bb3b8a9bb23fe3adf8dcd61e4dcd599d088af0ce967a32adf->enter($__internal_4faf129f0fb17b3bb3b8a9bb23fe3adf8dcd61e4dcd599d088af0ce967a32adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_2006fbe1536b5daa4e0dbab219091a06f5e6037896b9134107a029f11b021f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2006fbe1536b5daa4e0dbab219091a06f5e6037896b9134107a029f11b021f6c->enter($__internal_2006fbe1536b5daa4e0dbab219091a06f5e6037896b9134107a029f11b021f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4faf129f0fb17b3bb3b8a9bb23fe3adf8dcd61e4dcd599d088af0ce967a32adf->leave($__internal_4faf129f0fb17b3bb3b8a9bb23fe3adf8dcd61e4dcd599d088af0ce967a32adf_prof);

        
        $__internal_2006fbe1536b5daa4e0dbab219091a06f5e6037896b9134107a029f11b021f6c->leave($__internal_2006fbe1536b5daa4e0dbab219091a06f5e6037896b9134107a029f11b021f6c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66417c9b3701157d7d02fee27e24b79019f8304ead3087ada0a01ec382053959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66417c9b3701157d7d02fee27e24b79019f8304ead3087ada0a01ec382053959->enter($__internal_66417c9b3701157d7d02fee27e24b79019f8304ead3087ada0a01ec382053959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bc4bb6683c3856d39d45e1dde66c95fd606a6206895e26c0112c0fd2862c2835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4bb6683c3856d39d45e1dde66c95fd606a6206895e26c0112c0fd2862c2835->enter($__internal_bc4bb6683c3856d39d45e1dde66c95fd606a6206895e26c0112c0fd2862c2835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_bc4bb6683c3856d39d45e1dde66c95fd606a6206895e26c0112c0fd2862c2835->leave($__internal_bc4bb6683c3856d39d45e1dde66c95fd606a6206895e26c0112c0fd2862c2835_prof);

        
        $__internal_66417c9b3701157d7d02fee27e24b79019f8304ead3087ada0a01ec382053959->leave($__internal_66417c9b3701157d7d02fee27e24b79019f8304ead3087ada0a01ec382053959_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
