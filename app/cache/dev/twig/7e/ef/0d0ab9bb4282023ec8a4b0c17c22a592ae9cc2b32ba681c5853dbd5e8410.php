<?php

/* MangoceleAdminBundle:Default:login.html.twig */
class __TwigTemplate_7eef0d0ab9bb4282023ec8a4b0c17c22a592ae9cc2b32ba681c5853dbd5e8410 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!--> <html lang=\"en\"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<!--  Desarrollado por ArtsMorgan -->
<head>
    <meta charset=\"utf-8\" />
    <title>Administrador Mangocele</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
    <meta content=\"\" name=\"description\" />
    <meta content=\"\" name=\"author\" />
    <link href=\"/bundles/admin/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" />
    <link href=\"/bundles/admin/css/metro.css\" rel=\"stylesheet\" />
    <link href=\"/bundles/admin/font-awesome/css/font-awesome.css\" rel=\"stylesheet\" />
    <link href=\"/bundles/admin/css/style.css\" rel=\"stylesheet\" />
    <link href=\"/bundles/admin/css/style_responsive.css\" rel=\"stylesheet\" />
    <link href=\"/bundles/admin/css/style_default.css\" rel=\"stylesheet\" id=\"style_color\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/admin/uniform/css/uniform.default.css\" />
    <link rel=\"shortcut icon\" href=\"favicon.ico\" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class=\"login\">

<!-- BEGIN LOGIN -->
<div class=\"content\">
    <!-- BEGIN LOGIN FORM -->
    <form class=\"form-vertical login-form\" action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
        echo "\" />
        <!-- BEGIN LOGO -->
        <div class=\"logo\">
            <img src=\"../images/logo.png\" alt=\"\" />
        </div>
        <!-- END LOGO -->
        <h3 class=\"form-title\">Loguearse en el Sistema</h3>

        ";
        // line 39
        echo "        ";
        if ($this->getContext($context, "error")) {
            // line 40
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "error"), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
        ";
        }
        // line 42
        echo "

    <div class=\"control-group\">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class=\"control-label visible-ie8 visible-ie9\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"controls\">
            <div class=\"input-icon left\">
                <i class=\"icon-user\"></i>
                <input type=\"text\" class=\"m-wrap placeholder-no-fix\" id=\"username\" name=\"_username\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" required=\"required\" />
            </div>
        </div>
    </div>
    <div class=\"control-group\">
        <label class=\"control-label visible-ie8 visible-ie9\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"controls\">
            <div class=\"input-icon left\">
                <i class=\"icon-lock\"></i>
                <input type=\"password\" class=\"m-wrap placeholder-no-fix\" id=\"password\" name=\"_password\" required=\"required\" />
                <input type=\"hidden\" name=\"_target_path\" value=\"/admin/home\" />
            </div>
        </div>
    </div>
    <div class=\"form-actions\">
        <input type=\"hidden\" name=\"_target_path\" value=\"/admin/home/\" />
        <input type=\"submit\"  class=\"btn green pull-right\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

    </div>
</form>
<!-- END LOGIN FORM -->

</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class=\"copyright\">
    Mangocele 2014
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS -->
<script src=\"/bundles/admin/js/jquery-1.8.3.min.js\"></script>
<script src=\"/bundles/admin/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"/bundles/admin/uniform/jquery.uniform.min.js\"></script>
<script src=\"/bundles/admin/js/jquery.blockui.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/admin/jquery-validation/dist/jquery.validate.min.js\"></script>
<script src=\"/bundles/admin/js/app.js\"></script>
<script>
    jQuery(document).ready(function() {
        App.initLogin();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>";
    }

    public function getTemplateName()
    {
        return "MangoceleAdminBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 66,  94 => 55,  86 => 50,  79 => 46,  73 => 42,  67 => 40,  64 => 39,  53 => 30,  49 => 29,  19 => 1,);
    }
}
