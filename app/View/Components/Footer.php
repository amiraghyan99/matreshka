<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    public function __construct(public array $socials) {}


    public function render()
    {
        return view('components.footer');
    }
}
