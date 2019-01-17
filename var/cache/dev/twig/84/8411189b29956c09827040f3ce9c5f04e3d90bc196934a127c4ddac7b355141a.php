<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_bf8ed3c6a725e6de382e0ac4e9cf0050be09b5da19eb771f08b5505dcd0fb67f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_acfa805f2738125e259696f7c742d53792159ad96a61b795dc685a2e6d9e0f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acfa805f2738125e259696f7c742d53792159ad96a61b795dc685a2e6d9e0f71->enter($__internal_acfa805f2738125e259696f7c742d53792159ad96a61b795dc685a2e6d9e0f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_9bc797b73994f2161805d25ed323a74005beb2d13f1c0598fffa119453a32c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc797b73994f2161805d25ed323a74005beb2d13f1c0598fffa119453a32c84->enter($__internal_9bc797b73994f2161805d25ed323a74005beb2d13f1c0598fffa119453a32c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acfa805f2738125e259696f7c742d53792159ad96a61b795dc685a2e6d9e0f71->leave($__internal_acfa805f2738125e259696f7c742d53792159ad96a61b795dc685a2e6d9e0f71_prof);

        
        $__internal_9bc797b73994f2161805d25ed323a74005beb2d13f1c0598fffa119453a32c84->leave($__internal_9bc797b73994f2161805d25ed323a74005beb2d13f1c0598fffa119453a32c84_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4bffd3d6b4a95c4f8bd045f03d73216830dcf3ee84aa5dcb4b5b0e15831b255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4bffd3d6b4a95c4f8bd045f03d73216830dcf3ee84aa5dcb4b5b0e15831b255->enter($__internal_f4bffd3d6b4a95c4f8bd045f03d73216830dcf3ee84aa5dcb4b5b0e15831b255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_790bf57c96d37a979fdcff7840d1f0c33d4935c18588269c48641560b1f47c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790bf57c96d37a979fdcff7840d1f0c33d4935c18588269c48641560b1f47c55->enter($__internal_790bf57c96d37a979fdcff7840d1f0c33d4935c18588269c48641560b1f47c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_790bf57c96d37a979fdcff7840d1f0c33d4935c18588269c48641560b1f47c55->leave($__internal_790bf57c96d37a979fdcff7840d1f0c33d4935c18588269c48641560b1f47c55_prof);

        
        $__internal_f4bffd3d6b4a95c4f8bd045f03d73216830dcf3ee84aa5dcb4b5b0e15831b255->leave($__internal_f4bffd3d6b4a95c4f8bd045f03d73216830dcf3ee84aa5dcb4b5b0e15831b255_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa5fe1c83a72e2de56c0e018d09ebcf0b6c2c0bac9debc881e555e6b418976f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5fe1c83a72e2de56c0e018d09ebcf0b6c2c0bac9debc881e555e6b418976f7->enter($__internal_fa5fe1c83a72e2de56c0e018d09ebcf0b6c2c0bac9debc881e555e6b418976f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9abd97e29735236e23912276441e46e2866499c800c017336350e555f81be184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9abd97e29735236e23912276441e46e2866499c800c017336350e555f81be184->enter($__internal_9abd97e29735236e23912276441e46e2866499c800c017336350e555f81be184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9abd97e29735236e23912276441e46e2866499c800c017336350e555f81be184->leave($__internal_9abd97e29735236e23912276441e46e2866499c800c017336350e555f81be184_prof);

        
        $__internal_fa5fe1c83a72e2de56c0e018d09ebcf0b6c2c0bac9debc881e555e6b418976f7->leave($__internal_fa5fe1c83a72e2de56c0e018d09ebcf0b6c2c0bac9debc881e555e6b418976f7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
