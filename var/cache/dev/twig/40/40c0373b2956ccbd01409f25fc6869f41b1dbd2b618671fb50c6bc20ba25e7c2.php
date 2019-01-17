<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_5479521664a76d2699f761a444e6f0d733b9b2b7739f36b1a1bde5c74731f7b2 extends Twig_Template
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
        $__internal_245b361475cb8a8cfceb41423808c7674d06cccaa0ef1053c0475aa288e295d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245b361475cb8a8cfceb41423808c7674d06cccaa0ef1053c0475aa288e295d6->enter($__internal_245b361475cb8a8cfceb41423808c7674d06cccaa0ef1053c0475aa288e295d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ba32259d18fc0204cbc61c07237ac77a49afbcf47a0a446c5c6c13f4c4a00e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba32259d18fc0204cbc61c07237ac77a49afbcf47a0a446c5c6c13f4c4a00e73->enter($__internal_ba32259d18fc0204cbc61c07237ac77a49afbcf47a0a446c5c6c13f4c4a00e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_245b361475cb8a8cfceb41423808c7674d06cccaa0ef1053c0475aa288e295d6->leave($__internal_245b361475cb8a8cfceb41423808c7674d06cccaa0ef1053c0475aa288e295d6_prof);

        
        $__internal_ba32259d18fc0204cbc61c07237ac77a49afbcf47a0a446c5c6c13f4c4a00e73->leave($__internal_ba32259d18fc0204cbc61c07237ac77a49afbcf47a0a446c5c6c13f4c4a00e73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
