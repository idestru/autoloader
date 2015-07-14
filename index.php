<?php

require_once  __DIR__ . '/loader.php';

use IdestDev\Fixtures\SomeClass;
use IdestDev\Fixtures\Some_Underscored_Class;

$someClass = new SomeClass();
$anotherClass = new Some_Underscored_Class();
$otherClass = new IdestDev_Fixtures_OtherClass();

