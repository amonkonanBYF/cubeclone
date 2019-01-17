<?php

/* ::base.html.twig */
class __TwigTemplate_663eea4e437d11d65ce2026362a629afabc02efe2744c3ce36d7fed1acef5675 extends Twig_Template
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
        $__internal_8cd97043b3aa1db5aaef91980bfed1185717d2cc0614503062c3a64d90aa7af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd97043b3aa1db5aaef91980bfed1185717d2cc0614503062c3a64d90aa7af9->enter($__internal_8cd97043b3aa1db5aaef91980bfed1185717d2cc0614503062c3a64d90aa7af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_242108acd7036ffaf08e6bd8e4a5d7d474bec1602093fef991351c8fb1afff35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242108acd7036ffaf08e6bd8e4a5d7d474bec1602093fef991351c8fb1afff35->enter($__internal_242108acd7036ffaf08e6bd8e4a5d7d474bec1602093fef991351c8fb1afff35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 70
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
        // line 86
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
        // line 95
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
        // line 114
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
        // line 137
        $this->displayBlock('missions', $context, $blocks);
        // line 139
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
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/jquery.dropotron.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/skel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/skel-viewport.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/util.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/ie/respond.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/assets/js/main.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
        
        $__internal_8cd97043b3aa1db5aaef91980bfed1185717d2cc0614503062c3a64d90aa7af9->leave($__internal_8cd97043b3aa1db5aaef91980bfed1185717d2cc0614503062c3a64d90aa7af9_prof);

        
        $__internal_242108acd7036ffaf08e6bd8e4a5d7d474bec1602093fef991351c8fb1afff35->leave($__internal_242108acd7036ffaf08e6bd8e4a5d7d474bec1602093fef991351c8fb1afff35_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_7561a95f7f3d99f3ad345ded7f6eb2645ae535546bc7fdacabedea2ff6ec943c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7561a95f7f3d99f3ad345ded7f6eb2645ae535546bc7fdacabedea2ff6ec943c->enter($__internal_7561a95f7f3d99f3ad345ded7f6eb2645ae535546bc7fdacabedea2ff6ec943c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a149f8edf599da861af5f4b23b63b3ffb339a3d4dfb54f724109193220943862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a149f8edf599da861af5f4b23b63b3ffb339a3d4dfb54f724109193220943862->enter($__internal_a149f8edf599da861af5f4b23b63b3ffb339a3d4dfb54f724109193220943862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        echo "\">Missions</a>
                                        <ul>
                                            <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                            <li><a href=\"#\">Magna phasellus</a></li>
                                            <li><a href=\"#\">Etiam dolore nisl</a></li>
                                            <li>
                                                <a href=\"#\">Phasellus consequat</a>
                                                <ul>
                                                    <li><a href=\"#\">Magna phasellus</a></li>
                                                    <li><a href=\"#\">Etiam dolore nisl</a></li>
                                                    <li><a href=\"#\">Veroeros feugiat</a></li>
                                                    <li><a href=\"#\">Nisl sed aliquam</a></li>
                                                    <li><a href=\"#\">Dolore adipiscing</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"#\">Veroeros feugiat</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("info_path");
        echo "\">Qui Sommes nous</a></li>
                                    <li><a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("missions_path");
        echo "\">Nous Contacter</a></li>
                                    <!--<li><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Mon Compte</a></li>-->
                                    <li>

                                        ";
        // line 56
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 57
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                            <a href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                                ";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                            </a><small>
                                            <a href=\"/profile\">mon compte</a></small>
                                        ";
        } else {
            // line 63
            echo "                                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                        ";
        }
        // line 65
        echo "
                                    </li>
                                </ul>
                            </nav>
            ";
        
        $__internal_a149f8edf599da861af5f4b23b63b3ffb339a3d4dfb54f724109193220943862->leave($__internal_a149f8edf599da861af5f4b23b63b3ffb339a3d4dfb54f724109193220943862_prof);

        
        $__internal_7561a95f7f3d99f3ad345ded7f6eb2645ae535546bc7fdacabedea2ff6ec943c->leave($__internal_7561a95f7f3d99f3ad345ded7f6eb2645ae535546bc7fdacabedea2ff6ec943c_prof);

    }

    // line 137
    public function block_missions($context, array $blocks = array())
    {
        $__internal_22015ff427b8e27a47aa2eb3f577c0b75fae526a1042008cf7d3f9ef775e2d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22015ff427b8e27a47aa2eb3f577c0b75fae526a1042008cf7d3f9ef775e2d18->enter($__internal_22015ff427b8e27a47aa2eb3f577c0b75fae526a1042008cf7d3f9ef775e2d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missions"));

        $__internal_626e6e805db403015e5961c73d02947a51ad27f318adfb47027f919fadacd023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626e6e805db403015e5961c73d02947a51ad27f318adfb47027f919fadacd023->enter($__internal_626e6e805db403015e5961c73d02947a51ad27f318adfb47027f919fadacd023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missions"));

        // line 138
        echo "                                            ";
        
        $__internal_626e6e805db403015e5961c73d02947a51ad27f318adfb47027f919fadacd023->leave($__internal_626e6e805db403015e5961c73d02947a51ad27f318adfb47027f919fadacd023_prof);

        
        $__internal_22015ff427b8e27a47aa2eb3f577c0b75fae526a1042008cf7d3f9ef775e2d18->leave($__internal_22015ff427b8e27a47aa2eb3f577c0b75fae526a1042008cf7d3f9ef775e2d18_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 138,  375 => 137,  361 => 65,  353 => 63,  346 => 59,  342 => 58,  337 => 57,  335 => 56,  329 => 53,  325 => 52,  321 => 51,  300 => 33,  295 => 31,  277 => 16,  273 => 15,  265 => 9,  256 => 8,  241 => 242,  237 => 241,  233 => 240,  229 => 239,  225 => 238,  221 => 237,  217 => 236,  118 => 139,  116 => 137,  90 => 114,  68 => 95,  56 => 86,  38 => 70,  36 => 8,  27 => 1,);
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
                                        <a href=\"{{ path('missions_path') }}\">Missions</a>
                                        <ul>
                                            <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                            <li><a href=\"#\">Magna phasellus</a></li>
                                            <li><a href=\"#\">Etiam dolore nisl</a></li>
                                            <li>
                                                <a href=\"#\">Phasellus consequat</a>
                                                <ul>
                                                    <li><a href=\"#\">Magna phasellus</a></li>
                                                    <li><a href=\"#\">Etiam dolore nisl</a></li>
                                                    <li><a href=\"#\">Veroeros feugiat</a></li>
                                                    <li><a href=\"#\">Nisl sed aliquam</a></li>
                                                    <li><a href=\"#\">Dolore adipiscing</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"#\">Veroeros feugiat</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"{{ path('info_path') }}\">Qui Sommes nous</a></li>
                                    <li><a href=\"{{ path('missions_path') }}\">Nous Contacter</a></li>
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
", "::base.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources\\views/base.html.twig");
    }
}
