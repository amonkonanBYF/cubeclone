<?php

/* :users:profil.html.twig */
class __TwigTemplate_678c39c2a2d40813ad8114a76b262f915ac39bca4b90280e43e8182a35e2ea68 extends Twig_Template
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
        $__internal_c9812d19858e31a33a8d456eb4ceea454d67242f91f2acd68ffb265ae1ea11ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9812d19858e31a33a8d456eb4ceea454d67242f91f2acd68ffb265ae1ea11ce->enter($__internal_c9812d19858e31a33a8d456eb4ceea454d67242f91f2acd68ffb265ae1ea11ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:profil.html.twig"));

        $__internal_a29fae1977def833babe9b7bee016cec33997c976272db06c8b926ff3e22d95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29fae1977def833babe9b7bee016cec33997c976272db06c8b926ff3e22d95e->enter($__internal_a29fae1977def833babe9b7bee016cec33997c976272db06c8b926ff3e22d95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:profil.html.twig"));

        // line 1
        echo "<body>

<h1>Profile</h1>
<h3>Bienvenue </h3>

";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "



</body>
";
        
        $__internal_c9812d19858e31a33a8d456eb4ceea454d67242f91f2acd68ffb265ae1ea11ce->leave($__internal_c9812d19858e31a33a8d456eb4ceea454d67242f91f2acd68ffb265ae1ea11ce_prof);

        
        $__internal_a29fae1977def833babe9b7bee016cec33997c976272db06c8b926ff3e22d95e->leave($__internal_a29fae1977def833babe9b7bee016cec33997c976272db06c8b926ff3e22d95e_prof);

    }

    public function getTemplateName()
    {
        return ":users:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  32 => 6,  25 => 1,);
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

<h1>Profile</h1>
<h3>Bienvenue </h3>

{{user.firstName }}
{{user.lastName }}



</body>
", ":users:profil.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources\\views/users/profil.html.twig");
    }
}
