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
class __TwigTemplate_de7044011694f8b56fdf573ce286f20e3c35b84b52928dd7725f34bb2dff35ef extends \Twig\Template
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
        echo "<header>
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
</header>
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
        // line 73
        if (($context["informations"] ?? null)) {
            // line 74
            echo "      <div class=\"col-sm-3 col-lg-2\">
        <h5>";
            // line 75
            echo ($context["text_information"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 78
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 78);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 78);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "        </ul>
      </div>
      ";
        }
        // line 83
        echo "
";
        // line 98
        echo "
  <div class=\"col-sm-3 col-lg-2\">
        <h5>";
        // line 100
        echo ($context["text_service"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 102
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 103
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 104
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
        </ul>
      </div>
  <div class=\"col-sm-3 col-lg-2\">
        <h5>";
        // line 108
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 110
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 111
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 112
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 113
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
        // line 135
        echo ($context["powered"] ?? null);
        echo "</p>
      <p class=\"\"><small class=\"text-white-50\">© 2019. All Rights Reserved.</small></p>
    </div>
  </div>
</div>
</div>
</footer>


";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo " 
<link href=\"";
            // line 145
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 145);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 145);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 145);
            echo "\" /> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo " 
";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 148
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
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
        return array (  215 => 150,  206 => 148,  202 => 147,  199 => 146,  187 => 145,  181 => 144,  169 => 135,  142 => 113,  136 => 112,  130 => 111,  124 => 110,  119 => 108,  110 => 104,  104 => 103,  98 => 102,  93 => 100,  89 => 98,  86 => 83,  81 => 80,  70 => 78,  66 => 77,  61 => 75,  58 => 74,  56 => 73,  37 => 56,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
