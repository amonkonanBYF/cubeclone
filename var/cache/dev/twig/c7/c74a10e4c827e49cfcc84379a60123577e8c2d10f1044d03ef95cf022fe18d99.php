<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f21ab4e482dbc0556d765e1ce856c35da01a2cbec85481c9dfccf87c2c79808a extends Twig_Template
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
        $__internal_b55a8af1dd1c08e3004101068a9ef0239b85b00439bf7474f4fbbf70f84ab9d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b55a8af1dd1c08e3004101068a9ef0239b85b00439bf7474f4fbbf70f84ab9d8->enter($__internal_b55a8af1dd1c08e3004101068a9ef0239b85b00439bf7474f4fbbf70f84ab9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_278d51a70b87294e00264770952e00ada689a2bbc577ca743c64611f093a63b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278d51a70b87294e00264770952e00ada689a2bbc577ca743c64611f093a63b4->enter($__internal_278d51a70b87294e00264770952e00ada689a2bbc577ca743c64611f093a63b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b55a8af1dd1c08e3004101068a9ef0239b85b00439bf7474f4fbbf70f84ab9d8->leave($__internal_b55a8af1dd1c08e3004101068a9ef0239b85b00439bf7474f4fbbf70f84ab9d8_prof);

        
        $__internal_278d51a70b87294e00264770952e00ada689a2bbc577ca743c64611f093a63b4->leave($__internal_278d51a70b87294e00264770952e00ada689a2bbc577ca743c64611f093a63b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
