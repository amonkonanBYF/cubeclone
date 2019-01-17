<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e47a7f33666278a95e907e1a9dc0e908d70956eda8ea729d7f3e3eb654ac250f extends Twig_Template
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
        $__internal_e1486867944dd0b8a6b1fdc5a6b9f040ede8748cd14a32ecfacd816417f1517e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1486867944dd0b8a6b1fdc5a6b9f040ede8748cd14a32ecfacd816417f1517e->enter($__internal_e1486867944dd0b8a6b1fdc5a6b9f040ede8748cd14a32ecfacd816417f1517e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_6619a5591ebac0b26f55480fce076140c2d7b0e6096e64b6539d2e5f8bb4bb53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6619a5591ebac0b26f55480fce076140c2d7b0e6096e64b6539d2e5f8bb4bb53->enter($__internal_6619a5591ebac0b26f55480fce076140c2d7b0e6096e64b6539d2e5f8bb4bb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e1486867944dd0b8a6b1fdc5a6b9f040ede8748cd14a32ecfacd816417f1517e->leave($__internal_e1486867944dd0b8a6b1fdc5a6b9f040ede8748cd14a32ecfacd816417f1517e_prof);

        
        $__internal_6619a5591ebac0b26f55480fce076140c2d7b0e6096e64b6539d2e5f8bb4bb53->leave($__internal_6619a5591ebac0b26f55480fce076140c2d7b0e6096e64b6539d2e5f8bb4bb53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
