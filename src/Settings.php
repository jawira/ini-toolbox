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
 * - get_cfg_var
 *
 * @see     https://www.php.net/manual/en/configuration.changes.php
 *
 * @package Jawira\PhpIniSettings
 * @author  Jawira Portugal <dev@tugal.be>
 */
class Settings
{
    /**
     * Sets the value of a configuration option
     *
     * @see https://www.php.net/manual/en/function.ini-set.php
     *
     * @param string $varName
     * @param string $newValue
     *
     * @return null|string The old value on success, null on failure.
     */
    public function set(string $varName, string $newValue): ?string
    {
        $oldValue = ini_set($varName, $newValue);

        return (false !== $oldValue) ? $oldValue : null;
    }

    /**
     * Gets the value of a configuration option
     *
     * @param string $varName
     *
     * @return null|string Old value
     */
    public function get(string $varName): ?string
    {
        $value = ini_get($varName);

        return (false !== $value) ? $value : null;
    }

    /**
     * Restores the value of a configuration option
     *
     * @param string $varName
     *
     * @return \Jawira\PhpIniSettings\Settings
     */
    public function restore(string $varName): self
    {
        ini_restore($varName);

        return $this;
    }

    /**
     * Gets all configuration options
     *
     * A PHP Warning is thrown if $extension is invalid
     *
     * @param null|string $extension Extension's settings
     * @param null|bool   $details   Set false to return only current values
     *
     * @return null|array
     */
    public function getAll(string $extension = null, bool $details = true): ?array
    {
        $values = ini_get_all($extension, $details);

        return (is_array($values)) ? $values : null;
    }

    /**
     * Retrieve a path to the loaded php.ini file
     *
     * @return string The loaded php.ini path, or NULL if one is not loaded.
     */
    public function loadedFile(): ?string
    {
        $path = php_ini_loaded_file();

        return (false !== $path) ? $path : null;
    }

    /**
     * Return a list of .ini files parsed from the additional ini dir
     *
     * @return null|string
     */
    public function scannedFiles(): ?string
    {
        $path = php_ini_scanned_files();

        return (false !== $path) ? $path : null;
    }

    /**
     * Scan directories for *.ini files
     *
     * It is possible to configure PHP to scan for .ini files in a directory after reading php.ini. This can be done
     * at compile time by setting the --with-config-file-scan-dir option. In PHP 5.2.0 and later, the scan directory
     * can then be overridden at run time by setting the PHP_INI_SCAN_DIR environment variable.
     *
     * It is possible to scan multiple directories by separating them with the platform-specific path separator (; on
     * Windows, NetWare and RISC OS; : on all other platforms; the value PHP is using is available as the
     * PATH_SEPARATOR constant). If a blank directory is given in PHP_INI_SCAN_DIR, PHP will also scan the directory
     * given at compile time via --with-config-file-scan-dir .
     *
     * Within each directory, PHP will scan all files ending in .ini in alphabetical order. A list of the files that
     * were loaded, and in what order, is available by calling php_ini_scanned_files(), or by running PHP with the
     * --ini option.
     *
     * @param string $dir
     *
     * @return string
     * @see https://www.php.net/manual/en/configuration.file.php#configuration.file.scan
     */
    public function scanDir($dir = ''): string
    {
        if (defined('PHP_INI_SCAN_DIR')) {
            $dir = PHP_INI_SCAN_DIR;
        } else {
            define('PHP_INI_SCAN_DIR', $dir);
        }

        return $dir;
    }

    public function getFromIni(string $varName)
    {
        $value = get_cfg_var($varName);

        return (false !== $value) ? $value : null;
    }
}
