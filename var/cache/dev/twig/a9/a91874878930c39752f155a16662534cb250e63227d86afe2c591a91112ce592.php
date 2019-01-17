<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_13ba7fbc64a430775a6c41de70485bd8d624923979a2ad6aeb533f60b7c10866 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62c0082fe6ee93594935ad8ebdeb5a991a342a1311aaeb5d4eb01a9f5d597b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c0082fe6ee93594935ad8ebdeb5a991a342a1311aaeb5d4eb01a9f5d597b27->enter($__internal_62c0082fe6ee93594935ad8ebdeb5a991a342a1311aaeb5d4eb01a9f5d597b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_43153e74bb12b344d162107b53d5ec60cf372072bb57723dd334497f67a1787a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43153e74bb12b344d162107b53d5ec60cf372072bb57723dd334497f67a1787a->enter($__internal_43153e74bb12b344d162107b53d5ec60cf372072bb57723dd334497f67a1787a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c0082fe6ee93594935ad8ebdeb5a991a342a1311aaeb5d4eb01a9f5d597b27->leave($__internal_62c0082fe6ee93594935ad8ebdeb5a991a342a1311aaeb5d4eb01a9f5d597b27_prof);

        
        $__internal_43153e74bb12b344d162107b53d5ec60cf372072bb57723dd334497f67a1787a->leave($__internal_43153e74bb12b344d162107b53d5ec60cf372072bb57723dd334497f67a1787a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fce518c5c65a3fa78261ef06afc6598787cbc12fb45afe62d73dcc6f535e28d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce518c5c65a3fa78261ef06afc6598787cbc12fb45afe62d73dcc6f535e28d9->enter($__internal_fce518c5c65a3fa78261ef06afc6598787cbc12fb45afe62d73dcc6f535e28d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2aecffe8b93268a9193d5a7989083725ebf2008679598d3caaac7a6ec47fd2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aecffe8b93268a9193d5a7989083725ebf2008679598d3caaac7a6ec47fd2c7->enter($__internal_2aecffe8b93268a9193d5a7989083725ebf2008679598d3caaac7a6ec47fd2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_2aecffe8b93268a9193d5a7989083725ebf2008679598d3caaac7a6ec47fd2c7->leave($__internal_2aecffe8b93268a9193d5a7989083725ebf2008679598d3caaac7a6ec47fd2c7_prof);

        
        $__internal_fce518c5c65a3fa78261ef06afc6598787cbc12fb45afe62d73dcc6f535e28d9->leave($__internal_fce518c5c65a3fa78261ef06afc6598787cbc12fb45afe62d73dcc6f535e28d9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
