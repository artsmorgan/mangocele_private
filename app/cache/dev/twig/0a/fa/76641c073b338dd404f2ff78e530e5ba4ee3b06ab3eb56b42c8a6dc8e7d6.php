<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_0afa76641c073b338dd404f2ff78e530e5ba4ee3b06ab3eb56b42c8a6dc8e7d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 58,  20 => 1,  218 => 114,  211 => 110,  186 => 94,  172 => 86,  165 => 82,  202 => 78,  195 => 73,  170 => 60,  150 => 56,  146 => 54,  359 => 291,  354 => 258,  349 => 10,  342 => 292,  340 => 291,  306 => 259,  304 => 258,  124 => 98,  137 => 66,  134 => 46,  126 => 51,  58 => 18,  104 => 50,  84 => 21,  77 => 24,  155 => 48,  110 => 47,  76 => 17,  114 => 48,  81 => 34,  70 => 29,  23 => 4,  127 => 90,  118 => 49,  113 => 42,  100 => 27,  65 => 36,  34 => 7,  97 => 50,  90 => 42,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 64,  169 => 60,  140 => 54,  132 => 51,  128 => 49,  107 => 29,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 90,  159 => 115,  143 => 56,  135 => 53,  119 => 38,  102 => 46,  71 => 19,  67 => 22,  63 => 21,  59 => 20,  38 => 6,  94 => 43,  89 => 20,  85 => 38,  75 => 28,  68 => 24,  56 => 8,  87 => 25,  21 => 2,  26 => 3,  93 => 29,  88 => 38,  78 => 34,  46 => 14,  27 => 5,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 67,  171 => 61,  166 => 59,  163 => 62,  158 => 78,  156 => 66,  151 => 74,  142 => 61,  138 => 108,  136 => 53,  121 => 47,  117 => 44,  105 => 55,  91 => 27,  62 => 19,  49 => 14,  24 => 7,  25 => 3,  19 => 1,  79 => 46,  72 => 38,  69 => 37,  47 => 10,  40 => 11,  37 => 9,  22 => 2,  246 => 90,  157 => 56,  145 => 110,  139 => 60,  131 => 92,  123 => 58,  120 => 45,  115 => 43,  111 => 44,  108 => 46,  101 => 32,  98 => 44,  96 => 35,  83 => 30,  74 => 26,  66 => 29,  55 => 14,  52 => 10,  50 => 18,  43 => 7,  41 => 9,  35 => 5,  32 => 2,  29 => 3,  209 => 82,  203 => 105,  199 => 67,  193 => 98,  189 => 71,  187 => 84,  182 => 66,  176 => 59,  173 => 65,  168 => 55,  164 => 59,  162 => 58,  154 => 57,  149 => 51,  147 => 46,  144 => 70,  141 => 109,  133 => 55,  130 => 62,  125 => 36,  122 => 50,  116 => 54,  112 => 47,  109 => 50,  106 => 46,  103 => 28,  99 => 40,  95 => 42,  92 => 35,  86 => 41,  82 => 40,  80 => 29,  73 => 42,  64 => 39,  60 => 22,  57 => 12,  54 => 16,  51 => 13,  48 => 9,  45 => 7,  42 => 10,  39 => 10,  36 => 7,  33 => 7,  30 => 2,);
    }
}
