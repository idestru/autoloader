<?php

require_once  __DIR__ . '/loader.php';

use IdestDev\Fixtures\SomeClass;
use IdestDev\Logger\SomeLoggerClass;

// both classes are in the same namespace but in the different directories
$someClass = new SomeClass();
$someLoggerClass = new SomeLoggerClass();

// a class without a namespace (pear naming convention) 
$pearClass = new IdestDev_Some_Package();