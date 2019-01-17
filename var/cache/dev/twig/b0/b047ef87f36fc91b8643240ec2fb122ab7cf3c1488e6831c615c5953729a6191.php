<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_b5983eca8758a2fba35286524730465c7f70e13dc2ec91dc9f98613badf54d31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layoutProfile.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_8c8be798f552823f40a29954acc8005e14c587d705966a33a4b7127e71f55810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8be798f552823f40a29954acc8005e14c587d705966a33a4b7127e71f55810->enter($__internal_8c8be798f552823f40a29954acc8005e14c587d705966a33a4b7127e71f55810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_513fe589b82a8b3bf9925a60091aa2ae3ae72b09cbe2cf19a6a6fa53ca631bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513fe589b82a8b3bf9925a60091aa2ae3ae72b09cbe2cf19a6a6fa53ca631bf5->enter($__internal_513fe589b82a8b3bf9925a60091aa2ae3ae72b09cbe2cf19a6a6fa53ca631bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c8be798f552823f40a29954acc8005e14c587d705966a33a4b7127e71f55810->leave($__internal_8c8be798f552823f40a29954acc8005e14c587d705966a33a4b7127e71f55810_prof);

        
        $__internal_513fe589b82a8b3bf9925a60091aa2ae3ae72b09cbe2cf19a6a6fa53ca631bf5->leave($__internal_513fe589b82a8b3bf9925a60091aa2ae3ae72b09cbe2cf19a6a6fa53ca631bf5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c82b824fa8b93e6c8c5cf0a5e57ed3efca0c0c2e603dcdd4ac26c983719d993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c82b824fa8b93e6c8c5cf0a5e57ed3efca0c0c2e603dcdd4ac26c983719d993->enter($__internal_3c82b824fa8b93e6c8c5cf0a5e57ed3efca0c0c2e603dcdd4ac26c983719d993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ff44ae6f511b90ae29720f9ac03c97bd14533ce96564d353534e1265b9acab7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff44ae6f511b90ae29720f9ac03c97bd14533ce96564d353534e1265b9acab7f->enter($__internal_ff44ae6f511b90ae29720f9ac03c97bd14533ce96564d353534e1265b9acab7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 6)->display($context);
        
        $__internal_ff44ae6f511b90ae29720f9ac03c97bd14533ce96564d353534e1265b9acab7f->leave($__internal_ff44ae6f511b90ae29720f9ac03c97bd14533ce96564d353534e1265b9acab7f_prof);

        
        $__internal_3c82b824fa8b93e6c8c5cf0a5e57ed3efca0c0c2e603dcdd4ac26c983719d993->leave($__internal_3c82b824fa8b93e6c8c5cf0a5e57ed3efca0c0c2e603dcdd4ac26c983719d993_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
", "@FOSUser/Profile/show.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
