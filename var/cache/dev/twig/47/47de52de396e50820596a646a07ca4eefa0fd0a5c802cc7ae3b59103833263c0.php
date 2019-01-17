<?php

/* :missions:show.html.twig */
class __TwigTemplate_328451325b26c1b7ad4c0310c3f6460e630b380d0eb3358b9132613f88de6d5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("missions/baseMissionTemplate.html.twig", ":missions:show.html.twig", 1);
        $this->blocks = array(
            'nbrMissions' => array($this, 'block_nbrMissions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "missions/baseMissionTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e70591586ba740f3a56546d765722ec37a393c5f67c0162fc667dc5f6bfabeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e70591586ba740f3a56546d765722ec37a393c5f67c0162fc667dc5f6bfabeb->enter($__internal_3e70591586ba740f3a56546d765722ec37a393c5f67c0162fc667dc5f6bfabeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":missions:show.html.twig"));

        $__internal_fd48a17ffdd8f1c165b8641cc80c65ce57414a49fb691b1d1c48bea04da0d6e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd48a17ffdd8f1c165b8641cc80c65ce57414a49fb691b1d1c48bea04da0d6e6->enter($__internal_fd48a17ffdd8f1c165b8641cc80c65ce57414a49fb691b1d1c48bea04da0d6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":missions:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e70591586ba740f3a56546d765722ec37a393c5f67c0162fc667dc5f6bfabeb->leave($__internal_3e70591586ba740f3a56546d765722ec37a393c5f67c0162fc667dc5f6bfabeb_prof);

        
        $__internal_fd48a17ffdd8f1c165b8641cc80c65ce57414a49fb691b1d1c48bea04da0d6e6->leave($__internal_fd48a17ffdd8f1c165b8641cc80c65ce57414a49fb691b1d1c48bea04da0d6e6_prof);

    }

    // line 2
    public function block_nbrMissions($context, array $blocks = array())
    {
        $__internal_42b4bf76e806a63aeeab9302735a23eb79b6fa8007444886a3b6df1bbb8aaac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b4bf76e806a63aeeab9302735a23eb79b6fa8007444886a3b6df1bbb8aaac7->enter($__internal_42b4bf76e806a63aeeab9302735a23eb79b6fa8007444886a3b6df1bbb8aaac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nbrMissions"));

        $__internal_c13cdbb0c759ec4f8717fc2c8ae824bb1f8f3417d75680da295dc5ce8bb6f4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13cdbb0c759ec4f8717fc2c8ae824bb1f8f3417d75680da295dc5ce8bb6f4c5->enter($__internal_c13cdbb0c759ec4f8717fc2c8ae824bb1f8f3417d75680da295dc5ce8bb6f4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nbrMissions"));

        // line 3
        echo "
<body>

<article>
  <header>
    <h1>
      <strong>
      ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mission"] ?? $this->getContext($context, "mission")), "title", array()), "html", null, true);
        echo "
      </strong>
    </h1>
  </header>
<a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("missions_path");
        echo "\">&larr; Liste des missions</a>
<p> <strong>présentation : </strong> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mission"] ?? $this->getContext($context, "mission")), "contenu", array()), "html", null, true);
        echo "</p>

<ul>
  <li>
    <strong> date:</strong>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["mission"] ?? $this->getContext($context, "mission")), "dateAs", array())), "html", null, true);
        echo "
  </li>
  <li>
    <strong> Activité: </strong>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mission"] ?? $this->getContext($context, "mission")), "activity", array()), "html", null, true);
        echo "
  </li>
  <li>
    <strong>Price:</strong>
        ";
        // line 26
        if (($this->getAttribute(($context["mission"] ?? $this->getContext($context, "mission")), "price", array()) == 0)) {
            // line 27
            echo "           free
        ";
        } else {
            // line 29
            echo "           ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["mission"] ?? $this->getContext($context, "mission")), "price", array()), "html", null, true);
            echo "
        ";
        }
        // line 31
        echo "  </li>

<input type=\"submit\" name=\"done\">

</ul>
<a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("missions_path");
        echo "\">&larr; Liste des missions</a>
</article>

</body>
";
        
        $__internal_c13cdbb0c759ec4f8717fc2c8ae824bb1f8f3417d75680da295dc5ce8bb6f4c5->leave($__internal_c13cdbb0c759ec4f8717fc2c8ae824bb1f8f3417d75680da295dc5ce8bb6f4c5_prof);

        
        $__internal_42b4bf76e806a63aeeab9302735a23eb79b6fa8007444886a3b6df1bbb8aaac7->leave($__internal_42b4bf76e806a63aeeab9302735a23eb79b6fa8007444886a3b6df1bbb8aaac7_prof);

    }

    public function getTemplateName()
    {
        return ":missions:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 36,  101 => 31,  95 => 29,  91 => 27,  89 => 26,  82 => 22,  76 => 19,  69 => 15,  65 => 14,  58 => 10,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends 'missions/baseMissionTemplate.html.twig' %}
{% block nbrMissions %}

<body>

<article>
  <header>
    <h1>
      <strong>
      {{mission.title}}
      </strong>
    </h1>
  </header>
<a href=\"{{path('missions_path')}}\">&larr; Liste des missions</a>
<p> <strong>présentation : </strong> {{mission.contenu}}</p>

<ul>
  <li>
    <strong> date:</strong>{{mission.dateAs | date()}}
  </li>
  <li>
    <strong> Activité: </strong>{{mission.activity}}
  </li>
  <li>
    <strong>Price:</strong>
        {% if mission.price == 0 %}
           free
        {% else %}
           {{mission.price}}
        {% endif %}
  </li>

<input type=\"submit\" name=\"done\">

</ul>
<a href=\"{{path('missions_path')}}\">&larr; Liste des missions</a>
</article>

</body>
{% endblock %}
", ":missions:show.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources\\views/missions/show.html.twig");
    }
}
