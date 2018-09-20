<?php

/**
 * This file is a part of the Oseille framework
 *
 * @package Oseille\Db\Driver\Parameters
 */
namespace Oseille\Db\Driver\Parameters;

/**
 * Connection parameters.
 */
final class Parameters
{
    /** Class section
     * ************** */

    /**
     * Writing data to inaccessible properties is not allowed.
     *
     * @param string $name
     * @param mixed $value
     * @throws \Oseille\Db\Exception\BadMethodCallException
     * @codeCoverageIgnore
     */
    public function __set($name, $value)
    {
        throw new \Oseille\Db\Exception\BadMethodCallException('Writing data to inaccessible properties is not allowed.');
    }

    /**
     * Reading data from inaccessible properties is not allowed.
     *
     * @param string $name
     * @throws \Oseille\Db\Exception\BadMethodCallException
     * @codeCoverageIgnore
     */
    public function __get($name)
    {
        throw new \Oseille\Db\Exception\BadMethodCallException('Reading data from inaccessible properties is not allowed.');
    }

    /** Database section
     * ***************** */

    /**
     * Database name
     * @var string
     */
    private $sDatabaseName = '';

    /**
     * Sets the database name.
     *
     * @param string $name Database name.
     * @return \Oseille\Db\Driver\Parameters\Parameters
     * @throws \Oseille\Db\Exception\InvalidArgumentException If something wrong occured.
     */
    public function setDBName($name)
    {
        $this->sDatabaseName = is_string($name) ? trim($name) : '';
        if (\strlen($this->sDatabaseName) === 0) {
            throw new \Oseille\Db\Exception\InvalidArgumentException('The database name provided is not valid.');
        }
        return $this;
    }

    /**
     * Gets the database name.
     *
     * @return string
     */
    public function getDBName()
    {
        return $this->sDatabaseName;
    }

    /** Options section
     * **************** */

    /**
     * Host.
     *
     * @var string
     */
    private $sHostname = '';

    /**
     * Port.
     *
     * @var string
     */
    private $sPort = '';

    /**
     * Charset.
     *
     * @var string
     */
    private $sCharset = '';

    /**
     * Driver options.
     *
     * @var array
     */
    private $aOptions = [];

    /**
     * Configure the driver.
     *
     * @param array $parameters Array of options. An associative array of with keys:
     *                          'hostname'(string), 'port'(string), 'charset'(string) and 'driver_options'(array)
     * @return \Oseille\Db\Driver\Parameters\Parameters
     * @throws \Oseille\Db\Exception\InvalidArgumentException If something wrong occured.
     */
    public function setParameters(array $parameters)
    {
        $parameters = array_intersect_key(
            $parameters,
            [
                'hostname' => '1',
                'port' => '1',
                'charset' => '1',
                'driver_options' => []
            ]
        );

        if (count($parameters) != 4) {
            throw new \Oseille\Db\Exception\InvalidArgumentException('The options provided are not valid.');
        }

        $this->sHostname = is_string($parameters['hostname']) ? trim($parameters['hostname']) : '';
        $this->sPort = is_numeric($parameters['port']) ? trim($parameters['port']) : '';
        $this->sCharset = is_string($parameters['charset']) ? trim($parameters['charset']) : '';
        $this->aOptions = is_array($parameters['driver_options']) ? $parameters['driver_options'] : [];

        if ((strlen($this->sHostname) === 0) || (strlen($this->sPort) === 0) || (strlen($this->sCharset) === 0)) {
            throw new \Oseille\Db\Exception\InvalidArgumentException('The parameters provided are not valid.');
        }

        return $this;
    }

    /**
     * Returns host.
     *
     * @return string
     */
    public function getHostName()
    {
        return $this->sHostname;
    }

    /**
     * Returns port.
     *
     * @return string
     */
    public function getPort()
    {
        return $this->sPort;
    }

    /**
     * Returns charset.
     *
     * @return string
     */
    public function getCharset()
    {
        return $this->sCharset;
    }

    /**
     * Gets the driver options.
     *
     * @return array
     */
    public function getOptions()
    {
        return $this->aOptions;
    }

    /**
     * Returns true if all the parameters are set.
     *
     * @return bool
     */
    public function valid()
    {
        return ((\strlen($this->sHostname) > 0) && (\strlen($this->sPort) > 0) && (\strlen($this->sCharset) > 0) && (\strlen($this->sDatabaseName) > 0));
    }
}
