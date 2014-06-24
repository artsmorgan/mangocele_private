<?php

/* MangocelecoreBundle:Productos:categorias.html.twig */
class __TwigTemplate_7e5684e3b0a922060279878428c24b7dc590f546b0fd49bd9f9f74b0b335575c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MangoceleAdminBundle:Default:adminBase.html.twig");

        $this->blocks = array(
            'pagetitle' => array($this, 'block_pagetitle'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MangoceleAdminBundle:Default:adminBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pagetitle($context, array $blocks = array())
    {
        echo "Crear Producto > <strong>Agregar categorías</strong> > Agregar Imagenes";
    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        echo "Productos";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_productos_new");
        echo "\" class=\"btn btn-blue pull-right\">
    Crear Producto
</a>

    <br clear=\"all\">
    ";
    }

    // line 11
    public function block_scripts($context, array $blocks = array())
    {
        // line 12
        echo "        <script>
            jQuery(document).ready(function() {
                App.setPage(\"table_managed\");
                App.init(); // init the rest of plugins and elements
                \$('#productos').addClass('active');
            });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "MangocelecoreBundle:Productos:categorias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  57 => 11,  46 => 5,  43 => 4,  37 => 3,  31 => 2,);
    }
}
