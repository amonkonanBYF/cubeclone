<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_333c399b3bd4125742ce8e295f028aca36bbf84eca188d41204b939f0b729192 extends Twig_Template
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
        $__internal_654c43502d17f51480980d3a99791748396023be8be48ec6e5a6bbd8e2659aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654c43502d17f51480980d3a99791748396023be8be48ec6e5a6bbd8e2659aab->enter($__internal_654c43502d17f51480980d3a99791748396023be8be48ec6e5a6bbd8e2659aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_d5e8500e763c890476ed78be5fd129f200437482c0e3502547ed884f3681117d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e8500e763c890476ed78be5fd129f200437482c0e3502547ed884f3681117d->enter($__internal_d5e8500e763c890476ed78be5fd129f200437482c0e3502547ed884f3681117d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_654c43502d17f51480980d3a99791748396023be8be48ec6e5a6bbd8e2659aab->leave($__internal_654c43502d17f51480980d3a99791748396023be8be48ec6e5a6bbd8e2659aab_prof);

        
        $__internal_d5e8500e763c890476ed78be5fd129f200437482c0e3502547ed884f3681117d->leave($__internal_d5e8500e763c890476ed78be5fd129f200437482c0e3502547ed884f3681117d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
