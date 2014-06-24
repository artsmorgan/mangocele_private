<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/empresas')) {
                // admin_empresas
                if (rtrim($pathinfo, '/') === '/admin/empresas') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_empresas');
                    }

                    return array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\EmpresasController::indexAction',  '_route' => 'admin_empresas',);
                }

                // admin_empresas_show
                if (preg_match('#^/admin/empresas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_empresas_show')), array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\EmpresasController::showAction',));
                }

                // admin_empresas_new
                if ($pathinfo === '/admin/empresas/new') {
                    return array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\EmpresasController::newAction',  '_route' => 'admin_empresas_new',);
                }

                // admin_empresas_create
                if ($pathinfo === '/admin/empresas/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_empresas_create;
                    }

                    return array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\EmpresasController::createAction',  '_route' => 'admin_empresas_create',);
                }
                not_admin_empresas_create:

                // admin_empresas_edit
                if (preg_match('#^/admin/empresas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_empresas_edit')), array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\EmpresasController::editAction',));
                }

                // admin_empresas_update
                if (preg_match('#^/admin/empresas/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_empresas_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_empresas_update')), array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\EmpresasController::updateAction',));
                }
                not_admin_empresas_update:

                // admin_empresas_delete
                if (preg_match('#^/admin/empresas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_empresas_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_empresas_delete')), array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\EmpresasController::deleteAction',));
                }
                not_admin_empresas_delete:

            }

            if (0 === strpos($pathinfo, '/admin/categorias')) {
                // admin_categorias
                if (rtrim($pathinfo, '/') === '/admin/categorias') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_categorias');
                    }

                    return array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\CategoriasController::indexAction',  '_route' => 'admin_categorias',);
                }

                // admin_categorias_show
                if (preg_match('#^/admin/categorias/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categorias_show')), array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\CategoriasController::showAction',));
                }

                // admin_categorias_new
                if ($pathinfo === '/admin/categorias/new') {
                    return array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\CategoriasController::newAction',  '_route' => 'admin_categorias_new',);
                }

                // admin_categorias_create
                if ($pathinfo === '/admin/categorias/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_categorias_create;
                    }

                    return array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\CategoriasController::createAction',  '_route' => 'admin_categorias_create',);
                }
                not_admin_categorias_create:

                // admin_categorias_edit
                if (preg_match('#^/admin/categorias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categorias_edit')), array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\CategoriasController::editAction',));
                }

                // admin_categorias_update
                if (preg_match('#^/admin/categorias/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_categorias_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categorias_update')), array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\CategoriasController::updateAction',));
                }
                not_admin_categorias_update:

                // admin_categorias_delete
                if (preg_match('#^/admin/categorias/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_categorias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categorias_delete')), array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\CategoriasController::deleteAction',));
                }
                not_admin_categorias_delete:

            }

            if (0 === strpos($pathinfo, '/admin/subcategorias')) {
                // admin_subcategorias
                if (rtrim($pathinfo, '/') === '/admin/subcategorias') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_subcategorias');
                    }

                    return array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\SubCategoriasController::indexAction',  '_route' => 'admin_subcategorias',);
                }

                // admin_subcategorias_show
                if (preg_match('#^/admin/subcategorias/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_subcategorias_show')), array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\SubCategoriasController::showAction',));
                }

                // admin_subcategorias_new
                if ($pathinfo === '/admin/subcategorias/new') {
                    return array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\SubCategoriasController::newAction',  '_route' => 'admin_subcategorias_new',);
                }

                // admin_subcategorias_create
                if ($pathinfo === '/admin/subcategorias/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_subcategorias_create;
                    }

                    return array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\SubCategoriasController::createAction',  '_route' => 'admin_subcategorias_create',);
                }
                not_admin_subcategorias_create:

                // admin_subcategorias_edit
                if (preg_match('#^/admin/subcategorias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_subcategorias_edit')), array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\SubCategoriasController::editAction',));
                }

                // admin_subcategorias_update
                if (preg_match('#^/admin/subcategorias/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_subcategorias_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_subcategorias_update')), array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\SubCategoriasController::updateAction',));
                }
                not_admin_subcategorias_update:

                // admin_subcategorias_delete
                if (preg_match('#^/admin/subcategorias/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_subcategorias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_subcategorias_delete')), array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\SubCategoriasController::deleteAction',));
                }
                not_admin_subcategorias_delete:

            }

            if (0 === strpos($pathinfo, '/admin/productos')) {
                // admin_productos
                if (rtrim($pathinfo, '/') === '/admin/productos') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_productos');
                    }

                    return array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\ProductosController::indexAction',  '_route' => 'admin_productos',);
                }

                // admin_productos_show
                if (preg_match('#^/admin/productos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_productos_show')), array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\ProductosController::showAction',));
                }

                // admin_productos_new
                if ($pathinfo === '/admin/productos/new') {
                    return array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\ProductosController::newAction',  '_route' => 'admin_productos_new',);
                }

                // admin_productos_create
                if ($pathinfo === '/admin/productos/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_productos_create;
                    }

                    return array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\ProductosController::createAction',  '_route' => 'admin_productos_create',);
                }
                not_admin_productos_create:

                // admin_productos_edit
                if (preg_match('#^/admin/productos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_productos_edit')), array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\ProductosController::editAction',));
                }

                // admin_productos_categorias
                if (preg_match('#^/admin/productos/(?P<id>[^/]++)/categorias$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_productos_categorias')), array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\ProductosController::categoriasAction',));
                }

                // admin_productos_update
                if (preg_match('#^/admin/productos/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_productos_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_productos_update')), array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\ProductosController::updateAction',));
                }
                not_admin_productos_update:

                // admin_productos_delete
                if (preg_match('#^/admin/productos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_productos_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_productos_delete')), array (  '_controller' => 'Mangocele\\coreBundle\\Controller\\ProductosController::deleteAction',));
                }
                not_admin_productos_delete:

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // user
                if (rtrim($pathinfo, '/') === '/admin/user') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user');
                    }

                    return array (  '_controller' => 'Mangocele\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
                }

                // user_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Mangocele\\UserBundle\\Controller\\UserController::showAction',));
                }

                // user_new
                if ($pathinfo === '/admin/user/new') {
                    return array (  '_controller' => 'Mangocele\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                }

                // user_create
                if ($pathinfo === '/admin/user/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_create;
                    }

                    return array (  '_controller' => 'Mangocele\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
                }
                not_user_create:

                // user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Mangocele\\UserBundle\\Controller\\UserController::editAction',));
                }

                // user_update
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Mangocele\\UserBundle\\Controller\\UserController::updateAction',));
                }
                not_user_update:

                // user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Mangocele\\UserBundle\\Controller\\UserController::deleteAction',));
                }
                not_user_delete:

            }

            if (0 === strpos($pathinfo, '/admin/clientes')) {
                // admin_clientes
                if (rtrim($pathinfo, '/') === '/admin/clientes') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_clientes');
                    }

                    return array (  '_controller' => 'Mangocele\\UserBundle\\Controller\\ClientesController::indexAction',  '_route' => 'admin_clientes',);
                }

                // admin_clientes_show
                if (preg_match('#^/admin/clientes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_clientes_show')), array (  '_controller' => 'Mangocele\\UserBundle\\Controller\\ClientesController::showAction',));
                }

                // admin_clientes_new
                if ($pathinfo === '/admin/clientes/new') {
                    return array (  '_controller' => 'Mangocele\\UserBundle\\Controller\\ClientesController::newAction',  '_route' => 'admin_clientes_new',);
                }

                // admin_clientes_create
                if ($pathinfo === '/admin/clientes/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_clientes_create;
                    }

                    return array (  '_controller' => 'Mangocele\\UserBundle\\Controller\\ClientesController::createAction',  '_route' => 'admin_clientes_create',);
                }
                not_admin_clientes_create:

                // admin_clientes_edit
                if (preg_match('#^/admin/clientes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_clientes_edit')), array (  '_controller' => 'Mangocele\\UserBundle\\Controller\\ClientesController::editAction',));
                }

                // admin_clientes_update
                if (preg_match('#^/admin/clientes/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_clientes_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_clientes_update')), array (  '_controller' => 'Mangocele\\UserBundle\\Controller\\ClientesController::updateAction',));
                }
                not_admin_clientes_update:

                // admin_clientes_delete
                if (preg_match('#^/admin/clientes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_clientes_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_clientes_delete')), array (  '_controller' => 'Mangocele\\UserBundle\\Controller\\ClientesController::deleteAction',));
                }
                not_admin_clientes_delete:

            }

            // mangocele_user_admin_login_check
            if ($pathinfo === '/admin/login_check') {
                return array (  '_controller' => 'Mangocele\\UserBundle\\Controller\\loginController::indexAction',  '_route' => 'mangocele_user_admin_login_check',);
            }

        }

        // mangocele_admin
        if ($pathinfo === '/login/admin') {
            return array (  '_controller' => 'Mangocele\\AdminBundle\\Controller\\DefaultController::loginAction',  '_route' => 'mangocele_admin',);
        }

        // mangocele_admin_homepage
        if (rtrim($pathinfo, '/') === '/admin/home') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mangocele_admin_homepage');
            }

            return array (  '_controller' => 'Mangocele\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mangocele_admin_homepage',);
        }

        // mangocele_site_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mangocele_site_homepage');
            }

            return array (  '_controller' => 'Mangocele\\siteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mangocele_site_homepage',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // mangocele_site_conocenos
            if ($pathinfo === '/conocenos') {
                return array (  '_controller' => 'Mangocele\\siteBundle\\Controller\\DefaultController::conocenosAction',  '_route' => 'mangocele_site_conocenos',);
            }

            // mangocele_site_categorias_listado
            if ($pathinfo === '/categorias') {
                return array (  '_controller' => 'Mangocele\\siteBundle\\Controller\\DefaultController::categoriasAction',  '_route' => 'mangocele_site_categorias_listado',);
            }

        }

        // mangocele_site_empresas_listado
        if ($pathinfo === '/empresas') {
            return array (  '_controller' => 'Mangocele\\siteBundle\\Controller\\DefaultController::empresasAction',  '_route' => 'mangocele_site_empresas_listado',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // mangocele_site_contactenos
            if ($pathinfo === '/contactenos') {
                return array (  '_controller' => 'Mangocele\\siteBundle\\Controller\\DefaultController::contactenosAction',  '_route' => 'mangocele_site_contactenos',);
            }

            // mangocele_site_login
            if ($pathinfo === '/clientes') {
                return array (  '_controller' => 'Mangocele\\siteBundle\\Controller\\loginController::mainAction',  '_route' => 'mangocele_site_login',);
            }

        }

        // mangocele_site_empresa
        if (0 === strpos($pathinfo, '/empresa') && preg_match('#^/empresa/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mangocele_site_empresa')), array (  '_controller' => 'Mangocele\\siteBundle\\Controller\\EmpresasController::mainAction',));
        }

        // mangocele_site_producto
        if (0 === strpos($pathinfo, '/producto') && preg_match('#^/producto/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mangocele_site_producto')), array (  '_controller' => 'Mangocele\\siteBundle\\Controller\\ProductoController::mainAction',));
        }

        if (0 === strpos($pathinfo, '/categorias')) {
            // mangocele_site_categorias_by_id
            if (preg_match('#^/categorias/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mangocele_site_categorias_by_id')), array (  '_controller' => 'Mangocele\\siteBundle\\Controller\\CategoriasController::mainAction',));
            }

            // mangocele_site_categorias_empresa_by_id
            if (preg_match('#^/categorias/(?P<slug>[^/]++)/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mangocele_site_categorias_empresa_by_id')), array (  '_controller' => 'Mangocele\\siteBundle\\Controller\\CategoriasController::mainAction',));
            }

        }

        // mangocele_site_user_login
        if ($pathinfo === '/usuario') {
            return array (  '_controller' => 'Mangocele\\siteBundle\\Controller\\UsuarioController::mainAction',  '_route' => 'mangocele_site_user_login',);
        }

        // fos_user_security_login
        if ($pathinfo === '/admin-login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // fos_user_security_check
            if ($pathinfo === '/login_check') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
