<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_357227969312bed03233219884535bf216544de5fcb52b544286d29e8d46c9a3 extends Twig_Template
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
        $__internal_c1d42605cc0b6ad87f9e48f0e7e377406e8325996c4eeaadf88c7d4fdde7a8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d42605cc0b6ad87f9e48f0e7e377406e8325996c4eeaadf88c7d4fdde7a8dc->enter($__internal_c1d42605cc0b6ad87f9e48f0e7e377406e8325996c4eeaadf88c7d4fdde7a8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_8a1a52ca84128594cf696ee917345dd49510087c12357b3c03c162c8a137142d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1a52ca84128594cf696ee917345dd49510087c12357b3c03c162c8a137142d->enter($__internal_8a1a52ca84128594cf696ee917345dd49510087c12357b3c03c162c8a137142d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c1d42605cc0b6ad87f9e48f0e7e377406e8325996c4eeaadf88c7d4fdde7a8dc->leave($__internal_c1d42605cc0b6ad87f9e48f0e7e377406e8325996c4eeaadf88c7d4fdde7a8dc_prof);

        
        $__internal_8a1a52ca84128594cf696ee917345dd49510087c12357b3c03c162c8a137142d->leave($__internal_8a1a52ca84128594cf696ee917345dd49510087c12357b3c03c162c8a137142d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
