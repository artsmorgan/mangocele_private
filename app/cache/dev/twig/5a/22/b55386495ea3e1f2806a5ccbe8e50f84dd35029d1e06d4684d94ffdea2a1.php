<?php

/* MangocelecoreBundle:SubCategorias:index.html.twig */
class __TwigTemplate_5a22b55386495ea3e1f2806a5ccbe8e50f84dd35029d1e06d4684d94ffdea2a1 extends Twig_Template
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
        echo "Listado de Categorías";
    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        echo "Categorías";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_categorias_new");
        echo "\" class=\"btn btn-blue pull-right\">
        Crear Nueva Categoría
    </a>

    <table class=\"records_list table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Categoria</th>
                <th>Titulo</th>
                <th>Creado por</th>
                <th>Fecha creacion</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</td>
                <td></td>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_subcategorias_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titulo"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdBy"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($this->getContext($context, "entity"), "createdWhen")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "createdWhen"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_subcategorias_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" title=\"Editar\" style=\"margin-left: 10px\"><i class=\"icon-edit\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
    <br clear=\"all\">
";
    }

    // line 37
    public function block_scripts($context, array $blocks = array())
    {
        // line 38
        echo "    <script>
        jQuery(document).ready(function() {
            App.setPage(\"table_managed\");
            App.init(); // init the rest of plugins and elements
            \$('#categorias').addClass('active');
            \$('#mangocele_userbundle_user_password').val('');
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "MangocelecoreBundle:SubCategorias:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 38,  112 => 37,  105 => 33,  95 => 29,  88 => 27,  84 => 26,  78 => 25,  73 => 23,  70 => 22,  66 => 21,  46 => 5,  43 => 4,  37 => 3,  31 => 2,);
    }
}
