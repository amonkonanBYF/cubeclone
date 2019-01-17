<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b232c3fd026fc0037a08155abd33b710fabd954581e79771178bfb0797443094 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("baseForm.html.twig", "FOSUserBundle::layout.html.twig", 2);
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
        $__internal_26df25a60dd3577d0379d2e7b0aa76cd8e3f42a79918986212d3e13e6fe1bc33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26df25a60dd3577d0379d2e7b0aa76cd8e3f42a79918986212d3e13e6fe1bc33->enter($__internal_26df25a60dd3577d0379d2e7b0aa76cd8e3f42a79918986212d3e13e6fe1bc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_ffccde8e55f9a8e3c5e47c024e3b3ae1ffbe91f8b17c8ec7c61896617a44eaeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffccde8e55f9a8e3c5e47c024e3b3ae1ffbe91f8b17c8ec7c61896617a44eaeb->enter($__internal_ffccde8e55f9a8e3c5e47c024e3b3ae1ffbe91f8b17c8ec7c61896617a44eaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26df25a60dd3577d0379d2e7b0aa76cd8e3f42a79918986212d3e13e6fe1bc33->leave($__internal_26df25a60dd3577d0379d2e7b0aa76cd8e3f42a79918986212d3e13e6fe1bc33_prof);

        
        $__internal_ffccde8e55f9a8e3c5e47c024e3b3ae1ffbe91f8b17c8ec7c61896617a44eaeb->leave($__internal_ffccde8e55f9a8e3c5e47c024e3b3ae1ffbe91f8b17c8ec7c61896617a44eaeb_prof);

    }

    // line 5
    public function block_form($context, array $blocks = array())
    {
        $__internal_9160de8dc5a7e78d804ff2c8bd8a3b644d254472220c531aa1e4145b6126707b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9160de8dc5a7e78d804ff2c8bd8a3b644d254472220c531aa1e4145b6126707b->enter($__internal_9160de8dc5a7e78d804ff2c8bd8a3b644d254472220c531aa1e4145b6126707b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_a611d780a733e0ae0d50f6c6c4d6b0f55960db20bd0278853c10713fb7460bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a611d780a733e0ae0d50f6c6c4d6b0f55960db20bd0278853c10713fb7460bbb->enter($__internal_a611d780a733e0ae0d50f6c6c4d6b0f55960db20bd0278853c10713fb7460bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

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
        
        $__internal_a611d780a733e0ae0d50f6c6c4d6b0f55960db20bd0278853c10713fb7460bbb->leave($__internal_a611d780a733e0ae0d50f6c6c4d6b0f55960db20bd0278853c10713fb7460bbb_prof);

        
        $__internal_9160de8dc5a7e78d804ff2c8bd8a3b644d254472220c531aa1e4145b6126707b->leave($__internal_9160de8dc5a7e78d804ff2c8bd8a3b644d254472220c531aa1e4145b6126707b_prof);

    }

    // line 35
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3a850fbd57bade351a3e83de782c97ef1bcaf810e3805817bd1a7c5cf3cc608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a850fbd57bade351a3e83de782c97ef1bcaf810e3805817bd1a7c5cf3cc608->enter($__internal_a3a850fbd57bade351a3e83de782c97ef1bcaf810e3805817bd1a7c5cf3cc608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_588c3294efe1e0ac1f612386dc844407dd1e32e1d53779de74b751d7e50f7fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588c3294efe1e0ac1f612386dc844407dd1e32e1d53779de74b751d7e50f7fa5->enter($__internal_588c3294efe1e0ac1f612386dc844407dd1e32e1d53779de74b751d7e50f7fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 36
        echo "            ";
        
        $__internal_588c3294efe1e0ac1f612386dc844407dd1e32e1d53779de74b751d7e50f7fa5->leave($__internal_588c3294efe1e0ac1f612386dc844407dd1e32e1d53779de74b751d7e50f7fa5_prof);

        
        $__internal_a3a850fbd57bade351a3e83de782c97ef1bcaf810e3805817bd1a7c5cf3cc608->leave($__internal_a3a850fbd57bade351a3e83de782c97ef1bcaf810e3805817bd1a7c5cf3cc608_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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


", "FOSUserBundle::layout.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
