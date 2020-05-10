<?php

namespace Jawira\PhpIniSettings\GetAll;

use Jawira\PhpIniSettings\Keys;
use Jawira\PhpIniSettings\Settings;

require __DIR__ . '/../vendor/autoload.php';

$ini = new Settings();
$all = $ini->loadedFile();

var_dump($all);

