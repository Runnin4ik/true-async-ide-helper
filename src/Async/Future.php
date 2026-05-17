<?php
declare(strict_types=1);

namespace Async;

/**
 * Represents a future value that will be available at some point.
 *
 * @template T
 * @implements Completable<T>
 *
 * @see https://true-async.github.io/en/docs/components/future.html
 */
final class Future implements Completable
{
    /**
     * @param FutureState $state
     */
    public function __construct(FutureState $state) {}

    /**
     * Creates a future that is already completed with the given value.
     *
     * @template T
     * @param T $value
     * @return Future<T>
     */
    public static function completed(mixed $value = null): Future {}

    /**
     * Creates a future that is already failed with the given throwable.
     *
     * @param \Throwable $throwable
     * @return Future
     */
    public static function failed(\Throwable $throwable): Future {}

    /**
     * Awaits the result of this future.
     *
     * @param Completable|null $cancellation Optional cancellation token.
     * @return T
     */
    public function await(?Completable $cancellation = null) {}

    /**
     * Cancels the future.
     *
     * @param AsyncCancellation|null $cancellation Optional cancellation reason.
     */
    public function cancel(?AsyncCancellation $cancellation = null): void {}

    /**
     * Transforms the result of this future using the given map function.
     *
     * @template R
     * @param callable(T): R $map
     * @return Future<R>
     */
    public function map(callable $map): Future {}

    /**
     * Handles errors from this future using the given catch function.
     *
     * @param callable(\Throwable): T $catch
     * @return Future<T>
     */
    public function catch(callable $catch): Future {}

    /**
     * Registers a callback to be executed when the future completes.
     *
     * @param callable(): void $finally
     * @return Future<T>
     */
    public function finally(callable $finally): Future {}

    /**
     * Returns a future that ignores the result of this future.
     *
     * @return Future
     */
    public function ignore(): Future {}

    /**
     * Returns true if the future has completed.
     *
     * @return bool
     */
    public function isCompleted(): bool {}

    /**
     * Returns true if the future was cancelled.
     *
     * @return bool
     */
    public function isCancelled(): bool {}

    /**
     * Returns information about what this future is currently awaiting on.
     *
     * @return array
     */
    public function getAwaitingInfo(): array {}

    /**
     * Returns the file and line where the future was completed.
     *
     * @return array
     */
    public function getCompletedFileAndLine(): array {}

    /**
     * Returns a human-readable string describing where the future was completed.
     *
     * @return string
     */
    public function getCompletedLocation(): string {}

    /**
     * Returns the file and line where the future was created.
     *
     * @return array
     */
    public function getCreatedFileAndLine(): array {}

    /**
     * Returns a human-readable string describing where the future was created.
     *
     * @return string
     */
    public function getCreatedLocation(): string {}
}
