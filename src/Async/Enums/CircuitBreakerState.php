<?php
declare(strict_types=1);

namespace Async;

/**
 * Circuit Breaker states for Async\Pool.
 *
 * @see https://true-async.github.io/en/docs/components/pool.html
 */
enum CircuitBreakerState
{
    case ACTIVE;
    case INACTIVE;
    case RECOVERING;
}
