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

/* new/template/common/cart.twig */
class __TwigTemplate_f0a1437f369e392dea43cc5c1e6009f03bc89a5b81fa8e59e8652fde39a4ded6 extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
  ";
        // line 3
        if ((twig_length_filter($this->env, ($context["products"] ?? null)) > 0)) {
            // line 4
            echo "  <img class=\"menu-item-2\" style=\"height:30px;\" src=\"";
            echo ($context["base_url"] ?? null);
            echo "image/theme/cart.PNG\" data-toggle=\"dropdown\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle\">
";
        } else {
            // line 6
            echo "    <img class=\"menu-item-2\" style=\"height:20px;\" src=\"";
            echo ($context["base_url"] ?? null);
            echo "image/theme/empty-cart.png\" data-toggle=\"dropdown\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle\">
";
        }
        // line 8
        echo "

 
  <ul class=\"dropdown-menu pull-right\">
    ";
        // line 12
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 13
            echo "    <li>
      <table class=\"table table-striped table-hover\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 16
                echo "        <tr>
          <td class=\"text-center\">";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                    echo "\" class=\"img-thumbnail\" /></a> ";
                }
                echo "</td>
          <td class=\"text-left\"><a href=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                echo "</a> ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 19));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 20
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 20);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 20);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "            ";
                }
                // line 22
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 22)) {
                    echo " <br />
            - <small>";
                    // line 23
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 23);
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 24);
                echo "</td>
          <td class=\"text-right\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 25);
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 26);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-cart btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 30
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 32);
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 34);
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 35);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "

      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
          ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 46
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 47);
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 48);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        </table>
        <p class=\"text-right\"><a href=\"";
            // line 52
            echo ($context["cart"] ?? null);
            echo "\"><strong><i class=\"fa fa-shopping-cart\"></i> ";
            echo ($context["text_cart"] ?? null);
            echo "</strong></a>&nbsp;&nbsp;&nbsp;<a href=\"";
            echo ($context["checkout"] ?? null);
            echo "\"><strong><i class=\"fa fa-share\"></i> ";
            echo ($context["text_checkout"] ?? null);
            echo "</strong></a></p>
      </div>
    </li>
    ";
        } else {
            // line 56
            echo "    <li>
      <p class=\"text-center\">";
            // line 57
            echo ($context["text_empty"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 60
        echo "  </ul>
</div>

<style>
.btn-cart {
    width: 10%;
    height: 35px;
    background-color: #43467f;
    border-radius: 8px;
    margin-bottom: 5px;
    box-shadow: 0 1px black;
    color:white;
    width: 100%;
     
}

 .btn-cart:hover {
    background-color: yellow green;
    color: white;
    box-shadow: 0 0 10px black;
}

</style>
";
    }

    public function getTemplateName()
    {
        return "new/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 60,  225 => 57,  222 => 56,  209 => 52,  206 => 51,  197 => 48,  193 => 47,  190 => 46,  186 => 45,  177 => 38,  166 => 35,  162 => 34,  157 => 32,  153 => 30,  148 => 29,  137 => 26,  133 => 25,  129 => 24,  121 => 23,  116 => 22,  113 => 21,  104 => 20,  97 => 19,  91 => 18,  77 => 17,  74 => 16,  70 => 15,  66 => 13,  64 => 12,  58 => 8,  50 => 6,  42 => 4,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/common/cart.twig", "");
    }
}
