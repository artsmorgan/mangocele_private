<?php

/* MangocelecoreBundle:Empresas:index.html.twig */
class __TwigTemplate_ecfbf0015072b8aed6b0b1239e732856b0b1dc3edfe31db7850ccc5db90926ce extends Twig_Template
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
        echo "Listado de Empresas";
    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        echo "Empresas";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_empresas_new");
        echo "\" class=\"btn btn-blue pull-right\">
        Crear Nueva Empresa
    </a>

    <table class=\"records_list table table-striped\" style=\"margin-top: 60px\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Idcliente</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Tel. Oficina</th>
                <th>Telefono Personal</th>
                <th>Fax</th>
                <th>Email</th>
                <th>Direccion</th>
                <!--<th>Cordx</th>
                <th>Cordy</th>-->
                <th>Facebook</th>
                <th>Twitter</th>
                <!--<th>Linkedin</th>-->
                <th>Youtube</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 33
            echo "            <tr>
                <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_empresas_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "idCliente"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "descripcion"), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "telefonoOficina"), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "telefonoEmpresa"), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fax"), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "direccion"), "html", null, true);
            echo "</td>
                <!--<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cordX"), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cordY"), "html", null, true);
            echo "</td>-->
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "facebook"), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "twitter"), "html", null, true);
            echo "</td>
                <!--<td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "linkedin"), "html", null, true);
            echo "</td>-->
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "youtube"), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_empresas_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" title=\"Editar\" style=\"margin-left: 10px\"><i class=\"icon-edit\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>

    <br clear=\"all\">
";
    }

    // line 59
    public function block_scripts($context, array $blocks = array())
    {
        // line 60
        echo "    <script>
        jQuery(document).ready(function() {
            App.setPage(\"table_managed\");
            App.init(); // init the rest of plugins and elements
            \$('#empresas').addClass('active');
            \$('#mangocele_userbundle_user_password').val('');
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "MangocelecoreBundle:Empresas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 60,  164 => 59,  156 => 54,  146 => 50,  141 => 48,  137 => 47,  133 => 46,  129 => 45,  125 => 44,  121 => 43,  117 => 42,  113 => 41,  109 => 40,  105 => 39,  101 => 38,  97 => 37,  93 => 36,  89 => 35,  83 => 34,  80 => 33,  76 => 32,  46 => 6,  43 => 4,  37 => 3,  31 => 2,);
    }
}
