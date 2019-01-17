<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_27979bc060592bd8fda23ef67f3b72ac46a69e3a8cde15a44253ea5a4cfe9d22 extends Twig_Template
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
        $__internal_d0f941ffa5d1f3f87efe4b8fb5cbf0010052597e44ea0438605515073f3c0782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f941ffa5d1f3f87efe4b8fb5cbf0010052597e44ea0438605515073f3c0782->enter($__internal_d0f941ffa5d1f3f87efe4b8fb5cbf0010052597e44ea0438605515073f3c0782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d30d68500c890d0bae3ec5b9d3fa22149db4da1d3ed1bb9884afebbbc4d1890b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30d68500c890d0bae3ec5b9d3fa22149db4da1d3ed1bb9884afebbbc4d1890b->enter($__internal_d30d68500c890d0bae3ec5b9d3fa22149db4da1d3ed1bb9884afebbbc4d1890b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d0f941ffa5d1f3f87efe4b8fb5cbf0010052597e44ea0438605515073f3c0782->leave($__internal_d0f941ffa5d1f3f87efe4b8fb5cbf0010052597e44ea0438605515073f3c0782_prof);

        
        $__internal_d30d68500c890d0bae3ec5b9d3fa22149db4da1d3ed1bb9884afebbbc4d1890b->leave($__internal_d30d68500c890d0bae3ec5b9d3fa22149db4da1d3ed1bb9884afebbbc4d1890b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
