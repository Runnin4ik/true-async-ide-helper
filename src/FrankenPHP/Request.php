<?php
declare(strict_types=1);
namespace FrankenPHP;
/**
 * Represents an incoming HTTP request in a FrankenPHP async worker.
 *
 * Passed as the first argument to the callback registered via HttpServer::onRequest().
 * Provides read-only access to all HTTP request data.
 * Each request coroutine receives its own Request instance — concurrent handlers are safe.
 *
 * @see https://true-async.github.io/en/docs/reference/frankenphp/request.html
 */
class Request
{
    /**
     * Returns the HTTP method: GET, POST, PUT, DELETE, etc.
     *
     * @return string
     */
    public function getMethod(): string {}

    /**
     * Returns the full request URI including the query string (e.g. /api/users?page=2).
     *
     * @return string
     */
    public function getUri(): string {}

    /**
     * Returns a single header value by name, or null if the header is not present.
     * Header names are case-insensitive.
     *
     * @param string $name
     * @return string|null
     */
    public function getHeader(string $name): ?string {}

    /**
     * Returns all headers as an associative array name => value.
     * When a header has multiple values they are joined with ", ".
     *
     * @return array<string, string>
     */
    public function getHeaders(): array {}

    /**
     * Returns the full request body as a string.
     * The body is read once and cached — subsequent calls return the same value.
     *
     * @return string
     */
    public function getBody(): string {}

    /**
     * Returns the parsed and URL-decoded query string as an associative array.
     *
     * @return array<string, string>
     */
    public function getQueryParams(): array {}

    /**
     * Returns cookies parsed from the Cookie header as an associative array name => value.
     *
     * @return array<string, string>
     */
    public function getCookies(): array {}

    /**
     * Returns the value of the Host header.
     *
     * @return string
     */
    public function getHost(): string {}

    /**
     * Returns the client address in ip:port format.
     *
     * @return string
     */
    public function getRemoteAddr(): string {}

    /**
     * Returns "http" or "https".
     *
     * @return string
     */
    public function getScheme(): string {}

    /**
     * Returns the HTTP protocol version, e.g. "HTTP/1.1" or "HTTP/2.0".
     *
     * @return string
     */
    public function getProtocolVersion(): string {}

    /**
     * Returns form fields from application/x-www-form-urlencoded and multipart/form-data bodies
     * as an associative array.
     *
     * @return array<string, mixed>
     */
    public function getParsedBody(): array {}

    /**
     * Returns uploaded files as an array of UploadedFile objects.
     * Multiple files for the same field are returned as an array.
     *
     * @return array<string, UploadedFile|UploadedFile[]>
     */
    public function getUploadedFiles(): array {}
}
