<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_cbfd3bd7838e38d899f313575eed1d23d8181cee0afe1dd324bc1087bb859692 extends Twig_Template
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
        $__internal_23e4a5d894fb573b99a269622964eff1fa740d3748814be46f43b5f36e933492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e4a5d894fb573b99a269622964eff1fa740d3748814be46f43b5f36e933492->enter($__internal_23e4a5d894fb573b99a269622964eff1fa740d3748814be46f43b5f36e933492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_f79f6a3d19a2b62d8fb8c03ef058fa822bb7b123f64a61dfe54041227d98a8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79f6a3d19a2b62d8fb8c03ef058fa822bb7b123f64a61dfe54041227d98a8e5->enter($__internal_f79f6a3d19a2b62d8fb8c03ef058fa822bb7b123f64a61dfe54041227d98a8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 6
        echo "Votre Identifiant";
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 7
        echo "dernière connexion";
        echo ": ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastLogin", array()), "d-m-Y"), "html", null, true);
        echo "</p>

    <p>";
        // line 9
        echo "prenom";
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 10
        echo "Nom";
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 11
        echo "adresse";
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "adress", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 12
        echo "description";
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "description", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 13
        echo "telephone";
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "telephone", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 14
        echo "ville";
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "city", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 15
        echo "pays";
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "country", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 16
        echo "photo";
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "image", array()), "html", null, true);
        echo "</p>

    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"><input type=\"button\" name=\"edit\" value='modifier' /></a>




</div>
";
        
        $__internal_23e4a5d894fb573b99a269622964eff1fa740d3748814be46f43b5f36e933492->leave($__internal_23e4a5d894fb573b99a269622964eff1fa740d3748814be46f43b5f36e933492_prof);

        
        $__internal_f79f6a3d19a2b62d8fb8c03ef058fa822bb7b123f64a61dfe54041227d98a8e5->leave($__internal_f79f6a3d19a2b62d8fb8c03ef058fa822bb7b123f64a61dfe54041227d98a8e5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 18,  96 => 16,  90 => 15,  84 => 14,  78 => 13,  72 => 12,  66 => 11,  60 => 10,  54 => 9,  47 => 7,  41 => 6,  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'| trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
    <p>{{ 'Votre Identifiant' }}: {{ user.id }}</p>
    <p>{{ 'dernière connexion' }}: {{ user.lastLogin |date('d-m-Y') }}</p>

    <p>{{ 'prenom' }}: {{ user.firstName}}</p>
    <p>{{ 'Nom' }}: {{ user.lastName}}</p>
    <p>{{ 'adresse' }}: {{ user.adress}}</p>
    <p>{{ 'description' }}: {{ user.description}}</p>
    <p>{{ 'telephone' }}: {{ user.telephone}}</p>
    <p>{{ 'ville' }}: {{ user.city}}</p>
    <p>{{ 'pays' }}: {{ user.country}}</p>
    <p>{{ 'photo' }}: {{ user.image}}</p>

    <a href=\"{{path('fos_user_profile_edit')}}\"><input type=\"button\" name=\"edit\" value='modifier' /></a>




</div>
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
