<?php

/* elements/login.html.twig */
class __TwigTemplate_02f26faf450b99c354bf255abf7ed3df extends Twig_Template
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
        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal\">

<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fos_csrf_provider"]) ? $context["fos_csrf_provider"] : $this->getContext($context, "fos_csrf_provider")), "generateCsrfToken", array(0 => "authenticate"), "method"), "html", null, true);
        echo "\" />


    <label for=\"username\">Nom d'utilisateur</label>
    <input class=\"input-block-level\" type=\"text\" placeholder=\"Nom d'utilisateur\" id=\"username\" name=\"_username\"  required=\"required\" />

    <label for=\"password\">Mot de passe</label>
    <input class=\"input-block-level\" type=\"password\" placeholder=\"Mot de pass\" id=\"password\" name=\"_password\" required=\"required\" />
    <label class=\"checkbox inline\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">Se souvenir de moi</label>
    </label>
    <br />
     <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\"title=\"J'ai oublié mon mot de passe !\">Mot de passe oublié ?</a>
    <br /><br />
    <p class=\"text-center\">
        <input type=\"submit\" value=\"Connexion\" class=\"class=\"btn-danger\" />
    </p>
</form>

";
    }

    public function getTemplateName()
    {
        return "elements/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,  133 => 67,  109 => 54,  99 => 49,  79 => 32,  67 => 23,  58 => 19,  48 => 12,  41 => 16,  37 => 6,  31 => 4,  28 => 3,);
    }
}
