<?php

namespace system\libraries;

//use app;

class Router
{
	
	private $routes;
    
    public function __construct()
    {
        $routsPath = BF_CONFIGS.DS.'routes.php';
        $this->routes = include($routsPath);
    }
    
    /*
    * Return request string
    */
    private function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI'])){                
            return trim($_SERVER['REQUEST_URI'], '/');            
        }
    }
    
    public function getController()
    {
        $uri = $this->getURI(); 
        if(!$uri) $uri = 'front'; 
        foreach($this->routes as $uriPattern => $path){
            if(preg_match("~$uriPattern~", $uri)){
                $segments = explode('/', $path);
                
                $controllerName = ucfirst(array_shift($segments).'Controller'); 
                $actionName = 'action'.ucfirst(array_shift($segments)); 
                
                $appControllerNamespace = 'app\\controllers\\';
                                               
                $controllerName = $appControllerNamespace.$controllerName;
                
                $controllerObject = new $controllerName;
                   
                $result = $controllerObject->$actionName();
                
                if($result != null){
                    break;
                }
                
            }
        }
    }

}