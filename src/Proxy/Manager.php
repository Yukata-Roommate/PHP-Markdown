<?php

namespace YukataRm\Markdown\Proxy;

use YukataRm\Markdown\Interface\WriterInterface;
use YukataRm\Markdown\Writer;

/**
 * Proxy Manager
 * 
 * @package YukataRm\Markdown\Proxy
 */
class Manager
{
    /**
     * make Writer instance
     *
     * @return \YukataRm\Markdown\Interface\OperatorInterface
     */
    public function writer(): WriterInterface
    {
        return new Writer();
    }
}
