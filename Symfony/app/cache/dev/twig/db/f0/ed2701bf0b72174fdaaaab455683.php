<?php

/* BackEndBundle:Home:index.html.twig */
class __TwigTemplate_dbf0ed2701bf0b72174fdaaaab455683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::admin.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Achtralik list</h1>

    <ul>
        <li>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_achtralik_new");
        echo "\">
                Create a new entry
            </a>
        </li>
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_achtralik_validate");
        echo "\">Valider les ATL</a></li>
    </ul>
   ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["atls"]) ? $context["atls"] : $this->getContext($context, "atls")));
        foreach ($context['_seq'] as $context["_key"] => $context["atl"]) {
            // line 15
            echo "
        <div class=\"span-atl\">
        
            <p class=\"text-atl\"> 
                <i class=\"icon-thumbs-up\"></i>
                ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "content"), "html", null, true);
            echo " ATL
            </p>
            <div class=\"info-atl\">
                
                <div class=\"part-left\">
                    
                    <p class=\"valide-atl\">
                        <a href=\"\" title=\"\" class=\"text-success\">Bien mérité</a> 
                        <span class=\"muted\">(1054) - </span>
                        <a href=\"\" title=\"\" class=\"text-info\">C'est bien une ATL </a>
                        <span class=\"muted\"> (2487) - </span>
                        <a href=\"\" title=\"\" class=\"text-success\">Comment</a>
                        <span class=\"muted\"> (473)</span>
                    </p>
                    
                    <p class=\"date-atl\">
                        Le ";
            // line 36
            if ($this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "publishedAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "publishedAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo " par ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "auteur"), "html", null, true);
            echo " - 
                        ";
            // line 37
            if ($this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "createdAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            // line 38
            echo "                        <a href=\"\" title=\"\">(Inclassable)</a>
                    </p>
                        ";
            // line 41
            echo "                        ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 42
                echo "                            ";
                // line 43
                echo "                                <li>
                                    <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_achtralik_show", array("id" => $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"))), "html", null, true);
                echo "\">show</a>
                                </li>
                                <li>
                                    <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_achtralik_edit", array("id" => $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"))), "html", null, true);
                echo "\">edit</a>
                                </li> 
                        ";
            }
            // line 49
            echo "                     
                    
                </div>
            </div>            
        </div>
            <div class=\"span-atl-valide\">
                <form action=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("admin_achtralik_deserve");
            echo "\" method=\"POST\" id=\"publicate_atl";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"), "html", null, true);
            echo "\">
                    <div class=\"span3\" style=\"padding-top:10px;padding-left:10px;\">
                        <input type=\"hidden\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"), "html", null, true);
            echo "\" name=\"idAtl[]\" /><input type=\"text\" name=\"countmerite[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "merite"), "html", null, true);
            echo "\" id=\"count";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"), "html", null, true);
            echo "\" class=\"input-mini\" style=\"vertical-align:middle;\" /> Bien mérité
                    </div>
                    
                    <div class=\"span3\" style=\"padding-top:10px;padding-left:10px;\" >
                        <input type=\"text\" name=\"coountvalide[]\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "bonne"), "html", null, true);
            echo "\" id=\"bonne";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"), "html", null, true);
            echo "\" class=\"input-mini\" style=\"vertical-align:middle;\" /> C'est bien une ATL             
                    </div>
                    
                    <div class=\"span1\" style=\"padding-top:10px;\">
                        <input type=\"submit\" value=\"OK\" class=\"btn btn-success\" style=\"width:45px;\" />
                    </div>
                    <div id=\"success";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"), "html", null, true);
            echo "\"></div>
                </form>
                <script type=\"text/javascript\">
                \$(function() {
                \$(\"#publicate_atl";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"), "html", null, true);
            echo "\")
                        .submit(
                                \"submit\",
                                function() {
                                    \$.ajax( {
                                                url : \$(this).attr('action'),
                                                type : 'POST',
                                                data : \$(this).serializeArray(),
                                                success : function(data) {
                                                    \$('#success";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"), "html", null, true);
            echo "').html(data);
                                                    effacer();
                                                },
                                                error : function(data) {

                                                },
                                                beforeSend : function() {
                                                    if(\$('#count";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"), "html", null, true);
            echo "').val()==0)
                                                        {
                                                            alert('zid chwia a sat '+\$('#count";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"), "html", null, true);
            echo "').val());
                                                            \$('#count";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"), "html", null, true);
            echo "').focus();
                                                            \$('#errorPseudo').html('<div class=\"alert alert-error\" style=\"width:104px;\"><font size=\"2px\" face=\"calibri\" color=\"red\">Le champ PSEUDO est obligatoire </font></div>');
                                                            return false;
                                                        }
                                                    else
                                                    {
                                                        \$('#errorPseudo').html(''); 
                                                    }
                
                                                    \$('#success";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"), "html", null, true);
            echo "').html('<div class=\"progress progress-striped active\"><div class=\"bar\" style=\"width: 100%;\" id=\"sending\"></div></div>');
                                                    \$('#sending').hide();

                                                },
                                                complete : function() {
                                                    
                                                }
                                            });
                                    return false;
                                });  
                });              
                </script>
  
            </div>                
                <div class=\"part-right\">
                    <div class=\"fb-like\" data-href=\"https://www.facebook.com/pages/EBusiness-interactive/533952619981617?ref=hl\" data-send=\"false\" data-layout=\"button_count\" data-width=\"140\" data-show-faces=\"false\" data-font=\"lucida grande\"></div>             
                </div>
                
            

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "     

    ";
    }

    public function getTemplateName()
    {
        return "BackEndBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 119,  202 => 99,  190 => 90,  186 => 89,  181 => 87,  171 => 80,  159 => 71,  152 => 67,  141 => 61,  130 => 57,  123 => 55,  115 => 49,  109 => 47,  103 => 44,  100 => 43,  98 => 42,  95 => 41,  91 => 38,  87 => 37,  79 => 36,  60 => 20,  53 => 15,  49 => 14,  44 => 12,  37 => 8,  31 => 4,  28 => 3,);
    }
}
