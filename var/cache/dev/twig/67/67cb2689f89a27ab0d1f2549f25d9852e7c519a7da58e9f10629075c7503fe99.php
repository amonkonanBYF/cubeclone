<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1b42e1ddf6e8daf54f9259d32cd91c1db360d84456bec3fde5d27218bd2bc2ab extends Twig_Template
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
        $__internal_cd8a375a7c770dbc66e4b9ed8db241ac2ba18317934bfd9fb26b379476b3b352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8a375a7c770dbc66e4b9ed8db241ac2ba18317934bfd9fb26b379476b3b352->enter($__internal_cd8a375a7c770dbc66e4b9ed8db241ac2ba18317934bfd9fb26b379476b3b352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_479179a4f182cdb4ee34c0c87445061c44c69f11e6e8db5f31ea243aae26c2f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479179a4f182cdb4ee34c0c87445061c44c69f11e6e8db5f31ea243aae26c2f3->enter($__internal_479179a4f182cdb4ee34c0c87445061c44c69f11e6e8db5f31ea243aae26c2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_cd8a375a7c770dbc66e4b9ed8db241ac2ba18317934bfd9fb26b379476b3b352->leave($__internal_cd8a375a7c770dbc66e4b9ed8db241ac2ba18317934bfd9fb26b379476b3b352_prof);

        
        $__internal_479179a4f182cdb4ee34c0c87445061c44c69f11e6e8db5f31ea243aae26c2f3->leave($__internal_479179a4f182cdb4ee34c0c87445061c44c69f11e6e8db5f31ea243aae26c2f3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
