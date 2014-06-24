<?php

/* MangoceleSiteBundle:Default:categorias_listado.html.twig */
class __TwigTemplate_b96daddefca8a16af2b16b2af28d1992e980fc6044c6c163812f9688b829599e extends Twig_Template
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
        echo "
    <div class=\"content-wrapper\">
        <div class=\"header-banner\"><img src=\"http://placehold.it/1100x110\"></div>
        <h1>Categorias</h1>

        <div class=\"category-list\">
            <div class=\"left-panel visible-lg\">
                <h4>Mostrando todas las categorías</h4>
                <div>
                    Todo lo que buscas y mas.
                </div>
            </div>
            <div class=\"right-panel\">
                <ul class=\"nav nav-stacked\">
                    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categorias"));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 23
            echo "                        <li><a href=\"/categorias/";
            echo twig_escape_filter($this->env, $this->getContext($context, "categoria"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "categoria"), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </ul>
            </div>
        </div>
    <div class=\"clearfix\"></div>
        <hr>
    </div>
";
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "MangoceleSiteBundle:Default:categorias_listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  97 => 32,  87 => 25,  76 => 23,  72 => 22,  56 => 8,  53 => 7,  46 => 5,  43 => 4,  38 => 3,  32 => 2,);
    }
}
