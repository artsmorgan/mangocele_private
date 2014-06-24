<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_694b35e1eb9af1313ae4a032421dbb34693cb2d1845d0eff62b9a213e09621e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo $this->getContext($context, "code");
            echo "</div>
        </div>
    ";
        }
    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 58,  20 => 1,  218 => 114,  211 => 110,  186 => 94,  172 => 86,  165 => 82,  202 => 78,  195 => 73,  170 => 60,  150 => 56,  146 => 54,  359 => 291,  354 => 258,  349 => 10,  342 => 292,  340 => 291,  306 => 259,  304 => 258,  124 => 98,  137 => 66,  134 => 46,  126 => 51,  58 => 18,  104 => 50,  84 => 29,  77 => 24,  155 => 48,  110 => 22,  76 => 17,  114 => 48,  81 => 34,  70 => 29,  23 => 4,  127 => 28,  118 => 49,  113 => 42,  100 => 27,  65 => 36,  34 => 7,  97 => 50,  90 => 32,  53 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 64,  169 => 60,  140 => 54,  132 => 51,  128 => 49,  107 => 29,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 90,  159 => 115,  143 => 56,  135 => 53,  119 => 38,  102 => 17,  71 => 19,  67 => 22,  63 => 21,  59 => 20,  38 => 6,  94 => 34,  89 => 20,  85 => 38,  75 => 28,  68 => 24,  56 => 11,  87 => 25,  21 => 2,  26 => 3,  93 => 29,  88 => 31,  78 => 26,  46 => 14,  27 => 5,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 67,  171 => 61,  166 => 59,  163 => 62,  158 => 78,  156 => 66,  151 => 74,  142 => 61,  138 => 108,  136 => 53,  121 => 47,  117 => 19,  105 => 18,  91 => 27,  62 => 19,  49 => 14,  24 => 7,  25 => 3,  19 => 1,  79 => 46,  72 => 38,  69 => 37,  47 => 8,  40 => 11,  37 => 9,  22 => 2,  246 => 90,  157 => 56,  145 => 110,  139 => 60,  131 => 92,  123 => 58,  120 => 20,  115 => 43,  111 => 44,  108 => 19,  101 => 32,  98 => 44,  96 => 35,  83 => 30,  74 => 26,  66 => 29,  55 => 14,  52 => 10,  50 => 18,  43 => 7,  41 => 5,  35 => 5,  32 => 2,  29 => 3,  209 => 82,  203 => 105,  199 => 67,  193 => 98,  189 => 71,  187 => 84,  182 => 66,  176 => 59,  173 => 65,  168 => 55,  164 => 59,  162 => 58,  154 => 57,  149 => 51,  147 => 46,  144 => 70,  141 => 109,  133 => 55,  130 => 62,  125 => 36,  122 => 50,  116 => 54,  112 => 47,  109 => 50,  106 => 46,  103 => 28,  99 => 40,  95 => 42,  92 => 35,  86 => 41,  82 => 28,  80 => 29,  73 => 16,  64 => 13,  60 => 22,  57 => 12,  54 => 16,  51 => 13,  48 => 9,  45 => 7,  42 => 10,  39 => 10,  36 => 4,  33 => 3,  30 => 2,);
    }
}
