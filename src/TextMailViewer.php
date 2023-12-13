<?php

namespace Sou\TextMailViewer;

use Illuminate\Contracts\Support\Renderable;

class TextMailViewer
{
    public function add(Renderable $mailable)
    {
        return $mailable->render();
    }
}
