<?php
declare(strict_types=1);

namespace Async;

/**
 * Extends ScopeProvider with lifecycle hooks for coroutine spawning.
 *
 * Allows executing code before and after a coroutine is enqueued.
 *
 * @see https://true-async.github.io/en/docs/components/interfaces.html
 */
interface SpawnStrategy extends ScopeProvider
{
    /**
     * Called before the coroutine is added to the scheduler queue.
     *
     * @param Coroutine $coroutine The coroutine about to be enqueued.
     * @param Scope $scope The scope the coroutine belongs to.
     * @return array Additional parameters (currently unused, return empty array).
     */
    public function beforeCoroutineEnqueue(Coroutine $coroutine, Scope $scope): array;

    /**
     * Called after the coroutine is added to the scheduler queue.
     *
     * @param Coroutine $coroutine The coroutine that was enqueued.
     * @param Scope $scope The scope the coroutine belongs to.
     */
    public function afterCoroutineEnqueue(Coroutine $coroutine, Scope $scope): void;
}
