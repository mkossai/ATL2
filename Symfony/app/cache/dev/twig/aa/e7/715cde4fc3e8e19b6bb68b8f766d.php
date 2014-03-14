<?php

/* elements/header.html.twig */
class __TwigTemplate_aae7715cde4fc3e8e19b6bb68b8f766d extends Twig_Template
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
        echo "<div class=\"navbar navbar-inverse navbar-fixed-top\">
\t<div class=\"navbar-inner\">
\t\t<div class=\"container\">
\t\t\t<a class=\"brand\" href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("CoreBundle_homepage");
        echo "\" title=\"Ach Tra Lik, Vos histoires de la vie quotidienne\">
\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/pictures/logo.png"), "html", null, true);
        echo "\" alt=\"Ach Tra Lik, Vos histoires de la vie quotidienne\" />
\t\t\t</a>
\t\t\t<div class=\"nav-collapse collapse\">
\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t<li class=\"active\"><a href=\"#\" title=\"TOP ATL\">TOP ATL</a></li>
\t\t\t\t\t<li><a href=\"#\" title=\"Foire Aux Question AchTraLik\">FAQ</a></li>
\t\t\t\t\t";
        // line 12
        echo "\t\t\t\t\t";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "\t\t\t\t\t    ";
            // line 14
            echo "
\t\t\t\t\t    ";
            // line 16
            echo "\t\t\t\t\t    ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 17
                echo "\t\t\t\t\t        ";
                // line 18
                echo "\t\t\t\t\t        <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("back_end_homepage");
                echo "\">Administration</a></li>
\t\t\t\t\t    ";
            }
            // line 19
            echo "\t
\t\t\t\t\t     ";
            // line 20
            if ($this->env->getExtension('security')->isGranted("ROLE_MODERATOR")) {
                // line 21
                echo "
\t\t\t\t\t     \t<li>
\t\t\t\t\t     \t\t<a href=\"";
                // line 23
                echo $this->env->getExtension('routing')->getPath("CoreBundle_moderer");
                echo "\">Modérer les ATLS</a>
\t\t\t\t\t     \t</li>
\t\t\t\t\t    ";
            }
            // line 26
            echo "

\t\t\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t\t    ";
            // line 30
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" title=\"Rejoignez-nous et inscrivez-vous dès maintenant\" >S'incsrire
\t\t\t\t\t\t</a>

\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t<a title=\"Login compte ATL\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" onclick=\"\$('#show_cnx').toggle('slow');\" href=\"#\">
\t\t\t\t\t\tConnexion <span class=\"caret\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu cnx\" id=\"show_cnx\" style=\"display: none;\">
\t\t\t\t\t\t   ";
            // line 40
            $this->env->loadTemplate("elements/login.html.twig")->display($context);
            // line 41
            echo "\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t
\t\t\t\t\t</li> 
\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t\t

\t\t\t\t\t<li>
\t\t\t\t\t\t<a onclick=\"\$('#show_search').toggle('slow');\" style=\"cursor:pointer;\" title=\"Rechercher ATL\">
\t\t\t\t\t\t\t<img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/pictures/search.png"), "html", null, true);
        echo "\" alt=\"Rechercher ATL\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<form  method=\"post\" name=\"formul\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"search-atl\" id=\"show_search\" class=\"span3\" placeholder=\"Search ATL\" />
\t\t\t\t\t\t</form>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<p class=\"navbar-text pull-right\" style=\"padding-top:5px;padding-right:10px;\">
\t\t\t\t\t";
        // line 59
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 60
            echo "\t\t\t\t\t    ";
            // line 61
            echo "\t\t\t\t\t 
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Compte <span class=\"caret\"></span></button>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t  <li><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Voir profile</a></li>
\t\t\t\t\t\t  <li><a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Editer profile</a></li>
\t\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t\t\t\t  <li><a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t
\t\t\t\t\t<a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("CoreBundle_homepage");
        echo "\" title=\"Ach Tra Lik, Vos histoires de la vie quotidienne\">
\t\t\t\t\t\t<img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/pictures/logo-ar.png"), "html", null, true);
        echo "\" alt=\"Ach Tra Lik, Vos histoires de la vie quotidienne\" />
\t\t\t\t\t</a>
\t\t\t\t</p>
\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "elements/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 74,  151 => 73,  148 => 72,  140 => 68,  135 => 66,  131 => 65,  123 => 60,  107 => 48,  93 => 40,  81 => 31,  71 => 26,  61 => 21,  59 => 20,  56 => 19,  50 => 18,  48 => 17,  45 => 16,  42 => 14,  40 => 13,  24 => 4,  19 => 1,  171 => 47,  167 => 46,  164 => 45,  159 => 44,  154 => 13,  129 => 68,  125 => 61,  121 => 59,  117 => 65,  101 => 44,  95 => 41,  92 => 47,  89 => 45,  86 => 44,  84 => 43,  76 => 29,  74 => 36,  67 => 31,  65 => 23,  55 => 23,  51 => 22,  39 => 14,  23 => 1,  132 => 66,  108 => 53,  98 => 48,  78 => 30,  66 => 22,  57 => 18,  47 => 11,  41 => 7,  37 => 12,  31 => 4,  28 => 5,);
    }
}
