<?php

/* MangoceleSiteBundle:Default:base.html.twig */
class __TwigTemplate_897e0de7535077edd5ed243fabbd9212a78e0f9a01dec422de87e965017bab3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/boostrap.js"), "html", null, true);
        echo "\" ></script>
</head>
<body>
<div class=\"wrapper\">
    <div class=\"header\">
        <div class=\"logo\"></div>
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Brand</a>
        </div>
        <div class=\"main-menu collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li> <a href=\"#\">Inicio</a> </li>
                <li> <a href=\"#\">Conocenos</a> </li>
                <li> <a href=\"#\">Contacto</a> </li>
                <li> <a href=\"#\">LogIn Miembros</a> </li>
            </ul>

        </div>
        <div class=\"search\"></div>
    </div>
    <div class=\"container\">
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "    </div>
    <div class=\"footer navbar navbar-fixed-bottom\">
        Mangocele.cr | 2014
    </div>
</div>
";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MangoceleSiteBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 45,  81 => 46,  70 => 39,  23 => 1,  127 => 57,  118 => 11,  113 => 5,  100 => 54,  65 => 22,  34 => 8,  97 => 33,  90 => 31,  53 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 55,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 3,  94 => 7,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 8,  87 => 31,  21 => 2,  26 => 6,  93 => 32,  88 => 6,  78 => 21,  46 => 5,  27 => 4,  44 => 12,  31 => 5,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 61,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 6,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 45,  72 => 40,  69 => 16,  47 => 9,  40 => 12,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 60,  131 => 52,  123 => 54,  120 => 40,  115 => 43,  111 => 44,  108 => 38,  101 => 32,  98 => 31,  96 => 35,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 4,  41 => 7,  35 => 11,  32 => 2,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 58,  125 => 44,  122 => 46,  116 => 41,  112 => 42,  109 => 39,  106 => 36,  103 => 9,  99 => 8,  95 => 28,  92 => 21,  86 => 5,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 14,  51 => 14,  48 => 12,  45 => 17,  42 => 10,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
