<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e0e1bc3be4699194bdddaca7c999b64b9fadae57383229886b5111957a62d778 extends Twig_Template
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
        $__internal_d5515e77b7395b645304f0276147b619b54882c7f7fc8a3818eecac5eb1de0a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5515e77b7395b645304f0276147b619b54882c7f7fc8a3818eecac5eb1de0a2->enter($__internal_d5515e77b7395b645304f0276147b619b54882c7f7fc8a3818eecac5eb1de0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_172c042f60dd7246d409401f51b6a94e0a806c2d7858a68443b0ab85e4c7a7ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172c042f60dd7246d409401f51b6a94e0a806c2d7858a68443b0ab85e4c7a7ee->enter($__internal_172c042f60dd7246d409401f51b6a94e0a806c2d7858a68443b0ab85e4c7a7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d5515e77b7395b645304f0276147b619b54882c7f7fc8a3818eecac5eb1de0a2->leave($__internal_d5515e77b7395b645304f0276147b619b54882c7f7fc8a3818eecac5eb1de0a2_prof);

        
        $__internal_172c042f60dd7246d409401f51b6a94e0a806c2d7858a68443b0ab85e4c7a7ee->leave($__internal_172c042f60dd7246d409401f51b6a94e0a806c2d7858a68443b0ab85e4c7a7ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
