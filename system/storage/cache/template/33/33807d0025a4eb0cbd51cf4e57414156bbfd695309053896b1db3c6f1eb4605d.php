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

/* new/template/checkout/cart.twig */
class __TwigTemplate_1d2108393160a814bf9a9d927125b7ec7f9372d62acdb9152afc2a9c4b2ed5ca extends \Twig\Template
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
<div id=\"checkout-cart\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if (($context["attention"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 14
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 18
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 23
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 24
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 25
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 26
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 27
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1 style=\"text-align:center;\">";
        // line 32
        echo ($context["heading_title"] ?? null);
        echo "
        ";
        // line 33
        if (($context["weight"] ?? null)) {
            // line 34
            echo "        &nbsp;(";
            echo ($context["weight"] ?? null);
            echo ")
        ";
        }
        // line 35
        echo " </h1>
      <form action=\"";
        // line 36
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        ";
        // line 38
        echo "        <div>
          <table class=\"table table-hover\">
            <thead>
              <tr>
                <th class=\"text-center\">";
        // line 42
        echo ($context["column_image"] ?? null);
        echo "</th>
                <th class=\"text-left\">";
        // line 43
        echo ($context["column_name"] ?? null);
        echo "</th>
                <th class=\"text-left\">";
        // line 44
        echo ($context["column_model"] ?? null);
        echo "</th>
                <th class=\"text-left\">";
        // line 45
        echo ($context["column_quantity"] ?? null);
        echo "</th>
                <th class=\"text-right\">";
        // line 46
        echo ($context["column_price"] ?? null);
        echo "</th>
                <th class=\"text-right\">";
        // line 47
        echo ($context["column_total"] ?? null);
        echo "</th>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 53
            echo "            <tr>
              <td class=\"text-center\">";
            // line 54
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 54)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 54);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 54);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 54);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 54);
                echo "\" class=\"img-thumbnail\" /></a> ";
            }
            echo "</td>
              <td class=\"text-left\"><a href=\"";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 55);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 55);
            echo "</a> ";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 55)) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 56
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 56)) {
                // line 57
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 57));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br/>
                <small>";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 58);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 58);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                ";
            }
            // line 60
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 60)) {
                echo " <br/>
                <small>";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 61);
                echo "</small> ";
            }
            // line 62
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 62)) {
                echo " <br/>
                <span class=\"label label-info\">";
                // line 63
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 63);
                echo "</small> ";
            }
            echo "</td>
              <td class=\"text-left\">";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 64);
            echo "</td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"quantity[";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 66);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 66);
            echo "\" size=\"1\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 68
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-update\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 69
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-dlt\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 69);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 71);
            echo "</td>
              <td class=\"text-right\">";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 72);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 76
            echo "            <tr>
              <td></td>
              <td class=\"text-left\">";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 78);
            echo "</td>
              <td class=\"text-left\"></td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 83
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-pro\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 83);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 85);
            echo "</td>
              <td class=\"text-right\">";
            // line 86
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 86);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "              </tbody>
            
          </table>
        </div>
      </form>
      ";
        // line 94
        if (($context["modules"] ?? null)) {
            // line 95
            echo "      <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
      <p>";
            // line 96
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
      <div class=\"panel-group\" id=\"accordion\"> ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 98
                echo "        ";
                echo $context["module"];
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo " </div>
      ";
        }
        // line 100
        echo " <br/>
      <div class=\"row\">
        <div class=\"col-sm-4 col-sm-offset-8\">
          <table class=\"table table-hover\">
            ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 105
            echo "            <tr>
              <td class=\"text-center\"><strong>";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 106);
            echo ":</strong></td>
              <td class=\"\">";
            // line 107
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 107);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "          </table>
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 114
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-remove\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 115
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn  btn-pro\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 117
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 118
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 120
        echo ($context["footer"] ?? null);
        echo " 

<style>
.container{
   flex-grow: 2;
    background-color: white;
    min-height: 100%;
    padding: 0%;
    background: url(https://i.imgur.com/BKyjjFa.png) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;

}



.btn-pro {
    width: 80%;
    height: 35px;
    background-color: #43467f;
    border-radius: 8px;
    margin-bottom: 5px;
    box-shadow: 0 1px black;
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
    background-color: #ffe4e1;
    border-radius: 8px;
    margin-bottom: 5px;
    box-shadow: 0 2px;
    color:black;
    width: 100%;



    
}

 .btn-remove:hover {
    background-color: yellow green;
    color: black;
    box-shadow: 0 0 10px black;
}

.table-bordered{
  border: 1px solid black;

}

.btn-update{
  background-color: #4D4D4D;
  color: white;
}
.btn-dlt{
  background-color: #9E6F21;
  color: black;
}

@media screen and (max-width: 767px){

  .row{
  margin-bottom: 0px !important;
  }




}


</style>";
    }

    public function getTemplateName()
    {
        return "new/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 120,  408 => 118,  404 => 117,  397 => 115,  391 => 114,  385 => 110,  376 => 107,  372 => 106,  369 => 105,  365 => 104,  359 => 100,  355 => 99,  346 => 98,  342 => 97,  338 => 96,  333 => 95,  331 => 94,  324 => 89,  315 => 86,  311 => 85,  304 => 83,  296 => 78,  292 => 76,  287 => 75,  278 => 72,  274 => 71,  267 => 69,  263 => 68,  256 => 66,  251 => 64,  243 => 63,  238 => 62,  234 => 61,  229 => 60,  226 => 59,  217 => 58,  210 => 57,  207 => 56,  199 => 55,  185 => 54,  182 => 53,  178 => 52,  170 => 47,  166 => 46,  162 => 45,  158 => 44,  154 => 43,  150 => 42,  144 => 38,  140 => 36,  137 => 35,  131 => 34,  129 => 33,  125 => 32,  118 => 31,  115 => 30,  112 => 29,  109 => 28,  106 => 27,  103 => 26,  100 => 25,  98 => 24,  93 => 23,  85 => 19,  82 => 18,  74 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/checkout/cart.twig", "");
    }
}
