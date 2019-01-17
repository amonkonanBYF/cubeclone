<?php

/* :users:loging.html.twig */
class __TwigTemplate_29243115dbb5744214dce87b238cb944bdd65f482dbf939c4f589697a83e31c3 extends Twig_Template
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
        $__internal_be4fe74d107616011b7450c003eb914194560ac35e1842debfb8701680ff55dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4fe74d107616011b7450c003eb914194560ac35e1842debfb8701680ff55dd->enter($__internal_be4fe74d107616011b7450c003eb914194560ac35e1842debfb8701680ff55dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:loging.html.twig"));

        $__internal_507926314c420ab4991479a29231ad4811a9d9642ee1784f56cf2fb91a8f1ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507926314c420ab4991479a29231ad4811a9d9642ee1784f56cf2fb91a8f1ad5->enter($__internal_507926314c420ab4991479a29231ad4811a9d9642ee1784f56cf2fb91a8f1ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:loging.html.twig"));

        // line 1
        echo "<body>

<h1>Loging Page</h1>





  <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>


</body>
";
        
        $__internal_be4fe74d107616011b7450c003eb914194560ac35e1842debfb8701680ff55dd->leave($__internal_be4fe74d107616011b7450c003eb914194560ac35e1842debfb8701680ff55dd_prof);

        
        $__internal_507926314c420ab4991479a29231ad4811a9d9642ee1784f56cf2fb91a8f1ad5->leave($__internal_507926314c420ab4991479a29231ad4811a9d9642ee1784f56cf2fb91a8f1ad5_prof);

    }

    public function getTemplateName()
    {
        return ":users:loging.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  35 => 9,  25 => 1,);
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

<h1>Loging Page</h1>





  <form action=\"{{ path('login_check') }}\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>


</body>
", ":users:loging.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources\\views/users/loging.html.twig");
    }
}
