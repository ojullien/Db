<?php

namespace OseilleTest\Db\Driver\Parameters;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-04-18 at 21:21:13.
 */
class CredentialsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Instance of the options class.
     * @var \Oseille\Db\Driver\Parameters\Credentials
     */
    protected $pObject = null;

    /**
     *
     */
    public function setUp()
    {
        $this->pObject = new \Oseille\Db\Driver\Parameters\Credentials();
    }

    /**
     *
     */
    public function tearDown()
    {
        $this->pObject = null;
    }

    /**
     * @covers \Oseille\Db\Driver\Parameters\Credentials
     * @group specification
     * @expectedException \InvalidArgumentException
     */
    public function testSetCredentialPathNotProvided()
    {
        $this->pObject->setCredential(APPLICATION_PATH_CONFIG . \DIRECTORY_SEPARATOR . 'doesnotexist.php', 'super');
    }

    /**
     * @covers \Oseille\Db\Driver\Parameters\Credentials
     * @group specification
     * @expectedException \InvalidArgumentException
     */
    public function testSetCredentialUserNotProvided()
    {
        $this->pObject->setCredential(APPLICATION_PATH_CONFIG . \DIRECTORY_SEPARATOR . 'db.credential.php', 'doesnotexist');
    }

    /**
     * @covers \Oseille\Db\Driver\Parameters\Credentials
     * @group specification
     * @expectedException \InvalidArgumentException
     */
    public function testSetCredentialUsernameNotProvided()
    {
        $this->pObject->setCredential(APPLICATION_PATH_CONFIG . \DIRECTORY_SEPARATOR . 'db.credential.php', 'err01');
    }

    /**
     * @covers \Oseille\Db\Driver\Parameters\Credentials
     * @group specification
     * @expectedException \InvalidArgumentException
     */
    public function testSetCredentialPasswordNotProvided()
    {
        $this->pObject->setCredential(APPLICATION_PATH_CONFIG . \DIRECTORY_SEPARATOR . 'db.credential.php', 'err02');
    }

    /**
     * @covers \Oseille\Db\Driver\Parameters\Credentials
     * @group specification
     * @expectedException \InvalidArgumentException
     */
    public function testSetCredentialUsernameNotValid()
    {
        $this->pObject->setCredential(APPLICATION_PATH_CONFIG . \DIRECTORY_SEPARATOR . 'db.credential.php', 'err03');
    }

    /**
     * @covers \Oseille\Db\Driver\Parameters\Credentials
     * @group specification
     * @expectedException \InvalidArgumentException
     */
    public function testSetCredentialPasswordNotValid()
    {
        $this->pObject->setCredential(APPLICATION_PATH_CONFIG . \DIRECTORY_SEPARATOR . 'db.credential.php', 'err04');
    }

    /**
     * @covers \Oseille\Db\Driver\Parameters\Credentials
     * @group specification
     */
    public function testGetUserName()
    {
        $path       = APPLICATION_PATH_CONFIG . \DIRECTORY_SEPARATOR . 'db.credential.php';
        $credential = include realpath($path);
        $this->assertSame($credential['test']['username'], $this->pObject->setCredential($path, 'test')->getUserName());
    }

    /**
     * @covers \Oseille\Db\Driver\Parameters\Credentials
     * @group specification
     */
    public function testGetPassword()
    {
        $path       = APPLICATION_PATH_CONFIG . \DIRECTORY_SEPARATOR . 'db.credential.php';
        $credential = include realpath($path);
        $this->assertSame($credential['test']['password'], $this->pObject->setCredential($path, 'test')->getPassword());
    }

    /**
     * @covers \Oseille\Db\Driver\Parameters\Credentials
     * @group specification
     */
    public function testValid()
    {
        $path = APPLICATION_PATH_CONFIG . \DIRECTORY_SEPARATOR . 'db.credential.php';
        $this->assertFalse($this->pObject->valid());
        $this->assertTrue($this->pObject->setCredential($path, 'test')->valid());
    }
}
