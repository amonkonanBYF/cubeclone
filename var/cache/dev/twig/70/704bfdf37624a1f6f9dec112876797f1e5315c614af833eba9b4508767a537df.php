<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_1ffbb21902518405bf59b7ec94ccffaf68c67c4a1b0ebaa4cce656079092e2c1 extends Twig_Template
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
        $__internal_b399ef981ff1bb401a304cdd8670890b1c199f4ce81506a4d5743a6312b3b7a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b399ef981ff1bb401a304cdd8670890b1c199f4ce81506a4d5743a6312b3b7a0->enter($__internal_b399ef981ff1bb401a304cdd8670890b1c199f4ce81506a4d5743a6312b3b7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1c4fb596836660576500795abe9ec1376998b641ea599fd03c0321ce9ba0e0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4fb596836660576500795abe9ec1376998b641ea599fd03c0321ce9ba0e0d8->enter($__internal_1c4fb596836660576500795abe9ec1376998b641ea599fd03c0321ce9ba0e0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b399ef981ff1bb401a304cdd8670890b1c199f4ce81506a4d5743a6312b3b7a0->leave($__internal_b399ef981ff1bb401a304cdd8670890b1c199f4ce81506a4d5743a6312b3b7a0_prof);

        
        $__internal_1c4fb596836660576500795abe9ec1376998b641ea599fd03c0321ce9ba0e0d8->leave($__internal_1c4fb596836660576500795abe9ec1376998b641ea599fd03c0321ce9ba0e0d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
