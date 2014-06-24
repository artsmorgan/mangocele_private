<?php

/* MangoceleUserBundle:User:index.html.twig */
class __TwigTemplate_c73220132c013046919e19bea451a2f1acf1095b450d1b639bb8fd985405f14a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MangoceleAdminBundle:Default:adminBase.html.twig");

        $this->blocks = array(
            'pagetitle' => array($this, 'block_pagetitle'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MangoceleAdminBundle:Default:adminBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pagetitle($context, array $blocks = array())
    {
        echo "Lista de usuarios";
    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        echo "Usuarios";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\" class=\"pull-right btn green\">
        <i class=\"icon-plus-sign\"></i> Crear un nuevo Usuario
    </a>

    <table class=\"records_list table table-striped\" style=\"margin-top: 60px\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Nombre</th>
                <th>Apellido1</th>
                <th>Apellido2</th>
                <th>Pais</th>
                <th>Empresa</th>
                <th>Telefono</th>
                <th>Activo</th>
                <th>Ultima visita</th>
                <th>Roles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "            <tr>

                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "apellido1"), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "apellido2"), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "pais"), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "empresa"), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "telefono"), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "enabled"), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            if ($this->getAttribute($this->getContext($context, "entity"), "lastLogin")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "lastLogin"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "roles"), "html", null, true);
            echo "</td>
                <td>
                    <!--<a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-user\"></i></a>-->
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" title=\"Editar\" style=\"margin-left: 10px\"><i class=\"icon-edit\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    ";
    }

    // line 51
    public function block_scripts($context, array $blocks = array())
    {
        // line 52
        echo "    <script>
        jQuery(document).ready(function() {
            App.setPage(\"table_managed\");
            App.init(); // init the rest of plugins and elements
            \$('#clientes').addClass('active');
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "MangoceleUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 52,  148 => 51,  141 => 47,  131 => 43,  127 => 42,  122 => 40,  116 => 39,  112 => 38,  108 => 37,  104 => 36,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  76 => 28,  72 => 27,  46 => 5,  43 => 4,  37 => 3,  31 => 2,);
    }
}
