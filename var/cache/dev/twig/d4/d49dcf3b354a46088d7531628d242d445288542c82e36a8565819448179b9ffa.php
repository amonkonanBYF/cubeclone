<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_5d5f0c4efd9121f5fc1122145e1dfce1002b91a600712c16d292ecf50732336e extends Twig_Template
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
        $__internal_9c412c2a8fa9df6805b24fcd29aebb2e0b0733b4f15924001c39e051d7bf3c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c412c2a8fa9df6805b24fcd29aebb2e0b0733b4f15924001c39e051d7bf3c53->enter($__internal_9c412c2a8fa9df6805b24fcd29aebb2e0b0733b4f15924001c39e051d7bf3c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_9de853908ae72430aa550f781cd69d81095187530aa99295167817ac4716ee6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de853908ae72430aa550f781cd69d81095187530aa99295167817ac4716ee6d->enter($__internal_9de853908ae72430aa550f781cd69d81095187530aa99295167817ac4716ee6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9c412c2a8fa9df6805b24fcd29aebb2e0b0733b4f15924001c39e051d7bf3c53->leave($__internal_9c412c2a8fa9df6805b24fcd29aebb2e0b0733b4f15924001c39e051d7bf3c53_prof);

        
        $__internal_9de853908ae72430aa550f781cd69d81095187530aa99295167817ac4716ee6d->leave($__internal_9de853908ae72430aa550f781cd69d81095187530aa99295167817ac4716ee6d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
