<?php

namespace Sou\TextMailViewer;

use Illuminate\Contracts\Renderable;

class TextMailViewer
{
    public function add(Renderable $mailable) {
        $text = $mailable->render();

        return $text;
    }
}
