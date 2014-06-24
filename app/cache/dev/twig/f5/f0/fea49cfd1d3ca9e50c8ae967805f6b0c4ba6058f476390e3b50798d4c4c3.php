<?php

/* MangoceleSiteBundle:Categorias:main.html.twig */
class __TwigTemplate_f5f0fea49cfd1d3ca9e50c8ae967805f6b0c4ba6058f476390e3b50798d4c4c3 extends Twig_Template
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
        echo "    <div class=\"content-wrapper\" id=\"listado-productos\">
        <div class=\"header-banner\"><img src=\"http://placehold.it/1100x110\"></div>
        <h1>
            Productos por Categoria: <strong> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getContext($context, "categoria"), "html", null, true);
        echo " </strong>
        <span class=\"empresas-order\">
            Mostrar:
            <select name=\"tipo\" id=\"tipo\">
                <option>Productos</option>
                <option value=\"/categorias/";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "categoria"), "html", null, true);
        echo "/emp\">Empresas</option>
            </select>
        </span>
            <span class=\"empresas-order\">
            Ordenar:
            <select name=\"ordenar\">
                <option>Mayor valoración</option>
                <option>Nombre A...Z</option>
                <option>Nombre Z...A</option>
            </select>
        </span>
        </h1>

        <div class=\"empresas-listado\">
            <ul class=\"products-list\">
                ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 32
            echo "                    <li>
                        <div class=\"first-el\">
                            <a href=\"/producto/pulseras\">
                                <div class=\"imagenes-p\"><div class=\"imagenes-p\"><img src=\"";
            // line 35
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
        // line 44
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

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "
";
    }

    public function getTemplateName()
    {
        return "MangoceleSiteBundle:Categorias:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 58,  127 => 57,  111 => 44,  96 => 35,  91 => 32,  87 => 31,  69 => 16,  61 => 11,  56 => 8,  53 => 7,  46 => 5,  43 => 4,  38 => 3,  32 => 2,);
    }
}
