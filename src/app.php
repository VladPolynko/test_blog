<?php
use Symfony\Component\Routing;
use vlog\controller\RouteController;

$routes = new Routing\RouteCollection();

$routes->add('index', new Routing\Route('/', array(
    '_controller' => function ($request) {
          $routeController = new RouteController();
          return $routeController->getMainInfo();
    }
), [], [], '', [], ['GET']));

$routes->add('news', new Routing\Route('/news', array(
    '_controller' => function ($request) {
        $routeController = new RouteController();
        return $routeController->getNewsInfo();
    }
), [], [], '', [], ['GET']));

$routes->add('admin', new Routing\Route('/admin', array(
    '_controller' => function ($request) {
        $routeController = new RouteController();
        return $routeController->getAdminPage();
    }
), [], [], '', [], ['GET']));

return $routes;
