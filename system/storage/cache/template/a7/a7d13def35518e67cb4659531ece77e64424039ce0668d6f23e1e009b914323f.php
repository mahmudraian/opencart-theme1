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

/* new/template/extension/module/elmaslider.twig */
class __TwigTemplate_9d31023a2e7381d5661950335088f60bec5d01fb1f0cc1e7a9eb46a9150ef702 extends \Twig\Template
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
        echo "

    .<div class=\"container-fluid\">
       <div class=\"header_btn\">
     <div class=\"slide_content\" >
     <h1 style=\"color:black;font-size: 48px; font-weight: 650;\">The New Collection of <br> Summer Vacation</h1>
      <p style=\"color:black; margin-bottom: 33px;\">My Elma mission is to provide passionate customers a dynamic, ever-<br> evolving and passionate business environment.</p>
        <a style=\"background-color: black;color: white; margin-right: 12px; padding-right: 18px;padding-left: 18px;\" href=\"#\" class=\"btn btn-dark\">Shop now!</a>
        <a  style=\"color: black; padding-right: 18px;padding-left: 18px;\" href=\"#\" class=\"btn btn-dark\">Explore</a>
     </div>
      
    </div>

   
    
 </div>

 <style>
  .slide_content{
    padding-left: 100px;

  }


  .header_btn {
    width: 100% !important;
    height: 430px;
      display: flex;
      justify-content:flex-start;
      align-items: center;
      background-repeat: no-repeat;
      background-image: url(\"";
        // line 32
        echo ($context["base_url"] ?? null);
        echo "image/catalog/1.PNG\");
      /* background-image: url(\"";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "image", [], "any", false, false, false, 33);
        echo "\"); */
      background-color: #e5f0f8;
      background-position-x: right;
  }
  h1{
    font-family: system-ui !important;
    font-size: 33px;
    margin-bottom: 25px;
}

p{
    font-size: 15px;
}



 </style>



<script type=\"text/javascript\"><!--
\$('#slideshow";
        // line 54
        echo ($context["module"] ?? null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 1,
\tpagination: '.slideshow";
        // line 57
        echo ($context["module"] ?? null);
        echo "',
\tpaginationClickable: true,
\tnextButton: '.slideshow .swiper-button-next',
    prevButton: '.slideshow .swiper-button-prev',
    spaceBetween: 30,
\tautoplay: 2500,
    autoplayDisableOnInteraction: true,
\tloop: true
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "new/template/extension/module/elmaslider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 57,  98 => 54,  74 => 33,  70 => 32,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/extension/module/elmaslider.twig", "");
    }
}
