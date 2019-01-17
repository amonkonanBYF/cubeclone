<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_71c2e4e735264b42666f2c123bb1ee121d1d6f96b9a1c3d6cacb56c0d5ea7820 extends Twig_Template
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
        $__internal_d0e0314d172307f2e5de43e1d86dab391280c965789ffe1778986805bdb60bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e0314d172307f2e5de43e1d86dab391280c965789ffe1778986805bdb60bc2->enter($__internal_d0e0314d172307f2e5de43e1d86dab391280c965789ffe1778986805bdb60bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_52741ec279a27925a6c8d864bcf0acc7c3e03f91ab0a37a049c2ab740b5a5768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52741ec279a27925a6c8d864bcf0acc7c3e03f91ab0a37a049c2ab740b5a5768->enter($__internal_52741ec279a27925a6c8d864bcf0acc7c3e03f91ab0a37a049c2ab740b5a5768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d0e0314d172307f2e5de43e1d86dab391280c965789ffe1778986805bdb60bc2->leave($__internal_d0e0314d172307f2e5de43e1d86dab391280c965789ffe1778986805bdb60bc2_prof);

        
        $__internal_52741ec279a27925a6c8d864bcf0acc7c3e03f91ab0a37a049c2ab740b5a5768->leave($__internal_52741ec279a27925a6c8d864bcf0acc7c3e03f91ab0a37a049c2ab740b5a5768_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
