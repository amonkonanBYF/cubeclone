<?php

/* :default:baseFormRegister.html.twig */
class __TwigTemplate_c7bf17440fdabaf211efa8c23bfe4aef122d8952f2ca8e3ec385d80bc567c92e extends Twig_Template
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
        $__internal_4b0e5c932614ee50155cda6809b3ae95abba073cdadd3498be4b3153ed8963fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b0e5c932614ee50155cda6809b3ae95abba073cdadd3498be4b3153ed8963fb->enter($__internal_4b0e5c932614ee50155cda6809b3ae95abba073cdadd3498be4b3153ed8963fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:baseFormRegister.html.twig"));

        $__internal_0670bd75a6ea5800983023ca54f4fe167537f0f7b262d4cc57a9ed6b57288676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0670bd75a6ea5800983023ca54f4fe167537f0f7b262d4cc57a9ed6b57288676->enter($__internal_0670bd75a6ea5800983023ca54f4fe167537f0f7b262d4cc57a9ed6b57288676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:baseFormRegister.html.twig"));

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
        
        $__internal_4b0e5c932614ee50155cda6809b3ae95abba073cdadd3498be4b3153ed8963fb->leave($__internal_4b0e5c932614ee50155cda6809b3ae95abba073cdadd3498be4b3153ed8963fb_prof);

        
        $__internal_0670bd75a6ea5800983023ca54f4fe167537f0f7b262d4cc57a9ed6b57288676->leave($__internal_0670bd75a6ea5800983023ca54f4fe167537f0f7b262d4cc57a9ed6b57288676_prof);

    }

    public function getTemplateName()
    {
        return ":default:baseFormRegister.html.twig";
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


", ":default:baseFormRegister.html.twig", "C:\\MAMP\\htdocs\\SymfonyProjet\\cubeclone\\app/Resources\\views/default/baseFormRegister.html.twig");
    }
}
