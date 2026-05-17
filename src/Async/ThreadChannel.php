<?php
declare(strict_types=1);

namespace Async;

/**
 * A thread-safe channel for passing data between OS threads.
 *
 * Unlike Channel, ThreadChannel uses shared memory and mutex-based synchronization.
 * Minimum capacity is 1.
 *
 * @template T
 *
 * @see https://true-async.github.io/en/docs/components/thread-channels.html
 */
final class ThreadChannel implements \Countable
{
    /**
     * Creates a new thread-safe channel.
     *
     * @param int $capacity Buffer size (minimum 1). 0 defaults to an unbuffered channel.
     */
    public function __construct(int $capacity = 0)
    {
    }

    /**
     * Sends a value to the channel.
     *
     * Blocks the calling thread if the buffer is full or if no receiver is ready.
     * The value is deep-copied into shared memory.
     *
     * @param T $value The value to send.
     *
     * @throws \Async\ThreadChannelException If the channel is closed.
     * @throws \Async\ThreadTransferException If the value cannot be serialized.
     */
    public function send(mixed $value): void
    {
    }

    /**
     * Receives the next value from the channel.
     *
     * Blocks the calling thread if no values are available.
     *
     * @return T The received value.
     *
     * @throws \Async\ThreadChannelException If the channel is closed and the buffer is empty.
     */
    public function recv()
    {
    }

    /**
     * Closes the channel.
     *
     * After closing, send() throws ThreadChannelException and recv() drains remaining values.
     *
     * @throws \Async\ThreadChannelException If the channel is already closed (soft error, idempotent).
     */
    public function close(): void
    {
    }

    /**
     * Returns the buffer capacity set at construction time.
     *
     * @return int The channel capacity.
     */
    public function capacity(): int
    {
    }

    /**
     * Returns the current number of values in the buffer.
     *
     * @return int The number of buffered values.
     */
    public function count(): int
    {
    }

    /**
     * Checks whether the buffer is empty.
     *
     * @return bool True if the buffer contains no values.
     */
    public function isEmpty(): bool
    {
    }

    /**
     * Checks whether the buffer is full.
     *
     * @return bool True if the buffer has reached its maximum capacity.
     */
    public function isFull(): bool
    {
    }

    /**
     * Checks whether the channel has been closed.
     *
     * @return bool True if the channel is closed.
     */
    public function isClosed(): bool
    {
    }
}
