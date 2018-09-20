<?php

/**
 * This file is a part of the Oseille framework
 *
 * @package Oseille\Db\Layer
 */
namespace Oseille\Db\Layer;

/**
 * Parent class for all layer.
 */
abstract class AbstractLayer implements \Oseille\Db\Layer\LayerInterface
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
    final public function __set($name, $value)
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
    final public function __get($name)
    {
        throw new \Oseille\Db\Exception\BadMethodCallException('Reading data from inaccessible properties is not allowed.');
    }

    /** Driver section
     * *************** */
    /*
     * Instance of database driver.
     *
     * @var \Oseille\Db\Driver\DriverInterface
     */
    protected $pDriver = null;

    /**
     * Injects the driver.
     *
     * @param \Oseille\Db\Driver\DriverInterface $driver
     */
    public function setDriver(\Oseille\Db\Driver\DriverInterface $driver)
    {
        $this->pDriver = $driver;
    }
}
