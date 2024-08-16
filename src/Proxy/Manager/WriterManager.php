<?php

namespace YukataRm\Markdown\Proxy\Manager;

use YukataRm\Markdown\Interface\WriterInterface;
use YukataRm\Markdown\Writer;

/**
 * Writer Proxy Manager
 * 
 * @package YukataRm\Markdown\Proxy\Manager
 */
class WriterManager
{
    /*----------------------------------------*
     * Make
     *----------------------------------------*/

    /**
     * make Writer instance
     *
     * @return \YukataRm\Markdown\Interface\WriterInterface
     */
    public function make(): WriterInterface
    {
        return new Writer();
    }

    /**
     * make Writer instance from path
     * 
     * @param string $path
     * @return \YukataRm\Markdown\Interface\WriterInterface
     */
    public function makeFrom(string $path): WriterInterface
    {
        return $this->make()->setPath($path);
    }

    /*----------------------------------------*
     * Write
     *----------------------------------------*/

    /**
     * write file
     * 
     * @param string $path
     * @param string $content
     * @param bool $useFileAppend
     * @param bool $useLockEx
     * @return bool
     */
    public function write(string $path, string $content, bool $useFileAppend = false, bool $useLockEx = false): bool
    {
        $writer = $this->makeFrom($path)->setContent($content);

        if ($useFileAppend) $writer->useFileAppend();
        if ($useLockEx) $writer->useLockEx();

        return $writer->write();
    }
}
