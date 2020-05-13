<?php

namespace Jawira\IniToolbox\MaxExecution;

use Jawira\IniToolbox\Keys;
use Jawira\IniToolbox\IniToolbox;

require __DIR__ . '/../vendor/autoload.php';

$ini = new IniToolbox();
$ini->set(Keys::MAX_EXECUTION_TIME, 1);

$x = 1;
while (true) {
    $x++;
}
// PHP Fatal error:  Maximum execution time of 1 second exceeded
