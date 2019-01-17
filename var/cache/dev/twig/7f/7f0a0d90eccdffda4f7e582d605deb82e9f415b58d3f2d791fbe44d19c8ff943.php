<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3279dbcdca5c0aeeab86c3495066d40ec56322e772c432abca5b353e54e515c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_140c5d521b8ccb24ef3453200880d5818d00d9a84eef5db530a341c241a43f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140c5d521b8ccb24ef3453200880d5818d00d9a84eef5db530a341c241a43f22->enter($__internal_140c5d521b8ccb24ef3453200880d5818d00d9a84eef5db530a341c241a43f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_ef6140a67c0e31fa11099f68085197ebce479e7ae245d2e43132e6f3d50489ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6140a67c0e31fa11099f68085197ebce479e7ae245d2e43132e6f3d50489ae->enter($__internal_ef6140a67c0e31fa11099f68085197ebce479e7ae245d2e43132e6f3d50489ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_140c5d521b8ccb24ef3453200880d5818d00d9a84eef5db530a341c241a43f22->leave($__internal_140c5d521b8ccb24ef3453200880d5818d00d9a84eef5db530a341c241a43f22_prof);

        
        $__internal_ef6140a67c0e31fa11099f68085197ebce479e7ae245d2e43132e6f3d50489ae->leave($__internal_ef6140a67c0e31fa11099f68085197ebce479e7ae245d2e43132e6f3d50489ae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc8b10ae1355fbdb30777c5a7fed2055423c62968558707cb5566ff0a92366e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc8b10ae1355fbdb30777c5a7fed2055423c62968558707cb5566ff0a92366e5->enter($__internal_fc8b10ae1355fbdb30777c5a7fed2055423c62968558707cb5566ff0a92366e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8ed357ad3b19cb26fae6bcca98b10042716c253fe4b76891ed52b79abd36aff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed357ad3b19cb26fae6bcca98b10042716c253fe4b76891ed52b79abd36aff8->enter($__internal_8ed357ad3b19cb26fae6bcca98b10042716c253fe4b76891ed52b79abd36aff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_8ed357ad3b19cb26fae6bcca98b10042716c253fe4b76891ed52b79abd36aff8->leave($__internal_8ed357ad3b19cb26fae6bcca98b10042716c253fe4b76891ed52b79abd36aff8_prof);

        
        $__internal_fc8b10ae1355fbdb30777c5a7fed2055423c62968558707cb5566ff0a92366e5->leave($__internal_fc8b10ae1355fbdb30777c5a7fed2055423c62968558707cb5566ff0a92366e5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
