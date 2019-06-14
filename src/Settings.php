<?php declare(strict_types=1);

namespace Jawira\PhpIniSettings;

/**
 * Class Settings
 *
 * This is a wrapper Class to manage `ini` related functions:
 *
 * - ini_​alter
 * - ini_​get_​all
 * - ini_​get
 * - ini_​restore
 * - ini_​set
 * - php_​ini_​loaded_​file
 * - php_​ini_​scanned_​files
 *
 * @package Jawira\PhpIniSettings
 * @author  Jawira Portugal <dev@tugal.be>
 */
class Settings
{
    /**
     * Sets the value of a configuration option
     *
     * Returns the old value on success and null on failure
     *
     * @see https://www.php.net/manual/en/function.ini-set.php
     *
     * @param string $varName
     * @param string $newValue
     *
     * @return null|string
     */
    public function set(string $varName, string $newValue): ?string
    {
        $oldValue = ini_set($varName, $newValue);

        return (false === $oldValue) ? $oldValue : null;
    }

    /**
     * Gets the value of a configuration option
     *
     * @param string $varName
     *
     * @return null|string
     */
    public function get(string $varName): ?string
    {
        $value = ini_get($varName);

        return (false === $value) ? $value : null;
    }
}
