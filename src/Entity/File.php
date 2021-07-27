<?php

namespace Miq\ErpnextApi\Entity;

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
}
