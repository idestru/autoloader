<?php

require_once  __DIR__ . '/bootstrap.php';

use IdestDev\Util\Calculator;

/**
 * PSR4
 */

$calc = new Calculator();

/**
 *  PSR0 without namespacing
 */

//$calc = new IdestDev_Util_Calculator();

printf("calc: 5 + 5 = %s\n", $calc->add(5, 5));
