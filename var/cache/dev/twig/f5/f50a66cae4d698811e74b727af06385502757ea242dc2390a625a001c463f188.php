<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_d9756a7b6ab97c8689a44c4f5a4363052b74543fba2fc9f13bff1217a436edbc extends Twig_Template
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
        $__internal_d78394707e55cf7d6e68c9b802eb94bb68ff224b9ad16af04a9f7ae0ad0f7adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78394707e55cf7d6e68c9b802eb94bb68ff224b9ad16af04a9f7ae0ad0f7adc->enter($__internal_d78394707e55cf7d6e68c9b802eb94bb68ff224b9ad16af04a9f7ae0ad0f7adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_5a2e36681d0a2ec16520dd300d8c0ef40dcaf896e7b70ed58b64affba311c776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2e36681d0a2ec16520dd300d8c0ef40dcaf896e7b70ed58b64affba311c776->enter($__internal_5a2e36681d0a2ec16520dd300d8c0ef40dcaf896e7b70ed58b64affba311c776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d78394707e55cf7d6e68c9b802eb94bb68ff224b9ad16af04a9f7ae0ad0f7adc->leave($__internal_d78394707e55cf7d6e68c9b802eb94bb68ff224b9ad16af04a9f7ae0ad0f7adc_prof);

        
        $__internal_5a2e36681d0a2ec16520dd300d8c0ef40dcaf896e7b70ed58b64affba311c776->leave($__internal_5a2e36681d0a2ec16520dd300d8c0ef40dcaf896e7b70ed58b64affba311c776_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
