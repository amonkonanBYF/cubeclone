<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8b411b7551ae8ce6ec3dcd98c8c267592e15dfafa2faa97223051ea0bb1d8fdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 3);
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
        $__internal_c35f69db3481aed58ec917f5a90117510e13b7d947fa7ee48a2e9c5fa7b4fe29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35f69db3481aed58ec917f5a90117510e13b7d947fa7ee48a2e9c5fa7b4fe29->enter($__internal_c35f69db3481aed58ec917f5a90117510e13b7d947fa7ee48a2e9c5fa7b4fe29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_6c63d10e6ef1fffb27d20f5c6c3da54adc9fbe742e2df27becd8d16e55103831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c63d10e6ef1fffb27d20f5c6c3da54adc9fbe742e2df27becd8d16e55103831->enter($__internal_6c63d10e6ef1fffb27d20f5c6c3da54adc9fbe742e2df27becd8d16e55103831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c35f69db3481aed58ec917f5a90117510e13b7d947fa7ee48a2e9c5fa7b4fe29->leave($__internal_c35f69db3481aed58ec917f5a90117510e13b7d947fa7ee48a2e9c5fa7b4fe29_prof);

        
        $__internal_6c63d10e6ef1fffb27d20f5c6c3da54adc9fbe742e2df27becd8d16e55103831->leave($__internal_6c63d10e6ef1fffb27d20f5c6c3da54adc9fbe742e2df27becd8d16e55103831_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39e44db2e84d5288f89df6c3ba503d5eefba08c6080f883df1c599ecdd829c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e44db2e84d5288f89df6c3ba503d5eefba08c6080f883df1c599ecdd829c39->enter($__internal_39e44db2e84d5288f89df6c3ba503d5eefba08c6080f883df1c599ecdd829c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6f10d55bacbc89b68ad677da088161c0ef87d81cace483c5914998833deffbbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f10d55bacbc89b68ad677da088161c0ef87d81cace483c5914998833deffbbf->enter($__internal_6f10d55bacbc89b68ad677da088161c0ef87d81cace483c5914998833deffbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 6)->display($context);
        
        $__internal_6f10d55bacbc89b68ad677da088161c0ef87d81cace483c5914998833deffbbf->leave($__internal_6f10d55bacbc89b68ad677da088161c0ef87d81cace483c5914998833deffbbf_prof);

        
        $__internal_39e44db2e84d5288f89df6c3ba503d5eefba08c6080f883df1c599ecdd829c39->leave($__internal_39e44db2e84d5288f89df6c3ba503d5eefba08c6080f883df1c599ecdd829c39_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
