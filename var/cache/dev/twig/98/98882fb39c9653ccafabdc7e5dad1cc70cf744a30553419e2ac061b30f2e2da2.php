<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_fd92be7e6432c7a02abe94c7282a8557d41b1a96172d1d71ffa3d8ad9e6799a4 extends Twig_Template
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
        $__internal_36db81aa4cb024c0573ee989d80580709e0d9efd430d19995270dd8d6b03b246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36db81aa4cb024c0573ee989d80580709e0d9efd430d19995270dd8d6b03b246->enter($__internal_36db81aa4cb024c0573ee989d80580709e0d9efd430d19995270dd8d6b03b246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_dc4a0597ce312b0c988e8bf151b0691bbbbe8c3db9a810239b3ceaa717c765d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4a0597ce312b0c988e8bf151b0691bbbbe8c3db9a810239b3ceaa717c765d5->enter($__internal_dc4a0597ce312b0c988e8bf151b0691bbbbe8c3db9a810239b3ceaa717c765d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_36db81aa4cb024c0573ee989d80580709e0d9efd430d19995270dd8d6b03b246->leave($__internal_36db81aa4cb024c0573ee989d80580709e0d9efd430d19995270dd8d6b03b246_prof);

        
        $__internal_dc4a0597ce312b0c988e8bf151b0691bbbbe8c3db9a810239b3ceaa717c765d5->leave($__internal_dc4a0597ce312b0c988e8bf151b0691bbbbe8c3db9a810239b3ceaa717c765d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
