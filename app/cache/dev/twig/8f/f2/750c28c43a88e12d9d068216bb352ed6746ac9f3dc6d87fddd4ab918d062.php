<?php

/* MangoceleBussinessBundle:Clientes:new.html.twig */
class __TwigTemplate_8ff2750c28c43a88e12d9d068216bb352ed6746ac9f3dc6d87fddd4ab918d062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Clientes creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("clientes");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "MangoceleBussinessBundle:Clientes:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 58,  20 => 1,  218 => 114,  211 => 110,  186 => 94,  172 => 86,  165 => 82,  202 => 78,  195 => 73,  170 => 60,  150 => 56,  146 => 54,  359 => 291,  354 => 258,  349 => 10,  342 => 292,  340 => 291,  306 => 259,  304 => 258,  124 => 98,  137 => 66,  134 => 46,  126 => 51,  58 => 18,  104 => 50,  84 => 21,  77 => 24,  155 => 48,  110 => 47,  76 => 17,  114 => 48,  81 => 24,  70 => 19,  23 => 4,  127 => 90,  118 => 49,  113 => 42,  100 => 27,  65 => 36,  34 => 7,  97 => 50,  90 => 42,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 64,  169 => 60,  140 => 54,  132 => 51,  128 => 49,  107 => 29,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 90,  159 => 115,  143 => 56,  135 => 53,  119 => 38,  102 => 45,  71 => 19,  67 => 20,  63 => 34,  59 => 18,  38 => 8,  94 => 43,  89 => 20,  85 => 25,  75 => 28,  68 => 24,  56 => 8,  87 => 25,  21 => 2,  26 => 12,  93 => 29,  88 => 38,  78 => 39,  46 => 11,  27 => 5,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 67,  171 => 61,  166 => 59,  163 => 62,  158 => 78,  156 => 66,  151 => 74,  142 => 61,  138 => 108,  136 => 53,  121 => 47,  117 => 44,  105 => 55,  91 => 27,  62 => 19,  49 => 14,  24 => 7,  25 => 3,  19 => 2,  79 => 46,  72 => 38,  69 => 37,  47 => 10,  40 => 11,  37 => 9,  22 => 3,  246 => 90,  157 => 56,  145 => 110,  139 => 60,  131 => 92,  123 => 58,  120 => 45,  115 => 43,  111 => 44,  108 => 46,  101 => 32,  98 => 44,  96 => 35,  83 => 30,  74 => 30,  66 => 29,  55 => 14,  52 => 15,  50 => 10,  43 => 12,  41 => 9,  35 => 6,  32 => 2,  29 => 6,  209 => 82,  203 => 105,  199 => 67,  193 => 98,  189 => 71,  187 => 84,  182 => 66,  176 => 59,  173 => 65,  168 => 55,  164 => 59,  162 => 58,  154 => 57,  149 => 51,  147 => 46,  144 => 55,  141 => 109,  133 => 55,  130 => 52,  125 => 36,  122 => 50,  116 => 54,  112 => 47,  109 => 50,  106 => 46,  103 => 28,  99 => 27,  95 => 42,  92 => 23,  86 => 41,  82 => 40,  80 => 25,  73 => 42,  64 => 39,  60 => 16,  57 => 11,  54 => 16,  51 => 13,  48 => 12,  45 => 7,  42 => 10,  39 => 9,  36 => 7,  33 => 7,  30 => 2,);
    }
}
