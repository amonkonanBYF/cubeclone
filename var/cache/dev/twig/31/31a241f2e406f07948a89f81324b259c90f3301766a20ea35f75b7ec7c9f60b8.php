<?php

/* missions/item.html.twig */
class __TwigTemplate_1f6b674cb131178e3d677a004324c1d58c45e36734f33a150b2e29adb2a5e9e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("missions/baseMissionTemplate.html.twig", "missions/item.html.twig", 1);
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
        $__internal_9977456b8a37a9370c01bc7f4e19ce05816c1d610284d9bad38448fe683252a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9977456b8a37a9370c01bc7f4e19ce05816c1d610284d9bad38448fe683252a6->enter($__internal_9977456b8a37a9370c01bc7f4e19ce05816c1d610284d9bad38448fe683252a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "missions/item.html.twig"));

        $__internal_00236c41b3bcba019dca9c489509814294b9f759a2afab511ae3757b627e7f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00236c41b3bcba019dca9c489509814294b9f759a2afab511ae3757b627e7f21->enter($__internal_00236c41b3bcba019dca9c489509814294b9f759a2afab511ae3757b627e7f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "missions/item.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9977456b8a37a9370c01bc7f4e19ce05816c1d610284d9bad38448fe683252a6->leave($__internal_9977456b8a37a9370c01bc7f4e19ce05816c1d610284d9bad38448fe683252a6_prof);

        
        $__internal_00236c41b3bcba019dca9c489509814294b9f759a2afab511ae3757b627e7f21->leave($__internal_00236c41b3bcba019dca9c489509814294b9f759a2afab511ae3757b627e7f21_prof);

    }

    // line 2
    public function block_nbrMissions($context, array $blocks = array())
    {
        $__internal_eea363e541013432ef7d9ae6b52238eeccc5578195bee303eb6958703e230dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea363e541013432ef7d9ae6b52238eeccc5578195bee303eb6958703e230dad->enter($__internal_eea363e541013432ef7d9ae6b52238eeccc5578195bee303eb6958703e230dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nbrMissions"));

        $__internal_53bbd17ba02bff0dd268a7f115c7758ed7854915e4ed777ad924c36ba83fce08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53bbd17ba02bff0dd268a7f115c7758ed7854915e4ed777ad924c36ba83fce08->enter($__internal_53bbd17ba02bff0dd268a7f115c7758ed7854915e4ed777ad924c36ba83fce08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nbrMissions"));

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
        
        $__internal_53bbd17ba02bff0dd268a7f115c7758ed7854915e4ed777ad924c36ba83fce08->leave($__internal_53bbd17ba02bff0dd268a7f115c7758ed7854915e4ed777ad924c36ba83fce08_prof);

        
        $__internal_eea363e541013432ef7d9ae6b52238eeccc5578195bee303eb6958703e230dad->leave($__internal_eea363e541013432ef7d9ae6b52238eeccc5578195bee303eb6958703e230dad_prof);

    }

    // line 14
    public function block_missions($context, array $blocks = array())
    {
        $__internal_f6bf9e9e38d6b8c8eb77d5be264567c5da85705954dab2393d02efef1f479f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6bf9e9e38d6b8c8eb77d5be264567c5da85705954dab2393d02efef1f479f3a->enter($__internal_f6bf9e9e38d6b8c8eb77d5be264567c5da85705954dab2393d02efef1f479f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missions"));

        $__internal_9ebde07ae96df8b1fc3c14bed4885809667697f5616ec956f41f4a788fef761a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebde07ae96df8b1fc3c14bed4885809667697f5616ec956f41f4a788fef761a->enter($__internal_9ebde07ae96df8b1fc3c14bed4885809667697f5616ec956f41f4a788fef761a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missions"));

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
        
        $__internal_9ebde07ae96df8b1fc3c14bed4885809667697f5616ec956f41f4a788fef761a->leave($__internal_9ebde07ae96df8b1fc3c14bed4885809667697f5616ec956f41f4a788fef761a_prof);

        
        $__internal_f6bf9e9e38d6b8c8eb77d5be264567c5da85705954dab2393d02efef1f479f3a->leave($__internal_f6bf9e9e38d6b8c8eb77d5be264567c5da85705954dab2393d02efef1f479f3a_prof);

    }

    public function getTemplateName()
    {
        return "missions/item.html.twig";
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



", "missions/item.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\views\\missions\\item.html.twig");
    }
}
