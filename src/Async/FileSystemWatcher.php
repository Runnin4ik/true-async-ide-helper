<?php
declare(strict_types=1);
namespace Async;
/**
 * A persistent filesystem observer with foreach iteration support.
 *
 * Watches changes in files and directories. Supports event coalescing
 * and recursive monitoring.
 *
 * @implements \IteratorAggregate<int, FileSystemEvent>
 *
 * @see https://true-async.github.io/en/docs/components/filesystem-watcher.html
 */
final class FileSystemWatcher implements \IteratorAggregate
{
    /**
     * Creates a watcher and immediately starts tracking changes.
     *
     * @param string $path Path to a file or directory to watch.
     * @param bool $recursive If true, nested directories are also monitored.
     * @param bool $coalesce If true, events are grouped by path/filename key.
     *
     * @throws \Error If the path does not exist.
     */
    public function __construct(
        string $path,
        bool $recursive = false,
        bool $coalesce = true
    ) {
    }

    /**
     * Stops watching the file system.
     *
     * Iteration via foreach ends after processing remaining buffered events.
     * Idempotent -- repeated calls are safe.
     */
    public function close(): void
    {
    }

    /**
     * Checks whether the watcher has been stopped.
     *
     * @return bool True if the watcher is closed, false if active.
     */
    public function isClosed(): bool
    {
    }

    /**
     * Returns an iterator for use with foreach.
     *
     * Yields FileSystemEvent objects. When the buffer is empty,
     * the coroutine suspends until a new event arrives.
     *
     * @return \Iterator<int, FileSystemEvent>
     */
    public function getIterator(): \Iterator
    {
    }
}
