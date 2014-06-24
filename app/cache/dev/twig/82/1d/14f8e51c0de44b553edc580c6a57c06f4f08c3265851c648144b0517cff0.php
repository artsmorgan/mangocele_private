<?php

/* MangoceleUserBundle:Clientes:index.html.twig */
class __TwigTemplate_821d14f8e51c0de44b553edc580c6a57c06f4f08c3265851c648144b0517cff0 extends Twig_Template
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
        echo "<h1>Clientes list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Username</th>
                <th>Usernamecanonical</th>
                <th>Email</th>
                <th>Emailcanonical</th>
                <th>Enabled</th>
                <th>Salt</th>
                <th>Password</th>
                <th>Lastlogin</th>
                <th>Locked</th>
                <th>Expired</th>
                <th>Expiresat</th>
                <th>Confirmationtoken</th>
                <th>Passwordrequestedat</th>
                <th>Roles</th>
                <th>Credentialsexpired</th>
                <th>Credentialsexpireat</th>
                <th>Nombre</th>
                <th>Apellido1</th>
                <th>Apellido2</th>
                <th>Empresa</th>
                <th>Telefono</th>
                <th>Pais</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 37
            echo "            <tr>
                <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "username"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "usernameCanonical"), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "emailCanonical"), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "enabled"), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "salt"), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "password"), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            if ($this->getAttribute($this->getContext($context, "entity"), "lastLogin")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "lastLogin"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "locked"), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "expired"), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            if ($this->getAttribute($this->getContext($context, "entity"), "expiresAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "expiresAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "confirmationToken"), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            if ($this->getAttribute($this->getContext($context, "entity"), "passwordRequestedAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "passwordRequestedAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "roles"), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "credentialsExpired"), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            if ($this->getAttribute($this->getContext($context, "entity"), "credentialsExpireAt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "credentialsExpireAt"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "apellido1"), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "apellido2"), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "empresa"), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "telefono"), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "pais"), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("clientes_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "MangoceleUserBundle:Clientes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 78,  195 => 73,  170 => 60,  150 => 55,  146 => 54,  359 => 291,  354 => 258,  349 => 10,  342 => 292,  340 => 291,  306 => 259,  304 => 258,  124 => 98,  137 => 47,  134 => 46,  126 => 50,  58 => 23,  104 => 50,  84 => 21,  77 => 24,  155 => 48,  110 => 30,  76 => 17,  114 => 45,  81 => 46,  70 => 19,  23 => 1,  127 => 90,  118 => 58,  113 => 42,  100 => 33,  65 => 36,  34 => 8,  97 => 50,  90 => 42,  53 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 64,  169 => 60,  140 => 53,  132 => 51,  128 => 49,  107 => 29,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 60,  159 => 115,  143 => 56,  135 => 53,  119 => 38,  102 => 45,  71 => 19,  67 => 40,  63 => 34,  59 => 18,  38 => 6,  94 => 43,  89 => 20,  85 => 25,  75 => 28,  68 => 24,  56 => 8,  87 => 44,  21 => 2,  26 => 6,  93 => 32,  88 => 22,  78 => 39,  46 => 5,  27 => 7,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 67,  171 => 61,  166 => 59,  163 => 62,  158 => 57,  156 => 66,  151 => 113,  142 => 61,  138 => 108,  136 => 52,  121 => 47,  117 => 44,  105 => 55,  91 => 23,  62 => 12,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 46,  72 => 38,  69 => 37,  47 => 10,  40 => 12,  37 => 9,  22 => 1,  246 => 90,  157 => 56,  145 => 110,  139 => 60,  131 => 92,  123 => 89,  120 => 45,  115 => 43,  111 => 44,  108 => 46,  101 => 32,  98 => 44,  96 => 35,  83 => 30,  74 => 34,  66 => 29,  55 => 15,  52 => 15,  50 => 11,  43 => 4,  41 => 7,  35 => 6,  32 => 2,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 59,  173 => 65,  168 => 55,  164 => 59,  162 => 58,  154 => 56,  149 => 51,  147 => 46,  144 => 49,  141 => 109,  133 => 55,  130 => 58,  125 => 36,  122 => 49,  116 => 48,  112 => 47,  109 => 56,  106 => 41,  103 => 28,  99 => 27,  95 => 49,  92 => 23,  86 => 41,  82 => 40,  80 => 25,  73 => 42,  64 => 39,  60 => 22,  57 => 11,  54 => 28,  51 => 14,  48 => 8,  45 => 7,  42 => 10,  39 => 4,  36 => 3,  33 => 10,  30 => 2,);
    }
}
