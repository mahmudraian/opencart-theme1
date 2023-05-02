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
class __TwigTemplate_274f220d8f16809c3016dbd94dd5b1ab6e8b5567483d6047da4c2eb21e901279 extends \Twig\Template
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
      <p class=\"mb-0\"><i class=\"fa fa-phone mr-3\"></i>(541) 754-3010</p>
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

    public function getDebugInfo()
    {
        return array (  37 => 56,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
