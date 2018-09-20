<?php

/**
 * This file is a part of the Oseille framework
 *
 * @package Oseille\Db\Driver
 */
namespace Oseille\Db\Driver;

/**
 * This class is a driver that implements MySQL PDO interface.
 */
final class MySQL extends \PDO implements \Oseille\Db\Driver\DriverInterface
{
    /** Class section
     * ************** */

    /**
     * Creates a PDO instance representing a connection to a database.
     *
     * @param \Oseille\Db\Driver\Parameters\Parameters  $parameters  Connection parameters.
     * @param \Oseille\Db\Driver\Parameters\Credentials $credentials User name and password.
     * @return \PDO
     * @throws \Oseille\Db\Exception\RuntimeException
     */
    public function __construct(
        \Oseille\Db\Driver\Parameters\Parameters $parameters,
        \Oseille\Db\Driver\Parameters\Credentials $credentials
    ) {
        if (! $parameters->valid() || ! $credentials->valid()) {
            throw new \Oseille\Db\Exception\RuntimeException('Connection options are not valid.');
        }

        $this->sDBName = $parameters->getDBName();

        $sDSN = 'mysql:dbname=' . $this->sDBName
            . ';host=' . $parameters->getHostname()
            . ';port=' . $parameters->getPort()
            . ';charset=' . $parameters->getCharset();

        parent::__construct(
            $sDSN,
            $credentials->getUserName(),
            $credentials->getPassword(),
            $parameters->getOptions()
        );
    }

    /** Driver section
     * *************** */

    /**
     * Database name.
     *
     * @var string
     */
    private $sDBName = '';

    /**
     * Returns the database name.
     *
     * @return string
     */
    public function getDBName()
    {
        return $this->sDBName;
    }

    /**
     * Computes expected columns in a result set rows.
     *
     * @param array $header   Indexed array by column name as returned in the result set.
     * @param array $expected The values in this array contains the names of the indexes (keys) that should exist in the
     *                        $header array.
     * @return array|false
     * @throws \Oseille\Db\Exception\RuntimeException
     */
    public static function checkColumnNames(array $header, array $expected)
    {
        $iExpectedCount = count($expected);

        // Compare the count.
        $bReturn = (count($header) === $iExpectedCount);

        // Compare the keys
        if ($bReturn) {
            $aIntersect = array_intersect_key(
                $header,
                array_flip($expected)
            );

            $bReturn = (count($aIntersect) === $iExpectedCount);
        }

        return $bReturn;
    }
}
