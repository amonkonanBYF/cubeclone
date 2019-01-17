<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c35894c87e2069de18e213d5709d2d483a67bed98ce998cc789ef141ba9851ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_9c77c246f4456532dde1233d9079602a4c92656fa32aafc6a7831382f2430f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c77c246f4456532dde1233d9079602a4c92656fa32aafc6a7831382f2430f35->enter($__internal_9c77c246f4456532dde1233d9079602a4c92656fa32aafc6a7831382f2430f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_d87cbcb155dd90b1dd61db33329450c259eceae024043bea2db2f2c31e5655ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87cbcb155dd90b1dd61db33329450c259eceae024043bea2db2f2c31e5655ad->enter($__internal_d87cbcb155dd90b1dd61db33329450c259eceae024043bea2db2f2c31e5655ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c77c246f4456532dde1233d9079602a4c92656fa32aafc6a7831382f2430f35->leave($__internal_9c77c246f4456532dde1233d9079602a4c92656fa32aafc6a7831382f2430f35_prof);

        
        $__internal_d87cbcb155dd90b1dd61db33329450c259eceae024043bea2db2f2c31e5655ad->leave($__internal_d87cbcb155dd90b1dd61db33329450c259eceae024043bea2db2f2c31e5655ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dadde91bba83a5d41d8f6a78f4708658f75938c8a98a08d2ea93de9185f389f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dadde91bba83a5d41d8f6a78f4708658f75938c8a98a08d2ea93de9185f389f->enter($__internal_5dadde91bba83a5d41d8f6a78f4708658f75938c8a98a08d2ea93de9185f389f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3184bdc864f7a79b86724fda1b11ad538e4d82a9eb17371b7c391d39c9385cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3184bdc864f7a79b86724fda1b11ad538e4d82a9eb17371b7c391d39c9385cae->enter($__internal_3184bdc864f7a79b86724fda1b11ad538e4d82a9eb17371b7c391d39c9385cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    <div>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"\">pas encore inscrit? inscrivez-vous ici</a></li>
    </div>
";
        
        $__internal_3184bdc864f7a79b86724fda1b11ad538e4d82a9eb17371b7c391d39c9385cae->leave($__internal_3184bdc864f7a79b86724fda1b11ad538e4d82a9eb17371b7c391d39c9385cae_prof);

        
        $__internal_5dadde91bba83a5d41d8f6a78f4708658f75938c8a98a08d2ea93de9185f389f->leave($__internal_5dadde91bba83a5d41d8f6a78f4708658f75938c8a98a08d2ea93de9185f389f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
    <div>
        <li><a href=\"{{path('fos_user_registration_register')}}\" class=\"\">pas encore inscrit? inscrivez-vous ici</a></li>
    </div>
{% endblock fos_user_content %}

", "@FOSUser/Security/login.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
