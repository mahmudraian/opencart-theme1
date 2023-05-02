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
class __TwigTemplate_df08f262a1f0db6c6a196b615e0396cfb11be626a266322f66592307b756f6d0 extends \Twig\Template
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
<footer style=\"
margin-top: 30px;
\tpadding-top: 30px;
\tbackground-color: #f8f9fa !important;
\tborder-top: 1px solid #ddd;
\tcolor: black !important;
\">
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
        // line 88
        if (($context["informations"] ?? null)) {
            // line 89
            echo "      <div class=\"col-sm-3 col-lg-2\">
        <h5>";
            // line 90
            echo ($context["text_information"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 93
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 93);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 93);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "        </ul>
      </div>
      ";
        }
        // line 98
        echo "
";
        // line 113
        echo "
  <div class=\"col-sm-3 col-lg-2\">
        <h5>";
        // line 115
        echo ($context["text_service"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 117
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 118
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 119
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
        </ul>
      </div>
  <div class=\"col-sm-3 col-lg-2\">
        <h5>";
        // line 123
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 125
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 126
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 127
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 128
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div>




    <div class=\"col-sm-3 col-lg-2 location\">
      <h4 class=\"\">Fourth Menu</h4>
      <div>
      <a
       href=\"#\" class=\"btn btn-primary btn-sm\" role=\"button\" aria-pressed=\"true\">Button</a>
      <a href=\"#\" class=\"btn btn-primary btn-sm\" role=\"button\" aria-pressed=\"true\">Button</a>
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
        // line 150
        echo ($context["powered"] ?? null);
        echo "</p>
      <p class=\"\"><small class=\"text-white-50\">© 2019. All Rights Reserved.</small></p>
    </div>
  </div>
</div>
</div>
</footer>



";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo " 
<link href=\"";
            // line 161
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 161);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 161);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 161);
            echo "\" /> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo " 
";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 164
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
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
        return array (  261 => 166,  252 => 164,  248 => 163,  245 => 162,  233 => 161,  227 => 160,  214 => 150,  187 => 128,  181 => 127,  175 => 126,  169 => 125,  164 => 123,  155 => 119,  149 => 118,  143 => 117,  138 => 115,  134 => 113,  131 => 98,  126 => 95,  115 => 93,  111 => 92,  106 => 90,  103 => 89,  101 => 88,  75 => 64,  66 => 62,  62 => 61,  59 => 60,  47 => 59,  41 => 58,  37 => 56,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
