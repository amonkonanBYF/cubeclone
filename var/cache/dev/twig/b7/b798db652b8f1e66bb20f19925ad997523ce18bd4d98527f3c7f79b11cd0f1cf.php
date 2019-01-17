<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5c9dbe3370d72c0c6eda1db246b63a326260d88c4c3a3efb2bfe94b379894552 extends Twig_Template
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
        $__internal_96311c0006731b860b1c0f3c0637979ece459fafc20ff905871ea60156586aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96311c0006731b860b1c0f3c0637979ece459fafc20ff905871ea60156586aad->enter($__internal_96311c0006731b860b1c0f3c0637979ece459fafc20ff905871ea60156586aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0b6c2ece117f7b701ffcd1102f56d5604d4a7d8fadf732de9868195a4c689e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6c2ece117f7b701ffcd1102f56d5604d4a7d8fadf732de9868195a4c689e10->enter($__internal_0b6c2ece117f7b701ffcd1102f56d5604d4a7d8fadf732de9868195a4c689e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_96311c0006731b860b1c0f3c0637979ece459fafc20ff905871ea60156586aad->leave($__internal_96311c0006731b860b1c0f3c0637979ece459fafc20ff905871ea60156586aad_prof);

        
        $__internal_0b6c2ece117f7b701ffcd1102f56d5604d4a7d8fadf732de9868195a4c689e10->leave($__internal_0b6c2ece117f7b701ffcd1102f56d5604d4a7d8fadf732de9868195a4c689e10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
