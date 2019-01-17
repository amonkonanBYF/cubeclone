<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_f7fdca09f08d6aa76a8d11998759e2d61ba6bd61a992516eb13196f8db50ba09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c35e8cb6a12ae14d050216ff6e15e3f72b7375248f1fce01b5c55956f8461a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c35e8cb6a12ae14d050216ff6e15e3f72b7375248f1fce01b5c55956f8461a1->enter($__internal_4c35e8cb6a12ae14d050216ff6e15e3f72b7375248f1fce01b5c55956f8461a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_81764c78bf0a46a232dd7d842d224caff51b5842b6edf510a1903e312671f0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81764c78bf0a46a232dd7d842d224caff51b5842b6edf510a1903e312671f0ee->enter($__internal_81764c78bf0a46a232dd7d842d224caff51b5842b6edf510a1903e312671f0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c35e8cb6a12ae14d050216ff6e15e3f72b7375248f1fce01b5c55956f8461a1->leave($__internal_4c35e8cb6a12ae14d050216ff6e15e3f72b7375248f1fce01b5c55956f8461a1_prof);

        
        $__internal_81764c78bf0a46a232dd7d842d224caff51b5842b6edf510a1903e312671f0ee->leave($__internal_81764c78bf0a46a232dd7d842d224caff51b5842b6edf510a1903e312671f0ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_94e2e9f482a3c9ce9b40ddbe2ba54289ca3579bd77b9b1ed99865590976c4cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e2e9f482a3c9ce9b40ddbe2ba54289ca3579bd77b9b1ed99865590976c4cfa->enter($__internal_94e2e9f482a3c9ce9b40ddbe2ba54289ca3579bd77b9b1ed99865590976c4cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1d0946f851eab14b3aadc3b27326d004369bb044a2b84a68c965fff90346f8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0946f851eab14b3aadc3b27326d004369bb044a2b84a68c965fff90346f8b5->enter($__internal_1d0946f851eab14b3aadc3b27326d004369bb044a2b84a68c965fff90346f8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_1d0946f851eab14b3aadc3b27326d004369bb044a2b84a68c965fff90346f8b5->leave($__internal_1d0946f851eab14b3aadc3b27326d004369bb044a2b84a68c965fff90346f8b5_prof);

        
        $__internal_94e2e9f482a3c9ce9b40ddbe2ba54289ca3579bd77b9b1ed99865590976c4cfa->leave($__internal_94e2e9f482a3c9ce9b40ddbe2ba54289ca3579bd77b9b1ed99865590976c4cfa_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca5bc54e0b9b2b612c3ea2623eff2eea0095e43518b6063c876018538f90bc5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5bc54e0b9b2b612c3ea2623eff2eea0095e43518b6063c876018538f90bc5e->enter($__internal_ca5bc54e0b9b2b612c3ea2623eff2eea0095e43518b6063c876018538f90bc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_546be29ec4b724354857248eb8d7ca9385a55f7bf962c1335d524d856c68667b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546be29ec4b724354857248eb8d7ca9385a55f7bf962c1335d524d856c68667b->enter($__internal_546be29ec4b724354857248eb8d7ca9385a55f7bf962c1335d524d856c68667b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_546be29ec4b724354857248eb8d7ca9385a55f7bf962c1335d524d856c68667b->leave($__internal_546be29ec4b724354857248eb8d7ca9385a55f7bf962c1335d524d856c68667b_prof);

        
        $__internal_ca5bc54e0b9b2b612c3ea2623eff2eea0095e43518b6063c876018538f90bc5e->leave($__internal_ca5bc54e0b9b2b612c3ea2623eff2eea0095e43518b6063c876018538f90bc5e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
