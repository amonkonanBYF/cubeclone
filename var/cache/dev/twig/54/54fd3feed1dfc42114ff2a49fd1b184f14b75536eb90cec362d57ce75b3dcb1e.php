<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_2f47f195589b6d4aff17698c55cb66b7187363ad3db87d9c34e6c183713bb8ec extends Twig_Template
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
        $__internal_617ac8b9dddd46c141903289e656ea8e64ab0a3245b7ae620eb9db698ab97a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617ac8b9dddd46c141903289e656ea8e64ab0a3245b7ae620eb9db698ab97a75->enter($__internal_617ac8b9dddd46c141903289e656ea8e64ab0a3245b7ae620eb9db698ab97a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a415eb1e0ab3e2224b902ed3030eb59bcf1c46236effb340ee2cb80b9cdd2f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a415eb1e0ab3e2224b902ed3030eb59bcf1c46236effb340ee2cb80b9cdd2f29->enter($__internal_a415eb1e0ab3e2224b902ed3030eb59bcf1c46236effb340ee2cb80b9cdd2f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_617ac8b9dddd46c141903289e656ea8e64ab0a3245b7ae620eb9db698ab97a75->leave($__internal_617ac8b9dddd46c141903289e656ea8e64ab0a3245b7ae620eb9db698ab97a75_prof);

        
        $__internal_a415eb1e0ab3e2224b902ed3030eb59bcf1c46236effb340ee2cb80b9cdd2f29->leave($__internal_a415eb1e0ab3e2224b902ed3030eb59bcf1c46236effb340ee2cb80b9cdd2f29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
