<?php

/* MangoceleSiteBundle:Usuario:main.html.twig */
class __TwigTemplate_921b0b8644f2b465f9cfd95f38561789ff2ed26d8414a2ca2b9bf4ba28b98860 extends Twig_Template
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

    <div class=\"content-wrapper\" id=\"usuario\">

        <div class=\"company-header\">

            <div class=\"company-img\">
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#productImagesModal\">
                    <img src=\"http://placehold.it/240x240\">
                </a>
                <div class=\"product-actions\">
                    <a href=\"#\" class=\"btn btn-primary btn-block\" data-toggle=\"modal\" data-target=\"#contactModal\">
                        <span class=\"glyphicon glyphicon-camera\"></span>
                        <span> Editar foto </span>
                    </a>
                </div>
            </div>

            <div class=\"company-name\">
                <h1>
                    Bienvenido Usuario
                    <div class=\"empresa-contact-form pull-right\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a href=\"#home\" data-toggle=\"tab\">General</a></li>
                            <li><a href=\"#profile\" data-toggle=\"tab\">Personal</a></li>
                            <li><a href=\"#messages\" data-toggle=\"tab\">Comercio</a></li>
                        </ul>
                    </div>
                </h1>

                <div class=\"company-description\">
                    <!-- Nav tabs -->


                    <!-- Tab panes -->
                    <div class=\"tab-content tab-user\">
                        <div class=\"tab-pane active\" id=\"home\">
                            <h4>
                                General
                                <div class=\"empresa-contact-form pull-right\">
                                    <a href=\"#\"> <span class=\"glyphicon glyphicon-pencil\"></span> Editar </a>
                                </div>
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue mollis justo, eu imperdiet turpis vestibulum quis.
                                Duis nisl enim, tincidunt ut lacus at, ultrices tempor augue. Cum sociis natoque penatibus et magnis dis parturient montes.
                            </p>
                            <p>
                                nascetur ridiculus mus. Curabitur felis arcu, faucibus in egestas a, venenatis vitae ligula. Vestibulum tempor est tellus,
                                ut bibendum mi ullamcorper sit amet. Aliquam congue id leo suscipit venenatis. Nullam nec pharetra dolor, id semper nulla.
                                Donec scelerisque bibendum felis et cursus. Mauris at magna a neque aliquam vehicula. Suspendisse sed enim nisl.
                            </p>
                        </div>
                        <div class=\"tab-pane\" id=\"profile\">
                            <h4>Datos Personales
                                <div class=\"empresa-contact-form pull-right\">
                                    <a href=\"#\"> <span class=\"glyphicon glyphicon-pencil\"></span> Editar </a>
                                </div>
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue mollis justo, eu imperdiet turpis vestibulum quis.
                                Duis nisl enim, tincidunt ut lacus at, ultrices tempor augue. Cum sociis natoque penatibus et magnis dis parturient montes.
                            </p>
                        </div>
                        <div class=\"tab-pane\" id=\"messages\">
                            <h4>Detalles de mi comercio
                                <div class=\"empresa-contact-form pull-right\">
                                    <a href=\"#\"> <span class=\"glyphicon glyphicon-pencil\"></span> Editar </a>
                                </div>
                            </h4>
                        </div>
                    </div>

                    <hr>
                    <h4>Categorias:
                        <div class=\" pull-right\">
                            <a href=\"#\" class=\"btn btn-primary\">
                                <span class=\"glyphicon glyphicon-plus-sign\"></span> Agregar
                            </a>
                        </div>
                    </h4>

                    <div class=\"categorias well cat-usuario\">
                        ";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categorias"));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 90
            echo "                            <span class=\"label label-info\" style=\"margin: 0 10px\">
                                <span class=\"glyphicon glyphicon-remove-circle\"></span>
                                ";
            // line 92
            echo twig_escape_filter($this->env, $this->getContext($context, "categoria"), "html", null, true);
            echo "
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                    </div>

                    <hr>
                    <h4>
                        Mis productos:
                        <div class=\" pull-right\">
                            <a href=\"#\" class=\"btn btn-primary\">
                                <span class=\"glyphicon glyphicon-plus-sign\"></span> Crear Nuevo
                            </a>
                        </div>
                    </h4>
                    <br>
                    <div class=\"categorias\">
                        <table class=\"table table-bordered\">
                            <thead>
                            <tr>
                                <td>Nombre</td>
                                <td>Descripción</td>
                                <td>Precio</td>
                                <td>Acciones</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td colspan=\"4\">No hay productos disponibles</td>
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
        return "MangoceleSiteBundle:Usuario:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 47,  134 => 46,  126 => 42,  58 => 23,  104 => 50,  84 => 21,  77 => 24,  155 => 48,  110 => 30,  76 => 17,  114 => 45,  81 => 46,  70 => 19,  23 => 1,  127 => 90,  118 => 58,  113 => 42,  100 => 33,  65 => 22,  34 => 8,  97 => 50,  90 => 34,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 95,  132 => 40,  128 => 49,  107 => 29,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 60,  159 => 61,  143 => 56,  135 => 53,  119 => 38,  102 => 49,  71 => 19,  67 => 14,  63 => 34,  59 => 18,  38 => 6,  94 => 35,  89 => 20,  85 => 25,  75 => 28,  68 => 24,  56 => 8,  87 => 44,  21 => 2,  26 => 6,  93 => 32,  88 => 22,  78 => 18,  46 => 5,  27 => 7,  44 => 9,  31 => 5,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 47,  142 => 61,  138 => 54,  136 => 41,  121 => 47,  117 => 44,  105 => 55,  91 => 23,  62 => 12,  49 => 17,  24 => 4,  25 => 3,  19 => 1,  79 => 29,  72 => 40,  69 => 38,  47 => 10,  40 => 12,  37 => 9,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 60,  131 => 92,  123 => 89,  120 => 45,  115 => 43,  111 => 44,  108 => 52,  101 => 32,  98 => 36,  96 => 35,  83 => 30,  74 => 34,  66 => 29,  55 => 15,  52 => 15,  50 => 11,  43 => 4,  41 => 7,  35 => 5,  32 => 2,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 59,  173 => 65,  168 => 55,  164 => 59,  162 => 52,  154 => 58,  149 => 51,  147 => 46,  144 => 49,  141 => 48,  133 => 55,  130 => 58,  125 => 36,  122 => 46,  116 => 41,  112 => 44,  109 => 56,  106 => 41,  103 => 28,  99 => 27,  95 => 49,  92 => 23,  86 => 5,  82 => 38,  80 => 25,  73 => 17,  64 => 23,  60 => 22,  57 => 11,  54 => 28,  51 => 14,  48 => 12,  45 => 22,  42 => 8,  39 => 13,  36 => 5,  33 => 8,  30 => 7,);
    }
}
