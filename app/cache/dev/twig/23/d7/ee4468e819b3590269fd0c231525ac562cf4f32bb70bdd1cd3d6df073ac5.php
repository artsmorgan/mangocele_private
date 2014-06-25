<?php

/* MangoceleSiteBundle:Default:index.html.twig */
class __TwigTemplate_23d7ee4468e819b3590269fd0c231525ac562cf4f32bb70bdd1cd3d6df073ac5 extends Twig_Template
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
        echo "    <script>
        \$(function() {
            \$('#carousel').carouFredSel({
                responsive: true,
                items: {
                    visible: 1,
                    width: 500,
                    height: 400
                },
                scroll: {
                    duration: 250,
                    timeoutDuration: 2500,
                    fx: 'uncover-fade'
                },
                pagination: '#pager'
            });
        });
    </script>
    <div class=\"hero visible-lg\">
        <div id=\"wrapper\">
            <div id=\"carousel\">
                <div><a href=\"/conocenos\"><img src=\"images/snow1.jpg\" /> </a></div>
                <div><a href=\"/conocenos\"><img src=\"images/img2.jpg\" /> </a></div>
                <div><a href=\"/conocenos\"><img src=\"images/img3.jpg\" /> </a></div>
                <div><a href=\"/conocenos\"><img src=\"images/img4.jpg\" /> </a></div>
            </div>
            <div id=\"title\">
                <h3>De ticos
                    <br><span>para ticos</span>
                </h3>
            </div>
            <div id=\"pager\"></div>
        </div>
    </div>
    <br clear=\"all\"/>
    <div class=\"clearfix\"></div>
    <div class=\"lower-content\">
        ";
        // line 45
        $this->env->loadTemplate("MangoceleSiteBundle:Default:index-lower-content.html.twig")->display($context);
        // line 46
        echo "    </div>
    <hr class=\"visible-lg\"/>
    <div class=\"company-content visible-lg\">
        ";
        // line 49
        $this->env->loadTemplate("MangoceleSiteBundle:Default:index-company-list.html.twig")->display($context);
        // line 50
        echo "    </div>
";
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        // line 53
        echo "
";
    }

    public function getTemplateName()
    {
        return "MangoceleSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 53,  109 => 52,  104 => 50,  102 => 49,  97 => 46,  95 => 45,  56 => 8,  53 => 7,  46 => 5,  43 => 4,  38 => 3,  32 => 2,);
    }
}
