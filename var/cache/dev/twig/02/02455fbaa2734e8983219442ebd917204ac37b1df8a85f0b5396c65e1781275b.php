<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_598e049b61823ad2836bb9f47a778eb83326f7bdfac6d9375e9b062c5845249a extends Twig_Template
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
        $__internal_141f2fd397163ed86a08c8d7563277f6ddb7e331e569e32829b81a59552c24cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_141f2fd397163ed86a08c8d7563277f6ddb7e331e569e32829b81a59552c24cb->enter($__internal_141f2fd397163ed86a08c8d7563277f6ddb7e331e569e32829b81a59552c24cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_16a720619f3483b15f235b5094920291b5d5af948b3875b76a5b30f26e5715cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a720619f3483b15f235b5094920291b5d5af948b3875b76a5b30f26e5715cd->enter($__internal_16a720619f3483b15f235b5094920291b5d5af948b3875b76a5b30f26e5715cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_141f2fd397163ed86a08c8d7563277f6ddb7e331e569e32829b81a59552c24cb->leave($__internal_141f2fd397163ed86a08c8d7563277f6ddb7e331e569e32829b81a59552c24cb_prof);

        
        $__internal_16a720619f3483b15f235b5094920291b5d5af948b3875b76a5b30f26e5715cd->leave($__internal_16a720619f3483b15f235b5094920291b5d5af948b3875b76a5b30f26e5715cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
