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
class __TwigTemplate_c4b1be894f030022fe722da2b7a170e172c4cafb3a391423d057af7820079d1a extends \Twig\Template
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
          <div class=\"LoginPageContainer\">
    <div class=\"LoginPageInnerContainer\">
        <div class=\"ImageContianer\">
            <img src=\"https://i.imgur.com/MYZd7of.png\" class=\"GroupImage\">
        </div>
        <div class=\"LoginFormContainer\">
            <div class=\"LoginFormInnerContainer\">
                <div class=\"LogoContainer\">
                    <img src=\"https://i.imgur.com/jz5bPWn.png\" class=\"logo\">
                </div>
                <header class=\"header\">Log in</header>
                <header class=\"subHeader\">Welcome to <b>animal planet!</b> Please Enter your Details</header>

                <form action=\"";
        // line 102
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"inputContainer\">
                        <label class=\"label\" for=\"emailAddress\"><img src=\"https://i.imgur.com/Hn13wvm.png\" class=\"labelIcon\"><span>Email
                                Address*</span></label>
                        <input type=\"email\" value=\"";
        // line 106
        echo ($context["email"] ?? null);
        echo " class=\"input\" id=\"emailAddress\" placeholder=\"Enter your Email Address\">
                    </div>
                    <div class=\"inputContainer\">
                        <label class=\"label\" for=\"emailAddress\"><img src=\"https://i.imgur.com/g5SvdfG.png\"
                                class=\"labelIcon\"><span>Password*</span></label>
                        <input type=\"password\" class=\"input\" value=\"";
        // line 111
        echo ($context["password"] ?? null);
        echo "\" id=\"emailAddress\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\">
                    </div>
                    <div class=\"OptionsContainer\">
                       
                        <a href=\"";
        // line 115
        echo ($context["forgotten"] ?? null);
        echo " class=\"ForgotPasswordLink\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
                    </div>
                     <input class=\"LoginButton\" type=\"submit\" value=\"";
        // line 117
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\" />
                </form>
            </div>
        </div>
    </div>
</div>
        </div>
      </div>
      ";
        // line 125
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 126
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 128
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
        return array (  187 => 128,  182 => 126,  178 => 125,  167 => 117,  160 => 115,  151 => 111,  143 => 106,  136 => 102,  119 => 87,  117 => 86,  107 => 79,  104 => 78,  101 => 77,  98 => 76,  95 => 75,  92 => 74,  89 => 73,  87 => 72,  82 => 71,  76 => 69,  73 => 68,  67 => 66,  65 => 65,  62 => 64,  51 => 62,  47 => 61,  41 => 58,  37 => 56,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/account/login.twig", "");
    }
}
