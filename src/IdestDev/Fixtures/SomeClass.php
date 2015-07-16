<?php

namespace IdestDev\Fixtures;

/**
 * Description of SomeClass.
 *
 * @author oleg
 */
class SomeClass
{
    public function __construct()
    {
        echo 'Hello from ', __CLASS__, PHP_EOL;
        echo 'I\'m in the namespace: ', __NAMESPACE__, PHP_EOL;
        echo 'I\'m in the file: ', __FILE__, PHP_EOL;
        echo '########################################', PHP_EOL, PHP_EOL;
    }
}
