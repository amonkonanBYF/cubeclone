<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c08bf877778582fdec794b9caa80fc0cc782285edc446736100a530820b35de1 extends Twig_Template
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
        $__internal_51416c376cc70b8848b6a84f6d76a728e51ed32a31b0336266786193754d6313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51416c376cc70b8848b6a84f6d76a728e51ed32a31b0336266786193754d6313->enter($__internal_51416c376cc70b8848b6a84f6d76a728e51ed32a31b0336266786193754d6313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_580632422af0b51c978159116dd46262d8e5b4043fc63472d26578a68a64c2e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580632422af0b51c978159116dd46262d8e5b4043fc63472d26578a68a64c2e6->enter($__internal_580632422af0b51c978159116dd46262d8e5b4043fc63472d26578a68a64c2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_51416c376cc70b8848b6a84f6d76a728e51ed32a31b0336266786193754d6313->leave($__internal_51416c376cc70b8848b6a84f6d76a728e51ed32a31b0336266786193754d6313_prof);

        
        $__internal_580632422af0b51c978159116dd46262d8e5b4043fc63472d26578a68a64c2e6->leave($__internal_580632422af0b51c978159116dd46262d8e5b4043fc63472d26578a68a64c2e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
