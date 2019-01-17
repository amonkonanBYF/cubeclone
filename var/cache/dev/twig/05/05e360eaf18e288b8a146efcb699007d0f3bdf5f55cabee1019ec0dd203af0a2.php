<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3d054e7b118a3d0a314b64636218744c7fdf1884da993bef329689c4ec8ac8ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_17f3a56f44a8e68c3c897ba0f1e3ada3db193250beafc7d399aee23dba9074ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17f3a56f44a8e68c3c897ba0f1e3ada3db193250beafc7d399aee23dba9074ba->enter($__internal_17f3a56f44a8e68c3c897ba0f1e3ada3db193250beafc7d399aee23dba9074ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_9cebedeb857f832daafc7ec0755830ca90fd7ab462c23e6bef97eeafefe625a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cebedeb857f832daafc7ec0755830ca90fd7ab462c23e6bef97eeafefe625a6->enter($__internal_9cebedeb857f832daafc7ec0755830ca90fd7ab462c23e6bef97eeafefe625a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17f3a56f44a8e68c3c897ba0f1e3ada3db193250beafc7d399aee23dba9074ba->leave($__internal_17f3a56f44a8e68c3c897ba0f1e3ada3db193250beafc7d399aee23dba9074ba_prof);

        
        $__internal_9cebedeb857f832daafc7ec0755830ca90fd7ab462c23e6bef97eeafefe625a6->leave($__internal_9cebedeb857f832daafc7ec0755830ca90fd7ab462c23e6bef97eeafefe625a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_acae1b6498f596e58ce43c523e053c0fdac02ef03c614c8beddcd471f2ff08e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acae1b6498f596e58ce43c523e053c0fdac02ef03c614c8beddcd471f2ff08e2->enter($__internal_acae1b6498f596e58ce43c523e053c0fdac02ef03c614c8beddcd471f2ff08e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ef1602b98c3a4529287e681245aaa7037b70d201829a25dfd5c70c27d7afad41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1602b98c3a4529287e681245aaa7037b70d201829a25dfd5c70c27d7afad41->enter($__internal_ef1602b98c3a4529287e681245aaa7037b70d201829a25dfd5c70c27d7afad41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ef1602b98c3a4529287e681245aaa7037b70d201829a25dfd5c70c27d7afad41->leave($__internal_ef1602b98c3a4529287e681245aaa7037b70d201829a25dfd5c70c27d7afad41_prof);

        
        $__internal_acae1b6498f596e58ce43c523e053c0fdac02ef03c614c8beddcd471f2ff08e2->leave($__internal_acae1b6498f596e58ce43c523e053c0fdac02ef03c614c8beddcd471f2ff08e2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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

", "FOSUserBundle:Security:login.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
