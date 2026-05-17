<?php
declare(strict_types=1);

namespace Async;

/**
 * Represents the mutable state backing a Future.
 *
 * @template T
 *
 * @see https://true-async.github.io/en/docs/components/future.html
 */
final class FutureState
{
    /**
     * Completes the associated future with the given value.
     *
     * @param T $value
     *
     * @throws AsyncException If the FutureState is already completed.
     */
    public function complete(mixed $value): void {}

    /**
     * Fails the associated future with the given throwable.
     *
     * @param \Throwable $throwable
     *
     * @throws AsyncException If the FutureState is already completed.
     */
    public function error(\Throwable $throwable): void {}
}
