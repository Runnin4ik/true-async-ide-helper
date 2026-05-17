<?php
declare(strict_types=1);

namespace Async;

/**
 * Thrown when an operation exceeds its allotted timeout.
 *
 * @see https://true-async.github.io/en/docs/components/exceptions.html
 */
class TimeoutException extends \Exception
{
}
