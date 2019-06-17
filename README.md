PHP ini settings
================

Change PHP's settings on the fly.

<!--
BADGES:
https://github.com/php-pds/badges
https://poser.pugx.org/
https://php-eye.com/about#badges
https://phppackages.org/p/jawira/case-converter
-->

Usage
-----

Usually you configure PHP through `php.ini` file, however it's also possible to 
change these settings at runtime: 

Set values:

```php
$ini = new Settings();
$oldValue = $ini->set('option-name','value');
```

Get values:

```php
$ini = new Settings();
$oldValue = $ini->get('option-name');
```

How to install
--------------

@todo

Requirements
------------

@todo

Contributing
------------

To contribute to this project please read [CONTRIBUTING.md](./CONTRIBUTING.md)

License
-------

This library is licensed under the [MIT license](LICENSE.md).
