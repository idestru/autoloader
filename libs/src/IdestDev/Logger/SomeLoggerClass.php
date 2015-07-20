<?php

namespace IdestDev\Logger;

/**
 * Description of SomeLogerClass.
 *
 * @author oleg
 */
class SomeLoggerClass
{
    public function __construct()
    {
        echo 'Hello from ', __CLASS__, PHP_EOL;
        echo 'I\'m in the namespace: ', __NAMESPACE__, PHP_EOL;
        echo 'I\'m in the file: ', __FILE__, PHP_EOL;
        echo '########################################', PHP_EOL, PHP_EOL;
    }
}
