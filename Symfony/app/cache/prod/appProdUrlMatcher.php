<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/admin')) {
            // back_end_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'back_end_homepage');
                }

                return array (  '_controller' => 'FrontEnd\\BackEndBundle\\Controller\\HomeController::indexAction',  '_route' => 'back_end_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/achtralik')) {
                // admin_achtralik
                if (rtrim($pathinfo, '/') === '/admin/achtralik') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_achtralik');
                    }

                    return array (  '_controller' => 'FrontEnd\\BackEndBundle\\Controller\\AchtralikController::indexAction',  '_route' => 'admin_achtralik',);
                }

                // admin_achtralik_show
                if (preg_match('#^/admin/achtralik/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_achtralik_show')), array (  '_controller' => 'FrontEnd\\BackEndBundle\\Controller\\AchtralikController::showAction',));
                }

                // admin_achtralik_new
                if ($pathinfo === '/admin/achtralik/new') {
                    return array (  '_controller' => 'FrontEnd\\BackEndBundle\\Controller\\AchtralikController::newAction',  '_route' => 'admin_achtralik_new',);
                }

                // admin_achtralik_create
                if ($pathinfo === '/admin/achtralik/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_achtralik_create;
                    }

                    return array (  '_controller' => 'FrontEnd\\BackEndBundle\\Controller\\AchtralikController::createAction',  '_route' => 'admin_achtralik_create',);
                }
                not_admin_achtralik_create:

                // admin_achtralik_edit
                if (preg_match('#^/admin/achtralik/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_achtralik_edit')), array (  '_controller' => 'FrontEnd\\BackEndBundle\\Controller\\AchtralikController::editAction',));
                }

                // admin_achtralik_update
                if (preg_match('#^/admin/achtralik/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_achtralik_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_achtralik_update')), array (  '_controller' => 'FrontEnd\\BackEndBundle\\Controller\\AchtralikController::updateAction',));
                }
                not_admin_achtralik_update:

                // admin_achtralik_delete
                if (preg_match('#^/admin/achtralik/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_achtralik_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_achtralik_delete')), array (  '_controller' => 'FrontEnd\\BackEndBundle\\Controller\\AchtralikController::deleteAction',));
                }
                not_admin_achtralik_delete:

                // admin_achtralik_validate
                if ($pathinfo === '/admin/achtralik/validate') {
                    return array (  '_controller' => 'FrontEnd\\BackEndBundle\\Controller\\AchtralikController::validateAction',  '_route' => 'admin_achtralik_validate',);
                }

                // admin_achtralik_deserve
                if ($pathinfo === '/admin/achtralik/deserve') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_achtralik_deserve;
                    }

                    return array (  '_controller' => 'FrontEnd\\BackEndBundle\\Controller\\AchtralikController::deserveAction',  '_route' => 'admin_achtralik_deserve',);
                }
                not_admin_achtralik_deserve:

            }

            if (0 === strpos($pathinfo, '/admin/categoryatl')) {
                // categoryatl
                if (rtrim($pathinfo, '/') === '/admin/categoryatl') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'categoryatl');
                    }

                    return array (  '_controller' => 'FrontEnd\\BackEndBundle\\Controller\\CategoryAtlController::indexAction',  '_route' => 'categoryatl',);
                }

                // categoryatl_show
                if (preg_match('#^/admin/categoryatl/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoryatl_show')), array (  '_controller' => 'FrontEnd\\BackEndBundle\\Controller\\CategoryAtlController::showAction',));
                }

                // categoryatl_new
                if ($pathinfo === '/admin/categoryatl/new') {
                    return array (  '_controller' => 'FrontEnd\\BackEndBundle\\Controller\\CategoryAtlController::newAction',  '_route' => 'categoryatl_new',);
                }

                // categoryatl_create
                if ($pathinfo === '/admin/categoryatl/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_categoryatl_create;
                    }

                    return array (  '_controller' => 'FrontEnd\\BackEndBundle\\Controller\\CategoryAtlController::createAction',  '_route' => 'categoryatl_create',);
                }
                not_categoryatl_create:

                // categoryatl_edit
                if (preg_match('#^/admin/categoryatl/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoryatl_edit')), array (  '_controller' => 'FrontEnd\\BackEndBundle\\Controller\\CategoryAtlController::editAction',));
                }

                // categoryatl_update
                if (preg_match('#^/admin/categoryatl/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_categoryatl_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoryatl_update')), array (  '_controller' => 'FrontEnd\\BackEndBundle\\Controller\\CategoryAtlController::updateAction',));
                }
                not_categoryatl_update:

                // categoryatl_delete
                if (preg_match('#^/admin/categoryatl/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_categoryatl_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoryatl_delete')), array (  '_controller' => 'FrontEnd\\BackEndBundle\\Controller\\CategoryAtlController::deleteAction',));
                }
                not_categoryatl_delete:

            }

        }

        // CoreBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'CoreBundle_homepage');
            }

            return array (  '_controller' => 'FrontEnd\\CoreBundle\\Controller\\HomeController::indexAction',  '_route' => 'CoreBundle_homepage',);
        }

        // CoreBundle_publicate_atl
        if ($pathinfo === '/publicate/atl') {
            return array (  '_controller' => 'FrontEnd\\CoreBundle\\Controller\\HomeController::publicateAction',  '_route' => 'CoreBundle_publicate_atl',);
        }

        // CoreBundle_category_atl
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'CoreBundle_category_atl')), array (  '_controller' => 'FrontEnd\\CoreBundle\\Controller\\HomeController::categoryAction',));
        }

        if (0 === strpos($pathinfo, '/m')) {
            // CoreBundle_moderer
            if ($pathinfo === '/moderer/atl') {
                return array (  '_controller' => 'FrontEnd\\CoreBundle\\Controller\\HomeController::modererAction',  '_route' => 'CoreBundle_moderer',);
            }

            // CoreBundle_merite
            if (0 === strpos($pathinfo, '/merite/atl') && preg_match('#^/merite/atl/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'CoreBundle_merite')), array (  '_controller' => 'FrontEnd\\CoreBundle\\Controller\\HomeController::bienmeriteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
