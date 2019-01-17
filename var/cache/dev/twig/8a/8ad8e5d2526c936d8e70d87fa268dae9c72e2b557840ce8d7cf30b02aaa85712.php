<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b2c95232eb0d55c97d68de5ae4f44443823fca483ab53295763b097e03cc727a extends Twig_Template
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
        $__internal_3ad97ca2d3bdbcf76a6cac19ca888024ea128516189d768148253212db6eb510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad97ca2d3bdbcf76a6cac19ca888024ea128516189d768148253212db6eb510->enter($__internal_3ad97ca2d3bdbcf76a6cac19ca888024ea128516189d768148253212db6eb510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_c50f72da44520b47f927747a0059baf095e9d087c57bd9a9e07ce787418b01b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50f72da44520b47f927747a0059baf095e9d087c57bd9a9e07ce787418b01b8->enter($__internal_c50f72da44520b47f927747a0059baf095e9d087c57bd9a9e07ce787418b01b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3ad97ca2d3bdbcf76a6cac19ca888024ea128516189d768148253212db6eb510->leave($__internal_3ad97ca2d3bdbcf76a6cac19ca888024ea128516189d768148253212db6eb510_prof);

        
        $__internal_c50f72da44520b47f927747a0059baf095e9d087c57bd9a9e07ce787418b01b8->leave($__internal_c50f72da44520b47f927747a0059baf095e9d087c57bd9a9e07ce787418b01b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
