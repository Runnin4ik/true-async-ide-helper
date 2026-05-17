<?php
declare(strict_types=1);

namespace Async;

/**
 * A context for storing and propagating key-value pairs across coroutines.
 *
 * Contexts are immutable-like containers that can be used to pass
 * request-scoped data (e.g. request IDs, authentication tokens) through
 * asynchronous call chains.
 *
 * @see https://true-async.github.io/en/docs/components/context.html
 */
final class Context
{
    /**
     * Sets a value in the context.
     *
     * @param string|object $key The key to set.
     * @param mixed $value The value to set.
     * @param bool $replace Whether to replace an existing value.
     * @return Context
     */
    public function set(string|object $key, mixed $value, bool $replace = false): Context {}

    /**
     * Gets a value from the context, searching up the hierarchy.
     *
     * Unlike find(), this method throws an exception if the key is not found.
     *
     * @param string|object $key The key to look up.
     * @return mixed
     * @throws ContextException If the key is not found in any context level.
     */
    public function get(string|object $key): mixed {}

    /**
     * Finds a value from the context or any parent context.
     *
     * @param string|object $key The key to look up.
     * @return mixed
     */
    public function find(string|object $key): mixed {}

    /**
     * Gets a value from the local context only.
     *
     * Unlike findLocal(), this method throws an exception if the key is not found.
     *
     * @param string|object $key The key to look up.
     * @return mixed
     * @throws ContextException If the key is not found in the local context.
     */
    public function getLocal(string|object $key): mixed {}

    /**
     * Finds a value from the local context or any parent context.
     *
     * @param string|object $key The key to look up.
     * @return mixed
     */
    public function findLocal(string|object $key): mixed {}

    /**
     * Checks if a key exists in the context.
     *
     * @param string|object $key The key to check.
     * @return bool
     */
    public function has(string|object $key): bool {}

    /**
     * Checks if a key exists in the local context only.
     *
     * @param string|object $key The key to check.
     * @return bool
     */
    public function hasLocal(string|object $key): bool {}

    /**
     * Unsets a value from the context.
     *
     * @param string|object $key The key to unset.
     * @return Context
     */
    public function unset(string|object $key): Context {}
}
