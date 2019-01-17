<?php

/* :missions:item.html.twig */
class __TwigTemplate_bbc58838a57abbd636044da57e07a56cbaa6451f3191534eca642d7aeb534f52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("missions/baseMissionTemplate.html.twig", ":missions:item.html.twig", 1);
        $this->blocks = array(
            'nbrMissions' => array($this, 'block_nbrMissions'),
            'missions' => array($this, 'block_missions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "missions/baseMissionTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8905173c6258d1f08a342d2905ca68cdabec9e13da79968339b51572db141869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8905173c6258d1f08a342d2905ca68cdabec9e13da79968339b51572db141869->enter($__internal_8905173c6258d1f08a342d2905ca68cdabec9e13da79968339b51572db141869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":missions:item.html.twig"));

        $__internal_01cf2b19127352fecf031fcaf9096b77232ce25750e27cfb54a69c13bc6d9427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01cf2b19127352fecf031fcaf9096b77232ce25750e27cfb54a69c13bc6d9427->enter($__internal_01cf2b19127352fecf031fcaf9096b77232ce25750e27cfb54a69c13bc6d9427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":missions:item.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8905173c6258d1f08a342d2905ca68cdabec9e13da79968339b51572db141869->leave($__internal_8905173c6258d1f08a342d2905ca68cdabec9e13da79968339b51572db141869_prof);

        
        $__internal_01cf2b19127352fecf031fcaf9096b77232ce25750e27cfb54a69c13bc6d9427->leave($__internal_01cf2b19127352fecf031fcaf9096b77232ce25750e27cfb54a69c13bc6d9427_prof);

    }

    // line 2
    public function block_nbrMissions($context, array $blocks = array())
    {
        $__internal_a7be6a0844782eb9ccbb6be4229a679ef867b5d8544d52a6e7674590123152e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7be6a0844782eb9ccbb6be4229a679ef867b5d8544d52a6e7674590123152e7->enter($__internal_a7be6a0844782eb9ccbb6be4229a679ef867b5d8544d52a6e7674590123152e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nbrMissions"));

        $__internal_6ff511b57630dda3dbcabaf775dfb42a9684d472c774d47426e90089a08b4354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff511b57630dda3dbcabaf775dfb42a9684d472c774d47426e90089a08b4354->enter($__internal_6ff511b57630dda3dbcabaf775dfb42a9684d472c774d47426e90089a08b4354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nbrMissions"));

        // line 3
        echo "
<header class=\"major\">
  <h2>
    <strong>
        <h1>
        ";
        // line 8
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["missions"] ?? $this->getContext($context, "missions"))), "html", null, true);
        echo " MISSIONS
        </h1>
    </strong>
    </h2>
</header>
 ";
        
        $__internal_6ff511b57630dda3dbcabaf775dfb42a9684d472c774d47426e90089a08b4354->leave($__internal_6ff511b57630dda3dbcabaf775dfb42a9684d472c774d47426e90089a08b4354_prof);

        
        $__internal_a7be6a0844782eb9ccbb6be4229a679ef867b5d8544d52a6e7674590123152e7->leave($__internal_a7be6a0844782eb9ccbb6be4229a679ef867b5d8544d52a6e7674590123152e7_prof);

    }

    // line 14
    public function block_missions($context, array $blocks = array())
    {
        $__internal_b0eefa5d36e427382780d65a630e3ebcaf1002aa859cae5ff5fb935112572d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0eefa5d36e427382780d65a630e3ebcaf1002aa859cae5ff5fb935112572d87->enter($__internal_b0eefa5d36e427382780d65a630e3ebcaf1002aa859cae5ff5fb935112572d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missions"));

        $__internal_0ece37e20c143fe9eebd0c0b4f8bcea74d6359fc801fc5991e0e45be20ffba00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ece37e20c143fe9eebd0c0b4f8bcea74d6359fc801fc5991e0e45be20ffba00->enter($__internal_0ece37e20c143fe9eebd0c0b4f8bcea74d6359fc801fc5991e0e45be20ffba00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missions"));

        // line 15
        echo "




          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["missions"]);
        foreach ($context['_seq'] as $context["_key"] => $context["missions"]) {
            // line 21
            echo " <div class=\"4u 12u(mobile)\">
    <section class=\"box\">
         <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mission_path", array("id" => $this->getAttribute($context["missions"], "missionId", array()))), "html", null, true);
            echo "\" class=\"image featured\"><img src=\"images/pic02.jpg\" alt=\"\" /></a>

           <header>
                <h3><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mission_path", array("id" => $this->getAttribute($context["missions"], "missionId", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["missions"], "title", array()), "html", null, true);
            echo "</a></h3>
            </header>
            <strong>Description:</strong><p>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["missions"], "description", array()), "html", null, true);
            echo "</p>


           <li><strong>Date:</strong>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["missions"], "dateAs", array())), "html", null, true);
            echo "</li>


           <li>
           <strong>Domain d'activité:</strong>
           ";
            // line 36
            if (($this->getAttribute($context["missions"], "activity", array()) == null)) {
                // line 37
                echo "           domaine inconnu
           ";
            } else {
                // line 39
                echo "           ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["missions"], "activity", array()), "html", null, true);
                echo "
           </li>
           ";
            }
            // line 42
            echo "           <li>
           <strong>Entreprise :</strong>
           ";
            // line 44
            if (($this->getAttribute($context["missions"], "business", array()) == null)) {
                // line 45
                echo "           inconnu
           ";
            } else {
                // line 47
                echo "           ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["missions"], "business", array()), "html", null, true);
                echo "
           </li>
           ";
            }
            // line 50
            echo "           <li>
           <strong>Price:</strong>
           ";
            // line 52
            if (($this->getAttribute($context["missions"], "price", array()) == 0)) {
                // line 53
                echo "           free
           ";
            } else {
                // line 55
                echo "           ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["missions"], "price", array()), "html", null, true);
                echo "
           </li>
           ";
            }
            // line 58
            echo "
         </ul>

                <footer>
                <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mission_path", array("id" => $this->getAttribute($context["missions"], "missionId", array()))), "html", null, true);
            echo "\" class=\"button alt\"> + Détails</a>
                </footer>
            </section>
        </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['missions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
      ";
        
        $__internal_0ece37e20c143fe9eebd0c0b4f8bcea74d6359fc801fc5991e0e45be20ffba00->leave($__internal_0ece37e20c143fe9eebd0c0b4f8bcea74d6359fc801fc5991e0e45be20ffba00_prof);

        
        $__internal_b0eefa5d36e427382780d65a630e3ebcaf1002aa859cae5ff5fb935112572d87->leave($__internal_b0eefa5d36e427382780d65a630e3ebcaf1002aa859cae5ff5fb935112572d87_prof);

    }

    public function getTemplateName()
    {
        return ":missions:item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 67,  177 => 62,  171 => 58,  164 => 55,  160 => 53,  158 => 52,  154 => 50,  147 => 47,  143 => 45,  141 => 44,  137 => 42,  130 => 39,  126 => 37,  124 => 36,  116 => 31,  110 => 28,  103 => 26,  97 => 23,  93 => 21,  89 => 20,  82 => 15,  73 => 14,  57 => 8,  50 => 3,  41 => 2,  11 => 1,);
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

<header class=\"major\">
  <h2>
    <strong>
        <h1>
        {{ missions | length }} MISSIONS
        </h1>
    </strong>
    </h2>
</header>
 {% endblock %}
{% block missions %}





          {% for missions in missions %}
 <div class=\"4u 12u(mobile)\">
    <section class=\"box\">
         <a href=\"{{ path('mission_path', {'id' : missions.missionId}) }}\" class=\"image featured\"><img src=\"images/pic02.jpg\" alt=\"\" /></a>

           <header>
                <h3><a href=\"{{ path('mission_path', {'id' : missions.missionId}) }}\"> {{missions.title }}</a></h3>
            </header>
            <strong>Description:</strong><p>{{missions.description}}</p>


           <li><strong>Date:</strong>{{missions.dateAs | date()}}</li>


           <li>
           <strong>Domain d'activité:</strong>
           {%if missions.activity == null %}
           domaine inconnu
           {% else %}
           {{missions.activity}}
           </li>
           {% endif %}
           <li>
           <strong>Entreprise :</strong>
           {%if missions.business == null %}
           inconnu
           {% else %}
           {{missions.business}}
           </li>
           {% endif %}
           <li>
           <strong>Price:</strong>
           {% if missions.price == 0 %}
           free
           {% else %}
           {{missions.price}}
           </li>
           {% endif %}

         </ul>

                <footer>
                <a href=\"{{ path('mission_path', {'id' : missions.missionId}) }}\" class=\"button alt\"> + Détails</a>
                </footer>
            </section>
        </div>
         {% endfor %}

      {% endblock %}



", ":missions:item.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources\\views/missions/item.html.twig");
    }
}
