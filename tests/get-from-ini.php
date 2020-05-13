<?php

namespace Jawira\IniToolbox\GetAll;

use Jawira\IniToolbox\Keys;
use Jawira\IniToolbox\IniToolbox;

require __DIR__ . '/../vendor/autoload.php';

$ini = new IniToolbox();

$old = $ini->set(Keys::SESSION_CACHE_EXPIRE, 300);
$new = $ini->get(Keys::SESSION_CACHE_EXPIRE);
$fromIni = $ini->getFromIni(Keys::SESSION_CACHE_EXPIRE);

var_dump($old, $new, $fromIni);

