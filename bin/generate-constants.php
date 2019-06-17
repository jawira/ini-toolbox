#!/usr/bin/php
<?php

namespace Script;

function main()
{
    require __DIR__ . '/../vendor/autoload.php';

    $settings = parseDom();

    foreach ($settings as $setting) {
        $constant = generatePhpDoc($setting);
        echo $constant;
    }
}

/**
 * List of php.ini directives
 *
 * @see https://www.php.net/manual/en/ini.list.php
 *
 * @return array
 */
function parseDom(): array
{
    // Loading table rows
    $source = file_get_contents('https://www.php.net/manual/en/ini.list.php');
    $doc    = new \DOMDocument();
    $doc->loadHTML($source, LIBXML_NOWARNING | LIBXML_NOERROR);
    $phpIniSettings = \simplexml_import_dom($doc);

    // Getting keys
    $keys   = $phpIniSettings->xpath('//table//thead//tr/th');
    $keys   = castElementsToString($keys);
    $keys[] = 'Url';

    // Building array
    $rows   = $phpIniSettings->xpath('//table//tbody//tr');
    $values = [];
    foreach ($rows as $key => $row) {
        $values[$key]   = castElementsToString(reset($row));
        $values[$key][] = findFirstHref($row);
        $values[$key]   = array_combine($keys, $values[$key]);
    }

    return $values;
}

/**
 * Casts each element from the array to string
 *
 * @param \SimpleXMLElement[] $elements
 *
 * @return array
 */
function castElementsToString($elements): array
{
    return array_map(
        function ($value) {
            if ($value instanceof \SimpleXMLElement && property_exists($value, 'a')) {
                return (string)$value->a;
            }

            return (string)$value;
        },
        $elements);
}

/**
 * Return first href
 *
 * @param \SimpleXMLElement $row
 *
 * @return string
 */
function findFirstHref(\SimpleXMLElement $row): string
{
    $urlElement = $row->xpath('.//a[1]');
    $hrefString = '';
    if (!empty($urlElement)) {
        $hrefString = (string)reset($urlElement)->attributes()->href;
    }

    return $hrefString;
}

/**
 * @param array $setting
 *
 * @return string
 * @see https://www.php.net/manual/en/configuration.changes.modes.php
 */
function generatePhpDoc(array $setting): string
{
    extract($setting);
    /** @var string $Name */
    /** @var string $Default */
    /** @var string $Changeable */
    /** @var string $Changelog */
    /** @var string $Url */

    $doc      = <<<PHPDOC
/**
 * $Name
 *
PHPDOC;
    $doc      .= PHP_EOL;
    $doc      .= parsePhpDocList('Default', $Default);
    $doc      .= parsePhpDocList('Changeable', $Changeable);
    $doc      .= parsePhpDocList('Changelog', $Changelog);
    $doc      .= parsePhpDocSee($Url);
    $doc      .= parsePhpDocDeprecated($Changeable);
    $doc      .= ' */' . PHP_EOL;
    $constant = strtoupper(str_replace('.', '_', $setting['Name']));
    $doc      .= "const $constant = '$Name';" . PHP_EOL . PHP_EOL;

    return $doc;
}

/**
 * @param string $changeable
 *
 * @return string
 */
function parsePhpDocDeprecated(string $changeable): string
{
    $doc = '';
    if (!in_array($changeable, ['PHP_INI_ALL', 'PHP_INI_USER'])) {
        $doc .= <<<PHPDOC
 * @deprecated This configuration setting cannot be set at Runtime
PHPDOC;
        $doc .= PHP_EOL;
    }

    return $doc;
}

/**
 * @param string $url
 *
 * @return string
 */
function parsePhpDocSee(string $url): string
{
    $doc = '';
    if ($url) {
        $doc .= <<<PHPDOC
 *
 * @see https://www.php.net/manual/en/$url
PHPDOC;
        $doc .= PHP_EOL;
    }

    return $doc;
}

/**
 * @param string $title
 * @param string $value
 *
 * @return string
 */
function parsePhpDocList(string $title, string $value): string
{
    $doc = '';
    if (!empty(trim($value)) && (mb_ord($value) !== 160)) {
        $doc .= <<<PHPDOC
 * - $title: $value
PHPDOC;
        $doc .= PHP_EOL;
    }

    return $doc;
}

main();
