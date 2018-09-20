<?php

/**
 * This file is a part of the Oseille framework
 *
 * @package Oseille\Db\Driver\Parameters
 */
namespace Oseille\Db\Driver\Parameters;

/**
 * This class is the driver's options.
 */
final class Credentials
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

    /** Credential section
     * ******************* */

    /**
     * User name.
     *
     * @var string
     */
    private $sUserName = '';

    /**
     * Password.
     *
     * @var string
     */
    private $sPassword = '';

    /**
     * Sets the user credential.
     *
     * @param string $path Path to the credentials file.
     * @param string $user User.
     * @return \Oseille\Db\Driver\Parameters\Credentials
     * @throws \Oseille\Db\Exception\InvalidArgumentException
     */
    public function setCredential($path, $user)
    {
        // Filter credentials file
        $sPath = is_string($path) ? realpath(trim($path)) : '';
        if ((strlen($sPath) === 0) || (! is_file($sPath))) {
            throw new \Oseille\Db\Exception\InvalidArgumentException('The file path provided is not valid.');
        }
        $aCredentials = include $sPath;

        // Filter user key
        $sUser = is_string($user) ? trim($user) : '';
        if ((strlen($sUser) === 0) || (! isset($aCredentials[$user])) || (! is_array($aCredentials[$user]))) {
            throw new \Oseille\Db\Exception\InvalidArgumentException('The user provided is not valid.');
        }

        // Filter the credentials
        $aCredential = array_intersect_key($aCredentials[$sUser], ['username' => '1', 'password' => '1']);
        if (count($aCredential) != 2) {
            throw new \Oseille\Db\Exception\InvalidArgumentException('The credentials provided are not valid.');
        }

        $this->sUserName = is_string($aCredential['username']) ? trim($aCredential['username']) : '';
        $this->sPassword = is_string($aCredential['password']) ? trim($aCredential['password']) : '';

        if ((strlen($this->sUserName) === 0) || (strlen($this->sPassword) === 0)) {
            throw new \Oseille\Db\Exception\InvalidArgumentException('The credentials provided are not valid.');
        }

        return $this;
    }

    /**
     * Returns user name.
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->sUserName;
    }

    /**
     * Returns password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->sPassword;
    }

    /**
     * Returns true if all the credentials are set.
     *
     * @return bool
     */
    public function valid()
    {
        return ((\strlen($this->sPassword) > 0) && (\strlen($this->sUserName) > 0));
    }
}
