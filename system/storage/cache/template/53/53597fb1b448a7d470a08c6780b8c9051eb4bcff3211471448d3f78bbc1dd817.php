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
class __TwigTemplate_3a912e180577e8e0e69abdb9c39d5ad53d6b5e91628f29da0c7fed7707d8b096 extends \Twig\Template
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
        echo "    <div  id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"account_part\">
      <h2>";
        // line 21
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
      <hr/>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 24
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 25
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 26
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 27
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
      </ul>
      </div>
     
      ";
        // line 31
        if (($context["credit_cards"] ?? null)) {
            // line 32
            echo "       <div  class=\"account_part\">
      <h2>";
            // line 33
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
      <ul class=\"list-unstyled\">
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 36
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 36);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 36);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "      </ul>
      </div>
      ";
        }
        // line 41
        echo "      
      <div  class=\"account_part\">
      <h2>";
        // line 43
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 45
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 46
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
        ";
        // line 47
        if (($context["reward"] ?? null)) {
            // line 48
            echo "        <li><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
        ";
        }
        // line 50
        echo "        <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 51
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
        <li><a href=\"";
        // line 52
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
      </ul>
      </div>

";
        // line 57
        echo "
";
        // line 75
        echo "

";
        // line 78
        echo "


      <div class=\"account_part\">
      <h2>";
        // line 82
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        ";
        // line 84
        if ( !($context["tracking"] ?? null)) {
            // line 85
            echo "        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
        ";
        } else {
            // line 87
            echo "        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
        <li><a href=\"";
            // line 88
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
        ";
        }
        // line 90
        echo "      </ul>
      </div>
      <div class=\"account_part\">
      <h2>";
        // line 93
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 95
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
      </ul>
      </div>
      ";
        // line 98
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 99
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 101
        echo ($context["footer"] ?? null);
        echo "

<style>
.account_part{
  margin-bottom: 20px;
  border:1px solid; padding:20px;
  height:80%;
  width:80%;
  text-align:center;
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
        return array (  287 => 101,  282 => 99,  278 => 98,  270 => 95,  265 => 93,  260 => 90,  253 => 88,  246 => 87,  238 => 85,  236 => 84,  231 => 82,  225 => 78,  221 => 75,  218 => 57,  209 => 52,  203 => 51,  196 => 50,  188 => 48,  186 => 47,  180 => 46,  174 => 45,  169 => 43,  165 => 41,  160 => 38,  149 => 36,  145 => 35,  140 => 33,  137 => 32,  135 => 31,  126 => 27,  120 => 26,  114 => 25,  108 => 24,  102 => 21,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  74 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/account/account.twig", "");
    }
}
