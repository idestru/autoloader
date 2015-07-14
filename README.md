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
require_once __DIR__ . '/vendor/autoload.php';`
```

## Autoloading with symfony/class-loader component

```sh
    $ cd path/to/your/project
    $ curl -Ss https://getcomposer.org/installer | php
    $ php composer.phar require symfony/class-loader
```

[sl]: https://github.com/symfony/ClassLoader
[composer]: https://getcomposer.org/