# Ini Toolbox

Change PHP's settings on the fly.

[![Issues](https://img.shields.io/github/issues/jawira/php-ini-settings.svg?label=HuBoard&color=694DC2)](https://huboard.com/jawira/php-ini-settings)

<!--
BADGES:
https://github.com/php-pds/badges
https://poser.pugx.org/
https://php-eye.com/about#badges
https://phppackages.org/p/jawira/case-converter
-->

## Usage


Usually you configure PHP through `php.ini` file, however **for some values**, it's also possible to
change these settings at runtime.

### Get values

Use `Settings::get` to get values:

```php
use \Jawira\IniToolbox\{IniToolbox, Keys};

$ini = new IniToolbox();
$foo = $ini->get(Keys::SMTP_PORT);       // 25
$bar = $ini->get(Keys::DEFAULT_CHARSET); // UTF-8
```

### Set values

Use `Settings::set` to set values:

```php
use \Jawira\IniToolbox\{IniToolbox, Keys};

$ini = new IniToolbox();
$oldTimezone = $ini->set(Keys::DATE_TIMEZONE, 'Europe/Brussels');
echo $oldTimezone; // Europe/Berlin
```

### Constants

`Keys` is a convenience class, it contains most of the configuration options as constants.

```php
use \Jawira\IniToolbox\Keys;

Keys::SMTP_PORT;            // same as 'smtp_port'
Keys::MAX_EXECUTION_TIME;   // same as 'max_execution_time'
```

## How to install

```
composer require jawira/ini-toolbox
```

Contributing
------------

If you liked this project, ⭐ star it on GitHub.

License
-------

This library is licensed under the [MIT license](LICENSE.md).
