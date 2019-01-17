<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_80066e07492c5b29241911c3f9f6b2aeb9e45816969a125a5eca17b0129371b9 extends Twig_Template
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
        $__internal_994d1ac436e8c1402dba1bd1722cefac2bb61fdd4094b1d45c1c358422856bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994d1ac436e8c1402dba1bd1722cefac2bb61fdd4094b1d45c1c358422856bff->enter($__internal_994d1ac436e8c1402dba1bd1722cefac2bb61fdd4094b1d45c1c358422856bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_f4707411c502c09d1d3a009dbd8b6a97caa47271c5057d67c1ca9cd71760a88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4707411c502c09d1d3a009dbd8b6a97caa47271c5057d67c1ca9cd71760a88f->enter($__internal_f4707411c502c09d1d3a009dbd8b6a97caa47271c5057d67c1ca9cd71760a88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_994d1ac436e8c1402dba1bd1722cefac2bb61fdd4094b1d45c1c358422856bff->leave($__internal_994d1ac436e8c1402dba1bd1722cefac2bb61fdd4094b1d45c1c358422856bff_prof);

        
        $__internal_f4707411c502c09d1d3a009dbd8b6a97caa47271c5057d67c1ca9cd71760a88f->leave($__internal_f4707411c502c09d1d3a009dbd8b6a97caa47271c5057d67c1ca9cd71760a88f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
