<?php

/* users/loging.html.twig */
class __TwigTemplate_e276beac69cd18b5d5e98ae46820b615149865ce6b7a37957e2fbadfa4621804 extends Twig_Template
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
        $__internal_bf250a298618c0412f69741d46a3bb1861d870fd916484f8b6181df265bfb802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf250a298618c0412f69741d46a3bb1861d870fd916484f8b6181df265bfb802->enter($__internal_bf250a298618c0412f69741d46a3bb1861d870fd916484f8b6181df265bfb802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/loging.html.twig"));

        $__internal_9fc0c4f1ec1bbe9f54a514a1fbc85d52879110dd76df4d32cb71458377bd51e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc0c4f1ec1bbe9f54a514a1fbc85d52879110dd76df4d32cb71458377bd51e2->enter($__internal_9fc0c4f1ec1bbe9f54a514a1fbc85d52879110dd76df4d32cb71458377bd51e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/loging.html.twig"));

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
        
        $__internal_bf250a298618c0412f69741d46a3bb1861d870fd916484f8b6181df265bfb802->leave($__internal_bf250a298618c0412f69741d46a3bb1861d870fd916484f8b6181df265bfb802_prof);

        
        $__internal_9fc0c4f1ec1bbe9f54a514a1fbc85d52879110dd76df4d32cb71458377bd51e2->leave($__internal_9fc0c4f1ec1bbe9f54a514a1fbc85d52879110dd76df4d32cb71458377bd51e2_prof);

    }

    public function getTemplateName()
    {
        return "users/loging.html.twig";
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
", "users/loging.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\views\\users\\loging.html.twig");
    }
}
