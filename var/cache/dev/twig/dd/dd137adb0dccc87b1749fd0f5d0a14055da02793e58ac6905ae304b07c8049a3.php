<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_4169edced4c6e79dbc48852836cff711a38a7b8385ef3e5f2d3150f6fa9f3b4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_8fcb1629f9ebcfeed7ab20697c4bf47ca664c61c97ac406353d140e77c56dc36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fcb1629f9ebcfeed7ab20697c4bf47ca664c61c97ac406353d140e77c56dc36->enter($__internal_8fcb1629f9ebcfeed7ab20697c4bf47ca664c61c97ac406353d140e77c56dc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_b305e45c31b8cdd51c23b08191f11b8af5c60cc8f1a40092ea296e2905196461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b305e45c31b8cdd51c23b08191f11b8af5c60cc8f1a40092ea296e2905196461->enter($__internal_b305e45c31b8cdd51c23b08191f11b8af5c60cc8f1a40092ea296e2905196461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fcb1629f9ebcfeed7ab20697c4bf47ca664c61c97ac406353d140e77c56dc36->leave($__internal_8fcb1629f9ebcfeed7ab20697c4bf47ca664c61c97ac406353d140e77c56dc36_prof);

        
        $__internal_b305e45c31b8cdd51c23b08191f11b8af5c60cc8f1a40092ea296e2905196461->leave($__internal_b305e45c31b8cdd51c23b08191f11b8af5c60cc8f1a40092ea296e2905196461_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f86a38cf8315ae9413a2f88b16a16bc137e992da3e26b1a6075d5dab66054a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f86a38cf8315ae9413a2f88b16a16bc137e992da3e26b1a6075d5dab66054a4->enter($__internal_5f86a38cf8315ae9413a2f88b16a16bc137e992da3e26b1a6075d5dab66054a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_963203d87d6666902eacab6857debc88c754fbd67d708cd4c49ad068282a78d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963203d87d6666902eacab6857debc88c754fbd67d708cd4c49ad068282a78d3->enter($__internal_963203d87d6666902eacab6857debc88c754fbd67d708cd4c49ad068282a78d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_963203d87d6666902eacab6857debc88c754fbd67d708cd4c49ad068282a78d3->leave($__internal_963203d87d6666902eacab6857debc88c754fbd67d708cd4c49ad068282a78d3_prof);

        
        $__internal_5f86a38cf8315ae9413a2f88b16a16bc137e992da3e26b1a6075d5dab66054a4->leave($__internal_5f86a38cf8315ae9413a2f88b16a16bc137e992da3e26b1a6075d5dab66054a4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
