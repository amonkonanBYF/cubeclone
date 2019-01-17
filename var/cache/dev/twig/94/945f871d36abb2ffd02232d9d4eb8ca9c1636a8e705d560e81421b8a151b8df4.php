<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_790f15cfabfde6a4515d4566c56690ab968508ab86c94d5f7b397677139081f9 extends Twig_Template
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
        $__internal_07f23636aeab1fd0d7175e4f988795f95cdcafaf7c5562592f4ef606a9d96ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f23636aeab1fd0d7175e4f988795f95cdcafaf7c5562592f4ef606a9d96ddf->enter($__internal_07f23636aeab1fd0d7175e4f988795f95cdcafaf7c5562592f4ef606a9d96ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_c3d94215866d4b612dc28872d49670877403d064086b9583e443996b43c12628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d94215866d4b612dc28872d49670877403d064086b9583e443996b43c12628->enter($__internal_c3d94215866d4b612dc28872d49670877403d064086b9583e443996b43c12628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_07f23636aeab1fd0d7175e4f988795f95cdcafaf7c5562592f4ef606a9d96ddf->leave($__internal_07f23636aeab1fd0d7175e4f988795f95cdcafaf7c5562592f4ef606a9d96ddf_prof);

        
        $__internal_c3d94215866d4b612dc28872d49670877403d064086b9583e443996b43c12628->leave($__internal_c3d94215866d4b612dc28872d49670877403d064086b9583e443996b43c12628_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
