<?php
spl_autoload_register("autoload");

function autoload($className)
{
    $path = 'Classes/';
    $ext = '.php';
    $fileName = $path . $className . $ext;

    if(!file_exists($fileName))
    {
        return false;
    }
    include_once $fileName;

}