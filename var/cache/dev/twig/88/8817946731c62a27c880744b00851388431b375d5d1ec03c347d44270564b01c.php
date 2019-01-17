<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_84cc8ace1e012f5d09c3d977d3a013d52c639cb239d4eb6f08d79c7d7a34d27b extends Twig_Template
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
        $__internal_166c25f26ccfb98f9976bb197008e57e0daf0ede76e3fb529064de606f487ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166c25f26ccfb98f9976bb197008e57e0daf0ede76e3fb529064de606f487ae5->enter($__internal_166c25f26ccfb98f9976bb197008e57e0daf0ede76e3fb529064de606f487ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_4de77ab52b1086cc8e9ff82e9011d0c3be4ce16444e57150c093fa0ebfcffbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de77ab52b1086cc8e9ff82e9011d0c3be4ce16444e57150c093fa0ebfcffbf8->enter($__internal_4de77ab52b1086cc8e9ff82e9011d0c3be4ce16444e57150c093fa0ebfcffbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_166c25f26ccfb98f9976bb197008e57e0daf0ede76e3fb529064de606f487ae5->leave($__internal_166c25f26ccfb98f9976bb197008e57e0daf0ede76e3fb529064de606f487ae5_prof);

        
        $__internal_4de77ab52b1086cc8e9ff82e9011d0c3be4ce16444e57150c093fa0ebfcffbf8->leave($__internal_4de77ab52b1086cc8e9ff82e9011d0c3be4ce16444e57150c093fa0ebfcffbf8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
