<?php

/* BackEndBundle:Achtralik:validate.html.twig */
class __TwigTemplate_372d690df51143b3c22eef75711e888d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::admin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Désactiver/activer des ATLS ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"page-header\">
           <h1>Valider des ATLS </h1>
        </div>
          ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "                <div class=\"alert alert-error\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "         
            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["bloc"]) {
            // line 15
            echo "            <div class=\"span-atl-valide\">
              <form method=\"post\" action=\" ";
            // line 16
            echo $this->env->getExtension('routing')->getPath("admin_achtralik_validate");
            echo "\"> 
                  <div class=\"span-atl\">
                    
                        <p class=\"text-atl\"> 
                            <i class=\"icon-thumbs-up\"></i>
                            ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bloc"]) ? $context["bloc"] : $this->getContext($context, "bloc")), "content"), "html", null, true);
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
            // line 37
            if ($this->getAttribute((isset($context["bloc"]) ? $context["bloc"] : $this->getContext($context, "bloc")), "publishedAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["bloc"]) ? $context["bloc"] : $this->getContext($context, "bloc")), "publishedAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo " par ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bloc"]) ? $context["bloc"] : $this->getContext($context, "bloc")), "auteur"), "html", null, true);
            echo " - 
                                    ";
            // line 38
            if ($this->getAttribute((isset($context["bloc"]) ? $context["bloc"] : $this->getContext($context, "bloc")), "createdAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["bloc"]) ? $context["bloc"] : $this->getContext($context, "bloc")), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            // line 39
            echo "                                    <a href=\"\" title=\"\">(Inclassable)</a>
                                </p>
                                    ";
            // line 42
            echo "                                    ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 43
                echo "                                        ";
                // line 44
                echo "                                            <li>
                                                <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_achtralik_show", array("id" => $this->getAttribute((isset($context["bloc"]) ? $context["bloc"] : $this->getContext($context, "bloc")), "id"))), "html", null, true);
                echo "\">show</a>
                                            </li>
                                            <li>
                                                <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_achtralik_edit", array("id" => $this->getAttribute((isset($context["bloc"]) ? $context["bloc"] : $this->getContext($context, "bloc")), "id"))), "html", null, true);
                echo "\">edit</a>
                                            </li> 
                                    ";
            }
            // line 50
            echo "                     
                                
                            </div>
                        </div>            
                    </div>

                    <div class=\"span3\" style=\"padding-top:10px;padding-left:10px;\">
                        <input type=\"hidden\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bloc"]) ? $context["bloc"] : $this->getContext($context, "bloc")), "id"), "html", null, true);
            echo "\" name=\"idAtl[]\" /><input type=\"text\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bloc"]) ? $context["bloc"] : $this->getContext($context, "bloc")), "disabled"), "html", null, true);
            echo "\" name=\"actifAls[]\" /> Valider
                    </div>
                    
                    <div class=\"span1\" style=\"padding-top:10px;\">
                        <input type=\"submit\" value=\"OK\" class=\"btn btn-success\" style=\"width:45px;\" />
                    </div>
            </div>             
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bloc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "

";
    }

    public function getTemplateName()
    {
        return "BackEndBundle:Achtralik:validate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 65,  144 => 57,  135 => 50,  129 => 48,  123 => 45,  120 => 44,  118 => 43,  115 => 42,  111 => 39,  107 => 38,  99 => 37,  80 => 21,  72 => 16,  69 => 15,  65 => 14,  62 => 13,  53 => 11,  50 => 10,  46 => 9,  40 => 5,  37 => 4,  29 => 2,);
    }
}
