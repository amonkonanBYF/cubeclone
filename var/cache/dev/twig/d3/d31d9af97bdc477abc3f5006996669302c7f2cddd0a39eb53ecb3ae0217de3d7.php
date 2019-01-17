<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9ecddeb65954af326e08e59dc415095e3d5d2361d7468edc360abd7ffc046fb1 extends Twig_Template
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
        $__internal_1972b3fbd9de2feec035127c0ffdf81600fcb3efa93c5f316b1ffea6ea4fa8c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1972b3fbd9de2feec035127c0ffdf81600fcb3efa93c5f316b1ffea6ea4fa8c8->enter($__internal_1972b3fbd9de2feec035127c0ffdf81600fcb3efa93c5f316b1ffea6ea4fa8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_1e4b70db039344e7ddf40bcb0341836dc5f5d273c14061b742bbe2ee0334dd20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4b70db039344e7ddf40bcb0341836dc5f5d273c14061b742bbe2ee0334dd20->enter($__internal_1e4b70db039344e7ddf40bcb0341836dc5f5d273c14061b742bbe2ee0334dd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1972b3fbd9de2feec035127c0ffdf81600fcb3efa93c5f316b1ffea6ea4fa8c8->leave($__internal_1972b3fbd9de2feec035127c0ffdf81600fcb3efa93c5f316b1ffea6ea4fa8c8_prof);

        
        $__internal_1e4b70db039344e7ddf40bcb0341836dc5f5d273c14061b742bbe2ee0334dd20->leave($__internal_1e4b70db039344e7ddf40bcb0341836dc5f5d273c14061b742bbe2ee0334dd20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
