<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_3b82c32df29cb8437f0bec2cd0de737ae8339e8af7d21a8f808365f7f195251c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_32b7c6d675541fa58efd63fa4dfd1688c8b6f31d5f904c4cc0eb0ac7d5b02f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b7c6d675541fa58efd63fa4dfd1688c8b6f31d5f904c4cc0eb0ac7d5b02f35->enter($__internal_32b7c6d675541fa58efd63fa4dfd1688c8b6f31d5f904c4cc0eb0ac7d5b02f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_9f136d20deb87197e2e5b71a585130e5664899b8583f57ee13a4acaf5b6c4f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f136d20deb87197e2e5b71a585130e5664899b8583f57ee13a4acaf5b6c4f6b->enter($__internal_9f136d20deb87197e2e5b71a585130e5664899b8583f57ee13a4acaf5b6c4f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32b7c6d675541fa58efd63fa4dfd1688c8b6f31d5f904c4cc0eb0ac7d5b02f35->leave($__internal_32b7c6d675541fa58efd63fa4dfd1688c8b6f31d5f904c4cc0eb0ac7d5b02f35_prof);

        
        $__internal_9f136d20deb87197e2e5b71a585130e5664899b8583f57ee13a4acaf5b6c4f6b->leave($__internal_9f136d20deb87197e2e5b71a585130e5664899b8583f57ee13a4acaf5b6c4f6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e513a6401b0f3fe399aa6b923a9fee3137c06978c7b0f3b5a6184995dc9e400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e513a6401b0f3fe399aa6b923a9fee3137c06978c7b0f3b5a6184995dc9e400->enter($__internal_5e513a6401b0f3fe399aa6b923a9fee3137c06978c7b0f3b5a6184995dc9e400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_794edbf7c13134199ec46d0592f74f40a0e23d0272be292e0f0204991ab39130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_794edbf7c13134199ec46d0592f74f40a0e23d0272be292e0f0204991ab39130->enter($__internal_794edbf7c13134199ec46d0592f74f40a0e23d0272be292e0f0204991ab39130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_794edbf7c13134199ec46d0592f74f40a0e23d0272be292e0f0204991ab39130->leave($__internal_794edbf7c13134199ec46d0592f74f40a0e23d0272be292e0f0204991ab39130_prof);

        
        $__internal_5e513a6401b0f3fe399aa6b923a9fee3137c06978c7b0f3b5a6184995dc9e400->leave($__internal_5e513a6401b0f3fe399aa6b923a9fee3137c06978c7b0f3b5a6184995dc9e400_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
