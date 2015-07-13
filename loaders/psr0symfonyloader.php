<?php

/**
 * Psr0ClassLoader form Symfony package
 */

$baseDir = dirname(dirname(__FILE__));

require_once  $baseDir.'/vendor/symfony/class-loader/ClassLoader.php';

use Symfony\Component\ClassLoader\ClassLoader;

$loader = new ClassLoader();
$loader->addPrefix('',   $baseDir.'/src/PSR0');

/**
 * Do not forget to change directory structure
 *  if you will use the following statement
 */

//$loader->addPrefix('IdestDev_',   $baseDir.'/src/PSR0/src/IdestDev');

$loader->register();
