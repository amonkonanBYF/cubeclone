<?php

/* users/profil.html.twig */
class __TwigTemplate_8e3459c2161cea6bf0c51dbaa10c5c8ca09d200586fbbdcf4ee75db400c389b1 extends Twig_Template
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
        $__internal_2acec81860a1888e15efceeb9991e7737076a357c7e5d24c73087bcc7c5ffd65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2acec81860a1888e15efceeb9991e7737076a357c7e5d24c73087bcc7c5ffd65->enter($__internal_2acec81860a1888e15efceeb9991e7737076a357c7e5d24c73087bcc7c5ffd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/profil.html.twig"));

        $__internal_addad0818fa48c01bf5f148c4bc8399afd49546c03978afc33d9d2095fb002da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_addad0818fa48c01bf5f148c4bc8399afd49546c03978afc33d9d2095fb002da->enter($__internal_addad0818fa48c01bf5f148c4bc8399afd49546c03978afc33d9d2095fb002da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/profil.html.twig"));

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
        
        $__internal_2acec81860a1888e15efceeb9991e7737076a357c7e5d24c73087bcc7c5ffd65->leave($__internal_2acec81860a1888e15efceeb9991e7737076a357c7e5d24c73087bcc7c5ffd65_prof);

        
        $__internal_addad0818fa48c01bf5f148c4bc8399afd49546c03978afc33d9d2095fb002da->leave($__internal_addad0818fa48c01bf5f148c4bc8399afd49546c03978afc33d9d2095fb002da_prof);

    }

    public function getTemplateName()
    {
        return "users/profil.html.twig";
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
", "users/profil.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\views\\users\\profil.html.twig");
    }
}
