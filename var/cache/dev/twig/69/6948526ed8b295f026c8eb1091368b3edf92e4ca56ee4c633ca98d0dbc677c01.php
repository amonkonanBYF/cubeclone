<?php

/* FOSUserBundle::layoutProfile.html.twig */
class __TwigTemplate_cc550b6581d2d92fd33bcb5fd6da4051dd69092020a4fe33fafeabb0fe0db7be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseProfile.html.twig", "FOSUserBundle::layoutProfile.html.twig", 1);
        $this->blocks = array(
            'info' => array($this, 'block_info'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseProfile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33d82000ea1ce600931aeeb070b5798a1f4afed13d2a8648f3956cfd0f3954d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d82000ea1ce600931aeeb070b5798a1f4afed13d2a8648f3956cfd0f3954d5->enter($__internal_33d82000ea1ce600931aeeb070b5798a1f4afed13d2a8648f3956cfd0f3954d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layoutProfile.html.twig"));

        $__internal_250f5301643067ff60f01126bce1d357a101387ef67de9eed6995562df5ac8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250f5301643067ff60f01126bce1d357a101387ef67de9eed6995562df5ac8d2->enter($__internal_250f5301643067ff60f01126bce1d357a101387ef67de9eed6995562df5ac8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layoutProfile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33d82000ea1ce600931aeeb070b5798a1f4afed13d2a8648f3956cfd0f3954d5->leave($__internal_33d82000ea1ce600931aeeb070b5798a1f4afed13d2a8648f3956cfd0f3954d5_prof);

        
        $__internal_250f5301643067ff60f01126bce1d357a101387ef67de9eed6995562df5ac8d2->leave($__internal_250f5301643067ff60f01126bce1d357a101387ef67de9eed6995562df5ac8d2_prof);

    }

    // line 3
    public function block_info($context, array $blocks = array())
    {
        $__internal_b112d3a3c7f8186b2bdc1546a9302f686ac42a7eaaf96ce5b9375942ea062696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b112d3a3c7f8186b2bdc1546a9302f686ac42a7eaaf96ce5b9375942ea062696->enter($__internal_b112d3a3c7f8186b2bdc1546a9302f686ac42a7eaaf96ce5b9375942ea062696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "info"));

        $__internal_7436196c51cfb090f4bed1acec8648eb36568eaa70034c48f12a0279707acef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7436196c51cfb090f4bed1acec8648eb36568eaa70034c48f12a0279707acef1->enter($__internal_7436196c51cfb090f4bed1acec8648eb36568eaa70034c48f12a0279707acef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "info"));

        // line 4
        echo "
<div>
   ";
        // line 6
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 7
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 8
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 9
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 10
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        ";
        }
        // line 15
        echo "</div>
<div>
           ";
        // line 17
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "</div>

";
        
        $__internal_7436196c51cfb090f4bed1acec8648eb36568eaa70034c48f12a0279707acef1->leave($__internal_7436196c51cfb090f4bed1acec8648eb36568eaa70034c48f12a0279707acef1_prof);

        
        $__internal_b112d3a3c7f8186b2bdc1546a9302f686ac42a7eaaf96ce5b9375942ea062696->leave($__internal_b112d3a3c7f8186b2bdc1546a9302f686ac42a7eaaf96ce5b9375942ea062696_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0afb5cdc4d2b10a70a262d5f3b07b86b898505f484f727aab3be4293c9d2187c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0afb5cdc4d2b10a70a262d5f3b07b86b898505f484f727aab3be4293c9d2187c->enter($__internal_0afb5cdc4d2b10a70a262d5f3b07b86b898505f484f727aab3be4293c9d2187c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0e07762dd2e132b2805d11e81801c5c925df7972f5be269b04f13e1be56aa6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e07762dd2e132b2805d11e81801c5c925df7972f5be269b04f13e1be56aa6b9->enter($__internal_0e07762dd2e132b2805d11e81801c5c925df7972f5be269b04f13e1be56aa6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "           ";
        
        $__internal_0e07762dd2e132b2805d11e81801c5c925df7972f5be269b04f13e1be56aa6b9->leave($__internal_0e07762dd2e132b2805d11e81801c5c925df7972f5be269b04f13e1be56aa6b9_prof);

        
        $__internal_0afb5cdc4d2b10a70a262d5f3b07b86b898505f484f727aab3be4293c9d2187c->leave($__internal_0afb5cdc4d2b10a70a262d5f3b07b86b898505f484f727aab3be4293c9d2187c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layoutProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 18,  107 => 17,  95 => 19,  93 => 17,  89 => 15,  86 => 14,  80 => 13,  71 => 10,  66 => 9,  61 => 8,  56 => 7,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseProfile.html.twig' %}

{% block info %}

<div>
   {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}
</div>
<div>
           {% block fos_user_content %}
           {% endblock fos_user_content %}
</div>

{% endblock  %}







", "FOSUserBundle::layoutProfile.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/layoutProfile.html.twig");
    }
}
