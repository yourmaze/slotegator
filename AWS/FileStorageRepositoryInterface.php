<?php
namespace Market;

interface FileStorageRepositoryInterface
{
    public function getUrl($fileName): ?string;

    public function fileExists(string $fileName): bool;

    public function deleteFile(string $fileName): void;

    public function saveFile(string $fileName): void;
}