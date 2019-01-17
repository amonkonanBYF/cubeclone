<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_987ac1695af07336547e168128399df4bd6c257ab9e89891fcee1bad7d943e81 extends Twig_Template
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
        $__internal_4e5fc99f0e874f290433b52960eda32936cf1dce5e924e0a98e7920e790db488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5fc99f0e874f290433b52960eda32936cf1dce5e924e0a98e7920e790db488->enter($__internal_4e5fc99f0e874f290433b52960eda32936cf1dce5e924e0a98e7920e790db488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_eccd61cccb8b285daf9dbf38895397440ee28ecff6fdcd53a7de63584bf488e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccd61cccb8b285daf9dbf38895397440ee28ecff6fdcd53a7de63584bf488e0->enter($__internal_eccd61cccb8b285daf9dbf38895397440ee28ecff6fdcd53a7de63584bf488e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_4e5fc99f0e874f290433b52960eda32936cf1dce5e924e0a98e7920e790db488->leave($__internal_4e5fc99f0e874f290433b52960eda32936cf1dce5e924e0a98e7920e790db488_prof);

        
        $__internal_eccd61cccb8b285daf9dbf38895397440ee28ecff6fdcd53a7de63584bf488e0->leave($__internal_eccd61cccb8b285daf9dbf38895397440ee28ecff6fdcd53a7de63584bf488e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
