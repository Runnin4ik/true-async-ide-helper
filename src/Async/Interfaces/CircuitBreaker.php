<?php
declare(strict_types=1);

namespace Async;

/**
 * Interface for the Circuit Breaker pattern implemented by Async\Pool.
 *
 * @see https://true-async.github.io/en/docs/components/pool.html
 */
interface CircuitBreaker
{
    /**
     * Returns the current Circuit Breaker state.
     *
     * @return CircuitBreakerState
     */
    public function getState(): CircuitBreakerState;

    /**
     * Forcefully transitions the pool to the ACTIVE state.
     */
    public function activate(): void;

    /**
     * Forcefully transitions the pool to the INACTIVE state.
     */
    public function deactivate(): void;

    /**
     * Transitions the pool to the RECOVERING state.
     */
    public function recover(): void;
}
