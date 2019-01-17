<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_dfbbb742d790e4aa82f523cd4151318f9070a60a902ca3a1a54bb847823bafe1 extends Twig_Template
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
        $__internal_48ced3331cc80dd243212b7ca7bef0942a837ef3b5352c355a26064d566a3b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ced3331cc80dd243212b7ca7bef0942a837ef3b5352c355a26064d566a3b80->enter($__internal_48ced3331cc80dd243212b7ca7bef0942a837ef3b5352c355a26064d566a3b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_54e1f05433c29835c57a71a4600abd2c129e5ecad3d8799b571872fdd896775b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e1f05433c29835c57a71a4600abd2c129e5ecad3d8799b571872fdd896775b->enter($__internal_54e1f05433c29835c57a71a4600abd2c129e5ecad3d8799b571872fdd896775b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_48ced3331cc80dd243212b7ca7bef0942a837ef3b5352c355a26064d566a3b80->leave($__internal_48ced3331cc80dd243212b7ca7bef0942a837ef3b5352c355a26064d566a3b80_prof);

        
        $__internal_54e1f05433c29835c57a71a4600abd2c129e5ecad3d8799b571872fdd896775b->leave($__internal_54e1f05433c29835c57a71a4600abd2c129e5ecad3d8799b571872fdd896775b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
