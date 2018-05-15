<?php

namespace system\libraries;

class App
{
    public function execute()
    {

        $router = new Router(); 
        $router->getController();
        
        $db = new DB();
        
    }
}

