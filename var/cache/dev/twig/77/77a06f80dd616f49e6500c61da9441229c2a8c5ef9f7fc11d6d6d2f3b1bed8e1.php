<?php

/* missions/addMission.html.twig */
class __TwigTemplate_43dcd14312abdbb5241a7df18193d76ac4810678d574ead6344b058e0e0f5eae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAddMissionAdmin.html.twig", "missions/addMission.html.twig", 1);
        $this->blocks = array(
            'addMission' => array($this, 'block_addMission'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseAddMissionAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_274acd6a02dd81dd62f88ce24623ff51ad873bd52836a072fe869d3baaf0f61a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274acd6a02dd81dd62f88ce24623ff51ad873bd52836a072fe869d3baaf0f61a->enter($__internal_274acd6a02dd81dd62f88ce24623ff51ad873bd52836a072fe869d3baaf0f61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "missions/addMission.html.twig"));

        $__internal_2a6e982d80e22bd2868253eb901f459f4a05623675d4ea63bb82886705e2e74c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6e982d80e22bd2868253eb901f459f4a05623675d4ea63bb82886705e2e74c->enter($__internal_2a6e982d80e22bd2868253eb901f459f4a05623675d4ea63bb82886705e2e74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "missions/addMission.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_274acd6a02dd81dd62f88ce24623ff51ad873bd52836a072fe869d3baaf0f61a->leave($__internal_274acd6a02dd81dd62f88ce24623ff51ad873bd52836a072fe869d3baaf0f61a_prof);

        
        $__internal_2a6e982d80e22bd2868253eb901f459f4a05623675d4ea63bb82886705e2e74c->leave($__internal_2a6e982d80e22bd2868253eb901f459f4a05623675d4ea63bb82886705e2e74c_prof);

    }

    // line 3
    public function block_addMission($context, array $blocks = array())
    {
        $__internal_101ff2bd3cefbf43a752cd28375f77180352fb29e23fbef4c81298e07ff49ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101ff2bd3cefbf43a752cd28375f77180352fb29e23fbef4c81298e07ff49ad5->enter($__internal_101ff2bd3cefbf43a752cd28375f77180352fb29e23fbef4c81298e07ff49ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addMission"));

        $__internal_cdaf7cf8499ab715a33b88cc2f3b966f44c28ef08e6a8290288bfede1360d30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdaf7cf8499ab715a33b88cc2f3b966f44c28ef08e6a8290288bfede1360d30e->enter($__internal_cdaf7cf8499ab715a33b88cc2f3b966f44c28ef08e6a8290288bfede1360d30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addMission"));

        // line 4
        echo "<body>
<section class=\"form-admin-add\">
<h3>Formulaire de mission</h3>
<h4>Ajouter une mission</h4>

";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "


  <div>
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

  </div>







";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

</body>
</section>

";
        
        $__internal_cdaf7cf8499ab715a33b88cc2f3b966f44c28ef08e6a8290288bfede1360d30e->leave($__internal_cdaf7cf8499ab715a33b88cc2f3b966f44c28ef08e6a8290288bfede1360d30e_prof);

        
        $__internal_101ff2bd3cefbf43a752cd28375f77180352fb29e23fbef4c81298e07ff49ad5->leave($__internal_101ff2bd3cefbf43a752cd28375f77180352fb29e23fbef4c81298e07ff49ad5_prof);

    }

    public function getTemplateName()
    {
        return "missions/addMission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  75 => 16,  71 => 15,  67 => 14,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends 'baseAddMissionAdmin.html.twig'%}

{%block addMission%}
<body>
<section class=\"form-admin-add\">
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
</section>

{% endblock %}
", "missions/addMission.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\views\\missions\\addMission.html.twig");
    }
}
