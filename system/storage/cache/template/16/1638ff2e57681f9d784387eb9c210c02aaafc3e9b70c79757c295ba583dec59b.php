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
class __TwigTemplate_53bcf3214d72dd5429528d782f3f68a823b6c857fbd010bd65cdd23de9654389 extends \Twig\Template
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
<div class=\"container  d-flex\">
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

    public function getDebugInfo()
    {
        return array (  37 => 56,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
