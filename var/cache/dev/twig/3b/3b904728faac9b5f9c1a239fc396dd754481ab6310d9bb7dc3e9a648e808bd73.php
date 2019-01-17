<?php

/* default/baseInfoTemplate.html.twig */
class __TwigTemplate_dbe73171f5a4ffc5d476ab1837985888f04f88a44ec50e645f144e148af86f7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'info' => array($this, 'block_info'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ed58c829f6a04c1e43ab1ac6c5ac6daf4a38afaeaca861ac99475fdefc51ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed58c829f6a04c1e43ab1ac6c5ac6daf4a38afaeaca861ac99475fdefc51ca4->enter($__internal_5ed58c829f6a04c1e43ab1ac6c5ac6daf4a38afaeaca861ac99475fdefc51ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/baseInfoTemplate.html.twig"));

        $__internal_fc722d8f2bd9655d5cc8c17bc7eea2a32b73b1b7a57848e5837f3d66e523f074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc722d8f2bd9655d5cc8c17bc7eea2a32b73b1b7a57848e5837f3d66e523f074->enter($__internal_fc722d8f2bd9655d5cc8c17bc7eea2a32b73b1b7a57848e5837f3d66e523f074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/baseInfoTemplate.html.twig"));

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
        // line 57
        echo "




                    </div>
                </div>

            <!-- Main -->
                <div id=\"main-wrapper\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"12u\">

                                <!-- Portfolio -->
                                    <section>
                                        ";
        // line 73
        $this->displayBlock('info', $context, $blocks);
        // line 75
        echo "


                                    </section>

                            </div>
                        </div>

                    </div>
                </div>

            <!-- Footer -->
                <div id=\"footer-wrapper\">
                    <section id=\"footer\" class=\"container\">

                        <div class=\"row\">
                            <div class=\"4u 12u(mobile)\">
                                <section>
                                    <header>
                                        <h2>Tempus consequat</h2>
                                    </header>
                                    <ul class=\"divided\">
                                        <li><a href=\"#\">Lorem ipsum dolor sit amet sit veroeros</a></li>
                                        <li><a href=\"#\">Sed et blandit consequat sed tlorem blandit</a></li>
                                        <li><a href=\"#\">Adipiscing feugiat phasellus sed tempus</a></li>
                                        <li><a href=\"#\">Hendrerit tortor vitae mattis tempor sapien</a></li>
                                        <li><a href=\"#\">Sem feugiat sapien id suscipit magna felis nec</a></li>
                                        <li><a href=\"#\">Elit class aptent taciti sociosqu ad litora</a></li>
                                    </ul>
                                </section>
                            </div>
                            <div class=\"4u 12u(mobile)\">
                                <section>
                                    <header>
                                        <h2>Ipsum et phasellus</h2>
                                    </header>
                                    <ul class=\"divided\">
                                        <li><a href=\"#\">Lorem ipsum dolor sit amet sit veroeros</a></li>
                                        <li><a href=\"#\">Sed et blandit consequat sed tlorem blandit</a></li>
                                        <li><a href=\"#\">Adipiscing feugiat phasellus sed tempus</a></li>
                                        <li><a href=\"#\">Hendrerit tortor vitae mattis tempor sapien</a></li>
                                        <li><a href=\"#\">Sem feugiat sapien id suscipit magna felis nec</a></li>
                                        <li><a href=\"#\">Elit class aptent taciti sociosqu ad litora</a></li>
                                    </ul>
                                </section>
                            </div>
                            <div class=\"4u 12u(mobile)\">
                                <section>
                                    <header>
                                        <h2>Vitae tempor lorem</h2>
                                    </header>
                                    <ul class=\"social\">
                                        <li><a class=\"icon fa-facebook\" href=\"#\"><span class=\"label\">Facebook</span></a></li>
                                        <li><a class=\"icon fa-twitter\" href=\"#\"><span class=\"label\">Twitter</span></a></li>
                                        <li><a class=\"icon fa-dribbble\" href=\"#\"><span class=\"label\">Dribbble</span></a></li>
                                        <li><a class=\"icon fa-linkedin\" href=\"#\"><span class=\"label\">LinkedIn</span></a></li>
                                        <li><a class=\"icon fa-google-plus\" href=\"#\"><span class=\"label\">Google+</span></a></li>
                                    </ul>
                                    <ul class=\"contact\">
                                        <li>
                                            <h3>Address</h3>
                                            <p>
                                                Untitled Incorporated<br />
                                                1234 Somewhere Road Suite<br />
                                                Nashville, TN 00000-0000
                                            </p>
                                        </li>
                                        <li>
                                            <h3>Mail</h3>
                                            <p><a href=\"#\">someone@untitled.tld</a></p>
                                        </li>
                                        <li>
                                            <h3>Phone</h3>
                                            <p>(800) 000-0000</p>
                                        </li>
                                    </ul>
                                </section>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"12u\">

                                <!-- Copyright -->
                                    <div id=\"copyright\">
                                        <ul class=\"links\">
                                            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
                                        </ul>
                                    </div>

                            </div>
                        </div>
                    </section>
                </div>

        </div>

        <!-- Scripts -->
            <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/jquery.dropotron.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/skel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/skel-viewport.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/util.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/ie/respond.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/main.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
        
        $__internal_5ed58c829f6a04c1e43ab1ac6c5ac6daf4a38afaeaca861ac99475fdefc51ca4->leave($__internal_5ed58c829f6a04c1e43ab1ac6c5ac6daf4a38afaeaca861ac99475fdefc51ca4_prof);

        
        $__internal_fc722d8f2bd9655d5cc8c17bc7eea2a32b73b1b7a57848e5837f3d66e523f074->leave($__internal_fc722d8f2bd9655d5cc8c17bc7eea2a32b73b1b7a57848e5837f3d66e523f074_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e31578a5a5dbe1346dcb6e11903c8a924d20d98e931c23f05885c9e35fa6bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e31578a5a5dbe1346dcb6e11903c8a924d20d98e931c23f05885c9e35fa6bc3->enter($__internal_6e31578a5a5dbe1346dcb6e11903c8a924d20d98e931c23f05885c9e35fa6bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6925c41776e9b460dae96aa60acaf18d163b729edc11374042caba2a0d15ea85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6925c41776e9b460dae96aa60acaf18d163b729edc11374042caba2a0d15ea85->enter($__internal_6925c41776e9b460dae96aa60acaf18d163b729edc11374042caba2a0d15ea85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
    <body class=\"homepage\">
        <div id=\"page-wrapper\">

            <!-- Header -->
                <div id=\"header-wrapper\">
                    <div id=\"header\">

                        <!-- Logo -->
                            <h1><a href=\"#\">CodeCube</a></h1>

                        <!-- Nav -->
                            <nav id=\"nav\">
                                <ul>
                                    <li ><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
                                    <li>
                                        <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("missions_path");
        echo "\">Missions </a>

                                    </li>
                                    <li class=\"current\"><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("info_path");
        echo "\">Qui Sommes nous</a></li>
                                    <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_path");
        echo "\">Nous Contacter</a></li>
                                    <!--<li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Mon Compte</a></li>-->


                                    <li>

                                        ";
        // line 43
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 44
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                            <a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                                ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                            </a>
                                        ";
        } else {
            // line 49
            echo "                                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                        ";
        }
        // line 51
        echo "

                                    </li>
                                </ul>
                            </nav>
            ";
        
        $__internal_6925c41776e9b460dae96aa60acaf18d163b729edc11374042caba2a0d15ea85->leave($__internal_6925c41776e9b460dae96aa60acaf18d163b729edc11374042caba2a0d15ea85_prof);

        
        $__internal_6e31578a5a5dbe1346dcb6e11903c8a924d20d98e931c23f05885c9e35fa6bc3->leave($__internal_6e31578a5a5dbe1346dcb6e11903c8a924d20d98e931c23f05885c9e35fa6bc3_prof);

    }

    // line 73
    public function block_info($context, array $blocks = array())
    {
        $__internal_de2d854841721a6351e6e329d038ab5a801234a38bc81920a94653daaef89d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de2d854841721a6351e6e329d038ab5a801234a38bc81920a94653daaef89d23->enter($__internal_de2d854841721a6351e6e329d038ab5a801234a38bc81920a94653daaef89d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "info"));

        $__internal_a8eecdd24cb99e2c3659f74d13d0a28d38c508262bb15e68cca2001c521d19d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8eecdd24cb99e2c3659f74d13d0a28d38c508262bb15e68cca2001c521d19d3->enter($__internal_a8eecdd24cb99e2c3659f74d13d0a28d38c508262bb15e68cca2001c521d19d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "info"));

        // line 74
        echo "                                        ";
        
        $__internal_a8eecdd24cb99e2c3659f74d13d0a28d38c508262bb15e68cca2001c521d19d3->leave($__internal_a8eecdd24cb99e2c3659f74d13d0a28d38c508262bb15e68cca2001c521d19d3_prof);

        
        $__internal_de2d854841721a6351e6e329d038ab5a801234a38bc81920a94653daaef89d23->leave($__internal_de2d854841721a6351e6e329d038ab5a801234a38bc81920a94653daaef89d23_prof);

    }

    public function getTemplateName()
    {
        return "default/baseInfoTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 74,  302 => 73,  287 => 51,  279 => 49,  273 => 46,  269 => 45,  264 => 44,  262 => 43,  254 => 38,  250 => 37,  246 => 36,  240 => 33,  235 => 31,  217 => 16,  213 => 15,  205 => 9,  196 => 8,  181 => 178,  177 => 177,  173 => 176,  169 => 175,  165 => 174,  161 => 173,  157 => 172,  58 => 75,  56 => 73,  38 => 57,  36 => 8,  27 => 1,);
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
    <body class=\"homepage\">
        <div id=\"page-wrapper\">

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
                                    <li class=\"current\"><a href=\"{{path('info_path') }}\">Qui Sommes nous</a></li>
                                    <li><a href=\"{{path('contact_path')}}\">Nous Contacter</a></li>
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

            <!-- Main -->
                <div id=\"main-wrapper\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"12u\">

                                <!-- Portfolio -->
                                    <section>
                                        {% block info %}
                                        {% endblock %}



                                    </section>

                            </div>
                        </div>

                    </div>
                </div>

            <!-- Footer -->
                <div id=\"footer-wrapper\">
                    <section id=\"footer\" class=\"container\">

                        <div class=\"row\">
                            <div class=\"4u 12u(mobile)\">
                                <section>
                                    <header>
                                        <h2>Tempus consequat</h2>
                                    </header>
                                    <ul class=\"divided\">
                                        <li><a href=\"#\">Lorem ipsum dolor sit amet sit veroeros</a></li>
                                        <li><a href=\"#\">Sed et blandit consequat sed tlorem blandit</a></li>
                                        <li><a href=\"#\">Adipiscing feugiat phasellus sed tempus</a></li>
                                        <li><a href=\"#\">Hendrerit tortor vitae mattis tempor sapien</a></li>
                                        <li><a href=\"#\">Sem feugiat sapien id suscipit magna felis nec</a></li>
                                        <li><a href=\"#\">Elit class aptent taciti sociosqu ad litora</a></li>
                                    </ul>
                                </section>
                            </div>
                            <div class=\"4u 12u(mobile)\">
                                <section>
                                    <header>
                                        <h2>Ipsum et phasellus</h2>
                                    </header>
                                    <ul class=\"divided\">
                                        <li><a href=\"#\">Lorem ipsum dolor sit amet sit veroeros</a></li>
                                        <li><a href=\"#\">Sed et blandit consequat sed tlorem blandit</a></li>
                                        <li><a href=\"#\">Adipiscing feugiat phasellus sed tempus</a></li>
                                        <li><a href=\"#\">Hendrerit tortor vitae mattis tempor sapien</a></li>
                                        <li><a href=\"#\">Sem feugiat sapien id suscipit magna felis nec</a></li>
                                        <li><a href=\"#\">Elit class aptent taciti sociosqu ad litora</a></li>
                                    </ul>
                                </section>
                            </div>
                            <div class=\"4u 12u(mobile)\">
                                <section>
                                    <header>
                                        <h2>Vitae tempor lorem</h2>
                                    </header>
                                    <ul class=\"social\">
                                        <li><a class=\"icon fa-facebook\" href=\"#\"><span class=\"label\">Facebook</span></a></li>
                                        <li><a class=\"icon fa-twitter\" href=\"#\"><span class=\"label\">Twitter</span></a></li>
                                        <li><a class=\"icon fa-dribbble\" href=\"#\"><span class=\"label\">Dribbble</span></a></li>
                                        <li><a class=\"icon fa-linkedin\" href=\"#\"><span class=\"label\">LinkedIn</span></a></li>
                                        <li><a class=\"icon fa-google-plus\" href=\"#\"><span class=\"label\">Google+</span></a></li>
                                    </ul>
                                    <ul class=\"contact\">
                                        <li>
                                            <h3>Address</h3>
                                            <p>
                                                Untitled Incorporated<br />
                                                1234 Somewhere Road Suite<br />
                                                Nashville, TN 00000-0000
                                            </p>
                                        </li>
                                        <li>
                                            <h3>Mail</h3>
                                            <p><a href=\"#\">someone@untitled.tld</a></p>
                                        </li>
                                        <li>
                                            <h3>Phone</h3>
                                            <p>(800) 000-0000</p>
                                        </li>
                                    </ul>
                                </section>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"12u\">

                                <!-- Copyright -->
                                    <div id=\"copyright\">
                                        <ul class=\"links\">
                                            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
                                        </ul>
                                    </div>

                            </div>
                        </div>
                    </section>
                </div>

        </div>

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
", "default/baseInfoTemplate.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\views\\default\\baseInfoTemplate.html.twig");
    }
}
