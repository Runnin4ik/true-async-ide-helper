<?php
declare(strict_types=1);

namespace Async;

/**
 * Represents a coroutine (a lightweight async task).
 * @template T
 * @implements Completable<T>
 * @see https://true-async.github.io/en/docs/components/coroutine.html
 */
final class Coroutine implements Completable
{
    /**
     * Returns the unique identifier of this coroutine.
     *
     * @return int
     */
    public function getId(): int {}

    /**
     * Returns a new coroutine handle with increased scheduling priority.
     *
     * @return Coroutine
     */
    public function asHiPriority(): Coroutine {}

    /**
     * Returns the context associated with this coroutine.
     *
     * @return Context
     */
    public function getContext(): Context {}

    /**
     * Returns the result of the coroutine, or null if not completed.
     *
     * @return T
     */
    public function getResult() {}

    /**
     * Returns the exception thrown by the coroutine, or null if none.
     *
     * @return \Throwable|null
     */
    public function getException(): ?\Throwable {}

    /**
     * Returns true if the coroutine has been started.
     *
     * @return bool
     */
    public function isStarted(): bool {}

    /**
     * Returns true if the coroutine is queued for execution.
     *
     * @return bool
     */
    public function isQueued(): bool {}

    /**
     * Returns true if the coroutine is currently running.
     *
     * @return bool
     */
    public function isRunning(): bool {}

    /**
     * Returns true if the coroutine is currently suspended.
     *
     * @return bool
     */
    public function isSuspended(): bool {}

    /**
     * Returns true if the coroutine has completed (successfully or with error).
     *
     * @return bool
     */
    public function isCompleted(): bool {}

    /**
     * Returns true if the coroutine was cancelled.
     *
     * @return bool
     */
    public function isCancelled(): bool {}

    /**
     * Returns true if cancellation of the coroutine has been requested.
     *
     * @return bool
     */
    public function isCancellationRequested(): bool {}

    /**
     * Cancels the coroutine.
     *
     * @param AsyncCancellation|null $cancellation Optional cancellation reason.
     */
    public function cancel(?AsyncCancellation $cancellation = null): void {}

    /**
     * Registers a callback to be executed when the coroutine completes.
     *
     * The callback receives the coroutine object as its only argument.
     *
     * @param \Closure(Coroutine): void $callback
     */
    public function finally(\Closure $callback): void {}

    /**
     * Returns a backtrace of the coroutine's current execution context.
     *
     * @param int $options
     * @param int $limit
     * @return array|null
     */
    public function getTrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT, int $limit = 0): ?array {}

    /**
     * Returns the file and line where the coroutine was spawned.
     *
     * @return array
     */
    public function getSpawnFileAndLine(): array {}

    /**
     * Returns a human-readable string describing where the coroutine was spawned.
     *
     * @return string
     */
    public function getSpawnLocation(): string {}

    /**
     * Returns the file and line where the coroutine was last suspended.
     *
     * @return array
     */
    public function getSuspendFileAndLine(): array {}

    /**
     * Returns a human-readable string describing where the coroutine was last suspended.
     *
     * @return string
     */
    public function getSuspendLocation(): string {}

    /**
     * Returns information about what this coroutine is currently awaiting on.
     *
     * @return array
     */
    public function getAwaitingInfo(): array {}
}
