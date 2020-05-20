<?php


namespace Jawira\IniToolbox;


interface IniToolboxInterface
{
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
    public function get(string $varName): ?string;

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
    public function set(string $varName, string $newValue): ?string;
}
