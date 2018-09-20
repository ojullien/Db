<?php

namespace OseilleTest\Db\Exception;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers \Oseille\Db\Exception\BadFunctionCallException
     * @group specification
     * @expectedException Oseille\Db\Exception\BadFunctionCallException
     */
    public function testBadFunctionCallException()
    {
        throw new \Oseille\Db\Exception\BadFunctionCallException(__METHOD__);
    }

    /**
     * @covers \Oseille\Db\Exception\BadMethodCallException
     * @group specification
     * @expectedException Oseille\Db\Exception\BadMethodCallException
     */
    public function testBadMethodCallException()
    {
        throw new \Oseille\Db\Exception\BadMethodCallException(__METHOD__);
    }

    /**
     * @covers \Oseille\Db\Exception\DomainException
     * @group specification
     * @expectedException Oseille\Db\Exception\DomainException
     */
    public function testDomainException()
    {
        throw new \Oseille\Db\Exception\DomainException(__METHOD__);
    }

    /**
     * @covers \Oseille\Db\Exception\InvalidArgumentException
     * @group specification
     * @expectedException Oseille\Db\Exception\InvalidArgumentException
     */
    public function testInvalidArgumentException()
    {
        throw new \Oseille\Db\Exception\InvalidArgumentException(__METHOD__);
    }

    /**
     * @covers \Oseille\Db\Exception\LengthException
     * @group specification
     * @expectedException Oseille\Db\Exception\LengthException
     */
    public function testLengthException()
    {
        throw new \Oseille\Db\Exception\LengthException(__METHOD__);
    }

    /**
     * @covers \Oseille\Db\Exception\OutOfBoundsException
     * @group specification
     * @expectedException Oseille\Db\Exception\OutOfBoundsException
     */
    public function testOutOfBoundsException()
    {
        throw new \Oseille\Db\Exception\OutOfBoundsException(__METHOD__);
    }

    /**
     * @covers \Oseille\Db\Exception\OutOfRangeException
     * @group specification
     * @expectedException Oseille\Db\Exception\OutOfRangeException
     */
    public function testOutOfRangeException()
    {
        throw new \Oseille\Db\Exception\OutOfRangeException(__METHOD__);
    }

    /**
     * @covers \Oseille\Db\Exception\OverflowException
     * @group specification
     * @expectedException Oseille\Db\Exception\OverflowException
     */
    public function testOverflowException()
    {
        throw new \Oseille\Db\Exception\OverflowException(__METHOD__);
    }

    /**
     * @covers \Oseille\Db\Exception\RuntimeException
     * @group specification
     * @expectedException Oseille\Db\Exception\RuntimeException
     */
    public function testRuntimeException()
    {
        throw new \Oseille\Db\Exception\RuntimeException(__METHOD__);
    }

    /**
     * @covers \Oseille\Db\Exception\UnderflowException
     * @group specification
     * @expectedException Oseille\Db\Exception\UnderflowException
     */
    public function testUnderflowException()
    {
        throw new \Oseille\Db\Exception\UnderflowException(__METHOD__);
    }

    /**
     * @covers \Oseille\Db\Exception\UnexpectedValueException
     * @group specification
     * @expectedException Oseille\Db\Exception\UnexpectedValueException
     */
    public function testUnexpectedValueException()
    {
        throw new \Oseille\Db\Exception\UnexpectedValueException(__METHOD__);
    }
}
