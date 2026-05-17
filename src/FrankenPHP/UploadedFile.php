<?php
declare(strict_types=1);
namespace FrankenPHP;
/**
 * Represents a single uploaded file in a FrankenPHP async worker.
 *
 * Returned by Request::getUploadedFiles().
 * Multiple files uploaded under the same field name are returned as an array of UploadedFile objects.
 *
 * @see https://true-async.github.io/en/docs/reference/frankenphp/uploaded-file.html
 */
class UploadedFile
{
    /**
     * Returns the original filename as sent by the client.
     * Never trust this value for storage — always sanitize or generate a safe name.
     *
     * @return string
     */
    public function getName(): string {}

    /**
     * Returns the MIME type reported by the client (e.g. "image/png").
     *
     * @return string
     */
    public function getType(): string {}

    /**
     * Returns the file size in bytes.
     *
     * @return int
     */
    public function getSize(): int {}

    /**
     * Returns the path to the temporary file on disk.
     *
     * @return string
     */
    public function getTmpName(): string {}

    /**
     * Returns the upload error code.
     * UPLOAD_ERR_OK (0) means success.
     *
     * @return int One of the UPLOAD_ERR_* constants.
     * @see https://www.php.net/manual/en/features.file-upload.errors.php
     */
    public function getError(): int {}

    /**
     * Moves the uploaded file to the given destination path.
     *
     * @param string $path Absolute destination path.
     * @return bool True on success.
     */
    public function moveTo(string $path): bool {}
}
