<?php

/**
 * Contains Symfony PSR-0 class loader
 */

require_once __DIR__.'/vendor/symfony/class-loader/Psr4ClassLoader.php';

use Symfony\Component\ClassLoader\Psr4ClassLoader;

$loader = new Psr4ClassLoader();

$loader->addPrefix('IdestDev\\Logger', __DIR__.'/src/Logger');
$loader->addPrefix('IdestDev', __DIR__.'/src/IdestDev');

$loader->register();