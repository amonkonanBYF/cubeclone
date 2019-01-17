<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_ec560f01d2445d8e59d287ab89be9996623c879ef7cf990e0f783be477b632ba extends Twig_Template
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
        $__internal_cddd3c781a42bbfa49f9be212ca453b1be70a621f549132e64e627298d5cac1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cddd3c781a42bbfa49f9be212ca453b1be70a621f549132e64e627298d5cac1e->enter($__internal_cddd3c781a42bbfa49f9be212ca453b1be70a621f549132e64e627298d5cac1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_c5b8247a0a26c810f24b98858cf27c6e684898ad86e00416e686539a77e394ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b8247a0a26c810f24b98858cf27c6e684898ad86e00416e686539a77e394ab->enter($__internal_c5b8247a0a26c810f24b98858cf27c6e684898ad86e00416e686539a77e394ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_cddd3c781a42bbfa49f9be212ca453b1be70a621f549132e64e627298d5cac1e->leave($__internal_cddd3c781a42bbfa49f9be212ca453b1be70a621f549132e64e627298d5cac1e_prof);

        
        $__internal_c5b8247a0a26c810f24b98858cf27c6e684898ad86e00416e686539a77e394ab->leave($__internal_c5b8247a0a26c810f24b98858cf27c6e684898ad86e00416e686539a77e394ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
", "TwigBundle:Exception:error.xml.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
