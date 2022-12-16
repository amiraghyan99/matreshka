<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Videos extends Component
{
    public function __construct(public array $videos)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.videos');
    }
}
