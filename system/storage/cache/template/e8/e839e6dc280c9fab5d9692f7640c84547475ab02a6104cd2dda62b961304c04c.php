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
class __TwigTemplate_1f761ba99c4d999c4c684527dccfce10c00fc003c0636ba43b082ce62b177a14 extends \Twig\Template
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
                echo "</strong></a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "      </td>
    </tr>
    <tr>
      <th scope=\"row\">";
            // line 42
            echo ($context["text_image"] ?? null);
            echo "</th>
      ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 44
                echo "      <td class=\"text-center\">";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 44)) {
                    echo " <img class=\"compare_image\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 44);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
                    echo "\" class=\"img-thumbnail\" /> ";
                }
                echo "</td>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "    </tr>
    <tr>
      <th scope=\"row\">";
            // line 48
            echo ($context["text_price"] ?? null);
            echo "</th>
      ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 50
                echo "      <td>";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "        ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 51)) {
                        // line 52
                        echo "        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 52);
                        echo "
        ";
                    } else {
                        // line 53
                        echo " <strike>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 53);
                        echo "</strike> ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 53);
                        echo "
        ";
                    }
                    // line 55
                    echo "        ";
                }
                echo "</td>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "    </tr>
    <tr>
      <th scope=\"row\">";
            // line 59
            echo ($context["text_model"] ?? null);
            echo "</th>
      ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 61
                echo "      <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 61);
                echo "</td>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "    </tr>
    <tr>
      <th scope=\"row\">";
            // line 65
            echo ($context["text_manufacturer"] ?? null);
            echo "</th>
      ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 67
                echo "      <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 67);
                echo "</td>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "    </tr>
    <tr>
      <th scope=\"row\">";
            // line 71
            echo ($context["text_availability"] ?? null);
            echo "</th>
      ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 73
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 73);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "    </tr>
    ";
            // line 76
            if (($context["review_status"] ?? null)) {
                // line 77
                echo "    <tr>
      <th>";
                // line 78
                echo ($context["text_rating"] ?? null);
                echo "</th>
      ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 80
                    echo "      <td class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 81
                        echo "        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 81) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 82
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " <br/>
        ";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 83);
                    echo "</td>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo " </tr>
    ";
            }
            // line 86
            echo "    <tr>
      <tr>
        <td>";
            // line 88
            echo ($context["text_summary"] ?? null);
            echo "</td>
        ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 90
                echo "        <td class=\"description\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 90);
                echo "</td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo " </tr>
      <tr>
        <td>";
            // line 93
            echo ($context["text_weight"] ?? null);
            echo "</td>
        ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 95
                echo "        <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 95);
                echo "</td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo " </tr>
      <tr>
        <td>";
            // line 98
            echo ($context["text_dimension"] ?? null);
            echo "</td>
        ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 100
                echo "        <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 100);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 100);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 100);
                echo "</td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo " </tr>
        </tbody>
      
      ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 105
                echo "      <thead>
        <tr>
          <td colspan=\"";
                // line 107
                echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 107);
                echo "</strong></td>
        </tr>
      </thead>
      ";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 110));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 111
                    echo "      <tbody>
        <tr>
          <th>";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 113);
                    echo "</th>
          ";
                    // line 114
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 115
                        echo "          ";
                        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 115)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null)) {
                            // line 116
                            echo "          <td> ";
                            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 116)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null);
                            echo "</td>
          ";
                        } else {
                            // line 118
                            echo "          <td></td>
          ";
                        }
                        // line 120
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "        </tr>
      </tbody>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "      <tr>
        <td></td>
      
        ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 129
                echo "        <td><input type=\"button\" value=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn  btn-block btn-pro\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 129);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 129);
                echo "');\" />
          <a href=\"";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 130);
                echo "\" class=\"btn btn-block btn-remove\">
          <i class=\"fa-delete-right\"></i>
          ";
                // line 132
                echo ($context["button_remove"] ?? null);
                echo "</a></td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo " </tr>
  </tbody>
</table>

      ";
        } else {
            // line 138
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 140
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-default\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 143
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 144
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 146
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
        return array (  527 => 146,  522 => 144,  517 => 143,  509 => 140,  503 => 138,  496 => 133,  488 => 132,  483 => 130,  474 => 129,  470 => 128,  465 => 125,  459 => 124,  451 => 121,  445 => 120,  441 => 118,  435 => 116,  432 => 115,  428 => 114,  424 => 113,  420 => 111,  416 => 110,  408 => 107,  404 => 105,  400 => 104,  395 => 101,  382 => 100,  378 => 99,  374 => 98,  370 => 96,  361 => 95,  357 => 94,  353 => 93,  349 => 91,  340 => 90,  336 => 89,  332 => 88,  328 => 86,  324 => 84,  316 => 83,  308 => 82,  301 => 81,  296 => 80,  292 => 79,  288 => 78,  285 => 77,  283 => 76,  280 => 75,  271 => 73,  267 => 72,  263 => 71,  259 => 69,  250 => 67,  246 => 66,  242 => 65,  238 => 63,  229 => 61,  225 => 60,  221 => 59,  217 => 57,  208 => 55,  200 => 53,  194 => 52,  191 => 51,  188 => 50,  184 => 49,  180 => 48,  176 => 46,  159 => 44,  155 => 43,  151 => 42,  146 => 39,  135 => 37,  131 => 36,  127 => 35,  117 => 30,  112 => 27,  110 => 26,  106 => 25,  99 => 24,  96 => 23,  93 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  79 => 17,  74 => 16,  66 => 12,  64 => 11,  61 => 10,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/product/compare.twig", "");
    }
}
