<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_3743135243de4855ece45f25b4e2fc9e4fa1eeb1045b118a76df1317b80be5df extends Twig_Template
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
        $__internal_7c66ffacfc8df745673af4a84dca5bcb85c6f1594443ae384e3063cde8b802c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c66ffacfc8df745673af4a84dca5bcb85c6f1594443ae384e3063cde8b802c3->enter($__internal_7c66ffacfc8df745673af4a84dca5bcb85c6f1594443ae384e3063cde8b802c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_91216dddc96ecc6d8dfbdc8f567919dfc484be7c1c6c5cabd4adc1818829134d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91216dddc96ecc6d8dfbdc8f567919dfc484be7c1c6c5cabd4adc1818829134d->enter($__internal_91216dddc96ecc6d8dfbdc8f567919dfc484be7c1c6c5cabd4adc1818829134d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 1
        echo "


";
        // line 5
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>

        <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_7c66ffacfc8df745673af4a84dca5bcb85c6f1594443ae384e3063cde8b802c3->leave($__internal_7c66ffacfc8df745673af4a84dca5bcb85c6f1594443ae384e3063cde8b802c3_prof);

        
        $__internal_91216dddc96ecc6d8dfbdc8f567919dfc484be7c1c6c5cabd4adc1818829134d->leave($__internal_91216dddc96ecc6d8dfbdc8f567919dfc484be7c1c6c5cabd4adc1818829134d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  43 => 10,  37 => 7,  33 => 6,  30 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("


{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>

        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}

", "@FOSUser/Registration/register_content.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
