<?php

/* MangocelecoreBundle:Categorias:new.html.twig */
class __TwigTemplate_17793cd8b4ac6236598501a0d3235f6f505d964b6d2ce69bbeab2919c3a0f93a extends Twig_Template
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
        echo "Editar Categoría";
    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        echo "Categorías";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_categorias");
        echo "\" class=\"btn btn-blue pull-right\">
        Regresar al listado
    </a>

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "

    <br clear=\"all\">
";
    }

    // line 13
    public function block_scripts($context, array $blocks = array())
    {
        // line 14
        echo "    <script>
        jQuery(document).ready(function() {
            App.setPage(\"table_managed\");
            App.init(); // init the rest of plugins and elements
            \$('#categorias').addClass('active');
            \$('#mangocele_userbundle_user_password').val('');
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "MangocelecoreBundle:Categorias:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  62 => 13,  54 => 9,  46 => 5,  43 => 4,  37 => 3,  31 => 2,);
    }
}
