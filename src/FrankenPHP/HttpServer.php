<?php
declare(strict_types=1);
namespace FrankenPHP;
/**
 * Entry point for registering an HTTP request handler in a FrankenPHP async worker.
 *
 * The handler callback is called for every incoming HTTP request.
 * Each request runs in its own coroutine — handlers are safe for concurrent execution.
 *
 * Typical entrypoint usage:
 *
 * ```php
 * use FrankenPHP\HttpServer;
 * use FrankenPHP\Request;
 * use FrankenPHP\Response;
 *
 * HttpServer::onRequest(function (Request $request, Response $response): void {
 *     $response->setStatus(200);
 *     $response->write('Hello!');
 *     $response->end();
 * });
 * ```
 *
 * @see https://true-async.github.io/en/docs/frankenphp.html
 */
final class HttpServer
{
    /**
     * Registers the HTTP request handler callback and blocks until the server shuts down.
     *
     * The callback receives a Request and a Response object.
     * Always call $response->end() to complete the response.
     *
     * @param callable(Request, Response): void $callback
     */
    public static function onRequest(callable $callback): void {}

    private function __construct() {}
}
