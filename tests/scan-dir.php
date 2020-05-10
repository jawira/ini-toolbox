<?php

namespace Jawira\PhpIniSettings\GetAll;

use Jawira\PhpIniSettings\Keys;
use Jawira\PhpIniSettings\Settings;

require __DIR__ . '/../vendor/autoload.php';

$ini = new Settings();
$all = $ini->scanDir('/tmp/jawi');
$files = $ini->scannedFiles();

echo $files;

