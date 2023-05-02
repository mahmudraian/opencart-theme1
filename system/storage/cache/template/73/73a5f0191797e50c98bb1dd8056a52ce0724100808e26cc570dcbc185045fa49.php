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

/* new/template/extension/module/listproduct.twig */
class __TwigTemplate_e159466985354cfd86958e99d894da7a9d564bd0de41fb920a3a219515d58fb8 extends \Twig\Template
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
<h1 style=\"text-align:center; margin-top: 25px;margin-bottom: 40px;\">Product List - Popular Items</h1>

<div class=\"product-list\">
  <ul class=\" product-items\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "      <li class=\"product-item \">
        <div class=\"product-item-inner\">
          <div class=\"product-image\">
            <a href=\"";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 10);
            echo "\">
              <img src=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 11);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
            echo "\">
            </a>
          </div>
          <div class=\"product-details\">
            <h6 class=\"product-name\"><a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 15);
            echo "\"><b>";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
            echo "</b></a></h6>
            ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 16)) {
                // line 17
                echo "              <p class=\"product-price\">
                ";
                // line 18
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "                  ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 19);
                    echo "
                ";
                } else {
                    // line 21
                    echo "                  <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 21);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 21);
                    echo "</span>
                ";
                }
                // line 23
                echo "              </p>
            ";
            }
            // line 25
            echo "          </div>

          <span>
             ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 28)) {
                // line 29
                echo "                <div class=\"rating1\"> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 30
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 30) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    }
                    // line 31
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
                  </div>
                ";
            }
            // line 33
            echo " 
          </span>
        </div>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  </ul>

  ";
        // line 40
        if ((twig_length_filter($this->env, ($context["products"] ?? null)) > 6)) {
            // line 41
            echo "    <div class=\"view-all-products\">
      <button class=\"view-all-products-btn\">View All Products</button>
    </div>
  ";
        }
        // line 45
        echo "</div>
</div>





<script>
document.addEventListener('DOMContentLoaded', function() {
  const viewAllProductsBtn = document.querySelector('.view-all-products-btn');
  const productItems = document.querySelectorAll('.product-item');

  if (viewAllProductsBtn && productItems) {
    viewAllProductsBtn.addEventListener('click', function() {
      productItems.forEach(function(item) {
        item.style.display = 'flex';
      });

      viewAllProductsBtn.style.display = 'none';
    });
  }

  // Hide additional products initially
  for (let i = 6; i < productItems.length; i++) {
    productItems[i].style.display = 'none';
  }
});


</script>



";
    }

    public function getTemplateName()
    {
        return "new/template/extension/module/listproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 45,  142 => 41,  140 => 40,  136 => 38,  126 => 33,  116 => 31,  109 => 30,  104 => 29,  102 => 28,  97 => 25,  93 => 23,  85 => 21,  79 => 19,  77 => 18,  74 => 17,  72 => 16,  66 => 15,  57 => 11,  53 => 10,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/extension/module/listproduct.twig", "");
    }
}
