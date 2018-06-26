<?php

/**
 * This file is a part of the Ophp framework
 *
 * @package Db
 * @license MIT <https://github.com/ojullien/ophp-Db/blob/master/LICENSE>
 */
namespace Ophp\Db\Layer;

/**
 * Parent class for all layer.
 */
abstract class AbstractLayer implements \Ophp\Db\Layer\LayerInterface
{
    /** Class section
     * ************** */

    /**
     * Writing data to inaccessible properties is not allowed.
     *
     * @param string $name
     * @param mixed $value
     * @throws \Ophp\Db\Exception\BadMethodCallException
     * @codeCoverageIgnore
     */
    final public function __set($name, $value)
    {
        throw new \Ophp\Db\Exception\BadMethodCallException('Writing data to inaccessible properties is not allowed.');
    }

    /**
     * Reading data from inaccessible properties is not allowed.
     *
     * @param string $name
     * @throws \Ophp\Db\Exception\BadMethodCallException
     * @codeCoverageIgnore
     */
    final public function __get($name)
    {
        throw new \Ophp\Db\Exception\BadMethodCallException('Reading data from inaccessible properties is not allowed.');
    }

    /** Driver section
     * *************** */
    /*
     * Instance of database driver.
     *
     * @var \Ophp\Db\Driver\DriverInterface
     */
    protected $pDriver = null;

    /**
     * Injects the driver.
     *
     * @param \Ophp\Db\Driver\DriverInterface $driver
     */
    public function setDriver(\Ophp\Db\Driver\DriverInterface $driver)
    {
        $this->pDriver = $driver;
    }
}
