<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_1bc53a257bb5722d5c1b14b1c99cd7f54c0287673113c42acceefeee9aefef78 extends Twig_Template
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
        $__internal_11b155f805316b666f454a879a768e10697fd48b88583f5b2dad27f490c711db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b155f805316b666f454a879a768e10697fd48b88583f5b2dad27f490c711db->enter($__internal_11b155f805316b666f454a879a768e10697fd48b88583f5b2dad27f490c711db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2d69a9ab6a7fc7e9e61c24b43cd7275ae9013fef4a8f0e587d0565c8378687b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d69a9ab6a7fc7e9e61c24b43cd7275ae9013fef4a8f0e587d0565c8378687b4->enter($__internal_2d69a9ab6a7fc7e9e61c24b43cd7275ae9013fef4a8f0e587d0565c8378687b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_11b155f805316b666f454a879a768e10697fd48b88583f5b2dad27f490c711db->leave($__internal_11b155f805316b666f454a879a768e10697fd48b88583f5b2dad27f490c711db_prof);

        
        $__internal_2d69a9ab6a7fc7e9e61c24b43cd7275ae9013fef4a8f0e587d0565c8378687b4->leave($__internal_2d69a9ab6a7fc7e9e61c24b43cd7275ae9013fef4a8f0e587d0565c8378687b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
