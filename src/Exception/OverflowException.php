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
 * Exception thrown when adding an element to a full container.
 * This represents errors that cannot be detected at compile time.
 */
class OverflowException extends \OverflowException implements ExceptionInterface
{
}
