<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_1ea11146c7f902620f5f9e825cfcd8d2d01d1660c3e5e59ce27a2aae5f1f025a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("baseForm.html.twig", "@FOSUser/layout.html.twig", 2);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseForm.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c89f5382d11b6429228804786b7fb9e8d56d57316f1063d85d718518a8db0900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c89f5382d11b6429228804786b7fb9e8d56d57316f1063d85d718518a8db0900->enter($__internal_c89f5382d11b6429228804786b7fb9e8d56d57316f1063d85d718518a8db0900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_f2b639eb750ecf58fd3d3adf49a90aba0b682b27441424c16ead5ba96f10e8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b639eb750ecf58fd3d3adf49a90aba0b682b27441424c16ead5ba96f10e8f1->enter($__internal_f2b639eb750ecf58fd3d3adf49a90aba0b682b27441424c16ead5ba96f10e8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c89f5382d11b6429228804786b7fb9e8d56d57316f1063d85d718518a8db0900->leave($__internal_c89f5382d11b6429228804786b7fb9e8d56d57316f1063d85d718518a8db0900_prof);

        
        $__internal_f2b639eb750ecf58fd3d3adf49a90aba0b682b27441424c16ead5ba96f10e8f1->leave($__internal_f2b639eb750ecf58fd3d3adf49a90aba0b682b27441424c16ead5ba96f10e8f1_prof);

    }

    // line 5
    public function block_form($context, array $blocks = array())
    {
        $__internal_d4a5ec6af8ba5f9940a0248fe0183c4a3301ebc46e9ada831a14276ee40e63b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a5ec6af8ba5f9940a0248fe0183c4a3301ebc46e9ada831a14276ee40e63b6->enter($__internal_d4a5ec6af8ba5f9940a0248fe0183c4a3301ebc46e9ada831a14276ee40e63b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_6433ae896de404566d72c4f3b37892d72de8f99337ca600b3f298cee37700262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6433ae896de404566d72c4f3b37892d72de8f99337ca600b3f298cee37700262->enter($__internal_6433ae896de404566d72c4f3b37892d72de8f99337ca600b3f298cee37700262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 6
        echo "






        <div>
            ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 20
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 22
        echo "        </div>

        ";
        // line 24
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 25
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 26
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 27
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 28
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        ";
        }
        // line 33
        echo "
        <div>
            ";
        // line 35
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 37
        echo "        </div>



";
        
        $__internal_6433ae896de404566d72c4f3b37892d72de8f99337ca600b3f298cee37700262->leave($__internal_6433ae896de404566d72c4f3b37892d72de8f99337ca600b3f298cee37700262_prof);

        
        $__internal_d4a5ec6af8ba5f9940a0248fe0183c4a3301ebc46e9ada831a14276ee40e63b6->leave($__internal_d4a5ec6af8ba5f9940a0248fe0183c4a3301ebc46e9ada831a14276ee40e63b6_prof);

    }

    // line 35
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c0b62d7a09cf1f7076925c68ac5252ed0edc7b4eb55302438ce9639ad448622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0b62d7a09cf1f7076925c68ac5252ed0edc7b4eb55302438ce9639ad448622->enter($__internal_1c0b62d7a09cf1f7076925c68ac5252ed0edc7b4eb55302438ce9639ad448622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_738f4bc5ad7ed73813b5187da090c99e637970e75cb96489795100ab38fee6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738f4bc5ad7ed73813b5187da090c99e637970e75cb96489795100ab38fee6ef->enter($__internal_738f4bc5ad7ed73813b5187da090c99e637970e75cb96489795100ab38fee6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 36
        echo "            ";
        
        $__internal_738f4bc5ad7ed73813b5187da090c99e637970e75cb96489795100ab38fee6ef->leave($__internal_738f4bc5ad7ed73813b5187da090c99e637970e75cb96489795100ab38fee6ef_prof);

        
        $__internal_1c0b62d7a09cf1f7076925c68ac5252ed0edc7b4eb55302438ce9639ad448622->leave($__internal_1c0b62d7a09cf1f7076925c68ac5252ed0edc7b4eb55302438ce9639ad448622_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 36,  144 => 35,  130 => 37,  128 => 35,  124 => 33,  121 => 32,  115 => 31,  106 => 28,  101 => 27,  96 => 26,  91 => 25,  89 => 24,  85 => 22,  77 => 20,  71 => 17,  67 => 16,  62 => 15,  60 => 14,  50 => 6,  41 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{%extends 'baseForm.html.twig'%}


{% block form %}







        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>



{% endblock %}


", "@FOSUser/layout.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
