<?php

/**
 * Contains Symfony PSR-0 class loader
 * 
 * DIR/ClassPath
 * 
 */

require_once __DIR__.'/vendor/symfony/class-loader/ClassLoader.php';

use Symfony\Component\ClassLoader\ClassLoader;

$loader = new ClassLoader();

$loader->addPrefix('IdestDev\Logger', __DIR__.'/libs/src');
$loader->addPrefix('IdestDev\Fixtures', __DIR__.'/src');

$loader->addPrefix('IdestDev_', __DIR__.'/src/Pear/Package');


// fallback dir
//$loader->addPrefix('', __DIR__.'/src');

$loader->register();