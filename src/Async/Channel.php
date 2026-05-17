<?php
declare(strict_types=1);
namespace Async;
/**
 * A channel for communication between coroutines.
 *
 * Supports buffered and unbuffered channels, and can be used to send and receive
 * values between coroutines in a structured way.
 *
 * @template T
 * @implements \IteratorAggregate<int, T>
 *
 * @see https://true-async.github.io/en/docs/components/channel.html
 */
final class Channel implements Awaitable, \Countable, \IteratorAggregate
{
    /**
     * @param int $capacity Maximum number of elements in the buffer (0 = unbuffered).
     */
    public function __construct(int $capacity = 0) {}

    /**
     * Sends a value to the channel, suspending the current coroutine until the value is received.
     *
     * @param T $value The value to send.
     * @param Completable|null $cancellationToken Optional cancellation token.
     *
     * @throws ChannelException If the channel is closed.
     * @throws OperationCanceledException If the cancellation token triggered.
     */
    public function send(mixed $value, ?Completable $cancellationToken = null): void {}

    /**
     * Receives a value from the channel, suspending the current coroutine until a value is available.
     *
     * @param Completable|null $cancellationToken Optional cancellation token.
     * @return T
     *
     * @throws ChannelException If the channel is closed and the buffer is empty.
     * @throws OperationCanceledException If the cancellation token triggered.
     */
    public function recv(?Completable $cancellationToken = null) {}

    /**
     * Tries to send a value to the channel without suspending.
     *
     * @param T $value The value to send.
     * @return bool True if the value was sent, false if the buffer is full or the channel is closed.
     */
    public function sendAsync(mixed $value): bool {}

    /**
     * Tries to receive a value from the channel without suspending.
     *
     * @return Future<T> A future that resolves to the received value.
     */
    public function recvAsync(): Future {}

    /**
     * Closes the channel, preventing further sends.
     *
     * All coroutines waiting in send() or recv() receive a ChannelException.
     */
    public function close(): void {}

    /**
     * Returns the capacity of the channel.
     *
     * @return int
     */
    public function capacity(): int {}

    /**
     * Returns the number of elements currently in the channel.
     *
     * @return int
     */
    public function count(): int {}

    /**
     * Returns true if the channel is empty.
     *
     * @return bool
     */
    public function isEmpty(): bool {}

    /**
     * Returns true if the channel is full.
     *
     * @return bool
     */
    public function isFull(): bool {}

    /**
     * Returns true if the channel is closed.
     *
     * @return bool
     */
    public function isClosed(): bool {}

    /**
     * Returns an iterator for consuming the channel.
     *
     * @return \Traversable<int, T>
     */
    public function getIterator(): \Traversable {}
}
