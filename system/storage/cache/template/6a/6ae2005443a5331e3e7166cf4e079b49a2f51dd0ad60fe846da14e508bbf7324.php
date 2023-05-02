<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* new/template/extension/module/best.twig */
class __TwigTemplate_503afd6e1dcba874f9dac9f82ead5536a845f62372e2f660f9e94429db5a8843 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"common-home\" style=\"overflow:hidden;\" class=\"container\">
<h2 style=\"text-align:center;\" class=\"best-head\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</h2>
<p style=\"text-align:center;\" class=\"best-sub\">";
        // line 3
        echo ($context["sub_title"] ?? null);
        echo "</p>
<div class=\"row\">
 ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 6
            echo "  <div class=\"card product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
    <div class=\"card-body product-thumb transition\">
      <a type=\"button\" class=\"wishlist\" title=\"";
            // line 8
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 8);
            echo "');\"><i class=\"fa fa-heart heart\"></i></a>

      <div class=\"image\"><a href=\"";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 10);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 10);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
            echo "\" class=\"img-responsive\" /></a></div>
      <div class=\"caption\">
      
        <h4><a href=\"";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 13);
            echo "\"><span style=\"color:black;\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
            echo "</span></a></h4>
        
        <p class=\"p-des\">";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 15);
            echo "</p>
     
   
        ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 18)) {
                // line 19
                echo "        <p class=\"price\" style=\"color:#002fff;\">
          ";
                // line 20
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 21);
                    echo "
          ";
                } else {
                    // line 23
                    echo "          <span class=\"price-new\" style=\"color:#002fff;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 23);
                    echo "</span> <span class=\"price-old\" style=\"color:#002fff;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 23);
                    echo "</span>
          <span>


          </span>
          <span>";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discount", [], "any", false, false, false, 28);
                    echo "</span>
          ";
                }
                // line 30
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "          <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 31);
                    echo "</span>
          ";
                }
                // line 33
                echo "        </p>
        ";
            }
            // line 35
            echo "        <div>

                ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 37)) {
                // line 38
                echo "                <div class=\"rating\"> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 39
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 39) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    }
                    // line 40
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
                  </div>
                ";
            }
            // line 42
            echo " 
                </div>

       
        <button class=\"cart-button\" type=\"button\" onclick=\"cart.add('";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 46);
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["button_cart"] ?? null);
            echo "</span></button>

        <!-- <button class=\"view-button\">
          <a href=\"";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 49);
            echo "\">
            <i class=\"fa fa-shopping-eye\"></i>
            <span class=\"hidden-xs hidden-sm hidden-md\">";
            // line 51
            echo ($context["quick_view"] ?? null);
            echo "</span>
          </a>
        </button> -->

        <a href=\"";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 55);
            echo "\" class=\"btn btn-light view-button\"> <i class=\"fa fa-eye\"> </i>";
            echo ($context["quick_view"] ?? null);
            echo "</a>
      </div>

    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "</div>
</div>






";
    }

    public function getTemplateName()
    {
        return "new/template/extension/module/best.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 61,  187 => 55,  180 => 51,  175 => 49,  167 => 46,  161 => 42,  151 => 40,  144 => 39,  139 => 38,  137 => 37,  133 => 35,  129 => 33,  121 => 31,  118 => 30,  113 => 28,  102 => 23,  96 => 21,  94 => 20,  91 => 19,  89 => 18,  83 => 15,  76 => 13,  64 => 10,  57 => 8,  53 => 6,  49 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/extension/module/best.twig", "");
    }
}
