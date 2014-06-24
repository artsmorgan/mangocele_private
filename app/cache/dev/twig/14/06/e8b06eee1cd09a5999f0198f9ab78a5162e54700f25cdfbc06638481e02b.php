<?php

/* MangocelecoreBundle:Productos:edit.html.twig */
class __TwigTemplate_1406e8b06eee1cd09a5999f0198f9ab78a5162e54700f25cdfbc06638481e02b extends Twig_Template
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
        echo "Productos Editar";
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

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form');
        echo "
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "
";
    }

    // line 12
    public function block_scripts($context, array $blocks = array())
    {
        // line 13
        echo "        <script>
            jQuery(document).ready(function() {
                App.setPage(\"table_managed\");
                App.init(); // init the rest of plugins and elements
                \$('#productos').addClass('active');
                \$('#mangocele_userbundle_user_password').val('');
            });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "MangocelecoreBundle:Productos:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  64 => 12,  58 => 10,  54 => 9,  46 => 5,  43 => 4,  37 => 3,  31 => 2,);
    }
}
