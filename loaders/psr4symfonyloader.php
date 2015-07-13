<?php

/**
 * Psr4ClassLoader form Symfony package
 */

$baseDir = dirname(dirname(__FILE__));

require_once  $baseDir.'/vendor/symfony/class-loader/Psr4ClassLoader.php';

use Symfony\Component\ClassLoader\Psr4ClassLoader;

$loader = new Psr4ClassLoader();
$loader->addPrefix('IdestDev',   $baseDir.'/src/PSR4/IdestDev');
$loader->register();
