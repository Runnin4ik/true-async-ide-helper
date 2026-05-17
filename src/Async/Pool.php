<?php
declare(strict_types=1);

namespace Async;

/**
 * Universal resource pool for coroutines.
 *
 * Manages a set of reusable objects (connections, clients, etc.),
 * automatically creating and destroying them as needed.
 * Implements the Circuit Breaker pattern for service availability management.
 *
 * @template TResource
 *
 * @see https://true-async.github.io/en/docs/components/pool.html
 */
final class Pool implements CircuitBreaker
{
    /**
     * @param callable(): TResource $factory Creates a new resource instance.
     * @param callable(TResource): void|null $destructor Destroys a resource when it is removed from the pool.
     * @param callable(TResource): bool|null $healthcheck Pings a resource to verify it is still alive.
     * @param callable(): void|null $beforeAcquire Hook invoked before a resource is acquired.
     * @param callable(): void|null $beforeRelease Hook invoked before a resource is returned to the pool.
     * @param int $min Minimum number of idle resources to keep in the pool.
     * @param int $max Maximum number of resources the pool may create.
     * @param int $healthcheckInterval Interval in milliseconds between health checks (0 disables).
     *
     * @throws \ValueError If any parameter is invalid.
     */
    public function __construct(
        callable $factory,
        ?callable $destructor = null,
        ?callable $healthcheck = null,
        ?callable $beforeAcquire = null,
        ?callable $beforeRelease = null,
        int $min = 0,
        int $max = 10,
        int $healthcheckInterval = 0
    ) {
    }

    /**
     * Acquires a resource from the pool, blocking until one becomes available.
     *
     * @param int $timeout Maximum time to wait in milliseconds. 0 means wait indefinitely.
     *
     * @return TResource An available resource from the pool.
     *
     * @throws PoolException If the timeout is exceeded or the pool is closed.
     */
    public function acquire(int $timeout = 0)
    {
    }

    /**
     * Attempts to acquire a resource without blocking.
     *
     * @return TResource|null An available resource, or null if none is idle.
     *
     * @throws PoolException If the pool is closed.
     */
    public function tryAcquire()
    {
    }

    /**
     * Returns a resource to the pool so it can be reused.
     *
     * @param TResource $resource The resource to release back into the pool.
     *
     * @throws PoolException If the pool is closed or the resource is invalid.
     */
    public function release(mixed $resource): void
    {
    }

    /**
     * Closes the pool, destroying all idle resources and waking any
     * suspended waiters with a PoolException.
     *
     * @throws PoolException For any coroutines waiting in acquire().
     */
    public function close(): void
    {
    }

    /**
     * Returns the total number of resources in the pool (idle + active).
     *
     * @return int Total resource count.
     */
    public function count(): int
    {
    }

    /**
     * Returns the number of idle (free) resources in the pool.
     *
     * @return int Idle resource count.
     */
    public function idleCount(): int
    {
    }

    /**
     * Returns the number of resources currently in use.
     *
     * @return int Active resource count.
     */
    public function activeCount(): int
    {
    }

    /**
     * Checks whether the pool has been closed.
     *
     * @return bool True if the pool is closed, false otherwise.
     */
    public function isClosed(): bool
    {
    }

    /**
     * Returns the current state of the circuit breaker.
     *
     * @return CircuitBreakerState The current circuit breaker state.
     */
    public function getState(): CircuitBreakerState
    {
    }

    /**
     * Manually activates the circuit breaker (transitions to the active state).
     */
    public function activate(): void
    {
    }

    /**
     * Manually deactivates the circuit breaker (transitions to the deactivated state).
     */
    public function deactivate(): void
    {
    }

    /**
     * Manually recovers the circuit breaker (transitions to the recovered state).
     */
    public function recover(): void
    {
    }

    /**
     * Sets the circuit breaker strategy. Pass null to disable the circuit breaker.
     *
     * @param CircuitBreakerStrategy|null $strategy The strategy to use, or null to disable.
     */
    public function setCircuitBreakerStrategy(?CircuitBreakerStrategy $strategy): void
    {
    }
}
