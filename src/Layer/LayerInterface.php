<?php

/**
 * This file is a part of the Oseille framework
 *
 * @package Oseille\Db\Layer
 */
namespace Oseille\Db\Layer;

/**
 * Interface for layer.
 */
interface LayerInterface
{

    /**
     * Injects the driver.
     *
     * @param \Oseille\Db\Driver\DriverInterface $driver
     */
    public function setDriver(\Oseille\Db\Driver\DriverInterface $driver);
}
