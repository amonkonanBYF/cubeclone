<?php

/* :users:registration.html.twig */
class __TwigTemplate_0bc5cc8508734d6c064780681e2a207f2d6b47162097bd4da922b3c69d5146e2 extends Twig_Template
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
        $__internal_116bbae8bf8dcf007acbaeed620521d68a668c046c1ea3ef96cdc7fd05350fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116bbae8bf8dcf007acbaeed620521d68a668c046c1ea3ef96cdc7fd05350fb7->enter($__internal_116bbae8bf8dcf007acbaeed620521d68a668c046c1ea3ef96cdc7fd05350fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:registration.html.twig"));

        $__internal_b388e7652c1358390ad2f4b38ca337342f10471daa3803dd5aea7e5512f6e359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b388e7652c1358390ad2f4b38ca337342f10471daa3803dd5aea7e5512f6e359->enter($__internal_b388e7652c1358390ad2f4b38ca337342f10471daa3803dd5aea7e5512f6e359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:registration.html.twig"));

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
        
        $__internal_116bbae8bf8dcf007acbaeed620521d68a668c046c1ea3ef96cdc7fd05350fb7->leave($__internal_116bbae8bf8dcf007acbaeed620521d68a668c046c1ea3ef96cdc7fd05350fb7_prof);

        
        $__internal_b388e7652c1358390ad2f4b38ca337342f10471daa3803dd5aea7e5512f6e359->leave($__internal_b388e7652c1358390ad2f4b38ca337342f10471daa3803dd5aea7e5512f6e359_prof);

    }

    public function getTemplateName()
    {
        return ":users:registration.html.twig";
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
", ":users:registration.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources\\views/users/registration.html.twig");
    }
}
