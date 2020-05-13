<?php

namespace Jawira\IniToolbox\GetAll;

use Jawira\IniToolbox\Keys;
use Jawira\IniToolbox\IniToolbox;

require __DIR__ . '/../vendor/autoload.php';

$ini = new IniToolbox();

$old = $ini->set(Keys::SOAP_WSDL_CACHE_TTL, '87654');
$old = $ini->set(Keys::SOAP_WSDL_CACHE_TTL, 87654);
$new = $ini->get(Keys::SOAP_WSDL_CACHE_TTL);
$fromIni = $ini->getFromIni(Keys::SOAP_WSDL_CACHE_TTL);

var_dump($old, $new, $fromIni);

