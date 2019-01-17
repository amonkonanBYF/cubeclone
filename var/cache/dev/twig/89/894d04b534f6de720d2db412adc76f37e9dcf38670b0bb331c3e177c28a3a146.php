<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ed4bc1980f0fd307bb25eee723a75fb860db2c88ca27a34fbf168cd736277e2c extends Twig_Template
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
        $__internal_04e31b06cdf9eee813e5d59a36c9c3a27a6d12911437d0e96714421218b34220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e31b06cdf9eee813e5d59a36c9c3a27a6d12911437d0e96714421218b34220->enter($__internal_04e31b06cdf9eee813e5d59a36c9c3a27a6d12911437d0e96714421218b34220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_d2594b0f6272e7dc140ca99a2feebd66bb7ce42ce367a6da17a62665ebace39f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2594b0f6272e7dc140ca99a2feebd66bb7ce42ce367a6da17a62665ebace39f->enter($__internal_d2594b0f6272e7dc140ca99a2feebd66bb7ce42ce367a6da17a62665ebace39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_04e31b06cdf9eee813e5d59a36c9c3a27a6d12911437d0e96714421218b34220->leave($__internal_04e31b06cdf9eee813e5d59a36c9c3a27a6d12911437d0e96714421218b34220_prof);

        
        $__internal_d2594b0f6272e7dc140ca99a2feebd66bb7ce42ce367a6da17a62665ebace39f->leave($__internal_d2594b0f6272e7dc140ca99a2feebd66bb7ce42ce367a6da17a62665ebace39f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
