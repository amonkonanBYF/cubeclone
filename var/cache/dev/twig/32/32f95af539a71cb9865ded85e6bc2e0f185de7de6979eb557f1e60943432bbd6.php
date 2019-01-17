<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_93118fb6bc1274613201be4cdc7253afc21076f73a2c45def85101ac51dfe1bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layoutProfile.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layoutProfile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e928a072889fa4a89a7eb65a5d54a371f56727507026183cee926d42a02bdb1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e928a072889fa4a89a7eb65a5d54a371f56727507026183cee926d42a02bdb1f->enter($__internal_e928a072889fa4a89a7eb65a5d54a371f56727507026183cee926d42a02bdb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_a5c0950c7bcb7a7a89c4f3e912b960a56b93089840db23e30ae32ddcb8514233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c0950c7bcb7a7a89c4f3e912b960a56b93089840db23e30ae32ddcb8514233->enter($__internal_a5c0950c7bcb7a7a89c4f3e912b960a56b93089840db23e30ae32ddcb8514233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e928a072889fa4a89a7eb65a5d54a371f56727507026183cee926d42a02bdb1f->leave($__internal_e928a072889fa4a89a7eb65a5d54a371f56727507026183cee926d42a02bdb1f_prof);

        
        $__internal_a5c0950c7bcb7a7a89c4f3e912b960a56b93089840db23e30ae32ddcb8514233->leave($__internal_a5c0950c7bcb7a7a89c4f3e912b960a56b93089840db23e30ae32ddcb8514233_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_841802abfb3d247a84b80b6da724cd47b915ca66dd047d5d55624652cd2a968f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841802abfb3d247a84b80b6da724cd47b915ca66dd047d5d55624652cd2a968f->enter($__internal_841802abfb3d247a84b80b6da724cd47b915ca66dd047d5d55624652cd2a968f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3c4bd8626de1950b0931308e7fb9b9c9b1f7df333b75680d019afd19f76f5a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4bd8626de1950b0931308e7fb9b9c9b1f7df333b75680d019afd19f76f5a2c->enter($__internal_3c4bd8626de1950b0931308e7fb9b9c9b1f7df333b75680d019afd19f76f5a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 6)->display($context);
        
        $__internal_3c4bd8626de1950b0931308e7fb9b9c9b1f7df333b75680d019afd19f76f5a2c->leave($__internal_3c4bd8626de1950b0931308e7fb9b9c9b1f7df333b75680d019afd19f76f5a2c_prof);

        
        $__internal_841802abfb3d247a84b80b6da724cd47b915ca66dd047d5d55624652cd2a968f->leave($__internal_841802abfb3d247a84b80b6da724cd47b915ca66dd047d5d55624652cd2a968f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layoutProfile.html.twig\" %}



{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
