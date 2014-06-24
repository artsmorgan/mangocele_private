<?php

/* MangoceleSiteBundle:Empresas:main.html.twig */
class __TwigTemplate_f9b556d3b46564313b7fcad490e89327412c41fa8a49e1783af0050eba5b34b7 extends Twig_Template
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
    <script type=\"text/javascript\"
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyANQEqokx5ywJxdvb2v-tuohPgaegFDeLg&sensor=false\">
    </script>
    <script type=\"text/javascript\">
        function initialize() {
            var mapOptions = {
                center: new google.maps.LatLng(-34.397, 150.644),
                zoom: 8
            };
            var map = new google.maps.Map(document.getElementById(\"map-canvas\"),
                    mapOptions);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    ";
        // line 22
        $this->env->loadTemplate("MangoceleSiteBundle:modals:contact-modal.html.twig")->display($context);
        // line 23
        echo "
    <div class=\"content-wrapper\" id=\"empresa\">

        <div class=\"company-header\">

            <div class=\"company-img\">
                <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "scheme") . "://") . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "httpHost")) . $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "empresa_data"), "img"))), "html", null, true);
        echo "\">
            </div>

            <div class=\"company-name\">
               <h1>
                   ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "empresa_data"), "nombre"), "html", null, true);
        echo "
                   <div class=\"empresa-contact-form pull-right\">
                       <a href=\"#\" class=\"btn btn-primary btn-xs\" data-toggle=\"modal\" data-target=\"#contactModal\">
                        <span class=\"glyphicon glyphicon-envelope\"></span>
                        <span> Contactar</span>
                       </a>
                   </div>
               </h1>

               <div class=\"company-description\">
                   ";
        // line 44
        echo $this->getAttribute($this->getContext($context, "empresa_data"), "descripcion");
        echo "
                   <hr>
                   <h4>Categorias: </h4>

                   <div class=\"categorias\">
                       ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getContext($context, "categorias"), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 50
            echo "                           <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "categoria"), "html", null, true);
            echo "</span>
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                   </div>

               </div>

            </div>

        </div>

        <div class=\"company-products\">
            ";
        // line 61
        $this->env->loadTemplate("MangoceleSiteBundle:Empresas:product-list.html.twig")->display($context);
        // line 62
        echo "        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "MangoceleSiteBundle:Empresas:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 62,  119 => 61,  108 => 52,  99 => 50,  95 => 49,  87 => 44,  74 => 34,  66 => 29,  58 => 23,  56 => 22,  38 => 6,  35 => 5,  29 => 3,);
    }
}
