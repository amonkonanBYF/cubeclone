<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_975d12f5ed2ddb4482a15bae5c0e6b3fa491bfa0115d3e0e8f6a28c57bbeba33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c855ea1f2ac91224a83ab19149e7db6ed16bd1433de6d9b04141604b68a36288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c855ea1f2ac91224a83ab19149e7db6ed16bd1433de6d9b04141604b68a36288->enter($__internal_c855ea1f2ac91224a83ab19149e7db6ed16bd1433de6d9b04141604b68a36288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f2316ca0ceea6a36778646007909bc45d5f8f485fbde9f71d21fd61ee21f5867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2316ca0ceea6a36778646007909bc45d5f8f485fbde9f71d21fd61ee21f5867->enter($__internal_f2316ca0ceea6a36778646007909bc45d5f8f485fbde9f71d21fd61ee21f5867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c855ea1f2ac91224a83ab19149e7db6ed16bd1433de6d9b04141604b68a36288->leave($__internal_c855ea1f2ac91224a83ab19149e7db6ed16bd1433de6d9b04141604b68a36288_prof);

        
        $__internal_f2316ca0ceea6a36778646007909bc45d5f8f485fbde9f71d21fd61ee21f5867->leave($__internal_f2316ca0ceea6a36778646007909bc45d5f8f485fbde9f71d21fd61ee21f5867_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b7196a188da4248713cb1cdab12eed7972053e7e6beef230746366c2f640982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7196a188da4248713cb1cdab12eed7972053e7e6beef230746366c2f640982->enter($__internal_0b7196a188da4248713cb1cdab12eed7972053e7e6beef230746366c2f640982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c626306be45cd6f03593af283739b1a5282ba7f1e27d226ea281dc1fa192ff91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c626306be45cd6f03593af283739b1a5282ba7f1e27d226ea281dc1fa192ff91->enter($__internal_c626306be45cd6f03593af283739b1a5282ba7f1e27d226ea281dc1fa192ff91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c626306be45cd6f03593af283739b1a5282ba7f1e27d226ea281dc1fa192ff91->leave($__internal_c626306be45cd6f03593af283739b1a5282ba7f1e27d226ea281dc1fa192ff91_prof);

        
        $__internal_0b7196a188da4248713cb1cdab12eed7972053e7e6beef230746366c2f640982->leave($__internal_0b7196a188da4248713cb1cdab12eed7972053e7e6beef230746366c2f640982_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4af947d743c59ce913c197dd49629e3bc15d79f803aea20f6d6211d3512caeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4af947d743c59ce913c197dd49629e3bc15d79f803aea20f6d6211d3512caeb->enter($__internal_c4af947d743c59ce913c197dd49629e3bc15d79f803aea20f6d6211d3512caeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a23b1eed6961072f04a4cc2f32aeea341864fca7105797823d5c59647f2f3cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23b1eed6961072f04a4cc2f32aeea341864fca7105797823d5c59647f2f3cab->enter($__internal_a23b1eed6961072f04a4cc2f32aeea341864fca7105797823d5c59647f2f3cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a23b1eed6961072f04a4cc2f32aeea341864fca7105797823d5c59647f2f3cab->leave($__internal_a23b1eed6961072f04a4cc2f32aeea341864fca7105797823d5c59647f2f3cab_prof);

        
        $__internal_c4af947d743c59ce913c197dd49629e3bc15d79f803aea20f6d6211d3512caeb->leave($__internal_c4af947d743c59ce913c197dd49629e3bc15d79f803aea20f6d6211d3512caeb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8684e8c3786a43dd81eec4a7d2fb4b3b89b24a86a14932dc5dea7c23e1e0925a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8684e8c3786a43dd81eec4a7d2fb4b3b89b24a86a14932dc5dea7c23e1e0925a->enter($__internal_8684e8c3786a43dd81eec4a7d2fb4b3b89b24a86a14932dc5dea7c23e1e0925a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e7be99c199c56be0dfd17053cfa7d990927b33ca6870a44815c5bb04d7f5c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7be99c199c56be0dfd17053cfa7d990927b33ca6870a44815c5bb04d7f5c9c->enter($__internal_4e7be99c199c56be0dfd17053cfa7d990927b33ca6870a44815c5bb04d7f5c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4e7be99c199c56be0dfd17053cfa7d990927b33ca6870a44815c5bb04d7f5c9c->leave($__internal_4e7be99c199c56be0dfd17053cfa7d990927b33ca6870a44815c5bb04d7f5c9c_prof);

        
        $__internal_8684e8c3786a43dd81eec4a7d2fb4b3b89b24a86a14932dc5dea7c23e1e0925a->leave($__internal_8684e8c3786a43dd81eec4a7d2fb4b3b89b24a86a14932dc5dea7c23e1e0925a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
