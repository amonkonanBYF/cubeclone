<?php

/* baseProfile.html.twig */
class __TwigTemplate_ad386aaa52f519410702139eb639917c3d86fcba16027b10061ee726e2828e71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'deconnexion' => array($this, 'block_deconnexion'),
            'info' => array($this, 'block_info'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b41db96d10bb479dd3df4df89446e5cab48bec7a8a02051f054821e429158efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b41db96d10bb479dd3df4df89446e5cab48bec7a8a02051f054821e429158efd->enter($__internal_b41db96d10bb479dd3df4df89446e5cab48bec7a8a02051f054821e429158efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseProfile.html.twig"));

        $__internal_2a81ec4dbfe0371a938e3b568f854bb879cd99b0449a0c4b57c96a7d7c223236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a81ec4dbfe0371a938e3b568f854bb879cd99b0449a0c4b57c96a7d7c223236->enter($__internal_2a81ec4dbfe0371a938e3b568f854bb879cd99b0449a0c4b57c96a7d7c223236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseProfile.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<!--
  Prologue by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Mon Profile</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <!--[if lte IE 8]><script src=\"assets/js/ie/html5shiv.js\"></script><![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/profile/assets/css/main.css"), "html", null, true);
        echo "\" />
    <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"assets/css/ie8.css\" /><![endif]-->
    <!--[if lte IE 9]><link rel=\"stylesheet\" href=\"assets/css/ie9.css\" /><![endif]-->
  </head>
  <body>

    <!-- Header -->
      <div id=\"header\">

        <div class=\"top\">

          <!-- Logo -->
            <div id=\"logo\">

              <h1 id=\"title\">

                    ";
        // line 29
        $this->displayBlock('deconnexion', $context, $blocks);
        // line 39
        echo "              </h1>



            </div>
            <div id=\"logo\">
              <span class=\"image avatar48\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/profile/images/avatar.jpg"), "html", null, true);
        echo "\" alt=\"\" /></span></div>
          <!-- Nav -->
            <nav id=\"nav\">
              <!--

                Prologue's nav expects links in one of two formats:

                1. Hash link (scrolls to a different section within the page)

                   <li><a href=\"#foobar\" id=\"foobar-link\" class=\"icon fa-whatever-icon-you-want skel-layers-ignoreHref\"><span class=\"label\">Foobar</span></a></li>

                2. Standard link (sends the user to another page/site)

                   <li><a href=\"http://foobar.tld\" id=\"foobar-link\" class=\"icon fa-whatever-icon-you-want\"><span class=\"label\">Foobar</span></a></li>

              -->
              <ul>
                <li><a href=\"#top\" id=\"top-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-user \">Intro</span></a></li>
                <li><a href=\"#missions\" id=\"portfolio-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-th\">Mes Missions</span></a></li>
                <li><a href=\"#about\" id=\"about-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-user\">Informations</span></a></li>
                <li><a href=\"#contact\" id=\"contact-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-envelope\">Nous Contacter</span></a></li>
                <li><a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" id=\"contact-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-home\">Accueil du site</span></a></li>

              </ul>
            </nav>

        </div>

        <div class=\"bottom\">

          <!-- Social Icons -->
            <ul class=\"icons\">
              <li><a href=\"#\" class=\"icon fa-twitter\"><span class=\"label\">Twitter</span></a></li>
              <li><a href=\"#\" class=\"icon fa-facebook\"><span class=\"label\">Facebook</span></a></li>
              <li><a href=\"#\" class=\"icon fa-github\"><span class=\"label\">Github</span></a></li>
              <li><a href=\"#\" class=\"icon fa-dribbble\"><span class=\"label\">Dribbble</span></a></li>
              <li><a href=\"#\" class=\"icon fa-envelope\"><span class=\"label\">Email</span></a></li>
            </ul>

        </div>

      </div>

    <!-- Main -->
      <div id=\"main\">

        <!-- Intro -->
          <section id=\"top\" class=\"one dark cover\">
            <div class=\"container\">

              <header>
                <h2 class=\"alt\">Bienvenue <strong>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</strong> sur votre profile
                </h2>

              </header>

              <footer>
                <a href=\"#missions\" class=\"button scrolly\">Vos missions</a>
              </footer>

            </div>
          </section>

        <!-- Portfolio -->
          <section id=\"missions\" class=\"two\">
            <div class=\"container\">

              <header>
                <h2>Mes missions en cours</h2>
              </header>


              <p> Vous trouverez vos missions en cours ou déjà terminé dans cette partie. Pour toutes questions n'hésiter pas a nous écrire. Toute l'équipe vous rémercie pour votre confiance  </p>

              <div class=\"row\">
                <div class=\"4u 12u\$(mobile)\">
                  <article class=\"item\">
                    <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/profile/images/pic02.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                    <header>
                      <h3>Ipsum Feugiat</h3>
                    </header>
                  </article>
                  <article class=\"item\">
                    <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/profile/images/pic03.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                    <header>
                      <h3>Rhoncus Semper</h3>
                    </header>
                  </article>
                </div>
                <div class=\"4u 12u\$(mobile)\">
                  <article class=\"item\">
                    <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/profile/images/pic04.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                    <header>
                      <h3>Magna Nullam</h3>
                    </header>
                  </article>
                  <article class=\"item\">
                    <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/profile/images/pic05.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                    <header>
                      <h3>Natoque Vitae</h3>
                    </header>
                  </article>
                </div>
                <div class=\"4u\$ 12u\$(mobile)\">
                  <article class=\"item\">
                    <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/profile/images/pic06.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                    <header>
                      <h3>Dolor Penatibus</h3>
                    </header>
                  </article>
                  <article class=\"item\">
                    <a href=\"#\" class=\"image fit\"><img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/profile/images/pic07.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
                    <header>
                      <h3>Orci Convallis</h3>
                    </header>
                  </article>
                </div>
              </div>

              <div><article><a href=\"";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("missions_path");
        echo "\">Liste des missions</a></article></div>

            </div>
          </section>

        <!-- About Me -->
          <section id=\"about\" class=\"three\">
            <div class=\"container\">

              <header>
                <h2>Mes Informations</h2>
              </header>

              <a href=\"#\" class=\"image featured\"><img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/profile/images/pic08.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>

              <p>";
        // line 179
        $this->displayBlock('info', $context, $blocks);
        // line 180
        echo "</p>

            </div>
          </section>

        <!-- Contact -->
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

      </div>

    <!-- Footer -->
      <div id=\"footer\">

        <!-- Copyright -->
          <ul class=\"copyright\">
            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
          </ul>

      </div>

    <!-- Scripts -->
      <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/profile/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/profile/assets/js/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/profile/assets/js/jquery.scrollzer.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/profile/assets/js/skel.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/profile/assets/js/util.js"), "html", null, true);
        echo "\"></script>
      <!--[if lte IE 8]><script src=\"assets/js/ie/respond.min.js\"></script><![endif]-->
      <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/profile/assets/js/main.js"), "html", null, true);
        echo "\"></script>

  </body>
</html>
";
        
        $__internal_b41db96d10bb479dd3df4df89446e5cab48bec7a8a02051f054821e429158efd->leave($__internal_b41db96d10bb479dd3df4df89446e5cab48bec7a8a02051f054821e429158efd_prof);

        
        $__internal_2a81ec4dbfe0371a938e3b568f854bb879cd99b0449a0c4b57c96a7d7c223236->leave($__internal_2a81ec4dbfe0371a938e3b568f854bb879cd99b0449a0c4b57c96a7d7c223236_prof);

    }

    // line 29
    public function block_deconnexion($context, array $blocks = array())
    {
        $__internal_c8b1531f0cd9df0dcc97da33689d25ead23e00e17e44c7ae4c05503e6acc0c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b1531f0cd9df0dcc97da33689d25ead23e00e17e44c7ae4c05503e6acc0c9c->enter($__internal_c8b1531f0cd9df0dcc97da33689d25ead23e00e17e44c7ae4c05503e6acc0c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "deconnexion"));

        $__internal_215e1d1ff9876691854fbc9dbeb81d95bb2139b0c8396dec3c3b352483b07e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215e1d1ff9876691854fbc9dbeb81d95bb2139b0c8396dec3c3b352483b07e9a->enter($__internal_215e1d1ff9876691854fbc9dbeb81d95bb2139b0c8396dec3c3b352483b07e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "deconnexion"));

        // line 30
        echo "                        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 31
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                            <a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                            </a>
                        ";
        } else {
            // line 36
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 38
        echo "                      ";
        
        $__internal_215e1d1ff9876691854fbc9dbeb81d95bb2139b0c8396dec3c3b352483b07e9a->leave($__internal_215e1d1ff9876691854fbc9dbeb81d95bb2139b0c8396dec3c3b352483b07e9a_prof);

        
        $__internal_c8b1531f0cd9df0dcc97da33689d25ead23e00e17e44c7ae4c05503e6acc0c9c->leave($__internal_c8b1531f0cd9df0dcc97da33689d25ead23e00e17e44c7ae4c05503e6acc0c9c_prof);

    }

    // line 179
    public function block_info($context, array $blocks = array())
    {
        $__internal_87fbf00d83d1aafa44a63b40aaec1c6b07707249390f503d1bb1882c80cb8c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87fbf00d83d1aafa44a63b40aaec1c6b07707249390f503d1bb1882c80cb8c05->enter($__internal_87fbf00d83d1aafa44a63b40aaec1c6b07707249390f503d1bb1882c80cb8c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "info"));

        $__internal_124721ee8b6c7de3dd64cd75f82a0cafd195a1bc85bf489fcc273a2aabf8c026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124721ee8b6c7de3dd64cd75f82a0cafd195a1bc85bf489fcc273a2aabf8c026->enter($__internal_124721ee8b6c7de3dd64cd75f82a0cafd195a1bc85bf489fcc273a2aabf8c026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "info"));

        // line 180
        echo "              ";
        
        $__internal_124721ee8b6c7de3dd64cd75f82a0cafd195a1bc85bf489fcc273a2aabf8c026->leave($__internal_124721ee8b6c7de3dd64cd75f82a0cafd195a1bc85bf489fcc273a2aabf8c026_prof);

        
        $__internal_87fbf00d83d1aafa44a63b40aaec1c6b07707249390f503d1bb1882c80cb8c05->leave($__internal_87fbf00d83d1aafa44a63b40aaec1c6b07707249390f503d1bb1882c80cb8c05_prof);

    }

    public function getTemplateName()
    {
        return "baseProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 180,  369 => 179,  359 => 38,  351 => 36,  345 => 33,  341 => 32,  336 => 31,  333 => 30,  324 => 29,  309 => 233,  304 => 231,  300 => 230,  296 => 229,  292 => 228,  288 => 227,  239 => 180,  237 => 179,  232 => 177,  216 => 164,  205 => 156,  196 => 150,  185 => 142,  176 => 136,  165 => 128,  156 => 122,  127 => 96,  94 => 66,  70 => 45,  62 => 39,  60 => 29,  41 => 13,  27 => 1,);
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
  Prologue by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Mon Profile</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <!--[if lte IE 8]><script src=\"assets/js/ie/html5shiv.js\"></script><![endif]-->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/templates/profile/assets/css/main.css') }}\" />
    <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"assets/css/ie8.css\" /><![endif]-->
    <!--[if lte IE 9]><link rel=\"stylesheet\" href=\"assets/css/ie9.css\" /><![endif]-->
  </head>
  <body>

    <!-- Header -->
      <div id=\"header\">

        <div class=\"top\">

          <!-- Logo -->
            <div id=\"logo\">

              <h1 id=\"title\">

                    {%block deconnexion%}
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                            <a href=\"{{ path('fos_user_security_logout') }}\">
                                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                            </a>
                        {% else %}
                            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                        {% endif %}
                      {% endblock %}
              </h1>



            </div>
            <div id=\"logo\">
              <span class=\"image avatar48\"><img src=\"{{ asset('bundles/templates/profile/images/avatar.jpg') }}\" alt=\"\" /></span></div>
          <!-- Nav -->
            <nav id=\"nav\">
              <!--

                Prologue's nav expects links in one of two formats:

                1. Hash link (scrolls to a different section within the page)

                   <li><a href=\"#foobar\" id=\"foobar-link\" class=\"icon fa-whatever-icon-you-want skel-layers-ignoreHref\"><span class=\"label\">Foobar</span></a></li>

                2. Standard link (sends the user to another page/site)

                   <li><a href=\"http://foobar.tld\" id=\"foobar-link\" class=\"icon fa-whatever-icon-you-want\"><span class=\"label\">Foobar</span></a></li>

              -->
              <ul>
                <li><a href=\"#top\" id=\"top-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-user \">Intro</span></a></li>
                <li><a href=\"#missions\" id=\"portfolio-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-th\">Mes Missions</span></a></li>
                <li><a href=\"#about\" id=\"about-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-user\">Informations</span></a></li>
                <li><a href=\"#contact\" id=\"contact-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-envelope\">Nous Contacter</span></a></li>
                <li><a href=\"{{path('homepage')}}\" id=\"contact-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-home\">Accueil du site</span></a></li>

              </ul>
            </nav>

        </div>

        <div class=\"bottom\">

          <!-- Social Icons -->
            <ul class=\"icons\">
              <li><a href=\"#\" class=\"icon fa-twitter\"><span class=\"label\">Twitter</span></a></li>
              <li><a href=\"#\" class=\"icon fa-facebook\"><span class=\"label\">Facebook</span></a></li>
              <li><a href=\"#\" class=\"icon fa-github\"><span class=\"label\">Github</span></a></li>
              <li><a href=\"#\" class=\"icon fa-dribbble\"><span class=\"label\">Dribbble</span></a></li>
              <li><a href=\"#\" class=\"icon fa-envelope\"><span class=\"label\">Email</span></a></li>
            </ul>

        </div>

      </div>

    <!-- Main -->
      <div id=\"main\">

        <!-- Intro -->
          <section id=\"top\" class=\"one dark cover\">
            <div class=\"container\">

              <header>
                <h2 class=\"alt\">Bienvenue <strong>{{user.username}}</strong> sur votre profile
                </h2>

              </header>

              <footer>
                <a href=\"#missions\" class=\"button scrolly\">Vos missions</a>
              </footer>

            </div>
          </section>

        <!-- Portfolio -->
          <section id=\"missions\" class=\"two\">
            <div class=\"container\">

              <header>
                <h2>Mes missions en cours</h2>
              </header>


              <p> Vous trouverez vos missions en cours ou déjà terminé dans cette partie. Pour toutes questions n'hésiter pas a nous écrire. Toute l'équipe vous rémercie pour votre confiance  </p>

              <div class=\"row\">
                <div class=\"4u 12u\$(mobile)\">
                  <article class=\"item\">
                    <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('bundles/templates/profile/images/pic02.jpg') }}\" alt=\"\" /></a>
                    <header>
                      <h3>Ipsum Feugiat</h3>
                    </header>
                  </article>
                  <article class=\"item\">
                    <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('bundles/templates/profile/images/pic03.jpg') }}\" alt=\"\" /></a>
                    <header>
                      <h3>Rhoncus Semper</h3>
                    </header>
                  </article>
                </div>
                <div class=\"4u 12u\$(mobile)\">
                  <article class=\"item\">
                    <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('bundles/templates/profile/images/pic04.jpg') }}\" alt=\"\" /></a>
                    <header>
                      <h3>Magna Nullam</h3>
                    </header>
                  </article>
                  <article class=\"item\">
                    <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('bundles/templates/profile/images/pic05.jpg') }}\" alt=\"\" /></a>
                    <header>
                      <h3>Natoque Vitae</h3>
                    </header>
                  </article>
                </div>
                <div class=\"4u\$ 12u\$(mobile)\">
                  <article class=\"item\">
                    <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('bundles/templates/profile/images/pic06.jpg') }}\" alt=\"\" /></a>
                    <header>
                      <h3>Dolor Penatibus</h3>
                    </header>
                  </article>
                  <article class=\"item\">
                    <a href=\"#\" class=\"image fit\"><img src=\"{{ asset('bundles/templates/profile/images/pic07.jpg') }}\" alt=\"\" /></a>
                    <header>
                      <h3>Orci Convallis</h3>
                    </header>
                  </article>
                </div>
              </div>

              <div><article><a href=\"{{path('missions_path') }}\">Liste des missions</a></article></div>

            </div>
          </section>

        <!-- About Me -->
          <section id=\"about\" class=\"three\">
            <div class=\"container\">

              <header>
                <h2>Mes Informations</h2>
              </header>

              <a href=\"#\" class=\"image featured\"><img src=\"{{ asset('bundles/templates/profile/images/pic08.jpg') }}\" alt=\"\" /></a>

              <p>{% block info %}
              {% endblock  %}</p>

            </div>
          </section>

        <!-- Contact -->
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

      </div>

    <!-- Footer -->
      <div id=\"footer\">

        <!-- Copyright -->
          <ul class=\"copyright\">
            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
          </ul>

      </div>

    <!-- Scripts -->
      <script src=\"{{ asset('bundles/templates/profile/assets/js/jquery.min.js') }}\"></script>
      <script src=\"{{ asset('bundles/templates/profile/assets/js/jquery.scrolly.min.js') }}\"></script>
      <script src=\"{{ asset('bundles/templates/profile/assets/js/jquery.scrollzer.min.js') }}\"></script>
      <script src=\"{{ asset('bundles/templates/profile/assets/js/skel.min.js') }}\"></script>
      <script src=\"{{ asset('bundles/templates/profile/assets/js/util.js') }}\"></script>
      <!--[if lte IE 8]><script src=\"assets/js/ie/respond.min.js\"></script><![endif]-->
      <script src=\"{{ asset('bundles/templates/profile/assets/js/main.js') }}\"></script>

  </body>
</html>
", "baseProfile.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\views\\baseProfile.html.twig");
    }
}
