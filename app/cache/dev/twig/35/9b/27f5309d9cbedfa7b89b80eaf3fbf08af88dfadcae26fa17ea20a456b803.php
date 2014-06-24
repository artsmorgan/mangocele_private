<?php

/* MangoceleSiteBundle:Default:contactenos.html.twig */
class __TwigTemplate_359b27f5309d9cbedfa7b89b80eaf3fbf08af88dfadcae26fa17ea20a456b803 extends Twig_Template
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
        echo "<div class=\"content-wrapper\">
    <div class=\"header-banner\"><img src=\"http://placehold.it/1100x110\"></div>
    <h1>Contactenos</h1>
    <div class=\"form-contactenos\">
        ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Nombre_Completo"), 'label');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Nombre_Completo"), 'errors');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Nombre_Completo"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Email"), 'label');
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Email"), 'errors');
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Telefono"), 'label');
        echo "
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Telefono"), 'errors');
        echo "
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Telefono"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Direccion"), 'label');
        echo "
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Direccion"), 'errors');
        echo "
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Direccion"), 'widget', array("attr" => array("class" => "form-control", "rows" => "3")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Empresa"), 'label');
        echo "
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Empresa"), 'errors');
        echo "
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Empresa"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Comentarios"), 'label');
        echo "
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Comentarios"), 'errors');
        echo "
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Comentarios"), 'widget', array("attr" => array("class" => "form-control", "rows" => "3")));
        echo "
        </div>

        <div>
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Enviar"), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
        </div>

        ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
    </div>
</div>
";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        // line 60
        echo "
";
    }

    public function getTemplateName()
    {
        return "MangoceleSiteBundle:Default:contactenos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 48,  110 => 30,  76 => 17,  114 => 45,  81 => 46,  70 => 19,  23 => 1,  127 => 57,  118 => 11,  113 => 5,  100 => 33,  65 => 22,  34 => 8,  97 => 32,  90 => 31,  53 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 42,  132 => 40,  128 => 49,  107 => 36,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 60,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 28,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 3,  94 => 7,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 8,  87 => 22,  21 => 2,  26 => 6,  93 => 32,  88 => 6,  78 => 21,  46 => 5,  27 => 4,  44 => 12,  31 => 5,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 47,  142 => 61,  138 => 54,  136 => 41,  121 => 35,  117 => 34,  105 => 40,  91 => 23,  62 => 12,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 45,  72 => 16,  69 => 16,  47 => 9,  40 => 12,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 60,  131 => 52,  123 => 54,  120 => 40,  115 => 43,  111 => 44,  108 => 38,  101 => 32,  98 => 31,  96 => 35,  83 => 25,  74 => 14,  66 => 13,  55 => 15,  52 => 21,  50 => 10,  43 => 4,  41 => 7,  35 => 11,  32 => 2,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 59,  173 => 65,  168 => 55,  164 => 59,  162 => 52,  154 => 58,  149 => 51,  147 => 46,  144 => 49,  141 => 48,  133 => 55,  130 => 58,  125 => 36,  122 => 46,  116 => 41,  112 => 42,  109 => 39,  106 => 29,  103 => 9,  99 => 8,  95 => 24,  92 => 21,  86 => 5,  82 => 22,  80 => 18,  73 => 20,  64 => 17,  60 => 6,  57 => 11,  54 => 14,  51 => 14,  48 => 12,  45 => 17,  42 => 10,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
