<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_eb26deccd428a4b2e5b7c1a86234bcb3dbcc79ac7da7fa4f478fbb4e66e94628 extends Twig_Template
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
        $__internal_24a1bb4f33fa18230d303ac98906be26a3531d51b9585630924f02cd8ce44600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a1bb4f33fa18230d303ac98906be26a3531d51b9585630924f02cd8ce44600->enter($__internal_24a1bb4f33fa18230d303ac98906be26a3531d51b9585630924f02cd8ce44600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2b9ab136b714d4ca85505724c2ae83b49d6e129901413c3ff504d0d3aa76164c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9ab136b714d4ca85505724c2ae83b49d6e129901413c3ff504d0d3aa76164c->enter($__internal_2b9ab136b714d4ca85505724c2ae83b49d6e129901413c3ff504d0d3aa76164c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_24a1bb4f33fa18230d303ac98906be26a3531d51b9585630924f02cd8ce44600->leave($__internal_24a1bb4f33fa18230d303ac98906be26a3531d51b9585630924f02cd8ce44600_prof);

        
        $__internal_2b9ab136b714d4ca85505724c2ae83b49d6e129901413c3ff504d0d3aa76164c->leave($__internal_2b9ab136b714d4ca85505724c2ae83b49d6e129901413c3ff504d0d3aa76164c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
