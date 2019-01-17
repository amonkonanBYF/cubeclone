<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a421e51c3422a92adcba8bf9746432ecb7808a9257b34e6708ad143be84f40a7 extends Twig_Template
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
        $__internal_cf6effce5c493136e57e959f645039c24f34d3e9ea1deb6c23adf9d5dfb1b6f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6effce5c493136e57e959f645039c24f34d3e9ea1deb6c23adf9d5dfb1b6f6->enter($__internal_cf6effce5c493136e57e959f645039c24f34d3e9ea1deb6c23adf9d5dfb1b6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_07ad4dc04acd12cc3eaf8ca55d0f33d78e2b65abe8ae9e45236e88ca11099842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ad4dc04acd12cc3eaf8ca55d0f33d78e2b65abe8ae9e45236e88ca11099842->enter($__internal_07ad4dc04acd12cc3eaf8ca55d0f33d78e2b65abe8ae9e45236e88ca11099842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cf6effce5c493136e57e959f645039c24f34d3e9ea1deb6c23adf9d5dfb1b6f6->leave($__internal_cf6effce5c493136e57e959f645039c24f34d3e9ea1deb6c23adf9d5dfb1b6f6_prof);

        
        $__internal_07ad4dc04acd12cc3eaf8ca55d0f33d78e2b65abe8ae9e45236e88ca11099842->leave($__internal_07ad4dc04acd12cc3eaf8ca55d0f33d78e2b65abe8ae9e45236e88ca11099842_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
