<?php

/* MangocelecoreBundle:Productos:index.html.twig */
class __TwigTemplate_f82da1bcc7aadfd64022b22ec75f303e63a2893eac111193734d14c455b4a22f extends Twig_Template
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
        echo "Listado de Productos";
    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        echo "Productos";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_productos_new");
        echo "\" class=\"btn btn-blue pull-right\">
    Crear Producto
</a>

<table class=\"records_list table table-striped\">
        <thead>
            <tr>
                <th>Empresa</th>
                <th>Id</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Dimensiones</th>
                <th>Peso</th>
                <th>Valoracion</th>
                <!--<th>Createdby</th>-->
                <th>Fecha Creacion</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 27
            echo "            <tr>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_productos_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "idEmpresa"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titulo"), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "descripcion"), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cantidad"), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dimensiones"), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "peso"), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "valoracion"), "html", null, true);
            echo "</td>
                <!--<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdBy"), "html", null, true);
            echo "</td>-->
                <td>";
            // line 37
            if ($this->getAttribute($this->getContext($context, "entity"), "createdWhen")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdWhen"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_productos_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" title=\"Editar\" style=\"margin-left: 10px\"><i class=\"icon-edit\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>
    <br clear=\"all\">
    ";
    }

    // line 47
    public function block_scripts($context, array $blocks = array())
    {
        // line 48
        echo "        <script>
            jQuery(document).ready(function() {
                App.setPage(\"table_managed\");
                App.init(); // init the rest of plugins and elements
                \$('#productos').addClass('active');
            });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "MangocelecoreBundle:Productos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 48,  140 => 47,  133 => 43,  123 => 39,  116 => 37,  112 => 36,  108 => 35,  104 => 34,  100 => 33,  96 => 32,  92 => 31,  88 => 30,  84 => 29,  78 => 28,  75 => 27,  71 => 26,  46 => 5,  43 => 4,  37 => 3,  31 => 2,);
    }
}
