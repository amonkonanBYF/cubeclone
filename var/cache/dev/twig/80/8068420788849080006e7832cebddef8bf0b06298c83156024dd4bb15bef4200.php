<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c3e618d2514d3486c3a0a566f2436c6b5e37b33bfeda0f768f43b15318c35872 extends Twig_Template
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
        $__internal_1e1cdf07cadbff398a7ea3c1656cf00b3ce5bc12d878988d945cb31c2a089483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e1cdf07cadbff398a7ea3c1656cf00b3ce5bc12d878988d945cb31c2a089483->enter($__internal_1e1cdf07cadbff398a7ea3c1656cf00b3ce5bc12d878988d945cb31c2a089483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_1d10166ebe8e361f27872363cf602b62c22fe674e97ac0b09e9907c5afc06d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d10166ebe8e361f27872363cf602b62c22fe674e97ac0b09e9907c5afc06d82->enter($__internal_1d10166ebe8e361f27872363cf602b62c22fe674e97ac0b09e9907c5afc06d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1e1cdf07cadbff398a7ea3c1656cf00b3ce5bc12d878988d945cb31c2a089483->leave($__internal_1e1cdf07cadbff398a7ea3c1656cf00b3ce5bc12d878988d945cb31c2a089483_prof);

        
        $__internal_1d10166ebe8e361f27872363cf602b62c22fe674e97ac0b09e9907c5afc06d82->leave($__internal_1d10166ebe8e361f27872363cf602b62c22fe674e97ac0b09e9907c5afc06d82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
