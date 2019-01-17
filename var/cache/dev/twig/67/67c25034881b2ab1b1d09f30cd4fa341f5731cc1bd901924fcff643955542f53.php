<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_9b39bd38d864ded649e3f6e25a41391e5e04cc702cce15f0bb32ee558430cd64 extends Twig_Template
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
        $__internal_335f62ef4f06baa249ca144f73e58a728c8028a8e517d0abc135b86e077ba69a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_335f62ef4f06baa249ca144f73e58a728c8028a8e517d0abc135b86e077ba69a->enter($__internal_335f62ef4f06baa249ca144f73e58a728c8028a8e517d0abc135b86e077ba69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_8c35bc8f9aa137d80efa226505fa1292bace2362a4d557d0bd41d505dbc41b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c35bc8f9aa137d80efa226505fa1292bace2362a4d557d0bd41d505dbc41b45->enter($__internal_8c35bc8f9aa137d80efa226505fa1292bace2362a4d557d0bd41d505dbc41b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_335f62ef4f06baa249ca144f73e58a728c8028a8e517d0abc135b86e077ba69a->leave($__internal_335f62ef4f06baa249ca144f73e58a728c8028a8e517d0abc135b86e077ba69a_prof);

        
        $__internal_8c35bc8f9aa137d80efa226505fa1292bace2362a4d557d0bd41d505dbc41b45->leave($__internal_8c35bc8f9aa137d80efa226505fa1292bace2362a4d557d0bd41d505dbc41b45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
