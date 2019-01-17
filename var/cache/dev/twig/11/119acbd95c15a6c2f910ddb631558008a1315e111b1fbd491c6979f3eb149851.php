<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_41403b9c0e172fc52e92c40220f535c46b6e1c6374f95a568995f9a161259cbc extends Twig_Template
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
        $__internal_80981d6e01cfbb30599887f890f0910c0e18342854b3ab8f4a14c95a1ddd7ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80981d6e01cfbb30599887f890f0910c0e18342854b3ab8f4a14c95a1ddd7ddb->enter($__internal_80981d6e01cfbb30599887f890f0910c0e18342854b3ab8f4a14c95a1ddd7ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_da41510bda6615a41891f475ce1e37865fad9b292cd4ab59fe37f9d23d4bd672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da41510bda6615a41891f475ce1e37865fad9b292cd4ab59fe37f9d23d4bd672->enter($__internal_da41510bda6615a41891f475ce1e37865fad9b292cd4ab59fe37f9d23d4bd672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_80981d6e01cfbb30599887f890f0910c0e18342854b3ab8f4a14c95a1ddd7ddb->leave($__internal_80981d6e01cfbb30599887f890f0910c0e18342854b3ab8f4a14c95a1ddd7ddb_prof);

        
        $__internal_da41510bda6615a41891f475ce1e37865fad9b292cd4ab59fe37f9d23d4bd672->leave($__internal_da41510bda6615a41891f475ce1e37865fad9b292cd4ab59fe37f9d23d4bd672_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Group\\show_content.html.twig");
    }
}
