<?php

/* MangoceleSiteBundle:Default:index-company-list.html.twig */
class __TwigTemplate_fa05205283206c3f7f02976e8a4e0f722121735959910e4068f25e9db2d15cff extends Twig_Template
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
        echo "<div class=\"index-negocios\">
    <hr>
    <h4>Empresas</h4>
    <hr>
    <ul class=\"comercios-list\">
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "comercios"));
        foreach ($context['_seq'] as $context["_key"] => $context["comercio"]) {
            // line 7
            echo "            <li>
                <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comercio"), "url"), "html", null, true);
            echo "\" class=\"comercio-circle\">
                    <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "scheme") . "://") . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "httpHost")) . $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "comercio"), "img"))), "html", null, true);
            echo "\" class=\"company-img-icon\">
                    <br>
                    <div class=\"label label-company\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comercio"), "nombre"), "html", null, true);
            echo "</div>
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comercio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </ul>

</div>
<hr>
";
    }

    public function getTemplateName()
    {
        return "MangoceleSiteBundle:Default:index-company-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  37 => 9,  33 => 8,  30 => 7,  26 => 6,  67 => 25,  50 => 13,  39 => 7,  24 => 4,  19 => 1,  123 => 54,  118 => 11,  113 => 5,  100 => 54,  65 => 22,  54 => 14,  48 => 12,  42 => 11,  34 => 8,  28 => 5,  22 => 1,  112 => 53,  109 => 52,  104 => 50,  102 => 55,  97 => 46,  95 => 45,  56 => 8,  53 => 7,  46 => 12,  43 => 4,  38 => 9,  32 => 2,);
    }
}
