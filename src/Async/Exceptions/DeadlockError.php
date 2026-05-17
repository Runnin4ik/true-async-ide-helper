<?php
declare(strict_types=1);

namespace Async;

/**
 * Thrown when a deadlock is detected in the async runtime.
 *
 * @see https://true-async.github.io/en/docs/components/exceptions.html
 */
class DeadlockError extends \Error
{
}
