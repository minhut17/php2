<?php
namespace app\core;

class Route{
    protected array $routes = [];
    public function register(string $requestMethod,string $route, callable|array $action):self{
    
        $this->routes[$requestMethod][$route] = $action;
    //    var_dump($this->routes['get']);
       return $this; 
    }
    public function resolve(string $requestUrl, string $requestMethod): void {
        $route = explode('?', $requestUrl)[0];
        $action = $this->routes[$requestMethod][$route] ?? null;
       
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
    public function get(string $route,callable|array $action):self{
        return $this->register('get',$route,$action);
    }
    public function post(string $route,callable|array $action):self{
        return $this->register('post',$route,$action);
    }
}