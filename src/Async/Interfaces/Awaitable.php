<?php
declare(strict_types=1);

namespace Async;

/**
 * @template T
 *
 * Marker interface for all objects that can be awaited.
 *
 * Contains no methods -- serves for type-checking.
 * Awaitable objects can change states multiple times (multiple-shot).
 *
 * @see https://true-async.github.io/en/docs/components/interfaces.html
 */
interface Awaitable
{
}
