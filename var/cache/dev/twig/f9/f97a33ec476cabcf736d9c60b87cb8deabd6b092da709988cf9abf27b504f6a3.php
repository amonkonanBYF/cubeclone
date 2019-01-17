<?php

/* :missions:addMission.html.twig */
class __TwigTemplate_819400dad8785e88cd8bb81fa63a8b3ddd07d45409071528fdd650bf5d1e03e3 extends Twig_Template
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
        $__internal_c5e4b58f154664926593bca6fedc66541fcad7016a535ddc73c09887157c4d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e4b58f154664926593bca6fedc66541fcad7016a535ddc73c09887157c4d77->enter($__internal_c5e4b58f154664926593bca6fedc66541fcad7016a535ddc73c09887157c4d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":missions:addMission.html.twig"));

        $__internal_a04527a5f3882575324e468b4a97fb151c4cfa935bbe9e81c93e6803f70fb697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04527a5f3882575324e468b4a97fb151c4cfa935bbe9e81c93e6803f70fb697->enter($__internal_a04527a5f3882575324e468b4a97fb151c4cfa935bbe9e81c93e6803f70fb697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":missions:addMission.html.twig"));

        // line 1
        echo "<body>
<h3>Formulaire de mission</h3>
<h4>Ajouter une mission</h4>

";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "


  <div>
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

  </div>







";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

</body>
";
        
        $__internal_c5e4b58f154664926593bca6fedc66541fcad7016a535ddc73c09887157c4d77->leave($__internal_c5e4b58f154664926593bca6fedc66541fcad7016a535ddc73c09887157c4d77_prof);

        
        $__internal_a04527a5f3882575324e468b4a97fb151c4cfa935bbe9e81c93e6803f70fb697->leave($__internal_a04527a5f3882575324e468b4a97fb151c4cfa935bbe9e81c93e6803f70fb697_prof);

    }

    public function getTemplateName()
    {
        return ":missions:addMission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 22,  50 => 12,  46 => 11,  42 => 10,  35 => 6,  31 => 5,  25 => 1,);
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
<h3>Formulaire de mission</h3>
<h4>Ajouter une mission</h4>

{{ form_start(form) }}
  {{form_errors(form)}}


  <div>
    {{ form_label(form) }}
    {{ form_widget(form) }}
    {{ form_errors(form) }}

  </div>







{{ form_end(form) }}

</body>
", ":missions:addMission.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources\\views/missions/addMission.html.twig");
    }
}
