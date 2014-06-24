<?php

/* MangoceleBussinessBundle:Clientes:show.html.twig */
class __TwigTemplate_1576387be8df7da0bfd4c993f6f9aed0e0e69c696e667e9eb9fd9d29e5cd6eb9 extends Twig_Template
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
        echo "<h1>Clientes</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellido1</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "apellido1"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellido2</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "apellido2"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Empresa</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "empresa"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "telefono"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pais</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "pais"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "password"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Salt</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "salt"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "roles"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "username"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Usernamecanonical</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "usernameCanonical"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Emailcanonical</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "emailCanonical"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Enabled</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "enabled"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastlogin</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "lastLogin"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Locked</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "locked"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Expired</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "expired"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Expiresat</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "expiresAt"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Confirmationtoken</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "confirmationToken"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Passwordrequestedat</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "passwordRequestedAt"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Credentialsexpired</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "credentialsExpired"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Credentialsexpireat</th>
                <td>";
        // line 94
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "credentialsExpireAt"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("clientes");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 114
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "MangoceleBussinessBundle:Clientes:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 58,  20 => 1,  218 => 114,  211 => 110,  186 => 94,  172 => 86,  165 => 82,  202 => 78,  195 => 73,  170 => 60,  150 => 56,  146 => 54,  359 => 291,  354 => 258,  349 => 10,  342 => 292,  340 => 291,  306 => 259,  304 => 258,  124 => 98,  137 => 66,  134 => 46,  126 => 51,  58 => 18,  104 => 50,  84 => 21,  77 => 24,  155 => 48,  110 => 47,  76 => 17,  114 => 48,  81 => 34,  70 => 19,  23 => 4,  127 => 90,  118 => 49,  113 => 42,  100 => 27,  65 => 36,  34 => 7,  97 => 50,  90 => 42,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 64,  169 => 60,  140 => 54,  132 => 51,  128 => 49,  107 => 29,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 90,  159 => 115,  143 => 56,  135 => 53,  119 => 38,  102 => 46,  71 => 19,  67 => 26,  63 => 34,  59 => 18,  38 => 8,  94 => 43,  89 => 20,  85 => 25,  75 => 28,  68 => 24,  56 => 8,  87 => 25,  21 => 2,  26 => 12,  93 => 29,  88 => 38,  78 => 39,  46 => 14,  27 => 5,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 67,  171 => 61,  166 => 59,  163 => 62,  158 => 78,  156 => 66,  151 => 74,  142 => 61,  138 => 108,  136 => 53,  121 => 47,  117 => 44,  105 => 55,  91 => 27,  62 => 19,  49 => 14,  24 => 7,  25 => 3,  19 => 2,  79 => 46,  72 => 38,  69 => 37,  47 => 10,  40 => 11,  37 => 9,  22 => 3,  246 => 90,  157 => 56,  145 => 110,  139 => 60,  131 => 92,  123 => 58,  120 => 45,  115 => 43,  111 => 44,  108 => 46,  101 => 32,  98 => 44,  96 => 35,  83 => 30,  74 => 30,  66 => 29,  55 => 14,  52 => 15,  50 => 10,  43 => 12,  41 => 9,  35 => 6,  32 => 2,  29 => 6,  209 => 82,  203 => 105,  199 => 67,  193 => 98,  189 => 71,  187 => 84,  182 => 66,  176 => 59,  173 => 65,  168 => 55,  164 => 59,  162 => 58,  154 => 57,  149 => 51,  147 => 46,  144 => 70,  141 => 109,  133 => 55,  130 => 62,  125 => 36,  122 => 50,  116 => 54,  112 => 47,  109 => 50,  106 => 46,  103 => 28,  99 => 27,  95 => 42,  92 => 23,  86 => 41,  82 => 40,  80 => 25,  73 => 42,  64 => 39,  60 => 22,  57 => 11,  54 => 16,  51 => 13,  48 => 12,  45 => 7,  42 => 10,  39 => 10,  36 => 7,  33 => 7,  30 => 2,);
    }
}
