<?php

/* MangoceleSiteBundle:modals:product-images-modal.html.twig */
class __TwigTemplate_4f12b4a138a1d3bbc456cb8ccad4c43441af112cabf0ffe1a03d9493b75ec559 extends Twig_Template
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
        echo "    <div class=\"modal fade\" id=\"productImagesModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">
                    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "data"), "html", null, true);
        echo "
                </h4>
            </div>
            <div class=\"modal-body\">
                <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class=\"carousel-inner\">
                        <div class=\"item active\">
                            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "scheme") . "://") . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "httpHost")) . $this->env->getExtension('assets')->getAssetUrl("images/bolsos/1.jpg")), "html", null, true);
        echo "\" >
                            <div class=\"carousel-caption\">
                                Bolsos de todo tipo
                            </div>
                        </div>
                        <div class=\"item\">
                            <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "scheme") . "://") . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "httpHost")) . $this->env->getExtension('assets')->getAssetUrl("images/bolsos/2.jpg")), "html", null, true);
        echo "\" >
                            <div class=\"carousel-caption\">
                                Bolsos de todo tipo
                            </div>
                        </div>
                        <div class=\"item\">
                            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "scheme") . "://") . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "httpHost")) . $this->env->getExtension('assets')->getAssetUrl("images/bolsos/3.jpg")), "html", null, true);
        echo "\" >
                            <div class=\"carousel-caption\">
                                Bolsos de todo tipo
                            </div>
                        </div>
                        <div class=\"item\">
                            <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "scheme") . "://") . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "httpHost")) . $this->env->getExtension('assets')->getAssetUrl("images/bolsos/4.jpg")), "html", null, true);
        echo "\" >
                            <div class=\"carousel-caption\">
                                Bolsos de todo tipo
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                        <span class=\"glyphicon glyphicon-chevron-left\"></span>
                    </a>
                    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                        <span class=\"glyphicon glyphicon-chevron-right\"></span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "MangoceleSiteBundle:modals:product-images-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 34,  54 => 28,  127 => 50,  121 => 47,  113 => 42,  105 => 40,  98 => 36,  94 => 35,  90 => 34,  83 => 30,  79 => 29,  75 => 28,  68 => 24,  64 => 23,  60 => 22,  53 => 18,  49 => 17,  45 => 22,  39 => 13,  35 => 12,  27 => 7,  109 => 41,  103 => 41,  95 => 36,  91 => 35,  87 => 34,  80 => 30,  76 => 29,  72 => 40,  65 => 24,  61 => 23,  57 => 22,  50 => 18,  46 => 17,  42 => 16,  36 => 13,  32 => 12,  19 => 1,);
    }
}
