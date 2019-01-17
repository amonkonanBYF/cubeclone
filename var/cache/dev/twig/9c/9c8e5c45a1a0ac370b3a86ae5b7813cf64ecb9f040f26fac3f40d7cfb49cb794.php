<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4952a27076e1fdea074c85b10f3313a6f4d4d8e9804f48e4efd9afd0c702bfe8 extends Twig_Template
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
        $__internal_562491874f806d1043394eeb8096b50f427a92c924f5ca2079dc3b02503f2b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562491874f806d1043394eeb8096b50f427a92c924f5ca2079dc3b02503f2b32->enter($__internal_562491874f806d1043394eeb8096b50f427a92c924f5ca2079dc3b02503f2b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_8fa47742878c541924c886d0cff05a098ed47c9cdb6240e98e330a5a1948a7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa47742878c541924c886d0cff05a098ed47c9cdb6240e98e330a5a1948a7da->enter($__internal_8fa47742878c541924c886d0cff05a098ed47c9cdb6240e98e330a5a1948a7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_562491874f806d1043394eeb8096b50f427a92c924f5ca2079dc3b02503f2b32->leave($__internal_562491874f806d1043394eeb8096b50f427a92c924f5ca2079dc3b02503f2b32_prof);

        
        $__internal_8fa47742878c541924c886d0cff05a098ed47c9cdb6240e98e330a5a1948a7da->leave($__internal_8fa47742878c541924c886d0cff05a098ed47c9cdb6240e98e330a5a1948a7da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
