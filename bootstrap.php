<?php

require_once   __DIR__.'/vendor/symfony/class-loader/Psr4ClassLoader.php';

use Symfony\Component\ClassLoader\Psr4ClassLoader;

$loader = new Psr4ClassLoader();
$loader->addPrefix('IdestDev', __DIR__.'/src/IdestDev');
$loader->register();