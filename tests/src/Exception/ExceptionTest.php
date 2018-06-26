<?php

namespace OphpTest\Db\Exception;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers \Ophp\Db\Exception\BadFunctionCallException
     * @group specification
     * @expectedException Ophp\Db\Exception\BadFunctionCallException
     */
    public function testBadFunctionCallException()
    {
        throw new \Ophp\Db\Exception\BadFunctionCallException(__METHOD__);
    }

    /**
     * @covers \Ophp\Db\Exception\BadMethodCallException
     * @group specification
     * @expectedException Ophp\Db\Exception\BadMethodCallException
     */
    public function testBadMethodCallException()
    {
        throw new \Ophp\Db\Exception\BadMethodCallException(__METHOD__);
    }

    /**
     * @covers \Ophp\Db\Exception\DomainException
     * @group specification
     * @expectedException Ophp\Db\Exception\DomainException
     */
    public function testDomainException()
    {
        throw new \Ophp\Db\Exception\DomainException(__METHOD__);
    }

    /**
     * @covers \Ophp\Db\Exception\InvalidArgumentException
     * @group specification
     * @expectedException Ophp\Db\Exception\InvalidArgumentException
     */
    public function testInvalidArgumentException()
    {
        throw new \Ophp\Db\Exception\InvalidArgumentException(__METHOD__);
    }

    /**
     * @covers \Ophp\Db\Exception\LengthException
     * @group specification
     * @expectedException Ophp\Db\Exception\LengthException
     */
    public function testLengthException()
    {
        throw new \Ophp\Db\Exception\LengthException(__METHOD__);
    }

    /**
     * @covers \Ophp\Db\Exception\OutOfBoundsException
     * @group specification
     * @expectedException Ophp\Db\Exception\OutOfBoundsException
     */
    public function testOutOfBoundsException()
    {
        throw new \Ophp\Db\Exception\OutOfBoundsException(__METHOD__);
    }

    /**
     * @covers \Ophp\Db\Exception\OutOfRangeException
     * @group specification
     * @expectedException Ophp\Db\Exception\OutOfRangeException
     */
    public function testOutOfRangeException()
    {
        throw new \Ophp\Db\Exception\OutOfRangeException(__METHOD__);
    }

    /**
     * @covers \Ophp\Db\Exception\OverflowException
     * @group specification
     * @expectedException Ophp\Db\Exception\OverflowException
     */
    public function testOverflowException()
    {
        throw new \Ophp\Db\Exception\OverflowException(__METHOD__);
    }

    /**
     * @covers \Ophp\Db\Exception\RuntimeException
     * @group specification
     * @expectedException Ophp\Db\Exception\RuntimeException
     */
    public function testRuntimeException()
    {
        throw new \Ophp\Db\Exception\RuntimeException(__METHOD__);
    }

    /**
     * @covers \Ophp\Db\Exception\UnderflowException
     * @group specification
     * @expectedException Ophp\Db\Exception\UnderflowException
     */
    public function testUnderflowException()
    {
        throw new \Ophp\Db\Exception\UnderflowException(__METHOD__);
    }

    /**
     * @covers \Ophp\Db\Exception\UnexpectedValueException
     * @group specification
     * @expectedException Ophp\Db\Exception\UnexpectedValueException
     */
    public function testUnexpectedValueException()
    {
        throw new \Ophp\Db\Exception\UnexpectedValueException(__METHOD__);
    }

}
