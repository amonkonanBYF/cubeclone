<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5a3aafe480d68cbaaea1209d15a1bb8e79c8a05cf42395e6d6956707043cfc66 extends Twig_Template
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
        $__internal_f88548407f8ce0b5a9a7d8b2047ac79f950f7dbfcb93f6d6beec399e2892b6d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f88548407f8ce0b5a9a7d8b2047ac79f950f7dbfcb93f6d6beec399e2892b6d9->enter($__internal_f88548407f8ce0b5a9a7d8b2047ac79f950f7dbfcb93f6d6beec399e2892b6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_db91d95602c19dc2e4f46634a554891fbd44a630abf2e52da6e351f1a3056823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db91d95602c19dc2e4f46634a554891fbd44a630abf2e52da6e351f1a3056823->enter($__internal_db91d95602c19dc2e4f46634a554891fbd44a630abf2e52da6e351f1a3056823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f88548407f8ce0b5a9a7d8b2047ac79f950f7dbfcb93f6d6beec399e2892b6d9->leave($__internal_f88548407f8ce0b5a9a7d8b2047ac79f950f7dbfcb93f6d6beec399e2892b6d9_prof);

        
        $__internal_db91d95602c19dc2e4f46634a554891fbd44a630abf2e52da6e351f1a3056823->leave($__internal_db91d95602c19dc2e4f46634a554891fbd44a630abf2e52da6e351f1a3056823_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
