<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a0884b6f078c15924d0a6c228c19cfb7876a60a8da1fe1868aebc9c9300f5a0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a955edbdee0df83658a2104d7ecb0c7a94a1eed5f57c2eb8f372b3e06fe6695a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a955edbdee0df83658a2104d7ecb0c7a94a1eed5f57c2eb8f372b3e06fe6695a->enter($__internal_a955edbdee0df83658a2104d7ecb0c7a94a1eed5f57c2eb8f372b3e06fe6695a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e27120c2a642286bc2db00d90e201492fbe994bef10b7c5ca26e368fd38b0058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27120c2a642286bc2db00d90e201492fbe994bef10b7c5ca26e368fd38b0058->enter($__internal_e27120c2a642286bc2db00d90e201492fbe994bef10b7c5ca26e368fd38b0058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a955edbdee0df83658a2104d7ecb0c7a94a1eed5f57c2eb8f372b3e06fe6695a->leave($__internal_a955edbdee0df83658a2104d7ecb0c7a94a1eed5f57c2eb8f372b3e06fe6695a_prof);

        
        $__internal_e27120c2a642286bc2db00d90e201492fbe994bef10b7c5ca26e368fd38b0058->leave($__internal_e27120c2a642286bc2db00d90e201492fbe994bef10b7c5ca26e368fd38b0058_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a58a693caeed931dbc9022069c05f539c4fc3f067050f9d744e3f1f0b808ca97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a58a693caeed931dbc9022069c05f539c4fc3f067050f9d744e3f1f0b808ca97->enter($__internal_a58a693caeed931dbc9022069c05f539c4fc3f067050f9d744e3f1f0b808ca97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d89a6ffb63d54891bb7556a22fee3d73550c8c9be4ac5150f3e7f4d7c98b3a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89a6ffb63d54891bb7556a22fee3d73550c8c9be4ac5150f3e7f4d7c98b3a76->enter($__internal_d89a6ffb63d54891bb7556a22fee3d73550c8c9be4ac5150f3e7f4d7c98b3a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d89a6ffb63d54891bb7556a22fee3d73550c8c9be4ac5150f3e7f4d7c98b3a76->leave($__internal_d89a6ffb63d54891bb7556a22fee3d73550c8c9be4ac5150f3e7f4d7c98b3a76_prof);

        
        $__internal_a58a693caeed931dbc9022069c05f539c4fc3f067050f9d744e3f1f0b808ca97->leave($__internal_a58a693caeed931dbc9022069c05f539c4fc3f067050f9d744e3f1f0b808ca97_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae9fa3b696802bdf8805b02dd5fbb904528784655b4c91cbacecf6c5cedea001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9fa3b696802bdf8805b02dd5fbb904528784655b4c91cbacecf6c5cedea001->enter($__internal_ae9fa3b696802bdf8805b02dd5fbb904528784655b4c91cbacecf6c5cedea001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_19d87922eb50c229039f1926e7bbb76b926ba49ca09aa7100494d53ed67ca6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d87922eb50c229039f1926e7bbb76b926ba49ca09aa7100494d53ed67ca6c3->enter($__internal_19d87922eb50c229039f1926e7bbb76b926ba49ca09aa7100494d53ed67ca6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_19d87922eb50c229039f1926e7bbb76b926ba49ca09aa7100494d53ed67ca6c3->leave($__internal_19d87922eb50c229039f1926e7bbb76b926ba49ca09aa7100494d53ed67ca6c3_prof);

        
        $__internal_ae9fa3b696802bdf8805b02dd5fbb904528784655b4c91cbacecf6c5cedea001->leave($__internal_ae9fa3b696802bdf8805b02dd5fbb904528784655b4c91cbacecf6c5cedea001_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a10487d8001bc634af5211f0bb22159d59dbfad020c6c1885052ff66880ae5ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10487d8001bc634af5211f0bb22159d59dbfad020c6c1885052ff66880ae5ff->enter($__internal_a10487d8001bc634af5211f0bb22159d59dbfad020c6c1885052ff66880ae5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da877060c1bcf927966b12d6b3391ba5ef724699bc431ab5b5189d1519739b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da877060c1bcf927966b12d6b3391ba5ef724699bc431ab5b5189d1519739b8a->enter($__internal_da877060c1bcf927966b12d6b3391ba5ef724699bc431ab5b5189d1519739b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da877060c1bcf927966b12d6b3391ba5ef724699bc431ab5b5189d1519739b8a->leave($__internal_da877060c1bcf927966b12d6b3391ba5ef724699bc431ab5b5189d1519739b8a_prof);

        
        $__internal_a10487d8001bc634af5211f0bb22159d59dbfad020c6c1885052ff66880ae5ff->leave($__internal_a10487d8001bc634af5211f0bb22159d59dbfad020c6c1885052ff66880ae5ff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
