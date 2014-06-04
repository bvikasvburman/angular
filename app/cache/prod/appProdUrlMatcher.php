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

        // flyers_frontend_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'flyers_frontend_default_index');
            }

            return array (  '_controller' => 'Flyers\\FrontendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'flyers_frontend_default_index',);
        }

        // flyers_frontend_default_vic
        if ($pathinfo === '/vic') {
            return array (  '_controller' => 'Flyers\\FrontendBundle\\Controller\\DefaultController::vicAction',  '_route' => 'flyers_frontend_default_vic',);
        }

        if (0 === strpos($pathinfo, '/api')) {
            // flyers_backend_default_list
            if ($pathinfo === '/api/list') {
                return array (  '_controller' => 'Flyers\\BackendBundle\\Controller\\DefaultController::listAction',  '_route' => 'flyers_backend_default_list',);
            }

            // flyers_backend_default_add
            if ($pathinfo === '/api/add') {
                return array (  '_controller' => 'Flyers\\BackendBundle\\Controller\\DefaultController::addAction',  '_route' => 'flyers_backend_default_add',);
            }

            // flyers_backend_default_hello
            if ($pathinfo === '/api/hello') {
                return array (  '_controller' => 'Flyers\\BackendBundle\\Controller\\DefaultController::helloAction',  '_route' => 'flyers_backend_default_hello',);
            }

            // flyers_backend_default_todos
            if ($pathinfo === '/api/todos') {
                return array (  '_controller' => 'Flyers\\BackendBundle\\Controller\\DefaultController::todosAction',  '_route' => 'flyers_backend_default_todos',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
