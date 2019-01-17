<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_435b145c8ef31e48213b21b1f35cb1988e3aabdd0f0a8db418b196ebf061e9c8 extends Twig_Template
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
        $__internal_096a50e3653a51b6c656a32361444a9f54faac152ee03e0efbfa7c028df1cdb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_096a50e3653a51b6c656a32361444a9f54faac152ee03e0efbfa7c028df1cdb6->enter($__internal_096a50e3653a51b6c656a32361444a9f54faac152ee03e0efbfa7c028df1cdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_081669031f0ee4d063a4e4b0d00609238a6c7835b686f404f08ff75e4ffa3fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081669031f0ee4d063a4e4b0d00609238a6c7835b686f404f08ff75e4ffa3fcf->enter($__internal_081669031f0ee4d063a4e4b0d00609238a6c7835b686f404f08ff75e4ffa3fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_096a50e3653a51b6c656a32361444a9f54faac152ee03e0efbfa7c028df1cdb6->leave($__internal_096a50e3653a51b6c656a32361444a9f54faac152ee03e0efbfa7c028df1cdb6_prof);

        
        $__internal_081669031f0ee4d063a4e4b0d00609238a6c7835b686f404f08ff75e4ffa3fcf->leave($__internal_081669031f0ee4d063a4e4b0d00609238a6c7835b686f404f08ff75e4ffa3fcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
