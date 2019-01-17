<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_0d229daf3099657ec73e67a30e4e4c649e1847f887c7836ee2e7badbb5dc015c extends Twig_Template
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
        $__internal_cb0a668778c37db82c4956a7db2e7bdabc9f45361bd7d9dfca65997ea3df5dd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0a668778c37db82c4956a7db2e7bdabc9f45361bd7d9dfca65997ea3df5dd2->enter($__internal_cb0a668778c37db82c4956a7db2e7bdabc9f45361bd7d9dfca65997ea3df5dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_40a7a9a22533445336f572529b22348fafb9e70146e7755a0fb8cacb5eb6e442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a7a9a22533445336f572529b22348fafb9e70146e7755a0fb8cacb5eb6e442->enter($__internal_40a7a9a22533445336f572529b22348fafb9e70146e7755a0fb8cacb5eb6e442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cb0a668778c37db82c4956a7db2e7bdabc9f45361bd7d9dfca65997ea3df5dd2->leave($__internal_cb0a668778c37db82c4956a7db2e7bdabc9f45361bd7d9dfca65997ea3df5dd2_prof);

        
        $__internal_40a7a9a22533445336f572529b22348fafb9e70146e7755a0fb8cacb5eb6e442->leave($__internal_40a7a9a22533445336f572529b22348fafb9e70146e7755a0fb8cacb5eb6e442_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
