<?php

namespace Jawira\IniToolbox\GetAll;

use Jawira\IniToolbox\Keys;
use Jawira\IniToolbox\IniToolbox;

require __DIR__ . '/../vendor/autoload.php';

$ini = new IniToolbox();

$ini->backup();

$ini->rollback();
