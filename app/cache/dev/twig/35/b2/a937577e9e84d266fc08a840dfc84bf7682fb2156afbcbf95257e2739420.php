<?php

/* MangoceleSiteBundle:login:main.html.twig */
class __TwigTemplate_35b2a937577e9e84d266fc08a840dfc84bf7682fb2156afbcbf95257e2739420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'jsfiles' => array($this, 'block_jsfiles'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Mangocele.cr ";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 4
    public function block_jsfiles($context, array $blocks = array())
    {
        // line 5
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\" ></script>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"content-wrapper\">
        <div class=\"header-banner\"><img src=\"http://placehold.it/1100x110\"></div>
        <h1>Ingreso de Miembros</h1>
        <div class=\"form-ingresar\">
            ";
        // line 12
        if (array_key_exists("errors", $context)) {
            // line 13
            echo "                <div class=\"alert alert-danger\">
                    <strong>Error!</strong> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getContext($context, "errors"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 17
        echo "            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

            <div class=\"form-group\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'label');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'errors');
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'label');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'errors');
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>

            <div class=\"form-group\">
                <div class=\"ingresar-links\">
                    <a href=\"#\">Registrarse</a>
                    <a href=\"#\" class=\"forgot-link\">Olvide mi password?</a>
                </div>
                <div class=\"ingresar-ing\">
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ingresar"), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                </div>
            </div>

            ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
        </div>
    </div>
";
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        echo "
";
    }

    public function getTemplateName()
    {
        return "MangoceleSiteBundle:login:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 47,  134 => 46,  126 => 42,  119 => 38,  107 => 29,  103 => 28,  99 => 27,  92 => 23,  88 => 22,  84 => 21,  78 => 18,  73 => 17,  67 => 14,  64 => 13,  62 => 12,  56 => 8,  53 => 7,  46 => 5,  43 => 4,  38 => 3,  32 => 2,);
    }
}
