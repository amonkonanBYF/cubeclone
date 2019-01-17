<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_3f0e7dc037e38c0b39fc5540e1892dcef1b8f8103faf8c825d85460c4cfb00b4 extends Twig_Template
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
        $__internal_1a5fc2eceabee1cb6e88f55a9456927a2efb8b4de989c769acbe1b1646a3629a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5fc2eceabee1cb6e88f55a9456927a2efb8b4de989c769acbe1b1646a3629a->enter($__internal_1a5fc2eceabee1cb6e88f55a9456927a2efb8b4de989c769acbe1b1646a3629a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_3c50741c4e009112366c7830b88b56b2e08e3fa09b7054f5a351def1aecc8790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c50741c4e009112366c7830b88b56b2e08e3fa09b7054f5a351def1aecc8790->enter($__internal_3c50741c4e009112366c7830b88b56b2e08e3fa09b7054f5a351def1aecc8790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

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
        
        $__internal_1a5fc2eceabee1cb6e88f55a9456927a2efb8b4de989c769acbe1b1646a3629a->leave($__internal_1a5fc2eceabee1cb6e88f55a9456927a2efb8b4de989c769acbe1b1646a3629a_prof);

        
        $__internal_3c50741c4e009112366c7830b88b56b2e08e3fa09b7054f5a351def1aecc8790->leave($__internal_3c50741c4e009112366c7830b88b56b2e08e3fa09b7054f5a351def1aecc8790_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
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
", "FOSUserBundle:Profile:edit_content.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
