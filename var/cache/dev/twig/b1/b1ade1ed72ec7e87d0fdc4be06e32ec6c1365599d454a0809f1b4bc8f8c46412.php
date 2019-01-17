<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9d475fb8f7d7590877abafd14afacceec090b441375fed86176457c377d87a5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_52c22ca2695ce93f1ee269522b6c95787a01f60f31732cc68fc481685ead4202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c22ca2695ce93f1ee269522b6c95787a01f60f31732cc68fc481685ead4202->enter($__internal_52c22ca2695ce93f1ee269522b6c95787a01f60f31732cc68fc481685ead4202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2cff18bfa135f9e13ffd31d2f404b6c7ff4885fe30098c2c19736457e5e84e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cff18bfa135f9e13ffd31d2f404b6c7ff4885fe30098c2c19736457e5e84e2b->enter($__internal_2cff18bfa135f9e13ffd31d2f404b6c7ff4885fe30098c2c19736457e5e84e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52c22ca2695ce93f1ee269522b6c95787a01f60f31732cc68fc481685ead4202->leave($__internal_52c22ca2695ce93f1ee269522b6c95787a01f60f31732cc68fc481685ead4202_prof);

        
        $__internal_2cff18bfa135f9e13ffd31d2f404b6c7ff4885fe30098c2c19736457e5e84e2b->leave($__internal_2cff18bfa135f9e13ffd31d2f404b6c7ff4885fe30098c2c19736457e5e84e2b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d8b35827fa268c07e71cb9c16d8951b9170fec4bd9b9915dd2421117089c8e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8b35827fa268c07e71cb9c16d8951b9170fec4bd9b9915dd2421117089c8e1->enter($__internal_8d8b35827fa268c07e71cb9c16d8951b9170fec4bd9b9915dd2421117089c8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7cbfd48522b34648e05bed08deb24dc08c66578731ce14e28805e233d4fd268d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbfd48522b34648e05bed08deb24dc08c66578731ce14e28805e233d4fd268d->enter($__internal_7cbfd48522b34648e05bed08deb24dc08c66578731ce14e28805e233d4fd268d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7cbfd48522b34648e05bed08deb24dc08c66578731ce14e28805e233d4fd268d->leave($__internal_7cbfd48522b34648e05bed08deb24dc08c66578731ce14e28805e233d4fd268d_prof);

        
        $__internal_8d8b35827fa268c07e71cb9c16d8951b9170fec4bd9b9915dd2421117089c8e1->leave($__internal_8d8b35827fa268c07e71cb9c16d8951b9170fec4bd9b9915dd2421117089c8e1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1091264ae82e2a371056f930c3fb2a93363480434b5e7ab052fec45c62487542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1091264ae82e2a371056f930c3fb2a93363480434b5e7ab052fec45c62487542->enter($__internal_1091264ae82e2a371056f930c3fb2a93363480434b5e7ab052fec45c62487542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a328b2752951987dab39204343d4ad2c68fff2fee6778c44a37bd9d0c7fc6c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a328b2752951987dab39204343d4ad2c68fff2fee6778c44a37bd9d0c7fc6c17->enter($__internal_a328b2752951987dab39204343d4ad2c68fff2fee6778c44a37bd9d0c7fc6c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a328b2752951987dab39204343d4ad2c68fff2fee6778c44a37bd9d0c7fc6c17->leave($__internal_a328b2752951987dab39204343d4ad2c68fff2fee6778c44a37bd9d0c7fc6c17_prof);

        
        $__internal_1091264ae82e2a371056f930c3fb2a93363480434b5e7ab052fec45c62487542->leave($__internal_1091264ae82e2a371056f930c3fb2a93363480434b5e7ab052fec45c62487542_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
