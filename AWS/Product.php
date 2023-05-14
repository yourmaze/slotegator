<?php
namespace Market;
/**
 * Represents a single product record stored in DB.
 */
class Product
{
    /*...*/
    /**
     * @var FileStorageRepositoryInterface
     */
    private FileStorageRepositoryInterface $storage;
    /**
     * @var string
     */
    private string $imageFileName;
    /**
     * @param FileStorageRepositoryInterface $fileStorageRepository
     */
    public function __construct(FileStorageRepositoryInterface $fileStorageRepository)
    {
        $this->storage = $fileStorageRepository;
    }
    /*...*/
    /**
     * Returns product image URL.
     *
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        if ($this->storage->fileExists($this->imageFileName) !== true) {
            return null;
        }
        return $this->storage->getUrl($this->imageFileName);
    }
    /**
     * Returns whether image was successfully updated or not.
     *
     * @return bool
     */
    public function updateImage(): bool
    {
        /*...*/
        try {
            if ($this->storage->fileExists($this->imageFileName) !== true) {
                $this->storage->deleteFile($this->imageFileName);
            }
            $this->storage->saveFile($this->imageFileName);
        } catch (\Exception $exception) {
            /*...*/
            return false;
        }
        /*...*/
        return true;
    }
    /*...*/
}