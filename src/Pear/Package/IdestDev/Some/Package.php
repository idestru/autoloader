<?php

/**
 * Description of IdestDev_Some_Package.
 *
 * @author oleg
 */
class IdestDev_Some_Package
{
    public function __construct()
    {
        echo 'Hello from ', __CLASS__, PHP_EOL;
        echo 'I\'m in the namespace: ', __NAMESPACE__, PHP_EOL;
        echo 'I\'m in the file: ', __FILE__, PHP_EOL;
        echo '########################################', PHP_EOL, PHP_EOL;
    }
}


