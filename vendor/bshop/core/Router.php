<?php


namespace bshop;


class Router {
    
    protected static $routes = [];
    protected static $route = [];
    
    public static function add($regexp, $route = []) {
        self::$routes[$regexp] = $route;
    }
    
    public static function getRoutes() {
        return self::$routes;
    }
    
    public static function getRoute() {
        return self::$route;
    }
    
    public static function dispech($url) {
        if(self::matchRoute($url)) {
            echo "OK";
        } else {
            echo "NO";
        }
    }
    
    public static function matchRoute($url) {
        foreach(self::$routes as $pattern => $route) {
            if(preg_match("#{$pattern}#", $url, $matches)) {
                foreach($matches as $k => $v) {
                    if(is_string($k)) {
                        $route[$k] = $v;
                    }
                }
                debug($route);
                return true;
            }
        }
            return false;
    }
    
}