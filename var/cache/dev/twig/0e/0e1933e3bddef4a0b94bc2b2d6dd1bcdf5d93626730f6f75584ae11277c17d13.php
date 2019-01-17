<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_2c39c4421820dc1e8347a29f7666d686f01fcece53858328f2335e0ee7423cc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_78374c1d28abf28e9efb212ad69aee0851cd69544a2a5e5980ff4763dc48c6a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78374c1d28abf28e9efb212ad69aee0851cd69544a2a5e5980ff4763dc48c6a8->enter($__internal_78374c1d28abf28e9efb212ad69aee0851cd69544a2a5e5980ff4763dc48c6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_bc1214e02d752622af6a68af7bd75a4dc403f227cc67b14f976bf2698958c203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1214e02d752622af6a68af7bd75a4dc403f227cc67b14f976bf2698958c203->enter($__internal_bc1214e02d752622af6a68af7bd75a4dc403f227cc67b14f976bf2698958c203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78374c1d28abf28e9efb212ad69aee0851cd69544a2a5e5980ff4763dc48c6a8->leave($__internal_78374c1d28abf28e9efb212ad69aee0851cd69544a2a5e5980ff4763dc48c6a8_prof);

        
        $__internal_bc1214e02d752622af6a68af7bd75a4dc403f227cc67b14f976bf2698958c203->leave($__internal_bc1214e02d752622af6a68af7bd75a4dc403f227cc67b14f976bf2698958c203_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47848c6a99d6cee829e5f864c54eed96349080ec024c687d1cf80a5ce403920f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47848c6a99d6cee829e5f864c54eed96349080ec024c687d1cf80a5ce403920f->enter($__internal_47848c6a99d6cee829e5f864c54eed96349080ec024c687d1cf80a5ce403920f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c7760d5db0fcd7ae04ad6d6b836ed306335ae07fd6ac5085d0e2850dd6c879c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7760d5db0fcd7ae04ad6d6b836ed306335ae07fd6ac5085d0e2850dd6c879c7->enter($__internal_c7760d5db0fcd7ae04ad6d6b836ed306335ae07fd6ac5085d0e2850dd6c879c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c7760d5db0fcd7ae04ad6d6b836ed306335ae07fd6ac5085d0e2850dd6c879c7->leave($__internal_c7760d5db0fcd7ae04ad6d6b836ed306335ae07fd6ac5085d0e2850dd6c879c7_prof);

        
        $__internal_47848c6a99d6cee829e5f864c54eed96349080ec024c687d1cf80a5ce403920f->leave($__internal_47848c6a99d6cee829e5f864c54eed96349080ec024c687d1cf80a5ce403920f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
