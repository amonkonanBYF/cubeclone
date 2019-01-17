<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_375c4a0bc576fa214c2282344590c86ea86baa3a130f79c69868525fe9da659a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_cd5d5caf2b766352bb678b65d08eb124b198b9dd54375380d3c50711afa80246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5d5caf2b766352bb678b65d08eb124b198b9dd54375380d3c50711afa80246->enter($__internal_cd5d5caf2b766352bb678b65d08eb124b198b9dd54375380d3c50711afa80246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_cd269248be87a4a04b36e79606a9e4a1cd25593299b214f6ef2da486be54994d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd269248be87a4a04b36e79606a9e4a1cd25593299b214f6ef2da486be54994d->enter($__internal_cd269248be87a4a04b36e79606a9e4a1cd25593299b214f6ef2da486be54994d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd5d5caf2b766352bb678b65d08eb124b198b9dd54375380d3c50711afa80246->leave($__internal_cd5d5caf2b766352bb678b65d08eb124b198b9dd54375380d3c50711afa80246_prof);

        
        $__internal_cd269248be87a4a04b36e79606a9e4a1cd25593299b214f6ef2da486be54994d->leave($__internal_cd269248be87a4a04b36e79606a9e4a1cd25593299b214f6ef2da486be54994d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c15f7e7f54a915784ff739e814701cae52be7f02037ecbf656f125db4e903ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c15f7e7f54a915784ff739e814701cae52be7f02037ecbf656f125db4e903ce->enter($__internal_8c15f7e7f54a915784ff739e814701cae52be7f02037ecbf656f125db4e903ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ce8f8442e7dae52d68eca26a9450e509fd36443db9564dcc199b293ce4910365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8f8442e7dae52d68eca26a9450e509fd36443db9564dcc199b293ce4910365->enter($__internal_ce8f8442e7dae52d68eca26a9450e509fd36443db9564dcc199b293ce4910365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_ce8f8442e7dae52d68eca26a9450e509fd36443db9564dcc199b293ce4910365->leave($__internal_ce8f8442e7dae52d68eca26a9450e509fd36443db9564dcc199b293ce4910365_prof);

        
        $__internal_8c15f7e7f54a915784ff739e814701cae52be7f02037ecbf656f125db4e903ce->leave($__internal_8c15f7e7f54a915784ff739e814701cae52be7f02037ecbf656f125db4e903ce_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
