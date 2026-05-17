<?php
declare(strict_types=1);
namespace Async;
/**
 * A dynamic task set with automatic result cleanup after delivery.
 *
 * Unlike TaskGroup, TaskSet automatically removes completed tasks
 * at the moment of result delivery via joinNext(), joinAny(), joinAll(), or foreach.
 *
 * @implements \IteratorAggregate<int|string, array{0: mixed, 1: ?\Throwable}>
 *
 * @see https://true-async.github.io/en/docs/components/task-set.html
 */
final class TaskSet implements Awaitable, \Countable, \IteratorAggregate
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
     * @throws AsyncException If the set is sealed or cancelled.
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
     * @throws AsyncException If the set is sealed, cancelled, or the key already exists.
     */
    public function spawnWithKey(string|int $key, callable $task, mixed ...$args): void
    {
    }

    /**
     * Returns a Future that resolves with the next completed result,
     * removing it from the set after delivery.
     *
     * @return Future A Future resolving to the next completed result.
     *
     * @throws AsyncException If the set is empty.
     */
    public function joinNext(): Future
    {
    }

    /**
     * Returns a Future that resolves with the next successful result,
     * removing it from the set after delivery.
     *
     * @return Future A Future resolving to the next successful result.
     *
     * @throws AsyncException If the set is empty.
     * @throws CompositeException If all tasks failed.
     * @throws \Error If no task completes successfully before all fail.
     */
    public function joinAny(): Future
    {
    }

    /**
     * Returns a Future that resolves with an array of all remaining results,
     * removing each from the set after delivery.
     *
     * @param bool $ignoreErrors When true, failed tasks are excluded from the result instead of throwing.
     *
     * @return Future A Future resolving to an array of results keyed by task key.
     *
     * @throws CompositeException If ignoreErrors is false and any task fails.
     */
    public function joinAll(bool $ignoreErrors = false): Future
    {
    }

    /**
     * Prevents new tasks from being added to the set.
     *
     * @throws AsyncException If the set is already sealed.
     */
    public function seal(): void
    {
    }

    /**
     * Cancels all pending and running tasks.
     *
     * @param AsyncCancellation|null $cancellation Optional cancellation source to use.
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
     * Registers a callback to be invoked once the set is fully finished.
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
     * Checks whether the set has been sealed against new tasks.
     *
     * @return bool True if the set is sealed, false otherwise.
     */
    public function isSealed(): bool
    {
    }

    /**
     * Returns the number of tasks in the set.
     *
     * @return int Task count.
     */
    public function count(): int
    {
    }

    /**
     * Waits for all tasks to complete without returning their results.
     *
     * @throws AsyncException If the set is not sealed.
     */
    public function awaitCompletion(): void
    {
    }

    /**
     * Returns an iterator that yields [result, error] pairs for each completed task,
     * removing each from the set after delivery.
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
