<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2f63b0f12ed9e9ed0461090b4ee7640c144842d17af306cd647ea6e6006f3f18 extends Twig_Template
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
        $__internal_df482e18d4d4a676feb71b665971f82d7d2c4fa842af4cb3c6017bdf502d72a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df482e18d4d4a676feb71b665971f82d7d2c4fa842af4cb3c6017bdf502d72a9->enter($__internal_df482e18d4d4a676feb71b665971f82d7d2c4fa842af4cb3c6017bdf502d72a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d544edd58d468f292185818346787dc99cefcd69167cae296d23cd213fe0caa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d544edd58d468f292185818346787dc99cefcd69167cae296d23cd213fe0caa1->enter($__internal_d544edd58d468f292185818346787dc99cefcd69167cae296d23cd213fe0caa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_df482e18d4d4a676feb71b665971f82d7d2c4fa842af4cb3c6017bdf502d72a9->leave($__internal_df482e18d4d4a676feb71b665971f82d7d2c4fa842af4cb3c6017bdf502d72a9_prof);

        
        $__internal_d544edd58d468f292185818346787dc99cefcd69167cae296d23cd213fe0caa1->leave($__internal_d544edd58d468f292185818346787dc99cefcd69167cae296d23cd213fe0caa1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
