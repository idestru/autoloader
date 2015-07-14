<?php

require_once  __DIR__ . '/loader.php';

use IdestDev\Fixtures\SomeClass;

$someClass = new SomeClass();

// This won't work
$anotherClass = new Some_Underscored_Class();
//$otherClass = new IdestDev_Fixtures_OtherClass();

