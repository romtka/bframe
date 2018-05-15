<?php

abstract class AutoLoader
{
	public function autoload()
	{
	    spl_autoload_register(
	        function ($class) { //print_r($class.'<br>');
    	        $classFile = BF_ROOT.DS.$class . '.php'; //print_r($classFile.'<br>');
    	        if(file_exists($classFile)){
    	            require_once $classFile;
    	        }
	        }
        );
	}

/*	public function __autoload($className,$classMapOnly=false)
	{
	    // use include so that the error PHP file may appear
	    if(isset(self::$classMap[$className]))
	        include(self::$classMap[$className]);
	        elseif(isset(self::$_coreClasses[$className]))
	        include(YII_PATH.self::$_coreClasses[$className]);
	        elseif($classMapOnly)
	        return false;
	        else
	        {
	            // include class file relying on include_path
	            if(strpos($className,'\\')===false)  // class without namespace
	            {
	                if(self::$enableIncludePath===false)
	                {
	                    foreach(self::$_includePaths as $path)
	                    {
	                        $classFile=$path.DIRECTORY_SEPARATOR.$className.'.php';
	                        if(is_file($classFile))
	                        {
	                            include($classFile);
	                            if(YII_DEBUG && basename(realpath($classFile))!==$className.'.php')
	                                throw new CException(Yii::t('yii','Class name "{class}" does not match class file "{file}".', array(
	                                    '{class}'=>$className,
	                                    '{file}'=>$classFile,
	                                )));
	                                break;
	                        }
	                    }
	                }
	                else
	                    include($className.'.php');
	            }
	            else  // class name with namespace in PHP 5.3
	            {
	                $namespace=str_replace('\\','.',ltrim($className,'\\'));
	                if(($path=self::getPathOfAlias($namespace))!==false && is_file($path.'.php'))
	                    include($path.'.php');
	                    else
	                        return false;
	            }
	            return class_exists($className,false) || interface_exists($className,false);
	        }
	        return true;
	} 
	*/
}