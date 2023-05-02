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
class __TwigTemplate_8cb06afeec6eeb3e88d134fa72aeb3b202da90930ee11310ce844d4681d7d534 extends \Twig\Template
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
      <a  class=\"me-1\"  href=\"#\"><i class=\"fa fa-facebook-square mr-1\"></i></a>
      <a  class=\"me-1\"  href=\"#\"><i class=\"fa fa-linkedin-square\"></i></a>
      <a  class=\"me-1\"  href=\"#\"><i class=\"fa fa-twitter-square\"></i></a>
      <a  class=\"me-1\"  href=\"#\"><i class=\"fa fa-linkedin-square\"></i></a>
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
                echo "          <li><a href=\"";
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
          <li><a href=\"";
        // line 111
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 112
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li><a href=\"";
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
          <li><a href=\"";
        // line 119
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 120
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 121
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 122
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div>




    <div class=\"col-sm-3 col-lg-2 location\">
      <h4 class=\"\">Fourth Menu</h4>
      <div>
      <a  href=\"#\" class=\" btn_log\" role=\"button\" aria-pressed=\"true\">
       <i class=\"fa fa-apple\"></i>
       Download on the<br> apple store
       </a>
      <a href=\"#\" class=\"btn btn-primary  btn_log\" role=\"button\" aria-pressed=\"true\">
      <i class=\"fa fa-google\"></i>
      Download on the <br>play store</a>
      </div>
      <p>22, Lorem ipsum dolor, consectetur adipiscing</p>
      <p class=\"mb-0\"><i class=\"fa fa-phone mr-3\">         </i>(541) 754-3010</p>
      <p><i class=\"fa fa-envelope-o mr-3\"></i>info@hsdf.com</p>
    </div>
  </div>
  <div class=\"row mt-5\">
    <div class=\"col copyright\">
         <hr>
    <p>";
        // line 148
        echo ($context["powered"] ?? null);
        echo "</p>
      <p class=\"\"><small class=\"text-white-50\">© 2019. All Rights Reserved.</small></p>
    </div>
  </div>
</div>
</div>
</footer>



";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo " 
<link href=\"";
            // line 159
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 159);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 159);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 159);
            echo "\" /> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo " 
";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 162
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
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
        return array (  259 => 164,  250 => 162,  246 => 161,  243 => 160,  231 => 159,  225 => 158,  212 => 148,  181 => 122,  175 => 121,  169 => 120,  163 => 119,  158 => 117,  149 => 113,  143 => 112,  137 => 111,  132 => 109,  128 => 107,  125 => 92,  120 => 89,  109 => 87,  105 => 86,  100 => 84,  97 => 83,  95 => 82,  75 => 64,  66 => 62,  62 => 61,  59 => 60,  47 => 59,  41 => 58,  37 => 56,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
