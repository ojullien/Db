<?php

/**
 * This file is a part of the Ophp framework
 *
 * @category  Ophp-Db
 * @package   Db
 * @license MIT <https://github.com/ojullien/ophp-Db/blob/master/LICENSE>
 */
namespace Ophp\Db\Layer;

/**
 * Interface for layer.
 *
 * @category Ophp-Db
 * @package    Db
 * @subpackage Layer
 * @version    1.0.0
 * @since      1.0.0
 */
interface LayerInterface
{

    /**
     * Injects the driver.
     *
     * @param \Ophp\Db\Driver\DriverInterface $driver
     */
    public function setDriver(\Ophp\Db\Driver\DriverInterface $driver);
}
