<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_193aef89f41c29e8ef705dac93c503e9f55c01971b30259f6a2f21cba3a95424 extends Twig_Template
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
        $__internal_39b008e4867f2a3614b19b3c47b85346d7e7567e8224408cd315a03697e014c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b008e4867f2a3614b19b3c47b85346d7e7567e8224408cd315a03697e014c4->enter($__internal_39b008e4867f2a3614b19b3c47b85346d7e7567e8224408cd315a03697e014c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_3ba49c61abc9a06e0c085a1232a8e6939e6d2984b6d48333282e859b2914b5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba49c61abc9a06e0c085a1232a8e6939e6d2984b6d48333282e859b2914b5b2->enter($__internal_3ba49c61abc9a06e0c085a1232a8e6939e6d2984b6d48333282e859b2914b5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_39b008e4867f2a3614b19b3c47b85346d7e7567e8224408cd315a03697e014c4->leave($__internal_39b008e4867f2a3614b19b3c47b85346d7e7567e8224408cd315a03697e014c4_prof);

        
        $__internal_3ba49c61abc9a06e0c085a1232a8e6939e6d2984b6d48333282e859b2914b5b2->leave($__internal_3ba49c61abc9a06e0c085a1232a8e6939e6d2984b6d48333282e859b2914b5b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
