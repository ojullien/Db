<?php
/**
 * This file is a part of the Ophp framework
 *
 * @category  Ophp-Db
 * @package   Exception
 * @license MIT <https://github.com/ojullien/ophp-Db/blob/master/LICENSE>
 */
namespace Ophp\Db\Exception;

/**
 * Exception thrown if a value does not match with a set of values.
 * Typically this happens when a function calls another function and expects the return value to be of a certain type or
 * value not including arithmetic or buffer related errors.
 * This represents errors that cannot be detected at compile time.
 */
class UnexpectedValueException extends \UnexpectedValueException implements ExceptionInterface
{
}
