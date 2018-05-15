<?php 

use system\libraries\App;

require_once BF_SYSTEM.DS.'autoloader.php';

AutoLoader::autoload();

$application = new App();
$application->execute();