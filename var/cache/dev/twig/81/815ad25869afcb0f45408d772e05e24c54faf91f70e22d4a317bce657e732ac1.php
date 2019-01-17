<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_f313131ae50d0e4ff6dad3a418af362e3db9cb99efb172570eb9d9ae5dee963e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_0fde27c59a2c4b5d9c4ce26b0690fa01d6350297f347902da51f6dc0d8fd1bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fde27c59a2c4b5d9c4ce26b0690fa01d6350297f347902da51f6dc0d8fd1bf2->enter($__internal_0fde27c59a2c4b5d9c4ce26b0690fa01d6350297f347902da51f6dc0d8fd1bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_d75421756768b18fe5fca2549574c995562bed7653d614accdce32dc202cffec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75421756768b18fe5fca2549574c995562bed7653d614accdce32dc202cffec->enter($__internal_d75421756768b18fe5fca2549574c995562bed7653d614accdce32dc202cffec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fde27c59a2c4b5d9c4ce26b0690fa01d6350297f347902da51f6dc0d8fd1bf2->leave($__internal_0fde27c59a2c4b5d9c4ce26b0690fa01d6350297f347902da51f6dc0d8fd1bf2_prof);

        
        $__internal_d75421756768b18fe5fca2549574c995562bed7653d614accdce32dc202cffec->leave($__internal_d75421756768b18fe5fca2549574c995562bed7653d614accdce32dc202cffec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd9ea6d49a14cd2e3de753e68332ea0b1eb673ebe399af700b6db9d694951fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9ea6d49a14cd2e3de753e68332ea0b1eb673ebe399af700b6db9d694951fe1->enter($__internal_dd9ea6d49a14cd2e3de753e68332ea0b1eb673ebe399af700b6db9d694951fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5f50ebf97e80b78a1d7ce2b336ea73acd66ee20d0736e3b0ff31e83dd099a855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f50ebf97e80b78a1d7ce2b336ea73acd66ee20d0736e3b0ff31e83dd099a855->enter($__internal_5f50ebf97e80b78a1d7ce2b336ea73acd66ee20d0736e3b0ff31e83dd099a855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5f50ebf97e80b78a1d7ce2b336ea73acd66ee20d0736e3b0ff31e83dd099a855->leave($__internal_5f50ebf97e80b78a1d7ce2b336ea73acd66ee20d0736e3b0ff31e83dd099a855_prof);

        
        $__internal_dd9ea6d49a14cd2e3de753e68332ea0b1eb673ebe399af700b6db9d694951fe1->leave($__internal_dd9ea6d49a14cd2e3de753e68332ea0b1eb673ebe399af700b6db9d694951fe1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_33f71147fa3c950efb4e762102b8d5c944d30c0957a9e68363e480338fe57731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f71147fa3c950efb4e762102b8d5c944d30c0957a9e68363e480338fe57731->enter($__internal_33f71147fa3c950efb4e762102b8d5c944d30c0957a9e68363e480338fe57731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_512ffb0532cf618f1c97595f56fa652de3b27582d830c26ade437efef64f4dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512ffb0532cf618f1c97595f56fa652de3b27582d830c26ade437efef64f4dcf->enter($__internal_512ffb0532cf618f1c97595f56fa652de3b27582d830c26ade437efef64f4dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_512ffb0532cf618f1c97595f56fa652de3b27582d830c26ade437efef64f4dcf->leave($__internal_512ffb0532cf618f1c97595f56fa652de3b27582d830c26ade437efef64f4dcf_prof);

        
        $__internal_33f71147fa3c950efb4e762102b8d5c944d30c0957a9e68363e480338fe57731->leave($__internal_33f71147fa3c950efb4e762102b8d5c944d30c0957a9e68363e480338fe57731_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
