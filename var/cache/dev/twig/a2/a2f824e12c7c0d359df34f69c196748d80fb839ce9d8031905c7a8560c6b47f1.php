<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9b3aa77c4da7542a8080a9e23f73e33665102de677ec648943af608d4dc1cd67 extends Twig_Template
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
        $__internal_78a713d773c0a7c3fe53d594ea12234b5ad535e435b928d73b46cff0f1355f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a713d773c0a7c3fe53d594ea12234b5ad535e435b928d73b46cff0f1355f19->enter($__internal_78a713d773c0a7c3fe53d594ea12234b5ad535e435b928d73b46cff0f1355f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_daa65eca893ea39a5364068ee65ce7bfd35d53285fc3bd22843dc31c47bfbba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa65eca893ea39a5364068ee65ce7bfd35d53285fc3bd22843dc31c47bfbba1->enter($__internal_daa65eca893ea39a5364068ee65ce7bfd35d53285fc3bd22843dc31c47bfbba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_78a713d773c0a7c3fe53d594ea12234b5ad535e435b928d73b46cff0f1355f19->leave($__internal_78a713d773c0a7c3fe53d594ea12234b5ad535e435b928d73b46cff0f1355f19_prof);

        
        $__internal_daa65eca893ea39a5364068ee65ce7bfd35d53285fc3bd22843dc31c47bfbba1->leave($__internal_daa65eca893ea39a5364068ee65ce7bfd35d53285fc3bd22843dc31c47bfbba1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
