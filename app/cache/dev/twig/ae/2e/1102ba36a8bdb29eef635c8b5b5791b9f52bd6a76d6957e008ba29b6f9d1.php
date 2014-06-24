<?php

/* MangocelecoreBundle:Productos:new.html.twig */
class __TwigTemplate_ae2e1102ba36a8bdb29eef635c8b5b5791b9f52bd6a76d6957e008ba29b6f9d1 extends Twig_Template
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
        echo "<strong>Crear Producto</strong> > Agregar categorías > Agregar Imagenes";
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
        echo $this->env->getExtension('routing')->getPath("admin_productos");
        echo "\" class=\"btn btn-blue pull-right\">
        Regresar al listado
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
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start', array("attr" => array("class" => "form-horizontal mangocele-info")));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        <div class=\"control-group\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idEmpresa"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
            <div class=\"controls\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idEmpresa"), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idEmpresa"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titulo"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
            <div class=\"controls\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titulo"), 'errors');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titulo"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descripcion"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
            <div class=\"controls\">
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descripcion"), 'errors');
        echo "
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "descripcion"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cantidad"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
            <div class=\"controls\">
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cantidad"), 'errors');
        echo "
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cantidad"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dimensiones"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
            <div class=\"controls\">
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dimensiones"), 'errors');
        echo "
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dimensiones"), 'widget');
        echo "
            </div>
        </div>

        <div class=\"control-group\">
            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "peso"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
            <div class=\"controls\">
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "peso"), 'errors');
        echo "
                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "peso"), 'widget');
        echo "
            </div>
        </div>



        ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
    </div>


    <br clear=\"all\" />
";
    }

    // line 79
    public function block_scripts($context, array $blocks = array())
    {
        // line 80
        echo "        <script>
            jQuery(document).ready(function() {
                App.setPage(\"table_managed\");
                App.init(); // init the rest of plugins and elements
                \$('#productos').addClass('active');
                \$('#mangocele_userbundle_user_password').val('');
            });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "MangocelecoreBundle:Productos:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 80,  188 => 79,  178 => 73,  169 => 67,  165 => 66,  160 => 64,  152 => 59,  148 => 58,  143 => 56,  135 => 51,  131 => 50,  126 => 48,  118 => 43,  114 => 42,  109 => 40,  101 => 35,  97 => 34,  92 => 32,  84 => 27,  80 => 26,  75 => 24,  70 => 22,  66 => 21,  46 => 5,  43 => 4,  37 => 3,  31 => 2,);
    }
}
