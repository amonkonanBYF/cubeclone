<?php

/* @FOSUser/layoutProfile.html.twig */
class __TwigTemplate_35c91cc87fc6f913bec34a81542e64447626f23b61f07db96d7c22d156b7284d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseProfile.html.twig", "@FOSUser/layoutProfile.html.twig", 1);
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
        $__internal_d874a8128cf74733f59f3675cadcc40654a8f2198bb6e4630e87b169e8b89e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d874a8128cf74733f59f3675cadcc40654a8f2198bb6e4630e87b169e8b89e76->enter($__internal_d874a8128cf74733f59f3675cadcc40654a8f2198bb6e4630e87b169e8b89e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layoutProfile.html.twig"));

        $__internal_41fe46db20da63c53003672e13f27edb3dd102096821b01c8cc11c97b92418ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41fe46db20da63c53003672e13f27edb3dd102096821b01c8cc11c97b92418ad->enter($__internal_41fe46db20da63c53003672e13f27edb3dd102096821b01c8cc11c97b92418ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layoutProfile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d874a8128cf74733f59f3675cadcc40654a8f2198bb6e4630e87b169e8b89e76->leave($__internal_d874a8128cf74733f59f3675cadcc40654a8f2198bb6e4630e87b169e8b89e76_prof);

        
        $__internal_41fe46db20da63c53003672e13f27edb3dd102096821b01c8cc11c97b92418ad->leave($__internal_41fe46db20da63c53003672e13f27edb3dd102096821b01c8cc11c97b92418ad_prof);

    }

    // line 3
    public function block_info($context, array $blocks = array())
    {
        $__internal_d536979b73666849a5739ad472f692391739ac055d81f3de226f8b479c6ad3d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d536979b73666849a5739ad472f692391739ac055d81f3de226f8b479c6ad3d3->enter($__internal_d536979b73666849a5739ad472f692391739ac055d81f3de226f8b479c6ad3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "info"));

        $__internal_6a1ce30c114865ef3d5ae9875f1f22c950aabb79faa220e371fea92be8360cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1ce30c114865ef3d5ae9875f1f22c950aabb79faa220e371fea92be8360cc4->enter($__internal_6a1ce30c114865ef3d5ae9875f1f22c950aabb79faa220e371fea92be8360cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "info"));

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
        
        $__internal_6a1ce30c114865ef3d5ae9875f1f22c950aabb79faa220e371fea92be8360cc4->leave($__internal_6a1ce30c114865ef3d5ae9875f1f22c950aabb79faa220e371fea92be8360cc4_prof);

        
        $__internal_d536979b73666849a5739ad472f692391739ac055d81f3de226f8b479c6ad3d3->leave($__internal_d536979b73666849a5739ad472f692391739ac055d81f3de226f8b479c6ad3d3_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_277f3ebe087fa4c515e3388ee47efcab56b5539f3718485b379043b12e19616b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_277f3ebe087fa4c515e3388ee47efcab56b5539f3718485b379043b12e19616b->enter($__internal_277f3ebe087fa4c515e3388ee47efcab56b5539f3718485b379043b12e19616b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b8188ccf55e794a8b2f2bf91deded92a16496e3950eb77f3ccbc2d6912486fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8188ccf55e794a8b2f2bf91deded92a16496e3950eb77f3ccbc2d6912486fe2->enter($__internal_b8188ccf55e794a8b2f2bf91deded92a16496e3950eb77f3ccbc2d6912486fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "           ";
        
        $__internal_b8188ccf55e794a8b2f2bf91deded92a16496e3950eb77f3ccbc2d6912486fe2->leave($__internal_b8188ccf55e794a8b2f2bf91deded92a16496e3950eb77f3ccbc2d6912486fe2_prof);

        
        $__internal_277f3ebe087fa4c515e3388ee47efcab56b5539f3718485b379043b12e19616b->leave($__internal_277f3ebe087fa4c515e3388ee47efcab56b5539f3718485b379043b12e19616b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layoutProfile.html.twig";
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







", "@FOSUser/layoutProfile.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\layoutProfile.html.twig");
    }
}
