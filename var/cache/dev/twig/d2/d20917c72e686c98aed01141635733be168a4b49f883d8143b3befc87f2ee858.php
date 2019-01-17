<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_49ce46171490374f7c700be45355443d552ded1e695eb6f34a49f9f9c80dc03b extends Twig_Template
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
        $__internal_325836ebb6cd7f2094608330d2ed2f9b601b9a94eb6a5f73232468b5a9cf6f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_325836ebb6cd7f2094608330d2ed2f9b601b9a94eb6a5f73232468b5a9cf6f08->enter($__internal_325836ebb6cd7f2094608330d2ed2f9b601b9a94eb6a5f73232468b5a9cf6f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_36c98c94edfceb89de7867483576b8f96373298028df951564a1761f1b41c6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c98c94edfceb89de7867483576b8f96373298028df951564a1761f1b41c6e9->enter($__internal_36c98c94edfceb89de7867483576b8f96373298028df951564a1761f1b41c6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_325836ebb6cd7f2094608330d2ed2f9b601b9a94eb6a5f73232468b5a9cf6f08->leave($__internal_325836ebb6cd7f2094608330d2ed2f9b601b9a94eb6a5f73232468b5a9cf6f08_prof);

        
        $__internal_36c98c94edfceb89de7867483576b8f96373298028df951564a1761f1b41c6e9->leave($__internal_36c98c94edfceb89de7867483576b8f96373298028df951564a1761f1b41c6e9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
