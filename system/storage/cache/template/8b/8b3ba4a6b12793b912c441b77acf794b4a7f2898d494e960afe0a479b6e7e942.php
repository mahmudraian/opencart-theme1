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
class __TwigTemplate_95585c2b072669b10300c9167dd42739d880138689db536b6bec77d60b253724 extends \Twig\Template
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
  <ul class=\"product-items\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 6
            echo "      <li class=\"product-item \">
        <div class=\"product-item-inner\">
          <div class=\"product-image\">
            <a href=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 9);
            echo "\">
              <img src=\"";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 10);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
            echo "\">
            </a>
          </div>
          <div class=\"product-details\">
            <h6 class=\"product-name\"><a href=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 14);
            echo "\"><b>";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
            echo "</b></a></h6>
            ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 15)) {
                // line 16
                echo "              <p class=\"product-price\">
                ";
                // line 17
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "                  ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 18);
                    echo "
                ";
                } else {
                    // line 20
                    echo "                  <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 20);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 20);
                    echo "</span>
                ";
                }
                // line 22
                echo "              </p>
            ";
            }
            // line 24
            echo "          </div>
          <span>
             ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 26)) {
                // line 27
                echo "                <div class=\"rating1\"> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 28
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 28) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    }
                    // line 29
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "                  </div>
                ";
            }
            // line 32
            echo "          </span>
        </div>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "  </ul>
  ";
        // line 37
        if ((twig_length_filter($this->env, ($context["products"] ?? null)) > 6)) {
            // line 38
            echo "    <div class=\"view-all-products\">
      <button class=\"view-all-products-btn\">View All Products</button>
    </div>
  ";
        }
        // line 42
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







<style>
@media screen and (max-width: 1200px) {
.product-items{
display:grid;
grid-template-columns: 2fr 2fr;

}
.rating1{
display:flex;

}
}
@media screen and (max-width: 700px) {
.product-items{
display:grid;
grid-template-columns: 1fr;

}
.rating1{
display:flex;

}
}




</style>



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
        return array (  144 => 42,  138 => 38,  136 => 37,  133 => 36,  124 => 32,  120 => 30,  114 => 29,  107 => 28,  102 => 27,  100 => 26,  96 => 24,  92 => 22,  84 => 20,  78 => 18,  76 => 17,  73 => 16,  71 => 15,  65 => 14,  56 => 10,  52 => 9,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/extension/module/listproduct.twig", "");
    }
}
