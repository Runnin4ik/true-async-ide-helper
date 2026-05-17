<?php
declare(strict_types=1);

namespace Async;

/**
 * Represents a single file system change event from FileSystemWatcher.
 *
 * @see https://true-async.github.io/en/docs/components/filesystem-watcher.html
 */
final class FileSystemEvent
{
    /**
     * The path passed to the FileSystemWatcher constructor.
     */
    public readonly string $path;

    /**
     * The name of the file that triggered the event, or null.
     */
    public readonly ?string $filename;

    /**
     * True if the file was created, deleted, or renamed.
     */
    public readonly bool $renamed;

    /**
     * True if the file contents were modified.
     */
    public readonly bool $changed;

    /**
     * @param string $path The monitored path.
     * @param string|null $filename The file that triggered the event.
     * @param bool $renamed Whether the file was renamed/created/deleted.
     * @param bool $changed Whether the file contents changed.
     */
    public function __construct(
        string $path,
        ?string $filename = null,
        bool $renamed = false,
        bool $changed = false
    ) {
    }
}
