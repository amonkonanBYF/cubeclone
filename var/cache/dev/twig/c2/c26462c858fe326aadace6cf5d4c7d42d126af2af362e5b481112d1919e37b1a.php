<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_10717e70e4dde1613695948bab2fe778875a051a333a76999a4fb4354d5e0d8b extends Twig_Template
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
        $__internal_757bf323db8499aa097b1ec76bd63d40a62802cd26ccd8b136e58e99442a6755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_757bf323db8499aa097b1ec76bd63d40a62802cd26ccd8b136e58e99442a6755->enter($__internal_757bf323db8499aa097b1ec76bd63d40a62802cd26ccd8b136e58e99442a6755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_9a8ecabe70fd7bd886327b099b66644da86c4ebd64e9993bcf61c1f819aed3ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8ecabe70fd7bd886327b099b66644da86c4ebd64e9993bcf61c1f819aed3ac->enter($__internal_9a8ecabe70fd7bd886327b099b66644da86c4ebd64e9993bcf61c1f819aed3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_757bf323db8499aa097b1ec76bd63d40a62802cd26ccd8b136e58e99442a6755->leave($__internal_757bf323db8499aa097b1ec76bd63d40a62802cd26ccd8b136e58e99442a6755_prof);

        
        $__internal_9a8ecabe70fd7bd886327b099b66644da86c4ebd64e9993bcf61c1f819aed3ac->leave($__internal_9a8ecabe70fd7bd886327b099b66644da86c4ebd64e9993bcf61c1f819aed3ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
