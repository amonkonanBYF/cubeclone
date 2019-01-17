<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ea1018697a51d1ccf3cbed677966ff45c0cc8452ecae2eaac543aef93fe6dcf0 extends Twig_Template
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
        $__internal_49914427d9a798a63a682d51f50533f04cc0be97ea0d6a5de6a95d73317fdaf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49914427d9a798a63a682d51f50533f04cc0be97ea0d6a5de6a95d73317fdaf6->enter($__internal_49914427d9a798a63a682d51f50533f04cc0be97ea0d6a5de6a95d73317fdaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_7bf0373a4123d4d2a701d455be8d16efbbe2d02688c5eee21dc29f8c4d072c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf0373a4123d4d2a701d455be8d16efbbe2d02688c5eee21dc29f8c4d072c4e->enter($__internal_7bf0373a4123d4d2a701d455be8d16efbbe2d02688c5eee21dc29f8c4d072c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_49914427d9a798a63a682d51f50533f04cc0be97ea0d6a5de6a95d73317fdaf6->leave($__internal_49914427d9a798a63a682d51f50533f04cc0be97ea0d6a5de6a95d73317fdaf6_prof);

        
        $__internal_7bf0373a4123d4d2a701d455be8d16efbbe2d02688c5eee21dc29f8c4d072c4e->leave($__internal_7bf0373a4123d4d2a701d455be8d16efbbe2d02688c5eee21dc29f8c4d072c4e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
