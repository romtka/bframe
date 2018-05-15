<?php

namespace system\libraries;

class Controller
{
    public function getModel($modelName)
    {
        $appModelNamespace = 'app\\models\\';
        
        $modelName = $appModelNamespace.$modelName;
        
        $model = new $modelName;
        
        return $model;
    }
    
    public function getView($viewName)
    {
        $appViewNamespace = 'app\\views\\';
        
        $modelName = $appViewNamespace.$viewName;
        
        $view = new $viewName;
        
        return $view;
    }
}

