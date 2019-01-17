<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3a46f5d3cf8ca8ca73488b5ae09e0be6877e692d893e92b012c33fb760462219 extends Twig_Template
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
        $__internal_ce3bd790513d3568cb0fc3d64325c553e010ed996675df70bd3128fc48a6af8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce3bd790513d3568cb0fc3d64325c553e010ed996675df70bd3128fc48a6af8b->enter($__internal_ce3bd790513d3568cb0fc3d64325c553e010ed996675df70bd3128fc48a6af8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7530c31a8a8d6045c3021dbc4b20cd5675ad7a7939afed25981090e5c8356109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7530c31a8a8d6045c3021dbc4b20cd5675ad7a7939afed25981090e5c8356109->enter($__internal_7530c31a8a8d6045c3021dbc4b20cd5675ad7a7939afed25981090e5c8356109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ce3bd790513d3568cb0fc3d64325c553e010ed996675df70bd3128fc48a6af8b->leave($__internal_ce3bd790513d3568cb0fc3d64325c553e010ed996675df70bd3128fc48a6af8b_prof);

        
        $__internal_7530c31a8a8d6045c3021dbc4b20cd5675ad7a7939afed25981090e5c8356109->leave($__internal_7530c31a8a8d6045c3021dbc4b20cd5675ad7a7939afed25981090e5c8356109_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
