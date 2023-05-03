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

/* new/template/extension/module/category.twig */
class __TwigTemplate_5a983b86d8319318868f5517dd5adee7f8a298055bb41d7d16af5a42b0b1f2ca extends \Twig\Template
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
        echo "<div class=\"list-group\">

  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 4
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 4) == ($context["category_id"] ?? null))) {
                echo " 
  <a href=\"";
                // line 5
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 5);
                echo "\" class=\"list-group-item active firstcate\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 5);
                echo "</a> 
  ";
                // line 6
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 6)) {
                    // line 7
                    echo "  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 7));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 8
                        echo "  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 8) == ($context["child_id"] ?? null))) {
                            // line 9
                            echo "  <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 9);
                            echo "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 9);
                            echo "</a> 
  ";
                        } else {
                            // line 10
                            echo " 
  <a href=\"";
                            // line 11
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 11);
                            echo "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 11);
                            echo "</a>
  ";
                        }
                        // line 13
                        echo "  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "  ";
                }
                // line 15
                echo "  ";
            } else {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 15);
                echo "\" class=\"list-group-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15);
                echo "</a>
  ";
            }
            // line 17
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>

<style>
  .list-group a{
    border: 1px solid black;
  }
.list-group a:hover{
   border: 1px solid black;
}
.list-group a.active{
   border: 1px solid black;
    color: aqua;
   font: 20px;
}

 .firstcate{
  
 }

</style>";
    }

    public function getTemplateName()
    {
        return "new/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 18,  103 => 17,  93 => 15,  90 => 14,  84 => 13,  77 => 11,  74 => 10,  66 => 9,  63 => 8,  58 => 7,  56 => 6,  50 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new/template/extension/module/category.twig", "");
    }
}
