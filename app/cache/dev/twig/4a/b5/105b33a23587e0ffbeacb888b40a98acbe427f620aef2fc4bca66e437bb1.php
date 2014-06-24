<?php

/* MangoceleSiteBundle:modals:pedido-modal.html.twig */
class __TwigTemplate_4ab5105b33a23587e0ffbeacb888b40a98acbe427f620aef2fc4bca66e437bb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modal fade\" id=\"pedidoModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">
                    Solicitud de pedido de ";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "data"), "html", null, true);
        echo "
                </h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"form-contactar\">
                    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "pedido"), 'form_start');
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "pedido"), 'errors');
        echo "

                    <div class=\"form-group\">
                        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pedido"), "Nombre"), 'label');
        echo "
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pedido"), "Nombre"), 'errors');
        echo "
                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pedido"), "Nombre"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pedido"), "Email"), 'label');
        echo "
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pedido"), "Email"), 'errors');
        echo "
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pedido"), "Email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pedido"), "Telefono"), 'label');
        echo "
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pedido"), "Telefono"), 'errors');
        echo "
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pedido"), "Telefono"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pedido"), "Cantidad"), 'label');
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pedido"), "Cantidad"), 'errors');
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pedido"), "Cantidad"), 'widget', array("attr" => array("class" => "form-control-custom")));
        echo "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pedido"), "Notas"), 'label');
        echo "
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pedido"), "Notas"), 'errors');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pedido"), "Notas"), 'widget', array("attr" => array("class" => "form-control", "rows" => 5)));
        echo "
                    </div>


                    <div class=\"form-group\">
                       ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pedido"), "Enviar"), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                    </div>

                    ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "pedido"), 'form_end');
        echo "
                </div>
            </div>

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "MangoceleSiteBundle:modals:pedido-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 50,  121 => 47,  113 => 42,  105 => 40,  98 => 36,  94 => 35,  90 => 34,  83 => 30,  79 => 29,  75 => 28,  68 => 24,  64 => 23,  60 => 22,  53 => 18,  49 => 17,  45 => 16,  39 => 13,  35 => 12,  27 => 7,  109 => 41,  103 => 41,  95 => 36,  91 => 35,  87 => 34,  80 => 30,  76 => 29,  72 => 28,  65 => 24,  61 => 23,  57 => 22,  50 => 18,  46 => 17,  42 => 16,  36 => 13,  32 => 12,  19 => 1,);
    }
}
