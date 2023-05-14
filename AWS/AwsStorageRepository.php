<?php
namespace Market;
use AwsS3\Client\AwsStorageInterface;

/**
 * Repository for Market's filesystem and static storage.
 */
final class AwsStorageRepository implements FileStorageRepositoryInterface
{
    private AwsStorageInterface $storage;

    public function __construct(AwsStorageInterface $storage)
    {
        $this->storage = $storage;
    }

    /**
     * Returns image URL or null.
     *
     * @param $fileName
     * @return string|null
     */
    public function getUrl($fileName): ?string
    {
        /*...*/
    }
    /**
     * Returns whether file exists or not.
     *
     * @param string $fileName
     * @return bool
     */
    public function fileExists(string $fileName): bool
    {
        /*...*/
    }
    /**
     * Deletes a file in the filesystem and throws an exception in case of errors.
     *
     * @param string $fileName
     * @return void
     */
    public function deleteFile(string $fileName): void
    {
        /*...*/
    }
    /**
     * Saves a file in the filesystem and throws an exception in case of errors.
     *
     * @param string $fileName
     * @return void
     */
    public function saveFile(string $fileName): void
    {
        /*...*/
    }
}