<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_276df2873d3e3e445a70600a6e2e89765a4ecc24d46617fb964713a995768832 extends Twig_Template
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
        $__internal_752b88f964c77ffb593c2bf487e0556936345943a3533d89519d0f585711d19f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_752b88f964c77ffb593c2bf487e0556936345943a3533d89519d0f585711d19f->enter($__internal_752b88f964c77ffb593c2bf487e0556936345943a3533d89519d0f585711d19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c8162ca35876642f0846806a4cdbb8a992343a0b90771b4e774bddefc5d7a0f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8162ca35876642f0846806a4cdbb8a992343a0b90771b4e774bddefc5d7a0f4->enter($__internal_c8162ca35876642f0846806a4cdbb8a992343a0b90771b4e774bddefc5d7a0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_752b88f964c77ffb593c2bf487e0556936345943a3533d89519d0f585711d19f->leave($__internal_752b88f964c77ffb593c2bf487e0556936345943a3533d89519d0f585711d19f_prof);

        
        $__internal_c8162ca35876642f0846806a4cdbb8a992343a0b90771b4e774bddefc5d7a0f4->leave($__internal_c8162ca35876642f0846806a4cdbb8a992343a0b90771b4e774bddefc5d7a0f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
