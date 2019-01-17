<?php

/* :default:index.html.twig */
class __TwigTemplate_5d2744b9e5804bf812104914ac44604f36305e698354394a139fdccb7aaf3d03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'missions' => array($this, 'block_missions'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20494bed199a9e3e2394517474fa9bd0a46519bbdf6b7a1d0833a46aac8f5273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20494bed199a9e3e2394517474fa9bd0a46519bbdf6b7a1d0833a46aac8f5273->enter($__internal_20494bed199a9e3e2394517474fa9bd0a46519bbdf6b7a1d0833a46aac8f5273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_97ce16696df55c8b49e82129ae9884e5d5476258e9ca3f9d7872eeaa25be30e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ce16696df55c8b49e82129ae9884e5d5476258e9ca3f9d7872eeaa25be30e3->enter($__internal_97ce16696df55c8b49e82129ae9884e5d5476258e9ca3f9d7872eeaa25be30e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20494bed199a9e3e2394517474fa9bd0a46519bbdf6b7a1d0833a46aac8f5273->leave($__internal_20494bed199a9e3e2394517474fa9bd0a46519bbdf6b7a1d0833a46aac8f5273_prof);

        
        $__internal_97ce16696df55c8b49e82129ae9884e5d5476258e9ca3f9d7872eeaa25be30e3->leave($__internal_97ce16696df55c8b49e82129ae9884e5d5476258e9ca3f9d7872eeaa25be30e3_prof);

    }

    // line 3
    public function block_missions($context, array $blocks = array())
    {
        $__internal_bf9ede95bf80060ec1ff51428117eb85b4c689ceee2b500551aba5e8c2662607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9ede95bf80060ec1ff51428117eb85b4c689ceee2b500551aba5e8c2662607->enter($__internal_bf9ede95bf80060ec1ff51428117eb85b4c689ceee2b500551aba5e8c2662607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missions"));

        $__internal_ae1de1f723def25ce78ca527863c3c05000117b90c18e203b4fa41e4c4ac5349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1de1f723def25ce78ca527863c3c05000117b90c18e203b4fa41e4c4ac5349->enter($__internal_ae1de1f723def25ce78ca527863c3c05000117b90c18e203b4fa41e4c4ac5349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missions"));

        // line 4
        echo "
 ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["missions"]);
        foreach ($context['_seq'] as $context["_key"] => $context["missions"]) {
            // line 6
            echo " <div class=\"4u 12u(mobile)\">
    <section class=\"box\">
         <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mission_path", array("id" => $this->getAttribute($context["missions"], "missionId", array()))), "html", null, true);
            echo "\" class=\"image featured\"><img src=\"images/pic02.jpg\" alt=\"\" /></a>

           <header>
                <h3><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mission_path", array("id" => $this->getAttribute($context["missions"], "missionId", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["missions"], "title", array()), "html", null, true);
            echo "</a></h3>
            </header>
            <strong>Description:</strong><p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["missions"], "description", array()), "html", null, true);
            echo "</p>


           <li><strong>Date:</strong>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["missions"], "dateAs", array())), "html", null, true);
            echo "</li>


           <li>
           <strong>Domain d'activité:</strong>
           ";
            // line 21
            if (($this->getAttribute($context["missions"], "activity", array()) == null)) {
                // line 22
                echo "           domaine inconnu
           ";
            } else {
                // line 24
                echo "           ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["missions"], "activity", array()), "html", null, true);
                echo "
           </li>
           ";
            }
            // line 27
            echo "           <li>
           <strong>Entreprise :</strong>
           ";
            // line 29
            if (($this->getAttribute($context["missions"], "business", array()) == null)) {
                // line 30
                echo "           inconnu
           ";
            } else {
                // line 32
                echo "           ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["missions"], "business", array()), "html", null, true);
                echo "
           </li>
           ";
            }
            // line 35
            echo "           <li>
           <strong>Price:</strong>
           ";
            // line 37
            if (($this->getAttribute($context["missions"], "price", array()) == 0)) {
                // line 38
                echo "           free
           ";
            } else {
                // line 40
                echo "           ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["missions"], "price", array()), "html", null, true);
                echo "
           </li>
           ";
            }
            // line 43
            echo "
         </ul>

                <footer>
                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mission_path", array("id" => $this->getAttribute($context["missions"], "missionId", array()))), "html", null, true);
            echo "\" class=\"button alt\"> + Détaille</a>
                </footer>
            </section>
        </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['missions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "




";
        
        $__internal_ae1de1f723def25ce78ca527863c3c05000117b90c18e203b4fa41e4c4ac5349->leave($__internal_ae1de1f723def25ce78ca527863c3c05000117b90c18e203b4fa41e4c4ac5349_prof);

        
        $__internal_bf9ede95bf80060ec1ff51428117eb85b4c689ceee2b500551aba5e8c2662607->leave($__internal_bf9ede95bf80060ec1ff51428117eb85b4c689ceee2b500551aba5e8c2662607_prof);

    }

    // line 59
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_358031284f65e64b5c8dc44fcb5e79d2635b88a736fe227042b8731f1377b8ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_358031284f65e64b5c8dc44fcb5e79d2635b88a736fe227042b8731f1377b8ad->enter($__internal_358031284f65e64b5c8dc44fcb5e79d2635b88a736fe227042b8731f1377b8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c1713884c4ba1c8714cd588e501a009c1c6c87053497c4f60586ab9f49b471db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1713884c4ba1c8714cd588e501a009c1c6c87053497c4f60586ab9f49b471db->enter($__internal_c1713884c4ba1c8714cd588e501a009c1c6c87053497c4f60586ab9f49b471db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 60
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_c1713884c4ba1c8714cd588e501a009c1c6c87053497c4f60586ab9f49b471db->leave($__internal_c1713884c4ba1c8714cd588e501a009c1c6c87053497c4f60586ab9f49b471db_prof);

        
        $__internal_358031284f65e64b5c8dc44fcb5e79d2635b88a736fe227042b8731f1377b8ad->leave($__internal_358031284f65e64b5c8dc44fcb5e79d2635b88a736fe227042b8731f1377b8ad_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 60,  167 => 59,  152 => 52,  141 => 47,  135 => 43,  128 => 40,  124 => 38,  122 => 37,  118 => 35,  111 => 32,  107 => 30,  105 => 29,  101 => 27,  94 => 24,  90 => 22,  88 => 21,  80 => 16,  74 => 13,  67 => 11,  61 => 8,  57 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

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
                <a href=\"{{ path('mission_path', {'id' : missions.missionId}) }}\" class=\"button alt\"> + Détaille</a>
                </footer>
            </section>
        </div>
         {% endfor %}





{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", ":default:index.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources\\views/default/index.html.twig");
    }
}
