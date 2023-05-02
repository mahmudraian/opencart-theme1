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

/* new/template/extension/module/account.twig */
class __TwigTemplate_254510b1e4c1c425380e1098459292224b7f7a9c00292c128af0d2e53168a632 extends \Twig\Template
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
        echo "<div class=\"account-list\">
<div class=\"list-group\">
  ";
        // line 3
        if ( !($context["logged"] ?? null)) {
            // line 4
            echo "  <a href=\"";
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item list-group-item-action \">";
            echo ($context["text_login"] ?? null);
            echo "</a>
  <a href=\"";
            // line 5
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item list-group-item-action\">";
            echo ($context["text_register"] ?? null);
            echo "</a> 
  <a href=\"";
            // line 6
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item list-group-item-action\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a>
  ";
        }
        // line 8
        echo "  <a href=\"";
        echo ($context["account"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
  ";
        // line 9
        if (($context["logged"] ?? null)) {
            // line 10
            echo "  <a href=\"";
            echo ($context["edit"] ?? null);
            echo "\" class=\"list-group-item list-group-item-action\">";
            echo ($context["text_edit"] ?? null);
            echo "</a> 
  <a href=\"";
            // line 11
            echo ($context["password"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
  ";
        }
        // line 13
        echo "  <a href=\"";
        echo ($context["address"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_address"] ?? null);
        echo "</a> 
  <a href=\"";
        // line 14
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a> 
  <a href=\"";
        // line 15
        echo ($context["order"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_order"] ?? null);
        echo "</a>
  <a href=\"";
        // line 16
        echo ($context["download"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_download"] ?? null);
        echo "</a>
  <a href=\"";
        // line 17
        echo ($context["recurring"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a> 
  <a href=\"";
        // line 18
        echo ($context["reward"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_reward"] ?? null);
        echo "</a>
  <a href=\"";
        // line 19
        echo ($context["return"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_return"] ?? null);
        echo "</a> 
  <a href=\"";
        // line 20
        echo ($context["transaction"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a> 
  <a href=\"";
        // line 21
        echo ($context["newsletter"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a>
  ";
        // line 22
        if (($context["logged"] ?? null)) {
            // line 23
            echo "  <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item list-group-item-action\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
  ";
        }
        // line 25
        echo "</div>
</div>

<style>
.account-list .list-group-item {
    padding: 0.5rem 1rem;
    border-bottom: 1px solid #e9ecef;
    border-radius: 0;
    font-size: 14px;
    color: #212529;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    width: 100%;
    border-radius: 10px;
}
.list-group-item {
    height: 50px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);

}


</style>

";
    }

    public function getTemplateName()
    {
        return "new/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 25,  143 => 23,  141 => 22,  135 => 21,  129 => 20,  123 => 19,  117 => 18,  111 => 17,  105 => 16,  99 => 15,  93 => 14,  86 => 13,  79 => 11,  72 => 10,  70 => 9,  63 => 8,  56 => 6,  50 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/extension/module/account.twig", "");
    }
}
