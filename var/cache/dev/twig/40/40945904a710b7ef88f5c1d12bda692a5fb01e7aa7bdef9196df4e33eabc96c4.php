<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_496361a52fc8271d65235d4851230ebdc00c8896318ee973e165ea284f8b479c extends Twig_Template
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
        $__internal_501a3ce1ea0e95f1a9c88447adc7a985a7d9b1b2caafb68574fbe5ca1b5423ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501a3ce1ea0e95f1a9c88447adc7a985a7d9b1b2caafb68574fbe5ca1b5423ca->enter($__internal_501a3ce1ea0e95f1a9c88447adc7a985a7d9b1b2caafb68574fbe5ca1b5423ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_3597a9076b30270f779ceb6304d8b6554050fe2e4b6fe42ce147f90e0c3ec181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3597a9076b30270f779ceb6304d8b6554050fe2e4b6fe42ce147f90e0c3ec181->enter($__internal_3597a9076b30270f779ceb6304d8b6554050fe2e4b6fe42ce147f90e0c3ec181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_501a3ce1ea0e95f1a9c88447adc7a985a7d9b1b2caafb68574fbe5ca1b5423ca->leave($__internal_501a3ce1ea0e95f1a9c88447adc7a985a7d9b1b2caafb68574fbe5ca1b5423ca_prof);

        
        $__internal_3597a9076b30270f779ceb6304d8b6554050fe2e4b6fe42ce147f90e0c3ec181->leave($__internal_3597a9076b30270f779ceb6304d8b6554050fe2e4b6fe42ce147f90e0c3ec181_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
