<?php

/* elements/menu-hori.html.twig */
class __TwigTemplate_2d49aaa4f81b8a68b1d1ef73bacbc787 extends Twig_Template
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
        echo "<!--   ****____ PUB ADSENSE ____**** -->
<div class=\"row\">
\t<div class=\"span10 offset-banner-pub\">
\t\t  <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/pictures/ads.png"), "html", null, true);
        echo "\" alt=\"\" />
\t</div>

<!--   ****____ MENU CATEGORIES  ____**** -->

  <div class=\"span12 menu-btn\">
  <a href=\"\" title=\"\"><button class=\"btn btn-danger\" type=\"submit\">TOP ATL</button></a>
  ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cats"]) ? $context["cats"] : $this->getContext($context, "cats")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 12
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("CoreBundle_category_atl", array("name" => $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "name"))), "html", null, true);
            echo "\" title=\"\"><button class=\"btn btn-danger\" type=\"submit\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "name"), "html", null, true);
            echo "</button></a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
\t<a onclick=\"\$('#ATL').toggle();\" style=\"cursor:pointer;\" title=\"ACH TRA LIK LYOM ?\" alt=\"ACH TRA LIK LYOM ?\"><button class=\"btn btn-warning\" type=\"submit\">Ach Tra Lik ?</button></a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "elements/menu-hori.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  38 => 12,  34 => 11,  155 => 74,  151 => 73,  148 => 72,  140 => 68,  135 => 66,  131 => 65,  123 => 60,  107 => 48,  93 => 40,  81 => 31,  71 => 26,  61 => 21,  59 => 20,  56 => 19,  50 => 18,  48 => 17,  45 => 16,  42 => 14,  40 => 13,  24 => 4,  19 => 1,  171 => 47,  167 => 46,  164 => 45,  159 => 44,  154 => 13,  129 => 68,  125 => 61,  121 => 59,  117 => 65,  101 => 44,  95 => 41,  92 => 47,  89 => 45,  86 => 44,  84 => 43,  76 => 29,  74 => 36,  67 => 31,  65 => 23,  55 => 23,  51 => 22,  39 => 14,  23 => 1,  132 => 66,  108 => 53,  98 => 48,  78 => 30,  66 => 22,  57 => 18,  47 => 11,  41 => 7,  37 => 12,  31 => 4,  28 => 5,);
    }
}
