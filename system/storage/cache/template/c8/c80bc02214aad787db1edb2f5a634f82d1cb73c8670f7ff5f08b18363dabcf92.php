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

/* default/template/common/footer.twig */
class __TwigTemplate_cfb588d9c307cdb8e7a275b195bb2de9e22c64e22f87ad8ef30f6f381e90d803 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo " 
<link href=\"";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 59);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 59);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 59);
            echo "\" /> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo " 
";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 62
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
<head>
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
</head>
<footer>
<div class=\"mt-5 pt-5 pb-5 footer\">
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-4 col-xs-12 about-company\">
      <h2>Heading</h2>
      <p class=\"pr-5 text-white-50\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
      <p>
      <a style=\"font-size:25px; margin-left: 10px;\" class=\"me-1\"  href=\"#\"><i class=\"fa fa-facebook-square mr-1\"></i></a>
      <a style=\"font-size:25px; margin-left: 10px;\" class=\"me-1\"  href=\"#\"><i class=\"fa fa-linkedin-square\"></i></a>
      <a  style=\"font-size:25px; margin-left: 10px;\" class=\"me-1\"  href=\"#\"><i class=\"fa fa-twitter-square\"></i></a>
      <a  style=\"font-size:25px; margin-left: 10px;\"  class=\"me-1\"  href=\"#\"><i class=\"fa fa-linkedin-square\"></i></a>
      </p>
    </div>
    ";
        // line 82
        if (($context["informations"] ?? null)) {
            // line 83
            echo "      <div class=\"col-sm-3 col-lg-2\">
        <h5>";
            // line 84
            echo ($context["text_information"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 87
                echo "          <li style=\"margin:10px\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 87);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 87);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "        </ul>
      </div>
      ";
        }
        // line 92
        echo "
";
        // line 107
        echo "
  <div class=\"col-sm-3 col-lg-2\">
        <h5>";
        // line 109
        echo ($context["text_service"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li style=\"margin:10px\" ><a href=\"";
        // line 111
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li style=\"margin:10px\" ><a href=\"";
        // line 112
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li style=\"margin:10px\" ><a href=\"";
        // line 113
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
        </ul>
      </div>
  <div class=\"col-sm-3 col-lg-2\">
        <h5>";
        // line 117
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li  style=\"margin:10px\" ><a href=\"";
        // line 119
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li  style=\"margin:10px\" ><a href=\"";
        // line 120
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li  style=\"margin:10px\" ><a href=\"";
        // line 121
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li  style=\"margin:10px\" ><a href=\"";
        // line 122
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div>




    <div class=\"col-sm-3 col-lg-2 location\">
      <h5 class=\"\">Fourth Menu</h5>
      <div style=\"text-align: center;\">
      <a style=\"text-align: center;\" href=\"#\" class=\"btn btn-dark btn_log\" role=\"button\" aria-pressed=\"true\">
       <i style=\"padding-top:20px\" class=\"fa fa-apple\"></i>
       Download on the<br> Apple store
       </a>
      <a href=\"#\" class=\"btn btn-dark  btn_log\" role=\"button\" aria-pressed=\"true\">
    <i style=\"padding-top:20px\" class=\"fa fa-google\"></i>
    <img class=\"menu-item-2\" src=\"";
        // line 138
        echo ($context["base_url"] ?? null);
        echo "image/theme/GOO.PNG\">
      Download on the <br>play store</a>
      </div>
    </div>
  </div>
    <hr>
  <div  style=\"display:flex;justify-content: space-between\"  class=\"\">
    <div class=\"col copyright\" >
       
    <p>";
        // line 147
        echo ($context["powered"] ?? null);
        echo "</p>
      <p class=\"\"><small class=\"text-white-50\">© 2019. All Rights Reserved.</small></p>
    </div>
    <div style=\"display: flex-end;\">
    <ul style=\"display:flex\" class=\"list-unstyled\">
<li  style=\"margin:10px\"><a href=\"\"> <img src=\"https://i.ibb.co/dLrZSbQ/1.png\" alt=\"1\" border=\"0\"></a></li>
<li  style=\"margin:10px\"><a href=\"\"> <img src=\"https://i.ibb.co/C6swG79/2.png\" alt=\"2\" border=\"0\"></a></li>
<li  style=\"margin:10px\"><a href=\"\"> <img src=\"https://i.ibb.co/1G8KBkf/AE.png\" alt=\"AE\" border=\"0\"></a></li>
<li  style=\"margin:10px\"><a href=\"\"> <img src=\"https://i.ibb.co/HxFRKp3/paYPL.png\" alt=\"paYPL\" border=\"0\"></a></li>
<li  style=\"margin:10px\"><a href=\"\"> <img src=\"https://i.ibb.co/t8NGR9V/VISA.png\" alt=\"VISA\" border=\"0\"></a></li>
</ul>
    </div>
  </div>
</div>
</div>
</footer>



";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo " 
<link href=\"";
            // line 167
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 167);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 167);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 167);
            echo "\" /> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo " 
";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 170
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "<!--";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 172,  261 => 170,  257 => 169,  254 => 168,  242 => 167,  236 => 166,  214 => 147,  202 => 138,  181 => 122,  175 => 121,  169 => 120,  163 => 119,  158 => 117,  149 => 113,  143 => 112,  137 => 111,  132 => 109,  128 => 107,  125 => 92,  120 => 89,  109 => 87,  105 => 86,  100 => 84,  97 => 83,  95 => 82,  75 => 64,  66 => 62,  62 => 61,  59 => 60,  47 => 59,  41 => 58,  37 => 56,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
