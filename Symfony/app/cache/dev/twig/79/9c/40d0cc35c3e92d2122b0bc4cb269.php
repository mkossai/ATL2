<?php

/* ::admin.html.twig */
class __TwigTemplate_799c40d0cc35c3e92d2122b0bc4cb269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">


        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/isajax.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"../assets/js/html5shiv.js\"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"../assets/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"../assets/ico/apple-touch-icon-114-precomposed.png\">
      <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"../assets/ico/apple-touch-icon-72-precomposed.png\">
                    <link rel=\"apple-touch-icon-precomposed\" href=\"../assets/ico/apple-touch-icon-57-precomposed.png\">
                                   <link rel=\"shortcut icon\" href=\"../assets/ico/favicon.png\">
  </head>

  <body>

<div class=\"navbar navbar-inverse navbar-fixed-top\">
  <div class=\"navbar-inner\">
    <div class=\"container\">
      <a class=\"brand\" href=\"#\" title=\"Ach Tra Lik, Vos histoires de la vie quotidienne\">
        <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/pictures/logo.png"), "html", null, true);
        echo "\" alt=\"Ach Tra Lik, Vos histoires de la vie quotidienne\" />
      </a>
      <div class=\"nav-collapse collapse\">
    
        <ul class=\"nav nav-pills\">
          <li><a href=\"atl-admin-stats.php\" title=\"Tableau de bord\">Tableaux de bord</a></li>
          <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("admin_achtralik_validate");
        echo "\" title=\"Validation ATL\">Validation</a></li>
          <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("admin_achtralik");
        echo "\" title=\"Validation ATL\">ATL</a></li>
          <li><a href=\"atl-admin-comment.php\" title=\"Commenter ATL\">Commentaires</a></li> 
          <li><a href=\"atl-admin-contact.php\" title=\"Commenter ATL\">Contact</a></li>  
          <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("CoreBundle_homepage");
        echo "\" title=\"Commenter ATL\" target=\"_blank\">Aller vers le Site</a></li> 
          
           ";
        // line 53
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 54
            echo "                
              <li>
                <a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"navbar-link\" title=\"Déconnexion\">
                      <img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/pictures/logout.png"), "html", null, true);
            echo "\" border=\"0\" />
                
                    ";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
              </li> 
            ";
        }
        // line 62
        echo "             
            
        </ul>
        
        <p class=\"navbar-text pull-right\" style=\"padding-top:5px;padding-right:10px;\">
          <a href=\"#\" title=\"Ach Tra Lik, Vos histoires de la vie quotidienne\">
            <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/pictures/logo-ar.png"), "html", null, true);
        echo "\" alt=\"Ach Tra Lik, Vos histoires de la vie quotidienne\" />
          </a>
        </p>
      
      </div>
    </div>
  </div>
</div>    
    <div class=\"container\">
      <div class=\"row-fluid\">
        <div class=\"span3\">
        </div> 
        <div class=\"span9\" style=\"margin-top: 100px;\">

          ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "        </div><!--/span-->
      </div>

    </div> <!-- /container -->

  </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " | Administration ATL ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/docs.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

        ";
    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
        // line 83
        echo "                     

          ";
    }

    public function getTemplateName()
    {
        return "::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 83,  179 => 14,  175 => 13,  170 => 12,  167 => 11,  161 => 5,  150 => 86,  148 => 82,  131 => 68,  116 => 59,  111 => 57,  107 => 56,  101 => 53,  96 => 51,  90 => 48,  86 => 47,  77 => 41,  54 => 21,  50 => 20,  46 => 19,  42 => 18,  39 => 17,  22 => 1,  229 => 119,  202 => 99,  190 => 90,  186 => 82,  181 => 87,  171 => 80,  159 => 71,  152 => 67,  141 => 61,  130 => 57,  123 => 62,  115 => 49,  109 => 47,  103 => 54,  100 => 43,  98 => 42,  95 => 41,  91 => 38,  87 => 37,  79 => 36,  60 => 20,  53 => 15,  49 => 14,  44 => 12,  37 => 11,  31 => 4,  28 => 5,);
    }
}
