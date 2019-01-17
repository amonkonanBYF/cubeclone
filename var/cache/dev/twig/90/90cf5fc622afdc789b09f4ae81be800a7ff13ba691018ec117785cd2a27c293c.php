<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_33727356872726efe1c610ed9d3acd7eed028a45157b20cc4d3ac9278833493f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c418d308efbcc193e6617e191fc31d793925e799e3008e214aef6b1882d8b68c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c418d308efbcc193e6617e191fc31d793925e799e3008e214aef6b1882d8b68c->enter($__internal_c418d308efbcc193e6617e191fc31d793925e799e3008e214aef6b1882d8b68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3b4b9802f561359a049dee11e5958c138dabdf733a8349b2b323be29ee1e5da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4b9802f561359a049dee11e5958c138dabdf733a8349b2b323be29ee1e5da3->enter($__internal_3b4b9802f561359a049dee11e5958c138dabdf733a8349b2b323be29ee1e5da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c418d308efbcc193e6617e191fc31d793925e799e3008e214aef6b1882d8b68c->leave($__internal_c418d308efbcc193e6617e191fc31d793925e799e3008e214aef6b1882d8b68c_prof);

        
        $__internal_3b4b9802f561359a049dee11e5958c138dabdf733a8349b2b323be29ee1e5da3->leave($__internal_3b4b9802f561359a049dee11e5958c138dabdf733a8349b2b323be29ee1e5da3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33be3a557be97685c9e9c263da807a089bcc96f255504cb420f08a2dbf7f3068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33be3a557be97685c9e9c263da807a089bcc96f255504cb420f08a2dbf7f3068->enter($__internal_33be3a557be97685c9e9c263da807a089bcc96f255504cb420f08a2dbf7f3068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_24a897cb6b8bbc32c82cd9de06c14a42e04435125253fa8452d7bf05be3d662a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a897cb6b8bbc32c82cd9de06c14a42e04435125253fa8452d7bf05be3d662a->enter($__internal_24a897cb6b8bbc32c82cd9de06c14a42e04435125253fa8452d7bf05be3d662a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_24a897cb6b8bbc32c82cd9de06c14a42e04435125253fa8452d7bf05be3d662a->leave($__internal_24a897cb6b8bbc32c82cd9de06c14a42e04435125253fa8452d7bf05be3d662a_prof);

        
        $__internal_33be3a557be97685c9e9c263da807a089bcc96f255504cb420f08a2dbf7f3068->leave($__internal_33be3a557be97685c9e9c263da807a089bcc96f255504cb420f08a2dbf7f3068_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf0a597c371dd058f521092f9d9cca7d74c16711ee647829de495581820e7710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0a597c371dd058f521092f9d9cca7d74c16711ee647829de495581820e7710->enter($__internal_bf0a597c371dd058f521092f9d9cca7d74c16711ee647829de495581820e7710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dfa80e12187a01f72d917627fb34f75ee6fce177f1e426be4ceafcf57171b47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa80e12187a01f72d917627fb34f75ee6fce177f1e426be4ceafcf57171b47a->enter($__internal_dfa80e12187a01f72d917627fb34f75ee6fce177f1e426be4ceafcf57171b47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dfa80e12187a01f72d917627fb34f75ee6fce177f1e426be4ceafcf57171b47a->leave($__internal_dfa80e12187a01f72d917627fb34f75ee6fce177f1e426be4ceafcf57171b47a_prof);

        
        $__internal_bf0a597c371dd058f521092f9d9cca7d74c16711ee647829de495581820e7710->leave($__internal_bf0a597c371dd058f521092f9d9cca7d74c16711ee647829de495581820e7710_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_919f85487f195327f3005ebbeaf96addb6eff66dcf6a4c90acf3388fd2348199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919f85487f195327f3005ebbeaf96addb6eff66dcf6a4c90acf3388fd2348199->enter($__internal_919f85487f195327f3005ebbeaf96addb6eff66dcf6a4c90acf3388fd2348199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_82441072ec33abe7d26f1e3d069ceceb30c7a6117cd37268d037b7f56951124b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82441072ec33abe7d26f1e3d069ceceb30c7a6117cd37268d037b7f56951124b->enter($__internal_82441072ec33abe7d26f1e3d069ceceb30c7a6117cd37268d037b7f56951124b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_82441072ec33abe7d26f1e3d069ceceb30c7a6117cd37268d037b7f56951124b->leave($__internal_82441072ec33abe7d26f1e3d069ceceb30c7a6117cd37268d037b7f56951124b_prof);

        
        $__internal_919f85487f195327f3005ebbeaf96addb6eff66dcf6a4c90acf3388fd2348199->leave($__internal_919f85487f195327f3005ebbeaf96addb6eff66dcf6a4c90acf3388fd2348199_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
