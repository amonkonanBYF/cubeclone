<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d0f7cba7771f43674cd7795c2c95d50753c80dcabcb1af1255fd8a0e0dda0a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec3ca69ecdcbb79b0533971ef047e1bd4ddee8f5cd845711d9681b8abff08496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3ca69ecdcbb79b0533971ef047e1bd4ddee8f5cd845711d9681b8abff08496->enter($__internal_ec3ca69ecdcbb79b0533971ef047e1bd4ddee8f5cd845711d9681b8abff08496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_fd0a0b2be1b9e265d5098f07805dbaabed8e931349ae83c968549c2aeb3f3e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0a0b2be1b9e265d5098f07805dbaabed8e931349ae83c968549c2aeb3f3e03->enter($__internal_fd0a0b2be1b9e265d5098f07805dbaabed8e931349ae83c968549c2aeb3f3e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec3ca69ecdcbb79b0533971ef047e1bd4ddee8f5cd845711d9681b8abff08496->leave($__internal_ec3ca69ecdcbb79b0533971ef047e1bd4ddee8f5cd845711d9681b8abff08496_prof);

        
        $__internal_fd0a0b2be1b9e265d5098f07805dbaabed8e931349ae83c968549c2aeb3f3e03->leave($__internal_fd0a0b2be1b9e265d5098f07805dbaabed8e931349ae83c968549c2aeb3f3e03_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb4093ecf9d7f9bcb6c0cb5f7d11637e3df35f1025acbbdfa82a0f06da09e2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4093ecf9d7f9bcb6c0cb5f7d11637e3df35f1025acbbdfa82a0f06da09e2d2->enter($__internal_bb4093ecf9d7f9bcb6c0cb5f7d11637e3df35f1025acbbdfa82a0f06da09e2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9a97dfb62c03880a32a8e93adfec60fb240f1bc16f1f302c62d74bcc796c7f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a97dfb62c03880a32a8e93adfec60fb240f1bc16f1f302c62d74bcc796c7f01->enter($__internal_9a97dfb62c03880a32a8e93adfec60fb240f1bc16f1f302c62d74bcc796c7f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9a97dfb62c03880a32a8e93adfec60fb240f1bc16f1f302c62d74bcc796c7f01->leave($__internal_9a97dfb62c03880a32a8e93adfec60fb240f1bc16f1f302c62d74bcc796c7f01_prof);

        
        $__internal_bb4093ecf9d7f9bcb6c0cb5f7d11637e3df35f1025acbbdfa82a0f06da09e2d2->leave($__internal_bb4093ecf9d7f9bcb6c0cb5f7d11637e3df35f1025acbbdfa82a0f06da09e2d2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0dcc8046bbdefec6319fca687349d152f7deb875b8d7125783ff4aa9e64e2eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dcc8046bbdefec6319fca687349d152f7deb875b8d7125783ff4aa9e64e2eb9->enter($__internal_0dcc8046bbdefec6319fca687349d152f7deb875b8d7125783ff4aa9e64e2eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4074f92787f5679bc81635147df1b31d2f225f1cef509aeedab0a89c2920731e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4074f92787f5679bc81635147df1b31d2f225f1cef509aeedab0a89c2920731e->enter($__internal_4074f92787f5679bc81635147df1b31d2f225f1cef509aeedab0a89c2920731e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4074f92787f5679bc81635147df1b31d2f225f1cef509aeedab0a89c2920731e->leave($__internal_4074f92787f5679bc81635147df1b31d2f225f1cef509aeedab0a89c2920731e_prof);

        
        $__internal_0dcc8046bbdefec6319fca687349d152f7deb875b8d7125783ff4aa9e64e2eb9->leave($__internal_0dcc8046bbdefec6319fca687349d152f7deb875b8d7125783ff4aa9e64e2eb9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07ada3bfc72d231aed1a7d1f573c18d4e175dafcabff7422439d3d6ce7e8658a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ada3bfc72d231aed1a7d1f573c18d4e175dafcabff7422439d3d6ce7e8658a->enter($__internal_07ada3bfc72d231aed1a7d1f573c18d4e175dafcabff7422439d3d6ce7e8658a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f139e1e97ac6ae44f06d675d334d0dae59087b476cd99a395d1f51ef32895ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f139e1e97ac6ae44f06d675d334d0dae59087b476cd99a395d1f51ef32895ace->enter($__internal_f139e1e97ac6ae44f06d675d334d0dae59087b476cd99a395d1f51ef32895ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f139e1e97ac6ae44f06d675d334d0dae59087b476cd99a395d1f51ef32895ace->leave($__internal_f139e1e97ac6ae44f06d675d334d0dae59087b476cd99a395d1f51ef32895ace_prof);

        
        $__internal_07ada3bfc72d231aed1a7d1f573c18d4e175dafcabff7422439d3d6ce7e8658a->leave($__internal_07ada3bfc72d231aed1a7d1f573c18d4e175dafcabff7422439d3d6ce7e8658a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
