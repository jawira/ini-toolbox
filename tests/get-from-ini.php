<?php

namespace Jawira\PhpIniSettings\GetAll;

use Jawira\PhpIniSettings\Key;
use Jawira\PhpIniSettings\Settings;

require __DIR__ . '/../vendor/autoload.php';

$ini = new Settings();

$old = $ini->set(Key::SESSION_CACHE_EXPIRE, 300);
$new = $ini->get(Key::SESSION_CACHE_EXPIRE);
$fromIni = $ini->getFromIni(Key::SESSION_CACHE_EXPIRE);

var_dump($old, $new, $fromIni);

