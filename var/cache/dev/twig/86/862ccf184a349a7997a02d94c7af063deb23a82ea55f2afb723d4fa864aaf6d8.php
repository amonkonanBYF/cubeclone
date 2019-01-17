<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f4246ef443ace8d843686cc2b3e4557b6a20284a1b1cce143e25265565eb4edf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2950e9fbf8d0663c88e922f53bb4103422418eafd6c5423ea636fa0d9f1c6d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2950e9fbf8d0663c88e922f53bb4103422418eafd6c5423ea636fa0d9f1c6d1a->enter($__internal_2950e9fbf8d0663c88e922f53bb4103422418eafd6c5423ea636fa0d9f1c6d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_c146a32fd7a184f40e1e0a21419207144cbdd271e0e727c9fe2d3d109de463b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c146a32fd7a184f40e1e0a21419207144cbdd271e0e727c9fe2d3d109de463b8->enter($__internal_c146a32fd7a184f40e1e0a21419207144cbdd271e0e727c9fe2d3d109de463b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2950e9fbf8d0663c88e922f53bb4103422418eafd6c5423ea636fa0d9f1c6d1a->leave($__internal_2950e9fbf8d0663c88e922f53bb4103422418eafd6c5423ea636fa0d9f1c6d1a_prof);

        
        $__internal_c146a32fd7a184f40e1e0a21419207144cbdd271e0e727c9fe2d3d109de463b8->leave($__internal_c146a32fd7a184f40e1e0a21419207144cbdd271e0e727c9fe2d3d109de463b8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_be61b8a50b490e5be1694605ca2d3147c487bb4c614c464ec8d8d709179aa646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be61b8a50b490e5be1694605ca2d3147c487bb4c614c464ec8d8d709179aa646->enter($__internal_be61b8a50b490e5be1694605ca2d3147c487bb4c614c464ec8d8d709179aa646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa248571f11354f05aae136c9b0b55767b5f090274219e53eb8664ba4b866ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa248571f11354f05aae136c9b0b55767b5f090274219e53eb8664ba4b866ff8->enter($__internal_aa248571f11354f05aae136c9b0b55767b5f090274219e53eb8664ba4b866ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_aa248571f11354f05aae136c9b0b55767b5f090274219e53eb8664ba4b866ff8->leave($__internal_aa248571f11354f05aae136c9b0b55767b5f090274219e53eb8664ba4b866ff8_prof);

        
        $__internal_be61b8a50b490e5be1694605ca2d3147c487bb4c614c464ec8d8d709179aa646->leave($__internal_be61b8a50b490e5be1694605ca2d3147c487bb4c614c464ec8d8d709179aa646_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
