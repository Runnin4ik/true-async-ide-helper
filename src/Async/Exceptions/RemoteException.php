<?php
declare(strict_types=1);

namespace Async;

/**
 * Thrown when a remote procedure call encounters an error on the remote side.
 *
 * @see https://true-async.github.io/en/docs/components/exceptions.html
 */
class RemoteException extends AsyncException
{
    private string $remoteClass;
    private ?\Throwable $remoteException = null;

    /**
     * @param string $remoteClass The fully qualified class name of the original exception.
     * @param string $message The exception message.
     * @param \Throwable|null $previous The original exception, if available.
     */
    public function __construct(
        string $remoteClass = '',
        string $message = '',
        ?\Throwable $previous = null
    ) {
        $this->remoteClass = $remoteClass;
        $this->remoteException = $previous;
        parent::__construct($message, 0, $previous);
    }

    /**
     * Returns the fully qualified class name of the original exception.
     *
     * @return string The original exception class name.
     */
    public function getRemoteClass(): string
    {
        return $this->remoteClass;
    }

    /**
     * Returns the original exception object, if it can be loaded in the current thread.
     *
     * @return \Throwable|null The original exception, or null if unavailable.
     */
    public function getRemoteException(): ?\Throwable
    {
        return $this->remoteException;
    }
}
