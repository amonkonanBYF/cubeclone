<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b13c5fd5e268baf11eca79c21c26445ceb9044a0f0a435becd77c38a81ba844c extends Twig_Template
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
        $__internal_9fa83409b899e9b29882ecd2d5bfe94c84c2fd3d8dd9313048b744b5fc5e9aa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa83409b899e9b29882ecd2d5bfe94c84c2fd3d8dd9313048b744b5fc5e9aa7->enter($__internal_9fa83409b899e9b29882ecd2d5bfe94c84c2fd3d8dd9313048b744b5fc5e9aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_bcc84e62e987911f79a6f58f52f285ba2e597b38797ad2884efa790d29c0ae2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc84e62e987911f79a6f58f52f285ba2e597b38797ad2884efa790d29c0ae2d->enter($__internal_bcc84e62e987911f79a6f58f52f285ba2e597b38797ad2884efa790d29c0ae2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9fa83409b899e9b29882ecd2d5bfe94c84c2fd3d8dd9313048b744b5fc5e9aa7->leave($__internal_9fa83409b899e9b29882ecd2d5bfe94c84c2fd3d8dd9313048b744b5fc5e9aa7_prof);

        
        $__internal_bcc84e62e987911f79a6f58f52f285ba2e597b38797ad2884efa790d29c0ae2d->leave($__internal_bcc84e62e987911f79a6f58f52f285ba2e597b38797ad2884efa790d29c0ae2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
