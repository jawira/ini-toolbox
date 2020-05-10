<?php

namespace Jawira\PhpIniSettings\MaxExecution;

use Jawira\PhpIniSettings\Keys;
use Jawira\PhpIniSettings\Settings;

require __DIR__ . '/../vendor/autoload.php';

$ini = new Settings();
$ini->set(Keys::MAX_EXECUTION_TIME, 1);

$x = 1;
while (true) {
    $x++;
}
// PHP Fatal error:  Maximum execution time of 1 second exceeded
