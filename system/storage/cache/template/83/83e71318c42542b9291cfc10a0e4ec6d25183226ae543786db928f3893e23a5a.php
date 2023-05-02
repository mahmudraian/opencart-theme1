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
class __TwigTemplate_c29981003274ddcc528990c62d49f0fa9285e6d446aa45aeab1f89ef5cf6e8e9 extends \Twig\Template
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
        <div class=\"col-sm-12\">
          ";
        // line 88
        echo "        <div class=\"col-sm-12\">
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
        echo "


<style>
* {
    margin: 0px;
    font-family: Rubik;
}

.LoginPageContainer {
    height: 100vh;
    overflow: auto;
}

.LoginPageInnerContainer {
    display: flex;
    min-height: 100%;
}

.LoginPageInnerContainer .ImageContianer {
    width: 25%;
    background-color: #e1dfec;
    min-height: 100%;
    padding: 5%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.LoginPageInnerContainer .ImageContianer .GroupImage {
    width: 100%;
    display: block;
}

.LoginPageInnerContainer .LoginFormContainer {
    flex-grow: 2;
    background-color: white;
    min-height: 100%;
    padding: 5%;
    background: url(https://i.imgur.com/BKyjjFa.png) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.LoginPageInnerContainer .LoginFormContainer .LogoContainer .logo {
    height: 60px;
    margin-bottom: 30px;
}

.LoginPageInnerContainer .LoginFormContainer .header {
    font-size: 32px;
    font-weight: 500;
}

.LoginPageInnerContainer .LoginFormContainer .subHeader {
    color: #9aa4ad;
    margin-top: 5px;
    margin-bottom: 40px;
}

.LoginPageInnerContainer .LoginFormContainer .inputContainer {
    color: #3f3f45;
    margin: 20px 0px;
}

.LoginPageInnerContainer .LoginFormContainer .inputContainer .label {
    display: flex;
    width: 100%;
    justify-content: flex-start;
    align-items: center;
    margin-right: 7px;
    margin-bottom: 10px;
}

.LoginPageInnerContainer .LoginFormContainer .inputContainer .label .labelIcon {
    width: 20px;
    margin-right: 10px;
    display: block;
}

.LoginPageInnerContainer .LoginFormContainer .inputContainer .input {
    display: block;
    width: calc(100% - 20px);
    font-size: 15px;
    padding: 10px;
    border: 1px solid #d6d7db;
    border-radius: 5px;
    margin-top: 5px;
    outline: 0px !important;
}

.LoginPageInnerContainer .LoginFormContainer .OptionsContainer {
    display: flex;
    justify-content: space-between;
}

.LoginFormContainer {
    display: flex;
    align-items: center;
}

.LoginFormInnerContainer {
    max-width: 500px;
}

.LoginPageInnerContainer .LoginFormContainer .checkbox {
    width: 15px;
    height: 15px;
    margin: 0px;
    display: block;
    border: 1px solid #d6d7db;
}

.LoginPageInnerContainer .LoginFormContainer .checkboxContainer {
    display: flex;
    justify-content: flex-start;
    align-items: center;
}

.LoginPageInnerContainer .LoginFormContainer .checkboxContainer label {
    display: block;
    padding: 0px 5px;
    color: #9aa4ad;
}

.LoginPageInnerContainer .LoginFormContainer .ForgotPasswordLink {
    color: #e7483b;
    text-decoration: none;
}

.LoginFormContainer .LoginFormInnerContainer .LoginButton {
    margin-top: 30px;
    display: block;
    width: 100%;
    padding: 10px;
    border-radius: 20px;
    font-weight: bold;
    color: white;
    background-color: #2e1f7a;
    border: 0px;
    outline: 0px;
    cursor: pointer;
}

.LoginFormContainer .LoginFormInnerContainer .LoginButton:active {
    background-color: #4520ff;
}


@media only screen and (max-width: 1200px) {
    .LoginPageInnerContainer .ImageContianer {
        width: 50%;
    }
}

@media only screen and (max-width: 800px) {
    .LoginPageInnerContainer .ImageContianer {
        display: none;
    }

    .LoginFormContainer {
        justify-content: center;
    }
}
.LoginPageContainer::-webkit-scrollbar {
    width: 5px;
}

.LoginPageContainer::-webkit-scrollbar-track {
    background: #f1f1f1;
}

.LoginPageContainer::-webkit-scrollbar-thumb {
    background: #2e1f7a;
}

.LoginPageContainer::-webkit-scrollbar-thumb:hover {
    background: #4520ff;
}

</style>";
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
        return array (  183 => 128,  178 => 126,  174 => 125,  163 => 117,  156 => 115,  147 => 111,  139 => 106,  132 => 102,  116 => 88,  107 => 79,  104 => 78,  101 => 77,  98 => 76,  95 => 75,  92 => 74,  89 => 73,  87 => 72,  82 => 71,  76 => 69,  73 => 68,  67 => 66,  65 => 65,  62 => 64,  51 => 62,  47 => 61,  41 => 58,  37 => 56,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/account/login.twig", "");
    }
}
