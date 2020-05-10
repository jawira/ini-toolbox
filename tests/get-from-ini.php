<?php

namespace Jawira\PhpIniSettings\GetAll;

use Jawira\PhpIniSettings\Keys;
use Jawira\PhpIniSettings\Settings;

require __DIR__ . '/../vendor/autoload.php';

$ini = new Settings();

$old = $ini->set(Keys::SESSION_CACHE_EXPIRE, 300);
$new = $ini->get(Keys::SESSION_CACHE_EXPIRE);
$fromIni = $ini->getFromIni(Keys::SESSION_CACHE_EXPIRE);

var_dump($old, $new, $fromIni);

