<?php

/* default/baseContact.html.twig */
class __TwigTemplate_6bfe98bbf73529d1a5914936d658954fb9d66d6d28247ca26764369d3e54e468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2ea84b4d4491aa706ca1d0024cc5884f4742a9873a93698a62bf10b17213df8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ea84b4d4491aa706ca1d0024cc5884f4742a9873a93698a62bf10b17213df8->enter($__internal_d2ea84b4d4491aa706ca1d0024cc5884f4742a9873a93698a62bf10b17213df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/baseContact.html.twig"));

        $__internal_5936c156856dcb3a7903f59047025573a89fb09b914d736a6a53a88ecedc62c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5936c156856dcb3a7903f59047025573a89fb09b914d736a6a53a88ecedc62c9->enter($__internal_5936c156856dcb3a7903f59047025573a89fb09b914d736a6a53a88ecedc62c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/baseContact.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<!--
    Dopetrope by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
        ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 55
        echo "




                    </div>
                </div>
                      <section id=\"contact\" class=\"four\">
                                <div class=\"container\">

                                  <header>
                                    <h2>Contact</h2>
                                  </header>

                                  <!--<p>Elementum sem parturient nulla quam placerat viverra
                                  mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia
                                  donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc
                                  orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>-->

                                  <form method=\"post\" action=\"#\">
                                    <div class=\"row\">
                                      <div class=\"6u 12u\$(mobile)\"><input type=\"text\" name=\"name\" placeholder=\"Name\" /></div>
                                      <div class=\"6u\$ 12u\$(mobile)\"><input type=\"text\" name=\"email\" placeholder=\"Email\" /></div>
                                      <div class=\"12u\$\">
                                        <textarea name=\"message\" placeholder=\"Message\"></textarea>
                                      </div>
                                      <div class=\"12u\$\">
                                        <input type=\"submit\" value=\"Send Message\" />
                                      </div>
                                    </div>
                                  </form>

                                </div>
                      </section>

    <!-- Scripts -->
            <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/jquery.dropotron.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/skel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/skel-viewport.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/util.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/ie/respond.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/main.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
        
        $__internal_d2ea84b4d4491aa706ca1d0024cc5884f4742a9873a93698a62bf10b17213df8->leave($__internal_d2ea84b4d4491aa706ca1d0024cc5884f4742a9873a93698a62bf10b17213df8_prof);

        
        $__internal_5936c156856dcb3a7903f59047025573a89fb09b914d736a6a53a88ecedc62c9->leave($__internal_5936c156856dcb3a7903f59047025573a89fb09b914d736a6a53a88ecedc62c9_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_e97035d3a15b987266080b67da3e230e5d0ee96ff5a8bbcc3e3cb6757a324f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97035d3a15b987266080b67da3e230e5d0ee96ff5a8bbcc3e3cb6757a324f63->enter($__internal_e97035d3a15b987266080b67da3e230e5d0ee96ff5a8bbcc3e3cb6757a324f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a63d61068e35741864b8bfbe918e59a1aebdd2b06f2a4a6c5259692cccd97a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63d61068e35741864b8bfbe918e59a1aebdd2b06f2a4a6c5259692cccd97a5f->enter($__internal_a63d61068e35741864b8bfbe918e59a1aebdd2b06f2a4a6c5259692cccd97a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "
    <head>
        <title>CodeCube.com</title>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <script src=\"assets/js/ie/html5shiv.js\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/css/main.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/css/ie8.css"), "html", null, true);
        echo "\" />
    </head>
<body>
<!-- Header -->
                <div id=\"header-wrapper\">
                    <div id=\"header\">

                        <!-- Logo -->
                            <h1><a href=\"#\">CodeCube</a></h1>

                        <!-- Nav -->
                            <nav id=\"nav\">
                                <ul>
                                    <li ><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
                                    <li>
                                        <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("missions_path");
        echo "\">Missions </a>

                                    </li>
                                    <li ><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("info_path");
        echo "\">Qui Sommes nous</a></li>
                                    <li class=\"current\"><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_path");
        echo "\">Nous Contacter</a></li>
                                    <!--<li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Mon Compte</a></li>-->


                                    <li>

                                        ";
        // line 41
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 42
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                            <a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                                ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                            </a>
                                        ";
        } else {
            // line 47
            echo "                                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                        ";
        }
        // line 49
        echo "

                                    </li>
                                </ul>
                            </nav>
            ";
        
        $__internal_a63d61068e35741864b8bfbe918e59a1aebdd2b06f2a4a6c5259692cccd97a5f->leave($__internal_a63d61068e35741864b8bfbe918e59a1aebdd2b06f2a4a6c5259692cccd97a5f_prof);

        
        $__internal_e97035d3a15b987266080b67da3e230e5d0ee96ff5a8bbcc3e3cb6757a324f63->leave($__internal_e97035d3a15b987266080b67da3e230e5d0ee96ff5a8bbcc3e3cb6757a324f63_prof);

    }

    public function getTemplateName()
    {
        return "default/baseContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 49,  195 => 47,  189 => 44,  185 => 43,  180 => 42,  178 => 41,  170 => 36,  166 => 35,  162 => 34,  156 => 31,  151 => 29,  135 => 16,  131 => 15,  123 => 9,  114 => 8,  99 => 97,  95 => 96,  91 => 95,  87 => 94,  83 => 93,  79 => 92,  75 => 91,  37 => 55,  35 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<!--
    Dopetrope by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
        {% block head %}

    <head>
        <title>CodeCube.com</title>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <script src=\"assets/js/ie/html5shiv.js\"></script>
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/template/assets/css/main.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/template/assets/css/ie8.css') }}\" />
    </head>
<body>
<!-- Header -->
                <div id=\"header-wrapper\">
                    <div id=\"header\">

                        <!-- Logo -->
                            <h1><a href=\"#\">CodeCube</a></h1>

                        <!-- Nav -->
                            <nav id=\"nav\">
                                <ul>
                                    <li ><a href=\"{{ path('homepage') }}\">Accueil</a></li>
                                    <li>
                                        <a href=\"{{ path('missions_path') }}\">Missions </a>

                                    </li>
                                    <li ><a href=\"{{path('info_path') }}\">Qui Sommes nous</a></li>
                                    <li class=\"current\"><a href=\"{{path('contact_path')}}\">Nous Contacter</a></li>
                                    <!--<li><a href=\"{{ path('fos_user_security_login') }}\">Mon Compte</a></li>-->


                                    <li>

                                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                                            <a href=\"{{ path('fos_user_security_logout') }}\">
                                                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                                            </a>
                                        {% else %}
                                            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                                        {% endif %}


                                    </li>
                                </ul>
                            </nav>
            {% endblock %}





                    </div>
                </div>
                      <section id=\"contact\" class=\"four\">
                                <div class=\"container\">

                                  <header>
                                    <h2>Contact</h2>
                                  </header>

                                  <!--<p>Elementum sem parturient nulla quam placerat viverra
                                  mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia
                                  donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc
                                  orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>-->

                                  <form method=\"post\" action=\"#\">
                                    <div class=\"row\">
                                      <div class=\"6u 12u\$(mobile)\"><input type=\"text\" name=\"name\" placeholder=\"Name\" /></div>
                                      <div class=\"6u\$ 12u\$(mobile)\"><input type=\"text\" name=\"email\" placeholder=\"Email\" /></div>
                                      <div class=\"12u\$\">
                                        <textarea name=\"message\" placeholder=\"Message\"></textarea>
                                      </div>
                                      <div class=\"12u\$\">
                                        <input type=\"submit\" value=\"Send Message\" />
                                      </div>
                                    </div>
                                  </form>

                                </div>
                      </section>

    <!-- Scripts -->
            <script src=\"{{ asset('bundles/template/assets/js/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/template/assets/js/jquery.dropotron.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/template/assets/js/skel.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/template/assets/js/skel-viewport.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/template/assets/js/util.js') }}\"></script>
            <script src=\"{{ asset('bundles/template/assets/js/ie/respond.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/template/assets/js/main.js') }}\"></script>

    </body>
</html>
", "default/baseContact.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\views\\default\\baseContact.html.twig");
    }
}
