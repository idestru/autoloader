<?php

//require_once   __DIR__.'/vendor/symfony/class-loader/Psr4ClassLoader.php';
//
//use Symfony\Component\ClassLoader\Psr4ClassLoader;
//
//$loader = new Psr4ClassLoader();
//$loader->addPrefix(
//        'IdestDev',
//        __DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'IdestDev'
//);
//$loader->register();

//$loader->unregister();


/**
 * Ouput
 * 
 * array(1) {
 *     [0] =>
 *     string(10) "__autoload"
 * }
 * 
 * or the Symfony class loader class if it is registered
 * 
 */

//var_dump(spl_autoload_functions()); 

//spl_autoload_register();

/**
 * Ouput
 * 
 * array(1) {
 *     [0] =>
 *     string(10) "spl_autoload"
 * }
 * 
 * if the spl_autoload_register() is called without parameteres
 * 
 */

var_dump(spl_autoload_functions());

/**
 * Autoloding magic function
 * 
 * @param string $className e.g. IdestDev\Fixtures\SomeClass
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