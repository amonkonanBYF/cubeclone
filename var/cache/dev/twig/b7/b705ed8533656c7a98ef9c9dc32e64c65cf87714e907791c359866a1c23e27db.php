<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_29d9b8a012144ba4266eb3f1e51ab5724e29708edb2bd0e9a04564b53b10bcb5 extends Twig_Template
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
        $__internal_466854ebf23bee1f6e3064fbded1f54b3e89988d563834acb8e35de8a05909fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466854ebf23bee1f6e3064fbded1f54b3e89988d563834acb8e35de8a05909fc->enter($__internal_466854ebf23bee1f6e3064fbded1f54b3e89988d563834acb8e35de8a05909fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_477398ff85b804512d97853eef8f875bfc3dbbc72152500476240e72182c9d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477398ff85b804512d97853eef8f875bfc3dbbc72152500476240e72182c9d3d->enter($__internal_477398ff85b804512d97853eef8f875bfc3dbbc72152500476240e72182c9d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_466854ebf23bee1f6e3064fbded1f54b3e89988d563834acb8e35de8a05909fc->leave($__internal_466854ebf23bee1f6e3064fbded1f54b3e89988d563834acb8e35de8a05909fc_prof);

        
        $__internal_477398ff85b804512d97853eef8f875bfc3dbbc72152500476240e72182c9d3d->leave($__internal_477398ff85b804512d97853eef8f875bfc3dbbc72152500476240e72182c9d3d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
