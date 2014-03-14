<?php

/* elements/publicate.html.twig */
class __TwigTemplate_3f62dbf318bc021cda87014d1e551c32 extends Twig_Template
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
        // line 2
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 3
            echo "    ";
            // line 4
            echo "\t\t\t<div class=\"span-atl\" id=\"ATL\" style=\"display:none;\">
\t\t\t\t\t
\t\t\t\t<div class=\"head-title-ATL\">
\t\t\t\t\t<p>Ach Tra Lik Lyom ?</p>
\t\t\t\t</div>

\t\t\t\t<p class=\"text-atl\">
\t\t\t\t\t<strong class=\"concept\"> <i class=\"icon-th-large\"></i>\t Suivez le Concept :</strong>
\t\t\t\t\tUne anecdote qui commence par \"<strong>Lyom,</strong>\" et qui se termine par \"<strong>ATL</strong>\".
\t\t\t\t</p>
\t\t\t\t<p class=\"text-atl\">
\t\t\t\t\t<strong class=\"concept\"> <i class=\"icon-th-large\"></i>\t Essayer :</strong>
\t\t\t\t\t Minimiser les fautes d'orthographes pour que votre ATL soit claire pour tout les visiteurs.
\t\t\t\t</p>
\t\t\t\t<p class=\"text-error\" style=\"padding:4px 11px;\">
\t\t\t\t\tN'utilisez pas cet espace pour des discussions personnelles ou pour faire l'objet d'une publicité.
\t\t\t\t</p>
\t\t\t\t<br />\t
\t\t
\t\t\t\t<form method=\"post\" name=\"form-ATL\" id=\"publicate_atl\" action=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("CoreBundle_publicate_atl");
            echo "\">
\t\t\t\t\t<table class=\"table-condensed\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tPseudo : 
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"input-small\" id=\"atl_pseudo\" name=\"pseudo\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t<div id=\"errorPseudo\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"tablea\">
\t\t\t\t\t\t\t\tSexe : 
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<select name=\"sexe\" class=\"input-medium\" id=\"sex_atl\" />
\t\t\t\t\t\t\t\t\t<option selected>Choisir</option>
\t\t\t\t\t\t\t\t\t<option>Femme</option>
\t\t\t\t\t\t\t\t\t<option>Homme</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div id=\"errorSex\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"tablea\">
\t\t\t\t\t\t\t\tCatégorie : 
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<select id=\"frontend_backendbundle_achtraliktype_category\" name=\"frontend_backendbundle_achtraliktype[category]\" required=\"required\">
\t\t\t\t\t\t\t\t  <option selected>Choisir</option>
\t\t\t\t\t\t\t\t  ";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cats"]) ? $context["cats"] : $this->getContext($context, "cats")));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 51
                echo "\t\t\t\t\t\t\t\t  <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "name"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div id=\"errorCat\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"6\">
\t\t\t\t\t\t\t<textarea id=\"frontend_backendbundle_achtraliktype_content\" MAXLENGTH=\"350\"  name=\"frontend_backendbundle_achtraliktype[content]\" required=\"required\"></textarea>
\t\t\t\t\t\t\t<div id=\"errorCont\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t\t<div class=\"checkbox\"><label><input type=\"checkbox\" name=\"prevenir\">
\t\t\t\t\t\t\t\t<strong>M'envoyer un mail après validation ATL</strong></label></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td colspan=\"2\" align=\"right\" style=\"font-size:12px;\">
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\tdisplaylimit(\"\",\"max\",350)
\t\t\t\t\t\t\t\t</script>
\t\t\t\t   
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Publier mon ATL\" class=\"btn btn-warning\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t        <div id=\"sending\">
\t\t\t            <div class=\"progress progress-striped active\">
\t\t\t                <div class=\"bar\" style=\"width: 40%;\"> </div> 
\t\t\t            </div>
\t\t\t        </div>        
\t\t\t        <div id=\"success\"></div> \t\t\t\t   
\t\t\t\t</form>
\t\t\t</div>

";
        } else {
            // line 89
            echo "<div class=\"span-atl\" id=\"ATL\" style=\"display:none;\">
\t\tUtiliser vos identifiants pour vous connecter afin de pouvoir publier votre ATL 
\t\t<a href=\"\">ici</a>, ou créer votre compte 
\t\t<a href=\"\">ici</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "elements/publicate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 50,  54 => 30,  44 => 23,  21 => 3,  49 => 14,  38 => 12,  34 => 11,  155 => 74,  151 => 73,  148 => 72,  140 => 68,  135 => 66,  131 => 89,  123 => 60,  107 => 48,  93 => 40,  81 => 51,  71 => 26,  61 => 21,  59 => 20,  56 => 19,  50 => 18,  48 => 17,  45 => 16,  42 => 14,  40 => 13,  24 => 4,  19 => 2,  171 => 47,  167 => 46,  164 => 45,  159 => 44,  154 => 13,  129 => 68,  125 => 61,  121 => 59,  117 => 65,  101 => 44,  95 => 41,  92 => 52,  89 => 45,  86 => 44,  84 => 43,  76 => 29,  74 => 36,  67 => 31,  65 => 23,  55 => 23,  51 => 22,  39 => 14,  23 => 4,  132 => 66,  108 => 53,  98 => 48,  78 => 30,  66 => 22,  57 => 18,  47 => 11,  41 => 7,  37 => 12,  31 => 4,  28 => 5,);
    }
}
