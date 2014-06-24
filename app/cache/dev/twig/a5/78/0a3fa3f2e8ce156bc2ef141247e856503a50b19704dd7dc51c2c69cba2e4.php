<?php

/* MangoceleUserBundle:User:edit.html.twig */
class __TwigTemplate_a5780a3fa3f2e8ce156bc2ef141247e856503a50b19704dd7dc51c2c69cba2e4 extends Twig_Template
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

    // line 3
    public function block_pagetitle($context, array $blocks = array())
    {
        echo "Editar Usuario";
    }

    // line 4
    public function block_breadcrumbs($context, array $blocks = array())
    {
        echo "Usuarios";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        if ($this->getContext($context, "updated")) {
            // line 7
            echo "    <div class=\"alert alert-success\">
        <strong>Exito!</strong> El usuario ha sido actualizado.
    </div>
";
        }
        // line 11
        echo "
<div class=\"delete-form pull-right\">
    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form_start');
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'errors');
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "delete_form"), "submit"), 'widget', array("attr" => array("class" => "btn red")));
        echo "
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form_end');
        echo "
</div>
<div class=\"edit-form pull-left\">
    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form_start', array("attr" => array("class" => "form-horizontal mangocele-info")));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'errors');
        echo "


    <div class=\"control-group\">
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
        <div class=\"controls\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'errors');
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "email"), 'widget');
        echo "
        </div>
    </div>

    <div class=\"control-group\">
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "password"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
        <div class=\"controls\">
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "password"), 'errors');
        echo "
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "password"), 'widget');
        echo "
        </div>
    </div>

    <div class=\"control-group\">
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "roles"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
        <div class=\"controls\">
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "roles"), 'errors');
        echo "
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "roles"), 'widget');
        echo "
        </div>
    </div>

    <div class=\"control-group\">
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "nombre"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
        <div class=\"controls\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "nombre"), 'errors');
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "nombre"), 'widget');
        echo "
        </div>
    </div>

    <div class=\"control-group\">
        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "apellido1"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
        <div class=\"controls\">
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "apellido1"), 'errors');
        echo "
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "apellido1"), 'widget');
        echo "
        </div>
    </div>

    <div class=\"control-group\">
        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "apellido2"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
        <div class=\"controls\">
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "apellido2"), 'errors');
        echo "
            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "apellido2"), 'widget');
        echo "
        </div>
    </div>

    <div class=\"control-group\">
        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "pais"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
        <div class=\"controls\">
            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "pais"), 'errors');
        echo "
            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "pais"), 'widget');
        echo "
        </div>
    </div>

    <div class=\"control-group\">
        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "empresa"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
        <div class=\"controls\">
            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "empresa"), 'errors');
        echo "
            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "empresa"), 'widget');
        echo "
        </div>
    </div>

    <div class=\"control-group\">
        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "telefono"), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
        <div class=\"controls\">
            ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "telefono"), 'errors');
        echo "
            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "telefono"), 'widget');
        echo "
        </div>
    </div>

    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "submit"), 'widget', array("attr" => array("class" => "btn blue", "formnovalidate" => "")));
        echo "

    ";
        // line 97
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form_end');
        echo "

</div>
    <br clear=\"all\">
";
    }

    // line 102
    public function block_scripts($context, array $blocks = array())
    {
        // line 103
        echo "    <script>
        jQuery(document).ready(function() {
            App.setPage(\"table_managed\");
            App.init(); // init the rest of plugins and elements
            \$('#clientes').addClass('active');
            \$('#mangocele_userbundle_user_password').val('');
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "MangoceleUserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 103,  253 => 102,  244 => 97,  239 => 95,  232 => 91,  228 => 90,  223 => 88,  215 => 83,  211 => 82,  206 => 80,  198 => 75,  194 => 74,  189 => 72,  181 => 67,  177 => 66,  172 => 64,  164 => 59,  160 => 58,  155 => 56,  147 => 51,  143 => 50,  138 => 48,  130 => 43,  126 => 42,  121 => 40,  113 => 35,  109 => 34,  104 => 32,  96 => 27,  92 => 26,  87 => 24,  80 => 20,  76 => 19,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  54 => 11,  48 => 7,  46 => 6,  43 => 5,  37 => 4,  31 => 3,);
    }
}
