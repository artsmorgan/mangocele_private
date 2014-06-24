<?php

/* MangoceleSiteBundle:Default:empresas_listado.html.twig */
class __TwigTemplate_5700eb77f2671c7f4e26d74d34ccbdb556f1b5778f34acefb2298bab58384bab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'jsfiles' => array($this, 'block_jsfiles'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Mangocele.cr ";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 4
    public function block_jsfiles($context, array $blocks = array())
    {
        // line 5
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\" ></script>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"content-wrapper\" id=\"empresas\">
    <div class=\"header-banner\"><img src=\"http://placehold.it/1100x110\"></div>
    <h1>
        Empresas
        <span class=\"empresas-order\">
            Ordenar:
            <select name=\"ordenar\">
                <option>Nombre A...Z</option>
                <option>Nombre Z...A</option>
            </select>
        </span>
    </h1>

    <div class=\"empresas-listado\">
        <ul class=\"empresas\" >
            ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "comercios"));
        foreach ($context['_seq'] as $context["_key"] => $context["comercio"]) {
            // line 24
            echo "            <li>
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comercio"), "url"), "html", null, true);
            echo "\">
                    <div class=\"empresa-imagen\"><img src=\"";
            // line 26
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "scheme") . "://") . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "httpHost")) . $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "comercio"), "img"))), "html", null, true);
            echo "\" class=\"company-img-icon double-x\"></div>
                    <div class=\"empresa-descripcion\">
                        <div class=\"title\">
                            <h2>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comercio"), "nombre"), "html", null, true);
            echo "</h2>
                        </div>
                        <div class=\"desc\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comercio"), "desc"), "html", null, true);
            echo "</div>
                    </div>
                    <div class=\"empresa-accion\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span>
                    </div>
                </a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comercio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </ul>
    </div>

</div>
";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        // line 45
        echo "
";
    }

    public function getTemplateName()
    {
        return "MangoceleSiteBundle:Default:empresas_listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 45,  117 => 44,  109 => 39,  95 => 31,  90 => 29,  84 => 26,  80 => 25,  77 => 24,  73 => 23,  56 => 8,  53 => 7,  46 => 5,  43 => 4,  38 => 3,  32 => 2,);
    }
}
