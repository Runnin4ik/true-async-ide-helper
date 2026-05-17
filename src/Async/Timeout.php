<?php
declare(strict_types=1);

namespace Async;

/**
 * Represents a timeout that completes after a specified duration.
 *
 * @see https://true-async.github.io/en/docs/components/timeout.html
 */
final class Timeout implements Completable
{
    /**
     * Cancels the timeout.
     *
     * @param AsyncCancellation|null $cancellation Optional cancellation reason.
     */
    public function cancel(?AsyncCancellation $cancellation = null): void {}

    /**
     * Returns true if the timeout has completed (expired or cancelled).
     *
     * @return bool
     */
    public function isCompleted(): bool {}

    /**
     * Returns true if the timeout was cancelled.
     *
     * @return bool
     */
    public function isCancelled(): bool {}
}
