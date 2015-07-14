# Autoloader


You can simply add this snippet into your *composer.json* 

```json
{
    "autoload": {
        "psr-0": {
            "": "src/"
        }
    }
}
```

Do not to forget to include *autoload.php* 

```php
require_once __DIR__ . '/vendor/autoload.php';`
```
    
or you can use the autoloaders 
