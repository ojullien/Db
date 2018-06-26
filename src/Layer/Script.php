<?php

/**
 * This file is a part of the Ophp framework
 *
 * @package Db
 * @license MIT <https://github.com/ojullien/ophp-Db/blob/master/LICENSE>
 */
namespace Ophp\Db\Layer;

/**
 * This class is a layer that loads script into database.
 */
final class Script extends \Ophp\Db\Layer\AbstractLayer
{
    /** Class section
     * ************** */

    /**
     * Constructor.
     *
     * @param null|\Ophp\Db\Driver\DriverInterface $driver
     * @codeCoverageIgnore
     */
    public function __construct(\Ophp\Db\Driver\DriverInterface $driver = null)
    {
        if (null !== $driver) {
            $this->setDriver($driver);
        }
    }

    /** Script section
     * **************** */

    /**
     * Reads entire file into a string.
     *
     * @param string $path Path to the script.
     * @return string|false
     * @throws \Ophp\Db\Exception\InvalidArgumentException
     */
    private function read($path)
    {
        $sPath = is_string($path) ? realpath(trim($path)) : '';

        if ((!strlen($sPath) > 0) || (!is_file($path))) {
            throw new \Ophp\Db\Exception\InvalidArgumentException('The path provided is not valid.');
        }

        return file_get_contents($sPath);
    }

    /**
     * Loads a script into the database.
     *
     * @param string $path            Path to the script
     * @param array  $search          The values being searched for.
     * @param array  $replace         The replacement value that replaces found search values.
     * @param bool   $formatdelimiter Format the delimeters.
     * @return int
     * @throws \Ophp\Db\Exception\InvalidArgumentException
     * @throws \Ophp\Db\Exception\RuntimeException
     */
    public function load($path, array $search = [], array $replace = [], $formatdelimiter = false)
    {
        // Read the script
        $sData = $this->read($path);

        // Replace all occurrences of the search string with the replacement string.
        $sData = str_replace($search, $replace, $sData);

        // Formats the delimiters.
        $bFormat = is_bool($formatdelimiter) ? $formatdelimiter : false;
        if ($bFormat) {
            $sData = str_replace('$$', ';', str_replace('DELIMITER $$', '', $sData));
        }

        // Execute
        $iReturn = $this->pDriver->exec($sData);
        if (false === $iReturn) {
            throw new \Ophp\Db\Exception\RuntimeException('Cannot execute the SQL statement.');
        }

        return $iReturn;
    }
}
