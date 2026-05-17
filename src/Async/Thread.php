<?php
declare(strict_types=1);

namespace Async;

/**
 * @template T
 * @implements Completable<T>
 * Represents a parallel OS thread running PHP code.
 *
 * Threads implement the Completable interface so they can be awaited via await().
 * Each thread has its own isolated PHP runtime.
 *
 * @see https://true-async.github.io/en/docs/components/threads.html
 */
final class Thread implements Completable
{
    /**
     * Checks whether the thread is currently executing.
     *
     * @return bool True if the thread is running, false if it has finished.
     */
    public function isRunning(): bool
    {
    }

    /**
     * Checks whether the thread has finished executing.
     *
     * @return bool True if the thread has completed (success, error, or cancelled).
     */
    public function isCompleted(): bool
    {
    }

    /**
     * Checks whether the thread was cancelled.
     *
     * @return bool True if the thread was cancelled via cancel().
     */
    public function isCancelled(): bool
    {
    }

    /**
     *
     * Returns the result of the thread function.
     *
     * @return T The return value of the thread function, or null if not yet completed.
     */
    public function getResult()
    {
    }

    /**
     * Returns the exception that occurred in the thread.
     *
     * @return RemoteException|null An Async\RemoteException wrapping the thread's exception, or null.
     */
    public function getException(): ?RemoteException
    {
    }

    /**
     * Requests cancellation of the thread.
     *
     * Cancellation is cooperative -- the thread is not interrupted immediately.
     *
     * @param AsyncCancellation|null $cancellation The cancellation reason.
     */
    public function cancel(?AsyncCancellation $cancellation = null): void
    {
    }

    /**
     * Registers a callback to be executed when the thread completes.
     *
     * @param \Closure $callback A function with no parameters.
     */
    public function finally(\Closure $callback): void
    {
    }
}
