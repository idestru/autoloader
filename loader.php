<?php

/**
 * Contains autoloding function
 */

//var_dump(spl_autoload_functions()); 
/**
 * Ouput
 * 
 * array(1) {
 *     [0] =>
 *     string(10) "__autoload"
 * }
 * 
 */

/**
 * Autoloading magic function
 * 
 *  IdestDev\Fixtures\SomeClass              -> DIR/src/IdestDev/Fixtures/SomeClass.php
 *  IdestDev\Fixtures\Some_Underscored_Class -> DIRsrc/IdestDev/Fixtures/Some/Undescored/Class.php
 * 
 * @param string $className
 */
function __autoload($className) {

    $path = __DIR__ . '/src';
    set_include_path(get_include_path() . PATH_SEPARATOR . $path);

    // skip the begining slash // I did not find it on Ubuntu
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    
    // if the $className has backslash
    if ($lastNsPos = strrpos($className, '\\')) {
        
        // All that before the last slash is the namespace
        $namespace = substr($className, 0, $lastNsPos);

        // All that after the last slash is the classname
        $className = substr($className, $lastNsPos + 1);
        
        // Replace all backslashes with DIRECTORY_SEPARATOR
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) 
                . DIRECTORY_SEPARATOR;
    }
    
    // If the filename contains the underscores
    // replace them with DIRECTORY_SEPARATOR
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    
    require $fileName;    
}