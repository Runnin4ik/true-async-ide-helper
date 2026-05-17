<?php
declare(strict_types=1);

/**
 * STUB NOTE: In the real C-extension this class implements \Throwable directly
 * and does NOT extend \Exception. `catch (\Exception)` will NOT catch it at runtime.
 * The `extends \Exception` here exists solely to satisfy static analyzers.
 *
 * @see https://true-async.github.io/en/docs/components/exceptions.html
 */
class Cancellation extends \Exception
{
}
