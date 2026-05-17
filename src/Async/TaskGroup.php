<?php
declare(strict_types=1);
namespace Async;
/**
 * A high-level structured concurrency pattern for managing groups of tasks.
 *
 * Guarantees that all tasks will be properly awaited or cancelled.
 * Supports concurrency limits, multiple wait strategies, and result iteration.
 *
 * @implements \IteratorAggregate<int|string, array{0: mixed, 1: ?\Throwable}>
 *
 * @see https://true-async.github.io/en/docs/components/task-group.html
 */
final class TaskGroup implements Awaitable, \Countable, \IteratorAggregate
{
    /**
     * @param int|null $concurrency Maximum number of tasks that may run concurrently. Null means unlimited.
     * @param Scope|null $scope The scope to run the tasks in. When omitted a new scope is created.
     */
    public function __construct(?int $concurrency = null, ?Scope $scope = null)
    {
    }

    /**
     * Spawns a new task with an auto-increment key.
     *
     * @param callable $task The callable to execute as a coroutine.
     * @param mixed ...$args Arguments passed to the callable.
     *
     * @throws AsyncException If the group is sealed or cancelled.
     */
    public function spawn(callable $task, mixed ...$args): void
    {
    }

    /**
     * Spawns a new task with an explicit key.
     *
     * @param string|int $key The key to associate with the task.
     * @param callable $task The callable to execute as a coroutine.
     * @param mixed ...$args Arguments passed to the callable.
     *
     * @throws AsyncException If the group is sealed, cancelled, or the key already exists.
     */
    public function spawnWithKey(string|int $key, callable $task, mixed ...$args): void
    {
    }

    /**
     * Returns a Future that resolves with an array of all task results.
     *
     * @param bool $ignoreErrors When true, failed tasks are excluded from the result instead of throwing.
     *
     * @return Future A Future resolving to an array of results keyed by task key.
     *
     * @throws CompositeException If ignoreErrors is false and any task fails.
     */
    public function all(bool $ignoreErrors = false): Future
    {
    }

    /**
     * Returns a Future that resolves with the first completed result (success or failure).
     *
     * @return Future A Future resolving to the first completed result.
     *
     * @throws AsyncException If the group is empty.
     */
    public function race(): Future
    {
    }

    /**
     * Returns a Future that resolves with the first successful result, ignoring early failures.
     *
     * @return Future A Future resolving to the first successful result.
     *
     * @throws AsyncException If the group is empty.
     * @throws \Error If no task completes successfully before all fail.
     */
    public function any(): Future
    {
    }

    /**
     * Waits for all tasks to complete without returning their results.
     */
    public function awaitCompletion(): void
    {
    }

    /**
     * Prevents new tasks from being added to the group.
     * Repeated calls are a no-op.
     */
    public function seal(): void
    {
    }

    /**
     * Cancels all pending and running tasks.
     *
     * @param AsyncCancellation|null $cancellation Optional cancellation source to use.
     *
     * @throws AsyncException If the group is already cancelled.
     */
    public function cancel(?AsyncCancellation $cancellation = null): void
    {
    }

    /**
     * Cancels all tasks and closes the associated scope.
     */
    public function dispose(): void
    {
    }

    /**
     * Registers a callback to be invoked once the group is fully finished.
     *
     * @param \Closure $callback The callback to run on completion.
     */
    public function finally(\Closure $callback): void
    {
    }

    /**
     * Checks whether all tasks have finished execution.
     *
     * @return bool True if all tasks are complete, false otherwise.
     */
    public function isFinished(): bool
    {
    }

    /**
     * Checks whether the group has been sealed against new tasks.
     *
     * @return bool True if the group is sealed, false otherwise.
     */
    public function isSealed(): bool
    {
    }

    /**
     * Returns the number of tasks in the group.
     *
     * @return int Task count.
     */
    public function count(): int
    {
    }

    /**
     * Returns an array of successful task results keyed by task key.
     *
     * @return array<int|string, mixed> Successful results.
     */
    public function getResults(): array
    {
    }

    /**
     * Returns an array of Throwable instances for tasks that failed.
     *
     * @return array<int|string, \Throwable> Task errors.
     */
    public function getErrors(): array
    {
    }

    /**
     * Marks all current errors as handled so they will not be propagated
     * when the group is disposed.
     */
    public function suppressErrors(): void
    {
    }

    /**
     * Returns an iterator that yields [result, error] pairs for each completed task.
     *
     * Each yielded value is a two-element array: index 0 is the result (mixed, null on failure),
     * index 1 is the Throwable (null on success).
     *
     * @return \Iterator<int|string, array{0: mixed, 1: ?\Throwable}>
     */
    public function getIterator(): \Iterator
    {
    }
}
