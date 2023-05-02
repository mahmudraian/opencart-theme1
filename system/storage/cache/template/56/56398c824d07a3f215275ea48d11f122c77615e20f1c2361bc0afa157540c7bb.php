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

/* new/template/account/account.twig */
class __TwigTemplate_c5f8dbf84684c269c6d4ce1d38f687e55f81091c1cae61b1ab57be0bea9b35c7 extends \Twig\Template
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
<div id=\"account-account\" class=\"container\">
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
        if (($context["success"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div class=\"account_page\">
    <div  id=\"content\" class=\"";
        // line 20
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"account_part\">
      <h2>";
        // line 22
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
      <hr>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 25
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 26
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 27
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 28
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
      </ul>
      </div>
     
      ";
        // line 32
        if (($context["credit_cards"] ?? null)) {
            // line 33
            echo "       <div  class=\"account_part\">
      <h2>";
            // line 34
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
      <hr>
      <ul class=\"list-unstyled\">
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 38
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 38);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 38);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "      </ul>
      </div>
      ";
        }
        // line 43
        echo "      
      <div  class=\"account_part\">
      <h2>";
        // line 45
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
      <hr>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 48
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 49
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
        ";
        // line 50
        if (($context["reward"] ?? null)) {
            // line 51
            echo "        <li><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
        ";
        }
        // line 53
        echo "        <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 54
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 55
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
      </ul>
      </div>

";
        // line 60
        echo "
";
        // line 78
        echo "

";
        // line 81
        echo "


      <div class=\"account_part\">
      <h2>";
        // line 85
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2>
      <hr>
      <ul class=\"list-unstyled\">
        ";
        // line 88
        if ( !($context["tracking"] ?? null)) {
            // line 89
            echo "        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
        ";
        } else {
            // line 91
            echo "        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
        <li><a href=\"";
            // line 92
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
        ";
        }
        // line 94
        echo "      </ul>
      </div>
      <div class=\"account_part\">
      <h2>";
        // line 97
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
      <hr>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 100
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
      </ul>
      </div>
      ";
        // line 103
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 104
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
</div>
</div>
";
        // line 108
        echo ($context["footer"] ?? null);
        echo "

<style>
.account_part{
  margin-bottom: 20px;
  border:1px solid; padding:20px;
  height:80%;
  width:80%;
  text-align:center;
  box-shadow: 5px 10px #888888;
}

.account_part:hover{
  border: 1px;
  box-shadow: 0 0 10px #888888;
  border-radius: 10px;
}

.account_page{
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



</style>";
    }

    public function getTemplateName()
    {
        return "new/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 108,  288 => 104,  284 => 103,  276 => 100,  270 => 97,  265 => 94,  258 => 92,  251 => 91,  243 => 89,  241 => 88,  235 => 85,  229 => 81,  225 => 78,  222 => 60,  213 => 55,  207 => 54,  200 => 53,  192 => 51,  190 => 50,  184 => 49,  178 => 48,  172 => 45,  168 => 43,  163 => 40,  152 => 38,  148 => 37,  142 => 34,  139 => 33,  137 => 32,  128 => 28,  122 => 27,  116 => 26,  110 => 25,  104 => 22,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  74 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/account/account.twig", "");
    }
}
