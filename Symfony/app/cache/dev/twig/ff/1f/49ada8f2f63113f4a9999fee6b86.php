<?php

/* ::base.html.twig */
class __TwigTemplate_ff1f49ada8f2f63113f4a9999fee6b86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EmulateIE7\" />
    <meta http-equiv=\"content-language\" content=\"fr\" />
    <meta name=\"robots\" content=\"index, follow\" />
    <link rel=\"canonical\" href=\"http://www.achtralik.ma/\" />
    <meta name=\"author\" content=\" Ach Tra Lik - http://www.achtralik.ma/\" />
    <meta name=\"google-site-verification\" content=\"\" />
    <meta name=\"copyright\" content=\"© Copyright 2013 ACH TRA LIK. Tous droits réservés\" />  
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/ico/favicon.ico"), "html", null, true);
        echo "\" />
    <title> 
            ACH TRA LIK : Vos histoires de la vie quotidienne
    </title>
    
    <meta name=\"description\" content=\"\" />
    <meta name=\"keywords\" content=\"\" />
    <!-- DEBUT Style Générale -->
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/bootstrap.css"), "html", null, true);
        echo "\" title=\"Feuille de style du site communautaire ACH TRA LIK\" rel=\"stylesheet\" media=\"screen\">
            <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/ico/favicon.ico"), "html", null, true);
        echo "\" type=\"image/ico\" />
            
    <!--   FIN Style Générale   -->    
    </head>
    <body>
    <!--   ****____ HEADER FIX ____**** -->

    ";
        // line 30
        $this->env->loadTemplate("elements/header.html.twig")->display($context);
        // line 31
        echo "    <!--   ****____ PUB ADSENSE ____**** -->

    
    <!--   ****____ MENU CATEGORIES  ____**** -->

            ";
        // line 36
        $this->env->loadTemplate("elements/menu-hori.html.twig")->display($context);
        // line 37
        echo "    <!--   ****____ CONTENT GENERAL ____**** -->
    
    <div class=\"row\">
        <!--   ****____ COLONNE CENTRALE ____**** -->

        <div class=\"span-col-content\">
            ";
        // line 43
        $this->env->loadTemplate("elements/publicate.html.twig")->display($context);
        // line 44
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "            ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 47
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "        </div>        
        <!--   ****____ COLONNE RIGHT ____**** -->
        
        <div class=\"span-col-right\">
            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/pictures/ads2.png"), "html", null, true);
        echo "\" alt=\"\" style=\"border:solid 1px gray;\" />   
            <br /><br />
            <div class=\"fb-like-box backs\" data-href=\"https://www.facebook.com/pages/EBusiness-interactive/533952619981617\" data-width=\"302\" data-height=\"700\" data-show-faces=\"true\" data-stream=\"true\" data-show-border=\"true\" data-header=\"false\"></div>         
            <br />
        </div>
        
    </div>
<!-- REGOIGNER NOUS SUR FACE BOOK DANS LA PREMIERE PAGE DES LOUVERTURE  -->

    <div class=\"clear\"></div>
    
    <!--  ************************************ -->
    <script src=\"http://code.jquery.com/jquery.js\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/isajax.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
    
    <script type=\"text/javascript\">
    \$('.dropdown-toggle').dropdown()
    </script>

    <div id=\"fb-root\"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = \"//connect.facebook.net/fr_FR/all.js#xfbml=1\";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
    if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
    fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </body>
</html>
";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
    }

    // line 45
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 46
        echo "            ";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  171 => 47,  167 => 46,  164 => 45,  159 => 44,  154 => 13,  129 => 68,  125 => 67,  121 => 66,  117 => 65,  101 => 52,  95 => 48,  92 => 47,  89 => 45,  86 => 44,  84 => 43,  76 => 37,  74 => 36,  67 => 31,  65 => 30,  55 => 23,  51 => 22,  39 => 14,  23 => 1,  132 => 66,  108 => 53,  98 => 48,  78 => 31,  66 => 22,  57 => 18,  47 => 11,  41 => 7,  37 => 13,  31 => 4,  28 => 3,);
    }
}
