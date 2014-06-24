<?php

/* MangocelecoreBundle:Empresas:edit.html.twig */
class __TwigTemplate_15e8ebea5c30899beb23d58b03b38f4fda84ab1aff55d78496ddacd456d17bc4 extends Twig_Template
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
        echo "Cear Nueva Empresa";
    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        echo "Empresas";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_empresas");
        echo "\" class=\"btn green pull-right btn-empresas-listado\">
        Listado de Empresas
    </a>
    <br clear=\"all\" />
    <div class=\"empresas-img-left pull-left\">
        <div class=\"img-principal\">
            <img src=\"http://placehold.it/350x350\">
            <form action=\"upload_file.php\" method=\"post\" enctype=\"multipart/form-data\">
                <label for=\"file\">Subir Imagen:</label>
                <input type=\"file\" name=\"file\" id=\"file\"><br>
                <input type=\"submit\" name=\"submit\" value=\"Subir\" class=\"btn\" style=\"width: 100%\">
            </form>
        </div>
    </div>
    <div class=\"empresas-info-right pull-left\">
        ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form_start', array("attr" => array("class" => "form-horizontal mangocele-info")));
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'errors');
        echo "
        <div class=\"control-group\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "idCliente"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
            <div class=\"controls\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "idCliente"), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "idCliente"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "nombre"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
            <div class=\"controls\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "nombre"), 'errors');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "nombre"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "descripcion"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
            <div class=\"controls\">
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "descripcion"), 'errors');
        echo "
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "descripcion"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
            <div class=\"controls\">
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'errors');
        echo "
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "direccion"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
            <div class=\"controls\">
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "direccion"), 'errors');
        echo "
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "direccion"), 'widget');
        echo "
            </div>
        </div>

        <table class=\"table\">
            <tr>
                <td>
                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "telefonoOficina"), 'label');
        echo "
                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "telefonoOficina"), 'errors');
        echo "
                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "telefonoOficina"), 'widget');
        echo "
                </td>
                <td>
                    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "telefonoEmpresa"), 'label');
        echo "
                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "telefonoEmpresa"), 'errors');
        echo "
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "telefonoEmpresa"), 'widget');
        echo "
                </td>
                <td>
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "fax"), 'label');
        echo "
                    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "fax"), 'errors');
        echo "
                    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "fax"), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "facebook"), 'label');
        echo "
                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "facebook"), 'errors');
        echo "
                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "facebook"), 'widget');
        echo "
                </td>
                <td>
                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "twitter"), 'label');
        echo "
                    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "twitter"), 'errors');
        echo "
                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "twitter"), 'widget');
        echo "
                </td>
                <td>
                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "youtube"), 'label');
        echo "
                    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "youtube"), 'errors');
        echo "
                    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "youtube"), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "cordX"), 'label');
        echo "
                    ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "cordX"), 'errors');
        echo "
                    ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "cordX"), 'widget');
        echo "
                </td>
                <td>
                    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "cordY"), 'label');
        echo "
                    ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "cordY"), 'errors');
        echo "
                    ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "cordY"), 'widget');
        echo "
                </td>
                <td>
                    ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "submit"), 'widget', array("attr" => array("class" => "btn blue pull-right", "style" => "margin-top:20px;width:100%", "formnovalidate" => "")));
        echo "
                </td>
            </tr>
        </table>


        ";
        // line 115
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form_end');
        echo "
    </div>


    <br clear=\"all\" />
";
    }

    // line 121
    public function block_scripts($context, array $blocks = array())
    {
        // line 122
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
        return "MangocelecoreBundle:Empresas:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 122,  296 => 121,  286 => 115,  277 => 109,  271 => 106,  267 => 105,  263 => 104,  257 => 101,  253 => 100,  249 => 99,  241 => 94,  237 => 93,  233 => 92,  227 => 89,  223 => 88,  219 => 87,  213 => 84,  209 => 83,  205 => 82,  197 => 77,  193 => 76,  189 => 75,  183 => 72,  179 => 71,  175 => 70,  169 => 67,  165 => 66,  161 => 65,  151 => 58,  147 => 57,  142 => 55,  134 => 50,  130 => 49,  125 => 47,  117 => 42,  113 => 41,  108 => 39,  100 => 34,  96 => 33,  91 => 31,  83 => 26,  79 => 25,  74 => 23,  69 => 21,  65 => 20,  46 => 5,  43 => 4,  37 => 3,  31 => 2,);
    }
}
