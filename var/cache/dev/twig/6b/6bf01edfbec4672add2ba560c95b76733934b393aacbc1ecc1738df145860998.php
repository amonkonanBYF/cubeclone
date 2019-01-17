<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_88a1da36d6581a1f8cbbebd82c03bc5b99db32bb3c690060debd6cb7512e66a3 extends Twig_Template
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
        $__internal_2caed2c0221aa9e7a55cf9837ebe516b0a1270d2d878d3003d94576b5dc86654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2caed2c0221aa9e7a55cf9837ebe516b0a1270d2d878d3003d94576b5dc86654->enter($__internal_2caed2c0221aa9e7a55cf9837ebe516b0a1270d2d878d3003d94576b5dc86654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_ed6875dd7793e81d549c5b52a1aca97a845934f4351beb3040968f422b35afca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6875dd7793e81d549c5b52a1aca97a845934f4351beb3040968f422b35afca->enter($__internal_ed6875dd7793e81d549c5b52a1aca97a845934f4351beb3040968f422b35afca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_2caed2c0221aa9e7a55cf9837ebe516b0a1270d2d878d3003d94576b5dc86654->leave($__internal_2caed2c0221aa9e7a55cf9837ebe516b0a1270d2d878d3003d94576b5dc86654_prof);

        
        $__internal_ed6875dd7793e81d549c5b52a1aca97a845934f4351beb3040968f422b35afca->leave($__internal_ed6875dd7793e81d549c5b52a1aca97a845934f4351beb3040968f422b35afca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
