<?php

/* MangocelecoreBundle:SubCategorias:new.html.twig */
class __TwigTemplate_51c02ea1ce617ee6cfd906cd3fe8b58c502f2f8a6b151ae9aeb43fbf6491cb84 extends Twig_Template
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
        echo "Crear Sub-Categoría";
    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        echo "Categorías";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "

<br clear=\"all\">
";
    }

    // line 10
    public function block_scripts($context, array $blocks = array())
    {
        // line 11
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
        return "MangocelecoreBundle:SubCategorias:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  54 => 10,  46 => 6,  43 => 4,  37 => 3,  31 => 2,);
    }
}
