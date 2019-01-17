<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_485a80234a59f8cde2406e11eecedf0cfba25476358ca06393c00d9bcc96d5d8 extends Twig_Template
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
        $__internal_4771a02431bd1db5ead0396e778b68599a3e2e0d8446c4b2cb5b8c54d856dcb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4771a02431bd1db5ead0396e778b68599a3e2e0d8446c4b2cb5b8c54d856dcb6->enter($__internal_4771a02431bd1db5ead0396e778b68599a3e2e0d8446c4b2cb5b8c54d856dcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_6a48749f83a2446ff5dc494e655dade38b01507d1f87f025927d108b03aa831b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a48749f83a2446ff5dc494e655dade38b01507d1f87f025927d108b03aa831b->enter($__internal_6a48749f83a2446ff5dc494e655dade38b01507d1f87f025927d108b03aa831b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4771a02431bd1db5ead0396e778b68599a3e2e0d8446c4b2cb5b8c54d856dcb6->leave($__internal_4771a02431bd1db5ead0396e778b68599a3e2e0d8446c4b2cb5b8c54d856dcb6_prof);

        
        $__internal_6a48749f83a2446ff5dc494e655dade38b01507d1f87f025927d108b03aa831b->leave($__internal_6a48749f83a2446ff5dc494e655dade38b01507d1f87f025927d108b03aa831b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
