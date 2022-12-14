<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Gallery extends Component
{
    public function __construct(public array $galleries) {}

    public function render()
    {
        return view('components.gallery');
    }
}
