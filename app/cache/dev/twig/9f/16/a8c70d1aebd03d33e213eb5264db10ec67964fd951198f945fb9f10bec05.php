<?php

/* MangoceleSiteBundle:Default:index-lower-content.html.twig */
class __TwigTemplate_9f16a8c70d1aebd03d33e213eb5264db10ec67964fd951198f945fb9f10bec05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"left-nav\">
    <p class=\"cat-title\">Categorías: </p>
    <ul class=\"nav nav-pills nav-stacked\">
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getContext($context, "categories"), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 5
            echo "            <li><a href=\"categorias/";
            echo twig_escape_filter($this->env, $this->getContext($context, "category"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "category"), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
</div>

<div class=\"company-container visible-lg\">
    <ul class=\"products-list\">
        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 13
            echo "            <li>
                <div class=\"first-el visible-lg\">
                    <a href=\"/producto/pulseras\">
                        <img src=\"images/pulseras.png\">
                        <div class=\"product-info\">
                            <div class=\"pull-left product-description\">Collares</div>
                            <div class=\"pull-right\">C 5,000</div>
                        </div>
                    </a>
                </div>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "MangoceleSiteBundle:Default:index-lower-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  50 => 13,  39 => 7,  24 => 4,  19 => 1,  123 => 54,  118 => 11,  113 => 5,  100 => 54,  65 => 22,  54 => 14,  48 => 12,  42 => 10,  34 => 8,  28 => 5,  22 => 1,  112 => 53,  109 => 52,  104 => 50,  102 => 55,  97 => 46,  95 => 45,  56 => 8,  53 => 7,  46 => 12,  43 => 4,  38 => 9,  32 => 2,);
    }
}
