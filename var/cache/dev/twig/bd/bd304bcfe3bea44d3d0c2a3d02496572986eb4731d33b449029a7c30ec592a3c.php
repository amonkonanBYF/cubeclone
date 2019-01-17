<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0c39bf28106ec40a6cda8d0cfe2deb2242aa93632b434fa34c3b9fde99e68652 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1e514537260e114c81ae284567d3863d39517556e1fbff860309a1142bc7dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e514537260e114c81ae284567d3863d39517556e1fbff860309a1142bc7dcf->enter($__internal_f1e514537260e114c81ae284567d3863d39517556e1fbff860309a1142bc7dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_f5c198a23a3178ee13b5b7ea1b962157dfc44576a7cf5d1ad9cbbc335643d7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c198a23a3178ee13b5b7ea1b962157dfc44576a7cf5d1ad9cbbc335643d7c7->enter($__internal_f5c198a23a3178ee13b5b7ea1b962157dfc44576a7cf5d1ad9cbbc335643d7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f1e514537260e114c81ae284567d3863d39517556e1fbff860309a1142bc7dcf->leave($__internal_f1e514537260e114c81ae284567d3863d39517556e1fbff860309a1142bc7dcf_prof);

        
        $__internal_f5c198a23a3178ee13b5b7ea1b962157dfc44576a7cf5d1ad9cbbc335643d7c7->leave($__internal_f5c198a23a3178ee13b5b7ea1b962157dfc44576a7cf5d1ad9cbbc335643d7c7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
