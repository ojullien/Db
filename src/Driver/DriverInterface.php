<?php

/**
 * This file is a part of the Ophp framework
 *
 * @package Db
 * @license MIT <https://github.com/ojullien/ophp-Db/blob/master/LICENSE>
 */
namespace Ophp\Db\Driver;

/**
 * Connection interface for classes that may implements a DB driver.
 */
interface DriverInterface
{

    /**
     * Creates a driver instance representing a connection to a database.
     *
     * @param \Ophp\Db\Driver\Parameters\Parameters  $parameters  Connection parameters.
     * @param \Ophp\Db\Driver\Parameters\Credentials $credentials User name and password.
     * @return \PDO
     * @throws \RuntimeException
     */
    public function __construct(\Ophp\Db\Driver\Parameters\Parameters $parameters, \Ophp\Db\Driver\Parameters\Credentials $credentials);

    /**
     * Returns the database name.
     *
     * @return string
     */
    public function getDBName();

    /**
     * Execute an SQL statement and return the number of affected rows.
     *
     * @param string $statement The SQL statement to prepare and execute.
     *                          Data inside the query should be properly escaped.
     * @return int|false
     */
    public function exec($statement);

    /**
     * Prepares a statement for execution and returns a statement object.
     *
     * @param string $statement      This must be a valid SQL statement for the target database server.
     * @param array  $driver_options This array holds one or more key=>value pairs to set attribute values for the
     *                               PDOStatement object that this method returns. You would most commonly use this to
     *                               set the PDO::ATTR_CURSOR value to PDO::CURSOR_SCROLL to request a scrollable cursor.
     *                               Some drivers have driver specific options that may be set at prepare-time.
     * @return PDOStatement
     */
    public function prepare($statement, $driver_options = array());
}
