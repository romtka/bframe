<?php
namespace system\libraries;

class DB
{
    private $host;
    
    private $dbname;
    
    private $user;
    
    private $pass;
    
    public function __construct()
    {
        $db_config = require_once BF_CONFIGS.DS.'database.php';
        
        $this->host   = $db_config['host'];
        $this->dbname = $db_config['dbname'];
        $this->user   = $db_config['user'];
        $this->pass   = $db_config['pass'];     
    }
    
    
    
}

