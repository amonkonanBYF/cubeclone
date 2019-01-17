<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_b179d830874389d635a339cc87e3b8d09689ff77a2384be93946df1af0ee330f extends Twig_Template
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
        $__internal_c61eb716275ea713b23d6d69cf6f48242e0505db65e35e42d167dfe9efcdb2f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61eb716275ea713b23d6d69cf6f48242e0505db65e35e42d167dfe9efcdb2f0->enter($__internal_c61eb716275ea713b23d6d69cf6f48242e0505db65e35e42d167dfe9efcdb2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_a4050e3ce35fbc2b2e7ce98ebb6d7134e1fb7a63fe7a84e5c3dd3d931522f84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4050e3ce35fbc2b2e7ce98ebb6d7134e1fb7a63fe7a84e5c3dd3d931522f84e->enter($__internal_a4050e3ce35fbc2b2e7ce98ebb6d7134e1fb7a63fe7a84e5c3dd3d931522f84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c61eb716275ea713b23d6d69cf6f48242e0505db65e35e42d167dfe9efcdb2f0->leave($__internal_c61eb716275ea713b23d6d69cf6f48242e0505db65e35e42d167dfe9efcdb2f0_prof);

        
        $__internal_a4050e3ce35fbc2b2e7ce98ebb6d7134e1fb7a63fe7a84e5c3dd3d931522f84e->leave($__internal_a4050e3ce35fbc2b2e7ce98ebb6d7134e1fb7a63fe7a84e5c3dd3d931522f84e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
