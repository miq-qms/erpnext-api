<?php

namespace Miq\ErpnextApi\Entity;

use DateTime;

/**
 * File
 *
 * Only a helper entity, it has no database relations
 */
class File
{
    /**
     * @var string
     *
     */
    private string $filename;
    /**
     * @var string
     * base64 encoded content
     */
    private string $content;

    /**
     * @var DateTime
     */
    private DateTime $lastModified;

    /**
     * @var int
     */
    private int $size;

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     */
    public function setFilename(string $filename): void
    {
        $this->filename = $filename;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return DateTime
     */
    public function getLastModified(): DateTime
    {
        return $this->lastModified;
    }

    /**
     * @param DateTime $lastModified
     */
    public function setLastModified(DateTime $lastModified): void
    {
        $this->lastModified = $lastModified;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    /**
     * @param string $fileName
     * @return File|null
     */
    public static function create(string $fileName) : ?File
    {
        if(is_file($fileName)) {
            $f = new File();
            $f->setFilename(basename($fileName));
            $f->setContent(base64_encode(file_get_contents($fileName)));
            $f->setSize(filesize($fileName));
            //modification
            $mod = new DateTime();
            $mod->setTimestamp(filemtime($fileName));
            $f->setLastModified($mod);

            return $f;
        }

        return null;
    }
}
