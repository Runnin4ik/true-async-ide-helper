<?php
declare(strict_types=1);

namespace Async;

/**
 * Manages the lifecycle of a group of coroutines.
 *
 * Scopes provide structured concurrency by ensuring that all coroutines
 * spawned within a scope are completed, cancelled, or otherwise handled
 * before the scope itself completes.
 *
 * @see https://true-async.github.io/en/docs/components/scope.html
 */
final class Scope implements ScopeProvider
{
    /**
     * Creates a new scope.
     */
    public function __construct() {}

    /**
     * Creates a new scope that inherits from an optional parent scope.
     *
     * @param Scope|null $parentScope The parent scope to inherit from.
     * @return Scope
     */
    public static function inherit(?Scope $parentScope = null): Scope {}

    /**
     * Spawns a new coroutine in this scope.
     *
     * @param \Closure $callable The callable to run as a coroutine.
     * @param mixed ...$params Parameters to pass to the callable.
     * @return Coroutine
     */
    public function spawn(\Closure $callable, mixed ...$params): Coroutine {}

    /**
     * Awaits the completion of the given awaitable.
     *
     * @param Awaitable $cancellation The awaitable to wait for.
     */
    public function awaitCompletion(Awaitable $cancellation): void {}

    /**
     * Awaits completion or cancellation, optionally handling errors.
     *
     * @param callable|null $errorHandler Optional error handler.
     * @param Awaitable|null $cancellation Optional cancellation awaitable.
     */
    public function awaitAfterCancellation(?callable $errorHandler = null, ?Awaitable $cancellation = null): void {}

    /**
     * Cancels the scope and all coroutines within it.
     *
     * @param AsyncCancellation|null $cancellationError Optional cancellation reason.
     */
    public function cancel(?AsyncCancellation $cancellationError = null): void {}

    /**
     * Disposes the scope, cancelling all running coroutines.
     */
    public function dispose(): void {}

    /**
     * Safely disposes the scope, catching and handling any exceptions.
     */
    public function disposeSafely(): void {}

    /**
     * Disposes the scope after a timeout.
     *
     * @param int $timeout Timeout in milliseconds.
     */
    public function disposeAfterTimeout(int $timeout): void {}

    /**
     * Returns a version of this scope that does not throw on disposal.
     *
     * @return Scope
     */
    public function asNotSafely(): Scope {}

    /**
     * Registers a callback to be executed when the scope completes.
     *
     * @param \Closure $callback The callback to execute.
     */
    public function finally(\Closure $callback): void {}

    /**
     * Returns true if the scope has been cancelled.
     *
     * @return bool
     */
    public function isCancelled(): bool {}

    /**
     * Returns true if the scope is closed.
     *
     * @return bool
     */
    public function isClosed(): bool {}

    /**
     * Returns true if the scope has finished all coroutines.
     *
     * @return bool
     */
    public function isFinished(): bool {}

    /**
     * Returns the child scopes of this scope.
     *
     * @return array
     */
    public function getChildScopes(): array {}

    /**
     * Sets an exception handler for exceptions thrown in this scope.
     *
     * @param callable(\Throwable): void $exceptionHandler The exception handler.
     */
    public function setExceptionHandler(callable $exceptionHandler): void {}

    /**
     * Sets an exception handler for exceptions thrown in child scopes.
     *
     * @param callable(\Throwable): void $exceptionHandler The exception handler.
     */
    public function setChildScopeExceptionHandler(callable $exceptionHandler): void {}

    /**
     * Returns the scope for use with spawn_with.
     *
     * @return Scope
     */
    public function provideScope(): Scope {}
}
