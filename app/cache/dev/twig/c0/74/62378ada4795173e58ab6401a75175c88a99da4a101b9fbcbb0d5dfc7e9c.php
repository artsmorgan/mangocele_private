<?php

/* MangoceleSiteBundle:Producto:main.html.twig */
class __TwigTemplate_c07462378ada4795173e58ab6401a75175c88a99da4a101b9fbcbb0d5dfc7e9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "MangoceleSiteBundle:Empresas:main";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "

    ";
        // line 8
        $this->env->loadTemplate("MangoceleSiteBundle:modals:contact-modal.html.twig")->display($context);
        // line 9
        echo "    ";
        $this->env->loadTemplate("MangoceleSiteBundle:modals:pedido-modal.html.twig")->display($context);
        // line 10
        echo "    ";
        $this->env->loadTemplate("MangoceleSiteBundle:modals:product-images-modal.html.twig")->display($context);
        // line 11
        echo "
    <div class=\"content-wrapper\" id=\"empresa\">

        <div class=\"company-header\">

            <div class=\"company-img product-img\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#productImagesModal\">
                    <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "scheme") . "://") . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "httpHost")) . $this->env->getExtension('assets')->getAssetUrl("images/pulseras.png")), "html", null, true);
        echo "\" width=\"240\" height=\"240\">
                </a>
                <div class=\"product-actions\">
                    <a href=\"#\" class=\"btn btn-primary btn-block\" data-toggle=\"modal\" data-target=\"#contactModal\">
                        <span class=\"glyphicon glyphicon-envelope\"></span>
                        <span> Contactar al vendedor</span>
                    </a>
                    <a href=\"#\" class=\"btn btn-warning  btn-block\" data-toggle=\"modal\" data-target=\"#pedidoModal\">
                        <span class=\"glyphicon glyphicon-tags\"></span>
                        <span> Realizar pedido</span>
                    </a>
                    <a href=\"/empresa/Empresa-test\" class=\"btn btn-default  btn-block\">
                        <span class=\"glyphicon glyphicon-barcode\"></span>
                        <span> Datos de la empresa</span>
                    </a>
                </div>
            </div>

            <div class=\"company-name product-name\">
                <h1>
                    ";
        // line 38
        echo twig_escape_filter($this->env, $this->getContext($context, "data"), "html", null, true);
        echo " <small>| Id: emp-01</small>
                    <div class=\"empresa-contact-form pull-right\">
                        Valoración:
                        <span class=\"glyphicon glyphicon-star\"></span>
                        <span class=\"glyphicon glyphicon-star\"></span>
                        <span class=\"glyphicon glyphicon-star\"></span>
                        <span class=\"glyphicon glyphicon-star\"></span>
                        <span class=\"glyphicon glyphicon-star-empty\"></span>
                    </div>
                </h1>

                <div class=\"company-description\">
                    ";
        // line 50
        echo $this->getContext($context, "descripcion");
        echo "
                    <hr>
                    <h4>Categorias: </h4>

                    <div class=\"categorias\">
                        ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getContext($context, "categorias"), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 56
            echo "                            <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "categoria"), "html", null, true);
            echo "</span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    </div>

                    <hr>
                    <h4>Caracteristicas: </h4>
                    <div class=\"categorias\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <td>Precio</td>
                                    <td>Contenido</td>
                                    <td>Dimensiones</td>
                                    <td>Peso</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class=\"warning\">
                                    <td>C 10,000</td>
                                    <td>Una pulsera hecha a mano</td>
                                    <td>10cm x 2cm</td>
                                    <td>10 gramos</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>



    </div>
";
    }

    public function getTemplateName()
    {
        return "MangoceleSiteBundle:Producto:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 58,  109 => 56,  105 => 55,  97 => 50,  82 => 38,  59 => 18,  50 => 11,  47 => 10,  44 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
