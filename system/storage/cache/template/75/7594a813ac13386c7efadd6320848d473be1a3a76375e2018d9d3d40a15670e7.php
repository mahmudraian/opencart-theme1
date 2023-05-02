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

/* new/template/product/compare.twig */
class __TwigTemplate_00497f2456276d0d0d07d66ab9153fe64ad97d4549207a5f791f9393cbbd0943 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "

  <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<div id=\"product-compare\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  </ul>
  ";
        // line 11
        if (($context["success"] ?? null)) {
            // line 12
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 16
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 23
            echo "    ";
        }
        // line 24
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1 style=\"text-align:center;\">";
        // line 25
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 26
        if (($context["products"] ?? null)) {
            // line 27
            echo "      <table class=\"table table-hover\">
  <thead>
    <tr>
      <th colspan=\"";
            // line 30
            echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
            echo "\"><strong>";
            echo ($context["text_product"] ?? null);
            echo "</strong></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope=\"row\">";
            // line 35
            echo ($context["text_name"] ?? null);
            echo "</th>
      ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 37
                echo "      <td><a class=\"product_name\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 37);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
                echo "</strong></a></td>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    </tr>
    <tr>
      <th scope=\"row\">";
            // line 41
            echo ($context["text_image"] ?? null);
            echo "</th>
      ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 43
                echo "      <td class=\"text-center\">";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 43)) {
                    echo " <img class=\"compare_image\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 43);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
                    echo "\" class=\"img-thumbnail\" /> ";
                }
                echo "</td>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    </tr>
    <tr>
      <th scope=\"row\">";
            // line 47
            echo ($context["text_price"] ?? null);
            echo "</th>
      ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 49
                echo "      <td>";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 49)) {
                    // line 50
                    echo "        ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 50)) {
                        // line 51
                        echo "        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 51);
                        echo "
        ";
                    } else {
                        // line 52
                        echo " <strike>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 52);
                        echo "</strike> ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 52);
                        echo "
        ";
                    }
                    // line 54
                    echo "        ";
                }
                echo "</td>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    </tr>
    <tr>
      <th scope=\"row\">";
            // line 58
            echo ($context["text_model"] ?? null);
            echo "</th>
      ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 60
                echo "      <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 60);
                echo "</td>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "    </tr>
    <tr>
      <th scope=\"row\">";
            // line 64
            echo ($context["text_manufacturer"] ?? null);
            echo "</th>
      ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 66
                echo "      <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 66);
                echo "</td>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "    </tr>
    <tr>
      <th scope=\"row\">";
            // line 70
            echo ($context["text_availability"] ?? null);
            echo "</th>
      ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 72
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 72);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "    </tr>
    ";
            // line 75
            if (($context["review_status"] ?? null)) {
                // line 76
                echo "    <tr>
      <th>";
                // line 77
                echo ($context["text_rating"] ?? null);
                echo "</th>
      ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 79
                    echo "      <td class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 80
                        echo "        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 80) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 81
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " <br/>
        ";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 82);
                    echo "</td>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo " </tr>
    ";
            }
            // line 85
            echo "    <tr>
      <tr>
        <td>";
            // line 87
            echo ($context["text_summary"] ?? null);
            echo "</td>
        ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 89
                echo "        <td class=\"description\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 89);
                echo "</td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo " </tr>
      <tr>
        <td>";
            // line 92
            echo ($context["text_weight"] ?? null);
            echo "</td>
        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 94
                echo "        <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 94);
                echo "</td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo " </tr>
      <tr>
        <td>";
            // line 97
            echo ($context["text_dimension"] ?? null);
            echo "</td>
        ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 99
                echo "        <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 99);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 99);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 99);
                echo "</td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo " </tr>
        </tbody>
      
      ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 104
                echo "      <thead>
        <tr>
          <td colspan=\"";
                // line 106
                echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 106);
                echo "</strong></td>
        </tr>
      </thead>
      ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 109));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 110
                    echo "      <tbody>
        <tr>
          <th>";
                    // line 112
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 112);
                    echo "</th>
          ";
                    // line 113
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 114
                        echo "          ";
                        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 114)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null)) {
                            // line 115
                            echo "          <td> ";
                            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 115)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null);
                            echo "</td>
          ";
                        } else {
                            // line 117
                            echo "          <td></td>
          ";
                        }
                        // line 119
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    echo "        </tr>
      </tbody>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "      <tr>
        <td></td>
      
        ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 128
                echo "        <td><input type=\"button\" value=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn  btn-block btn-pro\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 128);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 128);
                echo "');\" />
          <a href=\"";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 129);
                echo "\" class=\"btn btn-block btn-remove\">
          <i class=\"fa-delete-right\"></i>
          ";
                // line 131
                echo ($context["button_remove"] ?? null);
                echo "</a></td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo " </tr>
  </tbody>
</table>

      ";
        } else {
            // line 137
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 139
            echo ($context["continue"] ?? null);
            echo "\" class=\" btn-pro\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 142
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 143
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 145
        echo ($context["footer"] ?? null);
        echo " 

<style>
.btn-pro {
    width: 80%;
    height: 35px;
    background-color: #43467f;
    border-radius: 8px;
    margin-bottom: 5px;
    box-shadow: 0 0 5px;
    color:white;
    width: 100%;
     
}

 .btn-pro:hover {
    background-color: yellow green;
    color: black;
    box-shadow: 0 0 10px black;
}
.btn-remove {
    width: 80%;
    height: 35px;
    background-color: #CD3513;
    border-radius: 8px;
    margin-bottom: 5px;
    box-shadow: 0 0 5px;
    color:white;
    width: 100%;



    
}

 .btn-remove:hover {
    background-color: yellow green;
    color: black;
    box-shadow: 0 0 10px black;
}
/* .table{
  border:0 !important;
  border-radius: 10px;
  box-shadow: 0 0 10px black;
  padding-top: 50px;
  Rulls: 10px;
  color: black;
    border-top: 0px !important;
}
tr{
  border: 1px solid black;
  border-radius: 10px;
}

td{
text-align: center !important;

}

.compare_image{
 width:50%;
  border-radius: 10px;

  }

  tr{
    border: 1px solid black;
    background_color: black;
  }
   .table-bordered{
border: 1px solid black;

   }


   */
   .product_name{
    color: black;
    font-size: 20px;
    font-weight: bold;
    text-align: center !important;

   } 


</style>";
    }

    public function getTemplateName()
    {
        return "new/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 145,  521 => 143,  516 => 142,  508 => 139,  502 => 137,  495 => 132,  487 => 131,  482 => 129,  473 => 128,  469 => 127,  464 => 124,  458 => 123,  450 => 120,  444 => 119,  440 => 117,  434 => 115,  431 => 114,  427 => 113,  423 => 112,  419 => 110,  415 => 109,  407 => 106,  403 => 104,  399 => 103,  394 => 100,  381 => 99,  377 => 98,  373 => 97,  369 => 95,  360 => 94,  356 => 93,  352 => 92,  348 => 90,  339 => 89,  335 => 88,  331 => 87,  327 => 85,  323 => 83,  315 => 82,  307 => 81,  300 => 80,  295 => 79,  291 => 78,  287 => 77,  284 => 76,  282 => 75,  279 => 74,  270 => 72,  266 => 71,  262 => 70,  258 => 68,  249 => 66,  245 => 65,  241 => 64,  237 => 62,  228 => 60,  224 => 59,  220 => 58,  216 => 56,  207 => 54,  199 => 52,  193 => 51,  190 => 50,  187 => 49,  183 => 48,  179 => 47,  175 => 45,  158 => 43,  154 => 42,  150 => 41,  146 => 39,  135 => 37,  131 => 36,  127 => 35,  117 => 30,  112 => 27,  110 => 26,  106 => 25,  99 => 24,  96 => 23,  93 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  79 => 17,  74 => 16,  66 => 12,  64 => 11,  61 => 10,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/product/compare.twig", "");
    }
}
