<?php

/* base.html.twig */
class __TwigTemplate_e3896824a4e50256d5691fe384d28f95c406a11740c322338a283a5eba4389a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'missions' => array($this, 'block_missions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_099da434e0c26448d11b5d2cdf4dabf472083faa97bf75d4348c45a8c406af11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099da434e0c26448d11b5d2cdf4dabf472083faa97bf75d4348c45a8c406af11->enter($__internal_099da434e0c26448d11b5d2cdf4dabf472083faa97bf75d4348c45a8c406af11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7104f6fe2dab9dcf2a8b8ba5ed54db687ec18d8bb44e2127af107b605344de4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7104f6fe2dab9dcf2a8b8ba5ed54db687ec18d8bb44e2127af107b605344de4c->enter($__internal_7104f6fe2dab9dcf2a8b8ba5ed54db687ec18d8bb44e2127af107b605344de4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 56
        echo "


                        <!-- Banner -->
                            <section id=\"banner\">
                                <header>
                                    <h2>Vous voulez gagner de l'argent?</h2>
                                    <p>inscrivez-vous et réaliser des missions pour des entréprises</p>
                                </header>
                            </section>

                        <!-- Intro -->
                            <section id=\"intro\" class=\"container\">
                                <div class=\"row\">
                                    <div class=\"4u 12u(mobile)\">
                                        <section class=\"first\">
                                            <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"><i class=\"icon featured fa-cog\"></i></a>
                                            <header>
                                                <h2>Inscrivez-vous</h2>
                                            </header>
                                            <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
                                        </section>
                                    </div>
                                    <div class=\"4u 12u(mobile)\">
                                        <section class=\"middle\">
                                            <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("missions_path");
        echo "\"><i class=\"icon featured alt fa-flash\"></i></a>
                                            <header>
                                                <h2>Consulter nos missions</h2>
                                            </header>
                                            <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
                                        </section>
                                    </div>
                                    <div class=\"4u 12u(mobile)\">
                                        <section class=\"last\">
                                            <i class=\"icon featured alt2 fa-star\"></i>
                                            <header>
                                                <h2>Récupérer vos gains</h2>
                                            </header>
                                            <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
                                        </section>
                                    </div>
                                </div>
                                <footer>
                                    <ul class=\"actions\">
                                        <li><a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"button big\">S'inscrire</a></li>
                                        <li><a href=\"#\" class=\"button alt big\">Entréprise</a></li>
                                    </ul>
                                </footer>
                            </section>

                    </div>
                </div>

            <!-- Main -->
                <div id=\"main-wrapper\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"12u\">

                                <!-- Portfolio -->
                                    <section>
                                        <header class=\"major\">
                                            <h2>Missions</h2>
                                        </header>

                                        <div class=\"row\">

                                            ";
        // line 123
        $this->displayBlock('missions', $context, $blocks);
        // line 125
        echo "
                                        </div>

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
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/jquery.dropotron.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/skel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/skel-viewport.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/util.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/ie/respond.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/main.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
        
        $__internal_099da434e0c26448d11b5d2cdf4dabf472083faa97bf75d4348c45a8c406af11->leave($__internal_099da434e0c26448d11b5d2cdf4dabf472083faa97bf75d4348c45a8c406af11_prof);

        
        $__internal_7104f6fe2dab9dcf2a8b8ba5ed54db687ec18d8bb44e2127af107b605344de4c->leave($__internal_7104f6fe2dab9dcf2a8b8ba5ed54db687ec18d8bb44e2127af107b605344de4c_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d9a09a1a0503d08a8df6fe9059d12bcf308f9c3909275c1242679e6f0042cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d9a09a1a0503d08a8df6fe9059d12bcf308f9c3909275c1242679e6f0042cab->enter($__internal_9d9a09a1a0503d08a8df6fe9059d12bcf308f9c3909275c1242679e6f0042cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a3dc8dfdd68ce91b214ee2d0b86e6b785ff353d9aadb082793443aeb6e90893c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3dc8dfdd68ce91b214ee2d0b86e6b785ff353d9aadb082793443aeb6e90893c->enter($__internal_a3dc8dfdd68ce91b214ee2d0b86e6b785ff353d9aadb082793443aeb6e90893c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
                                    <li class=\"current\"><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
                                    <li>
                                    <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("missions_path");
        echo "\"> Missions </a>


                                    </li>
                                    <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("info_path");
        echo "\"> Qui Sommes nous</a></li>
                                    <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_path");
        echo "\">Nous Contacter</a></li>
                                    <!--<li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Mon Compte</a></li>-->
                                    <li>

                                        ";
        // line 42
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 43
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                            <a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                                ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                            </a><small>
                                            <a href=\"/profile\">mon compte</a></small>
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
        
        $__internal_a3dc8dfdd68ce91b214ee2d0b86e6b785ff353d9aadb082793443aeb6e90893c->leave($__internal_a3dc8dfdd68ce91b214ee2d0b86e6b785ff353d9aadb082793443aeb6e90893c_prof);

        
        $__internal_9d9a09a1a0503d08a8df6fe9059d12bcf308f9c3909275c1242679e6f0042cab->leave($__internal_9d9a09a1a0503d08a8df6fe9059d12bcf308f9c3909275c1242679e6f0042cab_prof);

    }

    // line 123
    public function block_missions($context, array $blocks = array())
    {
        $__internal_769a0d68fad73bd129e9eefd864a0ad1f1658d3157b4a41a80e2ebc4bd550fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769a0d68fad73bd129e9eefd864a0ad1f1658d3157b4a41a80e2ebc4bd550fea->enter($__internal_769a0d68fad73bd129e9eefd864a0ad1f1658d3157b4a41a80e2ebc4bd550fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missions"));

        $__internal_fa02858c09644f50ffc6f1f7580ee248b0e2b0cd28742f4189683f2d86b698e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa02858c09644f50ffc6f1f7580ee248b0e2b0cd28742f4189683f2d86b698e4->enter($__internal_fa02858c09644f50ffc6f1f7580ee248b0e2b0cd28742f4189683f2d86b698e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missions"));

        // line 124
        echo "                                            ";
        
        $__internal_fa02858c09644f50ffc6f1f7580ee248b0e2b0cd28742f4189683f2d86b698e4->leave($__internal_fa02858c09644f50ffc6f1f7580ee248b0e2b0cd28742f4189683f2d86b698e4_prof);

        
        $__internal_769a0d68fad73bd129e9eefd864a0ad1f1658d3157b4a41a80e2ebc4bd550fea->leave($__internal_769a0d68fad73bd129e9eefd864a0ad1f1658d3157b4a41a80e2ebc4bd550fea_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 124,  361 => 123,  347 => 51,  339 => 49,  332 => 45,  328 => 44,  323 => 43,  321 => 42,  315 => 39,  311 => 38,  307 => 37,  300 => 33,  295 => 31,  277 => 16,  273 => 15,  265 => 9,  256 => 8,  241 => 228,  237 => 227,  233 => 226,  229 => 225,  225 => 224,  221 => 223,  217 => 222,  118 => 125,  116 => 123,  90 => 100,  68 => 81,  56 => 72,  38 => 56,  36 => 8,  27 => 1,);
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
                                    <li class=\"current\"><a href=\"{{ path('homepage') }}\">Accueil</a></li>
                                    <li>
                                    <a href=\"{{ path('missions_path') }}\"> Missions </a>


                                    </li>
                                    <li><a href=\"{{ path('info_path') }}\"> Qui Sommes nous</a></li>
                                    <li><a href=\"{{path('contact_path')}}\">Nous Contacter</a></li>
                                    <!--<li><a href=\"{{ path('fos_user_security_login') }}\">Mon Compte</a></li>-->
                                    <li>

                                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                                            <a href=\"{{ path('fos_user_security_logout') }}\">
                                                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                                            </a><small>
                                            <a href=\"/profile\">mon compte</a></small>
                                        {% else %}
                                            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                                        {% endif %}

                                    </li>
                                </ul>
                            </nav>
            {% endblock %}



                        <!-- Banner -->
                            <section id=\"banner\">
                                <header>
                                    <h2>Vous voulez gagner de l'argent?</h2>
                                    <p>inscrivez-vous et réaliser des missions pour des entréprises</p>
                                </header>
                            </section>

                        <!-- Intro -->
                            <section id=\"intro\" class=\"container\">
                                <div class=\"row\">
                                    <div class=\"4u 12u(mobile)\">
                                        <section class=\"first\">
                                            <a href=\"{{path('fos_user_registration_register')}}\"><i class=\"icon featured fa-cog\"></i></a>
                                            <header>
                                                <h2>Inscrivez-vous</h2>
                                            </header>
                                            <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
                                        </section>
                                    </div>
                                    <div class=\"4u 12u(mobile)\">
                                        <section class=\"middle\">
                                            <a href=\"{{ path('missions_path') }}\"><i class=\"icon featured alt fa-flash\"></i></a>
                                            <header>
                                                <h2>Consulter nos missions</h2>
                                            </header>
                                            <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
                                        </section>
                                    </div>
                                    <div class=\"4u 12u(mobile)\">
                                        <section class=\"last\">
                                            <i class=\"icon featured alt2 fa-star\"></i>
                                            <header>
                                                <h2>Récupérer vos gains</h2>
                                            </header>
                                            <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
                                        </section>
                                    </div>
                                </div>
                                <footer>
                                    <ul class=\"actions\">
                                        <li><a href=\"{{path('fos_user_registration_register')}}\" class=\"button big\">S'inscrire</a></li>
                                        <li><a href=\"#\" class=\"button alt big\">Entréprise</a></li>
                                    </ul>
                                </footer>
                            </section>

                    </div>
                </div>

            <!-- Main -->
                <div id=\"main-wrapper\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"12u\">

                                <!-- Portfolio -->
                                    <section>
                                        <header class=\"major\">
                                            <h2>Missions</h2>
                                        </header>

                                        <div class=\"row\">

                                            {% block missions %}
                                            {% endblock %}

                                        </div>

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
", "base.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\views\\base.html.twig");
    }
}
