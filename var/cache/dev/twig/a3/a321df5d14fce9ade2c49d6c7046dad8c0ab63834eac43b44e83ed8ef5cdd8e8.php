<?php

/* users/registration.html.twig */
class __TwigTemplate_8e6af96289383f67ab5fb56c8d438266860ae034112d07fcb525cc7bfbab0ea1 extends Twig_Template
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
        $__internal_b4372cb0495b68355162b92ffce094a6264561ed5a6ba14befc446d8fd0fd0ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4372cb0495b68355162b92ffce094a6264561ed5a6ba14befc446d8fd0fd0ce->enter($__internal_b4372cb0495b68355162b92ffce094a6264561ed5a6ba14befc446d8fd0fd0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/registration.html.twig"));

        $__internal_5098ec333f5ffba603cbdf8978495ce816cd7dd1aae31510eb34df5124cfa33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5098ec333f5ffba603cbdf8978495ce816cd7dd1aae31510eb34df5124cfa33a->enter($__internal_5098ec333f5ffba603cbdf8978495ce816cd7dd1aae31510eb34df5124cfa33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/registration.html.twig"));

        // line 1
        echo "<body>
  <h1>Inscription</h1>



";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
<div>
";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
</div>

";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "



</body>
";
        
        $__internal_b4372cb0495b68355162b92ffce094a6264561ed5a6ba14befc446d8fd0fd0ce->leave($__internal_b4372cb0495b68355162b92ffce094a6264561ed5a6ba14befc446d8fd0fd0ce_prof);

        
        $__internal_5098ec333f5ffba603cbdf8978495ce816cd7dd1aae31510eb34df5124cfa33a->leave($__internal_5098ec333f5ffba603cbdf8978495ce816cd7dd1aae31510eb34df5124cfa33a_prof);

    }

    public function getTemplateName()
    {
        return "users/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  37 => 8,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body>
  <h1>Inscription</h1>



{{form_start(form)}}
<div>
{{form_widget(form)}}
</div>

{{form_end(form)}}



</body>
", "users/registration.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\views\\users\\registration.html.twig");
    }
}
