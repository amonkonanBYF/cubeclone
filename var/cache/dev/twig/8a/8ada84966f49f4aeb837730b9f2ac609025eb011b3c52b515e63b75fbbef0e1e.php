<?php

/* default/baseFormRegister.html.twig */
class __TwigTemplate_6b8f490efa3e7d414b4f86483f78a9cda5dd868bcfeaa93c11f9a51ebe391857 extends Twig_Template
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
        $__internal_316c322cc1f5cdb9903f5f2af220d60a1b990019b28f09b4d3ddb5de2c1f604c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316c322cc1f5cdb9903f5f2af220d60a1b990019b28f09b4d3ddb5de2c1f604c->enter($__internal_316c322cc1f5cdb9903f5f2af220d60a1b990019b28f09b4d3ddb5de2c1f604c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/baseFormRegister.html.twig"));

        $__internal_bb1455c03932a6d7adeec2ec5a4f1dbbaf5691401394def71c38ab7a5267e7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1455c03932a6d7adeec2ec5a4f1dbbaf5691401394def71c38ab7a5267e7c1->enter($__internal_bb1455c03932a6d7adeec2ec5a4f1dbbaf5691401394def71c38ab7a5267e7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/baseFormRegister.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<!-- multistep form -->
<form id=\"msform\">
  <!-- progressbar -->
  <ul id=\"progressbar\">
    <li class=\"active\">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class=\"fs-title\">Create your account</h2>
    <h3 class=\"fs-subtitle\">This is step 1</h3>
    <input type=\"text\" name=\"email\" placeholder=\"Email\" />
    <input type=\"password\" name=\"pass\" placeholder=\"Password\" />
    <input type=\"password\" name=\"cpass\" placeholder=\"Confirm Password\" />
    <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Next\" />
  </fieldset>
  <fieldset>
    <h2 class=\"fs-title\">Social Profiles</h2>
    <h3 class=\"fs-subtitle\">Your presence on the social network</h3>
    <input type=\"text\" name=\"twitter\" placeholder=\"Twitter\" />
    <input type=\"text\" name=\"facebook\" placeholder=\"Facebook\" />
    <input type=\"text\" name=\"gplus\" placeholder=\"Google Plus\" />
    <input type=\"button\" name=\"previous\" class=\"previous action-button\" value=\"Previous\" />
    <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Next\" />
  </fieldset>
  <fieldset>
    <h2 class=\"fs-title\">Personal Details</h2>
    <h3 class=\"fs-subtitle\">We will never sell it</h3>
    <input type=\"text\" name=\"fname\" placeholder=\"First Name\" />
    <input type=\"text\" name=\"lname\" placeholder=\"Last Name\" />
    <input type=\"text\" name=\"phone\" placeholder=\"Phone\" />
    <textarea name=\"address\" placeholder=\"Address\"></textarea>
    <input type=\"button\" name=\"previous\" class=\"previous action-button\" value=\"Previous\" />
    <input type=\"submit\" name=\"submit\" class=\"submit action-button\" value=\"Submit\" />
  </fieldset>
</form>



</body>
</html>


";
        
        $__internal_316c322cc1f5cdb9903f5f2af220d60a1b990019b28f09b4d3ddb5de2c1f604c->leave($__internal_316c322cc1f5cdb9903f5f2af220d60a1b990019b28f09b4d3ddb5de2c1f604c_prof);

        
        $__internal_bb1455c03932a6d7adeec2ec5a4f1dbbaf5691401394def71c38ab7a5267e7c1->leave($__internal_bb1455c03932a6d7adeec2ec5a4f1dbbaf5691401394def71c38ab7a5267e7c1_prof);

    }

    public function getTemplateName()
    {
        return "default/baseFormRegister.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
  <title></title>
</head>
<body>
<!-- multistep form -->
<form id=\"msform\">
  <!-- progressbar -->
  <ul id=\"progressbar\">
    <li class=\"active\">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class=\"fs-title\">Create your account</h2>
    <h3 class=\"fs-subtitle\">This is step 1</h3>
    <input type=\"text\" name=\"email\" placeholder=\"Email\" />
    <input type=\"password\" name=\"pass\" placeholder=\"Password\" />
    <input type=\"password\" name=\"cpass\" placeholder=\"Confirm Password\" />
    <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Next\" />
  </fieldset>
  <fieldset>
    <h2 class=\"fs-title\">Social Profiles</h2>
    <h3 class=\"fs-subtitle\">Your presence on the social network</h3>
    <input type=\"text\" name=\"twitter\" placeholder=\"Twitter\" />
    <input type=\"text\" name=\"facebook\" placeholder=\"Facebook\" />
    <input type=\"text\" name=\"gplus\" placeholder=\"Google Plus\" />
    <input type=\"button\" name=\"previous\" class=\"previous action-button\" value=\"Previous\" />
    <input type=\"button\" name=\"next\" class=\"next action-button\" value=\"Next\" />
  </fieldset>
  <fieldset>
    <h2 class=\"fs-title\">Personal Details</h2>
    <h3 class=\"fs-subtitle\">We will never sell it</h3>
    <input type=\"text\" name=\"fname\" placeholder=\"First Name\" />
    <input type=\"text\" name=\"lname\" placeholder=\"Last Name\" />
    <input type=\"text\" name=\"phone\" placeholder=\"Phone\" />
    <textarea name=\"address\" placeholder=\"Address\"></textarea>
    <input type=\"button\" name=\"previous\" class=\"previous action-button\" value=\"Previous\" />
    <input type=\"submit\" name=\"submit\" class=\"submit action-button\" value=\"Submit\" />
  </fieldset>
</form>



</body>
</html>


", "default/baseFormRegister.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app\\Resources\\views\\default\\baseFormRegister.html.twig");
    }
}
