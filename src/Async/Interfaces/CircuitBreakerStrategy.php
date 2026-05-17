<?php
declare(strict_types=1);

namespace Async;

/**
 * Strategy interface for automatic Circuit Breaker state transitions.
 *
 * @see https://true-async.github.io/en/docs/components/pool.html
 */
interface CircuitBreakerStrategy
{
    /**
     * Called on successful resource release.
     *
     * @param mixed $source The pool (or other source) that can be activated/deactivated.
     */
    public function reportSuccess(mixed $source): void;

    /**
     * Called when a resource is damaged (beforeRelease returned false).
     *
     * @param mixed $source The pool (or other source).
     * @param \Throwable $error The error that caused the failure.
     */
    public function reportFailure(mixed $source, \Throwable $error): void;
}
