<?php

namespace Jawira\PhpIniSettings\GetAll;

use Jawira\PhpIniSettings\Keys;
use Jawira\PhpIniSettings\Settings;

require __DIR__ . '/../vendor/autoload.php';

$ini = new Settings();

$old = $ini->set(Keys::SOAP_WSDL_CACHE_TTL, '87654');
$old = $ini->set(Keys::SOAP_WSDL_CACHE_TTL, 87654);
$new = $ini->get(Keys::SOAP_WSDL_CACHE_TTL);
$fromIni = $ini->getFromIni(Keys::SOAP_WSDL_CACHE_TTL);

var_dump($old, $new, $fromIni);

