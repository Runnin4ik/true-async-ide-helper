<?php
declare(strict_types=1);

namespace Async;

/**
 * Interface for providing a Scope for coroutine creation.
 *
 * Used with spawn_with() to control which Scope a coroutine runs in.
 *
 * @see https://true-async.github.io/en/docs/components/interfaces.html
 */
interface ScopeProvider
{
    /**
     * Returns the Scope in which the coroutine should be created.
     *
     * @return Scope|null The scope, or null to use the current scope.
     */
    public function provideScope(): ?Scope;
}
