<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7d064feed5b2e5da3b3d962d48caa4e5f4b958f41672126809a1dfdfd02fd5df extends Twig_Template
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
        $__internal_b18300a75e7c95be92cef28ba5205ec556891fa8ebb893631a04767e46418824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b18300a75e7c95be92cef28ba5205ec556891fa8ebb893631a04767e46418824->enter($__internal_b18300a75e7c95be92cef28ba5205ec556891fa8ebb893631a04767e46418824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_0c4fca68de1e58717e61a241b57441f9366d4e7eb49619db98931531449e397c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4fca68de1e58717e61a241b57441f9366d4e7eb49619db98931531449e397c->enter($__internal_0c4fca68de1e58717e61a241b57441f9366d4e7eb49619db98931531449e397c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b18300a75e7c95be92cef28ba5205ec556891fa8ebb893631a04767e46418824->leave($__internal_b18300a75e7c95be92cef28ba5205ec556891fa8ebb893631a04767e46418824_prof);

        
        $__internal_0c4fca68de1e58717e61a241b57441f9366d4e7eb49619db98931531449e397c->leave($__internal_0c4fca68de1e58717e61a241b57441f9366d4e7eb49619db98931531449e397c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
