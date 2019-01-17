<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_7eb1ca209e4a6f678007f9191e858357989bf15e9a1f2f6dcfbd7477eac6d2e6 extends Twig_Template
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
        $__internal_077458b4781b4e002a31dd24546f00630b57f568e9d4b05119fe5e7fbc99c30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_077458b4781b4e002a31dd24546f00630b57f568e9d4b05119fe5e7fbc99c30e->enter($__internal_077458b4781b4e002a31dd24546f00630b57f568e9d4b05119fe5e7fbc99c30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_87c8227333b8a30a8d3caa5ba868eb8bfab1cdfad4d03707cfd7bcb6d4827475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c8227333b8a30a8d3caa5ba868eb8bfab1cdfad4d03707cfd7bcb6d4827475->enter($__internal_87c8227333b8a30a8d3caa5ba868eb8bfab1cdfad4d03707cfd7bcb6d4827475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_077458b4781b4e002a31dd24546f00630b57f568e9d4b05119fe5e7fbc99c30e->leave($__internal_077458b4781b4e002a31dd24546f00630b57f568e9d4b05119fe5e7fbc99c30e_prof);

        
        $__internal_87c8227333b8a30a8d3caa5ba868eb8bfab1cdfad4d03707cfd7bcb6d4827475->leave($__internal_87c8227333b8a30a8d3caa5ba868eb8bfab1cdfad4d03707cfd7bcb6d4827475_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
