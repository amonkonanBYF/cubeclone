<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e4cdfb6cc83c59090c82f77816c237694f97bb202e4656d04f174aca8b7958db extends Twig_Template
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
        $__internal_bf53df8f5859449d57547b9a61ab96ea078534e0fe89614de7bea61b08bc1145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf53df8f5859449d57547b9a61ab96ea078534e0fe89614de7bea61b08bc1145->enter($__internal_bf53df8f5859449d57547b9a61ab96ea078534e0fe89614de7bea61b08bc1145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ea13adeb546ce90c174b53983bd523430e16af685adac0f4cf115fabf138b73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea13adeb546ce90c174b53983bd523430e16af685adac0f4cf115fabf138b73e->enter($__internal_ea13adeb546ce90c174b53983bd523430e16af685adac0f4cf115fabf138b73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_bf53df8f5859449d57547b9a61ab96ea078534e0fe89614de7bea61b08bc1145->leave($__internal_bf53df8f5859449d57547b9a61ab96ea078534e0fe89614de7bea61b08bc1145_prof);

        
        $__internal_ea13adeb546ce90c174b53983bd523430e16af685adac0f4cf115fabf138b73e->leave($__internal_ea13adeb546ce90c174b53983bd523430e16af685adac0f4cf115fabf138b73e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
