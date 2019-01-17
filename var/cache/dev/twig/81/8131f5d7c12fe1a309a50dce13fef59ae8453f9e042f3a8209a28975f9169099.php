<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_cfde5eceda8896ae37b1674366bae4ebf270eeb2d53de84bb87562a1d9c32b75 extends Twig_Template
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
        $__internal_42d7414c5959082b411626dd4a39afa418806d414dc327c7ffe659261e4dfb22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42d7414c5959082b411626dd4a39afa418806d414dc327c7ffe659261e4dfb22->enter($__internal_42d7414c5959082b411626dd4a39afa418806d414dc327c7ffe659261e4dfb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c4c42a9e67bb4998900f239f6ee3e6c974cdb8129291a28592cf0d6119dfb6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c42a9e67bb4998900f239f6ee3e6c974cdb8129291a28592cf0d6119dfb6d4->enter($__internal_c4c42a9e67bb4998900f239f6ee3e6c974cdb8129291a28592cf0d6119dfb6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_42d7414c5959082b411626dd4a39afa418806d414dc327c7ffe659261e4dfb22->leave($__internal_42d7414c5959082b411626dd4a39afa418806d414dc327c7ffe659261e4dfb22_prof);

        
        $__internal_c4c42a9e67bb4998900f239f6ee3e6c974cdb8129291a28592cf0d6119dfb6d4->leave($__internal_c4c42a9e67bb4998900f239f6ee3e6c974cdb8129291a28592cf0d6119dfb6d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
