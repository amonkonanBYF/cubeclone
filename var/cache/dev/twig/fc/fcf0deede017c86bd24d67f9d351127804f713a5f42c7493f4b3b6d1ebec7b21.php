<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_8f2d9ae057f0cfd2b48075d80c12d22c2107139cac04d734afac7555a37e4d4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bcb271061bba9d3a08342e1c065f5fe6c0a989ed2d0cf7463768f9feddf2e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bcb271061bba9d3a08342e1c065f5fe6c0a989ed2d0cf7463768f9feddf2e3d->enter($__internal_0bcb271061bba9d3a08342e1c065f5fe6c0a989ed2d0cf7463768f9feddf2e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_72172044d88ed5d36601416d57686d1ee0fb5bf22833a44f072873ba77a1f871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72172044d88ed5d36601416d57686d1ee0fb5bf22833a44f072873ba77a1f871->enter($__internal_72172044d88ed5d36601416d57686d1ee0fb5bf22833a44f072873ba77a1f871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bcb271061bba9d3a08342e1c065f5fe6c0a989ed2d0cf7463768f9feddf2e3d->leave($__internal_0bcb271061bba9d3a08342e1c065f5fe6c0a989ed2d0cf7463768f9feddf2e3d_prof);

        
        $__internal_72172044d88ed5d36601416d57686d1ee0fb5bf22833a44f072873ba77a1f871->leave($__internal_72172044d88ed5d36601416d57686d1ee0fb5bf22833a44f072873ba77a1f871_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ccddc566f89f5b8c6f2ddfe977b1641da22631d6117cd21d4b68aa0b2a6e96c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ccddc566f89f5b8c6f2ddfe977b1641da22631d6117cd21d4b68aa0b2a6e96c->enter($__internal_8ccddc566f89f5b8c6f2ddfe977b1641da22631d6117cd21d4b68aa0b2a6e96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0473382615b42df0c2825d8027d219014c628ea030427def7546c73fbd576eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0473382615b42df0c2825d8027d219014c628ea030427def7546c73fbd576eb1->enter($__internal_0473382615b42df0c2825d8027d219014c628ea030427def7546c73fbd576eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0473382615b42df0c2825d8027d219014c628ea030427def7546c73fbd576eb1->leave($__internal_0473382615b42df0c2825d8027d219014c628ea030427def7546c73fbd576eb1_prof);

        
        $__internal_8ccddc566f89f5b8c6f2ddfe977b1641da22631d6117cd21d4b68aa0b2a6e96c->leave($__internal_8ccddc566f89f5b8c6f2ddfe977b1641da22631d6117cd21d4b68aa0b2a6e96c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bfd7aa48f0a8a5b6106b5cb5c17ad4c9d4ee22254a46ab1cc4da954ae16f024f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd7aa48f0a8a5b6106b5cb5c17ad4c9d4ee22254a46ab1cc4da954ae16f024f->enter($__internal_bfd7aa48f0a8a5b6106b5cb5c17ad4c9d4ee22254a46ab1cc4da954ae16f024f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_83d69951a25fc86ed6b8c51c8f02e0627fe092b2ddcb6f989dcfa47fe5d50fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d69951a25fc86ed6b8c51c8f02e0627fe092b2ddcb6f989dcfa47fe5d50fc0->enter($__internal_83d69951a25fc86ed6b8c51c8f02e0627fe092b2ddcb6f989dcfa47fe5d50fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_83d69951a25fc86ed6b8c51c8f02e0627fe092b2ddcb6f989dcfa47fe5d50fc0->leave($__internal_83d69951a25fc86ed6b8c51c8f02e0627fe092b2ddcb6f989dcfa47fe5d50fc0_prof);

        
        $__internal_bfd7aa48f0a8a5b6106b5cb5c17ad4c9d4ee22254a46ab1cc4da954ae16f024f->leave($__internal_bfd7aa48f0a8a5b6106b5cb5c17ad4c9d4ee22254a46ab1cc4da954ae16f024f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0bfc75ee29541cfe511c75a827fce542f7f9374df2096ea0d88d79ee1f8a74e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bfc75ee29541cfe511c75a827fce542f7f9374df2096ea0d88d79ee1f8a74e8->enter($__internal_0bfc75ee29541cfe511c75a827fce542f7f9374df2096ea0d88d79ee1f8a74e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6fcce825b37a84d79b431bee8940606fc5008823bf3f081d49b7b91a47542568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fcce825b37a84d79b431bee8940606fc5008823bf3f081d49b7b91a47542568->enter($__internal_6fcce825b37a84d79b431bee8940606fc5008823bf3f081d49b7b91a47542568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6fcce825b37a84d79b431bee8940606fc5008823bf3f081d49b7b91a47542568->leave($__internal_6fcce825b37a84d79b431bee8940606fc5008823bf3f081d49b7b91a47542568_prof);

        
        $__internal_0bfc75ee29541cfe511c75a827fce542f7f9374df2096ea0d88d79ee1f8a74e8->leave($__internal_0bfc75ee29541cfe511c75a827fce542f7f9374df2096ea0d88d79ee1f8a74e8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
