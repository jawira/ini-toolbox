<?php declare(strict_types=1);

namespace Jawira\IniToolbox;

use function ini_get;
use function ini_set;

/**
 * Class Settings
 *
 * This is a wrapper Class to manage `ini` related functions:
 *
 * - ini_​get
 * - ini_​set
 *
 * @see     https://www.php.net/manual/en/configuration.changes.php
 *
 * @package Jawira\PhpIniSettings
 * @author  Jawira Portugal <dev@tugal.be>
 */
class IniToolbox implements IniToolboxInterface
{
    /**
     * Ini backup
     *
     * @var string[]
     */
    protected $backup = [];


    /**
     * Gets the value of a configuration option
     *
     * Returns the value of the configuration option as a string on success, or an empty string for null values.
     * Returns NULL if the configuration option doesn't exist.
     *
     * @param string $varName
     *
     * @return null|string Setting value
     */
    public function get(string $varName): ?string
    {
        $value = ini_get($varName);

        return (false !== $value) ? $value : null;
    }

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
     * Restores the value of a configuration option
     *
     * (Private because not production ready)
     *
     * @param string $varName
     *
     * @return \Jawira\IniToolbox\IniToolbox
     */
    private function restore(string $varName): self
    {
        ini_restore($varName);

        return $this;
    }

    /**
     * Retrieve a path to the loaded php.ini file
     *
     * (Private because not production ready)
     *
     * @return string The loaded php.ini path, or NULL if one is not loaded.
     */
    private function loadedFile(): ?string
    {
        $path = php_ini_loaded_file();

        return (false !== $path) ? $path : null;
    }

    /**
     * Return a list of .ini files parsed from the additional ini dir
     *
     * (Private because not production ready)
     *
     * @return null|string
     */
    private function scannedFiles(): ?string
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
     * (Private because not production ready)
     *
     * @param string $dir
     *
     * @return string
     * @see https://www.php.net/manual/en/configuration.file.php#configuration.file.scan
     */
    private function scanDir($dir = ''): string
    {
        if (defined('PHP_INI_SCAN_DIR')) {
            $dir = PHP_INI_SCAN_DIR;
        } else {
            define('PHP_INI_SCAN_DIR', $dir);
        }

        return $dir;
    }

    /**
     * Load directive directly from php.ini
     *
     * (Private because not production ready)
     *
     * @param string $varName
     *
     * @return null|string
     */
    private function getFromIni(string $varName): ?string
    {
        $value = get_cfg_var($varName);

        return (false !== $value) ? $value : null;
    }

    /**
     * (Private because not production ready)
     */
    private function backup(): self
    {
        $fullConfig = $this->getAll(null, false);
        $this->backup = is_array($fullConfig) ? $fullConfig : [];

        return $this;
    }

    /**
     * Gets all configuration options
     *
     * A PHP Warning is thrown if $extension is invalid
     *
     * @param null|string $extension Extension's settings
     * @param bool $details Set false to return only current values
     *
     * @return null|string[]
     */
    private function getAll(?string $extension = null, bool $details = true): ?array
    {
        $values = ini_get_all($extension, $details);

        return (is_array($values)) ? $values : null;
    }

    private function rollback(): self
    {
        foreach ($this->backup as $key => $value) {
            $this->set($key, $value);
        }

        return $this;
    }
}
