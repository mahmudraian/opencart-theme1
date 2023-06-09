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

/* new/template/common/header.twig */
class __TwigTemplate_9694720c367f0cec3cf00077b595162703d8ffd3e4848cd607655fc7ccf37ab3 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/new/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/new/stylesheet/style.css\" rel=\"stylesheet\">
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 28
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 28);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 28);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 28);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 31
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 35
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 35);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 35);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 38
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</head>
<body>
<nav id=\"top\">
  <div class=\"container\" id=\"topp\">

   <img class=\"menu-item\" src=\"";
        // line 45
        echo ($context["base_url"] ?? null);
        echo "image/theme/phone.PNG\">  ";
        echo ($context["telephone"] ?? null);
        echo "
  
 
    ";
        // line 48
        echo ($context["language"] ?? null);
        echo "
    <div id=\"top-links\" class=\"nav pull-right\">
      <ul class=\"list-inline topp2\" >

        <li><span class=\"menu-item\"><img class=\"menu-item\" src=\"";
        // line 52
        echo ($context["base_url"] ?? null);
        echo "image/theme/trac_order.PNG\"><a href=\"";
        echo ($context["home"] ?? null);
        echo "\">Track Order</a></span></li> 

        <li><span class=\"menu-item\"><img class=\"menu-item\" src=\"";
        // line 54
        echo ($context["base_url"] ?? null);
        echo "image/theme/chat.PNG\"><a href=\"";
        echo ($context["home"] ?? null);
        echo "\">Live Chat</a></span></li> 

        <li><span class=\"menu-item\"><img class=\"menu-item\" src=\"";
        // line 56
        echo ($context["base_url"] ?? null);
        echo "image/theme/flag.PNG\"><a href=\"";
        echo ($context["home"] ?? null);
        echo "\">English (US) </a></span></li> 

        <li class=\"menu-item\"> ";
        // line 58
        echo ($context["currency"] ?? null);
        echo "</span></li>
      
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\" >
    <div class=\"row\">
      <div class=\"col-sm-4\">
        <div id=\"logo\">";
        // line 68
        if (($context["logo"] ?? null)) {
            echo "<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"elma\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\"/></a>";
        } else {
            // line 69
            echo "          <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 70
        echo "</div>
      </div>
      <div class=\"col-sm-5 search\" >
      ";
        // line 73
        echo ($context["search"] ?? null);
        echo "
      </div>
      </div>

      <div id=\"top-links\" class=\"nav pull-right\">
      <ul class=\"list-inline\" style=\"margin-top: -50px;\">
       <li> ";
        // line 79
        echo ($context["cart"] ?? null);
        echo "</li>
       <li><a href=\"";
        // line 80
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\"><i class=\"fa fa-heart\"></i> </a></li>
       
        <li><a href=\"";
        // line 82
        echo ($context["home"] ?? null);
        echo "\"<span class=\"menu-item-2\"><img class=\"menu-item-2\" src=\"";
        echo ($context["base_url"] ?? null);
        echo "image/theme/message.PNG\"></span></a></li> 
        <span>|</span>
        
          <li style=\"padding-right: 0px;\"><span class=\"menu-item-2\"><img class=\"menu-item-2\" src=\"";
        // line 85
        echo ($context["base_url"] ?? null);
        echo "image/theme/user.PNG\"></span>
            <li><a href=\"";
        // line 86
        echo ($context["register"] ?? null);
        echo "\"><b>";
        echo ($context["text_register"] ?? null);
        echo "</b></a></li>
            or
            <li><a href=\"";
        // line 88
        echo ($context["login"] ?? null);
        echo "\"><b>";
        echo ($context["text_login"] ?? null);
        echo "</b></a></li>
          </li> 
          </ul>
        </li>




      </div>



    </div>
  </div>
</header>
";
        // line 103
        echo ($context["menu"] ?? null);
    }

    public function getTemplateName()
    {
        return "new/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 103,  278 => 88,  271 => 86,  267 => 85,  259 => 82,  252 => 80,  248 => 79,  239 => 73,  234 => 70,  226 => 69,  214 => 68,  201 => 58,  194 => 56,  187 => 54,  180 => 52,  173 => 48,  165 => 45,  158 => 40,  150 => 38,  146 => 37,  135 => 35,  131 => 34,  128 => 33,  119 => 31,  115 => 30,  102 => 28,  98 => 27,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/common/header.twig", "");
    }
}
