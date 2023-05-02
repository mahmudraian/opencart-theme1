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
class __TwigTemplate_7a7af2cf50c2d632d6e8d8eb0b478bd5c1ee24a7c0842046258a405e9e9beab4 extends \Twig\Template
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
<div class=\"container\">
  <footer class=\"row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top\">
    <div class=\"col mb-3\">
      <a href=\"/\" class=\"d-flex align-items-center mb-3 link-dark text-decoration-none\">
        <svg class=\"bi me-2\" width=\"40\" height=\"32\"><use xlink:href=\"#bootstrap\"></use></svg>
      </a>
      <p class=\"text-muted\">© 2022</p>
    </div>

    <div class=\"col mb-3\">

    </div>

    <div class=\"col mb-3\">
       <h5>";
        // line 71
        echo ($context["text_information"] ?? null);
        echo "</h5>
      <ul class=\"nav flex-column\">
        <ul class=\"list-unstyled\">
         ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 75
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 75);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 75);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </ul>
      </ul>
    </div>

    <div class=\"col mb-3\">
      <h5>Section</h5>
      <ul class=\"nav flex-column\">
        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Home</a></li>
        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Features</a></li>
        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Pricing</a></li>
        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">FAQs</a></li>
        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">About</a></li>
      </ul>
    </div>

    <div class=\"col mb-3\">
      <h5>Section</h5>
      <ul class=\"nav flex-column\">
        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Home</a></li>
        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Features</a></li>
        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">Pricing</a></li>
        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">FAQs</a></li>
        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-muted\">About</a></li>
      </ul>
    </div>
  </footer>
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
        return array (  75 => 77,  64 => 75,  60 => 74,  54 => 71,  37 => 56,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
