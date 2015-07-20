# Autoloader
This is test autoloaders for psr-0 and psr-4 loading standards


The example contains:

1. Autoloading with [Composer][composer]
1. Autoloading with [symfony/class-loader][sl] component 
1. __autoload function
1. Autoloding class implementation using spl_autoload


## Autoloading with Composer
Add your source folder into *composer.json* autoload section

```json
{
    "autoload": {
        "psr-0": {
            "": "src/"
        }
    }
}
```

Do not forget to include *autoload.php* 

```php
require_once __DIR__ . '/vendor/autoload.php';
```


## Autoloading with symfony/class-loader component

```sh
    $ cd path/to/your/project
    $ curl -Ss https://getcomposer.org/installer | php
    $ php composer.phar require symfony/class-loader
```

[sl]: https://github.com/symfony/ClassLoader
[composer]: https://getcomposer.org/

### PSR-0

```php

/**
 *  Symfony\SomeClass() ->  __DIR__/src/Symfony/SomeClass.php
 *  or if not found     ->  __DIR__/symfony/src/Symfony/SomeClass.php
 */
$loader->addPrefix('Symfony', array(
    __DIR__.'/src',
    __DIR__.'/symfony/src'
));

// register a prefix for a class following the PEAR naming conventions
$loader->addPrefix('Twig_', __DIR__.'/vendor/twig/twig/lib');
```

### PSR-4

```php
/**
 *  Symfony\SomeClass() ->  __DIR__/src/SomeClass.php
 */
$loader->addPrefix('Symfony', __DIR__.'/src');
```