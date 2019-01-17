<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_95beef668053696dc4eb9e06df3dc5e3c358e58b637154d9399b55d8d67fff66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_3e870047976c724a494eea4299288a9944e55480d8f0f63adb468a528e3fa86e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e870047976c724a494eea4299288a9944e55480d8f0f63adb468a528e3fa86e->enter($__internal_3e870047976c724a494eea4299288a9944e55480d8f0f63adb468a528e3fa86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_cc02648a48f9129feaa0aa17dae7b9d86e41d5b2d87d4979ffee27a40f0ce004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc02648a48f9129feaa0aa17dae7b9d86e41d5b2d87d4979ffee27a40f0ce004->enter($__internal_cc02648a48f9129feaa0aa17dae7b9d86e41d5b2d87d4979ffee27a40f0ce004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e870047976c724a494eea4299288a9944e55480d8f0f63adb468a528e3fa86e->leave($__internal_3e870047976c724a494eea4299288a9944e55480d8f0f63adb468a528e3fa86e_prof);

        
        $__internal_cc02648a48f9129feaa0aa17dae7b9d86e41d5b2d87d4979ffee27a40f0ce004->leave($__internal_cc02648a48f9129feaa0aa17dae7b9d86e41d5b2d87d4979ffee27a40f0ce004_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2b18d77f136efc97b7645aeb8636123672234a2b44623acd2ad1ea6cfe275bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b18d77f136efc97b7645aeb8636123672234a2b44623acd2ad1ea6cfe275bf->enter($__internal_f2b18d77f136efc97b7645aeb8636123672234a2b44623acd2ad1ea6cfe275bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5a585661d900b9309df297d2eb4711c4fdbdd72338308f4615d2bd8b025dcc48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a585661d900b9309df297d2eb4711c4fdbdd72338308f4615d2bd8b025dcc48->enter($__internal_5a585661d900b9309df297d2eb4711c4fdbdd72338308f4615d2bd8b025dcc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_5a585661d900b9309df297d2eb4711c4fdbdd72338308f4615d2bd8b025dcc48->leave($__internal_5a585661d900b9309df297d2eb4711c4fdbdd72338308f4615d2bd8b025dcc48_prof);

        
        $__internal_f2b18d77f136efc97b7645aeb8636123672234a2b44623acd2ad1ea6cfe275bf->leave($__internal_f2b18d77f136efc97b7645aeb8636123672234a2b44623acd2ad1ea6cfe275bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
", "FOSUserBundle:Group:list.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
