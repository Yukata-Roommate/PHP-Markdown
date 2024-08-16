<?php

namespace YukataRm\Markdown\Proxy;

use YukataRm\StaticProxy\StaticProxy;

use YukataRm\Markdown\Proxy\Manager\WriterManager as Manager;

/**
 * Writer Proxy
 * 
 * @package YukataRm\Markdown\Proxy
 * 
 * @method static \YukataRm\Markdown\Interface\WriterInterface make()
 * @method static \YukataRm\Markdown\Interface\WriterInterface makeFrom(string $path)
 * 
 * @method static bool write(string $path, string $content, bool $useFileAppend = false, bool $useLockEx = false)
 * 
 * @see \YukataRm\Markdown\Proxy\Manager\WriterManager
 */
class Writer extends StaticProxy
{
    /** 
     * get class name calling dynamic method
     * 
     * @return string 
     */
    protected static function getCallableClassName(): string
    {
        return Manager::class;
    }
}
