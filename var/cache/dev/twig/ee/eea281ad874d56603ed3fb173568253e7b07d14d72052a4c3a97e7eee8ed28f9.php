<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_f22e9150c91ba3a88fe5f5369d5b081f0a0ddbde1981c10dea045c30d57f97cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a94633e9846efbb34ef930e7382f57b25ca5267036cd3c204617d741cd417d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a94633e9846efbb34ef930e7382f57b25ca5267036cd3c204617d741cd417d97->enter($__internal_a94633e9846efbb34ef930e7382f57b25ca5267036cd3c204617d741cd417d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_fe885228da6f8016678d15ca61a0a2535df0a5b5396388b3b1fa8e9a962fcef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe885228da6f8016678d15ca61a0a2535df0a5b5396388b3b1fa8e9a962fcef0->enter($__internal_fe885228da6f8016678d15ca61a0a2535df0a5b5396388b3b1fa8e9a962fcef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"type\" name=\"LastName\" value=\"votre nom\">



    <div>
        <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_a94633e9846efbb34ef930e7382f57b25ca5267036cd3c204617d741cd417d97->leave($__internal_a94633e9846efbb34ef930e7382f57b25ca5267036cd3c204617d741cd417d97_prof);

        
        $__internal_fe885228da6f8016678d15ca61a0a2535df0a5b5396388b3b1fa8e9a962fcef0->leave($__internal_fe885228da6f8016678d15ca61a0a2535df0a5b5396388b3b1fa8e9a962fcef0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  41 => 10,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <input type=\"type\" name=\"LastName\" value=\"votre nom\">



    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Profile/edit_content.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit_content.html.twig");
    }
}
