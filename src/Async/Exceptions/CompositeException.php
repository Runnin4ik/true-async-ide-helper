<?php
declare(strict_types=1);

namespace Async;

/**
 * Thrown to aggregate multiple exceptions that occurred during an operation.
 *
 * @see https://true-async.github.io/en/docs/components/exceptions.html
 */
class CompositeException extends \Exception
{
    /** @var \Throwable[] */
    private array $exceptions = [];

    /**
     * Adds an exception to the collection.
     *
     * @param \Throwable $exception The exception to add.
     */
    public function addException(\Throwable $exception): void
    {
        $this->exceptions[] = $exception;
    }

    /**
     * Returns all collected exceptions.
     *
     * @return \Throwable[]
     */
    public function getExceptions(): array
    {
        return $this->exceptions;
    }
}
