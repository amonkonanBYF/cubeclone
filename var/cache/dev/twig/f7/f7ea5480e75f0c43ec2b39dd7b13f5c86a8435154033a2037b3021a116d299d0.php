<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_b97e0ee1936e42308c1b4cfc21d9ef7863adb5aa2609b6acfe380cb3592098d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_2d10b0dc6bf7a2e8f69bd209054bda36e69a2bcc6d811aaaedc20b61ec3ac9c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d10b0dc6bf7a2e8f69bd209054bda36e69a2bcc6d811aaaedc20b61ec3ac9c8->enter($__internal_2d10b0dc6bf7a2e8f69bd209054bda36e69a2bcc6d811aaaedc20b61ec3ac9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_2a9187b0afcb23a3d51f5249aedcece4d0596dfdeb1a4b3998b3f35403f9eb82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9187b0afcb23a3d51f5249aedcece4d0596dfdeb1a4b3998b3f35403f9eb82->enter($__internal_2a9187b0afcb23a3d51f5249aedcece4d0596dfdeb1a4b3998b3f35403f9eb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d10b0dc6bf7a2e8f69bd209054bda36e69a2bcc6d811aaaedc20b61ec3ac9c8->leave($__internal_2d10b0dc6bf7a2e8f69bd209054bda36e69a2bcc6d811aaaedc20b61ec3ac9c8_prof);

        
        $__internal_2a9187b0afcb23a3d51f5249aedcece4d0596dfdeb1a4b3998b3f35403f9eb82->leave($__internal_2a9187b0afcb23a3d51f5249aedcece4d0596dfdeb1a4b3998b3f35403f9eb82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b368f0166d9bee19bdd4843741b1d0e0380cef66a34ecc5773582e3496feb6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b368f0166d9bee19bdd4843741b1d0e0380cef66a34ecc5773582e3496feb6e->enter($__internal_1b368f0166d9bee19bdd4843741b1d0e0380cef66a34ecc5773582e3496feb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c2f65ea46ace349e43a3f5e9be38cedd8d46d87bc9830c5a5c450f12e2be418f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f65ea46ace349e43a3f5e9be38cedd8d46d87bc9830c5a5c450f12e2be418f->enter($__internal_c2f65ea46ace349e43a3f5e9be38cedd8d46d87bc9830c5a5c450f12e2be418f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c2f65ea46ace349e43a3f5e9be38cedd8d46d87bc9830c5a5c450f12e2be418f->leave($__internal_c2f65ea46ace349e43a3f5e9be38cedd8d46d87bc9830c5a5c450f12e2be418f_prof);

        
        $__internal_1b368f0166d9bee19bdd4843741b1d0e0380cef66a34ecc5773582e3496feb6e->leave($__internal_1b368f0166d9bee19bdd4843741b1d0e0380cef66a34ecc5773582e3496feb6e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
