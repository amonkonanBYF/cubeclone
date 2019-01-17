<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_de2859ca3238d90e83a7291214aad0e2709ea62674f0a1942384c94ff4afdd1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_1111aa2397fd589d20b89991182cf14da13935cf7718f92eec97dc0b296d5f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1111aa2397fd589d20b89991182cf14da13935cf7718f92eec97dc0b296d5f11->enter($__internal_1111aa2397fd589d20b89991182cf14da13935cf7718f92eec97dc0b296d5f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_2b44602102a966c3c9a85f5d45ef4f127ddaeaa8402d71517e9fe6c08a750c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b44602102a966c3c9a85f5d45ef4f127ddaeaa8402d71517e9fe6c08a750c68->enter($__internal_2b44602102a966c3c9a85f5d45ef4f127ddaeaa8402d71517e9fe6c08a750c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1111aa2397fd589d20b89991182cf14da13935cf7718f92eec97dc0b296d5f11->leave($__internal_1111aa2397fd589d20b89991182cf14da13935cf7718f92eec97dc0b296d5f11_prof);

        
        $__internal_2b44602102a966c3c9a85f5d45ef4f127ddaeaa8402d71517e9fe6c08a750c68->leave($__internal_2b44602102a966c3c9a85f5d45ef4f127ddaeaa8402d71517e9fe6c08a750c68_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3222d5043a121f07ceb8fe798f41bd09d9ae6daf9a16150707b2081f221296ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3222d5043a121f07ceb8fe798f41bd09d9ae6daf9a16150707b2081f221296ae->enter($__internal_3222d5043a121f07ceb8fe798f41bd09d9ae6daf9a16150707b2081f221296ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dae64041d5ae5d7c2f309d240d15a34f42751168f0d2b4725b6d566ac720b773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae64041d5ae5d7c2f309d240d15a34f42751168f0d2b4725b6d566ac720b773->enter($__internal_dae64041d5ae5d7c2f309d240d15a34f42751168f0d2b4725b6d566ac720b773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_dae64041d5ae5d7c2f309d240d15a34f42751168f0d2b4725b6d566ac720b773->leave($__internal_dae64041d5ae5d7c2f309d240d15a34f42751168f0d2b4725b6d566ac720b773_prof);

        
        $__internal_3222d5043a121f07ceb8fe798f41bd09d9ae6daf9a16150707b2081f221296ae->leave($__internal_3222d5043a121f07ceb8fe798f41bd09d9ae6daf9a16150707b2081f221296ae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
