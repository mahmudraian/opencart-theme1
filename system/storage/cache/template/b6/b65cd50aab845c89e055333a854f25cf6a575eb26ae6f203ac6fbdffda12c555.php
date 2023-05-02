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

/* new/template/common/footer.twig */
class __TwigTemplate_6e1398fd5b325f178ad3e02b23adb996c5321ba42787a3643918563448911727 extends \Twig\Template
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

<footer>
<div class=\"mt-5 pt-5 pb-5 footer\">
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-4 col-xs-12 about-company\">
      <img style=\"height: 45px; margin-left: -9px; margin-bottom: 20px;\" src=\"";
        // line 71
        echo ($context["base_url"] ?? null);
        echo "image/theme/elma.PNG\">
      <p class=\"pr-5 text-white-50\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
      <p style=\"margin-left: -6px;\">
      <a style=\"font-size:25px; margin-left: 10px;\" class=\"me-1\"  href=\"#\"><i class=\"fa fa-facebook-square mr-1\"></i></a>
      <a style=\"font-size:25px; margin-left: 10px;\" class=\"me-1\"  href=\"#\"><i class=\"fa fa-linkedin-square\"></i></a>
      <a  style=\"font-size:25px; margin-left: 10px;\" class=\"me-1\"  href=\"#\"><i class=\"fa fa-twitter-square\"></i></a>
      <a  style=\"font-size:25px; margin-left: 10px;\"  class=\"me-1\"  href=\"#\"><i class=\"fa fa-linkedin-square\"></i></a>
      </p>
    </div>
    ";
        // line 80
        if (($context["informations"] ?? null)) {
            // line 81
            echo "      <div class=\"col-sm-3 col-lg-2\">
        <h5>";
            // line 82
            echo ($context["text_information"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 85
                echo "          <li style=\"margin:10px\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 85);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 85);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        </ul>
      </div>
      ";
        }
        // line 90
        echo "
";
        // line 105
        echo "
  <div class=\"col-sm-3 col-lg-2\">
        <h5>";
        // line 107
        echo ($context["text_service"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li style=\"margin:10px\" ><a href=\"";
        // line 109
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li style=\"margin:10px\" ><a href=\"";
        // line 110
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li style=\"margin:10px\" ><a href=\"";
        // line 111
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
        </ul>
      </div>
  <div class=\"col-sm-3 col-lg-2\">
        <h5>";
        // line 115
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li  style=\"margin:10px\" ><a href=\"";
        // line 117
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li  style=\"margin:10px\" ><a href=\"";
        // line 118
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li  style=\"margin:10px\" ><a href=\"";
        // line 119
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li  style=\"margin:10px\" ><a href=\"";
        // line 120
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div>




    <div class=\"col-sm-3 col-lg-2 location\">
      <h5 class=\"\">Fourth Menu</h5>
      <div style=\"text-align: center;\">
      <a style=\"text-align: center;\" href=\"https://www.apple.com/store\">
       <img style=\"height: 35px; margin-bottom: 12px;margin-right: 45px; border-radius:5px;\" src=\"";
        // line 131
        echo ($context["base_url"] ?? null);
        echo "image/theme/apple_store.PNG\"></img></a>
      
     <a href=\"https://play.google.com/store/games?pli=1\"  aria-pressed=\"true\">
    
    <img style=\"height: 30px; width:120px; margin-bottom: 12px;margin-right: 45px; border-radius:5px;\" src=\"";
        // line 135
        echo ($context["base_url"] ?? null);
        echo "image/theme/google.PNG\"></img></a>
    
      </div>
    </div>
  </div>
    <hr>
  <div  style=\"display:flex;justify-content: space-between\"  class=\"\">
    <div class=\"col copyright\" >
       
    <p style=\"margin-top:5px;\">";
        // line 144
        echo ($context["powered"] ?? null);
        echo "</p>
    </div>
    <div style=\"display: flex-end;\">
    <ul style=\"display:flex\" class=\"list-unstyled\">
<li  style=\"margin:10px\"><a href=\"\"> <img src=\"https://i.ibb.co/dLrZSbQ/1.png\" alt=\"1\" border=\"0\"></a></li>
<li  style=\"margin:10px; margin-top: 17px;\"><a href=\"\"> <img src=\"https://i.ibb.co/C6swG79/2.png\" alt=\"2\" border=\"0\"></a></li>
<li  style=\"margin:10px\"><a href=\"\"> <img src=\"https://i.ibb.co/1G8KBkf/AE.png\" alt=\"AE\" border=\"0\"></a></li>
<li  style=\"margin:10px;  margin-top: 10px;\"><a href=\"\"> <img style=\"margin-top: 3px;\" src=\"https://i.ibb.co/HxFRKp3/paYPL.png\" alt=\"paYPL\" border=\"0\"></a></li>
<li  style=\"margin:10px\"><a href=\"\"> <img src=\"https://i.ibb.co/t8NGR9V/VISA.png\" alt=\"VISA\" border=\"0\"></a></li>
</ul>
    </div>
  </div>
</div>
</div>
</footer>



";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo " 
<link href=\"";
            // line 163
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 163);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 163);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 163);
            echo "\" /> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo " 
";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 166
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "new/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 166,  259 => 165,  256 => 164,  244 => 163,  238 => 162,  217 => 144,  205 => 135,  198 => 131,  182 => 120,  176 => 119,  170 => 118,  164 => 117,  159 => 115,  150 => 111,  144 => 110,  138 => 109,  133 => 107,  129 => 105,  126 => 90,  121 => 87,  110 => 85,  106 => 84,  101 => 82,  98 => 81,  96 => 80,  84 => 71,  75 => 64,  66 => 62,  62 => 61,  59 => 60,  47 => 59,  41 => 58,  37 => 56,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/common/footer.twig", "");
    }
}
