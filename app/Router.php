<?php

namespace TaskManager;

class Router{

    private $routes = [];

    public static function load($file){
        $router = new static;
        require $file;

        return $router;
    }

    public function define($routes){
        $this->routes = $routes;
    }

    public function direct($uri){
        $urisplit = explode("/", $uri);
        if (is_numeric ($urisplit[count($urisplit)-1]) == true){
            array_pop ( $urisplit);
            $uri = implode('/', $urisplit);
        }
        if(array_key_exists($uri, $this->routes)){
            return $this->routes[$uri];
        }
        else{
            return $this->routes[404];
        }
    }
}