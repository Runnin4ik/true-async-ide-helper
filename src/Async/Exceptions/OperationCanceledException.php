<?php
declare(strict_types=1);

namespace Async;

/**
 * Thrown when a specific operation is cancelled via a CancellationToken.
 *
 * @see https://true-async.github.io/en/docs/components/exceptions.html
 */
class OperationCanceledException extends AsyncCancellation
{
}
