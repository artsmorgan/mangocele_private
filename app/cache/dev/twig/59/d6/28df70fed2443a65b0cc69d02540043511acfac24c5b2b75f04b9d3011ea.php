<?php

/* ::base.html.twig */
class __TwigTemplate_59d628df70fed2443a65b0cc69d02540043511acfac24c5b2b75f04b9d3011ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"user-scalable=1.0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\">
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script type=\"text/javascript\" src=\"http://coolcarousels.frebsite.nl/js/jquery.carouFredSel.js\" ></script>
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" ></script>
    <script>window.scrollTo(0,1);</script>
</head>
<body>
<div class=\"container\">
    <div class=\"header\">
        <div class=\"logo\">
            <a href=\"/\">
                <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "scheme") . "://") . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "httpHost")) . $this->env->getExtension('assets')->getAssetUrl("images/logo.png")), "html", null, true);
        echo "\" alt=\"Mangocele\" width=\"203\" height=\"57\">
            </a>

        </div>
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-menu\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"glyphicon glyphicon-th-list\"></span>
            </button>
        </div>
        <div class=\"search\">
            <form role=\"search\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control main-search\" placeholder=\"Que Necesitas?\">
                    <button type=\"submit\" class=\"btn btn-default btn-no-border\">
                        <span class=\"glyphicon glyphicon-search\"></span>
                    </button>
                </div>
            </form>
        </div>
        <div class=\"main-menu collapse navbar-collapse\" id=\"main-menu\">
            <ul class=\"nav nav-pills\">
                <li> <a href=\"/\">Inicio</a> </li>
                <li> <a href=\"/categorias\">Categorias</a> </li>
                <li> <a href=\"/empresas\">Empresas</a> </li>
                <li> <a href=\"/conocenos\">Conocenos</a> </li>
                <li> <a href=\"/contactenos\">Contacto</a> </li>
                <li> <a href=\"/clientes\">LogIn</a> </li>
            </ul>
        </div>
    </div>
    <div class=\"container\">
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "    </div>
    <div class=\"footer navbar visible-lg\">
        Mangocele.cr | 2014
    </div>
</div>

</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 54,  118 => 11,  113 => 5,  102 => 55,  100 => 54,  65 => 22,  54 => 14,  48 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  28 => 5,  22 => 1,);
    }
}
