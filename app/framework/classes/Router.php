<?php
namespace app\framework\classes;

use Exception;

class Router
{
    private string $path;
    private string $request;

    private function routerFound($routes)
    {
        if (!isset($routes[$this->request])) {
            throw new Exception("Route {$this->path} does not exist");
        }
        
        if (!isset($routes[$this->request][$this->path])) {
            throw new Exception("Route {$this->path} does not exist");
        }
    }

    private function controllerFound(string $controllerNamespace, string $controller, string $action)
    {
        if (!class_exists($controllerNamespace)) {
            throw new Exception("Controller {$controller} does not exist");
        }
        
        if (!method_exists($controllerNamespace, $action)) {
            throw new Exception("Action {$action} does not exist in controller {$controller}");
        }
    }

    public function execute($routes)
    {
        $this->path = path();
        $this->request = request();

        $this->routerFound($routes);

        [$controller, $action] = explode('@', $routes[$this->request][$this->path]);

        if (str_contains($action, ':')) {
            [$action, $auth] = explode(':', $action);
            Auth::check($auth);
        }

        $controllerNamespace = "app\\controllers\\{$controller}";

        $this->controllerFound($controllerNamespace, $controller, $action);

        $controllerInstance = new $controllerNamespace;
        $controllerInstance->$action();
    }
}
