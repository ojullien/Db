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
 * Exception thrown when an illegal index was requested.
 * This represents error in the program logic and should be detected at compile time.
 * This kind of exceptions should directly lead to a fix in the code.
 */
class OutOfRangeException extends \OutOfRangeException implements ExceptionInterface
{
}
