<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cd742083def9d721d069bb8a62c065f3ceaa1f39293db08041323048139d4b03 extends Twig_Template
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
        $__internal_31320b856af94bfc17ac19b6fe9ae15ffda70d029800b5799b0cc4693582576e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31320b856af94bfc17ac19b6fe9ae15ffda70d029800b5799b0cc4693582576e->enter($__internal_31320b856af94bfc17ac19b6fe9ae15ffda70d029800b5799b0cc4693582576e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_48e14b7404ee1c0873b006990570db93604943371449660ae2f5334f5a764e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e14b7404ee1c0873b006990570db93604943371449660ae2f5334f5a764e72->enter($__internal_48e14b7404ee1c0873b006990570db93604943371449660ae2f5334f5a764e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_31320b856af94bfc17ac19b6fe9ae15ffda70d029800b5799b0cc4693582576e->leave($__internal_31320b856af94bfc17ac19b6fe9ae15ffda70d029800b5799b0cc4693582576e_prof);

        
        $__internal_48e14b7404ee1c0873b006990570db93604943371449660ae2f5334f5a764e72->leave($__internal_48e14b7404ee1c0873b006990570db93604943371449660ae2f5334f5a764e72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
