<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_288584128327698ed0e6b6c25dbb34fb794c43c6f188d96db5d4ff24feacf281 extends Twig_Template
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
        $__internal_53f5fa61288d3dc029656e334e4f2c0e29be10bb8d419ff7618665422e4c4ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f5fa61288d3dc029656e334e4f2c0e29be10bb8d419ff7618665422e4c4ebf->enter($__internal_53f5fa61288d3dc029656e334e4f2c0e29be10bb8d419ff7618665422e4c4ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_77a3fdf8c54255b64b475edba1bb88ef9d397d012d4331f56833ab4c70e15a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a3fdf8c54255b64b475edba1bb88ef9d397d012d4331f56833ab4c70e15a78->enter($__internal_77a3fdf8c54255b64b475edba1bb88ef9d397d012d4331f56833ab4c70e15a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_53f5fa61288d3dc029656e334e4f2c0e29be10bb8d419ff7618665422e4c4ebf->leave($__internal_53f5fa61288d3dc029656e334e4f2c0e29be10bb8d419ff7618665422e4c4ebf_prof);

        
        $__internal_77a3fdf8c54255b64b475edba1bb88ef9d397d012d4331f56833ab4c70e15a78->leave($__internal_77a3fdf8c54255b64b475edba1bb88ef9d397d012d4331f56833ab4c70e15a78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
