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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // project_admin_homepage
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'project\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'project_admin_homepage',);
        }

        // project_admin_area_config
        if ($pathinfo === '/configure') {
            return array (  '_controller' => 'project\\AdminBundle\\Controller\\DefaultController::configAction',  '_route' => 'project_admin_area_config',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/area')) {
                // project_admin_area_create
                if ($pathinfo === '/admin/area/create') {
                    return array (  '_controller' => 'project\\AdminBundle\\Controller\\AreaController::createAction',  '_route' => 'project_admin_area_create',);
                }

                // project_admin_area_edit
                if (0 === strpos($pathinfo, '/admin/area/edit') && preg_match('#^/admin/area/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_admin_area_edit')), array (  '_controller' => 'project\\AdminBundle\\Controller\\AreaController::editAction',));
                }

                // project_admin_area_list
                if ($pathinfo === '/admin/area/list') {
                    return array (  '_controller' => 'project\\AdminBundle\\Controller\\AreaController::listAction',  '_route' => 'project_admin_area_list',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/subarea')) {
                // project_admin_subarea_list
                if ($pathinfo === '/admin/subarea/list') {
                    return array (  '_controller' => 'project\\AdminBundle\\Controller\\SubAreaController::listAction',  '_route' => 'project_admin_subarea_list',);
                }

                // project_admin_subarea_create
                if ($pathinfo === '/admin/subarea/create') {
                    return array (  '_controller' => 'project\\AdminBundle\\Controller\\SubAreaController::createAction',  '_route' => 'project_admin_subarea_create',);
                }

                // project_admin_subarea_edit
                if (0 === strpos($pathinfo, '/admin/subarea/edit') && preg_match('#^/admin/subarea/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_admin_subarea_edit')), array (  '_controller' => 'project\\AdminBundle\\Controller\\SubAreaController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/AreaOfSpecialty')) {
                // project_admin_areaOfSpecialty_list
                if ($pathinfo === '/admin/AreaOfSpecialty/list') {
                    return array (  '_controller' => 'project\\AdminBundle\\Controller\\AreaOfSpecialtyController::listAction',  '_route' => 'project_admin_areaOfSpecialty_list',);
                }

                // project_admin_areaOfSpecialty_create
                if ($pathinfo === '/admin/AreaOfSpecialty/create') {
                    return array (  '_controller' => 'project\\AdminBundle\\Controller\\AreaOfSpecialtyController::createAction',  '_route' => 'project_admin_areaOfSpecialty_create',);
                }

                // project_admin_areaOfSpecialty_edit
                if (0 === strpos($pathinfo, '/admin/AreaOfSpecialty/edit') && preg_match('#^/admin/AreaOfSpecialty/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_admin_areaOfSpecialty_edit')), array (  '_controller' => 'project\\AdminBundle\\Controller\\AreaOfSpecialtyController::editAction',));
                }

            }

        }

        // project_user_register
        if ($pathinfo === '/user/registration') {
            return array (  '_controller' => 'project\\AdminBundle\\Controller\\AccountController::registerAction',  '_route' => 'project_user_register',);
        }

        // project_timeline
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'project_timeline');
            }

            return array (  '_controller' => 'project\\AdminBundle\\Controller\\DefaultController::timelineAction',  '_route' => 'project_timeline',);
        }

        // project_user_completeReg
        if ($pathinfo === '/complete_reg') {
            return array (  '_controller' => 'project\\AdminBundle\\Controller\\AccountController::completeRegAction',  '_route' => 'project_user_completeReg',);
        }

        // project_admin_ajax_state_list
        if ($pathinfo === '/data/state/list') {
            return array (  '_controller' => 'project\\AdminBundle\\Controller\\AccountController::stateListAction',  '_route' => 'project_admin_ajax_state_list',);
        }

        if (0 === strpos($pathinfo, '/update')) {
            // project_admin_ajax_update_lga
            if ($pathinfo === '/update/data/ajax/call') {
                return array (  '_controller' => 'project\\AdminBundle\\Controller\\AccountController::updateDataAction',  '_route' => 'project_admin_ajax_update_lga',);
            }

            if (0 === strpos($pathinfo, '/update/s')) {
                // project_admin_subArea_list
                if ($pathinfo === '/update/subArea-list') {
                    return array (  '_controller' => 'project\\AdminBundle\\Controller\\AccountController::subAreaListAction',  '_route' => 'project_admin_subArea_list',);
                }

                // project_admin_specialty_list
                if ($pathinfo === '/update/specialty-list') {
                    return array (  '_controller' => 'project\\AdminBundle\\Controller\\AccountController::specialtyListAction',  '_route' => 'project_admin_specialty_list',);
                }

            }

        }

        // project_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'project\\AdminBundle\\Controller\\AccountController::loginAction',  '_route' => 'project_login',);
        }

        // project_upload_photo
        if ($pathinfo === '/profile_upload_image') {
            return array (  '_controller' => 'project\\AdminBundle\\Controller\\AccountController::pictureUploadAction',  '_route' => 'project_upload_photo',);
        }

        // project_user_detail
        if (preg_match('#^/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_user_detail')), array (  '_controller' => 'project\\AdminBundle\\Controller\\DefaultController::detailAction',));
        }

        if (0 === strpos($pathinfo, '/product')) {
            // project_user_product_create
            if ($pathinfo === '/product/create') {
                return array (  '_controller' => 'project\\AdminBundle\\Controller\\ProductController::createAction',  '_route' => 'project_user_product_create',);
            }

            // project_user_product_list
            if ($pathinfo === '/product/list') {
                return array (  '_controller' => 'project\\AdminBundle\\Controller\\ProductController::listAction',  '_route' => 'project_user_product_list',);
            }

            // project_user_productImage_upload
            if (0 === strpos($pathinfo, '/product/uploadImage') && preg_match('#^/product/uploadImage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_user_productImage_upload')), array (  '_controller' => 'project\\AdminBundle\\Controller\\ProductController::imageUploadAction',));
            }

            if (0 === strpos($pathinfo, '/product/de')) {
                // project_user_product_delete_image
                if (0 === strpos($pathinfo, '/product/delete') && preg_match('#^/product/delete/(?P<id>[^/]++)/(?P<productId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_user_product_delete_image')), array (  '_controller' => 'project\\AdminBundle\\Controller\\ProductController::deleteAction',));
                }

                // project_user_product_detail
                if (0 === strpos($pathinfo, '/product/detail') && preg_match('#^/product/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_user_product_detail')), array (  '_controller' => 'project\\AdminBundle\\Controller\\DefaultController::productDetailAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
