<?php

/* default/info.html.twig */
class __TwigTemplate_ee31c93ab24afdd2a75c8443a4bff870d92ff415845d408392bde1ce9d33e57b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/baseInfoTemplate.html.twig", "default/info.html.twig", 1);
        $this->blocks = array(
            'info' => array($this, 'block_info'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/baseInfoTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8485924f1456e6db0545f247d438265f795770888af9498132b3e8ccfcdf0081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8485924f1456e6db0545f247d438265f795770888af9498132b3e8ccfcdf0081->enter($__internal_8485924f1456e6db0545f247d438265f795770888af9498132b3e8ccfcdf0081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/info.html.twig"));

        $__internal_a4b4fec7f26561de32bd63575ef4594eed375e3b8ac46f36a7731f0dccec124c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b4fec7f26561de32bd63575ef4594eed375e3b8ac46f36a7731f0dccec124c->enter($__internal_a4b4fec7f26561de32bd63575ef4594eed375e3b8ac46f36a7731f0dccec124c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8485924f1456e6db0545f247d438265f795770888af9498132b3e8ccfcdf0081->leave($__internal_8485924f1456e6db0545f247d438265f795770888af9498132b3e8ccfcdf0081_prof);

        
        $__internal_a4b4fec7f26561de32bd63575ef4594eed375e3b8ac46f36a7731f0dccec124c->leave($__internal_a4b4fec7f26561de32bd63575ef4594eed375e3b8ac46f36a7731f0dccec124c_prof);

    }

    // line 3
    public function block_info($context, array $blocks = array())
    {
        $__internal_4f1ffd317756dcfe7ef26c2d707792285d2e1d38e0eac0f75b9b41b89b850b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f1ffd317756dcfe7ef26c2d707792285d2e1d38e0eac0f75b9b41b89b850b9b->enter($__internal_4f1ffd317756dcfe7ef26c2d707792285d2e1d38e0eac0f75b9b41b89b850b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "info"));

        $__internal_140ea47e6fb6826f40e18cd06d4e350029237deb93b3032492ca3e37ed64a33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140ea47e6fb6826f40e18cd06d4e350029237deb93b3032492ca3e37ed64a33c->enter($__internal_140ea47e6fb6826f40e18cd06d4e350029237deb93b3032492ca3e37ed64a33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "info"));

        // line 4
        echo "<p> Nous sommes une start-up crée en 2017 par Brin Yao Fabien Amonkonan étudiant en master 1 à Efficom Lille.<br />
 Notre objectif est de permettre au indépendant de pouvoir faire des missions d'entréprise. </p>
";
        
        $__internal_140ea47e6fb6826f40e18cd06d4e350029237deb93b3032492ca3e37ed64a33c->leave($__internal_140ea47e6fb6826f40e18cd06d4e350029237deb93b3032492ca3e37ed64a33c_prof);

        
        $__internal_4f1ffd317756dcfe7ef26c2d707792285d2e1d38e0eac0f75b9b41b89b850b9b->leave($__internal_4f1ffd317756dcfe7ef26c2d707792285d2e1d38e0eac0f75b9b41b89b850b9b_prof);

    }

    public function getTemplateName()
    {
        return "default/info.html.twig";
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
        return new Twig_Source("{% extends 'default/baseInfoTemplate.html.twig' %}

{% block info %}
<p> Nous sommes une start-up crée en 2017 par Brin Yao Fabien Amonkonan étudiant en master 1 à Efficom Lille.<br />
 Notre objectif est de permettre au indépendant de pouvoir faire des missions d'entréprise. </p>
{% endblock %}
", "default/info.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\views\\default\\info.html.twig");
    }
}
