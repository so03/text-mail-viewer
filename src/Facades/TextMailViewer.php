<?php

namespace Sou\TextMailViewer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sou\TextMailViewer\TextMailViewer
 */
class TextMailViewer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sou\TextMailViewer\TextMailViewer::class;
    }
}
