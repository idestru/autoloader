<?php

/**
 * Contains autoloding function
 */

$path = __DIR__ . '/src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

spl_autoload_register(array('Autoloader', 'load'));

//var_dump(spl_autoload_functions()); 

/**
 * Ouput
 * 
 * array(1) {
 *   [0] =>
 *   array(2) {
 *     [0] =>
 *     string(10) "Autoloader"
 *     [1] =>
 *     string(4) "load"
 *   }
 * }
 * 
 */

/**
 * Autoloding class
 * 
 * IdestDev\IdestDev\SomeClass -> DIR/src/IdestDev/IdestDev/SomeClass.php
 */
class Autoloader
{
    public static function load($className)
    {
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
        printf("Class %s is being loaded from %s\n", $className, $fileName);
        
        require($fileName);
    }
}