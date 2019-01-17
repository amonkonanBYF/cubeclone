<?php

/* baseForm.html.twig */
class __TwigTemplate_b73ea16ec691a67465c440673fa2a06399622e222bb6550ec75d7e36ff594f93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f284391efb2a08462632b892715baaf6c108e590396f927517bbd204d1c90065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f284391efb2a08462632b892715baaf6c108e590396f927517bbd204d1c90065->enter($__internal_f284391efb2a08462632b892715baaf6c108e590396f927517bbd204d1c90065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseForm.html.twig"));

        $__internal_e93873eaa3b3812a046342f905f9a7fdb61a2735d19b98153519ce952a42eddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93873eaa3b3812a046342f905f9a7fdb61a2735d19b98153519ce952a42eddb->enter($__internal_e93873eaa3b3812a046342f905f9a7fdb61a2735d19b98153519ce952a42eddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseForm.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<!--
  Identity by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Login</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <!--[if lte IE 8]><script src=\"assets/js/html5shiv.js\"></script><![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/form/assets/css/main.css"), "html", null, true);
        echo "\" />
    <!--[if lte IE 9]><link rel=\"stylesheet\" href=\"assets/css/ie9.css\" /><![endif]-->
    <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"assets/css/ie8.css\" /><![endif]-->
    <noscript><link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/form/assets/css/noscript.css"), "html", null, true);
        echo "\" /></noscript>
  </head>
  <body class=\"is-loading\">

    <!-- Wrapper -->
      <div id=\"wrapper\">

        <!-- Main -->
          <section id=\"main\">
            <header>
              <span class=\"avatar\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/form/images/avatar.jpg"), "html", null, true);
        echo "\" alt=\"\" /></span>
              <h1>Bienvenue</h1>
              <p>Nous vous rémercions pour votre confiance </p>
            </header>

            ";
        // line 31
        $this->displayBlock('form', $context, $blocks);
        // line 32
        echo "

            <!--
            <hr />
            <h2>Extra Stuff!</h2>
            <form method=\"post\" action=\"#\">
              <div class=\"field\">
                <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name\" />
              </div>
              <div class=\"field\">
                <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Email\" />
              </div>
              <div class=\"field\">
                <div class=\"select-wrapper\">
                  <select name=\"department\" id=\"department\">
                    <option value=\"\">Department</option>
                    <option value=\"sales\">Sales</option>
                    <option value=\"tech\">Tech Support</option>
                    <option value=\"null\">/dev/null</option>
                  </select>
                </div>
              </div>
              <div class=\"field\">
                <textarea name=\"message\" id=\"message\" placeholder=\"Message\" rows=\"4\"></textarea>
              </div>
              <div class=\"field\">
                <input type=\"checkbox\" id=\"human\" name=\"human\" /><label for=\"human\">I'm a human</label>
              </div>
              <div class=\"field\">
                <label>But are you a robot?</label>
                <input type=\"radio\" id=\"robot_yes\" name=\"robot\" /><label for=\"robot_yes\">Yes</label>
                <input type=\"radio\" id=\"robot_no\" name=\"robot\" /><label for=\"robot_no\">No</label>
              </div>
              <ul class=\"actions\">
                <li><a href=\"#\" class=\"button\">Get Started</a></li>
              </ul>
            </form>
            <hr />
            -->
            <footer>
              <ul class=\"icons\">

                <li><a href=\"#\" class=\"fa-twitter\">Twitter</a></li>
                <li><a href=\"#\" class=\"fa-instagram\">Instagram</a></li>
                <li><a href=\"#\" class=\"fa-facebook\">Facebook</a></li>
              </ul>
            </footer>
          </section>

        <!-- Footer -->
          <footer id=\"footer\">
            <ul class=\"copyright\">
              <li>&copy; CubeCode</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP JANE DOE</a></li>
            </ul>
          </footer>

      </div>

    <!-- Scripts -->
      <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/templates/form/assets/js/respond.min.js"), "html", null, true);
        echo "\"></script>
      <script>
        if ('addEventListener' in window) {
          window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\\bis-loading\\b/, ''); });
          document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\\.0)/) ? ' is-ie' : '');
        }
      </script>

  </body>
</html>
";
        
        $__internal_f284391efb2a08462632b892715baaf6c108e590396f927517bbd204d1c90065->leave($__internal_f284391efb2a08462632b892715baaf6c108e590396f927517bbd204d1c90065_prof);

        
        $__internal_e93873eaa3b3812a046342f905f9a7fdb61a2735d19b98153519ce952a42eddb->leave($__internal_e93873eaa3b3812a046342f905f9a7fdb61a2735d19b98153519ce952a42eddb_prof);

    }

    // line 31
    public function block_form($context, array $blocks = array())
    {
        $__internal_dafbf613b65a76734b0f88c46066471c33c77ff81def7f8e6c5132c0ad56cdaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dafbf613b65a76734b0f88c46066471c33c77ff81def7f8e6c5132c0ad56cdaa->enter($__internal_dafbf613b65a76734b0f88c46066471c33c77ff81def7f8e6c5132c0ad56cdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_6afe6cbe1e76aff3c50c5451a01fd6dc3d1b16992f7879e1c0a7ba71c504e3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6afe6cbe1e76aff3c50c5451a01fd6dc3d1b16992f7879e1c0a7ba71c504e3a4->enter($__internal_6afe6cbe1e76aff3c50c5451a01fd6dc3d1b16992f7879e1c0a7ba71c504e3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        echo " ";
        
        $__internal_6afe6cbe1e76aff3c50c5451a01fd6dc3d1b16992f7879e1c0a7ba71c504e3a4->leave($__internal_6afe6cbe1e76aff3c50c5451a01fd6dc3d1b16992f7879e1c0a7ba71c504e3a4_prof);

        
        $__internal_dafbf613b65a76734b0f88c46066471c33c77ff81def7f8e6c5132c0ad56cdaa->leave($__internal_dafbf613b65a76734b0f88c46066471c33c77ff81def7f8e6c5132c0ad56cdaa_prof);

    }

    public function getTemplateName()
    {
        return "baseForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 31,  130 => 91,  69 => 32,  67 => 31,  59 => 26,  46 => 16,  40 => 13,  26 => 1,);
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
  Identity by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Login</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <!--[if lte IE 8]><script src=\"assets/js/html5shiv.js\"></script><![endif]-->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/templates/form/assets/css/main.css') }}\" />
    <!--[if lte IE 9]><link rel=\"stylesheet\" href=\"assets/css/ie9.css\" /><![endif]-->
    <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"assets/css/ie8.css\" /><![endif]-->
    <noscript><link rel=\"stylesheet\" href=\"{{ asset('bundles/templates/form/assets/css/noscript.css') }}\" /></noscript>
  </head>
  <body class=\"is-loading\">

    <!-- Wrapper -->
      <div id=\"wrapper\">

        <!-- Main -->
          <section id=\"main\">
            <header>
              <span class=\"avatar\"><img src=\"{{ asset('bundles/templates/form/images/avatar.jpg') }}\" alt=\"\" /></span>
              <h1>Bienvenue</h1>
              <p>Nous vous rémercions pour votre confiance </p>
            </header>

            {% block form %} {% endblock %}


            <!--
            <hr />
            <h2>Extra Stuff!</h2>
            <form method=\"post\" action=\"#\">
              <div class=\"field\">
                <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name\" />
              </div>
              <div class=\"field\">
                <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Email\" />
              </div>
              <div class=\"field\">
                <div class=\"select-wrapper\">
                  <select name=\"department\" id=\"department\">
                    <option value=\"\">Department</option>
                    <option value=\"sales\">Sales</option>
                    <option value=\"tech\">Tech Support</option>
                    <option value=\"null\">/dev/null</option>
                  </select>
                </div>
              </div>
              <div class=\"field\">
                <textarea name=\"message\" id=\"message\" placeholder=\"Message\" rows=\"4\"></textarea>
              </div>
              <div class=\"field\">
                <input type=\"checkbox\" id=\"human\" name=\"human\" /><label for=\"human\">I'm a human</label>
              </div>
              <div class=\"field\">
                <label>But are you a robot?</label>
                <input type=\"radio\" id=\"robot_yes\" name=\"robot\" /><label for=\"robot_yes\">Yes</label>
                <input type=\"radio\" id=\"robot_no\" name=\"robot\" /><label for=\"robot_no\">No</label>
              </div>
              <ul class=\"actions\">
                <li><a href=\"#\" class=\"button\">Get Started</a></li>
              </ul>
            </form>
            <hr />
            -->
            <footer>
              <ul class=\"icons\">

                <li><a href=\"#\" class=\"fa-twitter\">Twitter</a></li>
                <li><a href=\"#\" class=\"fa-instagram\">Instagram</a></li>
                <li><a href=\"#\" class=\"fa-facebook\">Facebook</a></li>
              </ul>
            </footer>
          </section>

        <!-- Footer -->
          <footer id=\"footer\">
            <ul class=\"copyright\">
              <li>&copy; CubeCode</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP JANE DOE</a></li>
            </ul>
          </footer>

      </div>

    <!-- Scripts -->
      <script src=\"{{ asset('bundles/templates/form/assets/js/respond.min.js') }}\"></script>
      <script>
        if ('addEventListener' in window) {
          window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\\bis-loading\\b/, ''); });
          document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\\.0)/) ? ' is-ie' : '');
        }
      </script>

  </body>
</html>
", "baseForm.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\views\\baseForm.html.twig");
    }
}
