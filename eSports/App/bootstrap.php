<!-- This will contain all required files -->
<?php

//Load Config
require_once 'config/config.php';

//Autoload Core Libraries. This will load all libraries automatically
spl_autoload_register(function($className)
{
    require_once 'libraries/' . $className . '.php';
});