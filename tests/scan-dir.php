<?php

namespace Jawira\IniToolbox\GetAll;

use Jawira\IniToolbox\Keys;
use Jawira\IniToolbox\IniToolbox;

require __DIR__ . '/../vendor/autoload.php';

$ini = new IniToolbox();
$all = $ini->scanDir('/tmp/jawi');
$files = $ini->scannedFiles();

echo $files;

