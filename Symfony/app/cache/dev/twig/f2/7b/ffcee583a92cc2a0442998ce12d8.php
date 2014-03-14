<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_f27bffcee583a92cc2a0442998ce12d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    <!-- Le styles -->
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/docs.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/google-code-prettify/prettify.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <style type=\"text/css\">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type=\"text\"],
      .form-signin input[type=\"password\"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>


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

    <div class=\"container\">

           ";
        // line 67
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 69
        echo "
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"../assets/js/jquery.js\"></script>
    <script src=\"../assets/js/bootstrap-transition.js\"></script>
    <script src=\"../assets/js/bootstrap-alert.js\"></script>
    <script src=\"../assets/js/bootstrap-modal.js\"></script>
    <script src=\"../assets/js/bootstrap-dropdown.js\"></script>
    <script src=\"../assets/js/bootstrap-scrollspy.js\"></script>
    <script src=\"../assets/js/bootstrap-tab.js\"></script>
    <script src=\"../assets/js/bootstrap-tooltip.js\"></script>
    <script src=\"../assets/js/bootstrap-popover.js\"></script>
    <script src=\"../assets/js/bootstrap-button.js\"></script>
    <script src=\"../assets/js/bootstrap-collapse.js\"></script>
    <script src=\"../assets/js/bootstrap-carousel.js\"></script>
    <script src=\"../assets/js/bootstrap-typeahead.js\"></script>

  </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "  | Espace Client ";
    }

    // line 67
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 68
        echo "            ";
    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 68,  138 => 67,  132 => 5,  106 => 69,  104 => 67,  44 => 13,  36 => 11,  27 => 5,  21 => 1,  90 => 32,  86 => 31,  80 => 28,  74 => 25,  67 => 21,  62 => 19,  58 => 18,  53 => 16,  48 => 14,  42 => 11,  40 => 12,  35 => 8,  31 => 6,  28 => 5,);
    }
}
