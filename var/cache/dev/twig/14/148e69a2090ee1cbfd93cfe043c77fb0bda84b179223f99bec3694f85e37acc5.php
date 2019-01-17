<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_4c80cbbc4f6e251443e356fa4168c1192c12b7acf878024bfb7970d6dfa88fc0 extends Twig_Template
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
        $__internal_6f71c80d8e886451446b86e7a7bbd1d5a9f61000d78e582c143e14cda57f4d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f71c80d8e886451446b86e7a7bbd1d5a9f61000d78e582c143e14cda57f4d75->enter($__internal_6f71c80d8e886451446b86e7a7bbd1d5a9f61000d78e582c143e14cda57f4d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_4c6d41cd5b516e2347068e8d36375f750e845126924a945771612ed84a7d1743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6d41cd5b516e2347068e8d36375f750e845126924a945771612ed84a7d1743->enter($__internal_4c6d41cd5b516e2347068e8d36375f750e845126924a945771612ed84a7d1743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6f71c80d8e886451446b86e7a7bbd1d5a9f61000d78e582c143e14cda57f4d75->leave($__internal_6f71c80d8e886451446b86e7a7bbd1d5a9f61000d78e582c143e14cda57f4d75_prof);

        
        $__internal_4c6d41cd5b516e2347068e8d36375f750e845126924a945771612ed84a7d1743->leave($__internal_4c6d41cd5b516e2347068e8d36375f750e845126924a945771612ed84a7d1743_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_40d254f20b89744d8a076aaf09b572e49d1b16c57f0ba553a2108b1414ed6925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d254f20b89744d8a076aaf09b572e49d1b16c57f0ba553a2108b1414ed6925->enter($__internal_40d254f20b89744d8a076aaf09b572e49d1b16c57f0ba553a2108b1414ed6925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0499ce623f48ab37819f318f8b64fd69149a507daf3710ac25026b4ad642b408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0499ce623f48ab37819f318f8b64fd69149a507daf3710ac25026b4ad642b408->enter($__internal_0499ce623f48ab37819f318f8b64fd69149a507daf3710ac25026b4ad642b408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0499ce623f48ab37819f318f8b64fd69149a507daf3710ac25026b4ad642b408->leave($__internal_0499ce623f48ab37819f318f8b64fd69149a507daf3710ac25026b4ad642b408_prof);

        
        $__internal_40d254f20b89744d8a076aaf09b572e49d1b16c57f0ba553a2108b1414ed6925->leave($__internal_40d254f20b89744d8a076aaf09b572e49d1b16c57f0ba553a2108b1414ed6925_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
