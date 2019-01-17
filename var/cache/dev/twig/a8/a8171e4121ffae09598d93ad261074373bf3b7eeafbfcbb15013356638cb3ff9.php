<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_0d984eb2441729227d644f23c98f50b524666445fb5f45416e6e796feb125b07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_a3b30463aba3d9a6a395acf25096db7f389514316b2c1d3eb3bfe35c1fb2c1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b30463aba3d9a6a395acf25096db7f389514316b2c1d3eb3bfe35c1fb2c1d9->enter($__internal_a3b30463aba3d9a6a395acf25096db7f389514316b2c1d3eb3bfe35c1fb2c1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_116c32bad8cd04b33a2d9a032c95c5b2fcaed4a89d65b66976a47f8e2ce0d4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116c32bad8cd04b33a2d9a032c95c5b2fcaed4a89d65b66976a47f8e2ce0d4b7->enter($__internal_116c32bad8cd04b33a2d9a032c95c5b2fcaed4a89d65b66976a47f8e2ce0d4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3b30463aba3d9a6a395acf25096db7f389514316b2c1d3eb3bfe35c1fb2c1d9->leave($__internal_a3b30463aba3d9a6a395acf25096db7f389514316b2c1d3eb3bfe35c1fb2c1d9_prof);

        
        $__internal_116c32bad8cd04b33a2d9a032c95c5b2fcaed4a89d65b66976a47f8e2ce0d4b7->leave($__internal_116c32bad8cd04b33a2d9a032c95c5b2fcaed4a89d65b66976a47f8e2ce0d4b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb0606ddb5e36517f3c8f32b1c8e76c94909681c2325c6b9259cb40a40c7f4b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb0606ddb5e36517f3c8f32b1c8e76c94909681c2325c6b9259cb40a40c7f4b4->enter($__internal_eb0606ddb5e36517f3c8f32b1c8e76c94909681c2325c6b9259cb40a40c7f4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_833b6c873aeff798eb3cb437271be8ed85eb45191d8c965b8753fc815489c24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833b6c873aeff798eb3cb437271be8ed85eb45191d8c965b8753fc815489c24b->enter($__internal_833b6c873aeff798eb3cb437271be8ed85eb45191d8c965b8753fc815489c24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_833b6c873aeff798eb3cb437271be8ed85eb45191d8c965b8753fc815489c24b->leave($__internal_833b6c873aeff798eb3cb437271be8ed85eb45191d8c965b8753fc815489c24b_prof);

        
        $__internal_eb0606ddb5e36517f3c8f32b1c8e76c94909681c2325c6b9259cb40a40c7f4b4->leave($__internal_eb0606ddb5e36517f3c8f32b1c8e76c94909681c2325c6b9259cb40a40c7f4b4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}
