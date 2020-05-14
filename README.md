# Ini Toolbox

**Read/write PHP settings (php.ini) at runtime.**

[![Latest Stable Version](https://poser.pugx.org/jawira/ini-toolbox/v/stable)](https://packagist.org/packages/jawira/ini-toolbox)
[![Total Downloads](https://poser.pugx.org/jawira/ini-toolbox/downloads)](https://packagist.org/packages/jawira/ini-toolbox)
[![License](https://poser.pugx.org/jawira/ini-toolbox/license)](https://packagist.org/packages/jawira/ini-toolbox)
[![composer.lock](https://poser.pugx.org/jawira/ini-toolbox/composerlock)](https://packagist.org/packages/jawira/ini-toolbox)
[![Issues](https://img.shields.io/github/issues/jawira/ini-toolbox.svg?label=HuBoard&color=694DC2)](https://huboard.com/jawira/ini-toolbox)

## Usage

Usually you configure PHP through `php.ini` file, however **for some values**, it's also possible to change these
settings at runtime.

### Get values

Use `IniToolbox::get` to get values:

```php
use \Jawira\IniToolbox\{IniToolbox, Keys};

$ini = new IniToolbox();
$foo = $ini->get(Keys::SMTP_PORT);       // 25
$bar = $ini->get(Keys::DEFAULT_CHARSET); // UTF-8
```

### Set values

Use `IniToolbox::set` to set values:

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

## Contributing

If you liked this project, ⭐ star it on [GitHub](https://github.com/jawira/ini-toolbox).

## License

This library is licensed under the [MIT license](LICENSE.md).
