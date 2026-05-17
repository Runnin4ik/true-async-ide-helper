<?php
declare(strict_types=1);

namespace Async;

/**
 * @template T
 * @extends Awaitable<T>
 *
 * Interface for objects that change state only once (one-shot).
 *
 * Implemented by: Coroutine, Future, Timeout.
 *
 * @see https://true-async.github.io/en/docs/components/interfaces.html
 */
interface Completable extends Awaitable
{
    /**
     * Cancels the object.
     *
     * @param AsyncCancellation|null $cancellation Optional specific cancellation reason.
     */
    public function cancel(?AsyncCancellation $cancellation = null): void;

    /**
     * Returns true if the object has completed (successfully or with an error).
     *
     * @return bool
     */
    public function isCompleted(): bool;

    /**
     * Returns true if the object was cancelled.
     *
     * @return bool
     */
    public function isCancelled(): bool;
}
