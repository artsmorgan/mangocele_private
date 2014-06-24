<?php

/* MangoceleAdminBundle:Default:adminBase.html.twig */
class __TwigTemplate_cedd431a209dbd982471b2baa5bf956a54373c429aa087a123a2f6d627df79ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\"> <!--<![endif]-->

<head>
    <meta charset=\"utf-8\" />
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
    <meta content=\"\" name=\"description\" />
    <meta content=\"\" name=\"author\" />
    <link href=\"/bundles/admin/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" />
    <link href=\"/bundles/admin/css/metro.css\" rel=\"stylesheet\" />
    <link href=\"/bundles/admin/bootstrap/css/bootstrap-responsive.min.css\" rel=\"stylesheet\" />
    <link href=\"/bundles/admin/font-awesome/css/font-awesome.css\" rel=\"stylesheet\" />

    <link href=\"/bundles/admin/css/style_responsive.css\" rel=\"stylesheet\" />
    <link href=\"/bundles/admin/css/style_default.css\" rel=\"stylesheet\" id=\"style_color\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/admin/gritter/css/jquery.gritter.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/admin/uniform/css/uniform.default.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/admin/bootstrap-daterangepicker/daterangepicker.css\" />
    <link href=\"/bundles/admin/fullcalendar/fullcalendar/bootstrap-fullcalendar.css\" rel=\"stylesheet\" />
    <link href=\"/bundles/admin/jqvmap/jqvmap/jqvmap.css\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/bundles/admin/css/style.css\" rel=\"stylesheet\" />
    <link rel=\"shortcut icon\" href=\"favicon.ico\" />
</head>
<body class=\"fixed-top\">
<div class=\"header navbar navbar-inverse navbar-fixed-top\">

    <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
            <a class=\"brand\" href=\"index.html\">
                Mangocele
            </a>
            <a href=\"javascript:;\" class=\"btn-navbar collapsed\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <img src=\"/bundles/admin/img/menu-toggler.png\" alt=\"\" />
            </a>
            <ul class=\"nav pull-right\">
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <li class=\"dropdown\" id=\"header_notification_bar\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"icon-warning-sign\"></i>
                        <!--<span class=\"badge\">6</span>-->
                    </a>
                    <ul class=\"dropdown-menu extended notification\">
                        <li>
                            <p>No hay notificaciones Nuevas</p>
                        </li>
                        <!--<li>
                            <a href=\"javascript:;\" onclick=\"App.onNotificationClick(1)\">
                            <span class=\"label label-success\"><i class=\"icon-plus\"></i></span>
                            New user registered.
                            <span class=\"time\">Just now</span>
                            </a>
                        </li> -->
                        <li class=\"external\">
                            <a href=\"#\">Ver Todas las notificaciones. <i class=\"m-icon-swapright\"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- END NOTIFICATION DROPDOWN -->
                <!-- BEGIN INBOX DROPDOWN -->
                <li class=\"dropdown\" id=\"header_inbox_bar\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"icon-envelope-alt\"></i>
                        <!--<span class=\"badge\">5</span>-->
                    </a>
                    <ul class=\"dropdown-menu extended inbox\">
                        <li>
                            <p>No hay mensajes nuevos</p>
                        </li>

                        <li class=\"external\">
                            <a href=\"#\">Ver todos los mensajes <i class=\"m-icon-swapright\"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- END INBOX DROPDOWN -->
                <!-- BEGIN TODO DROPDOWN -->
                <li class=\"dropdown\" id=\"header_task_bar\">

                    <ul class=\"dropdown-menu extended tasks\">
                        <li class=\"first_cot\">
                            <p>Cotizaciones:</p>
                        </li>
                        <li class=\"external\">
                            <a href=\"cotizacion-listado.php\">Ver todas las Cotizaciones <i class=\"m-icon-swapright\"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- END TODO DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class=\"dropdown user\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <!--<img alt=\"\" src=\"/bundles/admin/img/avatar1_small.jpg\" />-->
                        <span class=\"username\" id=\"agent_username\">";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")), "FOSUserBundle"), "html", null, true);
        echo " </span>
                        <i class=\"icon-angle-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\"><i class=\"icon-user\"></i> Dashboard</a></li>
                        <li><a href=\"#\"><i class=\"icon-calendar\"></i> Calendario</a></li>
                        <li><a href=\"#\"><i class=\"icon-tasks\"></i> Mis Tareas</a></li>
                        <li class=\"divider\"></li>
                        <li>
                            ";
        // line 107
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 108
            echo "
                                <a href=\"";
            // line 109
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                    <i class=\"icon-key\"></i>    ";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                            ";
        } else {
            // line 113
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 115
        echo "                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class=\"page-container row-fluid\">
    <!-- BEGIN SIDEBAR -->
    <div class=\"page-sidebar nav-collapse collapse\">
        <!-- BEGIN SIDEBAR MENU -->
        <ul>
            <li>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class=\"sidebar-toggler hidden-phone\"></div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <form class=\"sidebar-search\">
                    <div class=\"input-box\">
                        <a href=\"javascript:;\" class=\"remove\"></a>
                        <input type=\"text\" placeholder=\"Buscar...\" />
                        <input type=\"button\" class=\"submit\" value=\" \" />
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <!--<li class=\"start\" id=\"dashboard\">
                <a href=\"dashboard.php\">
                <i class=\"icon-home\"></i>
                <span class=\"title\">Dashboard</span>
                <span class=\"selected\"></span>
                </a>
            </li>-->
            <li class=\"has-sub\" id=\"contenido\">
                <a href=\"javascript:;\">
                    <i class=\"icon-group\"></i>
                    <span class=\"title\">Contenido</span>
                    <span class=\"arrow \"></span>
                </a>
                <ul class=\"sub\">
                    <li ><a href=\"contenido/home\">Homepage</a></li>
                    <li ><a href=\"contenido/conocenos\">conocenos</a></li>
                </ul>
            </li>
            <li class=\"has-sub\" id=\"mensajes\">
                <a href=\"javascript:;\">
                    <i class=\"icon-pencil\"></i>
                    <span class=\"title\">Mensajes</span>
                    <span class=\"arrow \"></span>
                </a>
                <ul class=\"sub\">
                    <!--<li ><a href=\"tareas.php\">Ver Pendientes</a></li>-->
                    <li ><a href=\"mensajes/\">Ver nuevos mensajes</a></li>
                    <li ><a href=\"mensajes/nuevo\">Enviar Mensaje</a></li>
                </ul>
            </li>
            <!--<li class=\"has-sub\" id=\"mensajes\">
                <a href=\"javascript:;\">
                <i class=\"icon-envelope\"></i>
                <span class=\"title\">Mensajes</span>
                <span class=\"arrow \"></span>
                </a>
                <ul class=\"sub\">
                    <li ><a href=\"mensajes.php\">Listado</a></li>
                    <li ><a href=\"mensajes-escribir.php\">Escribir</a></li>
                    <li ><a href=\"#\">Enviados</a></li>
                </ul>
            </li>-->
            <li class=\"has-sub\" id=\"clientes\">
                <a href=\"javascript:;\">
                    <i class=\"icon-group\"></i>
                    <span class=\"title\">Clientes</span>
                    <span class=\"arrow \"></span>
                </a>
                <ul class=\"sub\">
                    <li ><a href=\"user/new\">Nuevo</a></li>
                    <li ><a href=\"user/\">Listado</a></li>
                </ul>
            </li>
            <li class=\"has-sub\" id=\"empresas\">
                <a href=\"javascript:;\">
                    <i class=\"icon-group\"></i>
                    <span class=\"title\">Empresas</span>
                    <span class=\"arrow \"></span>
                </a>
                <ul class=\"sub\">
                    <li ><a href=\"/admin/empresas/new\">Nuevo</a></li>
                    <li ><a href=\"/admin/empresas/\">Listado</a></li>
                </ul>
            </li>
            <li class=\"has-sub \" id=\"categorias\">
                <a href=\"javascript:;\">
                    <i class=\"icon-briefcase\"></i>
                    <span class=\"title\">Categorias</span>
                    <span class=\"arrow \"></span>
                </a>
                <ul class=\"sub\">
                    <li ><a href=\"/admin/categorias/new\">Crear Categoría</a></li>
                    <li ><a href=\"/admin/categorias/\">Listar Categorías</a></li>
                    <li ><a href=\"/admin/subcategorias/new\">Crear Sub-Categoría</a></li>
                    <li ><a href=\"/admin/categorias/\">Listar Sub-Categoría</a></li>
                </ul>
            </li>
            </li>
            <li class=\"has-sub \" id=\"productos\">
                <a href=\"javascript:;\">
                    <i class=\"icon-bookmark-empty\"></i>
                    <span class=\"title\">Productos</span>
                    <span class=\"arrow \"></span>
                </a>
                <ul class=\"sub\">
                    <li><a href=\"/admin/productos/new\">Crear Producto</a></li>
                    <li><a href=\"/admin/productos\">Listado</a></li>
                </ul>
            </li>
            <!--<li class=\"has-sub \">
                <a href=\"javascript:;\">
                <i class=\"icon-cogs\"></i>
                <span class=\"title\">Mantenimientos</span>
                <span class=\"arrow \"></span>
                </a>
                <ul class=\"sub\">
                    <li ><a href=\"#\">Almacenes</a></li>
                    <li ><a href=\"#\">Marcas</a></li>
                    <li ><a href=\"#\">Modelos</a></li>
                    <li ><a href=\"#\">Emblemas</a></li>
                </ul>
            </li>-->

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE -->
    <div class=\"page-content\">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id=\"portlet-config\" class=\"modal hide\">
            <div class=\"modal-header\">
                <button data-dismiss=\"modal\" class=\"close\" type=\"button\"></button>
                <h3>Widget Settings</h3>
            </div>
            <div class=\"modal-body\">
                <p>Here will be a configuration form</p>
            </div>
        </div>
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN PAGE CONTAINER-->
        <div class=\"container-fluid\">
            <div class=\"row-fluid\">
                <div class=\"span12\">

                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <h3 class=\"page-title\">
                        ";
        // line 275
        $this->displayBlock('pagetitle', $context, $blocks);
        // line 276
        echo "

                        <div class=\"pull-right\">
                           <!-- <a href=\"";
        // line 279
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\" class=\"btn blue\">
                                Regresar al listado
                            </a>-->
                        </div>
                    </h3>
                    <ul class=\"breadcrumb\">
                        <li>
                            <i class=\"icon-home\"></i>
                            <a href=\"/admin/home\">Inicio</a>
                            <i class=\"icon-angle-right\"></i>
                        </li>
                        <li>
                            <a href=\"#\">";
        // line 291
        $this->displayBlock('breadcrumbs', $context, $blocks);
        echo "</a>
                            <i class=\"icon-angle-right\"></i>
                        </li>
                    </ul>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>
            <h1></h1>
            ";
        // line 299
        $this->displayBlock('body', $context, $blocks);
        // line 300
        echo "
            <!-- BEGIN FOOTER -->
            <div class=\"footer\">
                2014 &copy; Mangocele
                <div class=\" pull-right\">
                    <span class=\"go-top\"><i class=\"icon-angle-up\"></i></span>
                </div>
            </div>
            <!-- END FOOTER -->
            <!-- BEGIN JAVASCRIPTS -->
            <!-- Load javascripts at bottom, this will reduce page load time -->
            <!-- END FOOTER -->
            <!-- BEGIN JAVASCRIPTS -->
            <!-- Load javascripts at bottom, this will reduce page load time -->
            <script src=\"/bundles/admin/js/jquery-1.8.3.min.js\"></script>
            <script src=\"/bundles/admin/breakpoints/breakpoints.js\"></script>
            <script src=\"/bundles/admin/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js\"></script>
            <script src=\"/bundles/admin/bootstrap/js/bootstrap.min.js\"></script>
            <script src=\"/bundles/admin/js/jquery.blockui.js\"></script>
            <script src=\"/bundles/admin/js/jquery.cookie.js\"></script>
            <script src=\"/bundles/admin/fullcalendar/fullcalendar/fullcalendar.min.js\"></script>
            <script type=\"text/javascript\" src=\"/bundles/admin/bootstrap-fileupload/bootstrap-fileupload.js\"></script>
            <script type=\"text/javascript\" src=\"/bundles/admin/uniform/jquery.uniform.min.js\"></script>
            <script type=\"text/javascript\" src=\"/bundles/admin/jquery-slimscroll/jquery.slimscroll.min.js\"></script>
            <script type=\"text/javascript\" src=\"/bundles/admin/chosen-bootstrap/chosen/chosen.jquery.min.js\"></script>
            <!-- ie8 fixes -->
            <!--[if lt IE 9]>
            <script src=\"/bundles/admin/js/excanvas.js\"></script>
            <script src=\"/bundles/admin/js/respond.js\"></script>
            <![endif]-->
            <script src=\"/bundles/admin/js/app.js\"></script>

            ";
        // line 332
        $this->displayBlock('scripts', $context, $blocks);
        // line 333
        echo "
</body>
<!-- END BODY -->
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
    }

    // line 275
    public function block_pagetitle($context, array $blocks = array())
    {
    }

    // line 291
    public function block_breadcrumbs($context, array $blocks = array())
    {
    }

    // line 299
    public function block_body($context, array $blocks = array())
    {
    }

    // line 332
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MangoceleAdminBundle:Default:adminBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 332,  416 => 299,  411 => 291,  406 => 275,  401 => 10,  394 => 333,  392 => 332,  358 => 300,  356 => 299,  345 => 291,  330 => 279,  325 => 276,  323 => 275,  161 => 115,  147 => 110,  143 => 109,  140 => 108,  138 => 107,  126 => 98,  35 => 10,  24 => 1,  156 => 58,  153 => 113,  146 => 53,  134 => 47,  128 => 44,  119 => 40,  115 => 39,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  91 => 33,  87 => 32,  81 => 31,  78 => 30,  74 => 29,  46 => 5,  43 => 4,  37 => 3,  31 => 2,);
    }
}
