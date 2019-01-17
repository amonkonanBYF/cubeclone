<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_50d7596cc7694e7be7cb1c574fe4a4bfb444aae630706bfcc6c49ff0c638a4ee extends Twig_Template
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
        $__internal_1137ca29664fef63d70d6340c16a753b8c15b8ee32400dcb8cc78926acbd8e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1137ca29664fef63d70d6340c16a753b8c15b8ee32400dcb8cc78926acbd8e09->enter($__internal_1137ca29664fef63d70d6340c16a753b8c15b8ee32400dcb8cc78926acbd8e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_9097f37ddba35a71b751af104a9947f209eb711fc5dbcebc5997e1c65667f464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9097f37ddba35a71b751af104a9947f209eb711fc5dbcebc5997e1c65667f464->enter($__internal_9097f37ddba35a71b751af104a9947f209eb711fc5dbcebc5997e1c65667f464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1137ca29664fef63d70d6340c16a753b8c15b8ee32400dcb8cc78926acbd8e09->leave($__internal_1137ca29664fef63d70d6340c16a753b8c15b8ee32400dcb8cc78926acbd8e09_prof);

        
        $__internal_9097f37ddba35a71b751af104a9947f209eb711fc5dbcebc5997e1c65667f464->leave($__internal_9097f37ddba35a71b751af104a9947f209eb711fc5dbcebc5997e1c65667f464_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
