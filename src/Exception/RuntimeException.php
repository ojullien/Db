<?php
/**
 * This file is a part of the Oseille framework
 *
 * @package Oseille\Db\Exception
 */
namespace Oseille\Db\Exception;

/**
 * Exception thrown if an error which can only be found on runtime occurs.
 */
class RuntimeException extends \RuntimeException implements ExceptionInterface
{
}
