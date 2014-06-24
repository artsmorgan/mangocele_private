<?php

/* MangoceleSiteBundle:Empresas:product-list.html.twig */
class __TwigTemplate_987120aefe37c6f1a62de5924b7581df081464822595d93f56f1e2d886d69861 extends Twig_Template
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
        echo "<div class=\"left-nav company-left\">
    <div id=\"map-canvas\"> </div>
    <div class=\"company-information well well-sm\">
        <ul>
            <li class=\"information-hd\">Dirección:</li>
            <li>San Rafael, Escazu</li>
            <li class=\"divider\"></li>
            <li class=\"information-hd\">Teléfono:</li>
            <li>7176-5072</li>
            <li class=\"divider\"></li>
            <li class=\"information-hd\">Facebook:</li>
            <li><a href=\"http://facebook.com\"> www.facebook.com </a></li>
            <li class=\"divider\"></li>
            <li class=\"information-hd\">Email:</li>
            <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#contactModal\">amorgan115@gmail.com</a> </li>
        </ul>
    </div>
</div>

<div class=\"company-container\">

    <h4>Productos</h4>

    <ul class=\"products-list\">
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 26
            echo "            <li>
                <div class=\"first-el\">
                    <a href=\"#\">
                        <div class=\"imagenes-p\"><div class=\"imagenes-p\"><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "scheme") . "://") . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "httpHost")) . $this->env->getExtension('assets')->getAssetUrl("images/pulseras.png")), "html", null, true);
            echo "\"></div></div>
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
        // line 38
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "MangoceleSiteBundle:Empresas:product-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 38,  54 => 29,  49 => 26,  45 => 25,  19 => 1,  121 => 62,  119 => 61,  108 => 52,  99 => 50,  95 => 49,  87 => 44,  74 => 34,  66 => 29,  58 => 23,  56 => 22,  38 => 6,  35 => 5,  29 => 3,);
    }
}
