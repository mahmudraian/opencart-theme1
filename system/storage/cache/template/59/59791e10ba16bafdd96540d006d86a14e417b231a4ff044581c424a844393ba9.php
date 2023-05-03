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

/* new/template/extension/module/newcate.twig */
class __TwigTemplate_965e02a73d6c4b435571359eedeb134e222afc13b98787a7dd9ebb8f1f6889d3 extends \Twig\Template
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
        echo "<div class=\"categry\" >
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "
<div>

<ul>

<li class=\"list-unstyled cate\">

<button class=\"categoryList\" >
<img style=\"width:50px;height:50px;\" src=\"/Opencart-Theme-Development/image/";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 11);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 11);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 11);
            echo "\" />
<a href=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 12);
            echo "</a>
</button>


</ul>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</div>

<style>
.categry{
  display: flex;
  padding-top: 10px;
      justify-content: center;
}
}
.cate{
  border-radius: 5px;
  box-shadow: 0 0 5px #ccc;
  }

 .categry a{
    color: black;
    font-size: unset;
}

@media screen and (max-width: 767px) {
  .categry{
display:grid;
grid-template-columns: 1fr 1fr;

  }

.row {
    margin-bottom: 0;
}


}
@media screen and (min-width: 770px) and (max-width: 1200px) {
  .categry{
display:grid;
grid-template-columns: 1fr 1fr 1fr 1fr;

  }

.row {
    margin-bottom: 0;
}


}

.categoryList{
  height:100px;
  width:100px;
  border: none;
  
}
.categoryList img{
  height:50px;
  width:50px;
}
.categoryList a{
  text-decoration: none;
  color: black;
  font-size: 15px;
  font-weight: 400;
}
.categoryList:hover{
  background-color: #f5f5f5;
  border-radius: 5px;
  box-shadow: 0 0 5px #ccc;
}



</style>




";
    }

    public function getTemplateName()
    {
        return "new/template/extension/module/newcate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  62 => 12,  54 => 11,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/extension/module/newcate.twig", "");
    }
}
