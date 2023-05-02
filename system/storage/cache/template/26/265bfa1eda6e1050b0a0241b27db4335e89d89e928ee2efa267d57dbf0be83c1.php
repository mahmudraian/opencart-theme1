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

/* new/template/account/login.twig */
class __TwigTemplate_ac3f89d19043eb8cb48035430f96f8f40819b6c328f56f1f064c8e58f2512e17 extends \Twig\Template
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
        // line 56
        echo "

";
        // line 58
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-login\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 62
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 62);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 62);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "  </ul>
  ";
        // line 65
        if (($context["success"] ?? null)) {
            // line 66
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 68
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 69
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 71
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 72
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 73
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 74
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 75
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 76
            echo "    ";
        } else {
            // line 77
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 78
            echo "    ";
        }
        // line 79
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"well\">
            ";
        // line 86
        echo "            ";
        // line 87
        echo "        </div>
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 90
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 91
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
            <form action=\"";
        // line 92
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 94
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 95
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 98
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 99
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <a href=\"";
        // line 100
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
              <input type=\"submit\" value=\"";
        // line 101
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\" />
             <a href=\"";
        // line 102
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>

              ";
        // line 104
        if (($context["redirect"] ?? null)) {
            // line 105
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 107
        echo "            </form>
          </div>
        </div>
      </div>
      ";
        // line 111
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 112
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 114
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "new/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 114,  194 => 112,  190 => 111,  184 => 107,  178 => 105,  176 => 104,  169 => 102,  165 => 101,  159 => 100,  153 => 99,  149 => 98,  141 => 95,  137 => 94,  132 => 92,  128 => 91,  124 => 90,  119 => 87,  117 => 86,  107 => 79,  104 => 78,  101 => 77,  98 => 76,  95 => 75,  92 => 74,  89 => 73,  87 => 72,  82 => 71,  76 => 69,  73 => 68,  67 => 66,  65 => 65,  62 => 64,  51 => 62,  47 => 61,  41 => 58,  37 => 56,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/account/login.twig", "");
    }
}
