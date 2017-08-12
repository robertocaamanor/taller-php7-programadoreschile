<?php

namespace App;

class Router {

    protected $routers = [
      'GET', 'POST'
    ];

    public static function load($file)
    {

        $router = new static;

        require $file;

        return $router;

    }

    public function get($uri, $controller)
    {
        $this->routers['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routers['POST'][$uri] = $controller;
    }

    public function send($uri, $method)
    {
        $this->callAction(...explode('@',
            $this->routers[$method][$uri]
        ));
    }

    public function callAction($controller, $action)
    {
        $controller = 'App\\Controllers\\'.$controller;
        $controller = new $controller;

        if(!method_exists($controller, $action)){
            throw new \Exception("No existe metodo");
        }

        return $controller->$action();
    }

}