<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8cb8dd1eaf50f41c0f18025fa2d30798b2d605186fe8effb0f052950dc68fecd extends Twig_Template
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
        $__internal_7f39df8322c7ee0dee910d35da5adf97ff34fb12cf9c40e6450351cf303f7851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f39df8322c7ee0dee910d35da5adf97ff34fb12cf9c40e6450351cf303f7851->enter($__internal_7f39df8322c7ee0dee910d35da5adf97ff34fb12cf9c40e6450351cf303f7851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_b03a3d8693e325b916ec69018389284788cbc4163b7d0a8f59f5af0641f9f92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b03a3d8693e325b916ec69018389284788cbc4163b7d0a8f59f5af0641f9f92c->enter($__internal_b03a3d8693e325b916ec69018389284788cbc4163b7d0a8f59f5af0641f9f92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7f39df8322c7ee0dee910d35da5adf97ff34fb12cf9c40e6450351cf303f7851->leave($__internal_7f39df8322c7ee0dee910d35da5adf97ff34fb12cf9c40e6450351cf303f7851_prof);

        
        $__internal_b03a3d8693e325b916ec69018389284788cbc4163b7d0a8f59f5af0641f9f92c->leave($__internal_b03a3d8693e325b916ec69018389284788cbc4163b7d0a8f59f5af0641f9f92c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
