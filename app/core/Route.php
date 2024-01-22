<?php
namespace app\core;
use app\core\RouteNotFoundException;
class Route{
    protected array $routes = [];
    public function register(string $routes, callable  $action):self{
       $this->routes[$routes] = $action;
       return $this; 
    }
    public function resolve(string $requestUrl): void {
        $route = explode('?', $requestUrl)[0];
        $action = $this->routes[$route] ?? null;

        if (!$action) {
            throw new RouteNotFoundException();
        }

        if(is_callable($action)){
             call_user_func($action);
        }
        if(is_array($action)){
            [$class,$method] = $action;
            if(class_exists($class)){
                $class = new $class();

                if(method_exists($class,$method)){
                     call_user_func_array([$class,$method],[]);
                }
            }
        }
    }
}