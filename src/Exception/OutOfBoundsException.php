<?php
/**
 * This file is a part of the Oseille framework
 *
 * @package Oseille\Db\Exception
 */
namespace Oseille\Db\Exception;

/**
 * Exception thrown if a value is not a valid key.
 * This represents errors that cannot be detected at compile time.
 */
class OutOfBoundsException extends \OutOfBoundsException implements ExceptionInterface
{
}
