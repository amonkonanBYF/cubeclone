<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5be44fa5309bb4e94ecc22454556e1cd38606561dd24f6d3e435f8c65c03acfe extends Twig_Template
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
        $__internal_4a91dde461d52a0c41e51853964ff374c15779e4d41e49688ca8d917d7363c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a91dde461d52a0c41e51853964ff374c15779e4d41e49688ca8d917d7363c63->enter($__internal_4a91dde461d52a0c41e51853964ff374c15779e4d41e49688ca8d917d7363c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_5428fec66e0a77a4aacadce1df82691fa44cc328c6106a1ec36e410332fc1aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5428fec66e0a77a4aacadce1df82691fa44cc328c6106a1ec36e410332fc1aaf->enter($__internal_5428fec66e0a77a4aacadce1df82691fa44cc328c6106a1ec36e410332fc1aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4a91dde461d52a0c41e51853964ff374c15779e4d41e49688ca8d917d7363c63->leave($__internal_4a91dde461d52a0c41e51853964ff374c15779e4d41e49688ca8d917d7363c63_prof);

        
        $__internal_5428fec66e0a77a4aacadce1df82691fa44cc328c6106a1ec36e410332fc1aaf->leave($__internal_5428fec66e0a77a4aacadce1df82691fa44cc328c6106a1ec36e410332fc1aaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
