<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_97530a603414ff968afa75fd8425460d8debf405eb3db4f998bf3fc52072e52a extends Twig_Template
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
        $__internal_3533710a00891a55707288596eb9c1bda63bc946c342f96ba37cea0bea38f3d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3533710a00891a55707288596eb9c1bda63bc946c342f96ba37cea0bea38f3d4->enter($__internal_3533710a00891a55707288596eb9c1bda63bc946c342f96ba37cea0bea38f3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_5654e3ef15e97a78e69fc930f7f40f103bc5fd46e6759beb6645737f500f3eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5654e3ef15e97a78e69fc930f7f40f103bc5fd46e6759beb6645737f500f3eff->enter($__internal_5654e3ef15e97a78e69fc930f7f40f103bc5fd46e6759beb6645737f500f3eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3533710a00891a55707288596eb9c1bda63bc946c342f96ba37cea0bea38f3d4->leave($__internal_3533710a00891a55707288596eb9c1bda63bc946c342f96ba37cea0bea38f3d4_prof);

        
        $__internal_5654e3ef15e97a78e69fc930f7f40f103bc5fd46e6759beb6645737f500f3eff->leave($__internal_5654e3ef15e97a78e69fc930f7f40f103bc5fd46e6759beb6645737f500f3eff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
