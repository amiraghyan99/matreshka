<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Intro extends Component
{

    public function __construct( public array $intros)
    {
    }

    public function render()
    {
        return view('components.intro');
    }
}
