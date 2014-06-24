<?php

/* MangoceleSiteBundle:Categorias:empresas_listado.html.twig */
class __TwigTemplate_2975585a51e77ae26f67049f4d2a2ec6acfe9932cc59c345f70b664d5866a524 extends Twig_Template
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
        echo "    <div class=\"content-wrapper\" id=\"empresas\">
        <div class=\"header-banner\"><img src=\"http://placehold.it/1100x110\"></div>
        <h1>
            Empresas por Categoria: <strong> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getContext($context, "categoria"), "html", null, true);
        echo " </strong>
        <span class=\"empresas-order\">
            Mostrar:
            <select name=\"typo\" id=\"tipo\">
                <option>Empresas</option>
                <option value=\"/categorias/";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "categoria"), "html", null, true);
        echo "\">Productos</option>
            </select>
        </span>
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
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "comercios"));
        foreach ($context['_seq'] as $context["_key"] => $context["comercio"]) {
            // line 31
            echo "                    <li>
                        <a href=\"/";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comercio"), "url"), "html", null, true);
            echo "\">
                            <div class=\"empresa-imagen\"><img src=\"";
            // line 33
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "scheme") . "://") . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "httpHost")) . $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "comercio"), "img"))), "html", null, true);
            echo "\" class=\"company-img-icon double-x\"></div>
                            <div class=\"empresa-descripcion\">
                                <div class=\"title\">
                                    <h2>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comercio"), "nombre"), "html", null, true);
            echo "</h2>
                                </div>
                                <div class=\"desc\">";
            // line 38
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
        // line 46
        echo "            </ul>
        </div>

    </div>

    <script>
        document.getElementById(\"tipo\").onchange = function() {
            if (this.selectedIndex!==0) {
                window.location.href = this.value;
            }
        };
    </script>

";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        // line 61
        echo "
";
    }

    public function getTemplateName()
    {
        return "MangoceleSiteBundle:Categorias:empresas_listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 61,  139 => 60,  122 => 46,  108 => 38,  103 => 36,  97 => 33,  93 => 32,  90 => 31,  86 => 30,  69 => 16,  61 => 11,  56 => 8,  53 => 7,  46 => 5,  43 => 4,  38 => 3,  32 => 2,);
    }
}
