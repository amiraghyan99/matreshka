<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{

    public function __construct(public array $socials, public array $navigations) {}

    public function render()
    {
        return view('components.header');
    }
}
