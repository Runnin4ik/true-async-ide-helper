<?php
declare(strict_types=1);

namespace Async;

/**
 * Launches a function for execution in a new coroutine.
 *
 * Creates and starts a new coroutine. The coroutine will be executed asynchronously.
 * Parameters are passed to the coroutine by value.
 *
 * @template T
 * @param callable(mixed...): T $callback A function or closure to execute in the coroutine.
 * @param mixed ...$args Optional parameters passed to $callback.
 * @return Coroutine<T> An object representing the launched coroutine.
 *
 * @see https://true-async.github.io/en/docs/reference/spawn.html
 */
function spawn(callable $callback, mixed ...$args): Coroutine
{
}

/**
 * Waits for an Awaitable to complete and returns its result.
 *
 * Suspends execution of the current coroutine until the specified $awaitable completes.
 * If the coroutine finished with an exception, await() will rethrow that exception.
 *
 * @template T
 * @param Awaitable<T> $awaitable The object to wait for (Coroutine, Future, TaskGroup, etc).
 * @param Completable|null $cancellation An optional token to cancel the waiting (e.g., timeout()).
 * @return T The result of the asynchronous operation.
 * @throws AsyncCancellation If the coroutine was cancelled.
 * @throws OperationCanceledException If the $cancellation token triggered.
 *
 * @see https://true-async.github.io/en/docs/reference/await.html
 */
function await(Awaitable $awaitable, ?Completable $cancellation = null)
{
}

/**
 * Suspends execution of the current coroutine and yields control to the scheduler.
 *
 * The coroutine's execution will be resumed later when the scheduler decides to run it.
 *
 * @see https://true-async.github.io/en/docs/reference/suspend.html
 */
function suspend(): void
{
}

/**
 * Suspends execution of the current coroutine for a given number of milliseconds.
 *
 * @param int $ms Wait time in milliseconds.
 *
 * @see https://true-async.github.io/en/docs/reference/delay.html
 */
function delay(int $ms): void
{
}

/**
 * Creates a Timeout object that triggers after the specified number of milliseconds.
 *
 * Used as a wait time limiter in await() and other functions.
 *
 * @param int $ms Time in milliseconds. Must be greater than 0.
 * @return Timeout A Timeout object implementing Completable.
 *
 * @see https://true-async.github.io/en/docs/reference/timeout.html
 */
function timeout(int $ms): Timeout
{
}

/**
 * Executes a closure in a non-cancellable mode.
 *
 * Coroutine cancellation is deferred until the closure completes.
 *
 * @template T
 * @param \Closure(): T $closure A closure to execute without interruption by cancellation.
 * @return T The value returned by the closure.
 *
 * @see https://true-async.github.io/en/docs/reference/protect.html
 */
function protect(\Closure $closure)
{
}

/**
 * Concurrently iterates over an iterable, calling a callback for each element.
 *
 * Executes callback for each element of iterable in a separate coroutine.
 * The concurrency parameter allows limiting the number of simultaneously running callbacks.
 *
 * @template TKey
 * @template TValue
 * @param iterable<TKey, TValue> $iterable An array or Traversable to iterate over.
 * @param callable(TValue, TKey): void $callback A function called for each element (value, key).
 * @param int $concurrency Maximum number of simultaneously running callbacks (0 = no limit).
 * @param bool $cancelPending Whether to cancel spawned coroutines after iteration completes.
 *
 * @see https://true-async.github.io/en/docs/reference/iterate.html
 */
function iterate(iterable $iterable, callable $callback, int $concurrency = 0, bool $cancelPending = true): void
{
}

/**
 * Returns the object of the currently executing coroutine.
 *
 * @return Coroutine An Async\Coroutine object representing the current coroutine.
 *
 * @see https://true-async.github.io/en/docs/reference/current-coroutine.html
 */
function current_coroutine(): Coroutine
{
}

/**
 * Returns the Context of the current Scope.
 *
 * @return Context An Async\Context object bound to the current Scope.
 *
 * @see https://true-async.github.io/en/docs/reference/current-context.html
 */
function current_context(): Context
{
}

/**
 * Returns the private context of the current coroutine.
 *
 * @return Context An Async\Context object bound to the current coroutine.
 *
 * @see https://true-async.github.io/en/docs/reference/coroutine-context.html
 */
function coroutine_context(): Context
{
}

/**
 * Returns the global root context, shared across the entire request.
 *
 * @return Context The top-level root context.
 *
 * @see https://true-async.github.io/en/docs/reference/root-context.html
 */
function root_context(): Context
{
}

/**
 * Returns an array of all active coroutines.
 *
 * @return Coroutine[] An array of Async\Coroutine objects.
 *
 * @see https://true-async.github.io/en/docs/reference/get-coroutines.html
 */
function get_coroutines(): array
{
}

/**
 * Waits for an OS signal.
 *
 * Returns a Future that resolves with a Signal value when the signal is received.
 *
 * @param Signal $signal The expected OS signal.
 * @param Completable|null $cancellation An optional cancellation token.
 * @return Future<Signal> A Future that resolves with the Signal enum value.
 *
 * @see https://true-async.github.io/en/docs/reference/signal.html
 */
function signal(Signal $signal, ?Completable $cancellation = null): Future
{
}

/**
 * Initiates a graceful scheduler shutdown.
 *
 * All active coroutines are cancelled, and the application continues
 * running until they complete naturally.
 *
 * @param AsyncCancellation|null $cancellationError Optional cancellation reason.
 *
 * @see https://true-async.github.io/en/docs/reference/graceful-shutdown.html
 */
function graceful_shutdown(?AsyncCancellation $cancellationError = null): void
{
}

/**
 * Launches a coroutine in a specified Scope or via a ScopeProvider.
 *
 * @template T
 * @param ScopeProvider $provider An object implementing ScopeProvider (typically Scope).
     * @param callable(mixed...): T $task A function or closure to execute in the coroutine.
     * @phpstan-param \Closure(mixed...): T $task
     * @param mixed ...$args Optional parameters passed to $task.
 * @return Coroutine<T> An object representing the launched coroutine.
 *
 * @see https://true-async.github.io/en/docs/reference/spawn-with.html
 */
function spawn_with(ScopeProvider $provider, callable $task, mixed ...$args): Coroutine
{
}

/**
 * Runs a closure in a separate parallel OS thread.
 *
 * Returns an Async\Thread that implements Completable.
 *
 * @template T
     * @param \Closure(): T $task The closure executed in the receiver thread.
 * @param bool $inherit Reserved for future use.
 * @param \Closure|null $bootloader Optional closure executed first in the receiver thread.
 * @return Thread<T> An Async\Thread object representing the running thread.
 *
 * @see https://true-async.github.io/en/docs/reference/spawn-thread.html
 */
function spawn_thread(\Closure $task, bool $inherit = true, ?\Closure $bootloader = null): Thread
{
}

/**
 * Waits for all tasks to complete, collecting results and errors separately.
 *
 * Does not throw an exception when individual tasks fail.
 *
 * @param iterable $triggers An iterable collection of Completable objects.
 * @param Awaitable|null $cancellation An optional Awaitable to cancel the wait.
 * @param bool $preserveKeyOrder If true, results are in input key order.
 * @param bool $fillNull If true, null is placed for failed tasks.
 * @return array{0: array<array-key, mixed>, 1: array<array-key, \Throwable>} An array of [$results, $errors].
 *
 * @see https://true-async.github.io/en/docs/reference/await-all.html
 */
function await_all(
    iterable $triggers,
    ?Awaitable $cancellation = null,
    bool $preserveKeyOrder = true,
    bool $fillNull = false
): array
{
}

/**
 * Waits for all tasks to complete successfully. Throws on first error.
 *
 * @param iterable $triggers An iterable collection of Completable objects.
 * @param Awaitable|null $cancellation An optional Awaitable to cancel the wait.
 * @param bool $preserveKeyOrder If true, results are in input key order.
 * @return array An array of results from all tasks.
 *
 * @see https://true-async.github.io/en/docs/reference/await-all-or-fail.html
 */
function await_all_or_fail(
    iterable $triggers,
    ?Awaitable $cancellation = null,
    bool $preserveKeyOrder = true
): array
{
}

/**
 * Waits for the first task to complete. Throws if the first completed task failed.
 *
 * @param iterable $triggers An iterable collection of Completable objects.
 * @param Awaitable|null $cancellation An optional Awaitable to cancel the wait.
 * @return mixed The result of the first completed task.
 *
 * @see https://true-async.github.io/en/docs/reference/await-any-or-fail.html
 */
function await_any_or_fail(
    iterable $triggers,
    ?Awaitable $cancellation = null
): mixed
{
}

/**
 * Waits for the first N tasks to complete, collecting results and errors separately.
 *
 * @param iterable $triggers An iterable collection of Completable objects.
 * @param int $count The number of results to wait for.
 * @param Awaitable|null $cancellation An optional Awaitable to cancel the wait.
 * @param bool $preserveKeyOrder If true, result keys correspond to input keys.
 * @param bool $fillNull If true, null is placed for failed tasks.
 * @return array{0: array<array-key, mixed>, 1: array<array-key, \Throwable>} An array of [$results, $errors].
 *
 * @see https://true-async.github.io/en/docs/reference/await-any-of.html
 */
function await_any_of(
    iterable $triggers,
    int $count,
    ?Awaitable $cancellation = null,
    bool $preserveKeyOrder = true,
    bool $fillNull = false
): array
{
}

/**
 * Waits for the first N tasks to complete successfully. Throws if one of the first N fails.
 *
 * @param iterable $triggers An iterable collection of Completable objects.
 * @param int $count The number of successful results to wait for.
 * @param Awaitable|null $cancellation An optional Awaitable to cancel the wait.
 * @param bool $preserveKeyOrder If true, result keys correspond to input keys.
 * @return array An array of $count successful results.
 *
 * @see https://true-async.github.io/en/docs/reference/await-any-of-or-fail.html
 */
function await_any_of_or_fail(
    iterable $triggers,
    int $count,
    ?Awaitable $cancellation = null,
    bool $preserveKeyOrder = true
): array
{
}

/**
 * Waits for the first successfully completed task, ignoring errors from others.
 *
 * @param iterable $triggers An iterable collection of Completable objects.
 * @param Awaitable|null $cancellation An optional Awaitable to cancel the wait.
 * @return array{0: mixed, 1: array<array-key, \Throwable>} An array of [$result, $errors].
 *
 * @see https://true-async.github.io/en/docs/reference/await-first-success.html
 */
function await_first_success(
    iterable $triggers,
    ?Awaitable $cancellation = null
): array
{
}
