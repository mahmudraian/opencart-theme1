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
class __TwigTemplate_90a704fb6764c03bb0be935c299ea02276bd79a02702b1669a244d7ab8874743 extends \Twig\Template
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
<div class=\"mt-5 pt-5 pb-5 footer\">
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-5 col-xs-12 about-company\">
      <h2>Heading</h2>
      <p class=\"pr-5 text-white-50\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
      <p><a href=\"#\"><i class=\"fa fa-facebook-square mr-1\"></i></a><a href=\"#\"><i class=\"fa fa-linkedin-square\"></i></a></p>
    </div>
    ";
        // line 65
        if (($context["informations"] ?? null)) {
            // line 66
            echo "      <div class=\"col-sm-3\">
        <h5>";
            // line 67
            echo ($context["text_information"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 70
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 70);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 70);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "        </ul>
      </div>
      ";
        }
        // line 75
        echo "

    <div class=\"col-lg-3 col-xs-12 links\">
      <h4 class=\"mt-lg-0 mt-sm-3\">Links</h4>
        <ul class=\"m-0 p-0\">

        
          <li>- <a href=\"#\">Lorem ipsum</a></li>
          <li>- <a href=\"#\">Nam mauris velit</a></li>
          <li>- <a href=\"#\">Etiam vitae mauris</a></li>
          <li>- <a href=\"#\">Fusce scelerisque</a></li>
          <li>- <a href=\"#\">Sed faucibus</a></li>
          <li>- <a href=\"#\">Mauris efficitur nulla</a></li>
        </ul>
    </div>
    <div class=\"col-lg-4 col-xs-12 location\">
      <h4 class=\"mt-lg-0 mt-sm-4\">Location</h4>
      <p>22, Lorem ipsum dolor, consectetur adipiscing</p>
      <p class=\"mb-0\"><i class=\"fa fa-phone mr-3\">         </i>(541) 754-3010</p>
      <p><i class=\"fa fa-envelope-o mr-3\"></i>info@hsdf.com</p>
    </div>
  </div>
  <div class=\"row mt-5\">
    <div class=\"col copyright\">
      <p class=\"\"><small class=\"text-white-50\">© 2019. All Rights Reserved.</small></p>
    </div>
  </div>
</div>
</div>";
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
        return array (  78 => 75,  73 => 72,  62 => 70,  58 => 69,  53 => 67,  50 => 66,  48 => 65,  37 => 56,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
