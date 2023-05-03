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

/* new/template/common/home.twig */
class __TwigTemplate_0365c5f50f5b92659d05298cd712555d720b519d3c71e7d0bd6ac4af5b1cb0eb extends \Twig\Template
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
<div class=\"container\">
<div id=\"common-home\" style=\"overflow:hidden;\">
  <div class=\"row\">";
        // line 4
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 5
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 7
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 13
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
</div>
";
        // line 16
        echo ($context["footer"] ?? null);
        echo "

<style>


</style>
";
    }

    public function getTemplateName()
    {
        return "new/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  75 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/common/home.twig", "");
    }
}
