<?php
declare(strict_types=1);
namespace FrankenPHP;
/**
 * Represents an outgoing HTTP response in a FrankenPHP async worker.
 *
 * Passed as the second argument to the callback registered via HttpServer::onRequest().
 * IMPORTANT: always call end() to send the response, even when the body is empty.
 * write() buffers data in the object; end() sends everything to the client.
 * Omitting end() will hang the request.
 *
 * @see https://true-async.github.io/en/docs/reference/frankenphp/response.html
 */
class Response
{
    /**
     * Sets the HTTP status code. Default is 200.
     *
     * @param int $code
     */
    public function setStatus(int $code): void {}

    /**
     * Returns the current status code.
     *
     * @return int
     */
    public function getStatus(): int {}

    /**
     * Sets a header, replacing any existing values for that name.
     *
     * @param string $name
     * @param string $value
     */
    public function setHeader(string $name, string $value): void {}

    /**
     * Appends a header value.
     * Use for headers that can have multiple values, such as Set-Cookie.
     *
     * @param string $name
     * @param string $value
     */
    public function addHeader(string $name, string $value): void {}

    /**
     * Removes a previously set header.
     *
     * @param string $name
     */
    public function removeHeader(string $name): void {}

    /**
     * Returns the first value of a header, or null if not set.
     *
     * @param string $name
     * @return string|null
     */
    public function getHeader(string $name): ?string {}

    /**
     * Returns all headers as an associative array name => [values...].
     *
     * @return array<string, string[]>
     */
    public function getHeaders(): array {}

    /**
     * Returns true if end() has already been called.
     *
     * @return bool
     */
    public function isHeadersSent(): bool {}

    /**
     * Sets the Location header and the status code.
     * You still need to call end() after.
     *
     * @param string $url
     * @param int $code HTTP redirect status code (default 302).
     */
    public function redirect(string $url, int $code = 302): void {}

    /**
     * Buffers response body data. Can be called multiple times — chunks are concatenated.
     * Data is not sent until end() is called.
     *
     * @param string $data
     */
    public function write(string $data): void {}

    /**
     * Sends the status code, headers, and buffered body to the client.
     * Must be called to complete the response.
     * After end(), further calls to write() or header methods have no effect.
     */
    public function end(): void {}
}
