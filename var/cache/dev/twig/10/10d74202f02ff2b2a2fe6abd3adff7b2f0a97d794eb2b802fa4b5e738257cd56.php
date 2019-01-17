<?php

/* default/index.html.twig */
class __TwigTemplate_cc0f6e940e5bdeacb2028e069533637fa5512d7ebb425371a94e54c401a1adce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_4cbbcbcad3aef5c6b6566b7c5d8da6dc40f316e770e501645f1774adb9b67ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cbbcbcad3aef5c6b6566b7c5d8da6dc40f316e770e501645f1774adb9b67ffe->enter($__internal_4cbbcbcad3aef5c6b6566b7c5d8da6dc40f316e770e501645f1774adb9b67ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_894a4ed0d361136a36f9fa764676dd3675c949d006ed619c16d24a47678db8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894a4ed0d361136a36f9fa764676dd3675c949d006ed619c16d24a47678db8a6->enter($__internal_894a4ed0d361136a36f9fa764676dd3675c949d006ed619c16d24a47678db8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cbbcbcad3aef5c6b6566b7c5d8da6dc40f316e770e501645f1774adb9b67ffe->leave($__internal_4cbbcbcad3aef5c6b6566b7c5d8da6dc40f316e770e501645f1774adb9b67ffe_prof);

        
        $__internal_894a4ed0d361136a36f9fa764676dd3675c949d006ed619c16d24a47678db8a6->leave($__internal_894a4ed0d361136a36f9fa764676dd3675c949d006ed619c16d24a47678db8a6_prof);

    }

    // line 3
    public function block_missions($context, array $blocks = array())
    {
        $__internal_0811559c37cfa5e1b1bbb9a5e71643eab14a902f84bbe6f2890e283af80edb70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0811559c37cfa5e1b1bbb9a5e71643eab14a902f84bbe6f2890e283af80edb70->enter($__internal_0811559c37cfa5e1b1bbb9a5e71643eab14a902f84bbe6f2890e283af80edb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missions"));

        $__internal_57edb7425b26aaba99959e7c9676489821657f6e1d14fa3aa96a9d2f3ab000da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57edb7425b26aaba99959e7c9676489821657f6e1d14fa3aa96a9d2f3ab000da->enter($__internal_57edb7425b26aaba99959e7c9676489821657f6e1d14fa3aa96a9d2f3ab000da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missions"));

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
            echo "\" class=\"button alt\"> + Détails</a>
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
        
        $__internal_57edb7425b26aaba99959e7c9676489821657f6e1d14fa3aa96a9d2f3ab000da->leave($__internal_57edb7425b26aaba99959e7c9676489821657f6e1d14fa3aa96a9d2f3ab000da_prof);

        
        $__internal_0811559c37cfa5e1b1bbb9a5e71643eab14a902f84bbe6f2890e283af80edb70->leave($__internal_0811559c37cfa5e1b1bbb9a5e71643eab14a902f84bbe6f2890e283af80edb70_prof);

    }

    // line 59
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bcdb50d50c31d8dd06a57a518a72a777827608408a84785a1c57158c59c126fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcdb50d50c31d8dd06a57a518a72a777827608408a84785a1c57158c59c126fe->enter($__internal_bcdb50d50c31d8dd06a57a518a72a777827608408a84785a1c57158c59c126fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8bbf164e4b1cc0941fb6e6b1f2e6cc2c78b3bbd1e1d4f879e8a911616fead269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbf164e4b1cc0941fb6e6b1f2e6cc2c78b3bbd1e1d4f879e8a911616fead269->enter($__internal_8bbf164e4b1cc0941fb6e6b1f2e6cc2c78b3bbd1e1d4f879e8a911616fead269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8bbf164e4b1cc0941fb6e6b1f2e6cc2c78b3bbd1e1d4f879e8a911616fead269->leave($__internal_8bbf164e4b1cc0941fb6e6b1f2e6cc2c78b3bbd1e1d4f879e8a911616fead269_prof);

        
        $__internal_bcdb50d50c31d8dd06a57a518a72a777827608408a84785a1c57158c59c126fe->leave($__internal_bcdb50d50c31d8dd06a57a518a72a777827608408a84785a1c57158c59c126fe_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
                <a href=\"{{ path('mission_path', {'id' : missions.missionId}) }}\" class=\"button alt\"> + Détails</a>
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
", "default/index.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\views\\default\\index.html.twig");
    }
}
