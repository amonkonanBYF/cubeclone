<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_ac41bea6f875975ce4bf391692af342d0e61eabc705bc3e50d95993582d8c80f extends Twig_Template
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
        $__internal_ef0ea5c6fd00d871a8fe58168c3c9333d2d2969e5bdf5026dae216be4601e33a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef0ea5c6fd00d871a8fe58168c3c9333d2d2969e5bdf5026dae216be4601e33a->enter($__internal_ef0ea5c6fd00d871a8fe58168c3c9333d2d2969e5bdf5026dae216be4601e33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_cd22221317a012eb82e745549866bd53e335cf56535f8c4bbdfb81c5904c5c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd22221317a012eb82e745549866bd53e335cf56535f8c4bbdfb81c5904c5c65->enter($__internal_cd22221317a012eb82e745549866bd53e335cf56535f8c4bbdfb81c5904c5c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ef0ea5c6fd00d871a8fe58168c3c9333d2d2969e5bdf5026dae216be4601e33a->leave($__internal_ef0ea5c6fd00d871a8fe58168c3c9333d2d2969e5bdf5026dae216be4601e33a_prof);

        
        $__internal_cd22221317a012eb82e745549866bd53e335cf56535f8c4bbdfb81c5904c5c65->leave($__internal_cd22221317a012eb82e745549866bd53e335cf56535f8c4bbdfb81c5904c5c65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
