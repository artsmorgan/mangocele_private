<?php

/* MangoceleSiteBundle:Default:conocenos.html.twig */
class __TwigTemplate_b060738091ddf8b6acc4a7ad256a139a2ba2c86aa8e93c900776244e37a6eeec extends Twig_Template
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
        echo "<div class=\"content-wrapper\" id=\"conocenos\">
    <div class=\"header-banner\"><img src=\"http://placehold.it/1100x110\"></div>
    <h1>Conocenos</h1>
    <div class=\"conocenos\">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam risus nibh, mattis eu luctus id, ullamcorper ac augue. Ut fermentum ac urna id elementum. Ut id eros fermentum, rutrum lacus a, molestie enim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur porttitor lacus quis magna dictum, non commodo mi luctus. Suspendisse porta nibh at odio sollicitudin accumsan ac ut purus. Maecenas imperdiet, quam id imperdiet accumsan, ligula lacus molestie nisi, nec consectetur ligula mi eu nisi. In pulvinar leo a odio viverra, sed mollis augue euismod. In sed facilisis nisi. Nulla ac sollicitudin odio. Donec eleifend ultrices urna id eleifend. Nunc vel arcu eu dolor faucibus porta eget cursus orci. Mauris ac consectetur arcu. Nunc a posuere risus.</p>
        <p>In congue nisl sit amet ullamcorper faucibus. Nullam eu placerat lorem. Aliquam nulla risus, gravida commodo nunc non, volutpat sollicitudin ipsum. Nunc vel nibh nunc. Integer tempor suscipit mattis. Duis molestie tortor sit amet sem adipiscing, rutrum blandit turpis scelerisque. Mauris id nisi sit amet eros placerat dignissim. Proin sollicitudin, turpis non sodales convallis, orci diam sodales lectus, a sodales arcu massa ut felis. Suspendisse dignissim non ligula eget iaculis. Praesent et aliquet nisi. Nullam et enim nulla. Donec accumsan purus ante, nec posuere orci adipiscing a. Sed consectetur, nibh at imperdiet porttitor, lectus nunc gravida dui, eu suscipit enim mi at lacus. Cras eget justo nec nisi semper congue. Curabitur pulvinar nisl sed tortor aliquam aliquam. Nullam tristique eu nibh vel tincidunt.</p>
        <p>Suspendisse eu turpis dapibus velit vulputate tempor ut in purus. Vestibulum fermentum faucibus turpis eu imperdiet. Ut malesuada vulputate risus, nec venenatis augue euismod eu. Vivamus ut justo ut metus tristique consectetur. Donec id arcu a purus rhoncus tincidunt at non velit. Donec euismod felis accumsan, tristique velit id, pharetra leo. Aenean vel dignissim mi. Nunc vehicula urna eu felis laoreet laoreet. Nullam pulvinar congue nisl, vel ornare justo lacinia quis. Aliquam viverra viverra interdum. Etiam at turpis hendrerit lacus vestibulum elementum. Duis vel nisi quis enim laoreet posuere.</p>
        <p>Suspendisse potenti. Nunc laoreet porta diam, ut posuere ligula blandit quis. Cras ultrices velit vel facilisis tincidunt. Sed porttitor aliquam magna vitae rhoncus. In sit amet leo ac metus iaculis aliquet. Suspendisse ac laoreet nibh, eu semper est. Proin aliquet congue velit, non pretium diam laoreet ac. Fusce diam est, vestibulum vitae lobortis sit amet, semper eu purus. Donec semper ornare lobortis. Suspendisse at eros laoreet, varius urna lobortis, aliquam turpis. Sed sed venenatis dolor. Morbi fringilla posuere mauris. Cras ut lacus ac justo pulvinar tincidunt sit amet sit amet nulla. Ut eget libero pulvinar augue rutrum vulputate. Fusce interdum nunc quam, a volutpat est vestibulum eu.</p>
    </div>
</div>
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "MangoceleSiteBundle:Default:conocenos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  70 => 19,  56 => 8,  53 => 7,  46 => 5,  43 => 4,  38 => 3,  32 => 2,);
    }
}
