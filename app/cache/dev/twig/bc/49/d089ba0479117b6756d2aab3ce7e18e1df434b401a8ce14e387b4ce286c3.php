<?php

/* MangoceleUserBundle:User:new.html.twig */
class __TwigTemplate_bc49d089ba0479117b6756d2aab3ce7e18e1df434b401a8ce14e387b4ce286c3 extends Twig_Template
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
        echo "Creación de usuarios";
    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        echo "Usuarios";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "
";
    }

    // line 7
    public function block_scripts($context, array $blocks = array())
    {
        // line 8
        echo "    <script>
        jQuery(document).ready(function() {
            App.setPage(\"table_managed\");
            App.init(); // init the rest of plugins and elements
            \$('#clientes').addClass('active');
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "MangoceleUserBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  53 => 7,  46 => 5,  43 => 4,  37 => 3,  31 => 2,);
    }
}
