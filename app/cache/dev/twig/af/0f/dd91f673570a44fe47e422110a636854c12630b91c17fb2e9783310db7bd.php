<?php

/* MangoceleUserBundle:Clientes:edit.html.twig */
class __TwigTemplate_af0fdd91f673570a44fe47e422110a636854c12630b91c17fb2e9783310db7bd extends Twig_Template
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
        echo "<h1>Clientes edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form');
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
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "MangoceleUserBundle:Clientes:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 291,  354 => 258,  349 => 10,  342 => 292,  340 => 291,  306 => 259,  304 => 258,  124 => 98,  137 => 47,  134 => 46,  126 => 42,  58 => 23,  104 => 50,  84 => 21,  77 => 24,  155 => 48,  110 => 30,  76 => 17,  114 => 45,  81 => 46,  70 => 19,  23 => 1,  127 => 90,  118 => 58,  113 => 42,  100 => 33,  65 => 22,  34 => 8,  97 => 50,  90 => 34,  53 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 95,  132 => 40,  128 => 49,  107 => 29,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 60,  159 => 115,  143 => 56,  135 => 53,  119 => 38,  102 => 49,  71 => 19,  67 => 40,  63 => 34,  59 => 18,  38 => 6,  94 => 55,  89 => 20,  85 => 25,  75 => 28,  68 => 24,  56 => 8,  87 => 44,  21 => 2,  26 => 6,  93 => 32,  88 => 22,  78 => 18,  46 => 5,  27 => 7,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 113,  142 => 61,  138 => 108,  136 => 107,  121 => 47,  117 => 44,  105 => 55,  91 => 23,  62 => 12,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 46,  72 => 40,  69 => 38,  47 => 10,  40 => 12,  37 => 9,  22 => 1,  246 => 90,  157 => 56,  145 => 110,  139 => 60,  131 => 92,  123 => 89,  120 => 45,  115 => 43,  111 => 44,  108 => 66,  101 => 32,  98 => 36,  96 => 35,  83 => 30,  74 => 34,  66 => 29,  55 => 15,  52 => 15,  50 => 11,  43 => 4,  41 => 7,  35 => 6,  32 => 2,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 59,  173 => 65,  168 => 55,  164 => 59,  162 => 52,  154 => 58,  149 => 51,  147 => 46,  144 => 49,  141 => 109,  133 => 55,  130 => 58,  125 => 36,  122 => 46,  116 => 41,  112 => 44,  109 => 56,  106 => 41,  103 => 28,  99 => 27,  95 => 49,  92 => 23,  86 => 50,  82 => 38,  80 => 25,  73 => 42,  64 => 39,  60 => 22,  57 => 11,  54 => 28,  51 => 14,  48 => 8,  45 => 7,  42 => 10,  39 => 4,  36 => 3,  33 => 10,  30 => 2,);
    }
}
