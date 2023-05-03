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
class __TwigTemplate_717c01c2346b5d73db3ea8fb903b6e74c426108debe0a60515d7e26d2e834598 extends \Twig\Template
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
<img style=\"width:50px;height:50px;\" src=\"/elma/image/";
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

.categoryList{
  height:100px;
  width:100px;
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
