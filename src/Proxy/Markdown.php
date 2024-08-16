<?php

namespace YukataRm\Markdown\Proxy;

use YukataRm\StaticProxy\StaticProxy;

use YukataRm\Markdown\Proxy\Manager;

/**
 * Markdown Proxy
 * 
 * @package YukataRm\Markdown\Proxy
 * 
 * @method static \YukataRm\Markdown\Interface\WriterInterface writer()
 * 
 * @see \YukataRm\Markdown\Proxy\Manager
 */
class Markdown extends StaticProxy
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
