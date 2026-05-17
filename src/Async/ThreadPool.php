<?php
declare(strict_types=1);

namespace Async;

/**
 * A pool of worker threads for parallel CPU-bound task execution.
 *
 * Workers are created at startup and reused for all submitted tasks,
 * eliminating per-task thread creation overhead.
 *
 * @see https://true-async.github.io/en/docs/components/thread-pool.html
 */
final class ThreadPool
{
    /**
     * Creates a new thread pool and starts all worker threads immediately.
     *
     * @param int $workers Number of worker threads. Must be >= 1.
     * @param int $queueSize Maximum pending task queue size (0 = workers * 4).
     *
     * @throws \ValueError If $workers < 1.
     */
    public function __construct(int $workers, int $queueSize = 0)
    {
    }

    /**
     * Submits a task to the pool and returns a Future for its result.
     *
     * @template T
     * @param callable(mixed...): T $task The callable to execute in a worker thread.
     * @param mixed ...$args Additional arguments passed to the task.
     * @return Future<T> A Future that resolves with the return value or rejects with an exception.
     *
     * @throws \Async\ThreadPoolException If the pool is closed.
     * @throws \Async\ThreadTransferException If the task or arguments cannot be serialized.
     */
    public function submit(callable $task, mixed ...$args): Future
    {
    }

    /**
     * Applies a callable to each array item in parallel using the pool.
     *
     * Blocks the calling coroutine until all tasks complete.
     * Results are returned in the same order as the input.
     *
     * @param array $items The input items.
     * @param callable $task The callable to apply to each item.
     * @return array Results in input order.
     *
     * @throws \Async\ThreadPoolException If the pool is closed.
     * @throws \Throwable Re-throws the first exception from any task.
     */
    public function map(array $items, callable $task): array
    {
    }

    /**
     * Gracefully shuts down the pool.
     *
     * Queued and running tasks complete normally. New submit() calls throw ThreadPoolException.
     *
     * @throws \Async\ThreadPoolException For any subsequent submit() calls.
     */
    public function close(): void
    {
    }

    /**
     * Hard-stops the pool, immediately rejecting queued tasks.
     *
     * Running tasks complete to the end of the current task, but queued tasks
     * are rejected with ThreadPoolException.
     *
     * @throws \Async\ThreadPoolException For any subsequent submit() calls.
     */
    public function cancel(): void
    {
    }

    /**
     * Returns the number of worker threads.
     *
     * @return int The number of workers set in the constructor.
     */
    public function getWorkerCount(): int
    {
    }

    /**
     * Returns the number of tasks waiting in the queue.
     *
     * @return int The number of pending tasks.
     */
    public function getPendingCount(): int
    {
    }

    /**
     * Returns the number of tasks currently executing.
     *
     * @return int The number of running tasks.
     */
    public function getRunningCount(): int
    {
    }

    /**
     * Returns the total number of completed tasks since pool creation.
     *
     * @return int The total completed task count.
     */
    public function getCompletedCount(): int
    {
    }

    /**
     * Checks whether the pool has been shut down.
     *
     * @return bool True if the pool is closed.
     */
    public function isClosed(): bool
    {
    }
}
