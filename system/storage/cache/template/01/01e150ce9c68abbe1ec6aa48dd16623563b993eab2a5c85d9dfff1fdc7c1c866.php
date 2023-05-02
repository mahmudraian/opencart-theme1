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
class __TwigTemplate_ae676986364f865f2902131f199e61818a2bae6f7f2316cbadf5f7886cb6e39b extends \Twig\Template
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
        echo "<div class=\"list-group\">
  ";
        // line 2
        if ( !($context["logged"] ?? null)) {
            // line 3
            echo "  <a href=\"";
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item list-group-item-action \">";
            echo ($context["text_login"] ?? null);
            echo "</a>
  <a href=\"";
            // line 4
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item list-group-item-action\">";
            echo ($context["text_register"] ?? null);
            echo "</a> 
  <a href=\"";
            // line 5
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item list-group-item-action\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a>
  ";
        }
        // line 7
        echo "  <a href=\"";
        echo ($context["account"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
  ";
        // line 8
        if (($context["logged"] ?? null)) {
            // line 9
            echo "  <a href=\"";
            echo ($context["edit"] ?? null);
            echo "\" class=\"list-group-item list-group-item-action\">";
            echo ($context["text_edit"] ?? null);
            echo "</a> 
  <a href=\"";
            // line 10
            echo ($context["password"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
  ";
        }
        // line 12
        echo "  <a href=\"";
        echo ($context["address"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_address"] ?? null);
        echo "</a> 
  <a href=\"";
        // line 13
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a> 
  <a href=\"";
        // line 14
        echo ($context["order"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_order"] ?? null);
        echo "</a>
  <a href=\"";
        // line 15
        echo ($context["download"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_download"] ?? null);
        echo "</a>
  <a href=\"";
        // line 16
        echo ($context["recurring"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a> 
  <a href=\"";
        // line 17
        echo ($context["reward"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_reward"] ?? null);
        echo "</a>
  <a href=\"";
        // line 18
        echo ($context["return"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_return"] ?? null);
        echo "</a> 
  <a href=\"";
        // line 19
        echo ($context["transaction"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a> 
  <a href=\"";
        // line 20
        echo ($context["newsletter"] ?? null);
        echo "\" class=\"list-group-item list-group-item-action\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a>
  ";
        // line 21
        if (($context["logged"] ?? null)) {
            // line 22
            echo "  <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item list-group-item-action\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
  ";
        }
        // line 24
        echo "</div>

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
        return array (  150 => 24,  142 => 22,  140 => 21,  134 => 20,  128 => 19,  122 => 18,  116 => 17,  110 => 16,  104 => 15,  98 => 14,  92 => 13,  85 => 12,  78 => 10,  71 => 9,  69 => 8,  62 => 7,  55 => 5,  49 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/extension/module/account.twig", "");
    }
}
