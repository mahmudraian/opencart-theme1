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

/* new/template/product/product.twig */
class __TwigTemplate_446b26bd95a4c1e68f68e296b092735968643d15eace28401f2bbaeea2d84fd8 extends \Twig\Template
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
<div style=\"color:black;\">
<div id=\"product-product\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </ul>
  <div class=\"row\">";
        // line 9
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 10
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 11
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\"> ";
        // line 18
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 19
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 20
            echo "        ";
        } else {
            // line 21
            echo "        ";
            $context["class"] = "col-sm-8";
            // line 22
            echo "        ";
        }
        // line 23
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\"> ";
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 24
            echo "          <ul class=\"thumbnails\">
            ";
            // line 25
            if (($context["thumb"] ?? null)) {
                // line 26
                echo "            <li><a class=\"thumbnail\" href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a></li>
            ";
            }
            // line 28
            echo "            ";
            if (($context["images"] ?? null)) {
                // line 29
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 30
                    echo "            <li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 30);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"> <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 30);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" /></a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "            ";
            }
            // line 33
            echo "          </ul>
          ";
        }
        // line 35
        echo "          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 37
        if (($context["attribute_groups"] ?? null)) {
            // line 38
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 40
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 41
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 43
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 45
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 46
        if (($context["attribute_groups"] ?? null)) {
            // line 47
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 50
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 52);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 56));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 57
                    echo "                <tr>
                  <td>";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 58);
                    echo "</td>
                  <td>";
                    // line 59
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 59);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "              </table>
            </div>
            ";
        }
        // line 67
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 68
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 71
            echo ($context["text_write"] ?? null);
            echo "</h2>
                ";
            // line 72
            if (($context["review_guest"] ?? null)) {
                // line 73
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 75
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 76
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 81
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 83
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 88
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 89
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 99
                echo ($context["entry_good"] ?? null);
                echo "</div>
                </div>
                ";
                // line 101
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 104
                echo ($context["text_loading"] ?? null);
                echo "\"
                     class=\"btn-pro\">";
                // line 105
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 109
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 111
            echo "              </form>
            </div>
            ";
        }
        // line 113
        echo "</div>
        </div>
        ";
        // line 115
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 116
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 117
            echo "        ";
        } else {
            // line 118
            echo "        ";
            $context["class"] = "col-sm-4";
            // line 119
            echo "        ";
        }
        // line 120
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
          <div style=\"display:flex;\" class=\"btn-group\">
            <button style=\"width:20%\" type=\"button\" data-toggle=\"tooltip\" class=\"btn-pro\" title=\"";
        // line 122
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-heart\"></i></button>
            <button style=\"width:20%\" type=\"button\" data-toggle=\"tooltip\" class=\"btn-pro\" title=\"";
        // line 123
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-exchange\" ></i></button>
          </div>
          //manufacturer
          <h1>";
        // line 126
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 128
        if (($context["manufacturer"] ?? null)) {
            // line 129
            echo "            <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 131
        echo "            <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
            ";
        // line 132
        if (($context["reward"] ?? null)) {
            // line 133
            echo "            <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 135
        echo "            <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>
          ";
        // line 137
        if (($context["price"] ?? null)) {
            // line 138
            echo "          <ul class=\"list-unstyled\">
            ";
            // line 139
            if ( !($context["special"] ?? null)) {
                // line 140
                echo "            <li>
              <h2>";
                // line 141
                echo ($context["price"] ?? null);
                echo "</h2>
            </li>
            ";
            } else {
                // line 144
                echo "            <li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
            <li>
              <h2>";
                // line 146
                echo ($context["special"] ?? null);
                echo " komdam!</h2>
            </li>
            ";
            }
            // line 149
            echo "            ";
            if (($context["tax"] ?? null)) {
                // line 150
                echo "            <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
            ";
            }
            // line 152
            echo "            ";
            if (($context["points"] ?? null)) {
                // line 153
                echo "            <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
            ";
            }
            // line 155
            echo "            ";
            if (($context["discounts"] ?? null)) {
                // line 156
                echo "            <li>
              <hr>
            </li>
            ";
                // line 159
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 160
                    echo "            <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 160);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 160);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                echo "            ";
            }
            // line 163
            echo "          </ul>
          ";
        }
        // line 165
        echo "          <div id=\"product\"> ";
        if (($context["options"] ?? null)) {
            // line 166
            echo "            <hr>
            <h3>";
            // line 167
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 169
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 169) == "select")) {
                    // line 170
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 170)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 171);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 171);
                    echo "</label>
              <select name=\"option[";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 173
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 174
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 174));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 175
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 175);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 175);
                        echo "
                ";
                        // line 176
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 176)) {
                            // line 177
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 177);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 177);
                            echo ")
                ";
                        }
                        // line 178
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 180
                    echo "              </select>
            </div>
            ";
                }
                // line 183
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 183) == "radio")) {
                    // line 184
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 184)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 185);
                    echo "</label>
              <div id=\"input-option";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 186);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 186));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 187
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 189
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 189);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 189);
                        echo "\" />
                    ";
                        // line 190
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 190)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 190);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 190);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 190)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 190);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 190);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 191
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 191);
                        echo "
                    ";
                        // line 192
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 192)) {
                            // line 193
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 193);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 193);
                            echo ")
                    ";
                        }
                        // line 194
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 196
                    echo " </div>
            </div>
            ";
                }
                // line 199
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 199) == "checkbox")) {
                    // line 200
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 200)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 201);
                    echo "</label>
              <div id=\"input-option";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 202);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 202));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 203
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 205
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 205);
                        echo "\" />
                    ";
                        // line 206
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 206)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 206);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 206);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 206)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 206);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 206);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 207
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 207);
                        echo "
                    ";
                        // line 208
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 208)) {
                            // line 209
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 209);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 209);
                            echo ")
                    ";
                        }
                        // line 210
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 212
                    echo " </div>
            </div>
            ";
                }
                // line 215
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 215) == "text")) {
                    // line 216
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 216)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 217
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 217);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 217);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 218
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 218);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 218);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 218);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 218);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 221
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 221) == "textarea")) {
                    // line 222
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 222)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 223
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 223);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 223);
                    echo "</label>
              <textarea name=\"option[";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 224);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 224);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 224);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 224);
                    echo "</textarea>
            </div>
            ";
                }
                // line 227
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 227) == "file")) {
                    // line 228
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 228)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 229
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 229);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 230
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 230);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 231
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                    echo "\" />
            </div>
            ";
                }
                // line 234
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 234) == "date")) {
                    // line 235
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 235)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 236);
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 238
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 238);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 244
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 244) == "datetime")) {
                    // line 245
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 245)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 246
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 246);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 246);
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 248
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 248);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 248);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 248);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 254
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 254) == "time")) {
                    // line 255
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 255)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 256
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 256);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 256);
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 258
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 258);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 258);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 258);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 264
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 265
            echo "            ";
        }
        // line 266
        echo "            ";
        if (($context["recurrings"] ?? null)) {
            // line 267
            echo "            <hr>
            <h3>";
            // line 268
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 271
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 272
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 273
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 273);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 273);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 275
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 279
        echo "            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 280
        echo ($context["entry_qty"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 281
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 282
        echo ($context["product_id"] ?? null);
        echo "\" />
              <br/>
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 284
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
            </div>
            ";
        // line 286
        if ((($context["minimum"] ?? null) > 1)) {
            // line 287
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 288
        echo "</div>
          ";
        // line 289
        if (($context["review_status"] ?? null)) {
            // line 290
            echo "          <div class=\"rating\">
            <p>";
            // line 291
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 292
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 293
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["text_write"] ?? null);
            echo "</a></p>
            <hr>
            <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 296
            echo ($context["share"] ?? null);
            echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
          </div>
          ";
        }
        // line 300
        echo " </div>
      </div>
      ";
        // line 302
        if (($context["products"] ?? null)) {
            // line 303
            echo "      <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
      <div class=\"row\"> ";
            // line 304
            $context["i"] = 0;
            // line 305
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 306
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 307
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 308
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 309
                    echo "        ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 310
                    echo "        ";
                } else {
                    // line 311
                    echo "        ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 312
                    echo "        ";
                }
                // line 313
                echo "        <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 315
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 315);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 315);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 315);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 315);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 317
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 317);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 317);
                echo " aaa</a></h4>
              <p>";
                // line 318
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 318);
                echo "</p>
              ";
                // line 319
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 319)) {
                    // line 320
                    echo "              <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 321
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 321) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 322
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
              ";
                }
                // line 324
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 324)) {
                    // line 325
                    echo "              <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 325)) {
                        // line 326
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 326);
                        echo "
                ";
                    } else {
                        // line 327
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 327);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 327);
                        echo "</span> ";
                    }
                    // line 328
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 328)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 328);
                        echo "</span> ";
                    }
                    echo " </p>
              ";
                }
                // line 329
                echo " </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"cart.add('";
                // line 331
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 331);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 331);
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span> <i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 332
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 332);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 333
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 333);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
          </div>
        </div>
        ";
                // line 337
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 338
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 339
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 340
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 341
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 342
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 344
                echo "        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 345
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
        ";
        }
        // line 347
        echo "        ";
        if (($context["tags"] ?? null)) {
            // line 348
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 349
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 350
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 350);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 350);
                    echo "</a>,
        ";
                } else {
                    // line 351
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 351);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 351);
                    echo "</a> ";
                }
                // line 352
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 354
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 355
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 434
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 439
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 445
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 512
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 516
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script> 
";
        // line 554
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
    color: yellow;
    box-shadow: 0 0 10px black;

}




</style>
";
    }

    public function getTemplateName()
    {
        return "new/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1449 => 554,  1408 => 516,  1401 => 512,  1331 => 445,  1322 => 439,  1314 => 434,  1232 => 355,  1227 => 354,  1218 => 352,  1211 => 351,  1201 => 350,  1197 => 349,  1192 => 348,  1189 => 347,  1180 => 345,  1177 => 344,  1173 => 342,  1171 => 341,  1168 => 340,  1166 => 339,  1163 => 338,  1161 => 337,  1152 => 333,  1146 => 332,  1138 => 331,  1134 => 329,  1122 => 328,  1115 => 327,  1109 => 326,  1106 => 325,  1103 => 324,  1094 => 322,  1087 => 321,  1082 => 320,  1080 => 319,  1076 => 318,  1070 => 317,  1059 => 315,  1053 => 313,  1050 => 312,  1047 => 311,  1044 => 310,  1041 => 309,  1038 => 308,  1035 => 307,  1032 => 306,  1027 => 305,  1025 => 304,  1020 => 303,  1018 => 302,  1014 => 300,  1006 => 296,  992 => 293,  985 => 292,  981 => 291,  978 => 290,  976 => 289,  973 => 288,  967 => 287,  965 => 286,  958 => 284,  953 => 282,  949 => 281,  945 => 280,  942 => 279,  936 => 275,  925 => 273,  921 => 272,  917 => 271,  911 => 268,  908 => 267,  905 => 266,  902 => 265,  896 => 264,  883 => 258,  876 => 256,  869 => 255,  866 => 254,  853 => 248,  846 => 246,  839 => 245,  836 => 244,  823 => 238,  816 => 236,  809 => 235,  806 => 234,  798 => 231,  790 => 230,  786 => 229,  779 => 228,  776 => 227,  764 => 224,  758 => 223,  751 => 222,  748 => 221,  736 => 218,  730 => 217,  723 => 216,  720 => 215,  715 => 212,  707 => 210,  700 => 209,  698 => 208,  693 => 207,  677 => 206,  671 => 205,  667 => 203,  661 => 202,  657 => 201,  650 => 200,  647 => 199,  642 => 196,  634 => 194,  627 => 193,  625 => 192,  621 => 191,  603 => 190,  597 => 189,  593 => 187,  587 => 186,  583 => 185,  576 => 184,  573 => 183,  568 => 180,  561 => 178,  554 => 177,  552 => 176,  545 => 175,  541 => 174,  537 => 173,  531 => 172,  525 => 171,  518 => 170,  515 => 169,  511 => 168,  507 => 167,  504 => 166,  501 => 165,  497 => 163,  494 => 162,  483 => 160,  479 => 159,  474 => 156,  471 => 155,  463 => 153,  460 => 152,  452 => 150,  449 => 149,  443 => 146,  437 => 144,  431 => 141,  428 => 140,  426 => 139,  423 => 138,  421 => 137,  413 => 135,  405 => 133,  403 => 132,  396 => 131,  386 => 129,  384 => 128,  379 => 126,  371 => 123,  365 => 122,  359 => 120,  356 => 119,  353 => 118,  350 => 117,  347 => 116,  345 => 115,  341 => 113,  336 => 111,  330 => 109,  323 => 105,  319 => 104,  313 => 101,  308 => 99,  295 => 89,  291 => 88,  283 => 83,  278 => 81,  270 => 76,  266 => 75,  262 => 73,  260 => 72,  256 => 71,  251 => 68,  248 => 67,  243 => 64,  236 => 62,  227 => 59,  223 => 58,  220 => 57,  216 => 56,  209 => 52,  205 => 50,  201 => 49,  197 => 47,  195 => 46,  191 => 45,  187 => 43,  181 => 41,  178 => 40,  172 => 38,  170 => 37,  166 => 36,  163 => 35,  159 => 33,  156 => 32,  139 => 30,  134 => 29,  131 => 28,  117 => 26,  115 => 25,  112 => 24,  107 => 23,  104 => 22,  101 => 21,  98 => 20,  95 => 19,  93 => 18,  86 => 17,  83 => 16,  80 => 15,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  66 => 10,  62 => 9,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/product/product.twig", "");
    }
}
