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

/* new/template/common/search.twig */
class __TwigTemplate_35516e74e1888a407234f886b1b48f976af255613d534f83f0e63c0d40e49c0b extends \Twig\Template
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
        // line 8
        echo "
<div id=\"search\" class=\"input-group\">

  <input type=\"text\" name=\"search\" value=\"";
        // line 11
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" 
  class=\"form-control input-lg\" />
  <span class=\"input-group-btn\">
    <div class=\"dropdown\">
      <span id=\"dropdown-button\" class=\"btn btn-lg dropdown-toggle\" data-toggle=\"dropdown\">All Categories

     <span class=\"caret\"></span></span>
      ";
        // line 18
        if (($context["categories"] ?? null)) {
            // line 19
            echo "      <ul class=\"dropdown-menu\">
       ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 21
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 21);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "      </ul>
          ";
        }
        // line 25
        echo "    </div>
         

    <button type=\"button\" class=\"btn btn-lg search1\" style = \"padding-right: 15px; padding-left: 15px;\"><i style=\"color:white;\" class=\"fa fa-search\"></i></button>
  </span>
</div>





";
    }

    public function getTemplateName()
    {
        return "new/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  74 => 23,  63 => 21,  59 => 20,  56 => 19,  54 => 18,  42 => 11,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/common/search.twig", "");
    }
}
