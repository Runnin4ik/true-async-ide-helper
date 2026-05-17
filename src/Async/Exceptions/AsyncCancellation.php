<?php
declare(strict_types=1);

namespace Async;

/**
 * Thrown when a coroutine is cancelled.
 *
 * Extends \Cancellation so regular catch (\Exception) and catch (\Error)
 * blocks do not accidentally catch cancellation.
 *
 * @see https://true-async.github.io/en/docs/components/exceptions.html
 */
class AsyncCancellation extends \Cancellation
{
}
