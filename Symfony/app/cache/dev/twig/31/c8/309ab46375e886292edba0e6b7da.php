<?php

/* CoreBundle:Home:category.html.twig */
class __TwigTemplate_31c8309ab46375e886292edba0e6b7da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.js"), "html", null, true);
        echo "\"></script>

   ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["atls"]) ? $context["atls"] : $this->getContext($context, "atls")));
        foreach ($context['_seq'] as $context["_key"] => $context["atl"]) {
            // line 7
            echo "
        <div class=\"span-atl\">
        
            <p class=\"text-atl\"> 
                <i class=\"icon-thumbs-up\"></i>
                ";
            // line 12
            echo $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "content");
            echo " ATL
            </p>
            <div class=\"info-atl\">
                
                <div class=\"part-left\">
                    
                    <p class=\"valide-atl\">
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("CoreBundle_merite", array("id" => $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"))), "html", null, true);
            echo "\" title=\"Bien mérité ATL\" class=\"text-success\" id=\"merite";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"), "html", null, true);
            echo "\">Bien mérité</a> 

                            <script type=\"text/javascript\">
                            \$(function() {
                            \$(\"#merite";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"), "html", null, true);
            echo "\")
                                    .click(
                                            \"href\",
                                            function() {
                                                \$.ajax( {
                                                            url : \$(this).attr('href'),
                                                            type : 'GET',
                                                            data : \$(this).serializeArray(),
                                                            success : function(data) {
                                                                \$('#success";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"), "html", null, true);
            echo "').html(data);
                                                                effacer();
                                                            },
                                                            error : function(data) {

                                                            },
                                                            beforeSend : function() {

                                                            },
                                                            complete : function() {
                                                                
                                                            }
                                                        });
                                                return false;
                                            });  
                            });              
                            </script>                           
                       <span class=\"muted\"> ( <span id=\"success";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "merite"), "html", null, true);
            echo "</span> ) - </span>
                        <a href=\"\" title=\"\" class=\"text-info\">C'est bien une ATL </a>
                    </p>
                    
                    <p class=\"date-atl\">
                        Le ";
            // line 54
            if ($this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "publishedAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "publishedAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo " par ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atl"]) ? $context["atl"] : $this->getContext($context, "atl")), "auteur"), "html", null, true);
            echo " - 
                        <a href=\"\" title=\"\">(Inclassable)</a>
                    </p>                  
                    
                </div>
                <div class=\"part-right\">
                    <div class=\"fb-like\" data-href=\"https://www.facebook.com/pages/EBusiness-interactive/533952619981617?ref=hl\" data-send=\"false\" data-layout=\"button_count\" data-width=\"140\" data-show-faces=\"false\" data-font=\"lucida grande\"></div>             
                </div>
                
            </div>
            
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo " 
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Home:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 67,  109 => 54,  99 => 49,  79 => 32,  67 => 23,  58 => 19,  48 => 12,  41 => 7,  37 => 6,  31 => 4,  28 => 3,);
    }
}
