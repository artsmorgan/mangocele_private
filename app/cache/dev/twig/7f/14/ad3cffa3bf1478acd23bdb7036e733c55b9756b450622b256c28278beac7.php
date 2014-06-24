<?php

/* MangoceleAdminBundle:Default:index.html.twig */
class __TwigTemplate_7f14ad3cffa3bf1478acd23bdb7036e733c55b9756b450622b256c28278beac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MangoceleAdminBundle:Default:adminBase.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo " Mangocele.cr ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "

";
    }

    // line 7
    public function block_scripts($context, array $blocks = array())
    {
        // line 8
        echo "    <script>
        jQuery(document).ready(function() {
            App.setPage(\"calendar\");
            App.init(); // init the rest of plugins and elements
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "MangoceleAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  45 => 7,  39 => 4,  36 => 3,  30 => 2,);
    }
}
